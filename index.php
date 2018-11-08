<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage OneSocial Theme
 */
get_header();
?>

<div class="content-inner">
    <section class="main-section">
        <div class="video-overlay"></div>
        <video width="100%" class="front-video" id="front-video" x-webkit-airplay="true" webkit-playsinline="true" autoplay="autoplay" loop="loop">
            <source src="<?php echo PUC_THEME_URL . '/assets/videos/';?>amtax.mp4" type="video/mp4">
            <source src="<?php echo PUC_THEME_URL . '/assets/videos/';?>amtax.ogg" type="video/mov">
            <source src="<?php echo PUC_THEME_URL . '/assets/videos/';?>amtax.ogv" type="video/ogv">
            <source src="<?php echo PUC_THEME_URL . '/assets/videos/';?>amtax.webm" type="video/webm">
            Video not supported.
        </video>
        <div class="width-wrapper"><img src="<?php echo PUC_THEME_URL . '/assets/imgs/global-logo.png'; ?>" /></div>
        <div class="circle-half-wrapper d-flex align-items-center justify-content-center">
            <div class="circle-half-image"></div>
            <div class="circle-half-text">
                <h1>16-18 MAY 2018</h1>
                <h3>| Tax Trends Today</h3>
            </div>
        </div>
    </section>
    <section class="about-us">
        <div class="width-wrapper">
            <h1>ABOUT ALVAREZ & MARSAL TAXAND</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis libero leo, sit amet interdum urna scelerisque sed. Quisque vitae sodales turpis, quis hendrerit ex. Fusce magna ipsum, eleifend sed augue id, condimentum volutpat purus. Pellentesque vitae elit orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin in lorem dolor. Fusce interdum feugiat nisl. Suspendisse eu quam purus. Nulla vulputate sem eget ipsum consectetur, a lobortis felis iaculis.
                <br /><br />
                Nullam ipsum eros, volutpat vel faucibus ullamcorper, blandit nec urna. Curabitur porta nunc quis quam congue, venenatis vestibulum leo lacinia. Nunc finibus mollis eros, eget condimentum massa efficitur id. Nulla scelerisque metus sit amet tellus laoreet, ut aliquam velit auctor. Sed ultrices ante urna, condimentum placerat enim lacinia. 
            </p>
        </div>
    </section>
    <section class="what-we-do d-flex align-items-center">
        <div class="content-overlay"></div>
        <div class="text-content">
            <div class="width-wrapper">
                <h1>WHAT WE DO</h1>
                <div class="text-area">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis libero leo, sit amet interdum urna scelerisque sed. Quisque vitae sodales turpis, quis hendrerit ex. Fusce magna ipsum, eleifend sed augue id, condimentum volutpat purus. Pellentesque vitae elit orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin in lorem dolor. Fusce interdum feugiat nisl. 
                </div>
                <div class="wheel"><img src="<?php echo PUC_THEME_URL . '/assets/imgs/wheel-graphic.png'; ?>" /></div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>