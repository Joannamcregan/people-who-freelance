<?php get_header();
?><main>
<?php while ( have_posts() ) :
    wp_reset_postdata();
    the_content(); ?>
<?php endwhile;
?></main>
<?php get_footer(); ?>