<?php
/*
 * Template Name: Homepage
 */
get_header()
    ?>
<main>
    <div class="breadcrumb">Home / Who we are / <span>Contact</span></div>
    <h1>Contact</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam posuere ipsum nec velit mattis elementum.
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas eu placerat
        metus, eget placerat libero.</p>

    <div class="contact-section">
        <div class="contact-form">
            <h2>CONTACT US</h2>
            <hr class="bd">
            <?php echo do_shortcode('[contact-form-7 id="727c1d4" title="Contact form 1"]'); ?>
            <!-- <form>
                    <input type="text" placeholder="Name *" required>
                    <input type="tel" placeholder="Phone *" required>
                    <input type="email" placeholder="Email *" required>
                    <textarea placeholder="Message *" required></textarea>
                    <button type="submit">SUBMIT</button>
                </form> -->
        </div>
        <div class="reach-us">
            <h2>REACH US</h2>
            <hr class="bd">
            <p class="address">
                <?php
                $address = esc_html(get_option('address'));
                if (!empty($address)) {
                    echo $address = esc_html($address);
                } else {
                    echo 'Armala palace
                        535 La Plata Street
                        4200 Argentina';
                } ?>
            </p>


            <p>Phone:
                <?php
                $phone = esc_html(get_option('phone'));
                if (!empty($phone)) {
                    echo $phone = esc_html($phone);
                } else {
                    echo '385.154.11.28.38';
                } ?><br>
                Fax:
                <?php
                $fax = esc_html(get_option('fax'));
                if (!empty($fax)) {
                    echo $fax = esc_html($fax);
                } else {
                    echo '385.154.11.28.38';
                } ?>
                <?php echo esc_html(get_option('fax')); ?>
            </p>
            <div class="social-icons">
                <?php
                $facebook = esc_url(get_option('facebook'));
                $twitter = esc_url(get_option('twitter'));
                $linkedin = esc_url(get_option('linkedin'));
                $pinterest = esc_url(get_option('pinterest'));

                if (!empty($facebook)) {
                    echo '<a href="' . $facebook . '" target="_blank"><i class="fab fa-facebook-f"></i></a>';
                }
                if (!empty($twitter)) {
                    echo '<a href="' . $twitter . '" target="_blank"><i class="fab fa-twitter"></i></a>';
                }
                if (!empty($linkedin)) {
                    echo '<a href="' . $linkedin . '" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
                }
                if (!empty($pinterest)) {
                    echo '<a href="' . $pinterest . '" target="_blank"><i class="fab fa-pinterest-p"></i></a>';
                }
                ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>