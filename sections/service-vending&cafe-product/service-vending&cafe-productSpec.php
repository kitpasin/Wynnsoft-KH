<section id="service-vendingcafe-productSpec">
    <div class="service-vendingcafe-product-spec">
        <?php
        if (isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];
        }
        $query_product = new WP_Query(array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'p' => $product_id,
            'posts_per_page' => 1,
        ));
        while ($query_product->have_posts()) {
            $query_product->the_post();

            // Get the product data
            $system_title = get_field('systemtitle');
            $system_title_kh = get_field('systemtitlekh');
            $system_description = get_field('systemdescription');
            $system_description_kh = get_field('systemdescriptionkh');

            $size_title = get_field('sizetitle');
            $size_title_kh = get_field('sizetitlekh');
            $size_description = get_field('sizedescription');
            $size_description_kh = get_field('sizedescriptionkh');

            $gadget_title = get_field('gadgettitle');
            $gadget_title_kh = get_field('gadgettitlekh');
            $gadget_description = get_field('gadgetdescription');
            $gadget_description_kh = get_field('gadgetdescriptionkh');
        ?>
            <div class="service-vendingcafe-product-spec-group">
                <div class="service-vendingcafe-product-spec-group-title">
                    <div class="service-vendingcafe-product-spec-group-title-list active" id="systemTitle">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<p>' . esc_html($system_title_kh) . '</p>';
                        } else {
                            echo '<p>' . esc_html($system_title) . '</p>';
                        }
                        ?>
                    </div>
                    <div class="service-vendingcafe-product-spec-group-title-list" id="sizeTitle">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<p>' . esc_html($size_title_kh) . '</p>';
                        } else {
                            echo '<p>' . esc_html($size_title) . '</p>';
                        }
                        ?>
                    </div>
                    <div class="service-vendingcafe-product-spec-group-title-list" id="gadgetTitle">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<p>' . esc_html($gadget_title_kh) . '</p>';
                        } else {
                            echo '<p>' . esc_html($gadget_title) . '</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="service-vendingcafe-product-spec-group-description active" id="systemDescription">
                    <?php
                    if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                        echo '<p>' . esc_html($system_description_kh) . '</p>';
                    } else {
                        echo '<p>' . esc_html($system_description) . '</p>';
                    }
                    ?>
                </div>
                <div class="service-vendingcafe-product-spec-group-description" id="sizeDescription">
                    <?php
                    if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                        echo '<p>' . esc_html($size_description_kh) . '</p>';
                    } else {
                        echo '<p>' . esc_html($size_description) . '</p>';
                    }
                    ?>
                </div>
                <div class="service-vendingcafe-product-spec-group-description" id="gadgetDescription">
                    <?php
                    if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                        echo '<p>' . esc_html($gadget_description_kh) . '</p>';
                    } else {
                        echo '<p>' . esc_html($gadget_description) . '</p>';
                    }
                    ?>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>