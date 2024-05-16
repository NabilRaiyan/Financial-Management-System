<?php
session_start();
if (!isset($_SESSION["useremail"])) {
    header("Location:../../layouts/views/login_view.php");
    exit();
}
if (isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) {
    $userid = $_COOKIE["userid"];
    $username = $_COOKIE["username"];

}
include "./subheader_personaluser.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Dashboard</title>

    <script src="../script/jquery-3.7.1.js"></script>
    <script src="../script/personalsavings_ajaxjson.js"></script>
</head>

<div class="dashboard-body" data-aos="fade-up" data-aos-duration="1000">
    <h1 class="dashboard-title">Dashboard</h1>
    <h4 class="user-name">Welcome, <?php echo $_SESSION['username']; ?></h4>

    <!-- recent expense div -->
    <div class="recent-expense" data-aos="fade-up" data-aos-duration="1000">
        <div class="current-balace-div">
            <h2 class="current-balance-title">CURRENT BALANCE</h2>
            <h3 class="balance-amount">$40,0000</h3>
        </div>
        <div class="recent-expense-list" id="savingshistory">
            <h3 class="recent-expense-title">Recent Expenses</h3>
        </div>
    </div>


    <!-- weekly summary div -->
    <div class="upper-section" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="weekly-summary-title">Weekly Summary</h2>
        <div class="savings-div">
            <h4 class="weekly-date">01 Nov-07 Nov</h4>
            <h4 class="weekly-saving-money">$3000 saving</h4>
        </div>

        <div class="expense-div">
            <h4 class="weekly-date">01 Nov-07 Nov</h4>
            <h4 class="weekly-expense-money">$300 expense</h4>
        </div>
    </div>

    <div class="lower-section" data-aos="fade-up" data-aos-duration="1000">
        <p>There will be a chart</p>
    </div>
</div>


<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>