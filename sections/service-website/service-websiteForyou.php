<section id="service-websiteForyou">
    <div class="service-website-foryou">
        <?php
        $p_value = '593'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1616'; // Update value if URL contains "-kh"
        }
        $query_service_website_foryou = new WP_QUERY(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_website_foryou->have_posts()) {
            $query_service_website_foryou->the_post();

            // Get the field values
            $header_top_title = get_field('servicewebsiteforyoutopheadertitle');
            $header_top_description = get_field('servicewebsiteforyoutopheaderdescription');
            $foryous = array(
                array(
                    'icon' => get_field('servicewebsiteforyoutopicon1'),
                    'title' => get_field('servicewebsiteforyoutoptitle1'),
                    'description' => get_field('servicewebsiteforyoutopdescription1'),
                ),
                array(
                    'icon' => get_field('servicewebsiteforyoutopicon2'),
                    'title' => get_field('servicewebsiteforyoutoptitle2'),
                    'description' => get_field('servicewebsiteforyoutopdescription2'),
                ),
                array(
                    'icon' => get_field('servicewebsiteforyoutopicon3'),
                    'title' => get_field('servicewebsiteforyoutoptitle3'),
                    'description' => get_field('servicewebsiteforyoutopdescription3'),
                ),
            );
            $header_bot_title = get_field('servicewebsiteforyoubotheadertitle');
            $header_bot_description = get_field('servicewebsiteforyoubotheaderdescription');
            $services_left = array(
                array(
                    'icon' => get_field('servicewebsiteforyouboticon1'),
                    'title' => get_field('servicewebsiteforyoubottitle1'),
                    'description' => get_field('servicewebsiteforyoubotdescription1'),
                ),
                array(
                    'icon' => get_field('servicewebsiteforyouboticon2'),
                    'title' => get_field('servicewebsiteforyoubottitle2'),
                    'description' => get_field('servicewebsiteforyoubotdescription2'),
                ),
                array(
                    'icon' => get_field('servicewebsiteforyouboticon3'),
                    'title' => get_field('servicewebsiteforyoubottitle3'),
                    'description' => get_field('servicewebsiteforyoubotdescription3'),
                ),
            );
            $services_right = array(
                array(
                    'icon' => get_field('servicewebsiteforyouboticon4'),
                    'title' => get_field('servicewebsiteforyoubottitle4'),
                    'description' => get_field('servicewebsiteforyoubotdescription4'),
                ),
                array(
                    'icon' => get_field('servicewebsiteforyouboticon5'),
                    'title' => get_field('servicewebsiteforyoubottitle5'),
                    'description' => get_field('servicewebsiteforyoubotdescription5'),
                ),
                array(
                    'icon' => get_field('servicewebsiteforyouboticon6'),
                    'title' => get_field('servicewebsiteforyoubottitle6'),
                    'description' => get_field('servicewebsiteforyoubotdescription6'),
                ),
            );
        ?>
        <div class="service-website-foryou-top">
            <figure class="service-website-foryou-top-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="service-website-foryou-top-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="service-website-foryou-top-header">
                <div class="service-website-foryou-top-header-title">
                    <p><?= $header_top_title ?></p>
                </div>
                <div class="service-website-foryou-top-header-description">
                    <p><?= $header_top_description ?></p>
                </div>
            </div>
            <div class="service-website-foryou-top-group">
                <?php foreach ($foryous as $foryou) { ?>
                <div class="service-website-foryou-top-group-box">
                    <figure>
                        <img src=<?= $foryou['icon'] ?> alt="">
                    </figure>
                    <div class="service-website-foryou-top-group-box-title">
                        <p><?= $foryou['title'] ?></p>
                    </div>
                    <div class="service-website-foryou-top-group-box-line"></div>
                    <div class="service-website-foryou-top-group-box-description">
                        <p><?= $foryou['description'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="service-website-foryou-bot">
            <figure class="service-website-foryou-bot-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="service-website-foryou-bot-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="service-website-foryou-bot-header">
                <div class="service-website-foryou-bot-header-title">
                    <p><?= $header_bot_title ?></p>
                </div>
                <div class="service-website-foryou-bot-header-description">
                    <p><?= $header_bot_description ?>
                    </p>
                </div>
            </div>
            <div class="service-website-foryou-bot-group">
                <div class="service-website-foryou-bot-group-left">
                    <?php foreach ($services_left as $service_left) { ?>
                    <div class="service-website-foryou-bot-group-left-box">
                        <figure class="service-website-foryou-bot-group-left-box-left">
                            <img src=<?= $service_left['icon'] ?> alt="">
                        </figure>
                        <div class="service-website-foryou-bot-group-left-box-right">
                            <div class="service-website-foryou-bot-group-left-box-right-title">
                                <p><?= $service_left['title'] ?></p>
                            </div>
                            <div class="service-website-foryou-bot-group-left-box-right-description">
                                <p><?= $service_left['description'] ?></p>
                            </div>
                        </div>
                    </div> 
                   <?php } ?>
                </div>
                <div class="service-website-foryou-bot-group-right">
                        <?php foreach ($services_right as $service_right) { ?>
                    <div class="service-website-foryou-bot-group-right-box">
                        <figure class="service-website-foryou-bot-group-right-box-left">
                            <img src=<?= $service_right['icon'] ?> alt="">
                        </figure>
                        <div class="service-website-foryou-bot-group-right-box-right">
                            <div class="service-website-foryou-bot-group-right-box-right-title">
                                <p><?= $service_right['title'] ?></p>
                            </div>
                            <div class="service-website-foryou-bot-group-right-box-right-description">
                                <p><?= $service_right['description'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>
