<?php
/* Database config */
$db_host		= '3.109.14.4';
$db_user		= 'ostechnix';
$db_pass		= 'Password123#@!';
$db_database	= 'candidate_portal'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>