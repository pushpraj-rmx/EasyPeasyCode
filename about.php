<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>EasyPeasyCode - about</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script
      src="https://kit.fontawesome.com/66aa7c98b3.js"
      crossorigin="anonymous"
    ></script>
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>
  <style>
        /* Dropdown Button */
        .dropbtn {
            background-color: transparent;
            color: #333;
            padding: 8px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
    </style>
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="mailto:easypeasycode1@gmail.com"><i class="fa fa-envelope"></i>easypeasycode1@gmail.com</a></li>
            <li><a href="tel:+919821751295"><i class="fa fa-phone"></i>+91-9821-7512-95</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <?php
    session_start();
    ?>
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/header-logo.jpg" style="width:15rem" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php">Home</a></li>
                            <li class="scroll-to-section"><a href="about.php" class="active">About</a></li>
                            <li class="scroll-to-section"><a href="courses.php">Courses</a></li>
                            <li class="scroll-to-section"><a href="projects.php">Projects</a></li>
                            <li class="scroll-to-section"><a href="blog.php">Blog</a></li>
                            <li class="scroll-to-section"><a href="contact.php">Contact</a></li>
                            <?php
                            if (isset($_SESSION['user'])) {
                                // User is logged in, show account button
                                echo '
                                <li class="scroll-to-section dropdown">
                                    <button onclick="toggleDropdown()" class="dropbtn">Account</button>
                                    <div id="accountDropdown" class="dropdown-content">
                                        <a href="#">Profile</a>
                                        <a href="#">Courses</a>
                                        <a href="#">Settings</a>
                                        <a href="logout.php">Sign Out</a>
                                        <!-- Other account options can be added here -->
                                    </div>
                                </li>
                                ';
                            } else {
                                // User is not logged in, show sign in button
                                echo '
                                <li class="scroll-to-section">
                                    <div class="border-first-button">
                                        <a href="login.php">Sign In</a>
                                    </div>
                                </li>
                                ';
                            }
                            ?>
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
  <!-- ***** Header Area End ***** -->
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6></h6>
                    <h2>What is EasyPeasyCode?</h2>
                    <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Free Quote</a>
                    </div>
                  </div>
                </div>
              </div>s
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/programming.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="log-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="about-image-container">
          <div class="rounded-border">
            <img src="./images/temp.jpg" alt="temporary" class="round-25">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="about-content-container">
          <div class="about-us-heading">
            <h6>About Us</h6>
          </div>
          <div class="about-us-para">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia odit eos libero rerum repellat corporis, eius ab rem beatae qui nobis?</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="about-us-principles">
        <div class="feat bg-gray pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
        <h6>Testimonials</h6>
          <h4><span>3 P's of </span> Programming</h4>
          <!-- <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's<br>standard dummy text ever since the 1500s, when an unknown book.</p> -->
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
            <h6>Patience</h6>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
            <h6>Practice</h6>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
            <h6>Projects</h6>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gtco-testimonials">
    <h6>Testimonials</h6>
    <h2>What our students <em>say about us?</em></h2>
  <div class="line-dec"></div>
  <div class="owl-carousel owl-carousel1 owl-theme">
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
        <div class="card-body">
          <h5>Ronne Galle <br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
        <div class="card-body">
          <h5>Missy Limana<br />
            <span> Engineer </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
        <div class="card-body">
          <h5>Martha Brown<br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
        <div class="card-body">
          <h5>Hanna Lisem<br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="contain">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h6>Instructors</h6>
        <h2>Meet our best <em>Instructors</em></h2>
        <div class="line-dec"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="card">
          <div class="img-bx">
            <img src="https://i.postimg.cc/dQ7zWbS5/img-4.jpg" alt="img" />
          </div>
          <div class="content">
            <div class="detail">
              <h2>Emilia Roy<br /><span>Senior Designer</span></h2>
              <ul class="sci">
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="card">
          <div class="img-bx">
            <img src="https://i.postimg.cc/dQ7zWbS5/img-4.jpg" alt="img" />
          </div>
          <div class="content">
            <div class="detail">
              <h2>Emilia Roy<br /><span>Senior Designer</span></h2>
              <ul class="sci">
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="card">
          <div class="img-bx">
            <img src="https://i.postimg.cc/dQ7zWbS5/img-4.jpg" alt="img" />
          </div>
          <div class="content">
            <div class="detail">
              <h2>Emilia Roy<br /><span>Senior Designer</span></h2>
              <ul class="sci">
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="card">
          <div class="img-bx">
            <img src="https://i.postimg.cc/dQ7zWbS5/img-4.jpg" alt="img" />
          </div>
          <div class="content">
            <div class="detail">
              <h2>Emilia Roy<br /><span>Senior Designer</span></h2>
              <ul class="sci">
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 EasyPeasy All Rights Reserved.
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
        function toggleDropdown() {
            document.getElementById("accountDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    <script>
      (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();
    </script>
</body>
</html>