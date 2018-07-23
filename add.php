<?php

include 'core/init.php';

$response = array("error" => FALSE);

if (isset($_POST['organization_name']) && isset($_POST['email']) && isset($_POST['max_accounts'])
    && isset($_POST['phone_number']) && isset($_POST['organization_short_name'])) {

    $org_name = $_POST['organization_name'];
    $org_email = $_POST['email'];
    $org_phone = $_POST['phone_number'];
    $org_short_name = $_POST['organization_short_name'];
    $org_max_accounts = $_POST['max_accounts'];

    # create a new org
    $org = mysqli_query($conn,"insert into organizations values(NULL,'$org_name', '$org_email', '$org_phone', '$org_short_name', '$org_max_accounts',current_timestamp(),current_timestamp())");

    
    if ($org) {
        header("Location: organizations.php?success=1");
    } else {
        echo mysqli_error($conn);
    }
}

?>