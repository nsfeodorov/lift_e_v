<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Advance Web Dev Fall 2016</title>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

    <!---begin WP Head Function--->
    <?php wp_head(); ?>
    <!---end WP Head Function--->

</head>

<body <?php body_class();?>>

<h1>Advance Web Dev </h1>

<header>
    <nav>
        <?php wp_nav_menu() ?>
    </nav>
</header>