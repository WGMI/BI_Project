<?php include 'core/init.php';?>
<?php include 'includes/head.php';

protect();

$report = report_details($_GET['report']);

if($report['organization'] != $user_data['organization_id']){
	if($user_data['access_type'] != 9){
		session_destroy();
		header('Location: login.html');
	}
}

?>

<h2><?php echo $report['name'];?></h2>

<div class="col-xs-12" style="height:15px;"></div>

<iframe width="1000" height="600" src="<?php echo $report['url'] ?>" frameborder="0" allowFullScreen="true" style="margin: 0 auto;display:block"></iframe>

<?php include 'includes/footer.php';?>
