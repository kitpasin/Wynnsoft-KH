<section id="brand-websiteForyou">
    <div class="brand-website-foryou">
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
            $top_header_title = get_field('foryoutopheadertitle');
            $top_header_description = get_field('foryoutopheaderdescription');
            $foryous = array(
                array(
                    'icon' => get_field('foryoutopicon1'),
                    'title' => get_field('foryoutoptitle1'),
                    'description' => get_field('foryoutopdescription1')
                ),
                array(
                    'icon' => get_field('foryoutopicon2'),
                    'title' => get_field('foryoutoptitle2'),
                    'description' => get_field('foryoutopdescription2')
                ),
                array(
                    'icon' => get_field('foryoutopicon3'),
                    'title' => get_field('foryoutoptitle3'),
                    'description' => get_field('foryoutopdescription3')
                )
            );
            $bot_header_title = get_field('foryoubotheadertitle');
            $bot_header_description = get_field('foryoubotheaderdescription');
            $bot_title = get_field('foryoubottitle');
            $bot_descriptions = array(
                array (
                    'description' => get_field('foryoubotdescription1')
                ),
                array(
                    'description' => get_field('foryoubotdescription2')
                ),
            );
        ?>
        <div class="brand-website-foryou-top">
            <figure class="brand-website-foryou-top-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="brand-website-foryou-top-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="brand-website-foryou-top-header">
                <div class="brand-website-foryou-top-header-title">
                    <p><?= $top_header_title ?></p>
                </div>
                <div class="brand-website-foryou-top-header-description">
                    <p><?= $top_header_description ?></p>
                </div>
            </div>
            <div class="brand-website-foryou-top-group">
                <?php foreach ($foryous as $foryou) { ?>
                <div class="brand-website-foryou-top-group-box">
                    <figure>
                        <img src=<?= $foryou['icon'] ?> alt="">
                    </figure>
                    <div class="brand-website-foryou-top-group-box-title">
                        <p><?= $foryou['title'] ?></p>
                    </div>
                    <div class="brand-website-foryou-top-group-box-line"></div>
                    <div class="brand-website-foryou-top-group-box-description">
                        <p><?= $foryou['description'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="brand-website-foryou-bot">
            <figure class="brand-website-foryou-bot-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?>alt="">
            </figure>
            <figure class="brand-website-foryou-bot-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="brand-website-foryou-bot-header">
                <div class="brand-website-foryou-bot-header-title">
                    <p><?= $bot_header_title ?></p>
                </div>
                <div class="brand-website-foryou-bot-header-description">
                    <p><?= $bot_header_description ?>
                    </p>
                </div>
            </div>
            <div class="brand-website-foryou-bot-group">
                <div class="brand-website-foryou-bot-group-left">
                    <div class="brand-website-foryou-bot-group-left-title">
                        <p><?= $bot_title ?></p>
                    </div>
                    <div class="brand-website-foryou-bot-group-left-description">
                        <?php foreach ($bot_descriptions as $bot_description) { ?>
                        <p>
                            <?= $bot_description['description'] ?>
                        </p>
                        <?php } ?>
                    </div>
                </div>
                <figure class="brand-website-foryou-bot-group-right">
                    <img src=<?= wp_get_attachment_image_src(1009)[0] ?> alt="">
                </figure>
            </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>
