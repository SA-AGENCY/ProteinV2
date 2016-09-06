<?php /* Template Name: Home */ 

get_header();
?>

<div class="block block__hero" id="startsida">

<div class="shadow"></div>
<div class="block__bg_zoom" style="background: url('<?php echo get_field('bakgrund'); ?>') center center;"></div>

<div class="block__picture os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s"><img src="<?php echo get_field('bild'); ?>"></div>
 <div class="block__wrapper align__center">
		<h4 class="color__white typography__block spacing__medium_bot os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<?php echo get_field('text'); ?>
    </h4>
		
    <button class="btn btn__green os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<a href="#kop" style="color:white;text-decoration:none;"><?php echo get_field('knapptext'); ?></a>
    </button>
 </div>
 
</div>
<?php
	$bgwhy = get_field("why_background");
?>
<div id="varfor" class="block block__content color__white" 
style="<?php if( $bg ) {echo 'background: url('.$bg.') center center';} else {echo 'background: #74af27;';} ?>">
	
  <div class="block__wrapper align__center">
  	<h4 class="typography__block spacing__medium_bot"><?php echo get_field('why_protein'); ?></h4>
    <span><?php echo get_field('why_description'); ?></span>
  </div>
</div>

<?php
	$bgbuy= get_field("buy_background");
?>
<div id="kop" class="block block__content color__white" 
style="<?php if( $bgbuy ) {echo 'background: url('.$bgbuy.') center center';} else {echo 'background: #fff;';} ?>">
	
<div class="block__buy">
<?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 2,
        );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="grid__six_twelve">';
            woocommerce_get_template_part( 'content', 'product' );
				echo '</div>';
        endwhile;
    } else {
        echo __( 'No products found' );
    }
    wp_reset_postdata();
?>

</div>

</div>


<div class="block block__content iphone__bg">
	<div class="grid__six_twelve">
    	<img src="<?php echo get_field('lifesum_image');?>"></img>
    </div>
    
    <div class="grid__six_twelve">
    <span class="typography__block">
    <img src="<?php echo get_field('lifesum_title_img');?>" style="max-width: 150px; margin-left: 0; margin-bottom: 20px;"></img><br>
    <?php echo get_field('lifesum_text');?>
    <br>
    </span>
    
    <img src="<?php echo get_template_directory_uri(); ?>/images/bg/lifesumbg.png" style="max-width: 200px; position: absolute; right: 0; top: 0;">
   
    <a href="#kop"><button class="btn btn__green" style="margin-top: 20px">Köp gröt</button></a>
    </div>

</div>


 <div class="block block__content bg__green small__padding">
<!-- gröt -->
  <div class="grid__six_twelve" >
   <h4 class="typography__block spacing__medium_bot"><span class="typography__block" data-os-animation="bounceInLeft" data-os-animation-delay="0s" style="color:white;">Bra näringsvärden, på riktigt!, </span></h4><br>
   <h4 class="typography__block spacing__medium_bot"><span class="typography__block" data-os-animation="bounceInLeft" data-os-animation-delay="0s" style="color:white;"><i class="fa fa-check" aria-hidden="true"></i> 185 Kcal</span></h4>
   <h4 class="typography__block spacing__medium_bot"><span class="typography__block" data-os-animation="bounceInLeft" data-os-animation-delay="0s" style="color:white;"><i class="fa fa-check" aria-hidden="true"></i> 22% Protein</span></h4>
   <h4 class="typography__block spacing__medium_bot"><span class="typography__block" data-os-animation="bounceInLeft" data-os-animation-delay="0s" style="color:white;"><i class="fa fa-check" aria-hidden="true"></i> 6% Chiafrön</span></h4><br>
   
   <span class="textBlock colorWhite os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="0s" style="color:white;">
   Ingredienser:
   <b>Havregryn</b>, <b>rågflingor</b>, <b>vassleproteinkoncentrat
   (mjölk, sojalecitin)</b>, chiafrön, sockerbetsfiber,
   äppeltärningar, solroslecitin, kanel,
   natriumklorid, arom.
   </span>
  </div>
  
  <div class="width50 cell textCenter">
   <img class="grotpase os-animation" data-os-animation="bounceInRight" data-os-animation-delay="0s" src="<?php echo get_template_directory_uri(); ?>/images/grotpase.png" style="max-width: 400px; position: absolute; right: 0; top: 0;">
  </div>
 
 </div>
 
 


 <h4 class="typography__block spacing__medium_bot"> Partners</h4>
  <div class="block block__content bg__white small__padding">
  <img src="<?php echo get_template_directory_uri(); ?>/images/logos/nordicwellness.png" style="height:15%;width:15%;">
  <img src="<?php echo get_template_directory_uri(); ?>/images/logos/bodybox.png" style="height:15%;width:15%;">
  <img src="<?php echo get_template_directory_uri(); ?>/images/logos/herfitness.png" style="height:15%;width:15%;">
  <img src="<?php echo get_template_directory_uri(); ?>/images/logos/placeholder.png" style="height:15%;width:15%;">
  <img src="<?php echo get_template_directory_uri(); ?>/images/logos/placeholder.png" style="height:15%;width:15%;">
 </div>



<div class="block block__content bg__green small__padding">
	<?php echo do_shortcode('[instagram-feed]') ?>
</div>

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