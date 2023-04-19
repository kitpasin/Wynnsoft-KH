<section id="service-franchiseAbout">
    <div class="service-franchise-about">
        <?php
        $p_value = '798'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1644'; // Update value if URL contains "-kh"
        }
        $query_service_franchise_about = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_franchise_about->have_posts()) {
            $query_service_franchise_about->the_post();

            // Get the field values
            $top_title = get_field('abouttoptitle');
            $top_description = get_field('abouttopdescription');
            $top_video = get_field('abouttopvideo');
            $bot_header_title = get_field('aboutbotheadertitle');
            $bot_header_description = get_field('aboutbotheaderdescription');
            $abouts = array(
                array(
                    'icon' => get_field('aboutboticon1'),
                    'title' => get_field('aboutbottitle1'),
                    'description' => get_field('aboutbotdescription1')
                ),
                array(
                    'icon' => get_field('aboutboticon2'),
                    'title' => get_field('aboutbottitle2'),
                    'description' => get_field('aboutbotdescription2')
                ),
                array(
                    'icon' => get_field('aboutboticon3'),
                    'title' => get_field('aboutbottitle3'),
                    'description' => get_field('aboutbotdescription3')
                ),
                array(
                    'icon' => get_field('aboutboticon4'),
                    'title' => get_field('aboutbottitle4'),
                    'description' => get_field('aboutbotdescription4')
                ),
            );
        ?>
            <div class="service-franchise-about-top">
                <figure class="service-franchise-about-top-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
                </figure>
                <figure class="service-franchise-about-top-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
                </figure>
                <div class="service-franchise-about-top-group">
                    <div class="service-franchise-about-top-group-left">
                        <div class="service-franchise-about-top-group-left-title">
                            <p><?= $top_title ?></p>
                        </div>
                        <div class="service-franchise-about-top-group-left-description">
                            <p><?= $top_description ?></p>
                        </div>
                    </div>
                    <div class="service-franchise-about-top-group-right">
                        <iframe src=<?= $top_video ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="service-franchise-about-bot">
                <figure class="service-franchise-about-bot-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
                </figure>
                <figure class="service-franchise-about-bot-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
                </figure>
                <div class="service-franchise-about-bot-header">
                    <div class="service-franchise-about-bot-header-title">
                        <p><?= $bot_header_title ?></p>
                    </div>
                    <div class="service-franchise-about-bot-header-description">
                        <p><?= $bot_header_description ?></p>
                    </div>
                </div>
                <div class="service-franchise-about-bot-group">
                    <div class="service-franchise-about-bot-group-left">
                        <?php foreach ($abouts as $about) { ?>
                            <div class="service-franchise-about-bot-group-left-box">
                                <figure>
                                    <img src=<?= $about['icon'] ?> alt="">
                                </figure>
                                <div class="service-franchise-about-bot-group-left-box-title">
                                    <p><?= $about['title'] ?></p>
                                </div>
                                <div class="service-franchise-about-bot-group-left-box-line"></div>
                                <div class="service-franchise-about-bot-group-left-box-description">
                                    <p><?= $about['description'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <figure class="service-franchise-about-bot-group-right">
                        <img src=<?= wp_get_attachment_image_src(878)[0] ?> alt="">
                    </figure>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>