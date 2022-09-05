<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- <title>Fanalis</title> -->
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div class="boxed_wrapper">


        <!-- main header -->
        <header class="main-header header-style-one">
            <!-- logo-box -->
            <div class="logo-box">
                <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                <figure class="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('jk_logo'); ?>" alt=""></a>
                </figure>
            </div>
            <!-- header-top -->
            <div class="header-top">
                <div class="outer-container">
                    <div class="top-inner clearfix">
                        <div class="left-column pull-left">
                            <ul class="info-list clearfix">
                                <li>
                                    <i class="icon-chat"></i>
                                    <span>Helpline:</span>
                                    <a href="tel:<?php echo get_theme_mod('jk_helpline'); ?>"><?php echo get_theme_mod('jk_helpline'); ?></a>
                                </li>
                                <li>
                                    <a href="mailto:<?php echo get_theme_mod('jk_email'); ?>"><?php echo get_theme_mod('jk_email'); ?></a>
                                </li>
                                <li>
                                    <?php echo get_theme_mod('jk_address'); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="right-column pull-right">
                            <div class="update-news">
                                <p><i class="icon-megaphone"></i><span>Updates:</span> Delivers Personal Protective Equipments to North Macedonia . . .</p>
                            </div>
                            <div class="language-box">
                                <span>En</span>
                                <ul class="language-list clearfix">
                                    <li><a href="index.html">English</a></li>
                                    <li><a href="index.html">Spanish</a></li>
                                    <li><a href="index.html">Chines</a></li>
                                    <li><a href="index.html">Turky</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- donate-btn -->
                <div class="donate-btn">
                    <button class="donate-box-btn theme-btn btn-one">Donate Now</button>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'navigation clearfix', 'menu_id' => 'nav')); ?>


                                </div>
                            </nav>
                        </div>
                        <div class="nav-right-content clearfix">
                            <ul class="social-style-one clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-search"></i></button>
                                    <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                        <div class="form-container">
                                            <form method="post" action="https://st.ourhtmldemo.com/new/PureHearts/blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                    <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-box">
                                <a href="products.html"><i class="icon-shopping-bag"></i></a>
                            </div>
                            <div class="nav-btn nav-toggler navSidebar-button clearfix">
                                <i class="icon-menu"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="nav-right-content clearfix">
                            <ul class="social-style-one clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-search"></i></button>
                                    <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                        <div class="form-container">
                                            <form method="post" action="https://st.ourhtmldemo.com/new/PureHearts/blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                    <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-box">
                                <a href="products.html"><i class="icon-shopping-bag"></i></a>
                            </div>
                            <div class="nav-btn nav-toggler navSidebar-button clearfix">
                                <i class="icon-menu"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
    </div>