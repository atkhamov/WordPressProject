<?php
get_header();

while (have_posts()){
    the_post(); //This is the WordPress function
    ?>
    <h2>
        <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
<?php }

get_footer();

?>