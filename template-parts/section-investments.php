<?php the_content();?>

<section class="companies-page">
    <h2>Investments</h2>
    <p>We back early-stage businesses whose technologies have the potential to solve our planet's biggest challenges and
        achieve significant commercial growth. We target long-term value creation, while working with founders and
        entrepreneurs to accelerate the development and implementation of positive impact technologies.</p>
    <h3 class="category">Core</h3>
    <p>Our Core investment vertical focuses on our three complementary investment sectors of decarbonisation,
        sustainable energy and social impact. Typically receiving seed or pre-seed funding, our core investees benefit
        from EBC’s hands-on approach to accelerating growth. </p>
    <div class="companies-page-container">

        <!--investment posts with category of core-->
        <?php
$args = array(
    'post_type' => 'investments' ,
    'category_name' => 'core'
);
$arr_posts = new WP_Query( $args );
        ?>
        <?php if($arr_posts->have_posts()): while($arr_posts->have_posts()): $arr_posts->the_post();?>
        <div class="companies-page-inner-container">
            <div class="company">
                <!--logo-->
                <?php
                    $logo = get_field('logo');
                    $logoimage = $logo;
                    $logoalt = get_field('sector');
                    ?>
                <?php if(get_field('logo')):?>
                <img class="logo" src="<?php echo $logo;?>" alt="<?php echo $logoalt;?> logo" />
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
    </div>

    <!--investment posts with category of explore-->
    <h3 class="category">Explore</h3>
    <p>Our Explore investment vertical widens our reach beyond our primary investment sectors. Explore allows us to
        support and build relationships with science-led founders and companies with longer investment horizons.</p>
    <div class="companies-page-container">
        <?php
$args = array(
    'post_type' => 'investments' ,
    'category_name' => 'explore'
);
$arr_posts = new WP_Query( $args );
        ?>
        <?php if($arr_posts->have_posts()): while($arr_posts->have_posts()): $arr_posts->the_post();?>
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

    </div>




</section>