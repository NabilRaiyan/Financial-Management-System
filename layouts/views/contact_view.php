<!DOCTYPE html>
<html lang="en">
<title>Contact Us</title>

<?php include "./header.php" ?>

<!-- contact us page -->

<!-- contact title and subtitle -->
<h1 class="contact-title">Get In Touch</h1>

<p class="contact-subtitle">Let's make something big together!</p>
<!-- contact body -->
<div class="contact-body">
    <!-- left section -->
    <div class="left-section">
        <h1 class="left-section-title">Mail Us</h1>
        <p class="left-section-body">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet molestias quisquam dolor maxime? Necessitatibus nulla, 
            deleniti quaerat dolorum laboriosam vero labore, iste adipisci amet placeat odit doloremque natus beatae inventore.
        </p>
        <p class="phone-number"><i class="fa-solid fa-2x fa-phone-volume"></i>+1-780-2843810</p>
        <p class="address"><i class="fa-solid fa-2x fa-location-dot"></i>123 Main Street <br> Anytown, USA</p>
    </div>

    <div class="right-section">
        <p class="contact-form-title">Please fill this form in a decent manner</p>
        <form class="contact-form" action="" method="post">
            <input placeholder="Your Name" type="text" class="contact-username">
            <input placeholder="Your Email" type="text" class="contact-email">
            <input placeholder="Your Address" type="text" class="contact-address">
            <textarea placeholder="Your Message" name="" id="" class="contact-message"></textarea>
            <button type="submit" class="contact-submit">Send Message</button>
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