<?php

function My_theme_enqueue_style() {
    wp_enqueue_style("ic-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts","My_theme_enqueue_style");
?>