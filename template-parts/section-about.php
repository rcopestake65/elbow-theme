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
        <h3><?php the_field('values_title'); ?></h3>
        <p><?php the_field('values_text'); ?></p>
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
<?php endwhile; else: endif;?>