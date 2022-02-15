<div class="values-icon-container">
    <?php
                        if( have_rows('icons') ):
                            while( have_rows('icons') ) : the_row();
                            $image = get_sub_field('icon');
                            $label = get_sub_field('icon_label');
                        
                    ?>
    <div>
        <img class="about-icons" src="<?php echo $image; ?>" alt="">
        <p><?php echo $label; ?></p>
    </div>
    <?php endwhile; else : endif; ?>
</div>