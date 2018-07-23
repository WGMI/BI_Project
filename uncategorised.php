<?php 

include 'core/init.php';
include 'includes/head.php';

protect();

$user_id = $user_data['access_id'];

$org_query = mysqli_query($conn,"select organization_id from access where access_id = $user_id");
$row = mysqli_fetch_assoc($org_query);
$organization_id = $row['organization_id'];
$report_query = mysqli_query($conn,"select * from reports where organization = $organization_id");

?>

<h2>Uncategorised Reports</h2>

<?php

while($row = mysqli_fetch_assoc($report_query)){

?>

<div class='col-lg-4'>
	<div class='card' style='border-left:6px solid #7F98A6; '>
		<div class='card-block'>
			<h4 class='card-title' style='word-wrap: break-word;'><?php echo $row['name']?></h4>
			<p class='card-text' ></p>
			<a href='report.php?report=<?php echo $row['id']?>' class='btn report_button' style='background-color:#7F98A6; border:0;'><i class='fa fa-external-link'></i> View Report</a>
		</div>
	</div>
</div>



<?php 

}

include 'includes/footer.php';?>
