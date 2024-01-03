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

    <title>EasyPeasyCode - Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                            <li class="scroll-to-section"><a href="about.php">About</a></li>
                            <li class="scroll-to-section"><a href="courses.php">Courses</a></li>
                            <li class="scroll-to-section"><a href="projects.php">Projects</a></li>
                            <li class="scroll-to-section"><a href="blog.php" class="active">Blog</a></li>
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
                    <h6>Welcome to the Blog page</h6>
                    <h2>This page is underdevelopment</h2>
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
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 EasyPeasy All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
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
</body>
</html>