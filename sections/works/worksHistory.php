<section id="worksHistory">
    <div class="works-history">
        <figure class="works-history-floatingimg-1">
            <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
        </figure>
        <figure class="works-history-floatingimg-2">
            <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
        </figure>
        <?php
        $p_value = '1363'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1720'; // Update value if URL contains "-kh"
        }
        $query_works_history = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_works_history->have_posts()) {
            $query_works_history->the_post();

            // Get the field values
            $title = get_field('historyheadertitle');
            $description = get_field('historyheaderdescription');
        ?>
            <div class="works-history-header">
                <div class="works-history-header-title">
                    <p><?= $title ?></p>
                </div>
                <div class="works-history-header-description">
                    <p><?= $description ?></p>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
        <div class="works-history-dropdown">
            <button>
                <p>Web Design</p>
                <figure>
                    <img src=<?= wp_get_attachment_image_src(11)[0] ?> alt="">
                </figure>
            </button>
            <?php
            // Get the "Works" category ID
            $works_category_id = 37;

            // Get the subcategories of the "Works" category
            $subcategories = get_categories(array(
                'taxonomy' => 'product_cat', // Replace with the correct taxonomy for your setup
                'parent' => $works_category_id,
                'hide_empty' => false, // Set to true if you only want to retrieve non-empty subcategories
                'order' => 'DESC'
            ));

            // Loop through the subcategories and display their names
            if (!empty($subcategories)) {
                echo '<ul class="works-history-dropdown-menu">';
                foreach ($subcategories as $subcategory) {
                    echo '<li class="works-history-dropdown-menu-list">';
                    echo '<a href="' . '?category_id=' . $subcategory->term_id . '">' . $subcategory->name . '</a>';
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo 'No subcategories found.';
            }
            ?>


        </div>
        <?php
        $category_id = 35; // Default category ID
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
        <div class="works-history-btn">
            <button class="<?php echo ($category_id == 35) ? 'active' : '' ?>" onclick="location.href='?category_id=35'">WEB DESIGN</button>
            <button class="<?php echo ($category_id == 38) ? 'active' : '' ?>" onclick="location.href='?category_id=38'">WEB APPLICATION</button>
            <button class="<?php echo ($category_id == 39) ? 'active' : '' ?>" onclick="location.href='?category_id=39'">SEO</button>
            <button class="<?php echo ($category_id == 40) ? 'active' : '' ?>" onclick="location.href='?category_id=40'">FACEBOOK ADS</button>
            <button class="<?php echo ($category_id == 41) ? 'active' : '' ?>" onclick="location.href='?category_id=41'">LAZADA SHOPEE</button>
        </div>
        <div class=" works-history-group" id="works-history-list">
            <?php
            $category_id = 35;
            if (isset($_GET['category_id'])) {
                $category_id = $_GET['category_id'];
            }

            $query_works = new WP_Query(array(
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

            while ($query_works->have_posts()) {
                $query_works->the_post();

                // Get the news data
                $works_date = get_field('date');
                $works_id = get_the_ID();
                $works_title = get_the_title();
                $works_title_kh = get_field('worktitlekh');
                $works_description = get_the_excerpt();
                $works_detail_link = get_permalink();
                $works_image = get_the_post_thumbnail_url();
            ?>
                <div class="works-history-group-webdesign">
                    <figure class="works-history-group-webdesign-image">
                        <img src=<?= $works_image ?> alt="">
                    </figure>
                    <div class="works-history-group-webdesign-view">
                        <?php
                        if ($p_value == '1720') {
                            echo '<a href="/works-kh/work-kh/' . '?category_id=' . $category_id . '&works_id=' . $works_id . '">View</a>';
                        } else {
                            echo '<a href="/works/work/' . '?category_id=' . $category_id . '&works_id=' . $works_id . '">View</a>';
                        }
                        ?>

                    </div>
                    <div class="works-history-group-webdesign-description">
                        <?php
                        if ($p_value == '1720') {
                            echo '<p>'. $works_title_kh .'</p>';
                        } else {
                            echo '<p>'. $works_title .'</p>';
                        }
                        ?>
                    </div>
                </div>

            <?php }
            wp_reset_postdata();
            ?>
        </div>
        <!-- <div class="works-history-pagination" id="works-history-pagination"></div> -->
    </div>
</section>