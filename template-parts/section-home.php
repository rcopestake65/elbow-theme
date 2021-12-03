<?php if(have_posts()): while(have_posts()): the_post();?>
<div class="grid-container">
    <img class="strapline" src="<?php bloginfo('template_url') ?>/img/about-strapline.svg" alt="">
    <img class="circles circle-01" src="<?php bloginfo('template_url') ?>/img/about-01.jpg" />
    <img class="circles circle-02" src="<?php bloginfo('template_url') ?>/img/about-02.jpg" alt="" />
    <div class="icons">
        <a href="https://www.facebook.com/icandanceuk/"><i class="fab fa-facebook fa-2x icons-item"></i></a>
        <a href="https://www.instagram.com/icandanceuk/"><i class="fab fa-instagram fa-2x icons-item"></i></a>
        <a href="https://twitter.com/icandanceuk"><i class="fab fa-twitter fa-2x icons-item"></i></a>
        <a href="https://uk.virginmoneygiving.com/donation-web/charity?charityId=1005041&stop_mobi=yes"><img
                class="donate" src="<?php bloginfo('template_url') ?>/img/donate.svg" alt="Donate">

            <h2>Donate</h2>
        </a>

    </div>
</div>
<?php the_content();?>
<div class="ribbon">
    <img src="<?php bloginfo('template_url') ?>/img/ribbon-1.svg">
</div>
<div class="wave">
    <img src="<?php bloginfo('template_url') ?>/img/wave-1.svg">
</div>

<?php endwhile; else: endif;?>