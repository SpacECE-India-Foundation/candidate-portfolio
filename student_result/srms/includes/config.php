<?php 
// DB credentials.
define('DB_HOST','3.109.14.4');
define('DB_USER','ostechnix');
define('DB_PASS','Password123#@!');
define('DB_NAME','candidate_portal');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>