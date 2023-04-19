<section id="service-paymentCashless">
    <div class="service-payment-cashless">
        <?php
        $p_value = '932'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1671'; // Update value if URL contains "-kh"
        }
        $query_service_payment_cashless = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_payment_cashless->have_posts()) {
            $query_service_payment_cashless->the_post();

            // Get the field values
            $top_title = get_field('cashlesstoptitle');
            $top_description = get_field('cashlesstopdescription');
            $tables = array(
                array(
                    'title' => get_field('cashlesstabletitle1'),
                    'description_top' => get_field('cashlesstabletopdescription1'),
                    'image' => get_field('cashlesstableimage1'),
                    'description_bot' => get_field('cashlesstablebotdescription1'),
                ),
                array(
                    'title' => get_field('cashlesstabletitle2'),
                    'description_top' => get_field('cashlesstabletopdescription2'),
                    'image' => get_field('cashlesstableimage2'),
                    'description_bot' => get_field('cashlesstablebotdescription2'),
                ),
            );
        ?>
        <div class="service-payment-cashless-top">
            <figure class="service-payment-cashless-top-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="service-payment-cashless-top-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="service-payment-cashless-top-group">
                <div class="service-payment-cashless-top-group-box">
                    <div class="service-payment-cashless-top-group-box-title">
                        <p><?= $top_title ?></p>
                    </div>
                    <div class="service-payment-cashless-top-group-box-line"></div>
                    <div class="service-payment-cashless-top-group-box-description">
                        <p><?= $top_description ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-payment-cashless-bot">
            <figure class="service-payment-cashless-bot-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="service-payment-cashless-bot-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="service-payment-cashless-bot-group">
                <?php foreach ($tables as $table) { ?>
                <div class="service-payment-cashless-bot-group-box">
                    <div class="service-payment-cashless-bot-group-box-header">
                        <div class="service-payment-cashless-bot-group-box-header-title">
                            <p><?= $table['title'] ?></p>
                        </div>
                        <div class="service-payment-cashless-bot-group-box-header-description">
                            <p><?= $table['description_top'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="service-payment-cashless-bot-group-box-content">
                        <figure class="service-payment-cashless-bot-group-box-content-table">
                            <img src=<?= $table['image'] ?> alt="">
                        </figure>
                        <div class="service-payment-cashless-bot-group-box-content-description">
                            <p><?= $table['description_bot'] ?>
                            </p>
                        </div>
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
