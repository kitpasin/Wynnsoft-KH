<section id="service-vendingcafe-productRelated">
    <div class="service-vendingcafe-product-related">
        <div class="service-vendingcafe-product-related-group">
            <div class="service-vendingcafe-product-related-group-title">
                <?php
                if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                    echo '<p>Related portfolio KH</p>';
                } else {
                    echo '<p>Related portfolio</p>';
                }
                ?>
            </div>
            <div class="service-vendingcafe-product-related-group-list">
                <?php
                if (isset($_GET['category_id'])) {
                    $category_id = $_GET['category_id'];
                }
                if (isset($_GET['product_id'])) {
                    $product_id = $_GET['product_id'];
                }
                $args = array(
                    'post_type' => 'product',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' => $category_id,
                            'include_children' => true,
                        ),
                    ),
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                );

                if ($product_id) {
                    $args['post__not_in'] = array($product_id);
                }

                $query = new WP_Query($args);

                while ($query->have_posts()) {
                    $query->the_post();

                    $product_id = get_the_ID();
                    $image = get_the_post_thumbnail_url();
                    $title = get_the_title();
                    $title_kh = get_field('producttitlekh');
                    $description = get_the_excerpt();
                    $description_kh = get_field('productdescriptionkh');

                ?>

                    <div class="service-vendingcafe-product-related-group-list-box">
                        <figure class="service-vendingcafe-product-related-group-list-box-image">
                            <img src=<?= $image ?> alt="">
                        </figure>
                        <div class="service-vendingcafe-product-related-group-list-box-title">
                            <?php
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                echo '<p>' . esc_html($title_kh) . '</p>';
                            } else {
                                echo '<p>' . esc_html($title) . '</p>';
                            }
                            ?>
                        </div>
                        <div class="service-vendingcafe-product-related-group-list-box-description">
                            <?php
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                echo '<p>' . esc_html($description_kh) . '</p>';
                            } else {
                                echo '<p>' . esc_html($description) . '</p>';
                            }
                            ?>
                        </div>
                        <div class="service-vendingcafe-product-related-group-list-box-detail">
                            <?php
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                echo '<a href="' . esc_url('/service-vendingcafe-kh/product-kh/' . '?category_id=' . $category_id . '&product_id=' . $product_id) . '">Detail</a>';
                            } else {
                                echo '<a href="' . esc_url('/service-vendingcafe/product/' . '?category_id=' . $category_id . '&product_id=' . $product_id) . '">Detail</a>';
                            }
                            ?>

                        </div>
                    </div>
                <?php
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>