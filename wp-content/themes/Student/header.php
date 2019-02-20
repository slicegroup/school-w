<!DOCTYPE html>
<html class="no-js" lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/school.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/list.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/product.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/woocomerce-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/product-show.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">


    <?php wp_head(); ?>
</head>





<body>
    <?php $current_file = basename($_SERVER['PHP_SELF'])."/product";?>
    <header id="header" class="nav-main">
        <div class="firt-nav">
            <!-- <div class="line"></div> -->
            <div class="content-nav icon-nav">
                <form>
                    <div class="search-wrapper">
                        <input class="search-input" type="text" placeholder="Search" /><i class="fas fa-search"></i>
                    </div>
                </form>
            </div>

            <div class="content-nav">
                <div class="logo">
                 <a href="<?php echo bloginfo('url');?>"> <img class="img-logo" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="" /></a>

             </div>
             &nbsp;
         </div>
         <a href="<?Php echo HOME_URL ( ' /car ' ) ?> "><div class="content-nav icon-nav">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/add.png" width="25px" alt="" />&nbsp;
            <p><?php echo WC()->cart->get_cart_contents_count(); ?></p>
        </div>

    </a>
</div>
<?php get_search_form (); ?>
<nav class="navbar navbar-expand-sm navbar-light header navbar-fixed-top up container " data-toggle="affix">
    <div id="menu" class="mx-auto d-sm-flex d-block flex-sm-nowrap menu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarsExample11">
        <ul id="mainNav" class="navbar-nav">
            <?php if ($current_file == 'index.php'): ?>
                <li class="nav-item active">
                    <a class="nav-link bajar" href="<?php bloginfo('url') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bajar" href="#categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bajar" href="#product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bajar" href="#footer">Contact</a>
                </li>
                <?php else: ?>
                    <li class="nav-item active">
                        <a class="nav-link bajar" href="<?php bloginfo('url') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bajar" href="<?php bloginfo('url') ?>/#categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bajar" href="<?php bloginfo('url') ?>/#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php bloginfo('url') ?>/about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bajar" href="<?php bloginfo('url') ?>/#footer">Contact</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


<!-- nav responsive -->
<div>
    <div id="main_xs">
        <div class="button-burger" id="burguer">
            <div class="hamburger hamburger--squeeze" id="squeeze">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </div>
        <nav class="menu_xs" id="menu_xs">
            <div class="frame-menu">
                <ul>
                    <li>
                        <a href="index.html">Item 1</a>
                    </li>
                    <li>
                        <a href="index.html">Item 2</a>
                    </li>
                    <li>
                        <a href="index.html">Item 3</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
            <!-- <section id="home">
							<div id="box-main">
                           </section> -->
                       </div>
                   </header>