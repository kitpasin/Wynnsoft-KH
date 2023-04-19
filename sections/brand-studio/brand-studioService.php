<section id="brand-studioService">
    <div class="brand-studio-service">
        <?php
        $p_value = '1094'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1686'; // Update value if URL contains "-kh"
        }
        $query_brand_studio_service = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_brand_studio_service->have_posts()) {
            $query_brand_studio_service->the_post();

            // Get the field values
            $top_header_title = get_field('servicetopheadertitle');
            $top_header_description = get_field('servicetopheaderdescription');
            $services = array(
                array(
                    'icon' => get_field('servicetopicon1'),
                    'title' => get_field('servicetoptitle1'),
                    'description' => get_field('servicetopdescription1')
                ),
                array(
                    'icon' => get_field('servicetopicon2'),
                    'title' => get_field('servicetoptitle2'),
                    'description' => get_field('servicetopdescription2')
                ),
                array(
                    'icon' => get_field('servicetopicon3'),
                    'title' => get_field('servicetoptitle3'),
                    'description' => get_field('servicetopdescription3')
                )
            );
            $bot_header_title = get_field('servicebotheadertitle');
            $bot_header_description = get_field('servicebotheaderdescription');
            $bot_title = get_field('servicebottitle');
            $bot_descriptions = array(
                array(
                    'description' => get_field('servicebotdescription1')
                ),
                array(
                    'description' => get_field('servicebotdescription2')
                ),
            );
        ?>
        <div class="brand-studio-service-top">
            <figure class="brand-studio-service-top-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="brand-studio-service-top-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="brand-studio-service-top-header">
                <div class="brand-studio-service-top-header-title">
                    <p><?= $top_header_title ?></p>
                </div>
                <div class="brand-studio-service-top-header-description">
                    <p><?= $top_header_description ?></p>
                </div>
            </div>
            <div class="brand-studio-service-top-group">
                <?php foreach ($services as $service) { ?>
                <div class="brand-studio-service-top-group-box">
                    <figure>
                        <img src=<?= $service['icon'] ?> alt="">
                    </figure>
                    <div class="brand-studio-service-top-group-box-title">
                        <p><?= $service['title'] ?></p>
                    </div>
                    <div class="brand-studio-service-top-group-box-line"></div>
                    <div class="brand-studio-service-top-group-box-description">
                        <p><?= $service['description'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="brand-studio-service-bot">
            <figure class="brand-studio-service-bot-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="brand-studio-service-bot-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="brand-studio-service-bot-header">
                <div class="brand-studio-service-bot-header-title">
                    <p><?= $bot_header_title ?></p>
                </div>
                <div class="brand-studio-service-bot-header-description">
                    <p><?= $bot_header_description ?>
                    </p>
                </div>
            </div>
            <div class="brand-studio-service-bot-group">
                <div class="brand-studio-service-bot-group-left">
                    <div class="brand-studio-service-bot-group-left-title">
                        <p><?= $bot_title ?></p>
                    </div>
                    <div class="brand-studio-service-bot-group-left-description">
                        <?php foreach ($bot_descriptions as $bot_description) { ?>
                        <p>
                            <?= $bot_description['description'] ?>
                        </p>
                        <?php } ?>
                    </div>
                </div>
                <figure class="brand-studio-service-bot-group-right">
                    <img src=<?= wp_get_attachment_image_src(1125)[0] ?> alt="">
                </figure>
            </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>
