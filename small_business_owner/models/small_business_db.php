<?php

    class Model {
        // connection open
        function OpenCon(){
            $conn = new mysqli("localhost", "root", "", "FinancialManagementSystem");
            return $conn;
        }

        // function for adding user in registration table
        function addUserIntoRegistration($conn, $table,  $email, $password, $user_name, $user_type){
            $sql = "INSERT INTO $table (email, password, user_name, user_type)
            VALUES ('$email', '$password', '$user_name', '$user_type')";
            $result = $conn->query($sql);
            return $result;
        }

         // function for adding user in small business table
         function addUserIntoSmallBusiness($conn, $table, $Bussiness_type, $Bussiness_name, $BIN_number, $B_montlyincome, $B_mail, $B_password, $B_tax,){
            $sql = "INSERT INTO $table (Bussiness_type, Bussiness_name, BIN_number, B_montlyincome, B_mail, B_password, B_tax)
            VALUES ('$Bussiness_type', '$Bussiness_name', '$BIN_number', '$B_montlyincome', '$B_mail', '$B_password', '$B_tax')";
            $result = $conn->query($sql);
            return $result;
        }
        
    }



?>