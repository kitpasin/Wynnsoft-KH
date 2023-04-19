<section id="service-paymentContact">
    <div class="service-payment-contact">
        <?php
        $p_value = '932'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1671'; // Update value if URL contains "-kh"
        }
        $query_service_payment_contact = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_payment_contact->have_posts()) {
            $query_service_payment_contact->the_post();

            // Get the field values
            $title = get_field('contacttitle');
            $description = get_field('contactdescription');
        ?>
        <figure class="service-payment-contact-floatingimg-1">
            <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
        </figure>
        <figure class="service-payment-contact-floatingimg-2">
            <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
        </figure>
        <div class="service-payment-contact-group">
            <div class="service-payment-contact-group-header">
                <div class="service-payment-contact-group-header-title">
                    <p><?= $title ?></p>
                </div>
                <div class="service-payment-contact-group-header-description">
                    <p><?= $description ?></p>
                </div>
            </div>
            <div class="service-payment-contact-group-btn">
                <?php
                if ($p_value == '1671') {
                    echo '<button><a href="/contact-kh/">Contact Us</a></button>';
                } else {
                    echo '<button><a href="/contact/">Contact Us</a></button>';
                }
                ?>
                </div>
        </div>
        <?php } 
        wp_reset_postdata();
        ?>
    </div>
</section>