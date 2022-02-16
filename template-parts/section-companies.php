<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<section class="companies">
    <h2>Companies</h2>
    <h3>Transition to net zero</h3>
    <h3>Sustainable energy</h3>
    <h3>Social impact</h3>
    <div class="companies-page-container">
        <?php if(have_rows('companies')):?>
        <?php while(have_rows('companies')): the_row();
            $logo = get_sub_field('logo');
            $sector = get_sub_field('sector');
            $link = get_sub_field('link');
            $image = get_sub_field('image');
            ?>
        <div class="company company-<?php echo get_row_index(); ?>">
            <img class="logo" src="<?php echo $logo; ?>" alt="">
            <?php echo $sector;?>
            <a href="<?php echo esc_url( $link ); ?>" class="pill-btn"><i class="gg-arrow-long-right"></i></a>
        </div>
        <div class="company-img company-img-<?php echo get_row_index(); ?>">
            <img src="<?php echo $image; ?>" alt="" />
        </div>
        <?php endwhile;?>
        <?php endif;?>
    </div>
</section>


<?php endwhile; else: endif;?>