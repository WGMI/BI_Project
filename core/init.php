<?php 

session_start();

include 'users.php';
include 'general.php';

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pibi';

$conn = mysqli_connect($host,$user,$pass,$db);

if(logged_in()){
	$session = $_SESSION['access_id'];
	$user_data = user_data($session);
}

?>