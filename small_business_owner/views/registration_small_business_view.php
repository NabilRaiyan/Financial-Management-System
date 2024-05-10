<!DOCTYPE html>
<html lang="en">

<title>Sign Up | Small business Owner</title>

<head>
<link rel="stylesheet" href="../../layouts/css/styles.css">
<link rel="stylesheet" href="../css/styles.css">
</head>

<a href="./home_view.php" class="logo registration-logo"><span class="logo-img">F</span>inTech</a>
<div class="login-div registration-div" data-aos="fade-up" data-aos-duration="1000">
    <!-- left section  -->
    
    <div class="left-section" data-aos="fade-left" data-aos-duration="1000">

        <h1 class="login-title">Sign Up</h1>
        <p class="login-subtitle">Welcome to FinTect. A great money management app!</p>
        
        <form action="" method="post">
            <input placeholder="Enter business name" class="login-user-email-input" name="registration-name" type="text">
            <input placeholder="Enter business email" class="login-user-email-input" name="registration-email" type="text">
            <input placeholder="Enter password" class="login-user-password-input" name="registration-password" type="text">
            <input placeholder="Enter TIN number" class="login-user-email-input" name="registration-tin-number" type="text">

            <span class="have-account-txt other-login-txt">Already have an account?</span><a href="../../layouts/views/login_view.php" class="">Log in</a>
            <a href="#" class="login-btn" name="sign-up">Sign Up</a>
        </form>
        <p class="other-login-txt">Login with others</p>
        <a href="#" class="google-login-option"><i class="google-icon fa-brands fa-google"></i>Login with google</a>
    </div>

    <!-- right section -->
    <div class="right-section" data-aos="fade-right" data-aos-duration="1000">
        <img class="login-img" src="../assets/sign up.png" alt="login image" srcset="">
    </div>
</div>



<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/layouts/views/footer.php'); ?>
</body>
</html>
