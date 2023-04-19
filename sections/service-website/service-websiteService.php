<section id="service-websiteService">
    <?php
    $p_value = '593'; // Default value
    if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
        $p_value = '1616'; // Update value if URL contains "-kh"
    }
    $query_service_website_service = new WP_QUERY(array(
        'p' => $p_value,
        'post_type' => 'page',
        'post_status' => 'publish'
    ));
    while ($query_service_website_service->have_posts()) {
        $query_service_website_service->the_post();

        // Get the filed values
        $header_top_title = get_field('servicewebsiteservicetopheadertitle');
        $header_top_description = get_field('servicewebsiteservicetopheaderdescription');
        $swipers = array(
            array(
                'image' => get_field('swiperimage1'),
                'title' => get_field('swipertitle1'),
                'description' => get_field('swiperdescription1')
            ),
            array(
                'image' => get_field('swiperimage2'),
                'title' => get_field('swipertitle2'),
                'description' => get_field('swiperdescription2')
            ),
            array(
                'image' => get_field('swiperimage3'),
                'title' => get_field('swipertitle3'),
                'description' => get_field('swiperdescription3')
            )
        );
        $tables = array(
            array(
                'title' => get_field('tabletitle1'),
                'descriptiontop' => get_field('tabledescriptiontop1'),
                'image' => get_field('tableimage1'),
                'descriptionbot' => get_field('tabledescriptionbot1')
            ),
            array(
                'title' => get_field('tabletitle2'),
                'descriptiontop' => get_field('tabledescriptiontop2'),
                'image' => get_field('tableimage2'),
                'descriptionbot' => get_field('tabledescriptionbot2')
            ),
        );
        $design_title = get_field('designtitle');
        $design_description = get_field('designdescription');
        $design_link = get_field('designlink')
    ?>
        <div class="service-website-service">
            <figure class="service-website-service-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="service-website-service-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="service-website-service-header">
                <div class="service-website-service-header-title">
                    <p><?= $header_top_title ?></p>
                </div>
                <div class="service-website-service-header-description">
                    <p><?= $header_top_description ?>
                    </p>
                </div>
            </div>
            <div class="swiper service-website-service-swiper" id="serviceSwiper">
                <div class="swiper-wrapper service-website-service-swiper-wrapper">
                    <?php foreach ($swipers as $swiper) { ?>
                        <div class="swiper-slide service-website-service-swiper-slide">
                            <div class="service-website-service-swiper-group">
                                <figure class="service-website-service-swiper-group-floatingimg-1">
                                    <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
                                </figure>
                                <figure class="service-website-service-swiper-group-floatingimg-2">
                                    <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
                                </figure>
                                <figure class="service-website-service-swiper-group-image">
                                    <img src=<?= $swiper['image'] ?> alt="">
                                </figure>
                                <div class="service-website-service-swiper-group-box">
                                    <div class="service-website-service-swiper-group-box-title">
                                        <p><?= $swiper['title'] ?></p>
                                    </div>
                                    <div class="service-website-service-swiper-group-box-description">
                                        <p><?= $swiper['description'] ?></p>
                                    </div>
                                    <div class="service-website-service-swiper-group-box-detail">
                                        <?php 
                                        if ($p_value == '1616') {
                                            echo '<button type="button" onclick="location.href=\'/contact-kh/\'">Detail</button>';
                                        } else {
                                            echo '<button type="button" onclick="location.href=\'/contact/\'">Detail</button>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination" id="servicePagination"></div>
            </div>
            <div class="service-website-service-table">
                <?php foreach ($tables as $table) { ?>
                    <div class="service-website-service-table-group">
                        <div class="service-website-service-table-group-header">
                            <div class="service-website-service-table-group-header-title">
                                <p><?= $table['title'] ?></p>
                            </div>
                            <div class="service-website-service-table-group-header-description">
                                <p><?= $table['descriptiontop'] ?>
                                </p>
                            </div>
                        </div>
                        <figure class="service-website-service-table-group-image">
                            <img src=<?= $table['image'] ?> alt="">
                        </figure>
                        <div class="service-website-service-table-group-description">
                            <p><?= $table['descriptionbot'] ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="service-website-service-design">
            <figure class="service-website-service-design-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="service-website-service-design-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="service-website-service-design-group">
                <div class="service-website-service-design-group-left">
                    <div class="service-website-service-design-group-left-title">
                        <p><?= $design_title ?></p>
                    </div>
                    <div class="service-website-service-design-group-left-description">
                        <p><?= $design_description ?></p>
                    </div>
                </div>
                <figure class="service-website-service-design-group-right">
                    <iframe src=<?= $design_link ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </figure>
            </div>
        </div>
    <?php }
    wp_reset_postdata();
    ?>
    </div>
</section>