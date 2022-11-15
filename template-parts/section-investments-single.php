<?php if(have_posts()): while(have_posts()): the_post();?>

</div>
<!--close container-->
<div class="company-outer-container">
    <div class="container">

        <div class="company-content-container">
            <div class="col-1">
                <div class="hero-logo-container">
                    <!--main image-->
                    <?php
                    $image = get_field('image');
                    $picture = $image['sizes']['large'];
                    $alt = $image['alt'];
                    ?>
                    <?php if(get_field('image')):?>
                    <img class="main-image" src="<?php echo $picture;?>" alt="<?php echo esc_attr($alt); ?>" />
                    <?php endif; ?>

                    <!--logo-->
                    <?php
                    $logo = get_field('logo');
                    $logoimage = $logo['sizes']['medium'];
                    $logoalt = $logo['alt'];
                    ?>
                    <?php if(get_field('logo')):?>
                    <img class="logo" src="<?php echo $logoimage;?>" alt="<?php echo esc_attr($logoalt); ?>" />
                    <?php endif; ?>
                </div>

                <!-- <h3>Description</h3> -->
                <?php the_field('description'); ?>
                <div class="company-quote">
                    <blockquote>
                        <?php the_field('quote'); ?>
                    </blockquote>
                    <cite><?php the_field('citation'); ?></cite>
                </div>
            </div>
            <div class="col-2">
                <h3>Year Invested</h3>
                <p><?php the_field('year_invested'); ?></p>
                <h3>Investment Category</h3>
                <p><?php the_field('category'); ?></p>
                <h3>Headquarters</h3>
                <p><?php the_field('headquarters'); ?></p>
                <h3>Website</h3>
                <?php 
                    $link = get_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                <p><a class="button" href="<?php echo esc_url( $link_url ); ?>"
                        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?></p>
                <?php if( get_field('press_release') ): ?>
                <h3>View Press Release</h3>

                <p><a href="<?php the_field('press_release'); ?>"><i class="fas fa-file-pdf fa-lg"></i></a></p>
                <?php endif; ?>

            </div>
            <div class="pagination">
                <div class="nav-next"><?php next_post_link('%link', 'Next'); ?></div>
                <div class="nav-previous"><?php previous_post_link('%link', 'Previous'); ?></div>

            </div>
        </div>
    </div>

    <?php the_content();?>



    <?php endwhile; else: endif;?>