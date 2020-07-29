<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php the_title(); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|IM+Fell+DW+Pica|IM+Fell+DW+Pica+SC|IM+Fell+English|IM+Fell+English+SC|IM+Fell+Great+Primer+SC|Love+Ya+Like+A+Sister|Stylish" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/pompeii.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/screenshot.jpg">

    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head();?>
</head>
<body>
<nav id="navBar" class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="container">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <?php
                wp_nav_menu( array(
                    'theme-location' => 'primary',
                    'menu-class' => 'primary-menu',
                    'container' => false,
                    'items_wrap' => '%3$s'
                ));
                ?>
            </ul>
        </div>
    </div>
</nav>
<div id="introBox" class="justify-content-center">
    <div id="logoText">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/logoText.png">
    </div>
</div>