<?php if(have_posts()): while(have_posts()): the_post();?>

<section>
    <h2><?php the_title(); ?></h2>
    <?php the_content();?>

    <div class="jobs-container">

        <?php
                        if( have_rows('jobs') ):
                            while( have_rows('jobs') ) : the_row();
                            $location = get_sub_field('location');
                            $title = get_sub_field('title');
                            $logo = get_sub_field('logo');
                            $btn = get_sub_field('btn');
                    ?>
        <div class="col-<?php echo get_row_index(); ?>">
            <h3><?php echo $location; ?></h3>
            <h4><?php echo $title; ?></h4>
            <img src="<?php echo $logo; ?>" alt="" />
            <a class="pill-btn" href="<?php echo $btn; ?>">See more details</a>


        </div>


        <?php endwhile; else : endif; ?>
    </div>
</section>

<!--close containers for full width bg-->
</div>
</div>


<?php endwhile; else: endif;?>