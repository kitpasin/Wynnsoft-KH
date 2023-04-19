<section id="contactAddress">
    <div class="contact-address">
        <?php
        $p_value = '1183'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1748'; // Update value if URL contains "-kh"
        }
        $query_contact_banner = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_contact_banner->have_posts()) {
            $query_contact_banner->the_post();

            // Get the field values
            $header_title = get_field('addressheadertitle');
            $header_description = get_field('addressheaderdescription');
            $addresses = array(
                array(
                    'icon' => get_field('addressicon1'),
                    'title' => get_field('addresstitle1'),
                    'description1' => get_field('addressdescription1.1'),
                    'description2' => get_field('addressdescription1.2'),
                ),
                array(
                    'icon' => get_field('addressicon2'),
                    'title' => get_field('addresstitle2'),
                    'description1' => get_field('addressdescription2.1'),
                    'description2' => get_field('addressdescription2.2'),
                ),
                array(
                    'icon' => get_field('addressicon3'),
                    'title' => get_field('addresstitle3'),
                    'description1' => get_field('addressdescription3.1'),
                    'description2' => get_field('addressdescription3.2'),
                )
            );
        ?>
            <figure class="contact-address-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="contact-address-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="contact-address-group">
                <div class="contact-address-group-header">
                    <div class="contact-address-group-header-title">
                        <p><?= $header_title ?></p>
                    </div>
                    <div class="contact-address-group-header-description">
                        <p><?= $header_description ?></p>
                    </div>
                </div>
                <div class="contact-address-group-box">
                    <?php foreach ($addresses as $address) { ?>
                        <div class="contact-address-group-box-content">
                            <figure>
                                <img src=<?= $address['icon'] ?> alt="">
                            </figure>
                            <div class="contact-address-group-box-content-title">
                                <p><?= $address['title'] ?></p>
                            </div>
                            <div class="contact-address-group-box-content-line"></div>
                            <div class="contact-address-group-box-content-description">
                                <p><?= $address['description1'] ?></p>
                                <p><?= $address['description2'] ?></p>
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