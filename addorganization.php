<?php include 'core/init.php';?>
<?php include 'includes/head.php';?>

<h2>Add Organization</h2>

<form accept-charset="UTF-8"  enctype='multipart/form-data' action="add.php" method="post">

	<div class="modal-content">
	
	<div class="modal-header">
		<a style="float: right;" href="organizations.php"
		class=" btn btn-default">
		<i class="fa fa-chevron-left"></i> Back to Organizations Listing
		</a>

		<h4 class="modal-title"><i class="fa fa-plus"></i> New Organization
		</h4>
	</div>
	<div class="modal-body">


	<div class="row">
		<div class="col-lg-8">
			<fieldset class="form-group">
			<label class="form-label semibold" for="organization_name">Organization Name</label>
			<input value="" required="required" type="text"
			name="organization_name" id="organization_name"
			class="form-control" placeholder="Organization Name">

			</fieldset>
	</div>

	</div>


	<div class="row">
		<div class="col-lg-8">
		<fieldset class="form-group">
		<label class="form-label semibold" for="organization_short_name">Organization Short Name</label>
		<input value="" required="required"
		type="text"
		name="organization_short_name" id="organization_short_name"
		class="form-control" placeholder="Organization Short Name">

		</fieldset>
	</div>

	</div>


	<div class="row">
		<div class="col-lg-8">
		<fieldset class="form-group">
		<label class="form-label semibold" for="email_address">Email Address</label>
		<input value="" required="required" type="email"
		name="email" id="email_address"
		class="form-control" placeholder="Email Address">
		<small class="text-muted">Will be the username and for the organization admin</small>
		</fieldset>
		</div>

	</div>


	<div class="row">
		<div class="col-lg-8">
		<fieldset class="form-group">
		<label class="form-label semibold" for="phone_number">Phone Number</label>
		<input value="" required="required" type="text"
		name="phone_number" id="phone_number"
		class="form-control" placeholder="Phone Number">

		</fieldset>
	</div>

	</div>
	
	<div class="row">
		<div class="col-lg-8">
		<fieldset class="form-group">
		<label class="form-label semibold" for="max_accounts">Max Accounts</label>
		<input value="" required="required" type="number" min="1"
		name="max_accounts" id="max_accounts"
		class="form-control" placeholder="Max Number of Accounts">
		<small class="text-muted">The maximum number of accounts an organization admin can create</small>

		</fieldset>
		</div>

	</div>

	<div class="modal-footer">
		<div class="col-lg-6">
		<button type="submit" class="btn btn-primary"><i class="fa fa-send-o"></i>
		Submit
		</button>
		</div>
	</div>

</form>


                </div>
                <!--.row-->

                <!--.row-->
            </div>


<?php include 'includes/footer.php';?>
