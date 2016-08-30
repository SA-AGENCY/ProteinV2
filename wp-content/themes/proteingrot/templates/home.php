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

<!-- <section class="footer-sub">
 <div class="wrapper">
  <div class="block__wrapper align__center">
<h4 class="typography__block spacing__medium_bot">Partners</h4></div></div><br>
  <div class="holder"><img src="http://woowho.se/wp-content/themes/protein/images/logos/nordicwellness.png"></div>
  <div class="holder"><img src="http://woowho.se/wp-content/themes/protein/images/logos/bodybox.png"></div>
  <div class="holder"><img src="http://woowho.se/wp-content/themes/protein/images/logos/herfitness.png"></div>
  <div class="holder"><img src="http://woowho.se/wp-content/themes/protein/images/logos/placeholder.png"></div>
  <div class="holder"><img src="http://woowho.se/wp-content/themes/protein/images/logos/placeholder.png"></div>
 </div>
</section> -->

<div class="block block__content iphone__bg">
	<div class="grid__six_twelve">
    	<img src="<?php echo get_template_directory_uri(); ?>/images/iphone.png">
    </div>
    
    <div class="grid__six_twelve">
    <span class="typography__block">
    <img src="<?php echo get_template_directory_uri(); ?>/images/lifesum.png" style="max-width: 150px; margin-left: 0; margin-bottom: 20px;"><br>
    Proteingröten är inte bara smakligt god, utan även nyttig. Använder du Lifesum för att hålla koll på kosten kommer vår gröt att hjälpa dig på vägen. Gröten är A klassad på Lifesum!
    <br>
    </span>
    
    <img src="<?php echo get_template_directory_uri(); ?>/images/bg/lifesumbg.png" style="max-width: 200px; position: absolute; right: 0; top: 0;">
   
    <a href="#kop"><button class="btn btn__green" style="margin-top: 20px">Köp gröt</button></a>
    </div>

</div>

<div class="block block__content bg__green small__padding">
	<?php echo do_shortcode('[instagram-feed]') ?>
</div>

<div class="block block__content">
  <div class="grid__four_twelve">

  <ul>
	<li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
                <a class="nav-link" href="/villkor">Köpvillkor</a>
                <a class="nav-link" href="#">Kontakt</a>
            </li>
    </ul>

  <img src="<?php echo get_template_directory_uri(); ?>/images/brand/logo-green.png" class="footer__img">

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