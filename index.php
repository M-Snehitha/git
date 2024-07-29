<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
     href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
 <link rel="stylesheet" href="styles.css"/>
    <title>Hotel Management | Hotel Taj</title>
  </head>
  <body>
    <nav>
      <div class="nav__bar">
        <div class="nav__header>
          <div class="logo nav__logo">
            <span>HOTEL<br />TAJ</span>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        <div>
        <ul class="nav__links" id="nav-links">
          <li class="item"><a href="index.php">Home</a></li>
          <li class="item"><a href="about.php">About Us</a></li>
          <li class="item"><a href="room.php">Rooms</a></li>
          <li class="item"><a href="food.php">Food</a></li>
          <li class="item"><a href="contact.php">Contact Us</a></li>
          <li class="item"><a href="cart.php">Cart</a></li>
          <li class="item"><a href="admin.php">Admin</a></li>
          <li class="item"><a href="bookinghall.php">Booking</a></li>
          <li class="item"><a href="feedback.php">Feedback</a></li>
          <li class="item"><a href="login.php">Login</a></li>
          <li class="item"><a href="login.php">Register</a></li>
        </ul>
      </div>
      </nav>
	
<!-- ----------  Home --------------------- -->
    <header class="header" id="home">
      <div class="section__container header__container">
        <p class="section__subheader">ABOUT US</p>
        <h1>The Perfect<br />Holiday For You</h1>
        <a href="about.php"><button class="btn">Take A Tour</button></a>
      </div>
    </header>
    <section class="about" id="about">
      <div class="section__container about__container">
        <div class="about__grid">
          <div class="about__image">
            <a href="about.php"><img src="assets/about-1.jpg" alt="about" /></a>
          </div>
          <div class="about__card">
            <span><i class="ri-user-line"></i></span>
            <h4>Strong Team</h4>
            <p>
              Unlocking Hospitality Excellence And Ensures Your Perfect Stay
            </p>
          </div>
          <div class="about__image">
            <a href="about.php"><img src="assets/about-2.jpg" alt="about" /></a>
          </div>
          <div class="about__card">
            <span><i class="ri-calendar-check-line"></i></span>
            <h4>Luxury Room</h4>
            <p>Experience Unrivaled Luxury at Our Exquisite Luxury Rooms</p>
          </div>
        </div>
        <div class="about__content">
          <p class="section__subheader">ABOUT US</p>
          <h2 class="section__header">Discover Our Underground</h2>
          <p class="section__description">
            Welcome to a hidden realm of extraordinary accommodations where
            luxury, comfort, and adventure converge. Our underground hotels
            offer an unparalleled escape from the ordinary, inviting you to
            explore a subterranean world of wonders.
          </p>
          <a href="room.php"><button class="btn">Book Now</button></a>
        </div>
      </div>
    </section>

    <section class="room__container" id="room">
      <p class="section__subheader">ROOMS</p>
      <h2 class="section__header">Hand Picked Rooms</h2>
      <div class="room__grid">
        <div class="room__card">
          <a href="room.php"><img src="assets/room-1.jpg" alt="room" /></a>
          <div class="room__card__details">
            <div>
              <h4>Delux AC</h4>
              <p>Well-appointed rooms designed for guests who desire a more.</p>
            </div>
            <h3>Rs 1100<span>/night</span></h3>
          </div>
        </div>
        <div class="room__card">
          <a href="room.php"><img src="assets/room-2.jpg" alt="room" /></a>
          <div class="room__card__details">
            <div>
              <h4>AC Suite</h4>
              <p>Consist of multiple rooms and a common living area.</p>
            </div>
            <h3>Rs 900<span>/night</span></h3>
          </div>
        </div>
        <div class="room__card">
          <a href="room.php"><img src="assets/room-3.jpg" alt="room" /></a>
          <div class="room__card__details">
            <div>
              <h4>NonAC Suite</h4>
              <p>
                Top-tier accommodations usually on the highest floors of a
                hotel.
              </p>
            </div>
            <h3>Rs 700<span>/night</span></h3>
          </div>
        </div>
      </div>
    </section>

    <section class="intro">
      <div class="section__container intro__container">
        <div class="intro__cotent">
          <p class="section__subheader">INTRO VIDEO</p>
          <h2 class="section__header">Meet With Our Luxury Place</h2>
          <p class="section__description">
            Whether you're seeking a cozy and exclusive hideaway or an immersive
            journey beneath the surface, Hotel Miranda promises to be an
            unforgettable stay, where the depths of comfort and excitement await
            your arrival.
          </p>
          <button class="btn">Book Now</button>
        </div>
        <div class="intro__video">
          <video src="assets/luxury.mp4" autoplay muted loop></video>
        </div>
      </div>
    </section>

    <section class="section__container feature__container" id="feature">
      <p class="section__subheader">FACILITIES</p>
      <h2 class="section__header">Core Features</h2>
      <div class="feature__grid">
        <div class="feature__card">
          <span><i class="ri-thumb-up-line"></i></span>
          <h4>Have High Rating</h4>
          <p>
            We take pride in curating a selection of hotels that consistently
            receive high ratings and positive reviews.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-time-line"></i></span>
          <h4>Quite Hours</h4>
          <p>
            We understand that peace and uninterrupted rest are essential for a
            rejuvenating experience.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-map-pin-line"></i></span>
          <h4>Best Location</h4>
          <p>
            At our hotel booking website, we take pride in offering
            accommodations in the most prime and sought-after locations.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-close-circle-line"></i></span>
          <h4>Free Cancellation</h4>
          <p>
            We understand that travel plans can change unexpectedly, which is
            why we offer the flexibility of free cancellation.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-wallet-line"></i></span>
          <h4>Payment Options</h4>
          <p>
            Our hotel booking website offers a range of convenient payment
            options to suit your preferences.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-coupon-line"></i></span>
          <h4>Special Offers</h4>
          <p>
            Whether you're planning a romantic getaway, or a business trip, our
            carefully curated special offers cater to all your needs.
          </p>
        </div>
      </div>
    </section>
<!-- -------------------------food ------------------------ -->
    <section class="menu" id="food">
      <div class="section__container menu__container">
        <div class="menu__header">
          <div>
            <p class="section__subheader">MENU</p>
            <h2 class="section__header">Our Food Menu</h2>
          </div>
          <div class="section__nav">
            <span><i class="ri-arrow-left-line"></i></span>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <ul class="menu__items">
          <li>
           <a href="food.php"><img src="assets/menu-1.jpg" alt="menu" /></a>
            <div class="menu__details">
              <h4>Fggs & Bacon</h4>
              <p>
                It is a culinary innovation that puts a unique spin on the
                beloved breakfast combination.
              </p>
            </div>
          </li>
          <li>
            <a href="food.php"><img src="assets/menu-2.jpg" alt="menu" /></a>
            <div class="menu__details">
              <h4>Tea or Coffee</h4>
              <p>
                A classic choice for your daily dose of comfort and calmness.
              </p>
            </div>
          </li>
          <li>
            <a href="food.php"><img src="assets/menu-3.jpg" alt="menu" /></a>
            <div class="menu__details">
              <h4>Poori</h4>
              <p>
                A traditional food served with potato masala curry,chutney.
              </p>
            </div>
          </li>
          <li>
            <a href="food.php"><img src="assets/menu-4.jpg" alt="menu" /></a>
            <div class="menu__details">
              <h4>Idli</h4>
              <p>
                A soft,spongy and steamed breakfast served with chutney and sambar.
              </p>
            </div>
          </li>
          <li>
            <a href="food.php"><img src="assets/menu-5.jpg" alt="menu" /></a>
            <div class="menu__details">
              <h4>Panipuri</h4>
              <p>
                Indian Common Street Food.
              </p>
            </div>
          </li>
          <li>
            <a href="food.php"><img src="assets/menu-6.jpg" alt="menu" /></a>
            <div class="menu__details">
              <h4>Milkshakes</h4>
              <p>
                Our famous delightful seasonal milkshake.
              </p>
            </div>
          </li>
        </ul>
        <div class="menu__images">
          <a href="food.php"><img src="assets/menu-7.png" alt="menu" /></a>
          <a href="food.php"><img src="assets/menu-8.png" alt="menu" /></a>
          <a href="food.php"><img src="assets/menu-9.jpg" alt="menu" /></a>
        </div>
    </section>
<marriagehall class="marriagehall" id="booking-hall">
      <div class="section__container marriagehall__container">
        <p class="section__subheader">Welcome</p>
        <h1>Party And Marriage</h1>
<div class="marriagehall__image">
            <a href="bookinghall.php"><img src="assets/marriage-hall.png" alt="about" /></a>
          </div>
        <a href="bookinghall.php"><button class="btn">Booking hall</button></a>
      </div>
    </marriagehall>


    </section>

    <section class="section__container news__container" id="news">
      <div class="news__header">
        <div>
          <p class="section__subheader">BLOG</p>
          <h2 class="section__header">News Feeds</h2>
        </div>
        <div class="section__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>
      <div class="news__grid">
        <div class="news__card">
          <img src="assets/news-1.jpg" alt="news" />
          <div class="news__card__title">
            <p>25th March 2022</p>
            <p>By Emily</p>
          </div>
          <h4>Exploring Local Culinary Gems: A Foodie's Guide.</h4>
          <p>
            Join Emily as she takes you on a gastronomic adventure through the
            neighborhood surrounding our hotel.
          </p>
        </div>
        <div class="news__card">
          <img src="assets/news-2.jpg" alt="news" />
          <div class="news__card__title">
            <p>15th June 2022</p>
            <p>By David</p>
          </div>
          <h4>Balancing Mind, Body, and Soul at Our Hotel.</h4>
          <p>
            Discover holistic spa treatments, fitness facilities, and
            mindfulness practices that will leave you feeling refreshed.
          </p>
        </div>
        <div class="news__card">
          <img src="assets/news-3.jpg" alt="news" />
          <div class="news__card__title">
            <p>08th August 2022</p>
            <p>By Sarah</p>
          </div>
          <h4>Exploring Outdoor Activities Near Our Hotel.</h4>
          <p>
            From hiking and biking trails to water sports and wildlife
            encounters, she highlights ways to experience nature's wonders.
          </p>
        </div>
      </div>
    </section>
<!-- -------------------------Footer ---------------------------- -->
    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo footer__logo">
            <div>H</div>
            <span>HOTEL<br />TAJ</span>
          </div>
          <p class="section__description">
            This legendary hotel in Mumbai as played host to kings,dignitaries and eminent personalities
		from across the globe,and is acknowledged as world leader in hospitality. 
          </p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-youtube-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-linkedin-fill"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Services</h4>
          <div class="footer__links">
            <li><a href="room.php">Rooms</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="food.php">Food</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="index.php">Home</a></li>
          </div>
        </div>
        <div class="footer__col">
          <h4>Contact Us</h4>
          <div class="footer__links">
            <li>
              <span><i class="ri-phone-fill"></i></span>
              <div>
                <h5>Phone Number</h5>
                <p>+91 9963008101</p>
              </div>
            </li>
            <li>
              <span><i class="ri-record-mail-line"></i></span>
              <div>
                <h5>Email</h5>
                <p>info@hoteltaj.com</p>
              </div>
            </li>
            <li>
              <span><i class="ri-map-pin-2-fill"></i></span>
              <div>
                <h5>Location</h5>
                <p>Andherii-Kurla Rd,near CSIA,Saki Naka,Mumbai,Maharashtra 400072</p>
              </div>
            </li>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
<script>
        function popup(popup_name)
        {
             get_popup=document.getElementById(popup_name);
             if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else{
                get_popup.style.display="flex";
            }
        }

        function forgotPopup()
        {
            document.getElementById('login-popup').style.display="none";
            document.getElementById('forgot-popup').style.display="flex";
        }
    </script>
  </body>
</html>
