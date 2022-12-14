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
            <div class="sector-logo">

                <?php
                    $logo = get_field('logo');
                    $logoimage = $logo;
                   
                    ?>
                <?php if(get_field('logo')):?>
                <img src="<?php echo $logo;?>" alt="<?php echo $logoalt;?> logo" />
                <?php endif; ?>
            </div>



            <div class="company-img">
                <?php
                    $image = get_field('image');
                    $picture = $image['sizes']['large'];
                ?>
                <img class="company-image" src="<?php echo $picture;?>" alt="<?php echo esc_attr($alt); ?>" />
                <div class="mobile-btn">
                    <button><i class="gg-arrow-long-up"></i></button>
                </div>
                <div class="company-img__overlay">
                    <div class="description">
                        <?php if(get_field('logo')):?>
                        <img class="company-img__overlay-logo" src="<?php echo $logo;?>" />
                        <?php endif; ?>
                        <h3 class="description-header"><?php the_field('header'); ?></h3>
                        <?php the_field('description'); ?>
                        <?php 
                    $link = get_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <p><a class="button" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i
                                    class="fa fa-solid fa-arrow-right fa-xs"></i></a>
                            <?php endif; ?>
                    </div>

                </div>
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
            <div class="sector-logo">
                <!--logo-->
                <?php
                    $logo = get_field('logo');
                    $logoimage = $logo;
                    
                    ?>
                <?php if(get_field('logo')):?>
                <img src="<?php echo $logoimage;?>" alt="<?php echo esc_attr($logoalt); ?>" />
                <?php endif; ?>
            </div>



            <div class="company-img">
                <?php
                    $image = get_field('image');
                    $picture = $image['sizes']['large'];
                ?>
                <img class="company-image" src="<?php echo $picture;?>" alt="<?php echo esc_attr($alt); ?>" />
                <div class="mobile-btn">
                    <button><i class="gg-arrow-long-up"></i></button>
                </div>
                <div class="company-img__overlay">
                    <div class="description">
                        <?php if(get_field('logo')):?>
                        <img class="company-img__overlay-logo" src="<?php echo $logo;?>" />
                        <?php endif; ?>
                        <h3 class="description-header"><?php the_field('header'); ?></h3>
                        <?php the_field('description'); ?>
                        <?php 
                    $link = get_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <p><a class="button" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i
                                    class="fa fa-solid fa-arrow-right fa-xs"></i></a>
                            <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
        <?php endwhile; else: endif;?>

    </div>




</section>