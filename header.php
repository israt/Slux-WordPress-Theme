<?php

/**

 * The template for displaying the header

 *

 * @package WordPress

 * @subpackage Dynasty3

 * @since Dynasty3 1.0

 */

?>

<!doctype html>
<html lang="en-US">
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="utf-8">

<!-- Meta -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="Dynasty3">
<meta name="robots" content="" />

<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico">

<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />

<!-- Menu CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css" media="all" />

<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<!--uikit for scrolling by menu-->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/uikit.css" type="text/css" />

<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />

<?php wp_head(); ?>

</head>

<body>
	<header>
    	<div class="container">
            <div class="logo-area">
                <a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo1','no entry');?>" alt="<?php echo of_get_option('sitename','no entry');?>"></a>
            </div>
            <!--logo-area ends...-->
            <div class="menu-area">
                <div class="nav dnt3-menu">
                	 <?php /*?><?php
							  $url=get_post_permalink();
								 $pageid = url_to_postid( $url );
							?><?php 
							
							<li><a href="<?php bloginfo('url'); ?>/home/" <?php echo $pageid== '48'?'class="active"':'';?>" class="active hvr-underline-from-left">Home</a></li>
							*/?>
                            
                        <ul class="dropdown clear">
                            <!--<li><a href="#con" data-uk-smooth-scroll></a></li>-->
                            <li><a href="#home" data-uk-smooth-scroll="{offset:60}">Home</a></li>
                            <li><a href="#tec" data-uk-smooth-scroll="{offset:90}">Technology</a></li>
                            <li><a href="#pro" data-uk-smooth-scroll="{offset:60}">Products</a></li>
                            <li><a href="#cam" data-uk-smooth-scroll="{offset:60}">Campaign</a></li>
                            <li><a href="#gad" data-uk-smooth-scroll="{offset:60}">Gadget</a></li>
                            <li><a href="#wh" data-uk-smooth-scroll="{offset:60}">About us + Contacts</a></li>
                        </ul>
                </div>
            </div>
            <!--menu-area ends.....-->
        </div>
        <!--container ends....-->
    </header>
    <!--header ends....-->
    
    
    