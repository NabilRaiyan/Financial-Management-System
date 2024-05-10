<?php

$business_owner_name=$business_name=$business_email=$business_pass=$business_type=$business_tin_num= '';
$business_owner_name_error=$business_name_error=$business_email_error=$business_pass_error=$business_type_error=$business_tin_num_error=$hasError= '';

if (isset($_REQUEST['Submit'])){
    // owner-name validation
    if (strlen($_REQUEST['owner-name']) < 0){
        $business_owner_name_error = "Please enter business owner name";
        $hasError = 1;
    }elseif(strlen($_REQUEST['owner-name']) < 4){
        $business_owner_name_error = "Owner name should atleast 4 character long";
        $hasError = 1;
    }else{
        $business_owner_name = $_REQUEST["owner-name"];
    }


    // password validation
    if (empty($_REQUEST['registration-password'])){
        $business_pass_error = "Please enter password";
        $hasError = 1;
    }elseif(strlen($_REQUEST['registration-password']) < 4){
        $business_pass_error = "Password should atleast 8 character long";
        $hasError = 1;
    }
    elseif(!preg_match('/[A-Z]/', $_REQUEST["registration-password"])){
        $business_pass_error = "Password must contain atleast one uppercase";
        $hasError = 1;
    }
    else{
        $business_pass = $_REQUEST["registration-password"];
    }
}

?>