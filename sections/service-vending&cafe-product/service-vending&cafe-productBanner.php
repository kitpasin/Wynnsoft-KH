<section id="service-vendingcafe-productBanner">
    <div class="service-vendingcafe-product-banner">
        <?php
        if (isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];
        }
        $query_product = new WP_Query(array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'p' => $product_id,
            'posts_per_page' => 1
        ));
        while ($query_product->have_posts()) {
            $query_product->the_post();

            // Get the product data
            $product_image = get_the_post_thumbnail_url();

            $product_title = get_the_title();
            $product_title_kh = get_field('producttitlekh');

            $product_description = get_the_excerpt();
            $product_description_kh = get_field('productdescriptionkh');

            $regular_price = get_post_meta($product_id, '_regular_price', true);
            $sale_price = get_post_meta($product_id, '_sale_price', true);
            $product_price = wc_price($sale_price ? $sale_price : $regular_price);
            $product_price_kh = get_field('productpricekh');
        ?>
            <div class="service-vendingcafe-product-banner-group">
                <div class="service-vendingcafe-product-banner-group-left">
                    <figure class="service-vendingcafe-product-banner-group-left-mainimg">
                        <img src=<?= $product_image ?> alt="">
                    </figure>
                    <figure class="service-vendingcafe-product-banner-group-left-subimg">
                        <div class="service-vendingcafe-product-banner-group-left-subimg-box active">
                            <img src=<?= $product_image ?> alt="">
                        </div>
                        <div class="service-vendingcafe-product-banner-group-left-subimg-box">
                            <img src=<?= $product_image ?> alt="">
                        </div>
                        <div class="service-vendingcafe-product-banner-group-left-subimg-box">
                            <img src=<?= $product_image ?> alt="">
                        </div>
                    </figure>
                </div>
                <div class="service-vendingcafe-product-banner-group-right">
                    <div class="service-vendingcafe-product-banner-group-right-title">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<p>' . esc_html($product_title_kh) . '</p>';
                        } else {
                            echo '<p>' . esc_html($product_title) . '</p>';
                        }
                        ?>
                    </div>
                    <div class="service-vendingcafe-product-banner-group-right-description">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<p>' . esc_html($product_description_kh) . '</p>';
                        } else {
                            echo '<p>' . esc_html($product_description) . '</p>';
                        }
                        ?>
                    </div>
                    <div class="service-vendingcafe-product-banner-group-right-price">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<b>$</b>';
                            echo '<p>'.esc_html($product_price_kh).'</p>';
                        } else {
                            echo '<p>'.$product_price.'</p>';
                        }
                        ?>
                    </div>
                    <div class="service-vendingcafe-product-banner-group-right-contact">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<button><a href="/contact-kh/">Contact Us</a></button>';
                        } else {
                            echo '<button><a href="/contact/">Contact Us</a></button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>