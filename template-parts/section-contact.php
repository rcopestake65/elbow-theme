<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>
<section class="contact">
    <h2>Contact us</h2>
    <?php get_template_part('template-parts/section', 'icons');?>
</section>


<?php endwhile; else: endif;?>