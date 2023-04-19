<section id="service-websiteWorks">
    <div class="service-website-works">
        <?php
        $p_value = '593'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1616'; // Update value if URL contains "-kh"
        }
        $query_service_website_works = new WP_QUERY(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_website_works->have_posts()) {
            $query_service_website_works->the_post();

            // Get the filed values
            $header_title = get_field('worksheadertitle');
            $header_description = get_field('worksheaderdescription');

        ?>
            <figure class="service-website-works-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="service-website-works-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="service-website-works-header">
                <div class="service-website-works-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="service-website-works-header-description">
                    <p><?= $header_description ?></p>
                </div>
            </div>
            <div class="service-website-works-group">
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
                    'posts_per_page' => 6,
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
                    <div class="service-website-works-group-box">
                        <figure>
                            <img src=<?= $works_image ?> alt="">
                            <div class="view">
                                <?php
                                if ($p_value == '1616') {
                                    echo '<a href="/works-kh/work-kh/?category_id=' . $works_parent_cat_id . '&works_id=' . $works_id . '">View</a>';
                                } else {
                                    echo '<a href="/works/work/?category_id=' . $works_parent_cat_id . '&works_id=' . $works_id . '">View</a>';
                                }
                                ?>
                            </div>
                        </figure>
                        <?php 
                        if ($p_value == '1616') {
                            echo '<p>'. $works_title_kh .'</p>';
                        } else {
                            echo '<p>'. $works_title .'</p>';
                        }
                        ?>
                    </div>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
            <div class="service-website-works-more">
                <?php 
                if ($p_value == '1616') {
                    echo '<button type="button" onclick="location.href=\'/works-kh/\'">More</button>';
                } else {
                    echo '<button type="button" onclick="location.href=\'/works/\'">More</button>';
                }
                ?>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>