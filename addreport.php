<?php include 'core/init.php';?>

<?php

if(!empty($_POST)){
	$org = $_POST['organization'];
	$name = $_POST['name'];
	$url = $_POST['url'];
	
	$sql = "insert into reports values(NULL,'$name',$org,'$url')";
	
	$query = mysqli_query($conn,$sql);
	
	if($query){
		header('Location: pbireports.php?success');
	}else{
		echo mysqli_error($conn);
	}
	
}

?>

<?php include 'includes/head.php';?>

<h2>Add Report</h2>

<form accept-charset="UTF-8" action="" method="post">

                        <div class="modal-content">
                            <div class="modal-header">
                                <a style="float: right;" href="datasets.php"
                                   class=" btn btn-default">
                                     <i class="fa fa-chevron-left"></i>&nbsp Back to Reports
                                </a>

                                <h4 class="modal-title">New Report
                                </h4>
                            </div>
                            <div class="modal-body">



                                <div class="row">
                                    <div class="col-lg-8">
                                        <label for="organization" class="form-label semibold">Select Target Organization</label>
                                        <select id="organization" name="organization"
                                                class="select2 organization">
                                                                                                                                                <option value="1">Pathways International</option>
                                                                                                    <option value="4">Wana Brands</option>
                                                                                                    <option value="5">KenEl</option>
                                                                                                    <option value="6">Bank BI</option>
                                                                                                    <option value="7">KL REALTY</option>
                                                                                                    <option value="8">Netclearance</option>
                                                                                                    <option value="9">Roots RX</option>
                                                                                                    <option value="10">The Clinic</option>
                                                                                                    <option value="11">Casenet</option>
                                                                                                                                    </select>
                                        <br/>
                                        <br/>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-lg-8">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="name">Name</label>
                                            <input spellcheck="false" value="" required="required"
                                                   type="text"
                                                   name="name" id="name"
                                                   class="form-control" placeholder="Name">
                                            <small class="text-muted"></small>

                                        </fieldset>
                                    </div>

                                </div>
								
								<div class="row">
                                    <div class="col-lg-8">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="url">URL</label>
                                            <input spellcheck="false" value="" required="required"
                                                   type="text"
                                                   name="url" id="url"
                                                   class="form-control" placeholder="URL">
                                            <small class="text-muted"></small>

                                        </fieldset>
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
