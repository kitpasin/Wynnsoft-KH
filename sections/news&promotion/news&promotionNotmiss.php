<section id="newspromotionNotmiss">
    <div class="newspromotion-notmiss">
        <?php
        $p_value = '1287'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1696'; // Update value if URL contains "-kh"
        }
        $query_newspromotion_notmiss = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_newspromotion_notmiss->have_posts()) {
            $query_newspromotion_notmiss->the_post();
        
            // Get the field values
            $top_header_title = get_field('newspromotiontopheadertitle');
            $top_header_description = get_field('newspromotiontopheaderdescription');
            $tops = array(
                array(
                    'icon' => get_field('newspromotiontopicon1'),
                    'title' => get_field('newspromotiontoptitle1'),
                    'description' => get_field('newspromotiontopdescription1')
                ),
                array(
                    'icon' => get_field('newspromotiontopicon2'),
                    'title' => get_field('newspromotiontoptitle2'),
                    'description' => get_field('newspromotiontopdescription2')
                ),
                array(
                    'icon' => get_field('newspromotiontopicon3'),
                    'title' => get_field('newspromotiontoptitle3'),
                    'description' => get_field('newspromotiontopdescription3')
                ),
            );
            $bot_title = get_field('newspromotionbottitle');
            $bot_description = get_field('newspromotionbotdescription');
        ?>
        <div class="newspromotion-notmiss-top">
            <figure class="newspromotion-notmiss-top-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="newspromotion-notmiss-top-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="newspromotion-notmiss-top-header">
                <div class="newspromotion-notmiss-top-header-title">
                    <p><?= $top_header_title ?></p>
                </div>
                <div class="newspromotion-notmiss-top-header-description">
                    <p><?= $top_header_description ?></p>
                </div>
            </div>
            <div class="newspromotion-notmiss-top-group">
                <?php foreach ($tops as $top) { ?>
                <div class="newspromotion-notmiss-top-group-box">
                    <figure>
                        <img src=<?= $top['icon'] ?> alt="">
                    </figure>
                    <div class="newspromotion-notmiss-top-group-box-title">
                        <p><?= $top['title'] ?></p>
                    </div>
                    <div class="newspromotion-notmiss-top-group-box-line"></div>
                    <div class="newspromotion-notmiss-top-group-box-description">
                        <p><?= $top['description'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="newspromotion-notmiss-bot">
            <figure class="newspromotion-notmiss-bot-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="newspromotion-notmiss-bot-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="newspromotion-notmiss-bot-group">
                <div class="newspromotion-notmiss-bot-group-title">
                    <p><?= $bot_title ?></p>
                </div>
                <div class="newspromotion-notmiss-bot-group-line"></div>
                <div class="newspromotion-notmiss-bot-group-description">
                    <p><?= $bot_description ?></p>
                </div>
            </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>
