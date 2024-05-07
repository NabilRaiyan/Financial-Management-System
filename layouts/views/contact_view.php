<!DOCTYPE html>
<html lang="en">
<title>Contact Us</title>

<?php include "./header.php" ?>

<!-- contact us page -->

<!-- contact title and subtitle -->
<h1 class="contact-title" data-aos="fade-up" data-aos-duration="1000">Get In Touch</h1>

<p class="contact-subtitle" data-aos="fade-down" data-aos-duration="1000">Let's make something big together!</p>
<!-- contact body -->
<div class="contact-body">
    <!-- left section -->
    <div class="left-section" data-aos="fade-left" data-aos-duration="1000">
        <h1 class="left-section-title">Mail Us</h1>
        <p class="left-section-body">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet molestias quisquam dolor maxime? Necessitatibus nulla, 
            deleniti quaerat dolorum laboriosam vero labore, iste adipisci amet placeat odit doloremque natus beatae inventore.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Placeat, animi quasi porro rem doloremque tenetur nulla, ducimus ut itaque fugit perspiciatis quaerat similique ab magnam blanditiis! Nesciunt sint officiis in!
        </p>
        <p class="phone-number"><i class="contact-icon fa-solid fa-1x fa-phone-volume"></i>+1-780-2843810</p>
        <p class="address"><i class="contact-icon fa-solid fa-1x fa-location-dot"></i>123 Main Street <br> <span>Anytown, USA</span></p>
    </div>

    <div class="right-section" data-aos="fade-right" data-aos-duration="1000">
        <p class="contact-form-title">Please fill this form in a decent manner</p>
        
        <form class="contact-form" action="" method="post">
            <input name="contact-user-name" placeholder="Your Name" type="text" class="contact-username">
            <input name="contact-user-email" placeholder="Your Email" type="text" class="contact-email">
            <input name="contact-user-address" placeholder="Your Address" type="text" class="contact-address">
            <textarea name="contact-user-message" placeholder="Your Message" class="contact-message"></textarea>
            <button type="submit" class="contact-submit-btn">Send Message</button>
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