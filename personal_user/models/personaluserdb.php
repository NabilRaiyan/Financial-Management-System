<?php

class Model
{
    // creating Connection method
    function OpenConn()
    {
        $conn = new mysqli("localhost", "root", "", "financialmanagementsystem");
        return $conn;

    }




    //adduser into personal user
    function AddIntoPesonalUser($conn, $table, $fname, $lname, $email, $username, $password,  $gender, $monthly_Income)
    {
        $insertSql = "INSERT INTO $table (P_fname, P_lname, P_mail, P_Username, P_password,P_gender,P_montlyIncome) VALUES ('$fname', '$lname', '$email', '$username', '$password', '$gender', '$monthly_Income')";
        $result = $conn->query($insertSql);
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

        //search form savings history
        function searchSavings($conn, $table, $s_name){
            $sql="SELECT * FROM $table WHERE s_name LIKE '%$s_name%'";
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

    //search form expense history
    function searchExpense($conn, $table, $ex_name){
        $sql="SELECT * FROM $table WHERE ex_name LIKE '%$ex_name%'";
        $result = $conn->query($sql);
        return $result;
    }



}