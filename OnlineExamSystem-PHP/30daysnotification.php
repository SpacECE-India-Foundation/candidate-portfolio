<?php
session_start();
include 'dbConnection.php';

//Fetch list of candidates compliting 30 days from joining date
$queryGetAllCandidates = "SELECT  user.uid as uid,user.uname as uname,department.id as department from user join department where  user.department=department.id and DATEDIFF(CURRENT_DATE(), joindate)>30;";//Todo: Below 60
$resultGetAllCandidates = mysqli_query($con, $queryGetAllCandidates)or die('Error231');

if(mysqli_num_rows($resultGetAllCandidates) > 0){

    while ($rowGetAllCandidates = mysqli_fetch_array($resultGetAllCandidates)) {
    
        //Fetching candidates details
        $candidateId = $rowGetAllCandidates['uid'];
        $candidateName = $rowGetAllCandidates['uname'];
        $candidateDepartment = $rowGetAllCandidates['department'];
        $candiateEmail = $rowGetAllCandidates['uname'];
        
        echo "Candidate Name:".$candidateName."; department:".$candidateDepartment;

        //Randomly fetch assessment departmentwise
        $queryRandAssessment = "SELECT assessment.AssessmentId as AssessmentId ,assessment.assessmentDescription as assessmentDescription,
        assessment.subjectName as subjectName ,department.dptName as department  FROM assessment  join department where assessment.department=department.id and  assessment.department = '$candidateDepartment' ORDER BY RAND() LIMIT 1";
       // echo $queryRandAssessment;
        $resultRandAssessment = mysqli_query($con, $queryRandAssessment)or die('Error2312');
        $rowRandAssessment = mysqli_fetch_array($resultRandAssessment);

        //Assign the assignment to candidates
        if (mysqli_num_rows($resultRandAssessment) > 0) {
            
            //Fetching assessment details
            $assesmentId = $rowRandAssessment['AssessmentId'];
            $assessmentDescription = $rowRandAssessment['assessmentDescription'];
            $assesmentTitle = $rowRandAssessment['subjectName'];
            $assesmentDepartment = $rowRandAssessment['department'];

            echo "; Assessment:".$assesmentId."\n";
          
            date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
          
            $Date =  date('Y-m-d');
           $submission_date= date('Y-m-d', strtotime($Date. ' + 15 days'));



           // $queryAllocateAssessment = "UPDATE user SET assesment1id = '$assesmentId' WHERE uid = '$candidateId'";
            $queryAllocateAssessment = "INSERT INTO `userassessment` ( `assessmentId`,  `submissionDate`, `user_id`) 
            VALUES ('$assesmentId', '$submission_date','$candidateId')";
            echo $queryAllocateAssessment;
            if(mysqli_query($con, $queryAllocateAssessment) or die('Error231')){
                echo "\nAssessment allocated successfully to..".$candidateName;

                //email to candidate
                $emailSubject = "[SpacECE Internship] Assessment";
                $emailBody = "Your Assessment is as following..\nTitle:".$assesmentTitle."\nAssessment Description:".$assessmentDescription;
                echo "\nEmail Subject:".$emailSubject;
                echo "\nEmail body:".$emailBody;
            
                //Email header
                // a random hash will be necessary to send mixed content
                $separator = md5(time());

                $eol = "\r\n";
                // main header (multipart mandatory)
                $headers = "From: 'SpacActive' <'contactus@spacece.co'>" . $eol;
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                 
                mail($candiateEmail, $emailSubject, $emailBody, $headers);
            }

        }//if (mysqli_num_rows($resultRandAssessment) > 0) {
        else{
            echo "Assessment: Nothing";
        }
    }//while ($row = mysqli_fetch_array($resultRandAssessment)) {
}//if(mysqli_num_rows($resultGetAllCandidates) > 0){
