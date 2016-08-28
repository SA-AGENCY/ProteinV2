<?php /* Template Name: Home */ 

get_header();
?>

<div class="block block__hero">
<div class="shadow"></div>
<div class="block__bg_zoom" style="background: url('<?php echo get_field('bakgrund'); ?>') center center;"></div>
<div class="block__picture os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s"><img src="<?php echo get_field('bild'); ?>"></div>
 <div class="block__wrapper align__center">
		<h4 class="color__white typography__block spacing__medium_bot os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
    Världens <span class="typed">godaste</span><br>
			<?php echo get_field('text'); ?>
    </h4>
		
    <button class="btn btn__green os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<?php echo get_field('knapptext'); ?>
    </button>
 </div>
 
  
</div>

<?php get_footer(); ?>
<script>
$(function() {
	'use strict';
	$(".typed").typed ({
		strings: ["godaste.", "bästa.", "most amazing."],
		typeSpeed: 80,
		loop: true  
	});
});
</script>