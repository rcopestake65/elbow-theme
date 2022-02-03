<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<div class="slider-container">

    <!--ACF-->
    <?php if(have_rows('slides')):?>

    <?php while(have_rows('slides')): the_row();


                        $image = get_sub_field('image');
                        $headline = get_sub_field('headline');
                        $text = get_sub_field('text');
                        $link = get_sub_field('link');
                        ?>
    <div class="slide">
        <img src="<?php echo $image; ?>" class="slide-img" alt="" width="700">
        <h2 id="slider-header"><?php echo $headline;?></h2>
        <p id="slider-text"><?php echo $text;?><a href="<?php echo esc_url( $link ); ?>" class="btn-more">Learn more</a>
        </p>
    </div>
    <?php endwhile;?>
    <?php endif;?>
    <!--end ACF-->


    <div class="btn-container">
        <button type="button" class="prevBtn"><i class="gg-arrow-long-left"></i></button>
        <button type="button" class="nextBtn"><i class="gg-arrow-long-right"></i></button>
    </div>
</div>

<!--News Slider-->
<div class="posts-slider-outer-container">

    <h3>News</h3>
    <div class="posts-slider-container">

        <?php
$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 12 ) );
 
if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); 
    // Loop output goes here ?>
        <div class="post-slide">
            <!--ACF-->

            <h4><a href="<?php the_permalink(); ?>"> <?php the_date(); ?></a></h4>
            <?php the_excerpt(); ?>
            <?php $download = get_field('download'); 
        if( $download ): ?>
            <p> <a href="<?php echo esc_url( $download ); ?>">Download</a></p>
        </div>
        <!--end ACF-->


        <?php endif; ?>
        <?php endwhile; endif;?>


    </div>
    <div class="posts-btn-container">
        <button type="button" class="posts-prevBtn"><i class="gg-arrow-long-up"></i></button>
        <button type="button" class="posts-nextBtn"><i class="gg-arrow-long-up"></i></button>
    </div>
    <!--.posts-slider-container-->
</div>
<!--.post-slider-outer-container-->

<!--Companies-->
<div class="companies-outer-container">
    <h3>Companies</h3>
    <div class="companies-container">
        <div>

            <p><?php the_field('intro'); ?></p>
            <?php 
$link = get_field('company_link');
if($link):
    $link_url = $link['url'];
    ?>
            <a href="<?php echo esc_url( $link_url ); ?>">See all companies</a>
            <?php endif; ?>

        </div>
        <div>
            <?php if( get_field('logo') ): ?>
            <img src="<?php the_field('logo'); ?>" />
            <?php endif; ?>

            <a href=""><i class="gg-arrow-long-right"></i></a>
        </div>
        <div>
            <img src="/wp-content/uploads/wase.jpg" alt="">
        </div>
        <div>

        </div>
    </div>
</div>


<?php endwhile; else: endif;?>