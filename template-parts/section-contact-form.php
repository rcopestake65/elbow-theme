<?php if(have_posts()): while(have_posts()): the_post();?>

</div>
<div class="contact-form-page">
    <div class="container">
        <section class="contact-form">
            <div class="contact-form-container">
                <h2><?php the_field('contact_us'); ?></h2>
                <h3><?php the_field('heading'); ?></h3>
                <div class="address">
                    <?php the_field('address'); ?>
                </div>
                <div class="form">
                    <?php the_content();?>
                </div>
            </div>


        </section>
    </div>

</div>

<?php endwhile; else: endif;?>