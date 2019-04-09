<?php

// Add Scripts

function PREFIX_add_scripts(){
    wp_enqueue_style('PREFIX-main-style', plugins_url() . '/social-links-widget/css/style.css');
    wp_enqueue_script('PREFIX-main-script', plugins_url() . '/social-links-widget/js/main.js');
}

add_action('wp_enqueue_scripts', 'PREFIX_add_scripts');