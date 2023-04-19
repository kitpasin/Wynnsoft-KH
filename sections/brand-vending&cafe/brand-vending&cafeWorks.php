<section id="brand-vendingcafeWorks">
    <div class="brand-vendingcafe-works">
        <?php
        $p_value = '1045'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1691'; // Update value if URL contains "-kh"
        }
        $query_brand_vendingcafe_about = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_brand_vendingcafe_about->have_posts()) {
            $query_brand_vendingcafe_about->the_post();

            // Get the field values
            $title = get_field('contacttitle');
            $description = get_field('contactdescription');
        ?>
            <figure class="brand-vendingcafe-works-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="brand-vendingcafe-works-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="brand-vendingcafe-works-group">
                <div class="brand-vendingcafe-works-group-header">
                    <div class="brand-vendingcafe-works-group-header-title">
                        <p><?= $title ?></p>
                    </div>
                    <div class="brand-vendingcafe-works-group-header-description">
                        <p><?= $description ?></p>
                    </div>
                </div>
                <div class="brand-vendingcafe-works-group-btn">
                    <?php
                    if ($p_value == '1691') {
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