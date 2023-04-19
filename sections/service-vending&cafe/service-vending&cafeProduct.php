<section id="service-vendingcafeProduct">
    <div class="service-vendingcafe-product">
        <?php
        $p_value = '722'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1622'; // Update value if URL contains "-kh"
        }
        $query_service_vendingcafe_product = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_vendingcafe_product->have_posts()) {
            $query_service_vendingcafe_product->the_post();

            // Get the field values
            $product_top_header_title = get_field('producttopheadertitle');
            $product_top_header_description = get_field('producttopheaderdescription');
            $products = array(
                array(
                    'icon' => get_field('producttopicon1'),
                    'title' => get_field('producttoptitle1'),
                    'description' => get_field('producttopdescription1')
                ),
                array(
                    'icon' => get_field('producttopicon2'),
                    'title' => get_field('producttoptitle2'),
                    'description' => get_field('producttopdescription2')
                ),
                array(
                    'icon' => get_field('producttopicon3'),
                    'title' => get_field('producttoptitle3'),
                    'description' => get_field('producttopdescription3')
                )
            );
            $product_bot_title = get_field('productbottitle');
            $product_bot_description = get_field('productbotdescription');
        ?>
            <div class="service-vendingcafe-product-top">
                <figure class="service-vendingcafe-product-top-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
                </figure>
                <figure class="service-vendingcafe-product-top-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
                </figure>
                <div class="service-vendingcafe-product-top-header">
                    <div class="service-vendingcafe-product-top-header-title">
                        <p><?= $product_top_header_title ?></p>
                    </div>
                    <div class="service-vendingcafe-product-top-header-description">
                        <p><?= $product_top_header_description ?></p>
                    </div>
                </div>
                <div class="service-vendingcafe-product-top-group">
                    <?php foreach ($products as $product) { ?>
                    <div class="service-vendingcafe-product-top-group-box">
                        <figure>
                            <img src=<?= $product['icon'] ?> alt="">
                        </figure>
                        <div class="service-vendingcafe-product-top-group-box-title">
                            <p><?= $product['title'] ?></p>
                        </div>
                        <div class="service-vendingcafe-product-top-group-box-line"></div>
                        <div class="service-vendingcafe-product-top-group-box-description">
                            <p><?= $product['description'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="service-vendingcafe-product-bot">
                <figure class="service-vendingcafe-product-bot-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
                </figure>
                <figure class="service-vendingcafe-product-bot-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
                </figure>
                <div class="service-vendingcafe-product-bot-group">
                    <div class="service-vendingcafe-product-bot-group-title">
                        <p><?= $product_bot_title ?> </p>
                    </div>
                    <div class="service-vendingcafe-product-bot-group-line"></div>
                    <div class="service-vendingcafe-product-bot-group-description">
                        <p><?= $product_bot_description ?></p>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>