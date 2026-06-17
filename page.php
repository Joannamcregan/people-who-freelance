<?php get_header();

?><main>
<?php while ( have_posts() ) :
the_post();
    ?><div>
        <?php wp_reset_postdata();
        the_content(); ?>
    </div>
<?php endwhile;
?></main>

<?php get_footer(); ?>