<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>
</div>
<div class="contact-full-width-container">
    <div class="container">
        <section class="contact">
            <h2>Contact us</h2>
            <?php get_template_part('template-parts/section', 'icons');?>
        </section>
    </div>

</div>



<?php endwhile; else: endif;?>