<?php get_header();
?><main>
    <div class="max-width-700 centered-x margin-y-60">
        <h1>Join Us</h1>
        <h2 class="subheading">One day this will be a registration page</h2>
        <p>Freelancers and Clients will be able to register as member-owners. This will give them full site access and make them co-owners of the cooperative, meaning they'll be able to participate in running the platform democratically. If you'd like to help bring the cooperative to life, please fill out the interest form below!</p>
        <?php echo do_shortcode('[forminator_form id="45"]'); ?>
        <!-- 52 dev, 45 prod -->
        <?php get_template_part( 'template-parts/about'); ?>
    </div>
</main>
<?php get_footer(); ?>