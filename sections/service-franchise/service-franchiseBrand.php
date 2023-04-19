<section id="service-franchiseBrand">
    <div class="service-franchise-brand">
        <?php
        $p_value = '798'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1644'; // Update value if URL contains "-kh"
        }
        $query_service_franchise_brand = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_franchise_brand->have_posts()) {
            $query_service_franchise_brand->the_post();

            // Get the field values
            $header_title = get_field('brandheadertitle');
            $header_description = get_field('brandheaderdescription');
            $brands = array(
                array(
                    'icon' => get_field('brandicon1'),
                    'title' => get_field('brandtitle1'),
                    'description' => get_field('branddescription1')
                ),
                array(
                    'icon' => get_field('brandicon2'),
                    'title' => get_field('brandtitle2'),
                    'description' => get_field('branddescription2')
                ),
                array(
                    'icon' => get_field('brandicon3'),
                    'title' => get_field('brandtitle3'),
                    'description' => get_field('branddescription3')
                )
            );
            $bot_title = get_field('brandbottitle');
            $bot_description = get_field('brandbotdescription');
        ?>
        <div class="service-franchise-brand-top">
            <figure class="service-franchise-brand-top-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="service-franchise-brand-top-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="service-franchise-brand-top-header">
                <div class="service-franchise-brand-top-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="service-franchise-brand-top-header-description">
                    <p><?= $header_description ?></p>
                </div>
            </div>
            <div class="service-franchise-brand-top-group">
                <?php foreach ($brands as $brand) { ?>
                <div class="service-franchise-brand-top-group-box">
                    <figure>
                        <img src=<?= $brand['icon'] ?> alt="">
                    </figure>
                    <div class="service-franchise-brand-top-group-box-title">
                        <p><?= $brand['title'] ?></p>
                    </div>
                    <div class="service-franchise-brand-top-group-box-line"></div>
                    <div class="service-franchise-brand-top-group-box-description">
                        <p><?= $brand['description'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="service-franchise-brand-bot">
            <figure class="service-franchise-brand-bot-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="service-franchise-brand-bot-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="service-franchise-brand-bot-group">
                <div class="service-franchise-brand-bot-group-title">
                    <p><?= $bot_title ?></p>
                </div>
                <div class="service-franchise-brand-bot-group-line"></div>
                <div class="service-franchise-brand-bot-group-description">
                    <p><?= $bot_description ?></p>
                </div>
            </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>
