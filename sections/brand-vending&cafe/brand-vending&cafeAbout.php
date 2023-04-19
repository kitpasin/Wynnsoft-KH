<section id="brand-vendingcafeAbout">
    <div class="brand-vendingcafe-about">
        <?php
        $p_value = '1045'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1691'; // Update value if URL contains "-kh"
        }
        $query_brand_vendingcafe_about = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_brand_vendingcafe_about->have_posts()) {
            $query_brand_vendingcafe_about->the_post();

            // Get the field values
            $top_header_title = get_field('abouttopheadertitle');
            $top_header_description = get_field('abouttopheaderdescription');
            $top_title = get_field('abouttoptitle');
            $top_descriptions = array(
                array(
                    'description' => get_field('abouttopdescription1')
                ),
                array(
                    'description' => get_field('abouttopdescription2')
                )
            );
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
                )
            );
        ?>
            <div class="brand-vendingcafe-about-top">
                <figure class="brand-vendingcafe-about-top-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
                </figure>
                <figure class="brand-vendingcafe-about-top-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
                </figure>
                <div class="brand-vendingcafe-about-top-header">
                    <div class="brand-vendingcafe-about-top-header-title">
                        <p><?= $top_header_title ?></p>
                    </div>
                    <div class="brand-vendingcafe-about-top-header-description">
                        <p><?= $top_header_description ?>
                        </p>
                    </div>
                </div>
                <div class="brand-vendingcafe-about-top-group">
                    <div class="brand-vendingcafe-about-top-group-left">
                        <div class="brand-vendingcafe-about-top-group-left-title">
                            <p><?= $top_title ?></p>
                        </div>
                        <div class="brand-vendingcafe-about-top-group-left-description">
                            <?php foreach ($top_descriptions as $top_description) { ?>
                                <p>
                                    <?= $top_description['description'] ?>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                    <figure class="brand-vendingcafe-about-top-group-right">
                        <img src=<?= wp_get_attachment_image_src(1089)[0] ?> alt="">
                    </figure>
                </div>
            </div>
            <div class="brand-vendingcafe-about-bot">
                <figure class="brand-vendingcafe-about-bot-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
                </figure>
                <figure class="brand-vendingcafe-about-bot-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
                </figure>
                <div class="brand-vendingcafe-about-bot-header">
                    <div class="brand-vendingcafe-about-bot-header-title">
                        <p><?= $bot_header_title ?></p>
                    </div>
                    <div class="brand-vendingcafe-about-bot-header-description">
                        <p><?= $bot_header_description ?></p>
                    </div>
                </div>
                <div class="brand-vendingcafe-about-bot-group">
                    <div class="brand-vendingcafe-about-bot-group-left">
                        <?php foreach ($abouts as $about) { ?>
                            <div class="brand-vendingcafe-about-bot-group-left-box">
                                <figure>
                                    <img src=<?= $about['icon'] ?> alt="">
                                </figure>
                                <div class="brand-vendingcafe-about-bot-group-left-box-title">
                                    <p><?= $about['title'] ?></p>
                                </div>
                                <div class="brand-vendingcafe-about-bot-group-left-box-line"></div>
                                <div class="brand-vendingcafe-about-bot-group-left-box-description">
                                    <p><?= $about['description'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <figure class="brand-vendingcafe-about-bot-group-right">
                        <img src=<?= wp_get_attachment_image_src(878)[0] ?> alt="">
                    </figure>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>