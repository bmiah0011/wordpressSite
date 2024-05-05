<?php

function greenTara_files() {

    wp_enqueue_style('green_Header_Styles', get_theme_file_uri('/build/header.css'));
    wp_enqueue_style('green_Post_Styles', get_theme_file_uri('/css/posts.css'));
    wp_enqueue_style('green_Postpage_Styles', get_theme_file_uri('/css/postpage.css'));
    wp_enqueue_style('green_Homepage_Styles', get_theme_file_uri('/css/homepage.css'));
    wp_enqueue_style('green_FooterPages_Styles', get_theme_file_uri('/css/footerPages.css'));
    wp_enqueue_style('green_Footer_Styles', get_theme_file_uri('/build/footer.css'));
    
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/src/custom-scripts.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'greenTara_files');
//require_once('importposts.php');






