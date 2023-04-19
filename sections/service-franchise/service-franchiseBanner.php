<section id="service-franchiseBanner">
    <div class="service-franchise-banner">
        <?php
        $p_value = '798'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1644'; // Update value if URL contains "-kh"
        }
        $query_service_franchise_banner = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_franchise_banner->have_posts()) {
            $query_service_franchise_banner->the_post();

            // Get the field values
            $presenter = get_field('bannerpresenter');
            $title = get_field('bannertitle');
            $description = get_field('bannerdescription')
        ?>
            <div class="service-franchise-banner-group">
                <figure class="service-franchise-banner-group-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(446)[0] ?> alt="">
                </figure>
                <figure class="service-franchise-banner-group-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(447)[0] ?> alt="">
                </figure>
                <figure class="service-franchise-banner-group-floatingimg-3">
                    <img src=<?= wp_get_attachment_image_src(448)[0] ?> alt="">
                </figure>
                <figure class="service-franchise-banner-group-floatingimg-4">
                    <img src=<?= wp_get_attachment_image_src(449)[0] ?> alt="">
                </figure>
                <figure class="service-franchise-banner-group-floatingimg-5">
                    <img src=<?= wp_get_attachment_image_src(450)[0] ?> alt="">
                </figure>
                <figure class="service-franchise-banner-group-floatingimg-6">
                    <img src=<?= wp_get_attachment_image_src(451)[0] ?> alt="">
                </figure>
                <figure class="service-franchise-banner-group-left">
                    <img src=<?= $presenter ?> alt="">
                </figure>
                <div class="service-franchise-banner-group-right">
                    <div class="service-franchise-banner-group-right-title">
                        <p><?= $title ?></p>
                    </div>
                    <div class="service-franchise-banner-group-right-description">
                        <p><?= $description ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>