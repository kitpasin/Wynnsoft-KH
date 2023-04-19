<section id="serveAgency">
    <div class="agency">
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
            $header_title = get_field('serveagencyheadertitle');
            $header_description = get_field('serveagencyheaderdescription');
            $agencies = array(
                array(
                    'image' => get_field('serveagencyimage1'),
                    'icon' => get_field('serveagencyicon1'),
                    'title' => get_field('serveagencytitle1'),
                ),
                array(
                    'image' => get_field('serveagencyimage2'),
                    'icon' => get_field('serveagencyicon2'),
                    'title' => get_field('serveagencytitle2'),
                ),
                array(
                    'image' => get_field('serveagencyimage3'),
                    'icon' => get_field('serveagencyicon3'),
                    'title' => get_field('serveagencytitle3'),
                ),
            );
        ?>
            <figure class="agency-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="agency-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="agency-header">
                <div class="agency-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="agency-header-description">
                    <p><?= $header_description ?></p>
                </div>
            </div>
            <div class="agency-swiper">
                <div class="swiper" id="agencySwiper">
                    <div class="swiper-wrapper agency-swiper-wrapper">
                        <?php foreach ($agencies as $agency) { ?>
                            <div class="swiper-slide agency-swiper-slide">
                                <div class="agency-swiper-group">
                                    <figure class="agency-swiper-group-box">
                                        <img src=<?= $agency['image'] ?> alt="">
                                        <div class="agency-swiper-group-box-type">
                                            <figure class="agency-swiper-group-box-type-left">
                                                <img src=<?= $agency['icon'] ?> alt="">
                                            </figure>
                                            <div class="agency-swiper-group-box-type-right">
                                                <p><?= $agency['title'] ?></p>
                                                <div class="agency-swiper-group-box-type-right-line"></div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="agency-swiper-group-detail">
                                        <?php
                                        if ($p_value == '1595') {
                                            echo '<button type="button"><a href="/serve-kh/agency-kh/">Detail</a></button>';
                                        } else {
                                            echo '<button type="button"><a href="/serve/agency/">Detail</a></button>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="swiper-pagination" id="agencyPagination"></div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>