<?php
session_start();
include 'dbConnection.php';

$daysquery=("SELECT DISTINCT days FROM assessment");
$days=mysqli_query($con, $daysquery)or die('Error231');

    while ($rowGetAllDays = mysqli_fetch_array($days))
    {
        $numDays=$rowGetAllDays['days'];
        echo $numDays;
//Fetch list of candidates compliting 30 days from joining date
$queryGetAllCandidates = "SELECT  user.uid as uid,user.name as name ,user.uname as uname,department.id as department from user join department where  user.department=department.id and DATEDIFF(CURRENT_DATE(), joindate)=$numDays;";//Todo: Below 60
$resultGetAllCandidates = mysqli_query($con, $queryGetAllCandidates)or die('Error231');

if(mysqli_num_rows($resultGetAllCandidates) > 0){

    while ($rowGetAllCandidates = mysqli_fetch_array($resultGetAllCandidates)) {
    
        //Fetching candidates details
        $candidateId = $rowGetAllCandidates['uid'];
        $candidateName = $rowGetAllCandidates['name'];
        $candidateDepartment = $rowGetAllCandidates['department'];
        $candiateEmail = $rowGetAllCandidates['uname'];
        
        echo "Candidate Name:".$candidateName."; department:".$candidateDepartment;

        //Randomly fetch assessment departmentwise
        $queryRandAssessment = "SELECT assessment.AssessmentId as AssessmentId ,assessment.assessmentDescription as assessmentDescription,
        assessment.subjectName as subjectName ,department.dptName as department  FROM assessment  join department where assessment.department=department.id and  assessment.department = '$candidateDepartment' and assessment.days=$numDays ORDER BY RAND() LIMIT 1";
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
            //echo $queryAllocateAssessment;
            if(mysqli_query($con, $queryAllocateAssessment) or die('Error231')){
                echo "\nAssessment allocated successfully to..".$candidateName;

                //email to candidate
                $emailSubject = "[SpacECE Internship] Assessment";
                $emailBody='<p><span style="font-size: 16px;">Hello '.$candidateName.'!.</span></p>
                <p><span style="font-size: 16px;">We are happy that you successfully completed your one month of prestigious SpacECE Internship. We are looking forward to long term association with our candidates.</span></p>
                <p><span style="font-size: 16px;">This is mid-term assessement time. Please take a note that this is a mandatory component of internship. If you fail to complete this assesssment then your internship may get terminated.</span></p>
                <p><span style="font-size: 16px;">Please complete following assessment form.</span></p>
                <p><strong><a class="pull-right btn sub1" href="'.$assessmentDescription.'" style="font-size: 32px;"><strong><span style="font-size: 30px;">Click Here</span></strong></a></strong></p>
                <p><span style="font-size: 16px;">Best wishes!!!</span></p>
                <p><span style="font-size: 16px;">Thanks and Regards,</span></p>
                <p><span style="font-size: 16px;">Talent Acquisition</span></p>
                <p><span style="font-size: 16px;">+91 9096305648</span></p>
                <p><span style="font-size: 16px;">hr@spacece.co</span></p>';
                // $emailSubject = "[SpacECE Internship] Assessment";
                // $emailBody = "Your Assessment is as following..\nTitle:".$assesmentTitle."\nAssessment Description:".$assessmentDescription;
                // echo "\nEmail Subject:".$emailSubject;
                // echo "\nEmail body:".$emailBody;
            
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
}