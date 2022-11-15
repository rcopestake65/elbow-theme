<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<section class="companies-page">
    <h2><?php the_title(); ?></h2>
    <p><?php the_field('opening_paragraph'); ?></p>

    <div class="companies-page-container">
        <?php if(have_rows('companies')):?>
        <?php while(have_rows('companies')): the_row();
            $logo = get_sub_field('logo');
            $sector = get_sub_field('sector');
            $link = get_sub_field('link');
            $image = get_sub_field('image');
            ?>
        <div class="company">
            <img class="logo" src="<?php echo $logo; ?>" alt="">
            <p class="pt1"> <?php echo $sector;?></p>
            <a href="<?php echo esc_url( $link ); ?>"><i class="gg-arrow-long-right"></i></a>
        </div>
        <div class="company-img">
            <img src="<?php echo $image; ?>" alt="" />
        </div>
        <?php endwhile;?>
        <?php endif;?>
    </div>
</section>


<?php endwhile; else: endif;?>