<div class="contact-icon-container">
    <?php
                        if( have_rows('icons') ):
                            while( have_rows('icons') ) : the_row();
                            $image = get_sub_field('icon');
                            $link = get_sub_field('link');
                            $link_url = $link['url'];
    $link_title = $link['title'];
                    ?>
    <div>
        <a href=""><img src="<?php echo $image; ?>" alt=""></a>
        <p><a class="underline" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
        </p>

    </div>
    <?php endwhile; else : endif; ?>
</div>