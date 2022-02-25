<section class="hero-home">
    <div class="hero-img">
        <?php if( get_field('hero_image') ): ?>
        <img src="<?php the_field('hero_image'); ?>" alt="">
        <?php endif; ?>
    </div>
    <div class="hero-title">
        <h2><?php the_field('hero_title'); ?></h2>
    </div>
    <div class="strapline">
        <p><?php the_field('strapline'); ?>
            <a class="down-btn" href="#posts"><i class="gg-arrow-long-down"></i></a>
        </p>

    </div>
</section>