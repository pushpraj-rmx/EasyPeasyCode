<?php
// error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
date_default_timezone_set('Asia/Kolkata');
define('BASE_URL', 'http://localhost/EasyPeasyCode/panel/');
define('BASE_URL_IMG', 'http://localhost/EasyPeasyCode/panel/images/');
$conn=mysqli_connect('localhost','root','','easypeasy_panel');
if(!$conn)
{
	die('Database Connection Failed !');
}

$date=date('d-m-Y').' '.date('h:m:s');

?>
