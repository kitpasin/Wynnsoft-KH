<section id="brand-vendingcafeProduct">
    <div class="brand-vendingcafe-product">
         <?php
            $p_value = '1045'; // Default value
            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                $p_value = '1691'; // Update value if URL contains "-kh"
            }
            $query_brand_vendingcafe_product = new WP_Query(array(
                'p' => $p_value,
                'post_type' => 'page',
                'post_status' => 'publish'
            ));
            while ($query_brand_vendingcafe_product->have_posts()) {
                $query_brand_vendingcafe_product->the_post();

            // Get the field values
            $header_title = get_field('productheadertitle');
            $header_description = get_field('productheaderdescription');
            $products = array(
                array(
                    'icon' => get_field('producticon1'),
                    'title' => get_field('producttitle1'),
                    'description' => get_field('productdescription1')
                ),
                array(
                    'icon' => get_field('producticon2'),
                    'title' => get_field('producttitle2'),
                    'description' => get_field('productdescription2')
                ),
                array(
                    'icon' => get_field('producticon3'),
                    'title' => get_field('producttitle3'),
                    'description' => get_field('productdescription3')
                )
            );
        ?>
        <figure class="brand-vendingcafe-product-floatingimg-1">
            <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
        </figure>
        <figure class="brand-vendingcafe-product-floatingimg-2">
            <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
        </figure>
        <div class="brand-vendingcafe-product-group">
            <div class="brand-vendingcafe-product-group-header">
                <div class="brand-vendingcafe-product-group-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="brand-vendingcafe-product-group-header-description">
                    <p><?= $header_description ?></p>
                </div>
            </div>
            <div class="brand-vendingcafe-product-group-box">
                <?php foreach ($products as $product) { ?>
                <div class="brand-vendingcafe-product-group-box-content">
                    <figure>
                        <img src=<?= $product['icon'] ?> alt="">
                    </figure>
                    <div class="brand-vendingcafe-product-group-box-content-title">
                        <p><?= $product['title'] ?></p>
                    </div>
                    <div class="brand-vendingcafe-product-group-box-content-line"></div>
                    <div class="brand-vendingcafe-product-group-box-content-description">
                        <p><?= $product['description'] ?></p>
                    </div>
                </div>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>