
<?php
error_reporting(0);
session_start();
$ses_id = session_id();

$host = 'localhost';
$username = 'web2te_craft-india';
$password = 'q_JYXa**FK6j';
$dbName = 'web2te_craft-india';



$conn = new mysqli($host,$username,$password,$dbName);
if($conn->connect_errno)
{
	echo $conn->connect_error;
}


//$site_root = 'https://'.$_SERVER['HTTP_HOST'].'/';
$site_root = 'https://web2tech.org/craft-india/admin';
$site = 'https://web2tech.org/craft-india/';

?>