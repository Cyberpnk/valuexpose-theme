<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/csshorizontalmenu.css" />
<style>.head-class{ 
box-shadow: 0px 0px 15px #000000;
margin-bottom: 10px;
z-index: 9999999;
position: relative;
height:92px;
}</style>
</head>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/csshorizontalmenu.js"></script>
<script>
	jQuery(function(){
	//on window scroll fire it will call a function.
	jQuery(window).scroll(function () {
	//after window scroll fire it will add define pixel added to that element.
	set = jQuery(document).scrollTop()+"px";
	//this is the jQuery animate function to fixed the div position after scrolling.
	//$('#floatDiv').animate({top:set},{duration:1000,queue:false});
	});
});
	</script>
<body <?php body_class(); ?>><div id="page" class="hfeed site">
<div id="header" class="head-class">
<div id="menu-top" class="menu-top-class">
<?php
wp_nav_menu(array('theme_location'=>'',
'menu'=>'top-menu',
'container'=> 'div',
'container_class' => 'csstopmenu',
'container_id'=>'',
'menu_class'=> 'top-menu',
'menu_id'=>'',
'echo'=> true,
'fallback_cb'=>'wp_page_menu',
'before'=>'',
'after'=> '',
'link_before'=>'',
'link_after'=>' |',
'items_wrap'=>'<ul id="%1$s" class="top-menu-nav">%3$s <li>'.do_shortcode('[dynamic-sidebar id="Translations"]').'</li></ul>',
'depth'=> 0,
'walker'=> ''));
?>
</div>
<div id="main-menu" class="main-menu-class">
<div id="logo" class="logo-class">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	<img border="0" src="<?php echo get_template_directory_uri(); ?>/css/logo-ve.jpg" width="300" height="53" class="img-responsive"></a>
</div>
	<?php
	wp_nav_menu(array('theme_location'=>'',
	'menu'=>'home',
	'container'=> 'div',
	'container_class'=>'horizontalcssmenu',
	'container_id'=>'',
	'menu_class'=>'menu',
	'menu_id'=>'',
	'echo'=>true,
	'fallback_cb'=>'wp_page_menu',
	'before'=> '',
	'after'=>'',
	'link_before'=>'',
	'link_after'=>'',
	'items_wrap'=>'<ul id="cssmenu1" class="cssmenu1">%3$s</ul>',
	'depth'=> 0,
	'walker'=> ''));
	wp_nav_menu(array('theme_location'=>'',
	'menu'=>'home',
	'container'=> 'div',
	'container_class'=>'slicknav-content',
	'container_id'=>'',
	'menu_class'=>'menu',
	'menu_id'=>'',
	'echo'=>true,
	'fallback_cb'=>'wp_page_menu',
	'before'=> '',
	'after'=>'',
	'link_before'=>'',
	'link_after'=>'',
	'items_wrap'=>'<ul id="slicknav" class="slicknav">%3$s</ul>',
	'depth'=> 0,
	'walker'=> ''));
	?>
	<script>
	jQuery(function () {
		jQuery('.slicknav').slicknav();
	});
	</script>
	</div>
	</div>
	<div style="margin-top: -9px;">
	<?php
	if(is_page(34)){
		echo do_shortcode('[rev_slider home]');
	}elseif(is_page(1974)) {
		echo do_shortcode('[rev_slider Inicio]');
	}
	?>
<div class="wrapperdiv"> 
<div class="display-content">