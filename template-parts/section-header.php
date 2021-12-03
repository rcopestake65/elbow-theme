<div class="inner-container">

    <header>
        <nav role="navigation" class="menu-container">
            <div class="logo">
                <a href="<?php echo get_bloginfo('url') . '/'; ?>"><img
                        src="/wp-content/uploads/i-can-dance-logo.png"></a>
                <a href="<?php echo get_bloginfo('url') . '/'; ?>"><img
                        src="/wp-content/uploads/Icandancelogo_animated_TRANS.gif"></a>
            </div>
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
</div>
<!--close inner container for mobile nav to be full width-->
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
</header>
<div class="inner-container">