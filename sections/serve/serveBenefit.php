<section id="serveBenefit">
    <div class="benefit">
        <?php
        $p_value = '437'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1595'; // Update value if URL contains "-kh"
        }
        $query_serve_benefit = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_serve_benefit->have_posts()) {
            $query_serve_benefit->the_post();

            // Get the field values
            $header_top_title = get_field('servebenefittopheadertitle');
            $header_top_description = get_field('servebenefittopheaderdescription');
            $services = array(
                array(
                    'icon' => get_field('servebenefittopicon1'),
                    'title' => get_field('servebenefittoptitle1'),
                    'description' => get_field('servebenefittopdescription1')
                ),
                array(
                    'icon' => get_field('servebenefittopicon2'),
                    'title' => get_field('servebenefittoptitle2'),
                    'description' => get_field('servebenefittopdescription2')
                ),
                array(
                    'icon' => get_field('servebenefittopicon3'),
                    'title' => get_field('servebenefittoptitle3'),
                    'description' => get_field('servebenefittopdescription3')
                ),
            );
            $header_bot_title = get_field('servebenefitbotheadertitle');
            $header_bot_description = get_field('servebenefitbotheaderdescription');
            $bot_title = get_field('servebenefitbottitle');
            $bot_description = get_field('servebenefitbotdescription');
        ?>
            <figure class="benefit-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="benefit-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="benefit-top">
                <div class="benefit-top-header">
                    <div class="benefit-top-header-title">
                        <p><?= $header_top_title ?></p>
                    </div>
                    <div class="benefit-top-header-description">
                        <p><?= $header_top_description ?></p>
                    </div>
                </div>
                <div class="benefit-top-group">
                    <?php foreach ($services as $service) { ?>
                        <div class="benefit-top-group-box">
                            <figure>
                                <img src=<?= $service['icon'] ?> alt="">
                            </figure>
                            <div class="benefit-top-group-box-title">
                                <p><?= $service['title'] ?></p>
                            </div>
                            <div class="benefit-top-group-box-line"></div>
                            <div class="benefit-top-group-box-description">
                                <p><?= $service['description'] ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="benefit-bot">
                <div class="benefit-bot-header">
                    <div class="benefit-bot-header-title">
                        <p><?= $header_bot_title ?></p>
                    </div>
                    <div class="benefit-bot-header-description">
                        <p><?= $header_bot_description ?></p>
                    </div>
                </div>
                <div class="benefit-bot-group">
                    <div class="benefit-bot-group-left">
                        <figure class="benefit-bot-group-left-title">
                            <img src=<?= wp_get_attachment_image_src(476)[0] ?> alt="">
                            <p><?= $bot_title ?></p>
                        </figure>
                        <div class="benefit-bot-group-left-description">
                            <p><?= $bot_description ?>
                            </p>
                        </div>
                    </div>
                    <figure class="benefit-bot-group-right">
                        <img src=<?= wp_get_attachment_image_src(240)[0] ?> alt="">
                    </figure>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>