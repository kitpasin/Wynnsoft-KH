<section id="franchiseContact">
    <div class="franchise-contact">
        <?php
        $p_value = '1130'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1713'; // Update value if URL contains "-kh"
        }
        $query_franchise_manami = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_franchise_manami->have_posts()) {
            $query_franchise_manami->the_post();

            // Get the field values
            $title = get_field('contacttitle');
            $description = get_field('contactdescription');
        ?>
            <figure class="franchise-contact-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(191)[0] ?> alt="">
            </figure>
            <figure class="franchise-contact-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(143)[0] ?> alt="">
            </figure>
            <div class="franchise-contact-group">
                <div class="franchise-contact-group-header">
                    <div class="franchise-contact-group-header-title">
                        <p><?= $title ?></p>
                    </div>
                    <div class="franchise-contact-group-header-description">
                        <p><?= $description ?></p>
                    </div>
                </div>
                <div class="franchise-contact-group-btn">
                    <?php
                    if ($p_value == '1713') {
                        echo '<button><a href="/contact-kh/">Contact Us</a></button>';
                    } else {
                        echo '<button><a href="/contact/">Contact Us</a></button>';
                    }
                    ?>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>