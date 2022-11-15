<?php if(have_posts()): while(have_posts()): the_post();?>

<section>
    <h2><?php the_title(); ?></h2>
    <?php the_content();?>
    <h3>Team</h3>
    <div class="people-container">

        <?php
                        if( have_rows('team') ):
                            while( have_rows('team') ) : the_row();
                            $name = get_sub_field('name');
                            $image = get_sub_field('image');
                            $picture = $image['sizes']['large'];
                            $alt = $image['alt'];
                            $job = get_sub_field('job');
                            $biog = get_sub_field('biog');
                    ?>
        <div class="col-<?php echo get_row_index(); ?>">

            <img src="<?php echo $picture;?>" alt="<?php echo esc_attr($alt); ?>" />

            <div class="heading">
                <h3> <?php echo $name; ?></h3>
                <?php echo $job; ?>
            </div>
            <div class="biog">
                <?php echo $biog; ?>
            </div>
        </div>


        <?php endwhile; else : endif; ?>
    </div>
    <h3 id="board">Advisory Board</h3>
    <div class="people-container advisory-board">

        <?php
                        if( have_rows('board') ):
                            while( have_rows('board') ) : the_row();
                            $boardname = get_sub_field('board_name');
                            $boardimage = get_sub_field('board_image');
                            $picture = $boardimage['sizes']['large'];
                            $alt = $boardimage['alt'];
                            $boardbiog = get_sub_field('board_biog');
                    ?>
        <div class="col-<?php echo get_row_index(); ?>">
            <img src="<?php echo $picture;?>" alt="<?php echo esc_attr($alt); ?>" />
            <div class="heading">
                <h3> <?php echo $boardname; ?></h3>

            </div>
            <div class="biog">
                <?php echo $boardbiog; ?>
            </div>
        </div>


        <?php endwhile; else : endif; ?>
    </div>
</section>

<!--close containers for full width bg-->
</div>
</div>


<?php endwhile; else: endif;?>