<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<div class="slider-container">

    <?php if(have_rows('slides')):?>
    <?php while(have_rows('slides')): the_row();
            $image = get_sub_field('image');
            $headline = get_sub_field('headline');
            $text = get_sub_field('text');
            $link = get_sub_field('link');
            ?>

    <div class="slide">
        <img src="<?php echo $image; ?>" class="slide-img" alt="">
        <h2 id="slider-header"><?php echo $headline;?></h2>
        <p id="slider-text"><?php echo $text;?><a href="<?php echo esc_url( $link ); ?>" class="pill-btn">Learn more</a>
        </p>
    </div>
    <?php endwhile;?>
    <?php endif;?>

    <div class="btn-container">
        <button type="button" class="prevBtn"><i class="gg-arrow-long-left"></i></button>
        <button type="button" class="nextBtn"><i class="gg-arrow-long-right"></i></button>
    </div>
</div>

<!--News Slider-->
<section class="posts-slider">

    <h3>News</h3>
    <div class="posts-slider-container">

        <?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 12 ) );
            if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); 
                // Loop output goes here ?>
        <div class="post-slide">
            <h4><a href="<?php the_permalink(); ?>"> <?php the_date(); ?></a></h4>
            <?php the_excerpt(); ?>
            <?php $download = get_field('download'); 
        if( $download ): ?>
            <p> <a class="underline left-align" href="<?php echo esc_url( $download ); ?>">Download</a></p>
            <?php endif; ?>
        </div>

        <?php endwhile; ?>
        <!-- reset global post variable. After this point, we are back to the Main Query object -->
        <?php wp_reset_postdata(); ?>
        <?php endif;?>

    </div>
    <div class="posts-btn-container">
        <button type="button" class="posts-prevBtn"><i class="gg-arrow-long-up"></i></button>
        <button type="button" class="posts-nextBtn"><i class="gg-arrow-long-up"></i></button>
    </div>
    <!--.posts-slider-container-->
</section>
<!--.post-slider-->

<!--Companies-->
<section class="companies">
    <h3>Companies</h3>
    <div class="companies-container">
        <div>
            <p><?php the_field('intro'); ?></p>
            <a class="pill-btn" href="<?php the_field('link'); ?>">See all companies</a>
        </div>
        <div>
            <?php if( get_field('logo') ): ?>
            <img src="<?php the_field('logo'); ?>" />
            <?php endif; ?>
            <a href=""><i class="gg-arrow-long-right"></i></a>
        </div>
        <div>
            <?php if( get_field('image') ): ?>
            <img src="<?php the_field('image'); ?>" alt="">
            <?php endif; ?>
        </div>
    </div>
    <!--.companies container-->
</section>
</div>
<!--.inner-container-->
</div>
<!--.container-->
<!--close .container and .inner-container for full width of bg colour on team section-->
<section class="team">
    <div class="container">
        <div class="inner-container">
            <h3><?php the_field('header'); ?></h3>
            <p><?php the_field('intro'); ?></p>
            <div class="team-container">
                <div class="col-one">
                    <?php
                        if( have_rows('team') ):
                            while( have_rows('team') ) : the_row();
                            $name = get_sub_field('name');
                    ?>


                    <button class="biog-btn biog-btn-<?php echo get_row_index(); ?>"
                        data-id="biog-<?php echo get_row_index(); ?>"><?php echo $name; ?></button>

                    <?php endwhile; else : endif; ?>
                </div>
                <div class="col-two">
                    <?php
                        if( have_rows('team') ):
                            while( have_rows('team') ) : the_row();
                            $image = get_sub_field('image');
                            $link = get_sub_field('link');
                            $biog = get_sub_field('biog');
                    ?>
                    <div class="content content-<?php echo get_row_index(); ?>"
                        id="biog-<?php echo get_row_index(); ?>">

                        <div class="img-link">

                            <img src="<?php echo $image; ?>" alt="" />
                            <div class="link-container">
                                <a href="<?php echo esc_url( $link ); ?>"><i class="gg-arrow-long-right"></i></a>
                            </div>

                        </div>
                        <div class="biog-text">
                            <p><?php echo $biog; ?></p>
                        </div>

                    </div>
                    <?php endwhile; else : endif; ?>
                </div>

            </div>
        </div>
        <!--.inner-container-->
    </div>
    <!--.container-->
</section>
<div class="container">
    <div class="inner-container">
        <section class="contact">
            <div class="contact-link-container">
                <a class="contact-link" href="/contact">contact us</a>
            </div>

            <?php get_template_part('template-parts/section', 'icons');?>
        </section>

        <?php endwhile; else: endif;?>