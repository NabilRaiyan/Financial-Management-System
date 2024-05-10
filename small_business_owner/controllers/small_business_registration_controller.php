<?php

include "../models/small_business_db.php";

$business_owner_name=$business_name=$business_email=$business_pass=$business_type=$business_bin_num=$business_confirm_pass=$business_monthly_income= '';
$business_owner_name_error=$business_name_error=$business_email_error=$business_pass_error=$business_confirm_pass_error=$business_type_error=$business_bin_num_error=$hasError=$business_monthly_income_error= '';
$registration_success_message=$registration_error_message = '';


// validation registration form for small business owner
if (isset($_REQUEST['Submit'])){
    // owner name validation
    if (strlen($_REQUEST['owner-name']) < 0){
        $business_owner_name_error = "Please enter business owner name";
        $hasError = 1;
    }elseif(strlen($_REQUEST['owner-name']) < 4){
        $business_owner_name_error = "Owner name should atleast 4 character long";
        $hasError = 1;
    }
    elseif(preg_match('/[$, @, &, % , #]/', $_REQUEST["owner-name"])){
        $business_owner_name_error = "Owner name should not contain any special character";
        $hasError = 1;
    }
    else{
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
    elseif(!preg_match('/[$, @, &, % , #]/', $_REQUEST["registration-password"])){
        $business_pass_error = "Password must contain atleast one of these special character [$, @, &, % , #]";
        $hasError = 1;
    }
    else{
        $business_pass = $_REQUEST["registration-password"];
    }

    // email validation
    if (!empty($_REQUEST["registration-email"])){
        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@(gmail+\.)+com$/ix", $_REQUEST["registration-email"])){
            $business_email_error = "Please enter a valid email";
            $hasError = 1;
        }else {
            $business_email = $_REQUEST["registration-email"];
        }
    }else{
        $business_email_error = "Please enter email";
        $hasError = 1;
    }

    // confirm password validation
    if (!empty($_REQUEST['registration-confirm-password'])){
        if ($_REQUEST["registration-password"] === $_REQUEST["registration-confirm-password"]){
            $business_confirm_pass = $_REQUEST["registration-confirm-password"];
        }else{
            $business_confirm_pass_error = "Password does not match";
            $hasError = 1;
        }
    }else{
        $business_confirm_pass_error = "Please enter password";
        $hasError = 1;
    }

        // bin number validation
        if (empty($_REQUEST['registration-bin-number'])){
            $business_bin_num_error = "Please enter bin number";
            $hasError = 1;
        }else{
            if (is_numeric($_REQUEST['registration-bin-number'])){
                if (strlen($_REQUEST['registration-bin-number']) === 8){
                    $business_bin_num = $_REQUEST['registration-bin-number'];

                }
                else{
                    $business_bin_num_error = "Please enter correct BIN number of your business.";
                    $hasError = 1;
                }
            }
            else{
                $business_bin_num_error = "Please enter numeric value only.";
                $hasError = 1;
            }
        }




        // monthly income validation
        if (empty($_REQUEST['registration-monthly-income'])){
            $business_monthly_income_error = "Please enter monthly income";
            $hasError = 1;
        }else{
            if (is_numeric($_REQUEST['registration-monthly-income'])){
               
                $business_monthly_income = $_REQUEST['registration-monthly-income'];
            }
            else{
                $business_monthly_income_error = "Please enter numeric value only.";
                $hasError = 1;
            }
        }


        

        // business name validation
        if (strlen($_REQUEST['registration-business-name']) < 0){
            $business_name_error = "Please enter business name";
            $hasError = 1;
        }elseif(strlen($_REQUEST['registration-business-name']) < 2){
            $business_name_error = "Business name should atleast 2 character long";
            $hasError = 1;
        }
        elseif(preg_match('/[$,@,&,%,#]/', $_REQUEST["registration-business-name"])){
            $business_name_error = "Business name should not contain any special character";
            $hasError = 1;
        }
        else{
            $business_name = $_REQUEST["registration-business-name"];
        }


        // business type validation
        if (empty($_REQUEST["business-type"])){
            $business_type_error = "Please select your business type";
            $hasError = 1;
        }else{
            $business_type = $_REQUEST["business-type"];
        }

    // DB code for adding user

    if (!$hasError == 1){
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->addUserIntoRegistration($conObj, "registration", $business_email, $business_pass, $business_owner_name, "small-business");
        $result2 = $mydb->addUserIntoSmallBusiness($conObj, "smallbusinessuser", $business_type, $business_name, $business_bin_num, $business_monthly_income, $business_email, $business_pass, "null");

        if ($result2 === TRUE){
            $registration_success_message = "Successfully Registered. Please login.";
           
        }else{
            $registration_error_message = "Registration unsuccessful. Please try again with proper information." . $conObj->error;
        }
        }
        else{
            $registration_error_message = "Registration unsuccessful. Please try again with proper information." . $conObj->error;

        }
}

?>