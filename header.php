<! DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset='<?php bloginfo('charset'); ?>'>
    <meta name = "viewport" content = "width=device-width", initial-scale=1>
    <title><?php
            if (is_front_page()) {
                echo 'Home | ';
                bloginfo('name');
            }
            else {
                wp_title(' | ', true, 'right');
                bloginfo('name');
            }
        ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <a href="<?php echo esc_url(site_url()) ?>" class="serif font-20 no-underline"><strong><em>PWF Demo</em></strong></a>
    <span id="menu-link" class="mobile">menu</span>
    <nav class="desktop">
        <a href="<?php echo esc_url(site_url('/services')) ?>">Find Freelancers</a>
        <a>Find Clients</a>
        <a>Learn More</a>
        <?php if (is_user_logged_in()){ 
            ?><a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
        <?php } else {
            ?><a>Join</a>
            <a href="<?php echo wp_login_url(home_url());?>">Login</a>
        <?php }
    ?></nav>
    <div id="menu-container" class="hidden mobile">
        <p id="close-menu" class="invisible">close</p>
        <nav>
            <a href="<?php echo esc_url(site_url('/services')) ?>">Find Freelancers</a>
            <a>Find Clients</a>
            <a>Learn More</a>
            <?php if (is_user_logged_in()){ 
                ?><a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
            <?php } else {
                ?><a>Join</a>
                <a href="<?php echo wp_login_url(home_url());?>">Login</a>
            <?php }
        ?></nav>
    </div>
</header>