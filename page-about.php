<?php get_header();
?><main>
    <div class="max-width-700 centered-x margin-y-60">
        <h1>A Cooperatively Owned Meeting Place for Freelancers and Clients</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tellus massa, pretium ac hendrerit non, laoreet quis ante. Sed erat ligula, convallis eu sodales quis, aliquam in orci. Integer non tempor turpis. Etiam consequat, erat nec pellentesque porttitor, nisi odio venenatis orci, in posuere eros ante vitae arcu. </p>
        <?php get_template_part( 'template-parts/about'); ?>
        <h2 class="subheading">Get Involved</h2>
        <p>Bringing this platform to life won't be easy, but it will be worth it. Want to help? Fill out the interest form below!</p>
        <?php echo do_shortcode('[forminator_form id="45"]'); ?>
        <!-- 52 dev, 45 prod -->
    </div>
</main>
<?php get_footer(); ?>