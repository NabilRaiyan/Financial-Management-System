<!-- expenses page -->


<!DOCTYPE html>
<html lang="en">

<title>My Expenses | Small business</title>
<?php include "./subheader_small_business_views.php"; ?>

<div class="savings-body" data-aos="fade-up" data-aos-duration="1000">
    <h1 class="savings-title">My Expenses</h1>
    <h4 class="user-name">Welcome, Raiyan Al Sultan</h4>

    <div class="add-savings-div">
        <div class="current-balace-div">
                <h2 class="current-balance-title">CURRENT BALANCE</h2>
                <h3 class="balance-amount">$40,0000</h3>
        </div>

        <!-- add expenses -->
        <div class="add-savings">
            <h2 class="add-savings-title">Enter your Expenses</h2>
            <form action="" method="post" class="add-savings-form">
                <input type="text" class="savings-name-input" name="expense-name" placeholder="Expense name">
                <input type="text" class="savings-amount-input" name="expense-amount" placeholder="Expense amount">

                <label for="">Select type</label>
                <select class="savings-type" name="expense-type" id="">
                    <option selected value=""></option>
                    <option value="technology">Technology</option>
                    <option value="office">Office Space</option>
                    <option value="markebing">Markebing</option>
                    <option value="transport">Transport</option>
                    <option value="others">Others</option>
                </select>
                <a class="add-savings-btn" type="submit" href="#">Add Expense</a>
            </form>
        </div>
    </div>

    <!-- savings history -->
    <div class="savings-history-div">
        <h1 class="savings-history-title">Expense History</h1>
        <div class="savings-history-list">
            <?php
                for($i = 0; $i < 5; $i++){
                    include "./history_card_view.php";
                }
            
            ?>
        </div>
    </div>
    
</div>







<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>