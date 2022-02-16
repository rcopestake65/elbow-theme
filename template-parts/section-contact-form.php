<?php if(have_posts()): while(have_posts()): the_post();?>

</div>
</div>
<div class="contact-form-page">
    <section class="contact">
        <div class="contact-form-container">
            <h2>Contact us</h2>
            <h3>General Enquiries</h3>
            <div class="address">
                <p>ELBOW BEACH CAPITAL<br>
                    c/o Menzies Llp<br>
                    Lynton House 7-12<br>
                    London<br>
                    WC1H 9LT
                </p>
                <p>T: 01234 56789</p>
                <p class="capitals">E: <a href="mailto:enquiries@elbowbeach.com">enquiries@elbowbeach.com</a></p>
            </div>
            <div class="form">
                <?php the_content();?>
            </div>
        </div>


    </section>
</div>



<?php endwhile; else: endif;?>