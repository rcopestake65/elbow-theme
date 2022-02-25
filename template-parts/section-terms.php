<?php if(have_posts()): while(have_posts()): the_post();?>

</div>
<section class="terms">
    <div class="container">
        <h2><?php the_title();?></h2>
        <?php the_content();?>

    </div>

</section>

<?php endwhile; else: endif;?>