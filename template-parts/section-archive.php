<?php
get_header();
?>
<div class="container">
    <section class="news-archive">

        <h2>News</h2>
        <div class="posts-container">
            <?php if( have_posts() ){ while( have_posts() ){ ?>
            <div class="posts-item">
                <?php the_post(); ?>
                <div class="img-zoom">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_field('image'); ?>" /></a>
                </div>

                <div class="posts-item-inner-container">
                    <h3><?php the_title(); ?></h3>
                    <h4 class="posts-date"><?php the_date(); ?></h4>
                    <?php the_field('excerpt'); ?>
                    <p><a href="<?php the_permalink(); ?>" class="read-more">Read more</a></p>
                    <?php $download = get_field('download'); 
                    if( $download ): ?>
                    <div class="links-logo-container">
                        <p> <a class="underline left-align" href="<?php echo esc_url( $download ); ?>">Download</a></p>
                        <img src="<?php the_field('logo'); ?>" />
                    </div>
                </div>


                <?php endif; ?>
            </div>
            <?php } } ?>
        </div>


    </section>
</div>