<?php
    session_start();
    require_once 'includes/db.php';
        // Text setting Query Start
    // Own Name
    $owner_name_select_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'own_name'"; 
    $owner_db = mysqli_query($db_connect, $owner_name_select_query);

    // Own bio
    $owner_bio_select_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'own_bio'"; 
    $owner_bio_db = mysqli_query($db_connect, $owner_bio_select_query);

    //facebook_link
    $facebook_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'facebook_link'"; 
    $facebook_db = mysqli_query($db_connect, $facebook_query);
    $facebook = mysqli_fetch_assoc($facebook_db)['setting_value'];

    // twitter_link
    $twitter_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'twitter_link'"; 
    $twitter_db = mysqli_query($db_connect, $twitter_query);
    $twitter = mysqli_fetch_assoc($twitter_db)['setting_value'];

    // instagram_link
    $instagram_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'instagram_link'"; 
    $instagram_db = mysqli_query($db_connect, $instagram_query);
    $instagram = mysqli_fetch_assoc($instagram_db)['setting_value'];

    // pinterest_link
    $pinterest_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'pinterest_link'"; 
    $pinterest_db = mysqli_query($db_connect, $pinterest_query);
    $pinterest = mysqli_fetch_assoc($pinterest_db)['setting_value'];

    // about_description
    $about_description_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'about_description'"; 
    $about_description_db = mysqli_query($db_connect, $about_description_query);
    $about = mysqli_fetch_assoc($about_description_db)['setting_value'];

    // contact_description
    $contact_description_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'contact_description'"; 
    $contact_db = mysqli_query($db_connect, $contact_description_query);

    // country_description
    $country_name_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'country_name'"; 
    $country_db = mysqli_query($db_connect, $country_name_query);
    $country = mysqli_fetch_assoc($country_db)['setting_value'];

    // Address
    $address_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'address'"; 
    $address_db = mysqli_query($db_connect, $address_query);
    $address = mysqli_fetch_assoc($address_db)['setting_value'];

    // Phone
    $phone_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'phone'"; 
    $phone_db = mysqli_query($db_connect, $phone_query);
    $phone = mysqli_fetch_assoc($phone_db)['setting_value'];

    // Email
    $email_query = "SELECT setting_value FROM text_setting WHERE setting_name = 'email'"; 
    $email_db = mysqli_query($db_connect, $email_query);
    $email = mysqli_fetch_assoc($email_db)['setting_value'];
    // Text setting Query End
// ====================================

    $id = $_GET['id'];
    $email_address = 
    // Work Query 
    $work_query = "SELECT * FROM work WHERE id = $id";
    $work_db = mysqli_query($db_connect, $work_query);
    $after_assoc = mysqli_fetch_assoc($work_db);

?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Work page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.php" class="navbar-brand logo-sticky-none"><img src="img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.php" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?php echo "$country $address";?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$phone?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$email?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a class="<?=($facebook)?"":"d-none"?>" href="<?=$facebook?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="<?=($twitter)?"":"d-none"?>" href="<?=$twitter?>"><i class="fab fa-twitter"></i></a>
                    <a class="<?=($instagram)?"":"d-none"?>" href="<?=$instagram?>"><i class="fab fa-instagram"></i></a>
                    <a class="<?=($pinterest)?"":"d-none"?>" href="<?=$pinterest?>"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="image/work_image/feature/<?=$after_assoc['work_feature_photo']?>" alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2><?=$after_assoc['work_title']?></h2>
                                    <p><?=$after_assoc['work_details']?></p>
                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                                <a href="http://www.facebook.com/sharer/sharer.php?http://127.0.0.1/$_SERVER['REQUEST_URI']" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                <a href="http://www.twitter.com/intent/tweet?http://127.0.0.1/$_SERVER['REQUEST_URI']" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <?php
                                            $post_by_email_address = $after_assoc['post_by'];
                                            // user query
                                            $user_select_query = "SELECT full_name, profile_image FROM users WHERE emai_address= '$post_by_email_address'";
                                            $user_db = mysqli_query($db_connect, $user_select_query);
                                            $after_accos_data =mysqli_fetch_assoc($user_db);
                                            ?>
                                            <div class="post-avatar-img">
                                                <img src="image/profile image/<?=$after_accos_data['profile_image']?>" alt="img" class="img-fluid" width="100px">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5><?=$after_accos_data['full_name']?></h5>
                                                <p><?=$post_by_email_address?></p>
                                                <!-- <div class="post-avatar-social mt-15">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                </div> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap primary-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->



		<!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:14 GMT -->
</html>
