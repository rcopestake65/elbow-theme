<?php if(have_posts()): while(have_posts()): the_post();?>

</div>
<!--close container-->
<div class="companies-outer-container">
    <div class="container">
        <div class="companies-hero">
            <div class="bg-img">
                <img src="/wp-content/uploads/WASE_WATER.jpg" alt="">
            </div>
            <div class="logo">
                <img src="/wp-content/uploads/wase-logo.png" alt="">
            </div>
        </div>
        <div class="companies-content-container">
            <div class="col-1">
                <h3>Description</h3>
                <p>Unlocking the power of waste to fuel our future, where waste will become the everyday sustainable
                    source of water, energy and fertilisers enabling communities to flourish. Wase looks to achieve this
                    by accelerating the global adoption of circular waste treatment through affordable and accessible
                    innovations.</p>
                <div class="company-quote">
                    <blockquote>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit a consequuntur ipsa expedita
                        voluptas
                        odit quam voluptates dolor! Labore est iure repellendus eaque recusandae praesentium error
                        obcaecati
                        neque laborum quis!
                    </blockquote>
                    <cite>Name of Company executive</cite>
                </div>
            </div>
            <div class="col-2">
                <h3>Year Invested</h3>
                <p>2021</p>
                <h3>Investment Category</h3>
                <p>Sustainable Energy</p>
                <h3>Headquarters</h3>
                <p>London</p>
                <h3>Website</h3>
                <a href="https://wase.co.uk/">wase.co.uk</a>
            </div>
        </div>

    </div>
</div>

<?php the_content();?>



<?php endwhile; else: endif;?>