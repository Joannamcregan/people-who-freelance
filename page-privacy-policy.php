<?php get_header();

?><main>
<?php while ( have_posts() ) :
the_post();
    ?><div class="max-width-700 centered-x margin-y-60">
        <?php wp_reset_postdata();
        the_content(); ?>
    </div>
<?php endwhile;
?></main>

<?php get_footer(); ?>