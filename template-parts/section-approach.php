<?php get_template_part('template-parts/section','hero'); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>



<!--close containers for full width bg-->
</div>
</div>
<div class="investment-sectors-outer-container">
    <div class="container">
        <div id="content"></div>
        <section class="investment-sectors">

            <h3 class="pb1">INVESTMENT SECTORS</h3>
            <div class="investment-sectors-container">
                <?php if(have_rows('sectors')):?>
                <?php while(have_rows('sectors')): the_row();
            
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            ?>
                <div>
                    <h4><?php echo $title;?></h4>
                    <?php echo $text;?>
                </div>
                <?php endwhile;?>
                <?php endif;?>
            </div>
        </section>

    </div>

</div>
<div class="investment-outer-container">
    <div class="container">
        <div class="investment-inner-container">
            <div class="col-1">
                <h3><?php the_field('column_one_title')?></h3>
                <?php the_field('column_one_text')?>
            </div>
            <div class="col-2">
                <h3><?php the_field('column_two_title')?></h3>
                <?php the_field('column_two_text')?>
            </div>

        </div>

    </div>
    <?php if( get_field('investment_image') ): ?>
    <img src="<?php the_field('investment_image'); ?>" />
    <?php endif; ?>
</div>

<?php endwhile; else: endif;?>