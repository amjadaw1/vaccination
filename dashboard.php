<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>vaccination</title>
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
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/welcome.webp);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Welcome Back ahmed</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Vaccination Information</li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- top Vaccination starts -->
<section class="trending pt-6  bg-lgrey pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ps-4 ">
                <h3 class="text-center border-b pb-2">Show child Vaccination</h3>
                <?php
                $sql = "SELECT `patient_id`, `patient_name` FROM `patient` where parent_id=1";
                $result = mysqli_query($conn, $sql);
                if (!empty($result->num_rows)) {
                    if ($result->num_rows > 0) {

                ?>
                        <form method="post" action="child_Vaccination.php" name="contactform2" id="contactform2">
                            <div class="form-group mb-2">
                                <div class="input-box">
                                    <select class="niceSelect">
                                        <option value="0">Children Name</option>
                                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                                            <option value="<?php echo $row['patient_id'] ?>"><?php echo $row['patient_name'] ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                <input type="submit" class="nir-btn" id="submit3" value="Show">
                            </div>
                        </form>
                <?php }
                } ?>

            </div>
            <div class="col-lg-6 col-xs-12 mb-4">
                <div class="payment-book">
                    <div class="booking-box">

                        <div class="booking-border d-flex">
                            <a href="addChild.php" class="nir-btn me-2"><i class="fa fa-plus"></i> Add Child</a>
                            <a href="vacreservation.php" class="nir-btn me-2"><i class="fa fa-plus"></i> Vaccination Reservation</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- top Vaccination ends -->




<!-- footer starts -->
<footer class="pt-20 pb-4" style="background-image: url(images/background_pattern.png);">
    <div class="section-shape top-0" style="background-image: url(images/shape8.png);"></div>




    <div class="footer-copyright">
        <div class="container">
            <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                <div class="copyright-text">
                    <p class="m-0 white">2022 . All rights reserved.</p>
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