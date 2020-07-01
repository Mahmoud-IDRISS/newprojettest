<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/baltazare-logo-rose.png" alt="Baltazare" class="logo">
                <div class="signature">
                    <?php get_template_part('partial/svg_intro'); ?>
                </div>
            </div>
            <!-- end col-12 -->
            <div class="col-xs-12">
                <div class="sub-footer">
                    <span class="copyright"><span class="t-rose">BALTAZARE</span> ~ 12 Rue du Chateau Landon Paris 10 ~ 06 76 13 75 56</span>
                    <ul>
                        <li>
                            <a href="#" class="md-trigger" data-modal="id-bltzr-contact-form">Nous contacter</a>
                        </li>
                        <li>
                            <a href="https://remixjobs.com/company/Baltazare/75880/informations">Nous rejoindre</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Agence.BALTAZARE" target="_blank">Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/agencebaltazare/" target="_blank">Instagram</a>
                        </li>
                    </ul>
                </div>
                <!-- end sub-footer -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->

<!-- modal nifty -->
<div class="md-modal md-effect-12 kl-modal-contact-content" id="id-bltzr-contact-form">
    <div class="md-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/baltazare-logo-rose.png" alt="Baltazare" class="kl-img-contact-modal">
                        </figure>                        
                    </div>
                    <span class="kl-close-contact pull-right"><i class="fal fa-times md-close"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <?php echo do_shortcode('[gravityform id="2" ajax="true" title="false" description="false"]') ?>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4 kl-info-contact">
                    <div class="kl-block-info">
                        <h3><i class="fal fa-comments"></i>Discuter</h3>
                        <p>06 76 13 75 56</p>
                    </div>
                    <div class="kl-block-info">
                        <h3><i class="far fa-pen-alt"></i>Nous écrire</h3>
                        <p><a href="mailto:agence@baltazare.fr">agence@baltazare.fr</a></p>
                    </div>
                    <div class="kl-block-info">
                        <h3><i class="fal fa-map-marker-alt"></i>Venir à l’agence</h3>
                        <p>12, rue du Château-Landon <br/>Paris 10<sup>e</sup></p>
                    </div>
                    <div class="kl-block-info kl-social-info">
                        <p><span class="kl-ingra-regular">D’humeur à follow ?</span>
                            <a href="https://www.facebook.com/Agence.BALTAZARE" target="_blank" ><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/agencebaltazare/" target="_blank" ><i class="fab fa-instagram"></i></a></p>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- end nifty -->

<div class="md-overlay kl-overlay-contact"></div>

<!-- JS FILES -->
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/modal/custom.modal.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery("#joconde-start").hover(function() {
        jQuery('.joconde').toggleClass('joconde-active');
    });

    jQuery("#vache-start").hover(function() {
        jQuery('.vache').toggleClass('vache-active');
    });

    jQuery("#megaphone-start").hover(function() {
        jQuery('.megaphone').toggleClass('megaphone-active');
    });

    jQuery("#bulldog-start").hover(function() {
        jQuery('.bulldog').toggleClass('bulldog-active');
    });

    jQuery("#creme-start").hover(function() {
        jQuery('.creme').toggleClass('creme-active');
    });

    jQuery("#fusee-start").hover(function() {
        jQuery('.fusee').toggleClass('fusee-active');
    });

    jQuery("#fiole-start").hover(function() {
        jQuery('.fiole').toggleClass('fiole-active');
    });

    jQuery("#livre-start").hover(function() {
        jQuery('.livre').toggleClass('livre-active');
    });

    jQuery("#dems-start").hover(function() {
        jQuery('.dems').toggleClass('dems-active');
    });

    (function($) {
        $(window).load(function(){
            $(".loading .loading-image").addClass("dissappear");
            $(".loading .loading-text").addClass("dissappear");
            $(".slider").addClass("goes-up");
            $(".navbar-default").addClass("show");
            $('.loading').delay(500).addClass("fade-out");
        });
    })(jQuery);
</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/modal/classie.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/modal/modalEffects.js" type="text/javascript"></script>

</body>
</html>