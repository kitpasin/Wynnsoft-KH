<section id="serve-agencyMid">
    <div class="mid">
        <?php
        $p_value = '530'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1607'; // Update value if URL contains "-kh"
        }
        $query_agency_top = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_agency_top->have_posts()) {
            $query_agency_top->the_post();

            // Get the field values
            $title = get_field('agencymidtitle');
            $description = get_field('agencymiddescription');
            $presenter = get_field('agencymidpresenter')
        ?>
            <div class="mid-group">
                <figure class="mid-group-floatingimg-1">
                    <img src=<?= wp_get_attachment_image_src(559)[0] ?> alt="">
                </figure>
                <figure class="mid-group-floatingimg-2">
                    <img src=<?= wp_get_attachment_image_src(560)[0] ?> alt="">
                </figure>
                <figure class="mid-group-floatingimg-3">
                    <img src=<?= wp_get_attachment_image_src(561)[0] ?> alt="">
                </figure>
                <figure class="mid-group-floatingimg-4">
                    <img src=<?= wp_get_attachment_image_src(562)[0] ?> alt="">
                </figure>
                <div class="mid-group-box">
                    <figure class="mid-group-box-title">
                        <img src=<?= wp_get_attachment_image_src(493)[0] ?> alt="">
                        <p><?= $title ?></p>
                    </figure>
                    <div class="mid-group-box-description">
                        <div class="mid-group-box-description-left">
                            <p><?= $description ?></p>
                        </div>
                        <figure class="mid-group-box-description-right">
                            <img src=<?= $presenter ?> alt="">
                        </figure>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>