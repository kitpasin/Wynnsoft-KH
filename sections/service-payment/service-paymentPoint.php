<section id="service-paymentPoint">
    <div class="service-payment-point">
        <?php
        $p_value = '932'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1671'; // Update value if URL contains "-kh"
        }
        $query_service_payment_point = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_payment_point->have_posts()) {
            $query_service_payment_point->the_post();

            // Get the field values
            $header_title = get_field('pointheadertitle');
            $header_description = get_field('pointheaderdescription');
            $points = array(
                array(
                    'icon' => get_field('pointtopicon1'),
                    'title' => get_field('pointtoptitle1'),
                    'description' => get_field('pointtopdescription1')
                ),
                array(
                    'icon' => get_field('pointtopicon2'),
                    'title' => get_field('pointtoptitle2'),
                    'description' => get_field('pointtopdescription2')
                ),
                array(
                    'icon' => get_field('pointtopicon3'),
                    'title' => get_field('pointtoptitle3'),
                    'description' => get_field('pointtopdescription3')
                )
            );
        ?>
        <figure class="service-payment-point-floatingimg-1">
            <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
        </figure>
        <figure class="service-payment-point-floatingimg-2">
            <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
        </figure>
        <div class="service-payment-point-group">
            <div class="service-payment-point-group-header">
                <div class="service-payment-point-group-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="service-payment-point-group-header-description">
                    <p><?= $header_description ?></p>
                </div>
            </div>
            <div class="service-payment-point-group-box">
                <?php foreach ($points as $point) { ?>
                <div class="service-payment-point-group-box-content">
                    <figure>
                        <img src=<?= $point['icon'] ?> alt="">
                    </figure>
                    <div class="service-payment-point-group-box-content-title">
                        <p><?= $point['title'] ?></p>
                    </div>
                    <div class="service-payment-point-group-box-content-line"></div>
                    <div class="service-payment-point-group-box-content-description">
                        <p><?= $point['description'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>
