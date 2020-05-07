<?php
@session_start();

//Establish Database Connection
$host="localhost";
$user="root";
$pass="";

$conn=mysql_connect($host,$user,$pass) or die(mysql_error());

$db="db_smartvilla";
mysql_select_db($db,$conn);

mysql_query("SET NAMES 'utf8'",$conn);
// Database Connection End

//site confuguration
//include 'myplugin/function/function.php';


?>