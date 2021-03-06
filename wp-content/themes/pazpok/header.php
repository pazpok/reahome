<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <a class="nav-link" href="<?= bloginfo('url');?>">
            <img src="<?= bloginfo('template_url');?>/images/logo-1.png" alt="logo">
        </a>
        <?php wp_nav_menu(array( 'theme_location' => 'menu-principal')); ?>
        <div class="icon-social-header">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.pinterest.fr" target="_blank"><i class="fab fa-pinterest-p"></i></a>
            <a href="https://www.instagram.com/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://plus.google.com/discover" target="_blank"><i class="fab fa-google-plus-g"></i></a>
        </div>
    </header>