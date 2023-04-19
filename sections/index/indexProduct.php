<section id="indexProduct">
    <div class="product">
        <?php
        $p_value = '1454'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1436'; // Update value if URL contains "-kh"
        }

        $query_home_product = new WP_QUERY(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_home_product->have_posts()) {
            $query_home_product->the_post();

            // Get the field values
            $header_title = get_field('homeproductheadertitle');
            $header_description = get_field('homeproductheaderdescription');
            $products = array(
                array(
                    'icon' => get_field('homeproducticon1'),
                    'title' => get_field('homeproducttitle1'),
                    'description' => get_field('homeproductdescription1')
                ),
                array(
                    'icon' => get_field('homeproducticon2'),
                    'title' => get_field('homeproducttitle2'),
                    'description' => get_field('homeproductdescription2')
                ),
                array(
                    'icon' => get_field('homeproducticon3'),
                    'title' => get_field('homeproducttitle1'),
                    'description' => get_field('homeproductdescription2')
                ),
            );
        ?>
            <figure class="product-floatingimg">
                <img src=<?= wp_get_attachment_image_src(173)[0]; ?> alt="">
            </figure>
            <div class="product-header">
                <div class="product-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="product-header-description">
                    <p><?= $header_description ?></p>
                </div>
            </div>
            <div class="swiper product-swiper">
                <div class="swiper-wrapper product-wrapper">
                    <?php foreach ($products as $product) { ?>
                        <div class="swiper-slide product-slide">
                            <div class="product-swiper-group">
                                <figure class="product-swiper-group-floatingimg-1">
                                    <img src=<?= wp_get_attachment_image_src(179)[0] ?> alt="">
                                </figure>
                                <figure class="product-swiper-group-floatingimg-2">
                                    <img src=<?= wp_get_attachment_image_src(175)[0] ?> alt="">
                                </figure>
                                <figure class="product-swiper-group-image">
                                    <img src=<?= $product['icon'] ?> alt="">
                                </figure>
                                <div class="product-swiper-group-title">
                                    <p><?= $product['title'] ?></p>
                                </div>
                                <div class="product-swiper-group-line"></div>
                                <div class="product-swiper-group-description">
                                    <p><?= $product['description'] ?></p>
                                </div>
                                <div class="product-swiper-group-detail">
                                    <?php
                                    if ($p_value == '1436') {
                                        echo '<button type="button" onclick="location.href=\'/service-vendingcafe-kh/\'">Detail</button>';
                                    } else {
                                        echo '<button type="button" onclick="location.href=\'/service-vendingcafe/\'">Detail</button>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination" id="productPagination"></div>
            </div>
            <div class="product-illustration">
                <figure>
                    <img src=<?= wp_get_attachment_image_src(174)[0] ?> alt="">
                </figure>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>