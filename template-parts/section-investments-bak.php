<?php the_content();?>

<section class="companies-page">
    <h2>Investments</h2>
    <p>We back early-stage businesses whose technologies have the potential to solve our planet's biggest challenges and
        achieve significant commercial growth. We target long-term value creation, while working with founders and
        entrepreneurs to accelerate the development and implementation of positive impact technologies.</p>

    <div class="companies-page-container">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <div class="companies-page-inner-container">
            <div class="company">
                <!--logo-->
                <?php
                    $logo = get_field('logo');
                    $logoimage = $logo['sizes']['medium'];
                    $logoalt = $logo['alt'];
                    ?>
                <?php if(get_field('logo')):?>
                <img class="logo" src="<?php echo $logoimage;?>" alt="<?php echo esc_attr($logoalt); ?>" />
                <?php endif; ?>
                <p class="pt1"> <?php the_field('sector');?></p>
                <p><a href="<?php the_permalink(); ?>"><i class="gg-arrow-long-right"></i></a>
            </div>
            <div class="company-img">
                <?php
                    $image = get_field('image');
                    $picture = $image['sizes']['large'];
                    $alt = $image['alt'];
                ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $picture;?>"
                        alt="<?php echo esc_attr($alt); ?>" /></a>
            </div>
        </div>






        <?php endwhile; else: endif;?>
</section>