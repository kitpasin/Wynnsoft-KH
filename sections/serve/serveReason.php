<section id="serveReason">
    <div class="reason">
        <?php
        $p_value = '437'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1595'; // Update value if URL contains "-kh"
        }
        $query_serve_agency = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_serve_agency->have_posts()) {
            $query_serve_agency->the_post();

            // Get the field values
            $top_header_title = get_field('servereasonheadertitle');
            $top_header_description = get_field('servereasonheaderdescription');
            $reasons_top = array(
                array(
                    'icon' => get_field('servereasontopicon1'),
                    'title' => get_field('servereasontoptitle1'),
                    'description' => get_field('servereasontopdescription1')
                ),
                array(
                    'icon' => get_field('servereasontopicon2'),
                    'title' => get_field('servereasontoptitle2'),
                    'description' => get_field('servereasontopdescription2')
                ),
                array(
                    'icon' => get_field('servereasontopicon3'),
                    'title' => get_field('servereasontoptitle3'),
                    'description' => get_field('servereasontopdescription3')
                ),
            );
            $reasons_bot_left = array(
                array(
                    'title' => get_field('servereasonbottitle1'),
                    'description' => get_field('servereasonbotdescription1')
                ),
                array(
                    'title' => get_field('servereasonbottitle2'),
                    'description' => get_field('servereasonbotdescription2')
                ),
                array(
                    'title' => get_field('servereasonbottitle3'),
                    'description' => get_field('servereasonbotdescription3')
                ),
                array(
                    'title' => get_field('servereasonbottitle4'),
                    'description' => get_field('servereasonbotdescription4')
                ),
            );
            $reasons_bot_right = array(
                array(
                    'title' => get_field('servereasonbottitle5'),
                    'description' => get_field('servereasonbotdescription5')
                ),
                array(
                    'title' => get_field('servereasonbottitle6'),
                    'description' => get_field('servereasonbotdescription6')
                ),
                array(
                    'title' => get_field('servereasonbottitle7'),
                    'description' => get_field('servereasonbotdescription7')
                ),
                array(
                    'title' => get_field('servereasonbottitle8'),
                    'description' => get_field('servereasonbotdescription8')
                ),
            );
        ?>
            <figure class="reason-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="reason-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="reason-header">
                <div class="reason-header-title">
                    <p><?= $top_header_title ?></p>
                </div>
                <div class="reason-header-description">
                    <p><?= $top_header_description ?></p>
                </div>
            </div>
            <div class="reason-group">
                <div class="reason-group-top">
                    <?php foreach ($reasons_top as $reason_top) { ?>
                        <div class="reason-group-top-box">
                            <figure>
                                <img src=<?= $reason_top['icon'] ?> alt="">
                            </figure>
                            <div class="reason-group-top-box-title">
                                <p><?= $reason_top['title'] ?></p>
                            </div>
                            <div class="reason-group-top-box-line"></div>
                            <div class="reason-group-top-box-description">
                                <p><?= $reason_top['description'] ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="reason-group-bot">
                    <div class="reason-group-bot-left">
                        <?php foreach ($reasons_bot_left as $reason_bot_left) { ?>
                            <div class="reason-group-bot-left-box">
                                <div class="reason-group-bot-left-box-title">
                                    <p><?= $reason_bot_left['title'] ?></p>
                                </div>
                                <div class="reason-group-bot-left-box-description">
                                    <p><?= $reason_bot_left['description'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="reason-group-bot-right">
                        <?php foreach ($reasons_bot_right as $reason_bot_right) { ?>
                            <div class="reason-group-bot-right-box">
                                <div class="reason-group-bot-right-box-title">
                                    <p><?= $reason_bot_right['title'] ?></p>
                                </div>
                                <div class="reason-group-bot-right-box-description">
                                    <p><?= $reason_bot_right['description'] ?>
                                    </p>
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