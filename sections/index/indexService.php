<section id="indexService">
    <div class="service">
        <?php
        $p_value = '1454'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1436'; // Update value if URL contains "-kh"
        }

        $query_home_service = new WP_QUERY(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_home_service->have_posts()) {
            $query_home_service->the_post();

            // Get the field Values
            $header_top_title = get_field('homeservicetopheadertitle');
            $header_top_description = get_field('homeservicetopheaderdescription');
            $services = array(
                array(
                    'icon' => get_field('homeservicetopicon1'),
                    'title' => get_field('homeservicetoptitle1'),
                    'description' => get_field('homeservicetopdescription1')
                ),
                array(
                    'icon' => get_field('homeservicetopicon2'),
                    'title' => get_field('homeservicetoptitle2'),
                    'description' => get_field('homeservicetopdescription2')
                ),
                array(
                    'icon' => get_field('homeservicetopicon3'),
                    'title' => get_field('homeservicetoptitle3'),
                    'description' => get_field('homeservicetopdescription3')
                ),
            );
            $header_bot_title = get_field('homeservicebottitle');
            $header_bot_description = get_field('homeservicebotdescription');
        ?>
            <div class="service-top">
                <figure class="service-top-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(197)[0] ?> alt="">
                </figure>
                <figure class="service-top-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
                </figure>
                <div class="service-top-header">
                    <div class="service-top-header-title">
                        <p><?= $header_top_title ?></p>
                    </div>
                    <div class="service-top-header-description">
                        <p><?= $header_top_description ?></p>
                    </div>
                </div>
                <div class="swiper service-top-swiper">
                    <div class="swiper-wrapper service-top-wrapper">
                        <?php foreach ($services as $service) { ?>
                            <div class="swiper-slide service-top-slide">
                                <div class="service-top-swiper-group">
                                    <figure class="service-top-swiper-group-floatingimg-1">
                                        <img src=<?= wp_get_attachment_image_src(217)[0] ?> alt="">
                                    </figure>
                                    <figure class="service-top-swiper-group-floatingimg-2">
                                        <img src=<?= wp_get_attachment_image_src(221)[0] ?> alt="">
                                    </figure>
                                    <figure class="service-top-swiper-group-image">
                                        <img src=<?= $service['icon'] ?> alt="">
                                    </figure>
                                    <div class="service-top-swiper-group-title">
                                        <p><?= $service['title'] ?></p>
                                    </div>
                                    <div class="service-top-swiper-group-line"></div>
                                    <div class="service-top-swiper-group-description">
                                        <p><?= $service['description'] ?></p>
                                    </div>
                                    <div class="service-top-swiper-group-detail">
                                        <?php
                                        if ($p_value == '1436') {
                                            echo '<button type="button" onclick="location.href=\'/serve-kh/\'">Detail</button>';
                                        } else {
                                            echo '<button type="button" onclick="location.href=\'/serve/\'">Detail</button>';
                                        }
                                       ?>
                                        </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination" id="servicePagination"></div>
                </div>
            </div>
            <div class="service-bot">
                <figure class="service-bot-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
                </figure>
                <figure class="service-bot-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
                </figure>
                <div class="service-bot-group">
                    <div class="service-bot-group-left">
                        <div class="service-bot-group-left-title">
                            <p><?= $header_bot_title ?></p>
                        </div>
                        <div class="service-bot-group-left-description">
                            <p><?= $header_bot_description ?>
                            </p>
                        </div>
                        <div class="service-bot-group-left-detail">
                            <?php 
                            if ($p_value == '1436') {
                                echo '<button type="button" onclick="location.href=\'/franchise-kh/\'">Detail</button>';
                            } else {
                                echo '<button type="button" onclick="location.href=\'/franchise/\'">Detail</button>';
                            }
                                ?>
                            </div>
                    </div>
                    <figure class="service-bot-group-right">
                        <img src=<?= wp_get_attachment_image_src(218)[0] ?> alt="">
                    </figure>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>