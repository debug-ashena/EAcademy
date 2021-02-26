<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'support', 'thumbnail' );
}

function register_my_menus() {
   register_nav_menus(
         array(
            'top_menu' => ( 'منوی بالا' ),
            'main_menu' => ( ' منوی اصلی' )
        )
        );
}
add_action( 'init', 'register_my_menus' ); 


 $args = array(
    'name'          => __( 'Sidebar name', 'theme_text_domain' ),
    'id'            => 'unique-sidebar-id',    // ID should be LOWERCASE  ! ! !
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );
 
 
 
 if ( function_exists( 'register_sidebar' ) ) {
     register_sidebar( array(
         'name' => "پیوندهای سریع",
         'id' => 'ashena',
         'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
         'before_widget' => '<li id="%1$s" class="widget %2$s">',
         'after_widget'  => '</li>',
         'before_title'  => '<h2 class="widgettitle">',
         'after_title'   => '</h2>',
     ) );
	 
	 register_sidebar( array(
		  'name' => "تبلیغات سایدبار" ,
		  'id' => 'sidebar-id',
		  'description'   => 'تبلیغات دو ستونه کناری',
		  'before_title'  => '<h3>',
          'after_title'   => '</h3>' ,
		  'before_widget' => '<section class="sidebox">',
		  'after_widget' => '</section>'

		)); 
      register_sidebar( array(
		  'name' => "تبلیغات متنی" ,
		  'id' => 'text-ads',
		  'description'   => 'تبلیغات رنگارنگ متنی',
		  'before_title'  => '<h3>',
          'after_title'   => '</h3>' ,
		  'before_widget' => '<section class="ads">',
		  'after_widget' => '</section>'

		)); 

		 register_sidebar( array(
		  'name' => "فوتر" ,
		  'id' => 'footer_right',
		  'description'   => 'ویجت فوتر سمت راست',
		  'before_title'  => '<h5>',
          'after_title'   => '</h5>' ,
		  'before_widget' => '<div class="about">',
		  'after_widget' => '</div>'

		)); 
		
		register_sidebar( array(
		  'name' => " ما را دنبال کنید   " ,
		  'id' => 'footer_middle',
		  'description'   => 'راه های ارتباطی',
		  'before_title'  => '<h5>',
          'after_title'   => '</h5>' ,
		  'before_widget' => '<div class="sicial">',
		  'after_widget' => '</div>'

		)); 
		
		 

 }


?>