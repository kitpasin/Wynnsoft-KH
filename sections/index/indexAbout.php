<section id="indexAbout">
    <div class="about">
        <?php
        $p_value = '1454'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1436'; // Update value if URL contains "-kh"
        }

        $query_home_about = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_home_about->have_posts()) {
            $query_home_about->the_post();

            // Get the field values
            $header_top_title = get_field('homeabouttopheadertitle');
            $header_top_description = get_field('homeabouttopheaderdescription');
            $wcus = array(
                array(
                    'icon' => get_field('homeabouttopicon1'),
                    'title' => get_field('homeabouttoptitle1'),
                    'description' => get_field('homeabouttopdescription1')
                ),
                array(
                    'icon' => get_field('homeabouttopicon2'),
                    'title' => get_field('homeabouttoptitle2'),
                    'description' => get_field('homeabouttopdescription2')
                ),
                array(
                    'icon' => get_field('homeabouttopicon3'),
                    'title' => get_field('homeabouttoptitle3'),
                    'description' => get_field('homeabouttopdescription3')
                ),
                array(
                    'icon' => get_field('homeabouttopicon4'),
                    'title' => get_field('homeabouttoptitle4'),
                    'description' => get_field('homeabouttopdescription4')
                )
            );
            $header_bot_title = get_field('homeaboutbotheadertitle');
            $header_bot_description = get_field('homeaboutbotheaderdescription');
            $staffs = array(
                array(
                    'staff' => get_field('homeaboutbotstaff1'),
                    'title' => get_field('homeaboutbottitle1'),
                    'description' => get_field('homeaboutbotdescription1')
                ),
                array(
                    'staff' => get_field('homeaboutbotstaff2'),
                    'title' => get_field('homeaboutbottitle2'),
                    'description' => get_field('homeaboutbotdescription2')
                ),
                array(
                    'staff' => get_field('homeaboutbotstaff3'),
                    'title' => get_field('homeaboutbottitle3'),
                    'description' => get_field('homeaboutbotdescription3')
                )
            );
        ?>
            <div class="about-top">
                <figure class="about-top-floatingimg">
                    <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
                </figure>
                <div class="about-top-header">
                    <div class="about-top-header-title">
                        <p><?= $header_top_title ?></p>
                    </div>
                    <div class="about-top-header-description">
                        <p><?= $header_top_description ?></p>
                    </div>
                </div>
                <div class="about-top-group">
                    <div class="about-top-group-left">
                        <?php foreach ($wcus as $wcu) { ?>
                            <div class="about-top-group-left-box">
                                <figure>
                                    <img src=<?= $wcu['icon'] ?> alt="">
                                </figure>
                                <div class="about-top-group-left-box-title">
                                    <p><?= $wcu['title'] ?></p>
                                </div>
                                <div class="about-top-group-left-box-line"></div>
                                <div class="about-top-group-left-box-description">
                                    <p><?= $wcu['description'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <figure class="about-top-group-right">
                        <img src=<?= wp_get_attachment_image_src(240)[0] ?> alt="">
                    </figure>
                </div>
            </div>
            <div class="about-bot">
                <figure class="about-bot-floatingimg">
                    <img src=<?= wp_get_attachment_image_src(239)[0] ?> alt="">
                </figure>
                <div class="about-bot-header">
                    <div class="about-bot-header-title">
                        <p><?= $header_bot_title ?></p>
                    </div>
                    <div class="about-bot-header-description">
                        <p><?= $header_bot_description ?> </p>
                    </div>
                </div>
                <div class="about-bot-group">
                    <?php foreach ($staffs as $staff) { ?>
                        <div class="about-bot-group-box">
                            <figure>
                                <img src=<?= $staff['staff'] ?> alt="">
                            </figure>
                            <div class="about-bot-group-box-title">
                                <p><?= $staff['title'] ?></p>
                            </div>
                            <div class="about-bot-group-box-description">
                                <p><?= $staff['description'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>