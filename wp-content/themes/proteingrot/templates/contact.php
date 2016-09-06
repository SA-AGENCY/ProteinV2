<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header(); ?>
 <div class="static-spacer"></div>
<br>
<br>
<section style="background-color:#74af26;">
 <div class="wrapper" style="text-align:center;">
	<h2 style="color:#fff;"> Kontakt! </h2>

	<p style="color:#fff;">VILL DU VETA MER OM ELLER BLI
ÅTERFÖRSÄLJARE AV VÅR GRÖT? <br>

KONTAKTA OSS PÅ:<br>
08-7108000<br>
info@proteingrot.se</p>	


 </div>
</section>


<div class="block block__content">
  <div class="grid__four_twelve">

  <ul class="menu-desktop sa-anim">
  	<div class="menu-main-container"><ul id="menu-main" class="menu">
<li id="menu-item-87" class="menu-item-87"><a href="#kop">FAQ</a></li>
<li id="menu-item-25" class="menu-item-25"><a href="http://localhost:9000/villkor/">Köpvillkor</a></li>
<li id="menu-item-30" class="menu-item-30"><a href="http://localhost:9000/kontakt/">Kontakt</a></li>
	</div>
	 </ul>
	
  <img src="<?php echo get_template_directory_uri(); ?>/images/SF_pos.svg" class="footer__img">

  </div>

    <div class="grid__three_twelve">
    <a href="https://www.facebook.com/proteingrot/" target="_blank"><span class="fa fa-facebook-official fa-4x green__icon" aria-hidden="true" style="color:black;"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="https://www.instagram.com/proteingrot.se/" target="_blank"><span class="fa fa-instagram green__icon fa-4x" aria-hidden="true" style="color:black;"></span></a>
  </div>
  
    <div class="grid__five_twelve">
  	<?php echo do_shortcode('[mc4wp_form id="97"]'); ?><!-- mailchimp -->
  </div>
  
  <div class="grid__twelve_twelve align__center spacing__medium_top" style="margin-top: 70px">
  	<span class="typography__block align__center" style="margin-top: 20px;">Copyright 2016 - proteingrot.se</span>
    </div>
  
 </div>
<?php get_footer(); ?>