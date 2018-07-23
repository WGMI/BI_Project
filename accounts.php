<?php include 'core/init.php';?>
<?php include 'includes/head.php';?>

<h2>Access Accounts</h2>

<div align="right">
                        <a href="addaccount.php" title="Add account"
                                class="btn btn-dark"><i class="fa fa-plus"></i>&nbsp Add Account</a>


                    </div>
<br>
<br>
<table id="smart_table" class="smart_table display table table-striped table-bordered"
                               cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email/Username</th>
                                <th>Organization</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>Account Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
            <?php
			$query = mysqli_query($conn,"select * from access");
			
			function type($type){
				return ($type) ? 'Administrator':'Regular User';
			}

			function active($active){
				return ($active) ? 'Active':'Inactive';
			}
			
			while($row = mysqli_fetch_assoc($query)){
				
			echo '
			<tr>
				<td>'.$row['name'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['organization_id'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['created_at'].'</td>
				<td>'.active($row['status']).'</td>
			</tr>
			';
			}
			?>
        </tbody>
                        </table>

<?php include 'includes/footer.php';?>
