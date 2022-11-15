<?php get_template_part('template-parts/section','home-hero'); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>
<?php the_content();?>




<!--News Slider-->
<section class="posts-slider" id="posts">

    <h3>News</h3>
    <div class="posts-slider-container">

        <?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 12 ) );
            if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); 
                // Loop output goes here ?>
        <div class="post-slide">
            <h4><a href="<?php the_permalink(); ?>"> <?php the_date(); ?></a></h4>
            <p class="justify">
                <?php the_field('excerpt'); ?>
            </p>

            <p><a class="underline left-align" href="<?php the_permalink(); ?>">Read more</a></p>
            <?php $download = get_field('download'); 
        if( $download ): ?>
            <!-- <p> <a class="underline left-align" href="<?php echo esc_url( $download ); ?>">Download</a></p> -->
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
</div>

<section class="approach">
    <div class="container">
        <!-- <h3><?php //the_field('approach_header'); ?></h3> -->
        <p class="callout"><?php the_field('approach_text'); ?></p>
    </div>
    <!--.container-->
</section>

<!--Companies-->
<div class="container">
    <section class="companies">
        <h3>Investments</h3>
        <div class="companies-container">
            <div>
                <p><?php the_field('hc_intro'); ?></p>
                <a class="pill-btn" href="<?php the_field('link'); ?>">All investments</a>
            </div>

            <div>
                <a href="<?php the_field('companies_link'); ?>"><i class="gg-arrow-long-right"></i></a>
            </div>
            <div>
                <?php if( get_field('image') ): ?>
                <a href="<?php the_field('companies_link'); ?>"><img src="<?php the_field('image'); ?>" alt=""></a>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('logo') ): ?>
                <img src="<?php the_field('logo'); ?>" />
                <?php endif; ?>

            </div>
        </div>
        <!--.companies container-->
    </section>


</div>
<!--.container-->

<div class="container">

    <section class="contact">
        <div class="contact-link-container">
            <a class="contact-link" href="/contact">contact us</a>
        </div>


    </section>

    <?php endwhile; else: endif;?>