<?php wp_footer() ?>
        <footer>
            <div class="footer-all">
                <div class="img-footer">
                    <div class="logo-footer">
                        <img src="<?= bloginfo('template_url');?>/images/logo-2.png" alt="logo">
                    </div>
                    <div class="icon-social-footer">
                        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="https://www.pinterest.fr" target="_blank"><i class="fab fa-pinterest-p fa-2x"></i></a>
                        <a href="https://www.instagram.com/?hl=fr" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://plus.google.com/discover" target="_blank"><i class="fab fa-google-plus-g fa-2x"></i></a>
                    </div>
                </div>
                <div class="menu-footer">
                    <p>Menu</p>
                    <?php wp_nav_menu(array( 'theme_location' => 'menu-footer')); ?>
                </div>
                <div class="contact-footer">
                    <p>Contact</p>
                    <p>35 rue des Horizons, Paris</p>
                    <p>Freephone: +1 800 559 6580</p>
                    <p>Telephone: +1 959 603 6035</p>
                    <p>FAX: +1 800 559 6580</p>
                    <a href="mailto:info@realhome.com">info@realhome.com</a>
                </div>
            </div>
        </footer>
    </body>
</html>