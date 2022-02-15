<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="container">
    <section>
        <h2>Our People</h2>
        <?php the_content();?>
        <h3>Founding Team</h3>
        <div class="people-container">

            <?php
                        if( have_rows('team') ):
                            while( have_rows('team') ) : the_row();
                            $name = get_sub_field('name');
                            $image = get_sub_field('image');
                            $link = get_sub_field('link');
                            $biog = get_sub_field('biog');
                    ?>
            <div class="image">
                <img src="<?php echo $image; ?>" alt="" />
            </div>
            <div class="biog">
                <?php echo $name; ?>
                <?php echo $biog; ?>
            </div>

            <?php endwhile; else : endif; ?>
        </div>
    </section>
</div>






<!--close containers for full width bg-->
</div>
</div>


<?php endwhile; else: endif;?>