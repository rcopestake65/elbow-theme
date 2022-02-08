
<section class="hero">
<div>
    <h2><?php the_field('title'); ?></h2>
    <p><?php the_field('intro'); ?></p>
    <?php 
$link = get_field('link');
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
?>
    <a class="pill-btn" href="<?php echo esc_url( $link_url ); ?>"
        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>

</div>
<div>
    <?php if( get_field('image') ): ?>
    <img src="<?php the_field('image'); ?>" alt="">
    <?php endif; ?>
</div>

</section>