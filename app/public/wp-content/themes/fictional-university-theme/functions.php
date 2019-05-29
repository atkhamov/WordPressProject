<?php

//Below, we have created a function for loading css file
function college_files(){
    wp_enqueue_style('college_main_styles', get_stylesheet_uri());
}
//in the following function the second argument 'college_files' is just
//the name of the function that we created above
add_action('wp_enqueue_scripts', 'college_files');