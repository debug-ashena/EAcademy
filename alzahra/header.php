<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> <?php bloginfo("name") ; wp_title(); ?> </title>
		<meta name="viewport" content="width=device-width , initial-scale=1 "> 
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri();?>">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/css/metro.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/css/responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/css/tooltip.css">
        <!-- [if IE]>	<script src="JS/html5shiv.js"></script><![endif]-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/scrollbar.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easy-ticker.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/tooltip.js"></script>

        <script >
            jQuery(document).ready(function($) {
                $("#metro-box").mCustomScrollbar({
                    horizontalScroll:true,
                });
            });
        </script>


			<script >
				$(function(){
					$('.demo').easyTicker({
						direction: 'up',
					});
				});
				</script>
				
		<!--php //below line is a hook for plugins to insert their codes here -->

         <?php  wp_head();?>  
	</head>
	<body>
		<div class="mathead">
			<div class="main_mathead">
				<div class="search" role="search">
					<form action="<?php bloginfo("home") ?>/" method="get">
				       <input type="text" name="s" value="" placeholder="جستجوی کلمه موردنظر" onfocus="this.placeholder=''" onblur="this.placeholder='جستجوی کلمه موردنظر'">
					</form>
				</div>
				  <?php wp_nav_menu( array( 'theme_location' => 'top_menu',"container"=>"" ) ); ?>
			</div>
		</div>
        <span></span>
		<div id="main" role="main">
			<header>
				<nav id="header-nav" >
				  <?php  wp_nav_menu( array( 'theme_location' => 'main_menu',"container"=>"" ) ); ?>
				</nav> 
				<div class="logo"><a href="<?php bloginfo("home") ; ?>"><img src="<?php echo get_template_directory_uri();  ?>/images/logoo.png"  id="logo_uni" alt="" title="" style=""></a></div>
	       </header>
		