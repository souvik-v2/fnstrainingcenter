<?php
/*
Template Name: FNS Schedule
*/
get_header();

$timezone_list = fns_timezone_list();
//echo "<pre>"; print_r($timezone_list);
?>

<section class="fns_head">
    <?php
    if (have_rows('page_banner_section')) {
        while (have_rows('page_banner_section')) {
            the_row();

            $image = get_sub_field('add_banner_image');
            $caption_heading = get_sub_field('add_image_caption');
            $show_caption = get_sub_field('show_caption');
    ?>
			<?php if($show_caption) { ?>
            <div class="fns_head-content"><?php echo $caption_heading;?></div>
			<?php } ?>
            <img class="fns_head__banner" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php }
    }
    ?>
</section>

<section class="fns_classes">
	<div class="container">
		<div class="fns_classes__content">
			<div class="fns_classes__timings">
				<div class="fns_classes__buttons" id="training-tabs">
					<a href="javascript:void(0)" id="tabone" class="cta cta-secondary">GYM FACILITY TEAM TRAINING</a>
					<a href="javascript:void(0)" id="tabtwo" class="cta cta-primary">VIRTUAL LIVE CLASSES</a>
				</div>
				<div class="fns_classes_schedule-table box" id="box-one">
					<div class="fns_classes__locations">
						<p>In-house gym timings (PST)</p>
					</div>
					<div id="tableschedulegym"></div>
				</div>
				<div class="fns_classes_schedule-table box" id="box-two">
					<div class="fns_classes__locations">
						<p>Select your region to see your time for virtual classes. FNS Classes are based off PDT
						</p>
						<select name="selCountry" class="fns_classes__dropdown" onchange="getTimezone(this.value);">
							<?php foreach ($timezone_list as $key => $value) { ?>
								<option value="<?php echo $key; ?>" <?php echo $key == 'America/New_York' ? 'selected' : ''; ?>><?php echo $value; ?></option>
							<?php } ?>
						</select>
					</div>
					<div id="tableschedulevirtual"></div>
				</div>
			</div>
			<div class="fns_classes__calender mb-box" id="mb-box-one">
				<h3>BOOK YOUR CLASS HERE!</h3>
				<h4>All classes are listed in Pacific Standard Time. (PST)</h4>
				<?php the_field('gym_mb_widget_shortcode');	?>
			</div>
			<div class="fns_classes__calender mb-box" id="mb-box-two">
				<h3>BOOK YOUR CLASS HERE!</h3>
				<h4>All classes are listed in Pacific Standard Time. (PST)</h4>
				<?php the_field('virtual_mb_widget_shortcode'); ?>
			</div>
		</div>
	</div>
</section>

<style>
	#box-one,
	#mb-box-one {
		display: none;
	}

	.bw-widget {
		font-size: inherit !important;
	}
</style>
<script>
	$(document).ready(function() {
		$("#training-tabs").on('click', 'a', function(e) {
			$("#training-tabs a").removeClass('cta-primary').addClass('cta-secondary');
			$(this).removeClass('cta-secondary').addClass('cta-primary');

			$('.box').hide().eq($(this).index()).show();
			$('.mb-box').hide().eq($(this).index()).show();
			//alert($(this).index());
		});
	});
</script>
<?php get_footer(); ?>