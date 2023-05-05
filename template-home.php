<?php
/* 
    Template Name: FNS Home Page
*/
get_header();

?>
<section class="fns_head">
    <?php
    if (have_rows('page_banner_section')) {
        while (have_rows('page_banner_section')) {
            the_row();

            $image = get_sub_field('add_banner_image');
            $caption_heading = get_sub_field('add_caption_heading');
            $caption_subheading = get_sub_field('add_caption_subheading');
            //echo "<pre>"; print_r($image);
    ?>
            <img class="fns_head__banner" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php } ?>
    <?php } ?>
</section>

<section class="goals">
    <?php
    if (have_rows('homepage_add_banner_and_text_section')) {
        while (have_rows('homepage_add_banner_and_text_section')) {
            the_row();
            if (get_row_layout() == 'homepage_add_image') {
    ?>
                <a href="<?php echo get_sub_field('homepage_banner_link'); ?>" class="goals_overlay">
                    <div>
                        <p class="goals_overlay__head"><?php echo get_sub_field('homepage_banner_heading'); ?></p>
                        <div class="goals_overlay_subcontainer">
                            <p class="goals_overlay__sub"><?php echo get_sub_field('homepage_banner_sub_heading'); ?>
                            </p>
                            <span class="goals_overlay_arrow"><i class="fa fa-angle-right"></i></span>
                        </div>
                    </div>
                </a>

        <?php
            }
        }
    }
    if (have_rows('homepage_add_mission_vision_belive')) {
        ?>
        <div class="container">
            <div class="goals_content">
                <?php
                while (have_rows('homepage_add_mission_vision_belive')) {
                    the_row();
                    $count++;
                    if (get_row_layout() == 'mission_vision_belive_content_section') {
                ?>
                        <article class="goals_content__article">
                            <h3 class="goals_content__heading"><?php echo get_sub_field('add_mvb_title'); ?></h3>
                            <p class="goals_content__para"><?php echo get_sub_field('add_mvb_content'); ?>
                            </p>
                        </article>
                    <?php  } ?>
                <?php } ?>
            </div>
        </div>
        <div class="goals_image_overlay"></div>
    <?php
    }
    ?>
</section>
<!-- /.Athelete -->
<section class="athlete">
    <div class="container">
        <div class="athlete_content">
            <?php if (have_rows('homepage_our_athelete_section')) { ?>

                <?php while (have_rows('homepage_our_athelete_section')) {
                    the_row();

                    if (get_row_layout() == 'our_athelete_left_content') {
                        $video_thumbnel = get_sub_field('add_video_image');
                ?>
                        <div class="athlete_video">
                            <div class="athlete_heading">
                                <h2 class="athlete_head"><?php echo get_sub_field('our_athelete_left_content_title'); ?></h2>
                            </div>
                            <h2 class="athlete_head_services"><?php echo get_sub_field('add_sub_title'); ?></h2>
                            <?php if (empty(get_sub_field('our_athelete_left_video'))) { ?>
                                <img src="<?php echo $video_thumbnel['url']; ?>" alt="Video" class="athletes_video" />
                            <?php } else { ?>
                                <div class="athletes_video">
                                    <?php echo get_sub_field('our_athelete_left_video'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php
                    }
                    if (get_row_layout() == 'our_athelete_right_content') {
                    ?>
                        <div class="athlete_container">
                            <div class="athlete_grid">
                                <?php
                                $photos = get_sub_field('our_athelete_right_images');
                                $index = 0;
                                foreach ($photos as $photo) {
                                    $index++;
                                ?>
                                    <div class="athlete_grid-item<?php echo $index; ?>"><img src="<?php echo $photo; ?>" /></div>
                                <?php } ?>
                            </div>
                            <div class="athlete_footer">
                                <p><?php echo get_sub_field('our_athelete_right_content'); ?></p>
                                <a class="button" href="<?php echo get_sub_field('get_started_link'); ?>">READ MORE
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<!-- /.Training -->
<section class="training-services glide">
    <?php if (have_rows('homepage_training_services_section')) { ?>
        <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">

                <?php while (have_rows('homepage_training_services_section')) {
                    the_row();

                    if (get_row_layout() == 'add_training_services_content') {
                ?>
                        <div class="training glide__slide">
                            <div class="container-fluid">
                                <div class="training_content">
                                    <div class="training_image">
                                        <img src="<?php echo get_sub_field('add_training_services_background_image'); ?>" alt="training services" class="training_services__image">
                                    </div>
                                    <div class="training_empty_container">
                                        <div class="training_header">
                                            <?php echo get_sub_field('add_training_services_content'); ?>
                                            <a class="button" href="<?php echo get_sub_field('add_training_services_checkout_link'); ?>">CHECK OUT <i class="fa fa-ellipsis-h"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <span class="training_slider-left" data-glide-dir="<"><i class="fa fa-angle-left"></i></span>
            <span class="training_slider-right" data-glide-dir=">"><i class="fa fa-angle-right"></i></span>
        </div>

    <?php
    }
    ?>
</section>
<script>
    jQuery(document).ready(function($) {
        // Initialize Slider
        const glide = new Glide('.glide').mount();
    });
</script>

<?php get_footer(); ?>