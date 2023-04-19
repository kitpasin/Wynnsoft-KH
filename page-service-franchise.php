<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aisutheme
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    include('wp-content/themes/aisutheme/sections/service-franchise/service-franchiseBanner.php');
    include('wp-content/themes/aisutheme/sections/service-franchise/service-franchiseBrand.php');
    include('wp-content/themes/aisutheme/sections/service-franchise/service-franchiseType.php');
    include('wp-content/themes/aisutheme/sections/service-franchise/service-franchiseAbout.php');
    ?>

</main><!-- #main -->

<?php
get_footer();
