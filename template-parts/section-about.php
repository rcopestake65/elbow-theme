<?php get_template_part('template-parts/section','hero'); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>



<!--close containers for full width bg-->
</div>
</div>
<div class="our-focus-outer-container">
    <div class="container">
        <div id="content"></div>
        <section class="our-focus">

            <h3>Our Focus</h3>
            <p>We have three complementary sector focuses:</p>
            <div class="our-focus-container">
                <?php if(have_rows('focus')):?>
                <?php while(have_rows('focus')): the_row();
            
            $title = get_sub_field('title');
            $subtitle = get_sub_field('sub_title');
            $text = get_sub_field('text');
            ?>
                <div>
                    <h4><?php echo $title;?></h4>
                    <h5><?php echo $subtitle;?></h5>
                    <p><?php echo $text;?></p>
                </div>
                <?php endwhile;?>
                <?php endif;?>
            </div>
        </section>

    </div>

</div>
<div class="container">


    <section class="values">
        <!-- <h3><//?php the_field('values_title'); ?></h3> -->
        <p class="callout"><?php the_field('values_text'); ?></p>
    </section>


</div>
<!--close container for full width bg-->
<div class="about-text-outer-container">
    <div class="container">

        <section class="about-text" id="foundation">
            <div><img src="/wp-content/uploads/01-1.jpg" alt=""></div>

            <div>
                <?php the_field('foundation_text'); ?>

            </div>
            <div><img src="/wp-content/uploads/02-1.jpg" alt="Elbow Beach, Bermuda"></div>
        </section>
    </div>
</div>
<div class="charitites-outer-container">
    <div class="container">
        <h3>Charitable Donations</h3>
        <div class="charities-grid">
            <?php if(have_rows('charity')):?>
            <?php while(have_rows('charity')): the_row();
            
            $logo = get_sub_field('logo');
            $name = get_sub_field('charity_name');
            $description = get_sub_field('description');
            $link = get_sub_field('link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>

            <?php endif; ?>


            <div class="charities-grid-item">
                <?php    
            if( !empty( $logo ) ): ?>
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                <?php endif; ?>

                <h3><?php echo $name ?></h3>
                <p><?php echo $description ?></p>
                <p> <a href="<?php echo esc_url( $link_url ); ?>"
                        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i
                            class="fa fa-solid fa-arrow-right fa-xs"></i></a></p>

            </div>

            <?php endwhile;?>
            <?php endif;?>

        </div>

    </div>
</div>
<?php endwhile; else: endif;?>