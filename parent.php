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
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/Vaccination.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Parents</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Parents</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- login section starts -->
<section class="login-register pt-6 pb-6">
    <div class="container">
        <div class="log-main blog-full log-reg w-75 mx-auto">
            <div class="row">
                <div class="col-lg-6 pe-4">
                    <h3 class="text-center border-b pb-2">Login</h3>
                    <form method="post" action="dashboard.php" name="contactform" id="contactform3">
                        <div class="form-group mb-2">
                            <input type="text" name="user_name" class="form-control" id="fullname" placeholder="User Name or Email Address">
                        </div>
                        <div class="form-group mb-2">
                            <input type="password" name="password_name" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group mb-2">
                            <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                            <label class="custom-control-label mb-0" for="exampleCheck3">Remember me</label>
                            <a class="float-end" href="#">Lost your password?</a>
                        </div>
                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                            <input type="submit" class="nir-btn" id="submit1" value="Login">
                        </div>
                        <p class="text-center">Don't have an account? <a href="register.html" class="theme">Register</a></p>
                    </form>


                </div>
                <div class="col-lg-6 ps-4 ">
                    <h3 class="text-center border-b pb-2">Register</h3>

                    <form method="post" action="#" name="contactform2" id="contactform2">
                        <div class="form-group mb-2">
                            <input type="text" name="user_name1" class="form-control" id="1" placeholder="User Name">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="email_name" class="form-control" id="email1" placeholder="Email Address">
                        </div>
                        <div class="form-group mb-2">
                            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group mb-2">
                            <input type="password" name="password_name1" class="form-control" id="password1" placeholder="Password">
                        </div>
                        <div class="form-group mb-2">
                            <input type="password" name="repassword_name" class="form-control" id="repassword" placeholder="Re-enter Password">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="children_name" class="form-control" id="children" placeholder="Children Name">
                        </div>


                        <div class="form-group mb-2">
                            <div class="input-box">
                                <select class="niceSelect">
                                    <option value="0">Vaccination name</option>
                                    <option value="1">Sinopharm BIBP</option>
                                    <option value="2">CoronaVac</option>
                                    <option value="3">Covaxin</option>
                                    <option value="4">Valneva</option>
                                </select>
                            </div>
                        </div>

                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                            <input type="submit" class="nir-btn" id="submit3" value="Register">
                        </div>
                        <p class="text-center">Already have an account? <a href="login.html" class="theme">Login</a></p>
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