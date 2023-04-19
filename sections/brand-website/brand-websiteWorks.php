<section id="brand-websiteWorks">
    <div class="brand-website-works">
        <?php
        $p_value = '977'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1678'; // Update value if URL contains "-kh"
        }
        $query_brand_website_foryou = new WP_Query(array(
            'p' => $p_value,
            'post_type' => ' page',
            'post_status' => 'publish'
        ));
        while ($query_brand_website_foryou->have_posts()) {
            $query_brand_website_foryou->the_post();

            // Get the field values
            $title = get_field('contacttitle');
            $description = get_field('contactdescription');
        ?>
            <figure class="brand-website-works-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="brand-website-works-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="brand-website-works-group">
                <div class="brand-website-works-group-header">
                    <div class="brand-website-works-group-header-title">
                        <p><?= $title ?></p>
                    </div>
                    <div class="brand-website-works-group-header-description">
                        <p><?= $description ?></p>
                    </div>
                </div>
                <div class="brand-website-works-group-btn">
                    <?php
                    if ($p_value == '1678') {
                        echo '<button><a href="/works-kh/">Our Works</a></button>';
                    } else {
                        echo '<button><a href="/works/">Our Works</a></button>';
                    }
                    ?>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>