<!DOCTYPE html>
<html lang="en">

<title>Log In</title>
<?php include "./header.php"; ?>


<div class="login-div">
    <div class="left-section">
        <h1 class="login-title">Login</h1>
        <p class="login-subtitle">Login with your account</p>
        
        <form action="" method="post">
            <input class="login-user-email" name="login-email" type="text">
            <input class="login-user-password" name="login-password" type="text">
            <a href="#" class="forgot-pass">Forgot password?</a>
            <a href="#" class="login-btn">Log In</a>
        </form>
    </div>
</div>



<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <?php include "./footer.php" ?>
</body>
</html>
