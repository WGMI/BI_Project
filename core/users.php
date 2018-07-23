<?php 

$conn = mysqli_connect('localhost','root','','pibi');

function user_data($id){
	global $conn;
	$data = array();
	$id = (int)$id;
	
	return $data = mysqli_fetch_assoc(mysqli_query($conn,"select * from access where access_id = $id"));	
}

function user_active($email){
	global $conn;
	$query = mysqli_query($conn,"select status from access where email = '$email'");
	if($row = mysqli_fetch_assoc($query)){
		return $row['status'];
	} else{
		return 0;
	}
}

function user_id_from_email($email){
	global $conn;
	$username = sanitize($email);
	$query = mysqli_query($conn,"select access_id from access where email = '$email'");
	if($row = mysqli_fetch_assoc($query)){
		$id = $row['access_id'];
	}
	return $id;
}

function login($username,$password){
	global $conn;
	$id = user_id_from_email($username);
	$username = sanitize($username);
	$password = md5($password);
	$num = 0;
	$query = mysqli_query($conn,"select count(access_id) as num from access where email = '$username' and password = '$password'");
	if($row = mysqli_fetch_assoc($query)){
		$num = $row['num'];
	}
	return ($num) ? $id:false;
}

function logged_in(){
	return (isset($_SESSION['access_id'])) ? true:false;
}

function email_exists($email){
	global $conn;
	$num = 0;
	$email = sanitize($email);
	$query = mysqli_query($conn,"select count(access_id) as num from access where email = '$email'");
	if($row = mysqli_fetch_assoc($query)){
		$num = $row['num'];
	}
	return ($num) ? true:false;
}

function protect(){
	if(!logged_in()){
		header('Location: login.html');
	}
}

?>	