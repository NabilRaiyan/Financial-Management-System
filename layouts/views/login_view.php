<!DOCTYPE html>
<html lang="en">

<title>Log In</title>
<?php include "./header.php"; ?>


<div class="login-div">

    <!-- left section  -->
    <div class="left-section">
        <h1 class="login-title">Login</h1>
        <p class="login-subtitle">Login with your account</p>
        
        <form action="" method="post">
            <input placeholder="Enter email" class="login-user-email-input" name="login-email" type="text">
            <input placeholder="Enter password" class="login-user-password-input" name="login-password" type="text">
            <a href="#" class="forgot-pass">Forgot password?</a>
            <a href="#" class="login-btn">Log In</a>
        </form>
        <p class="other-login-txt">Login with others</p>
        <a href="#" class="google-login-option">Google Login</a>
    </div>

    <!-- right section -->
    <div class="right-section">
        <img class="login-img" src="../assets/login image.png" alt="login image" srcset="">
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
