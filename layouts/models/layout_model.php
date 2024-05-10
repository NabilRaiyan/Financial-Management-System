<?php

    class Model {
        // connection open
        function OpenCon(){
            $conn = new mysqli("localhost", "root", "", "FinancialManagementSystem");
            return $conn;
        }

        // function for queries
        function get_user_type($conn, $table){
            $sql = "SELECT u_id, usertype, money FROM $table";
            $result = $conn->query($sql);
            return $result; 
        }
    }



?>