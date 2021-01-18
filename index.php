<?php
    session_start();
    require_once 'includes/db.php';
    require_once 'includes/db-oop.php';

    // Text setting Query Start
    // Own Name
    $owner_name_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'own_name'");
    // Own bio
    $owner_bio_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'own_bio'");


    //facebook_link

    $facebook_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'facebook_link'");
    $facebook = $facebook_db['setting_value'];

    // twitter_link
    $twitter_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'twitter_link'");
    $twitter = $twitter_db['setting_value'];

    // instagram_link
    $instagram_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'instagram_link'");
    $instagram = $instagram_db['setting_value'];

    // pinterest_link
    $pinterest_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'pinterest_link'");
    $pinterest = $pinterest_db['setting_value'];

    // about_description
    $about_description_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'about_description'");
    $about = $about_description_db['setting_value'];

    // contact_description
    $contact_description_query = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'contact_description'");
    $contact_db = $contact_description_query['setting_value'];

    // country_description
    $country_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'country_name'");
    $country = $country_db['setting_value'];

    // Address
    $address_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'address'");
    $address = $address_db['setting_value'];

    // Phone
    $phone_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'phone'");
    $phone = $phone_db['setting_value'];

    // Email
    $email_db = $db->select_assoc("setting_value","text_setting","WHERE setting_name = 'email'");
    $email = $email_db['setting_value'];

    // Text setting Query End
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
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
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
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

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=$owner_name_db['setting_value']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$owner_bio_db['setting_value']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <li class="<?=($facebook)?"":"d-none"?>"><a href="<?=$facebook?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="<?=($twitter)?"":"d-none"?>"><a href="<?=$twitter?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li class="<?=($instagram)?"":"d-none"?>"><a href="<?=$instagram?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li class="<?=($pinterest)?"":"d-none"?>"><a href="<?=$pinterest?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <a href="" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                         </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="img/banner/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?=$about?></p>
                                <h3>My skill:</h3>
                            </div>
                            <!-- Education Item -->
                             <?php
                            foreach($db->select('skills') as $skill):?>
                            <div class="education">
                                <div class="year"><?=strtoupper($skill['skill_name'])?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=ucwords($skill['skill_full'] . " " . $skill['percentage'])?>%</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$skill['percentage']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                    <?php
                    foreach($db->select3key("*","services","WHERE status ='active' ORDER BY id DESC") as $service){
                    ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$service['service_icon']?>"></i>
								<h3><?=$service['service_title']?></h3>
								<p><?=$service['service_description']?></p>
							</div>
						</div>
                        <?php
                    }
                    ?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                        foreach($db->select3key("*","work", "LIMIT 4") as $work):
                    ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="image/work_image/thumbail/<?=$work['work_thumbnail_photo']?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$work['work_category']?></span>
									<h4><a href="portfolio-single.php?id=<?=$work['id']?>"><?=$work['work_title']?></a></h4>
									<a href="portfolio-single.php?id=<?=$work['id']?>" class="arrow-btn">More Information<span></span></a>
								</div>
							</div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <?php
                            foreach($db->select3key("*","fact", "LIMIT 4") as $fact):
                            ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$fact['fact_icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$fact['fact_title']?></span></h2>
                                        <span><?=$fact['fact_description']?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                            <?php foreach($db->select("testimonial") as $testi):?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="image/testimonial_image/<?=$testi['testimonial_image']?>" alt="img" class="img-fluid">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?=$testi['testimonial_say']?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$testi['testimonial_name']?></h5>
                                            <span><?=$testi['testimonial_title']?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                     <?php
                    foreach($db->select('brands') as $brand):?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="image/brand_image/<?=$brand['brand_image_name']?>" alt="not found">
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?=$contact_db?></p>
                                <h5>OFFICE IN <span><?=$country?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$address?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$phone?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$email?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="contact_post.php" method="POST">
                                    <?php
                                    if(isset($_SESSION['contact_succ'])):
                                    ?>
                                    <div class="alert alert-success text-center">
                                    <?php
                                        echo $_SESSION['contact_succ'];
                                        unset($_SESSION['contact_succ']);?>
                                    </div>
                                    <?php endif;?>
                                    <?php
                                    if(isset($_SESSION['contact_err'])):
                                    ?>
                                    <div class="alert alert-danger text-center">
                                    <?php
                                        echo $_SESSION['contact_err'];
                                        unset($_SESSION['contact_err']);?>
                                    </div>
                                    <?php endif;?>
                                    <input type="text" placeholder="your name *" name="gust_name">
                                    <input type="email" placeholder="your email *" name="gust_email">
                                    <textarea name="gust_message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
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



        <!--Start of Tawk.to Script-->
        <!-- <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5fef80e5df060f156a932471/1eqvov135';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script> -->
        <!--End of Tawk.to Script-->


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
</html>