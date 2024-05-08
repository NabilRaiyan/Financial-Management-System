<!DOCTYPE html>
<html lang="en">

<title>My Dashboard</title>
<link rel="stylesheet" href="../css/styles.css">
<?php include "./subheader_small_business_views.php"; ?>

<div class="dashboard-body" data-aos="fade-up" data-aos-duration="1000">
    <h1 class="dashboard-title">Dashboard</h1>
    <h4 class="user-name">Welcome, Raiyan Al Sultan</h4>

    <!-- recent expense div -->
    <div class="recent-expense" data-aos="fade-left" data-aos-duration="1000">
        <div class="current-balace-div">
            <h2 class="current-balance-title">CURRENT BALANCE</h2>
            <h3 class="balance-amount">$40,0000</h3>
        </div>
        <div class="recent-expense-list">
            <h3 class="recent-expense-title">Recent Expenses</h3>
            <p class="date">06 Jan, 2024</p>
            <!-- expense cart -->
            <?php 
                for ($i=0; $i < 3; $i++){
                    include "./expenses_card_views.php";
                }
            ?>
        </div>
        <a class="sell-all-expense-btn" href="#">See all</a>
    </div>


    <!-- weekly summary div -->
    <div class="upper-section" data-aos="fade-right" data-aos-duration="1000">
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

    <div class="lower-section" data-aos="fade-right" data-aos-duration="1000">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum facilis cumque magni autem sit nulla in maxime, reprehenderit ratione iusto alias tempora nihil omnis ad odit quis nam dolor esse?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat neque est hic ex, cum obcaecati natus, aperiam nostrum animi dolorum ipsam, nisi unde illum sit ad architecto vel doloribus mollitia?
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia magni eum possimus deleniti molestiae quibusdam tenetur! Ex nobis autem explicabo ratione alias libero, ea laboriosam est nihil minus? Numquam, dicta.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga consequatur earum eos assumenda, dolorum nam ab saepe provident esse ad consequuntur debitis laudantium quis voluptas quam incidunt, vero libero explicabo.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe harum modi nihil voluptatibus ad soluta accusamus laborum possimus amet? Dolores beatae vitae libero culpa minima, quo quod magni voluptatem reprehenderit?</p>
    </div>
</div>


<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>