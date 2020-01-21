<?php


?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Industries Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body >
<header role="banner">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="<?php echo get_home_url(); ?>"><?php echo bloginfo( 'name' ) ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample05">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class' => "navbar-nav pl-md-5 ml-auto",
                        'container' => "ul",
                        'container_class' => "ulClass",
                    )
                );?>
            </div>

        </div>
    </nav>
</header>

<div class="top-shadow"></div>
<?php if(!is_front_page()): ?>
<div class="inner-page">
    <div class="slider-item" style="background-image: url('<?php echo get_header_image() ?>');">

        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                    <h1 class="pt-5"><span><?php single_cat_title() ?></span></h1>
                    <p class="mb-5 w-75 pl-0"><?php the_field('subtitle') ?></p>
                </div>
            </div>
        </div>

    </div>
</div>
<?php endif; ?>