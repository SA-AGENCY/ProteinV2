<?php /* Template Name: Home */ 

get_header();
?>

<?php /* Template Name: Home */ 

get_header();
?>

<div class="block block__hero">

<div class="shadow"></div>
<div class="block__bg_zoom" style="background: url('<?php echo get_field('bakgrund'); ?>') center center;"></div>

<div class="block__picture os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s"><img src="<?php echo get_field('bild'); ?>"></div>
 <div class="block__wrapper align__center">
		<h4 class="color__white typography__block spacing__medium_bot os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<?php echo get_field('text'); ?>
    </h4>
		
    <button class="btn btn__green os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<?php echo get_field('knapptext'); ?>
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
<?php get_footer(); ?>