<?php 
/*
Template Name: Contact Us
*/
get_header(); 
?>

<div class="row">
	<div class="col-12">
		<h2 class="my-3"><?php the_title(); ?></h2>
		<div class="contact-us text-center"><?php echo do_shortcode('[contact-form-7 id="8201" title="Contact Form"]') ?></div>
	</div>
</div>
<?php get_footer(); ?>