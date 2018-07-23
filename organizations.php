<?php include 'core/init.php';?>
<?php include 'includes/head.php';?>

<h2>Organizations</h2>

<div align="right">
                        <a href="addorganization.php" title="Add account"
                                class="btn btn-dark"><i class="fa fa-plus"></i>&nbsp Add Organization</a>


                    </div>
<br>
<br>



                        <table id="smart_table" class="smart_table display table table-striped table-bordered"
                               cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Organization Name</th>
                                <th>Email</th>
                                <th>Max Accounts</th>
                                <th>Report Count</th>
                                <th>Date Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
							<?php
							$query = mysqli_query($conn,"select * from organizations");
							
							function report_count($id){
								return $id;
							}
							
							while($row = mysqli_fetch_assoc($query)){
								echo '
									<tr>
										<td>'.$row['org_name'].'</td>
										<td>'.$row['org_email'].'</td>
										<td>'.$row['max_accounts'].'</td>
										<td>'.report_count($row['organization_id']).'</td>
										<td>'.$row['created_at'].'</td>
										<td><a href="" class="btn btn-info"><i class="fa fa-newspaper-o"></i> View Profile</a></td>
									</tr>
								';
							
							}
							?>
						</tbody>
                        </table>
                    <?php include 'includes/footer.php';?>