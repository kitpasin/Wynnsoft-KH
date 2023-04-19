<section id="indexWorks">
    <div class="works">
        <?php
        $p_value = '1454'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1436'; // Update value if URL contains "-kh"
        }

        $query_home_works = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));

        while ($query_home_works->have_posts()) {
            $query_home_works->the_post();

            // Get the field values
            $header_title = get_field('homeworksheadertitle');
            $header_description = get_field('homeworksheaderdescription');
        ?>
            <div class="works-header">
                <div class="works-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="work-header-description">
                    <p><?= $header_description ?></p>
                </div>
            </div>
            <div class="swiper works-swiper">
                <div class="swiper-wrapper works-swiper-wrapper">
                    <?php
                    $category_id = 37;
                    if (isset($_GET['category_id'])) {
                        $category_id = $_GET['category_id'];
                    }

                    $query_works_category = new WP_Query(array(
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

                    while ($query_works_category->have_posts()) {
                        $query_works_category->the_post();

                        // Get the works data
                        $works_parent_cat_id = wp_get_post_terms(get_the_ID(), 'product_cat', array('fields' => 'ids'))[0];
                        $works_date = get_field('date');
                        $works_id = get_the_ID();
                        $works_title = get_the_title();
                        $works_title_kh = get_field('worktitlekh');
                        $works_description = get_the_excerpt();
                        $works_detail_link = get_permalink();
                        $works_image = get_the_post_thumbnail_url();
                    ?>
                        <div class="swiper-slide works-swiper-slide">
                            <div class="works-swiper-group">
                                <div class="works-swiper-group-overlay">
                                    <?php
                                    if ($p_value == '1436') {
                                        echo '<a href="/works-kh/work-kh/?category_id=' . $works_parent_cat_id . '&works_id=' . $works_id . '">View</a>';
                                    } else {
                                        echo '<a href="/works/work/?category_id=' . $works_parent_cat_id . '&works_id=' . $works_id . '">View</a>';
                                    }
                                    ?>

                                </div>
                                <figure class="works-swiper-group-mid">
                                    <img src=<?= $works_image ?> alt="">
                                </figure>
                                <div class="works-swiper-group-bot">
                                    <?php
                                    if ($p_value == '1436') {
                                        echo '<p>'. $works_title_kh .'</p>';
                                    } else {
                                        echo '<p>'. $works_title .'</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="swiper-pagination" id="worksPagination"></div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>