<?php
add_filter("gform_ajax_spinner_url", "spinner_url", 10, 2);
function spinner_url($image_src, $form) {
    return "https://baltazare.fr/wp-content/themes/t-bltzr/assets/images/bltzr-loader.gif";
}