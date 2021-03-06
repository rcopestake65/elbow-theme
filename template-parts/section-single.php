<?php
get_header();
?>
<section class="news-single">
    <h2>News</h2>
    <?php if( have_posts() ){ while( have_posts() ){ ?>
    <div class="news-container">
        <div class="col-1">
            <h3><?php the_title(); ?></h3>
            <h4 class="posts-date"><?php the_date(); ?></h4>
            <?php the_field('copy'); ?>

            <?php $download = get_field('download'); 
                    if( $download ): ?>
            <div class="links-logo-container">
                <p> <a class="underline left-align" href="<?php echo esc_url( $download ); ?>">Download</a></p>
                <img src="<?php the_field('logo'); ?>" />
            </div>

        </div>
        <div class="col-2">
            <div class="img-zoom">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_field('image'); ?>" /></a>
            </div>
        </div>


        <?php the_post(); ?>



        <div class="pagination">
            <div class="nav-next"><?php next_post_link('%link'); ?></div>
            <div class="nav-previous"><?php previous_post_link('%link'); ?></div>

        </div>

        <?php endif; ?>

        <?php } } ?>



    </div>
</section>