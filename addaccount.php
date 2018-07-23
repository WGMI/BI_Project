<?php include 'core/init.php';

admin_only();

$org_query = mysqli_query($conn,"select organization_id, org_name from organizations");

if(!empty($_POST)){
	$org = $_POST['organization'];
	$type = $_POST['account_type'];
	$email = $_POST['email'];
	$pass = md5($_POST['password']);
	$name = $_POST['name'];
	$status = $_POST['account_status'];
	
	$sql = "
	INSERT INTO `access` 
	(`name`, `email`, `password`, `organization_id`, `access_type`, `notify_new_comment`, `notify_new_report`, `status`, `created_at`, `updated_at`) VALUES
	('$name', '$email', '$pass', $org, $type, 1, 1, $status, now(), NULL)
	";
	
	$query = mysqli_query($conn,$sql);
	
	if($query){
		header('Location: accounts.php?success');
	}
	
}

?>

<?php include 'includes/head.php';?>

<h2>Add Accounts</h2>

<form accept-charset="UTF-8"  enctype='multipart/form-data' action="" method="post">

                        <div class="modal-content">
                            <div class="modal-header">
                                <a style="float: right;" href="accounts.php"
                                   class=" btn btn-default">
                                     <i class="fa fa-chevron-left"></i>&nbsp Back to Accounts Listing
                                </a>

                                <h4 class="modal-title">Adding an Account
                                </h4>
                            </div>
                            <div class="modal-body">



                                <div class="row">
                                    <div class="col-lg-8">
                                        <label for="organization" class="form-label semibold">Select Target Organization</label>
                                        <select id="organization" name="organization" class="select2 organization">
												<option value="0" select disabled selected="selected">Select Organization</option>
												<?php
												
												while($row = mysqli_fetch_assoc($org_query)){
													echo '<option value="'.$row['organization_id'].'">'.$row['org_name'].'</option>';
												}
										
												?>
										</select>
                                        <br/>
                                        <br/>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="account_type" class="form-label semibold">Account Type</label>
                                        <select id="account_type" name="account_type"
                                                class="select2 account_type">
                                            <option value="0">Organization Account (Normal Account)</option>
                                            <option value="1">Organization Admin</option>
                                        </select>
                                        <br/>
                                        <br/>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-8">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="email_address">Account Email Address</label>
                                            <input spellcheck="false" value="" required="required" type="email"
                                                   name="email" id="email_address"
                                                   class="form-control" placeholder="Email Address">
                                            <small class="text-muted">Will be the username for login purposes</small>
                                        </fieldset>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-lg-8">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="password">Account Password</label>
                                            <input minlength="3" maxlength="250" value="" type="password"
                                                   name="password" id="password"
                                                   class="form-control" placeholder="Account Password">
                                        </fieldset>
                                    </div>

                                </div>



                                <div class="row">
                                    <div class="col-lg-8">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="organization_short_name">Name of account holder</label>
                                            <input spellcheck="false" value="" required="required"
                                                   type="text"
                                                   name="name" id="name"
                                                   class="form-control" placeholder="Name">
                                            <small class="text-muted"></small>

                                        </fieldset>
                                    </div>

                                </div>

                                

                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="account_status" class="form-label semibold">Account Status</label>
                                        <select id="account_status" name="account_status"
                                                class="select2 account_status">
                                                <option value="1">Active</option>
                                                <option value="5">Disabled</option>
                                        </select>
                                        <br/>
                                        <br/>
                                    </div>
                                </div>




                                <div class="modal-footer">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>

                    </form>

<?php include 'includes/footer.php';?>
