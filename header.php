<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i can dance | <?php the_title();?></title>

    <?php wp_head();?>
</head>

<body class="about">
    <div class="container">
        <div class="inner-container">
            <header>
                <nav role="navigation" class="menu-container">
                    <div class="logo">
                        <a href="#">
                            <img src="/wp-content/uploads/logo-cropped.png">
                            <img src="/wp-content/uploads/Icandancelogo_animated_TRANS.gif">
                        </a>
                    </div>
                    <?php
wp_nav_menu(
array(
'theme-location' => 'main-menu',
'menu_class' => 'menu',
)
);
?>
                </nav>
                <div class="toggle"><a href="#"><i class="fas fa-bars"></i></a></div>
            </header>