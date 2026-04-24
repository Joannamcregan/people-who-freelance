<?php get_header();
?><main>
    <div class="max-width-700 centered-x margin-y-60">
        <h1>Come On In</h1>
        <h2 class="subheading">One day this will be a login page</h2>
        <p>Freelancers and Clients will be able to enter their username and password for full site access. If you'd like to help bring the cooperative to life, please fill out the interest form below!</p>
        <?php echo do_shortcode('[forminator_form id="52"]'); ?>
        <?php get_template_part( 'template-parts/about'); ?>
    </div>
</main>
<?php get_footer(); ?>