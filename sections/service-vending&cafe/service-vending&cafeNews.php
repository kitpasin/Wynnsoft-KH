<section id="service-vendingcafeNews">
    <div class="service-vendingcafe-news">
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
            $header_title = get_field('newsheadertitle');
            $header_description = get_field('newsheaderdescription');
            $cate_title = get_field('newscategorytitle');
        ?>
            <figure class="service-vendingcafe-news-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="service-vendingcafe-news-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="service-vendingcafe-news-group">
                <div class="service-vendingcafe-news-group-top">
                    <div class="service-vendingcafe-news-group-top-header">
                        <div class="service-vendingcafe-news-group-top-header-title">
                            <p><?= $header_title ?></p>
                        </div>
                        <div class="service-vendingcafe-news-group-top-header-description">
                            <p><?= $header_description ?></p>
                        </div>
                    </div>
                    <div class="service-vendingcafe-news-group-top-box">
                        <?php
                        $parent_cat_id = get_term_by('slug', 'product', 'product_cat')->term_id;
                        $category_id = $parent_cat_id; // Set the category ID to the parent category ID by default

                        if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
                            $category_id = intval($_GET['category_id']); // Use the category ID from the query string if available
                        }

                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 2,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field'    => 'parent',
                                    'terms'    => $category_id,
                                ),
                            ),
                        );

                        $products_query = new WP_Query($args);

                        if ($products_query->have_posts()) {
                            while ($products_query->have_posts()) {
                                $products_query->the_post();

                                // Get the product information
                                $parent_id = wp_get_post_terms(get_the_ID(), 'product_cat', array('fields' => 'ids'))[0];
                                $id = get_the_ID();
                                $title = get_the_title();
                                $title_kh = get_field('producttitlekh');
                                $description = get_the_excerpt();
                                $description_kh = get_field('productdescriptionkh');
                                $image = get_the_post_thumbnail_url();

                                // Display the product
                        ?>
                                <div class="service-vendingcafe-news-group-top-box-left">
                                    <div class="service-vendingcafe-news-group-top-box-left-title">
                                        <?php
                                        if ($p_value == '1622') {
                                            echo '<p>' . esc_html($title_kh) . '</p>';
                                        } else {
                                            echo '<p>' . esc_html($title) . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="service-vendingcafe-news-group-top-box-left-description">
                                        <?php
                                        if ($p_value == '1622') {
                                            echo '<p>' . esc_html($description_kh) . '</p>';
                                        } else {
                                            echo '<p>' . esc_html($description) . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="service-vendingcafe-news-group-top-box-left-detail">
                                        <?php
                                        if ($p_value == '1622') {
                                            echo '<button><a href="' . esc_url('/service-vendingcafe-kh/product-kh/' . '?category_id=' . $parent_id . '&product_id=' . $id) . '">Detail</a></button>';
                                        } else {
                                            echo '<button><a href="' . esc_url('/service-vendingcafe/product/' . '?category_id=' . $parent_id . '&product_id=' . $id) . '">Detail</a></button>';
                                        }
                                        ?>
                                    </div>
                                    <figure>
                                        <img src="<?= $image ?>" alt="">
                                    </figure>
                                </div>
                        <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>

                    </div>
                </div>
                <div class="service-vendingcafe-news-group-bot">
                    <div class="service-vendingcafe-news-group-bot-header">
                        <p><?= $cate_title ?></p>
                    </div>
                    <div class="service-vendingcafe-news-group-bot-box">

                        <?php
                        $category_id = 22; // Default category ID
                        if (isset($_GET['category_id'])) {
                            $category_id = $_GET['category_id'];
                        }

                        $query_product_category = new WP_Query(array(
                            'post_type' => 'product',
                            'taxonomy' => 'product_cat',
                            'post_status' => 'publish',
                            'order' => 'ASC'
                        ));
                        ?>
                        <div class="service-vendingcafe-news-group-bot-box-left">
                            <?php
                            $first_category = true; // initialize flag variable
                            $selected_category = false; // initialize flag variable

                            while ($query_product_category->have_posts()) {
                                $query_product_category->the_post();

                                // Get the category values
                                $product_categories = get_the_terms($product->ID, 'product_cat');

                                foreach ($product_categories as $category) {
                                    $category_class = 'service-vendingcafe-news-group-bot-box-left-category';

                                    if ($category->term_id == $category_id && (!$selected_category || $first_category)) {
                                        // update condition to check if it matches the selected category ID and it's the first category or not selected yet
                                        $category_class .= ' active'; // add active class if it matches the selected category ID
                                        $selected_category = true; // set flag variable to true after selecting the category
                                    }

                                    if ($first_category) { // check if it's the first category
                                        $first_category = false; // set flag variable to false after the first category
                                    }
                            ?>
                                    <div class="<?php echo $category_class ?>">
                                        <div class="service-vendingcafe-news-group-bot-box-left-category-dot"></div>
                                        <a href="?category_id=<?php echo $category->term_id ?>">
                                            <p><?php echo $category->name ?></p>
                                        </a>
                                    </div>
                            <?php
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>




                        <div class="service-vendingcafe-news-group-bot-box-dropdown">
                            <button>
                                <p>เครื่องแลกเหรียญ</p>
                                <figure>
                                    <img src=<?= wp_get_attachment_image_src(11)[0] ?> alt="">
                                </figure>
                            </button>
                            <ul class="service-vendingcafe-news-group-bot-box-dropdown-menu">
                                <?php
                                while ($query_product_category->have_posts()) {
                                    $query_product_category->the_post();

                                    // Get the category values
                                    $product_categories = get_the_terms($product->ID, 'product_cat');

                                    foreach ($product_categories as $category) { ?>
                                        <li class="service-vendingcafe-news-group-bot-box-dropdown-menu-list">
                                            <a href="?category_id=<?php echo $category->term_id ?>">
                                                <p><?= $category->name ?></p>
                                            </a>
                                        </li>
                                <?php }
                                }
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                        <div class="service-vendingcafe-news-group-bot-box-right" id="product-list">
                            <?php
                            $query_product_category = new WP_Query(array(
                                'post_type' => 'product',
                                'taxonomy' => 'product_cat',
                                'post_status' => 'publish',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field' => 'term_id',
                                        'terms' => $category_id,
                                        'include_children' => true
                                    )
                                )
                            ));

                            while ($query_product_category->have_posts()) {
                                $query_product_category->the_post();

                                // Get the product data
                                $product_id = get_the_ID();
                                $product_title = get_the_title();
                                $product_title_kh = get_field('producttitlekh');
                                $product_description = get_the_excerpt();
                                $product_description_kh = get_field('productdescriptionkh');
                                $product_detail_link = get_permalink();
                                $product_image = get_the_post_thumbnail_url();

                            ?>
                                <div class="service-vendingcafe-news-group-bot-box-right-product">
                                    <figure class="service-vendingcafe-news-group-bot-box-right-product-image">
                                        <img src='<?php echo $product_image ?>' alt="">
                                    </figure>
                                    <div class="service-vendingcafe-news-group-bot-box-right-product-title">
                                        <?php
                                        if ($p_value == '1622') {
                                            echo '<p>' . esc_html($product_title_kh) . '</p>';
                                        } else {
                                            echo '<p>' . esc_html($product_title) . '</p>';
                                        }
                                        ?>

                                    </div>
                                    <div class="service-vendingcafe-news-group-bot-box-right-product-description">
                                        <?php
                                        if ($p_value == '1622') {
                                            echo '<p>' . esc_html($product_description_kh) . '</p>';
                                        } else {
                                            echo '<p>' . esc_html($product_description) . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="service-vendingcafe-news-group-bot-box-right-product-detail">
                                        <?php
                                        if ($p_value == '1622') {
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
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>