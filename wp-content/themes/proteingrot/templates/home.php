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
	$bg = get_field("why_background");
?>
<div class="block block__content color__white" 
style="<?php if( $bg ) {echo 'background: url('.$bg.') center center';} else {echo 'background: #74af27;';} ?>">
	
  <div class="block__wrapper align__center">
  	<h4 class="typography__block spacing__medium_bot"><?php echo get_field('why_protein'); ?></h4>
    <span><?php echo get_field('why_description'); ?></span>
  </div>
</div>


<?php get_footer(); ?>