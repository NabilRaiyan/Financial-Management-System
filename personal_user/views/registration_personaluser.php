<?php include "../controllers/personaluser_registration_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">

<title>Sign Up </title>

<head>
    <link rel="stylesheet" href="../../layouts/css/styles.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<a href="../../layouts/views/home_view.php" class="logo registration-logo"><span class="logo-img">F</span>inTech</a>
<?php echo '<p class="success-message">' . $registration_success_message . '</p>'; ?>
<?php echo '<p class="unsuccess-message">' . $registration_error_message . '</p>'; ?>


<div class="login-div registration-div" data-aos="fade-up" data-aos-duration="1000">
    <!-- left section  -->
    <div class="left-section" data-aos="fade-left" data-aos-duration="1000">

        <h1 class="login-title">Sign Up</h1>
        <p class="login-subtitle">Welcome to FinTect. A great money management app!</p>

        <form action="" method="POST">
            <input placeholder="Enter users first name" class="login-user-email-input" name="fname" type="text">
            <?php echo '<p class="error" for="">' .$fnameError   . '</p>'; ?>
            <?php echo '<p class="error" for="">' . $Fnameleantherror  . '</p>'; ?>

            <input placeholder="Enter users last name" class="login-user-email-input" name="lname" type="text">
            <?php echo '<p class="error" for="">' .$lnameError . '</p>'; ?>
            <?php echo '<p class="error" for="">' .$Lnameleantherror. '</p>'; ?>

            <input placeholder="Enter email address" class="login-user-email-input" name="email" type="text">
            <?php echo '<p class="error" for="">' . $emailError . '</p>'; ?>

            <input placeholder="Enter user name" class="login-user-email-input" name="username" type="text">
            <?php echo '<p class="error" for="">' . $usernameError . '</p>'; ?>

            <input placeholder="Enter password" class="login-user-password-input" name="password" type="password">
            <?php echo '<p class="error" for="">' . $passwordError. '</p>'; ?>

            <label for="">Enter Gender</label>
            <select class="business_type" name="gender" id="">
                <option selected value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Others</option>
            </select>
            <?php echo '<p class="error" for="">' .$genderError. '</p>'; ?>

            <input placeholder="Enter monthly income" class="login-user-email-input" name="monthly_income" type="text">
            <?php echo '<p class="error" for="">' .$MNumericincomeError. '</p>'; ?>
            <?php echo '<p class="error" for="">' .$MincomeError. '</p>'; ?>


            <p class="have-account-txt other-login-txt">Already have an account?</p>
            <a href="../../layouts/views/login_view.php" class="">Log in</a>
            <button type="submit" class="login-btn" name="Submit">Sign Up</button>
        </form>
        <p class="other-login-txt">Login with others</p>
        <a href="#" type="submit" class="google-login-option"><i class="google-icon fa-brands fa-google"></i>Login with
            google</a>
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

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/layouts/views/footer.php'); ?>
</body>

</html>