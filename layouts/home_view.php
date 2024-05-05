
<!DOCTYPE html>
<html lang="en">

<!-- upper section -->
<div class="upper-section">
    <?php include "./header.php"; ?>


    <!-- left upper section  -->

    <div class="left-upper-section" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
        <h1 class="upper-title">
            Good <span class="title-word-color-black">Food</span> <br>
            <span class="title-word-color-black">& Good</span> <br> Moments
        </h1> 
        <p class="upper-description">
            Eat the food you want to eat. don't need to come to us. Just make a call and we will be at your door with
            your yummy food.Eat the food you want to eat. don't need to come to us. Just make a call and we will be at your door with
            your yummy food.
        </p>
        
        <a href="#" class="view-menu-btn">View Menu</a>
        <h5 class="txt-happy-customer">Our Happy Customers</h5>
        <img class="customer-img" src="../images/people.png" alt="customer img" srcset="">
        <h6 class="review-text">+12.5k Review</h6>
        
    </div>

    <!-- right upper setion -->
    <div class="right-upper-section" data-aos="fade-up" data-aos-duration="2000">
        <img class="pizza-img-1" src="../images/pizza-circle.png" alt="" srcset="">
        <img class="pizza-img-2" src="../images/pizza-circle-2.png" alt="" srcset="">
        <img class="pizza-img-3" src="../images/pizza-circle-2.png" alt="" srcset="">
        <img class="pizza-img-4" src="../images/pizza-circle-2.png" alt="" srcset="">
     
    </div>
</div>


<!-- middle section -->
<div class="middle-section" data-aos="fade-up" data-aos-duration="1000">
    <h4 class="speciality-sub-title">Our Service</h4>
    <h1 class="middle-sec-title">Why Choose Us?</h1>
    <p class="middle-section-description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
        Mauris pellentesque pulvinar pellentesque habitant. Mi proin sed libero enim sed faucibus turpis.
    </p>

    <div class="speciality-list">
        <div class="speciality-item" data-aos="fade-right" data-aos-duration="1000">
            <i class="speciality-icon fa-4x fa-solid fa-kitchen-set"></i>
            <h2 class="speciality-title">Best Chef</h2>
            <p class="speciality-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Doloremque nesciunt aspernatur explicabo deserunt ratione sunt cumque, quia eaque ipsam iusto vel quidem illo sit aliquid ducimus placeat sapiente error. 
                Eligendi!
            </p>
        </div>
        <div class="speciality-item middle-item" data-aos="fade-down" data-aos-duration="1000">
            <i class="speciality-icon fa-4x fa-solid fa-pizza-slice"></i>
            <h2 class="speciality-title">Fresh food</h2>
            <p class="speciality-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Doloremque nesciunt aspernatur explicabo deserunt ratione sunt cumque, quia eaque ipsam iusto vel quidem illo sit aliquid ducimus placeat sapiente error. 
                Eligendi!
            </p>
        </div>
        <div class="speciality-item" data-aos="fade-left" data-aos-duration="1000">
            <i class="speciality-icon fa-4x fa-solid fa-truck-fast"></i>
            <h2 class="speciality-title">Fast delivery</h2>
            <p class="speciality-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Doloremque nesciunt aspernatur explicabo deserunt ratione sunt cumque, quia eaque ipsam iusto vel quidem illo sit aliquid ducimus placeat sapiente error. 
                Eligendi!
            </p>
        </div>
    </div>

    <!-- quality food and menu div -->
    <div class="menu-div" data-aos="fade-up" data-aos-duration="1000">
        <h4 class="speciality-sub-title">Quality Food</h4>
        <h1 class="middle-sec-title">Our Popular Menu</h1>
        <p class="middle-section-description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
        Mauris pellentesque pulvinar pellentesque habitant.
    </p>

    <!-- best seller menu card -->
    <div class="best-seller-menu">
        <?php
            for ($i = 0; $i <= 3; $i++ ){
                include "./popularItemCart.php"; 
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



