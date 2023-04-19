<section id="franchiseManami">
    <div class="franchise-manami">
        <?php
        $p_value = '1130'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1713'; // Update value if URL contains "-kh"
        }
        $query_franchise_manami = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_franchise_manami->have_posts()) {
            $query_franchise_manami->the_post();

            // Get the field values
            $top_header_title = get_field('manamitopheadertitle');
            $top_header_description = get_field('manamitopheaderdescription');
            $manamis = array(
                array(
                    'icon' => get_field('manamitopicon1'),
                    'title' => get_field('manamitoptitle1'),
                    'description' => get_field('manamitopdescription1')
                ),
                array(
                    'icon' => get_field('manamitopicon2'),
                    'title' => get_field('manamitoptitle2'),
                    'description' => get_field('manamitopdescription2')
                ),
                array(
                    'icon' => get_field('manamitopicon3'),
                    'title' => get_field('manamitoptitle3'),
                    'description' => get_field('manamitopdescription3')
                )
            );
            $bot_header_title = get_field('manamibotheadertitle');
            $bot_header_description = get_field('manamibotheaderdescription');
            $bot_title = get_field('manamibottitle');
            $bot_descriptions = array(
                array(
                    'description' => get_field('manamibotdescription1')
                ),
                array(
                    'description' => get_field('manamibotdescription2')
                )
            );
        ?>
        <div class="franchise-manami-top">
            <figure class="franchise-manami-top-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="franchise-manami-top-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="franchise-manami-top-header">
                <div class="franchise-manami-top-header-title">
                    <p><?= $top_header_title ?></p>
                </div>
                <div class="franchise-manami-top-header-description">
                    <p><?= $top_header_description ?></p>
                </div>
            </div>
            <div class="franchise-manami-top-group">
                <?php foreach ($manamis as $manami) { ?>
                <div class="franchise-manami-top-group-box">
                    <figure>
                        <img src=<?= $manami['icon'] ?> alt="">
                    </figure>
                    <div class="franchise-manami-top-group-box-title">
                        <p><?= $manami['title'] ?></p>
                    </div>
                    <div class="franchise-manami-top-group-box-line"></div>
                    <div class="franchise-manami-top-group-box-description">
                        <p><?= $manami['description'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="franchise-manami-bot">
            <figure class="franchise-manami-bot-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="franchise-manami-bot-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="franchise-manami-bot-header">
                <div class="franchise-manami-bot-header-title">
                    <p><?= $bot_header_title ?></p>
                </div>
                <div class="franchise-manami-bot-header-description">
                    <p><?= $bot_header_description ?>
                    </p>
                </div>
            </div>
            <div class="franchise-manami-bot-group">
                <div class="franchise-manami-bot-group-left">
                    <div class="franchise-manami-bot-group-left-title">
                        <p><?= $bot_title ?></p>
                    </div>
                    <div class="franchise-manami-bot-group-left-description">
                        <?php foreach ($bot_descriptions as $bot_description) { ?>
                        <p>
                            <?= $bot_description['description'] ?>
                        </p>
                        <?php } ?>
                    </div>
                </div>
                <figure class="franchise-manami-bot-group-right">
                    <img src=<?= wp_get_attachment_image_src(1157)[0] ?> alt="">
                </figure>
            </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>
