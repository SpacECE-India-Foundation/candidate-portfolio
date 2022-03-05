<?php
defined('server') ? null : define("server", "3.109.14.4");
defined('user') ? null : define ("user", "ostechnix") ;
defined('pass') ? null : define("pass","Password123#@!");
defined('database_name') ? null : define("database_name", "candidate_portal") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>