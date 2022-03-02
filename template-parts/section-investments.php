<?php the_content();?>

<section class="companies-page">
    <h2>Companies</h2>
    <p>We back early-stage businesses whose technologies have the potential to solve our planet's biggest challenges and
        achieve significant commercial growth. We target long-term value creation, while working with founders and
        entrepreneurs to accelerate the development and implementation of positive impact technologies.</p>

    <div class="companies-page-container">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <div class="companies-page-inner-container">
        <div class="company">
            <img class="logo" src="<?php the_field('logo') ?>" alt="">
            <p class="pt1"> <?php the_field('sector');?></p>
            <p><a href="<?php the_permalink(); ?>"><i class="gg-arrow-long-right"></i></a>
        </div>
        <div class="company-img">
            <img src="<?php the_field('image'); ?>" alt="" />
        </div>
        </div>
       





        <?php endwhile; else: endif;?>
</section>