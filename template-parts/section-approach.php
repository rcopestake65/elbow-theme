<?php get_template_part('template-parts/section','hero'); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>



<!--close containers for full width bg-->
</div>
</div>
<div class="our-focus-outer-container">
    <div class="container">
        <div class="inner-container">
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

</div>
<div class="container">
    <div class="inner-container">

        <section class="contact">


            <div class="contact-icon-container">
                <div>
                    <a class="general" href=""></a>
                    <p><a href="#">general enquiries</a></p>

                </div>
                <div>
                    <a class="entrepreneurs" href=""></a>
                    <p> <a href="#">entrepeneurs</a></p>

                </div>
                <div>
                    <a class="media" href=""></a>
                    <p><a href="#">media</a></p>

                </div>
                <div>
                    <a class="phone" href=""></a>
                    <p><a href="#">telephone</a></p>

                </div>
            </div>

        </section>


        <?php endwhile; else: endif;?>