<!doctype html>
<html lang="<?php language_attributes() ?>">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="author" content="S/A Agency - http://sa-agency.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
  <script src="https://use.fontawesome.com/913bcad08a.js"></script>
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
  <!-- -----------------------------------------
    -- ------- Frontend by by S/A Agency -------
    --------     http://sa-agency.com    -------
    --------     hello@sa-agency.com     -------
    ---------------------------------------- -->
</head>
<body>
<?php
	$selected = get_field('navigation_style');
?>

<header class="<?php if( in_array('Transparent', $selected) ) {echo ' transparent ';}; ?>">
	<div class="brand"></div>
  <ul class="menu-desktop sa-anim">
  	<?php wp_nav_menu(array('menu' => 'main')); ?>
  </ul>
  
  <div class="right-links">
   <a href="https://www.facebook.com/proteingrot/" target="_blank" style="text-decoration:none;"><span class="fa fa-facebook-official" aria-hidden="true"></span></a>
   <a href="https://www.instagram.com/proteingrot.se/" target="_blank" style="text-decoration:none;"><span class="fa fa-instagram" aria-hidden="true"></span></a>
   <span class="user">
   <?php if ( is_user_logged_in() ) {
    echo '<a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">
		<span class="button">Mitt konto</span></a>';
		} else {
    echo '<a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">
		<span class="button">Logga in</span></a>';
	 } ?>
   </span>
  </div>
  
</header>

<div class="js-menu">
	<div class="js-menu-container">
  
  <div class="js-ul">
  	<div class="brand"></div>
		<?php wp_nav_menu(array('menu' => 'main')); ?>
    <?php if ( is_user_logged_in() ) {
    echo '<a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">
		<span class="button btn__small">Mitt konto</span></a>';
		} else {
    echo '<a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">
		<span class="button btn__small">Logga in</span></a>';
} ?>
  </div>
  
  <div class="social">
  	<a href="https://www.facebook.com/proteingrot/" style="text-decoration:none;"><span class="fa fa-facebook-official" aria-hidden="true"></span></a>
    <a href="https://www.instagram.com/proteingrot.se/" style="text-decoration:none;"><span class="fa fa-instagram" aria-hidden="true"></span></a>
  </div>
  
  </div>
</div>

<div class="<?php if( in_array('Transparent', $selected) ) {echo ' menu-toggle-transparent ';}; ?>">
	<div id="menu-toggle" href="#" class="js-trigger">
		<span class="menu-bar bar1"></span>
  	<span class="menu-bar bar2"></span>
  	<span class="menu-bar bar3"></span>
	</div>
</div>