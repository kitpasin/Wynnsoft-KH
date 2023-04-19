<section id="works-workRelated">
    <div class="works-work-related">
        <div class="works-work-related-title">
            <?php
            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                echo '<p>Related Works KH</p>';
            } else {
                echo '<p>Related Works</p>';
            }
            ?>
        </div>
        <div class="works-work-related-group">
            <?php
            if (isset($_GET['category_id'])) {
                $category_id = $_GET['category_id'];
            }
            if (isset($_GET['works_id'])) {
                $works_id = $_GET['works_id'];
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
                'order' => 'DESC',
                'post_status' => 'publish',
                'posts_per_page' => 3,
            );

            if ($works_id) {
                $args['post__not_in'] = array($works_id);
            }

            $query = new WP_Query($args);

            while ($query->have_posts()) {
                $query->the_post();

                $works_id = get_the_ID();
                $image = get_the_post_thumbnail_url();
                $title = get_the_title();
                $title_kh = get_field('worktitlekh');
                $description = get_the_excerpt();

            ?>
                <div class="works-work-related-group-box">
                    <figure class="works-work-related-group-box-image">
                        <img src=<?= $image ?> alt="">
                    </figure>
                    <div class="works-work-related-group-box-view">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<a href="/works-kh/work-kh/?category_id=' . $category_id . '&works_id=' . $works_id . '">View</a>';
                        } else {
                            echo '<a href="/works/work/?category_id=' . $category_id . '&works_id=' . $works_id . '">View</a>';
                        }
                        ?>

                    </div>
                    <div class="works-work-related-group-box-description">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<p>' . $title_kh . '</p>';
                        } else {
                            echo '<p>' . $title . '</p>';
                        }
                        ?>
                    </div>
                </div>

            <?php }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>