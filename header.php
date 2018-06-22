<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package blueflowedmedia
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body>
    <div class="topnav flex-row" id="myTopnav">
            <div class="logo flex1">
                <a href="#" class="responsive">Shake nur</a>
            </div>
            <div class="options flex1">
                <a href="#about">About</a>
                <a href="#homebuilding">Home Building</a>
                <a href="#gallery">Gallery</a>
                <a id="whiteback" href="#contact">Contact</a>

                <div class="hamburger" id="hamburger-9">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                </div>
            </div>
            <div id="dropdown-menu" class="dropdown">
                <ul>
                    <li ><a href="#about">About</a></li>
                    <li><a href="#homebuilding">Home Building</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
    </div>
</body>
