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
            $show_caption = get_sub_field('show_caption');
    ?>
            <?php if ($show_caption) { ?>
                <div class="fns_head-content"><?php echo $caption_heading; ?></div>
            <?php } ?>
            <img class="fns_head__banner" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php }
    }
    ?>
</section>


<section class="gym-services">
    <?php if (have_rows('joining_a_team_section')) { ?>
        <div class="container">
            <div class="gym-services__content">
                <?php
                while (have_rows('joining_a_team_section')) {
                    the_row();
                    if (get_row_layout() == 'joining_a_team_layout') {
                ?>
                        <div class="gym-services__video">
                            <div class="gym-services__heading">
                                <h2 class="athlete_head"><?php echo get_sub_field('add_joining_a_team_heading'); ?></h2>
                            </div>
                            <h2 class="gym-services__head_services"><?php echo get_sub_field('add_joining_a_team_sub_heading'); ?></h2>
                            <div class="gym-services__text-wrapper">
                                <div class="athletes_video">
                                    <?php echo get_sub_field('add_joining_a_team_video'); ?>
                                </div>
                                <!-- <img class="athletes_video" src="<?= get_template_directory_uri(); ?>/assets/images/gym_video.jpg" alt="Video"> -->
                                <div class="gym-services__text">
                                    <?php echo get_sub_field('add_joining_a_team_content'); ?>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    <?php } ?>
</section>

<section class="custom_program">
    <?php if (have_rows('page_going_to_get_section')) { ?>
        <div class="container">
            <div class="custom_program__content">
                <?php
                while (have_rows('page_going_to_get_section')) {
                    the_row();

                    if (get_row_layout() == 'page_going_to_get_layout') {
                ?>
                        <h2><?php echo get_sub_field('add_going_to_get_heading'); ?></h2>
                        <div class="custom_program__wrapper">
                            <?php if (have_rows('add_going_to_get_left_content')) { ?>
                                <div>
                                    <div class="custom_program__text">
                                        <ul class="slideshow-container">
                                            <?php while (have_rows('add_going_to_get_left_content')) {
                                                the_row();
                                                $count++; ?>
                                                <li class="mySlides">
                                                    <?php echo get_sub_field('add_going_to_get_left_content_icon_text'); ?>
                                                </li>
                                            <?php } ?>
                                        </ul>

                                    </div>
                                    <div class="dot-container custom_program__slider">
                                        <ul>
                                            <?php foreach (range(1, $count) as $i) { ?>
                                                <li>
                                                    <hr class="dot" onclick="currentSlide(<?php echo $i; ?>)" />
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="custom_program__image">
                                <div class="athletes_video">
                                    <?php echo get_sub_field('add_going_to_get_right_video'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="custom_program__trial_btn">
                            <a href="<?php echo get_sub_field('add_going_to_get_button_link'); ?>" class="cta cta-primary">CLAIM YOUR 7-DAY FREE TRIAL <i class="fa fa-ellipsis-h"></i></a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</section>

<section class="book_services">
    <?php if (have_rows('page_book_our_services_section')) { ?>
        <div class="container">
            <div class="book_services__content">
                <?php
                while (have_rows('page_book_our_services_section')) {
                    the_row();

                    if (get_row_layout() == 'page_book_our_services_layout') {
                ?>

                        <h2><?php echo get_sub_field('add_book_our_services_heading'); ?></h2>
                        <p><?php echo get_sub_field('add_book_our_services_text'); ?></p>
                        <div class="book_services__slider-left">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="book_services__images" id="bookSlider">
                            <div class="MS-content">
                                <?php if (have_rows('add_book_our_services_gallery')) { ?>
                                    <?php while (have_rows('add_book_our_services_gallery')) {
                                        the_row();
                                        $image = get_sub_field('add_slider_image');
                                        $caption =  get_sub_field('add_slider_caption');
                                        $link =  get_sub_field('add_slider_link');
                                        if ($image) {
                                    ?>

                                            <div class="item">
                                                <div class="book_services__image-wrapper">
                                                    <a href="<?php echo $link; ?>">
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_html($image['title']); ?>" />
                                                    </a>
                                                    <div class="overlay fade-overlay">
                                                        <div class="book_services__overlay-icon">&#11127;</div>
                                                    </div>
                                                </div>
                                                <h3><?php echo $caption; ?></h3>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="book_services__slider-right">
                            <i class="fa fa-angle-right"></i>
                        </div>
                        <div class="book_services__cta">
                            <a href="<?php echo get_sub_field('add_book_our_services_checkout_link'); ?>" class="cta cta-primary">CHECK OUT
                                <i class="fa fa-ellipsis-h"></i>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</section>

<section class="gym_feedbacks">
    <?php if (have_rows('page_get_started_on_your_goals_slider_section')) { ?>
        <?php while (have_rows('page_get_started_on_your_goals_slider_section')) {
            the_row(); ?>
            <?php if (get_row_layout() == 'page_get_started_on_your_goals_slider_layout') { ?>
                <?php $leftimage = get_sub_field('add_goals_left_image'); ?>
                <?php $rightimage = get_sub_field('add_goals_right_image'); ?>
                <div class="container-fluid">
                    <div class="gym_feedbacks__content">
                        <div class="gym_feedbacks__wrapper">
                            <div class="gym_feedbacks__slider-left" onclick="goalPrevSlides(1)"><i class="fa fa-angle-left"></i></div>
                            <div>
                                <img src="<?php echo esc_url($leftimage['sizes']['large']); ?>" alt="<?php echo esc_html($leftimage['title']); ?>">
                            </div>

                            <div class="gym_feedbacks__text-wrapper">
                                <div class="gym_feedbacks__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <?php if (have_rows('add_your_goals_slider')) { $c=0;?>
                                    <div id="goalSlider">
                                        <div class="MS-content">
                                            <?php while (have_rows('add_your_goals_slider')) {
                                                the_row(); $c++; ?>
                                                <div class="gym_feedbacks__text item">
                                                    <?php echo get_sub_field('add_your_goals_slider_text'); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <div>
                                <img src="<?php echo esc_url($rightimage['sizes']['large']); ?>" alt="<?php echo esc_html($rightimage['title']); ?>">
                            </div>

                            <div class="gym_feedbacks__slider-right" onclick="goalPlusSlides(1)"><i class="fa fa-angle-right"></i></div>
                        </div>
                        <div class="gym_feedbacks__slider">
                            <ul>
                                <?php foreach (range(1, $c) as $i) { ?>
                                    <li>
                                        <hr class="dots" onclick="goalCurrentSlide(<?php echo $i; ?>)" />
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="gym_feedbacks__cta">
                            <a href="<?php echo get_sub_field('add_your_goals_button_link'); ?>" class="cta cta-primary">GET STARTED ON YOUR GOALS NOW
                                <i class="fa fa-ellipsis-h"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</section>

<?php get_footer(); ?>