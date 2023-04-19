<section id="newspromotionLatest">
    <div class="newspromotion-latest">
        <?php
        $p_value = '1287'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1696'; // Update value if URL contains "-kh"
        }
        $query_newspromotion_latest = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_newspromotion_latest->have_posts()) {
            $query_newspromotion_latest->the_post();

            // Get the field values
            $title = get_field('latesttitle');
            $description = get_field('latestdescription');
        ?>
            <figure class="newspromotion-latest-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="newspromotion-latest-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="newspromotion-latest-header">
                <div class="newspromotion-latest-header-title">
                    <p><?= $title ?></p>
                </div>
                <div class="newspromotion-latest-header-description">
                    <p><?= $description ?></p>
                </div>
            </div>
            <?php
            $category_id = 31; // Default category ID
            if (isset($_GET['category_id'])) {
                $category_id = $_GET['category_id'];
            }

            $args = array(
                'post_type' => 'post',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $category_id,
                    )
                )
            );
            $query = new WP_Query($args);
            ?>
            <div class="newspromotion-latest-btn">
                <button class="<?php echo ($category_id == 31) ? 'active' : '' ?>" onclick="location.href='?category_id=31'">News</button>
                <button class="<?php echo ($category_id == 33) ? 'active' : '' ?>" onclick="location.href='?category_id=33'">Promotion</button>
            </div>
            <?php
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    // display your post content here
                }
                wp_reset_postdata();
            }
            ?>

            <div class="newspromotion-latest-group" id="news-list">
                <?php
                $category_id = 31;
                if (isset($_GET['category_id'])) {
                    $category_id = $_GET['category_id'];
                }

                $query_news_category = new WP_Query(array(
                    'post_type' => 'product',
                    'taxonomy' => 'product_cat',
                    'post_status' => 'publish',
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
                    $news_date = get_field('date');
                    $news_id = get_the_ID();
                    $news_title = get_the_title();
                    $news_description = get_the_excerpt();
                    $news_detail_link = get_permalink();
                    $news_image = get_the_post_thumbnail_url();
                ?>
                    <figure class="newspromotion-latest-group-box">
                        <img src=<?php echo $news_image  ?> alt="">
                        <div class="newspromotion-latest-group-box-view">
                            <?php
                            if ($p_value == '1696') {
                                echo '<a href="/newspromotion-kh/news-kh/?category_id=' . $category_id . '&news_id=' . $news_id . '">View</a>';
                            } else {
                                echo '<a href="/newspromotion/news/?category_id=' . $category_id . '&news_id=' . $news_id . '">View</a>';
                            }
                            ?>

                        </div>
                        <div class="newspromotion-latest-group-box-top">
                            <div class="newspromotion-latest-group-box-top-date">
                                <p><?= $news_date ?></p>
                            </div>
                            <figure class="newspromotion-latest-group-box-top-share">
                                <img src=<?= wp_get_attachment_image_src(310)[0] ?> alt="">
                            </figure>
                        </div>
                        <div class="newspromotion-latest-group-box-bot">
                            <div class="newspromotion-latest-group-box-bot-title">
                                <p><?php echo $news_title ?></p>
                            </div>
                            <div class="newspromotion-latest-group-box-bot-description">
                                <p><?php echo $news_description ?> </p>
                            </div>
                        </div>
                    </figure>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>