<?php

//Add Scripts
function yts_add_scripts(){

    //add Main Css
    wp_enqueue_script('yts-main-style', plugins_url().'/youtubesubs/css/main.css');

    //Add Main JS
    wp_enqueue_script('yts-main-script', plugins_url().'/youtubesubs/js/main.js');

    //Add Google Script
    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
}
add_action('wp_enqueue_scripts','yts_add_scripts');