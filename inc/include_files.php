<?php
 function all_files(){
     wp_enqueue_style('main',get_template_directory_uri().'/style.css',array(),'1.0','all');
     wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',array(),'4.5','all');
     wp_enqueue_style('owl-carousel',get_template_directory_uri().'/css/owl.carousel.css',array(),'2.5','all');
     wp_enqueue_style('owl-theme',get_template_directory_uri().'/css/owl.theme.default.css',array(),'2.5','all');
     
     wp_enqueue_script('jquery');
     wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.js',array('jquery'),'4.5',false);
     wp_enqueue_script('smooth-scroll',get_template_directory_uri().'/js/smooth-scroll.js',array('jquery'),'2.0',false);
     wp_enqueue_script('mixitup',get_template_directory_uri().'/js/mixitup.js',array('jquery'),'2.0',false);
     wp_enqueue_script('owl-carousel',get_template_directory_uri().'/js/owl.carousel.js',array('jquery'),'2.0',false);
     wp_enqueue_script('easypiechart',get_template_directory_uri().'/js/jquery.easypiechart.js',array('jquery'),'2.0',false);
     wp_enqueue_script('lebelbettar',get_template_directory_uri().'/js/jquery.label_better.min.js',array('jquery'),'2.0',false);
     wp_enqueue_script('font-awsome','https://kit.fontawesome.com/60e51cf958.js',false);
     wp_enqueue_script('count-up','https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.8.2/countUp.min.js',false);

 };


add_action('wp_enqueue_scripts','all_files');
?>