<?php 

$conn = mysqli_connect('localhost','root','','pibi');

function report_details($id){
	global $conn;
	$query = mysqli_query($conn,"select * from reports where id = $id");
	return $row = mysqli_fetch_assoc($query);
}

function is_logged_in(){
	if(isset($_SESSION['id'])){
		header('Location: home.php');
	}
}

function sanitize($data){
	global $conn;
	return mysqli_real_escape_string($conn,$data);
}

function output_errors($errors){
	return '<ul><li>'.implode('</li><li>',$errors).'</li></ul>';
}

?>	