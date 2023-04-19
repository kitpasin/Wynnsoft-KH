<section id="indexStory">
    <div class="story">
        <?php
        $p_value = '1454'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1436'; // Update value if URL contains "-kh"
        }

        $query_home_story = new WP_QUERY(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_home_story->have_posts()) {
            $query_home_story->the_post();

            // Get the field values
            $header_top_title = get_field('homestorytoptitle');
            $header_top_description = get_field('homestorytopdescription');
            $header_mid_title = get_field('homestorymidtitle');
            $header_mid_description = get_field('homestorymiddescription');
            $header_mid_youtube = get_field('homestorymidyoutube');
            $header_bot_title = get_field('homestorybottitle');
            $header_bot_description = get_field('homestorybotdescription');
            $brands = array(
                array(
                    'logo' => get_field('homestorybotlogo1'),
                    'shadow' => wp_get_attachment_image_src(199)[0]
                ),
                array(
                    'logo' => get_field('homestorybotlogo2'),
                    'shadow' => wp_get_attachment_image_src(199)[0]
                ),
                array(
                    'logo' => get_field('homestorybotlogo3'),
                    'shadow' => wp_get_attachment_image_src(199)[0]
                ),
                array(
                    'logo' => get_field('homestorybotlogo4'),
                    'shadow' => wp_get_attachment_image_src(199)[0]
                ),
            );
        ?>
            <div class="story-top">
                <figure class="story-top-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(200)[0] ?> alt="">
                </figure>
                <figure class="story-top-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(201)[0] ?> alt="">
                </figure>
                <div class="story-top-group">
                    <div class="story-top-group-title">
                        <p><?= $header_top_title ?></p>
                    </div>
                    <div class="story-top-group-line"></div>
                    <div class="story-top-group-description">
                        <p><?= $header_top_description ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="story-mid">
                <figure class="story-mid-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(197)[0] ?> alt="">
                </figure>
                <figure class="story-mid-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(198)[0] ?> alt="">
                </figure>
                <div class="story-mid-group">
                    <div class="story-mid-group-left">
                        <div class="story-mid-group-left-title">
                            <p><?= $header_mid_title ?></p>
                        </div>
                        <div class="story-mid-group-left-description">
                            <p><?= $header_mid_description ?>
                            </p>
                        </div>
                    </div>
                    <div class="story-mid-group-right">
                        <iframe src=<?= $header_mid_youtube ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="story-bot">
                <figure class="story-bot-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
                </figure>
                <figure class="story-bot-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
                </figure>
                <div class="story-bot-group">
                    <div class="story-bot-group-title">
                        <p><?= $header_bot_title ?></p>
                    </div>
                    <div class="story-bot-group-description">
                        <p><?= $header_bot_description ?></p>
                    </div>
                    <div class="story-bot-group-brand">
                        <?php foreach ($brands as $brand) { ?>
                            <figure>
                                <img src=<?= $brand['logo'] ?> alt="">
                                <img src=<?= $brand['shadow'] ?> alt="">
                            </figure>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>