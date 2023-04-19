<section id="indexBanner">
    <div class="banner" style="background: url(<?= wp_get_attachment_image_src(141)[0]; ?>) no-repeat; background-size: 100% 100%;">
        <?php
        $p_value = '1454'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1436'; // Update value if URL contains "-kh"
        }

        $query_home_banner = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));

        while ($query_home_banner->have_posts()) {
            $query_home_banner->the_post();

            // Get the filed values
            $banners = array(
                array(
                    'presenter' => get_field('homebannerpresenter1'),
                    'title' => get_field('homebannertitle1'),
                    'description' => get_field('homebannerdescription1'),
                ),
                array(
                    'presenter' => get_field('homebannerpresenter2'),
                    'title' => get_field('homebannertitle2'),
                    'description' => get_field('homebannerdescription2'),
                ),
                array(
                    'presenter' => get_field('homebannerpresenter3'),
                    'title' => get_field('homebannertitle3'),
                    'description' => get_field('homebannerdescription3'),
                )
            );

        ?>

            <figure class="banner-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(142)[0]; ?> alt="">
            </figure>
            <figure class="banner-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0]; ?> alt="">
            </figure>
            <figure class="banner-floatingimg-3">
                <img src=<?= wp_get_attachment_image_src(144)[0]; ?> alt="">
            </figure>
            <div class="banner-swiper">
                <div class="swiper" id="bannerSwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($banners as $banner) { ?>
                            <div class="swiper-slide">
                                <div class="banner-swiper-group">
                                    <div class="banner-swiper-group-left">
                                        <figure>
                                            <img src=<?= $banner['presenter'] ?> alt="">
                                        </figure>
                                    </div>
                                    <div class="banner-swiper-group-right">
                                        <div class="banner-swiper-group-right-title">
                                            <p><?= $banner['title'] ?>
                                            </p>
                                        </div>
                                        <div class="banner-swiper-group-right-description">
                                            <p><?= $banner['description'] ?>
                                            </p>
                                        </div>
                                        <div class="banner-swiper-group-right-detail">
                                            <?php
                                            if ($p_value == '1436') {
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
                </div>
                <div class="swiper-pagination" id="bannerPagination"></div>
                <div class="swiper-button-prev" id="bannerBtnPrev"></div>
                <div class="swiper-button-next" id="bannerBtnNext"></div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>