<?php include 'core/init.php';?>
<?php include 'includes/head.php';?>

<h2>Power BI Reports</h2>

<div align="right">
                        <a href="addreport.php" title="Add account"
                                class="btn btn-dark"><i class="fa fa-plus"></i>&nbsp Add Report</a>


                    </div>
<br>
<br>
<table id="smart_table" class="smart_table display table table-striped table-bordered"
                               cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Report Name</th>
                                <th>Organization</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot class="hide hidden">
                            <tr>
                                <th>Report Name</th>
                                <th>Organization</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>


									<?php
									$query = mysqli_query($conn,"select * from reports");
									
									while($row = mysqli_fetch_assoc($query)){
										
									echo '
									<tr>
										<td>'.$row['name'].'</td>
										<td>'.$row['organization'].'</td>
										<td><a href="report.php?report='.$row['id'].'" class="btn btn-success">Manage</a></td>
                                        <td>
                                            <a href="report.php?delete='.$row['id'].'" class="btn btn-danger">Delete</a></td>
									</tr>
									';
									}
									?>
							 </tbody>
                        </table>		
							

<?php include 'includes/footer.php';?>
