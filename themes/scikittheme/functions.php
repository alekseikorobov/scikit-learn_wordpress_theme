<?php
    require get_template_directory() . '/views/view1.php';

    add_action('wp_enqueue_scripts','style_theme');
    add_action('wp_footer','scripts_theme');


    function style_theme(){
        wp_enqueue_style('style',get_stylesheet_uri());

        wp_enqueue_style('bootstrap','https://scikit-learn.org/stable/_static/css/vendor/bootstrap.min.css');
        wp_enqueue_style('gallery','https://scikit-learn.org/stable/_static/gallery.css');

        wp_enqueue_style('gallery','https://scikit-learn.org/stable/_static/gallery.css');
        wp_enqueue_style('gallery-binder','https://scikit-learn.org/stable/_static/gallery-binder.css');
        wp_enqueue_style('gallery-dataframe','https://scikit-learn.org/stable/_static/gallery-dataframe.css');
        wp_enqueue_style('theme','https://scikit-learn.org/stable/_static/css/theme.css');
        
      
    }
    function scripts_theme(){
        wp_enqueue_script('documentation_options','https://scikit-learn.org/stable/_static/documentation_options.js');
        wp_enqueue_script('jquery');//,'https://scikit-learn.org/stable/_static/jquery.js');
        wp_enqueue_script('bootstrap','https://scikit-learn.org/stable/_static/js/vendor/bootstrap.min.js');
        wp_enqueue_script('versionwarning','https://scikit-learn.org/versionwarning.js');        
    }