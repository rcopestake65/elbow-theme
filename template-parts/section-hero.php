<section class="hero">
    <div>
        <h2><?php the_title();?></h2>
        <p><?php the_field('intro'); ?>
            <!--  <a class="down-btn" href="#content"><i class="gg-arrow-long-down"></i></a>-->
        </p>


    </div>
    <div>
        <?php if( get_field('image') ): ?>
        <img src="<?php the_field('image'); ?>" alt="">
        <?php endif; ?>
    </div>

</section>