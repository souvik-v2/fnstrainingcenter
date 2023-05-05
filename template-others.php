<?php
/*
Template Name: FNS Common Page
*/
get_header();

// Page Banner Section
$count = 0;
?>
<section class="fns_head">
    <?php
    if (have_rows('page_banner_section')) {
        while (have_rows('page_banner_section')) {
            the_row();

            $image = get_sub_field('add_banner_image');
            $caption_heading = get_sub_field('add_image_caption');
            //$caption_subheading = get_sub_field('add_caption_subheading');
    ?>
            <img class="fns_head__banner" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php }
    }
    ?>
</section>

<section class="gym-services">
    <?php if (have_rows('joining_a_team_section')) { ?>
        <div class="container">
            <div class="gym-service__content">
                <?php
                while (have_rows('joining_a_team_section')) {
                    the_row();
                    if (get_row_layout() == 'joining_a_team_layout') {
                ?>
                        <div class="gym-services__video">
                            <div class="gym-services__heading">
                                <h2 class="athlete_head"><?php echo get_sub_field('add_joining_a_team_heading'); ?></h2>
                            </div>
                            <h2 class="athlete_head_services"><?php echo get_sub_field('add_joining_a_team_sub_heading'); ?></h2>
                            <div class="athletes_video">
                                <?php echo get_sub_field('add_joining_a_team_video'); ?>
                            </div>
                        </div>
                        <div class="gym-services__text">
                            <?php echo get_sub_field('add_joining_a_team_content'); ?>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    <?php } ?>
</section>

<section class="gym-going-to-get">
    <?php if (have_rows('page_going_to_get_section')) { ?>
        <div class="container">
            <div class="gym-going-to-get__content">
                <?php
                while (have_rows('page_going_to_get_section')) {
                    the_row();

                    if (get_row_layout() == 'page_going_to_get_layout') {
                ?>
                        <h4><?php echo get_sub_field('add_going_to_get_heading'); ?></h4>

                        <?php if (have_rows('add_going_to_get_left_content')) { ?>
                            <div class="slideshow-container">
                                <?php while (have_rows('add_going_to_get_left_content')) {
                                    the_row();
                                    $count++; ?>
                                    <div class="mySlides">
                                        <?php echo get_sub_field('add_going_to_get_left_content_icon_text'); ?>
                                    </div>
                                <?php } ?>
                                <div class="dot-container">
                                    <?php for ($i = 1; $i <= $count; $i++) { ?>
                                        <hr class="dot" onclick="currentSlide(<?php echo $i; ?>)">
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>

                        <?php //echo get_sub_field('add_going_to_get_right_video'); 
                        ?>
                        <?php //echo get_sub_field('add_going_to_get_button_link'); 
                        ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</section>

<!-- <section class="gym-book-our-service">
    <div class="container">
        <div class="gym-book-our-service__content"></div>
    </div>
</section> -->

<!-- <section class="gym-goals-slider">
    <div class="container">
        <div class="gym-goals-slider__content"></div>
    </div>
</section> -->

<?php get_footer(); ?>