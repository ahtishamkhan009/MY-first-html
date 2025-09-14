<?php
session_start();

if (isset($_POST['logout'])) {
    // Destroy the session
    // session_destroy();
    $_SESSION['uid'] = '';
    // Redirect to the same page
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Services</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- <meta content="Law Firm Website Template" name="keywords"> -->
        <!-- <meta content="Law Firm Website Template" name="description"> -->

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo1.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>10:00 AM- 06:00 PM</h2>
                                    <p>Opening Hour Mon - Fri</p>
                                </div>
                                <div class="text">
                                    <h2>+92 308 3189045</h2>
                                    <p>Call Us For Free Consultation</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

             <!-- Nav Bar Start -->
             <div class="nav-bar">
                <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand" style="height: auto; width:50%;"><img src="img/logo1.png" alt="Logo" style="height: auto; width: 100%;"></a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto"> 
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                          
                                <a href="portfolio.php" class="nav-item nav-link">Services</a>
                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                                
                            </div>
                        </div>
    <div class="navbar_right">
        <?php if ($_SESSION['uid'] =='') {?>
            <button class="btn nav-item nav-link" id="navbarCollapse">
               <a href="sign.php">Sign In</a>
            </button>
        <?php } else{ ?>
        <div class="profile collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="icon_wrap">
              <img src="https://test.almajed.org.sa/assets/website/images/bg/bg-image-3.jpg" alt="profile_pic">
                  <span class="name" style="color: #aa9166; font-size: 30px;"><?php echo $_SESSION['username'] ?></span>
                     <i class="fas fa-chevron-down"></i>
           </div>
             <div class="profile_dd" id="logoutform">
                <ul class="profile_ul">
                   <li class="profile_li">
                    <button>
                    <a class="profile" href="#"><span class="picon"><i class="fas fa-user-alt"></i>
                       </span>profile</a>
                       </button>
                   </li>
                   <li>
                   <form method="post">
                    <button type="submit" name="logout" value="Logout">
                   <a class="logout"  id = "logout"  ><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a>
                    </button>
                    </form>
                    </li>
               </ul>
             </div>
        </div>
        <?php }?>
    </div>
    
                    </nav>
                </div>
            </div>

            <!-- Nav Bar End -->
            
            



            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".first">Civil</li>
                                <li data-filter=".second">Criminal</li>
                                <li data-filter=".third">Business</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-1.jpg" alt="Portfolio Image">
                                <figure>
                                    <a href="res.php">Murder Case</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                <figure>
                                    <a href="res.php">Political Case</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-3.jpg" alt="Portfolio Image">
                                <figure>
                                    <a href="res.php">Divorce Case</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-4.jpg" alt="Portfolio Image">
                                <figure>
                                    <a href="res.php">Money Laundering</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-5.jpg" alt="Portfolio Image">
                                <figure>
                                    <a href="res.html">Weber & Partners</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-6.jpg" alt="Portfolio Image">
                                <figure>
                                    <a href="res.html">Property Sharing Case</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 load-more">
                            <a class="btn" href="#">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
          


           <!-- Footer Start -->
           <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-about">
                            <h2>About Us</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Services Areas</h2>
                            <a href="">Civil Law</a>
                            <a href="">Family Law</a>
                            <a href="">Business Law</a>
                            <a href="">Education Law</a>
                            <a href="">Immigration Law</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Useful Pages</h2>
                            <a href="">About Us</a>
                            <a href="">Practices</a>
                            <a href="">Attorneys</a>
                            <a href="">Case Studies</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Qasimabad, Hyderabad, Pakistan</p>
                            <p><i class="fa fa-phone-alt"></i>+92 309 3932341</p>
                            <p><i class="fa fa-envelope"></i>Agreement.pk.info@gmail.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script >
            $(".profile .icon_wrap").click(function () {
            $(this).parent().toggleClass("active");
            });
            // $(document).on("click","#logoutform", "#logout", function(){
            //     session_abort();
            //     window.location = "index.php";
            // });
            function logoutFunction() {
                <?php $_SESSION['uid']==''?>
                location.reload();
    }

        </script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
