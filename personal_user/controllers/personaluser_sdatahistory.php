<?php
session_start();

// Check if the user in
if (!isset($_SESSION["useremail"])) {
    // If not logged in, return an error message
    header("Location:../../layouts/views/login_view.php");
    exit();
}
include ('../models/personaluserdb.php');

$mydb = new Model();

// connecting db
$conn = $mydb->OpenConn();
//$userid = $_SESSION["P_id"];

$result = $mydb->savingshistory($conn, "savings");

if ($result->num_rows > 0) {
    $data = array();  //made data array type
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;       //data stored
    }
}

//TReturn JSON formatted Data as Response to ajax call as string
echo json_encode($data);

