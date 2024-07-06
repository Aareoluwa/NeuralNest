<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thraphy</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
  />
  <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

      <style>
    body {
      font-family: Arial, sans-serif;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color: #f8f9fa;
    }
    .logo {
      font-size: 24px;
      font-weight: bold;
    }
    .nav {
      list-style-type: none;
    }
    .nav li {
      display: inline;
      margin-right: 20px;
    }
    .nav li a {
      text-decoration: none;
      color: #000;
    }
    .profile {
      position: relative;
      display: inline-block;
    }
    .profile img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      cursor: pointer;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      background-color: #ddd;
    }
    .profile:hover .dropdown-content {
      display: block;
    }
  </style>

    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <link rel="stylesheet" href="/cascading_sheet/header.css" />
    <link rel="stylesheet" href="/cascading_sheet/card.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="/about/styless.css">
    <link rel="stylesheet" href="/testimonial/css/style.css">

    <link rel="stylesheet" href="/cascading sheet/rating.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>
  <body>






<?php 

if (isset($_SESSION['role'])) {
  if ($_SESSION['role'] == 0 || $_SESSION['role'] == 1) {
  ?>
    <header>
      <div class="container">
          <div class="logo">YouCare.</div>
          <nav>
              <ul>
                  <li> <ul class="nav">
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="contactUs/index.php">Contact</a></li>

                      <li class="profile">
                        <img src="./avatars/<?php echo $_SESSION['profile_pics'] ?>" alt="<?php echo $_SESSION['first_name'] ?> Avatar">

                        <div class="dropdown-content">
                          <a href="profile.php">Profile</a>
                          <a href="includes/logout.inc.php">Logout</a>
                        </div>
                      </li>

                  </ul></li>
              </ul>
          </nav>
      </div>
    </header>
  <?php 
  } else { 
  ?>
    <header>
      <div class="container">
          <div class="logo">YouCare.</div>
          <nav>
              <ul>
                  <li><a href="booking.php">Booking</a></li>
                  <li><a href="contactUs/index.php">Contact</a></li>
                  <li><a href="loginPage.php" class="account-btn">Login</a></li>
              </ul>
          </nav>
      </div>
    </header>
  <?php 
  } 
} else { 
?>
    <header>
      <div class="container">
          <div class="logo">YouCare.</div>
          <nav>
              <ul>
                  <li><a href="booking.php">Booking</a></li>
                  <li><a href="contactUs/index.php">Contact</a></li>
                  <li><a href="loginPage.php" class="account-btn">Login</a></li>
              </ul>
          </nav>
      </div>
    </header>
<?php 
}
?>

 






    <!-- <div w3-include-html="./html/header.html"></div> -->

    <div class="flex">
      <div class="cd">
        <div w3-include-html="./html/card.html"></div>
        <div w3-include-html="./html/card.html"></div>
        <div w3-include-html="./html/card.html"></div>
        <div w3-include-html="./html/card.html"></div>
      </div>
    </div>


    <!-- <div w3-include-html="./testimonial/index.html"></div> -->




       <!-- Customer Review start-->


    <section class="overallContainer">

      <section class="testimonial">
        <div class="container">
          <div class="section-header">
            <h2 class="title">what our clients say</h2>
          </div>
          <div class="testimonials-content">
            <div class=" swiper testimonials-slider js-testimonials-slider">
              <div class="swiper-wrapper">
  
                <div class="swiper-slide testimonials-item">
                  <div class="info">
                    <img src="/testimonial/img/img1.jpg" alt="img" />
                    <div class="text-book">
                      <h3 class="name">john dos</h3>
                      <span class="job">web developer</span>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                    tempora. Velit ipsa alias tempora? Omnis cumque nostrum
                    doloribus voluptates commodi!
                  </p>
                  <div class="rating">
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                  </div>
                </div>
  
                <div class=" swiper-slide testimonials-item">
                  <div class="info">
                    <img src="/testimonial/img/img2.jpg" alt="img" />
                    <div class="text-book">
                      <h3 class="name">john dos</h3>
                      <span class="job">web developer</span>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                    tempora. Velit ipsa alias tempora? Omnis cumque nostrum
                    doloribus voluptates commodi!
                  </p>
                  <div class="rating">
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                  </div>
                </div>
  
                <div class="swiper-slide testimonials-item">
                  <div class="info">
                    <img src="/testimonial/img/img3.jpg" alt="img" />
                    <div class="text-book">
                      <h3 class="name">john dos</h3>
                      <span class="job">web developer</span>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                    tempora. Velit ipsa alias tempora? Omnis cumque nostrum
                    doloribus voluptates commodi!
                  </p>
                  <div class="rating">
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                  </div>
                </div>
                
                <div class="swiper-slide testimonials-item">
                  <div class="info">
                    <img src="/testimonial/img/img4.jpeg" alt="img" />
                    <div class="text-book">
                      <h3 class="name">john dos</h3>
                      <span class="job">web developer</span>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                    tempora. Velit ipsa alias tempora? Omnis cumque nostrum
                    doloribus voluptates commodi!
                  </p>
                  <div class="rating">
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                  </div>
                </div>
  
                <div class="swiper-slide testimonials-item">
                  <div class="info">
                    <img src="/testimonial/img/img5.jpeg" alt="img" />
                    <div class="text-book">
                      <h3 class="name">john dos</h3>
                      <span class="job">web developer</span>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                    tempora. Velit ipsa alias tempora? Omnis cumque nostrum
                    doloribus voluptates commodi!
                  </p>
                  <div class="rating">
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star"></i> 
                  </div>
                </div>
  
              </div>
            </div>
            <div class="swiper-pagination js-testimonials-pagination"></div>
          </div>
        </div>
      </section>


    </section>

        <!-- Customer Review end -->





    <!-- Downpart Start -->
    
    <div id="therapy-hint">
      <p>
        <strong>Find a Therapist.</strong> Book counselling with a professional
        therapist in minutes. To start therapy, simply choose from our
        professional psychologists, counsellors, and psychotherapists listed
        above.
      </p>
    </div>

    <!-- <div class="recent-views">
      <p class="recent-views-title">Your last view</p>
      <button type="button" class="therapist-card">
        <div class="therapist-image-container">
          <img
            src="/about/profile1.jpg"
            alt="Therapist Sue Aspinall"
            class="therapist-photo"
          />
        </div>
        <div class="inline-container">
          <span class="therapist-name">Sue Aspinall</span>
          <span class="session-price">£85</span>
        </div>
        <input type="date">
        <h1 class="session-availability">Available Thu, Feb 22nd</h1>
      </button>
      <p class="clear-history"><a href="#">X clear history</a></p>
    </div> -->

    <footer class="down-bar">
      <article><a href="#">Book a Therapist&nbsp;</a></article>
      <article><a href="#"> Search</a></article>
      <article><a href="#">Sign out</a></article>
      <br />
      <article><a href="#">Home</a></article>
      <article><a href="#"> About</a></article>
      <article><a href="#"> Help</a></article>
      <article><a href="#"> Glossary</a></article>
      <article>
        <a href="#"> Contact us <br /><br /></a>
      </article>

      <p>Copyright © 2024 Harley Therapy Platform</p>
      <p>10 Harley Street, London, W1G 9PF</p>
      <p><a href="#">Site Terms</a> | <a href="#">Privacy Policy</a></p>
    </footer>

       <!-- Footer Downpart End -->


    <script>
      w3.includeHTML();
    </script>
    <script src="./script/accordion.js"></script>
    <script src="./script/calendar.js"></script>
    <!-- For calendar end -->
    <!-- ACCORDION END -->


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.js-testimonials-slider',{
          grabCursor: true,
          spaceBetween:30,
          pagination:{
              el: '.js-testimonials-pagination',
              clickable: true
          },
          breakpoints:{
          767:{
              slidesPerView: 2
          }
          }
        });
    </script>





  </body>
</html>
