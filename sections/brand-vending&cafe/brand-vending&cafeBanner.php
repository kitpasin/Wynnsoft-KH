<section id="brand-vendingcafeBanner">
    <div class="brand-vendingcafe-banner">
        <?php
        $p_value = '1045'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1691'; // Update value if URL contains "-kh"
        }
        $query_brand_vendingcafe_banner = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_brand_vendingcafe_banner->have_posts()) {
            $query_brand_vendingcafe_banner->the_post();

            // Get the field values
            $presenter = get_field('bannerpresenter');
            $title = get_field('bannertitle');
            $description = get_field('bannerdescription');
        ?>
            <div class="brand-vendingcafe-banner-group">
                <figure class="brand-vendingcafe-banner-group-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(446)[0] ?> alt="">
                </figure>
                <figure class="brand-vendingcafe-banner-group-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(447)[0] ?> alt="">
                </figure>
                <figure class="brand-vendingcafe-banner-group-floatingimg-3">
                    <img src=<?= wp_get_attachment_image_src(448)[0] ?> alt="">
                </figure>
                <figure class="brand-vendingcafe-banner-group-floatingimg-4">
                    <img src=<?= wp_get_attachment_image_src(449)[0] ?> alt="">
                </figure>
                <figure class="brand-vendingcafe-banner-group-floatingimg-5">
                    <img src=<?= wp_get_attachment_image_src(450)[0] ?> alt="">
                </figure>
                <figure class="brand-vendingcafe-banner-group-floatingimg-6">
                    <img src=<?= wp_get_attachment_image_src(451)[0] ?> alt="">
                </figure>
                <figure class="brand-vendingcafe-banner-group-left">
                    <img src=<?= $presenter ?> alt="">
                </figure>
                <div class="brand-vendingcafe-banner-group-right">
                    <div class="brand-vendingcafe-banner-group-right-title">
                        <p><?= $title ?></p>
                    </div>
                    <div class="brand-vendingcafe-banner-group-right-description">
                        <p><?= $description ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>