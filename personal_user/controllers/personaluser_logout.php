<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["username"]);
unset($_SESSION["useremail"]);
header("Location:../../layouts/views/login_view.php");

?>