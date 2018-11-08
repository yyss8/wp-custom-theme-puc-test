<?php
/**
 * The Header for your theme.
 *
 * Displays all of the <head> section and everything up until <div id="main">
 *
 * @package WordPress
 * @subpackage OneSocial Theme
 */
?><!DOCTYPE html>

<!--[if lte IE 9]>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<![endif]-->

<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="msapplication-tap-highlight" content="no"/>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
	</head>

    <body <?php body_class(); ?> data-inputs="<?php echo $inputs; ?>">
    <header>
        <div class="header-inner width-wrapper">
            <div class="top-logo">
                <img src="<?php echo PUC_THEME_URL . '/assets/imgs/logo-sm.png'; ?>" />
            </div>
            <ul class="header-menu d-flex align-items-end justify-content-between">
                <li class="header-menu-logo">
                    <img width="100" src="<?php echo PUC_THEME_URL . '/assets/imgs/main-logo.png'; ?>"/>
                </li>
                <li class="header-menu-item"><a href="#about">ABOUT</a></li>
                <li class="header-menu-item"><a href="#">WHO WE SERVE</a></li>
                <li class="header-menu-item"><a href="#">WHAT WE DO</a></li>
                <li class="header-menu-item"><a href="#">THOUGHT LEADERSHIP</a></li>
                <li class="header-menu-item"><a href="#">EVENTS</a></li>
                <li class="header-menu-item"><a href="#">OUR PARTNERS</a></li>
            </ul>
            <div class="header-menu-mobile">
                <div class="header-menu-logo d-flex justify-content-between align-items-center">
                    <img width="35" src="<?php echo PUC_THEME_URL . '/assets/imgs/footer-logo.png'; ?>"/>
                    <a id="mobile-menu-button"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="header-menu-items" id="mobile-dropdown-menu">
                    <li class="header-menu-item"><a href="#about">ABOUT</a></li>
                    <li class="header-menu-item"><a href="#">WHO WE SERVE</a></li>
                    <li class="header-menu-item"><a href="#">WHAT WE DO</a></li>
                    <li class="header-menu-item"><a href="#">THOUGHT LEADERSHIP</a></li>
                    <li class="header-menu-item"><a href="#">EVENTS</a></li>
                    <li class="header-menu-item"><a href="#">OUR PARTNERS</a></li>
                    <li class="header-menu-item move-up"><a id="mobile-dropdown-up"><i class="fa fa-arrow-up"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="main-wrap">

