<?php include 'core/init.php';?>
<?php include 'includes/head.php';

if(!logged_in()){
	?>
	
	<div class="alert alert-success">
		Welcome to PI-BI. <a href="login.html">Please sign in.</a>
	</div>
	
	<?php
} else{

?>

<h2>Dashboard</h2>

<?php

$report_query = mysqli_query($conn,"select count(id) as num from reports");
$acc_query = mysqli_query($conn,"select count(access_id) as num from access");
$org_query = mysqli_query($conn,"select count(organization_id) as num from organizations");
$report_row = mysqli_fetch_assoc($report_query);
$acc_row = mysqli_fetch_assoc($acc_query);
$org_row = mysqli_fetch_assoc($org_query);

if($user_data['access_type'] < 9){
	?>
	
	<div class="col-xs-6">
                        <section class="widget widget-simple-sm-fill" style="background-color:#05a5ff; color:#fff;">
                            <div class="widget-simple-sm-icon">
                                <i class="fa fa-bell-o"></i>
                            </div>
                            <h3>Unseen Reports</h3>
                            <div class="widget-simple-sm-fill-caption">

                                9 Reports

                            </div>
                        </section>
                    </div>


                    <div class="col-xs-6">
                        <section class="widget widget-simple-sm-fill" style=" background-color:#05a5ff; color:#fff;">
                            <div class="widget-simple-sm-icon">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <h3> Report Count</h3>
                            <div class="widget-simple-sm-fill-caption">
                                10 Reports


                            </div>
                        </section>
                    </div>





                        <div class="col-xs-6">
                            <section class="widget widget-simple-sm-fill" style=" background-color:#05a5ff;">
                                <div class="widget-simple-sm-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <h3> Accounts</h3>
                                <div class="widget-simple-sm-fill-caption">
            15  Active Accounts

                                </div>
                            </section>
                        </div>






                    <div class="col-xs-6">
                        <section class="widget widget-simple-sm-fill" style=" background-color:#05a5ff; color:#fff;">
                            <div class="widget-simple-sm-icon">
                                <i class="fa fa-clone"></i>
                            </div>
                            <h3> Category Count</h3>
                            <div class="widget-simple-sm-fill-caption">



                                
                                    

                                    3 Categories

                                

                            </div>
                        </section>
                    </div>
	
	<?php
} else{

?>

<div class="row">

                    <a href="https://pi-bi.io/pwi/organizations">
                        <div class="col-xs-6">
                            <section class="widget widget-simple-sm-fill" style="background-color:#F25022; color:#fff;">
                                <div class="widget-simple-sm-icon">
                                    <i class="fa fa-bank"></i>
                                </div>
                                <h3> Organization Count</h3>
                                <div class="widget-simple-sm-fill-caption">
                                    <?php echo $org_row['num'];?> Organizations


                                </div>
                            </section>
                        </div>
                    </a>


                    <a href="https://pi-bi.io/pwi/accounts">
                        <div class="col-xs-6">
                            <section class="widget widget-simple-sm-fill" style="background-color:#7FBA00; color:#fff;">
                                <div class="widget-simple-sm-icon">
                                    <i class="fa fa-key"></i>
                                </div>
                                <h3> Active Accounts</h3>
                                <div class="widget-simple-sm-fill-caption">

                                    <?php echo $acc_row['num'];?> Accounts

                                </div>
                            </section>
                        </div>
                    </a>
					
                    <a href="https://pi-bi.io/pwi/datasets">
                        <div class="col-xs-6">
                            <section class="widget widget-simple-sm-fill" style="background-color:#F3C810; color:#000;">
                                <div class="widget-simple-sm-icon">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <h3>Active Power BI Reports</h3>
                                <div class="widget-simple-sm-fill-caption">
                                    <?php echo $report_row['num']?> Reports
                                </div>
                            </section>
                        </div>
                    </a>
					
					<a href="https://pi-bi.io/pwi/workspaces">
                        <div class="col-xs-6">
                            <section class="widget widget-simple-sm-fill" style="background-color:#0072C6;">
                                <div class="widget-simple-sm-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                                <h3> Datasets In Use</h3>
                                <div class="widget-simple-sm-fill-caption">
                                    <?php echo $report_row['num']?> Datasets

                                </div>
                            </section>
                        </div>
                    </a>

<?php 
	}

}

include 'includes/footer.php';?>
