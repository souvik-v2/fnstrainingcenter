</main> <!-- End main -->
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer_content">
            <section class="footer_intro">
                <a href="<?php bloginfo('url'); ?>"><img class="footer_intro_logo" src="<?php echo do_action('fns_logo_uri'); ?>" alt="logo"></a>
                <p class="footer_intro_para">
                    Awarded the Bay Area’s best training facility 2015-2022 in a <br>
                    row by metro magazine. We’re the program for people who<br>
                    want results </p>
                <div class="footer_intro_social">
                    <h3 class="footer_intro_head">OUR SOCIAL</h3>
                    <?php dynamic_sidebar('sidebar-intro'); ?>
                </div>
                <p class="footer_intro_copyright">Copyright ©Tribal Fit LLC All Rights Reserved</p>
            </section>

            <div class="footer_vertical"></div>

            <section class="footer_sitemap">
                <h3 class="footer_sitemap_head">SITEMAP</h3>
                <nav class="footer_sitemap_nav">
                    <?php fns_footer_sitemap_menu('footer_menu_1'); ?>
                    <?php fns_footer_sitemap_menu('footer_menu_2'); ?>
                </nav>
            </section>

            <section class="footer_contact">
                <h3 class="footer_contact_head">CONTACT US</h3>
                <?php dynamic_sidebar('sidebar-contactus'); ?>
            </section>
        </div>
    </div>
	<img id="scrollToTop" src="<?php echo get_template_directory_uri(); ?>/assets/images/scroll-up.png" alt="scrollUp" />
</footer>
<?php wp_footer(); ?>
</body>
</html>