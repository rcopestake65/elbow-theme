<header>

    <div class="header-container">
        <div class="logo" id="logo">
            <a id="logo" href="<?php echo get_bloginfo('url') . '/'; ?>"><img src="/wp-content/uploads/logo.png"></a>
            <?php if (!is_front_page()) : echo '<div class="go-home"></div>'; endif;
                ?>
        </div>

        <nav role="navigation">

            <?php
wp_nav_menu(
array(
'theme-location' => 'main-menu',
'menu_class' => 'menu',
)
);
?>
            <div class="toggle-btn-container">
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times hide"></i>
                </button>
            </div>
        </nav>
    </div><!-- .header-container -->

</header>


<div class="mobile-menu-container">
    <?php
wp_nav_menu(
array(
'theme-location' => 'mobile-menu',
'menu_class' => 'mobile-menu',
)
);
?>
</div>


<div class="header-rule"></div>
<div class="container">
    <!--back to top btn-->
    <a href="#" class="scroll-link top-link">
        <i class="fas fa-arrow-up"></i>
    </a>