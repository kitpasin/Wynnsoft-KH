<section id="service-franchise-franchiseMedium">
    <div class="service-franchise-franchise-medium">
        <?php
        $p_value = '881'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1659'; // Update value if URL contains "-kh"
        }
        $query_franchise_medium = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_franchise_medium->have_posts()) {
            $query_franchise_medium->the_post();

            // Get the field values
            $title = get_field('title');
            $descriptions = array(
                array(
                    'title' => get_field('descriptiontitle1'),
                    'description' => get_field('descriptiondescription1')
                ),
                array(
                    'title' => get_field('descriptiontitle2'),
                    'description' => get_field('descriptiondescription2')
                ),
                array(
                    'title' => get_field('descriptiontitle3'),
                    'description' => get_field('descriptiondescription3')
                ),
                array(
                    'title' => get_field('descriptiontitle4'),
                    'description' => get_field('descriptiondescription4')
                ),
                array(
                    'title' => get_field('descriptiontitle5'),
                    'description' => get_field('descriptiondescription5')
                ),
                array(
                    'title' => get_field('descriptiontitle6'),
                    'description' => get_field('descriptiondescription6')
                ),
                array(
                    'title' => get_field('descriptiontitle7'),
                    'description' => get_field('descriptiondescription7')
                )
            );
            $detail_title = get_field('detailtitle');
            $detail_descriptions = array(
                array(
                    'description' => get_field('detaildescription1')
                ),
                array(
                    'description' => get_field('detaildescription2')
                ),
                array(
                    'description' => get_field('detaildescription3')
                )
            );
            $main_image = get_field('mainimage');
            $sub_images = array(
                array(
                    'image' => get_field('subimage1')
                ),
                array(
                    'image' => get_field('subimage2')
                ),
                array(
                    'image' => get_field('subimage3')
                ),
                array(
                    'image' => get_field('subimage4')
                ),
                array(
                    'image' => get_field('subimage5')
                ),
                array(
                    'image' => get_field('subimage6')
                ),
                array(
                    'image' => get_field('subimage7')
                ),
                array(
                    'image' => get_field('subimage8')
                )
            );
            $swiper_images = array(
                array(
                    'image' => get_field('mainimage')
                ),
                array(
                    'image' => get_field('subimage1')
                ),
                array(
                    'image' => get_field('subimage2')
                ),
                array(
                    'image' => get_field('subimage3')
                ),
                array(
                    'image' => get_field('subimage4')
                ),
                array(
                    'image' => get_field('subimage5')
                ),
                array(
                    'image' => get_field('subimage6')
                ),
                array(
                    'image' => get_field('subimage7')
                ),
                array(
                    'image' => get_field('subimage8')
                ),
            );
        ?>
            <div class="service-franchise-franchise-medium-group">
                <div class="service-franchise-franchise-medium-group-left">
                    <div class="service-franchise-franchise-medium-group-left-title">
                        <p><?= $title ?></p>
                    </div>
                    <div class="service-franchise-franchise-medium-group-left-description">
                        <?php foreach ($descriptions as $description) { ?>
                            <div class="service-franchise-franchise-medium-group-left-description-box">
                                <b><?= $description['title'] ?></b>
                                <p><?= $description['description'] ?></p>
                            </div>
                        <?php } ?>
                        <div class="service-franchise-franchise-medium-group-left-description-box">
                            <?php
                            if ($p_value == '1659') {
                                echo '<button><a href="/contact-kh/">Contact Us</a></button>';
                            } else {
                                echo '<button><a href="/contact/">Contact Us</a></button>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="service-franchise-franchise-medium-group-left-detail">
                        <div class="service-franchise-franchise-medium-group-left-detail-title">
                            <p><?= $detail_title ?></p>
                        </div>
                        <div class="service-franchise-franchise-medium-group-left-detail-description">
                            <?php foreach ($detail_descriptions as $detail_description) { ?>
                                <div class="service-franchise-franchise-medium-group-left-detail-description-box">
                                    <p><?= $detail_description['description'] ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="service-franchise-franchise-medium-group-right">
                    <figure class="service-franchise-franchise-medium-group-right-mainimg">
                        <img src=<?= $main_image ?> alt="">
                        <p>View</p>
                    </figure>
                    <div class="service-franchise-franchise-medium-group-right-subimg">
                        <?php foreach ($sub_images as $sub_image) { ?>
                            <figure class="service-franchise-franchise-medium-group-right-subimg-box">
                                <img src=<?= $sub_image['image'] ?> alt="">
                                <p>View</p>
                            </figure>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="service-franchise-franchise-medium-swiper">
                <div class="service-franchise-franchise-medium-swiper-close">
                    <div class="service-franchise-franchise-medium-swiper-close-line-1"></div>
                    <div class="service-franchise-franchise-medium-swiper-close-line-2"></div>
                </div>
                <div class="service-franchise-franchise-medium-swiper-group">
                    <div thumbsSlider="" class="swiper service-franchise-franchise-medium-swiper-group-main" id="mainSwiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($swiper_images as $swiper_image) { ?>
                                <div class="swiper-slide service-franchise-franchise-medium-swiper-group-main-box">
                                    <img src=<?= $swiper_image['image'] ?> />
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper service-franchise-franchise-medium-swiper-group-sub" id="subSwiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($swiper_images as $swiper_image) { ?>
                                <div class="swiper-slide service-franchise-franchise-medium-swiper-group-sub-box">
                                    <img src=<?= $swiper_image['image'] ?> />
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>