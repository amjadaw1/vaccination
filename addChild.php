<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vaccination Reservation</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>


<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>
<!-- Preloader Ends -->

<!-- header starts -->
<header class="main_header_area">
    <div class="header-content py-1 bg-theme">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="links">
                <ul>
                    <li><a href="#" class="white"><i class="icon-calendar white"></i> Thursday, Mar 26, 2021</a></li>
                    <li><a href="#" class="white"><i class="icon-location-pin white"></i> Riyadh, Saudi Arabia</a></li>
                    <li><a href="#" class="white"><i class="icon-clock white"></i> Mon-Fri: 10 AM – 5 PM</a></li>
                </ul>
            </div>
            <div class="links float-right">
                <ul>
                    <li><a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

</header>
<!-- header ends -->


<!-- BreadCrumb Starts -->
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/Vaccination.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3"> Add Chiled</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Add Chiled</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<?php
if (isset($_GET['name']) && $_GET['name'] == 1) { ?>
    <div class="row">
        <div class="col-lg-12"></div>
        <div class="col-lg-12">
            <div class="alert alert-danger alert-danger fade show" role="alert">
                <strong>Warning!</strong> Complete the main data (Name - Doctor - Date - Vaccination)
                <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
            </div>

        </div>
    <?php
}
    ?>
    <?php
    if (isset($_GET['suc'])) { ?>
        <div class="row">
            <div class="col-lg-12"></div>
            <div class="col-lg-12">
                <div class="alert alert-success alert-success fade show" role="alert">
                    <strong>Success!</strong> Added successfully
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
                </div>

            </div>
        <?php
    }
        ?>
        <!-- login section starts -->
        <section class="login-register pt-6 pb-6">
            <div class="container">
                <div class="log-main blog-full log-reg w-75 mx-auto">
                    <div class="row">

                        <div class="col-lg-8 ps-4 ">
                            <h3 class="text-center border-b pb-2">Add Chiled</h3>

                            <form method="post" action="insertchild.php" name="contactform2" id="contactform2">
                                <div class="form-group mb-2">
                                    <input type="text" name="children_name" class="form-control" id="children_name" placeholder="Child Name" required>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="Gender" class="niceSelect" required>
                                        <option>Gender</option>
                                        <option value="0">Female</option>
                                        <option value="1">Male</option>

                                    </select>
                                </div>

                                <div class="form-group mb-2">
                                    <input type="Date" name="Date" class="form-control" id="Date" placeholder="Birth Date" required>
                                </div>

                                <div class="form-group mb-2">
                                    <input type="phone" name="phone" class="form-control" id="phone" placeholder="Mobile ">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="phone" name="tel" class="form-control" id="tel" placeholder="Tel">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                </div>

                                <div class="comment-btn mb-2 pb-2 text-center border-b">
                                    <input type="submit" class="nir-btn" id="submit3" value="save">
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login section Ends -->




        <!-- footer starts -->
        <footer class="pt-20 pb-4" style="background-image: url(images/background_pattern.png);">
            <div class="section-shape top-0" style="background-image: url(images/shape8.png);"></div>




            <div class="footer-copyright">
                <div class="container">
                    <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                        <div class="copyright-text">
                            <p class="m-0 white">2022 Travelin. All rights reserved.</p>
                        </div>
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js"></div>
        </footer>
        <!-- footer ends -->





        <!-- *Scripts* -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/particles.js"></script>
        <script src="js/particlerun.js"></script>
        <!-- <script src="js/plugin.js"></script> -->
        <script src="js/main.js"></script>
        <script src="js/custom-swiper.js"></script>
        <script src="js/custom-nav.js"></script>
        </body>

</html>