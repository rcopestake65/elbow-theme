<?php get_template_part('template-parts/section','hero'); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>



<!--close containers for full width bg-->
</div>
</div>
<div class="our-focus-outer-container">
    <div class="container">

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
        <h3><?php the_field('title'); ?></h3>
        <p><?php the_field('text'); ?></p>

        <?php get_template_part('template-parts/section', 'icons-static');?>

    </section>


</div>
<!--close container for full width bg-->
<div class="about-text-outer-container">
    <div class="container">

        <section class="about-text">
            <div><img src="/wp-content/uploads/01-1.jpg" alt=""></div>

            <div>
                <h3>Elbow Beach</h3>
                <p>Elbow Beach, Bermuda is a paradise of pink sand that our grandchildren may
                    never see. Crystal-clear waters lap the shore of Elbow Beach and break over
                    diminishing coral reefs, struggling to protect it from the worst of the Atlantic
                    weather that sweeps over the isolated volcanic island.</p>
                <p>Over the course of their lives, each of our founders has enjoyed Elbow Beach's
                    waters, wildlife, and coral reef. But the impact of climate change is becoming
                    clearer and more worrying with every passing day. Weather patterns are
                    changing, storms are worsening,
                    and sea levels are rising. Small islands, such as Bermuda, are at the frontline.</p>
                <p>Tourism is Bermuda's second largest industry accounting for about 5% of
                    Bermuda's GDP but a much larger share of employment. The loss of Elbow
                    Beach and others like it will permanently harm its economy, wildlife and
                    people, with those on the lowest incomes hit hardest. Elbow Beach is just a
                    single example of how man-made climate change continues to alter the world
                    we inhabit.</p>
                <p>Elbow Beach Capital is committed to ensuring that every investment we make
                    helps to protect the future of our planet, its inhabitants and its ecosystems
                    through technological advancement.</p>

            </div>
            <div><img src="/wp-content/uploads/02-1.jpg" alt="Elbow Beach, Bermuda"></div>
        </section>
    </div>
</div>
<?php endwhile; else: endif;?>