<?php
get_header();

while ( have_posts() ) {
	the_post();
?>
	
<div class="row">
	<div class="col-12">
		<h2 class="my-3"><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
	</div>
</div>


<?php
}

get_footer();
?>
