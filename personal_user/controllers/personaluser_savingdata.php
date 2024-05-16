<?php
session_start();

// Check if the user in
if (!isset($_SESSION["useremail"])) {
    // If not logged in, return an error message
    header("Location:../../layouts/views/login_view.php");
    exit();
}
include ('../models/personaluserdb.php');


$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);



    $mydb = new Model();
    $conObj = $mydb->OpenConn();

    $result = $mydb->addSavings(
        $conObj,
        "savings",
        $mydata['id'],
        $mydata['name'],
        $mydata['amount'],
        $mydata['type']
    );

    if ($result === TRUE) {
        echo "Savings data inserted successfully.";
    } else {
        echo "Data insertion unsuccessful." . $conObj->error;
    }



?>

