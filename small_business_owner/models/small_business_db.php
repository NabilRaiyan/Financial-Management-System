<?php

class Model
{
    // creating Connection method
    function OpenCon()
    {
        $conn = new mysqli("localhost", "root", "", "financialmanagementsystem");
        return $conn;

    }
    /// //// //////////////////////////////savings /////////////////////////////////////
    function addSavings($conn, $table, $s_id, $s_name, $s_amount, $s_type)
    {
        $sql = "INSERT INTO $table(s_id, s_name, s_amount, s_type, s_date) 
        VALUES('$s_id','$s_name', '$s_amount', '$s_type',NOW()) ON DUPLICATE KEY UPDATE s_name = '$s_name',s_amount = '$s_amount',s_type = '$s_type'";
        $result = $conn->query($sql);
        return $result;
    }
    function savingshistory($conn, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }
    function deleteSavings($conn, $table, $Saving_id)
    {
        $sql = "DELETE FROM $table WHERE s_id='$Saving_id'";
        $result = $conn->query($sql);
        return $result;
    }
    function editSavings($conn, $table, $Saving_id)
    {
        $sql = "SELECT * FROM $table WHERE s_id='$Saving_id'";
        $result = $conn->query($sql);
        return $result;
    }
    ///////////////////////////////////////////////////expence///////////////////////////////////////////
    function addExpence($conn, $table, $ex_id, $ex_name, $ex_amount, $ex_type)
    {
        $sql = "INSERT INTO $table(ex_id, ex_name, ex_amount, ex_type, ex_date) 
    VALUES('$ex_id','$ex_name', '$ex_amount', '$ex_type',NOW()) ON DUPLICATE KEY UPDATE ex_name = '$ex_name',ex_amount = '$ex_amount',ex_type = '$ex_type'";
        $result = $conn->query($sql);
        return $result;
    }

    function expensehistory($conn, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }

    function deleteExpense($conn, $table, $ex_id)
    {
        $sql = "DELETE FROM $table WHERE ex_id='$ex_id'";
        $result = $conn->query($sql);
        return $result;
    }

    function editExpense($conn, $table, $ex_id)
    {
        $sql = "SELECT * FROM $table WHERE ex_id='$ex_id'";
        $result = $conn->query($sql);
        return $result;
    }


    // function for adding user in registration table
    function addUserIntoRegistration($conn, $table, $email, $password, $user_name, $user_type)
    {
        $sql = "INSERT INTO $table (email, password, user_name, user_type)
                VALUES ('$email', '$password', '$user_name', '$user_type')";
        $result = $conn->query($sql);
        return $result;
    }

    // function for adding user in small business table
    function addUserIntoSmallBusiness($conn, $table, $Bussiness_type, $Bussiness_name, $BIN_number, $B_montlyincome, $B_mail, $B_password, $B_tax)
    {
        $sql = "INSERT INTO $table (Bussiness_type, Bussiness_name, BIN_number, B_montlyincome, B_mail, B_password, B_tax)
                VALUES ('$Bussiness_type', '$Bussiness_name', '$BIN_number', '$B_montlyincome', '$B_mail', '$B_password', '$B_tax')";
        $result = $conn->query($sql);
        return $result;
    }

}