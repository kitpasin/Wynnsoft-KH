<section id="indexNews">
    <div class="news">
        <?php
        $p_value = '1454'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1436'; // Update value if URL contains "-kh"
        }
        $query_newsNpromotion = new WP_QUERY(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish',
        ));
        while ($query_newsNpromotion->have_posts()) {
            $query_newsNpromotion->the_post();

            // Get the field values
            $header_top_title = get_field('homenews&promotiontopheadertitle');
            $header_top_description = get_field('homenews&promotiontopheaderdescription');

            $header_bot_title = get_field('homenews&promotionbotheadertitle');
            $header_bot_description = get_field('homenews&promotionbotheaderdescription');

        ?>
            <div class="news-top">
                <div class="news-top-header">
                    <div class="news-top-header-title">
                        <p><?= $header_top_title ?></p>
                    </div>
                    <div class="news-top-header-description">
                        <p><?= $header_top_description ?></p>
                    </div>
                </div>
                <div class="news-top-group">
                    <?php
                    $category_id = 36;
                    if (isset($_GET['category_id'])) {
                        $category_id = $_GET['category_id'];
                    }

                    $query_news_category = new WP_Query(array(
                        'post_type' => 'product',
                        'taxonomy' => 'product_cat',
                        'post_status' => 'publish',
                        'posts_per_page' => 6,
                        'order' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'term_id',
                                'terms' => $category_id,
                                'include_children' => true
                            )
                        )
                    ));

                    while ($query_news_category->have_posts()) {
                        $query_news_category->the_post();

                        // Get the news data
                        $news_parent_cat_id = wp_get_post_terms(get_the_ID(), 'product_cat', array('fields' => 'ids'))[0];
                        $news_date = get_field('date');
                        $news_id = get_the_ID();
                        $news_title = get_the_title();
                        $news_description = get_the_excerpt();
                        $news_detail_link = get_permalink();
                        $news_image = get_the_post_thumbnail_url();
                    ?>
                        <figure class="news-top-group-box">
                            <img src=<?= $news_image ?> alt="">
                            <div class="news-top-group-box-view">
                                <?php
                                if ($p_value == '1436') {
                                    echo '<a href="/newspromotion-kh/news-kh/?category_id=' . $news_parent_cat_id . '&news_id=' . $news_id . '">View</a>';
                                } else {
                                    echo '<a href="/newspromotion/news/?category_id=' . $news_parent_cat_id . '&news_id=' . $news_id . '">View</a>';
                                }
                                ?>
                            </div>
                            <div class="news-top-group-box-top">
                                <div class="news-top-group-box-top-date">
                                    <p><?= $news_date ?></p>
                                </div>
                                <figure class="news-top-group-box-top-share">
                                    <img src=<?= wp_get_attachment_image_src(310)[0] ?> alt="">
                                </figure>
                            </div>
                            <div class="news-top-group-box-bot">
                                <div class="news-top-group-box-bot-title">
                                    <p><?= $news_title ?></p>
                                </div>
                                <div class="news-top-group-box-bot-description">
                                    <p><?= $news_description ?></p>
                                </div>
                            </div>
                        </figure>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="news-top-detail">
                    <?php
                    if ($p_value == '1436') {
                        echo '<button type="button" onclick="location.href=\'/newspromotion-kh/\'">More</button>';
                    } else {
                        echo '<button type="button" onclick="location.href=\'/newspromotion/\'">More</button>';
                    }
                    ?>
                </div>
            </div>
            <div class="news-bot">
                <figure class="news-bot-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
                </figure>
                <figure class="news-bot-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
                </figure>
                <div class="news-bot-header">
                    <div class="news-bot-header-title">
                        <p><?= $header_bot_title ?></p>
                    </div>
                    <div class="news-bot-header-description">
                        <p><?= $header_bot_description ?>
                        </p>
                    </div>
                </div>
                <div class="swiper news-bot-swiper">
                    <div class="swiper-wrapper news-bot-swiper-wrapper">
                        <?php
                        $category_id = 34;
                        if (isset($_GET['category_id'])) {
                            $category_id = $_GET['category_id'];
                        }

                        $query_product_category = new WP_Query(array(
                            'post_type' => 'product',
                            'taxonomy' => 'product_cat',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'order' => 'DESC',
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
                            $product_parent_cat_id = wp_get_post_terms(get_the_ID(), 'product_cat', array('fields' => 'ids'))[0];
                            $product_date = get_field('date');
                            $product_id = get_the_ID();
                            $product_title = get_the_title();
                            $product_title_kh = get_field('producttitlekh');
                            $product_description = get_the_excerpt();
                            $product_description_kh = get_field('productdescriptionkh');
                            $product_detail_link = get_permalink();
                            $product_image = get_the_post_thumbnail_url();
                        ?>
                            <div class="swiper-slide news-bot-swiper-slide">
                                <div class="news-bot-swiper-group">
                                    <figure class="news-bot-swiper-group-floatingimg-1">
                                        <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-floatingimg-2">
                                        <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-floatingimg-3">
                                        <img src=<?= wp_get_attachment_image_src(323)[0] ?> alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-image">
                                        <img src=<?= $product_image ?> alt="">
                                    </figure>
                                    <div class="news-bot-swiper-group-box">
                                        <div class="news-bot-swiper-group-box-title">
                                            <?php
                                            if ($p_value == '1436') {
                                                echo '<p>' . esc_html($product_title_kh) . '</p>';
                                            } else {
                                                echo '<p>' . esc_html($product_title) . '</p>';
                                            }
                                            ?>

                                        </div>
                                        <div class="news-bot-swiper-group-box-description">
                                            <p><?= $product_description ?></p>
                                        </div>
                                        <div class="news-bot-swiper-group-box-detail">
                                            <?php
                                            if ($p_value == '1436') {
                                                echo '<button type="button" onclick="location.href=\'/service-vendingcafe-kh/product-kh/?category_id=' . $product_parent_cat_id . '&product_id=' . $product_id . '\'">Detail</button>';
                                            } else {
                                                echo '<button type="button" onclick="location.href=\'/service-vendingcafe/product/?category_id=' . $product_parent_cat_id . '&product_id=' . $product_id . '\'">Detail</button>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="swiper-pagination" id="newsPagination"></div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>