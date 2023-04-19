<section id="franchiseType">
    <div class="franchise-type">
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
            $header_title = get_field('typeheadertitle');
            $header_description = get_field('typeheaderdescription');
            $types = array(
                array(
                    'image' => get_field('typeimage1'),
                    'title' => get_field('typetitle1'),
                    'description' => get_field('typedescription1'),
                ),
                array(
                    'image' => get_field('typeimage2'),
                    'title' => get_field('typetitle2'),
                    'description' => get_field('typedescription2'),
                ),
                array(
                    'image' => get_field('typeimage3'),
                    'title' => get_field('typetitle3'),
                    'description' => get_field('typedescription3'),
                )
            );
        ?>
            <figure class="franchise-type-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="franchise-type-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="franchise-type-header">
                <div class="franchise-type-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="franchise-type-header-description">
                    <p><?= $header_description ?>
                    </p>
                </div>
            </div>
            <div class="franchise-type-group">
                <?php foreach ($types as $type) { ?>
                <div class="franchise-type-group-box">
                    <figure class="franchise-type-group-box-left">
                        <img src=<?= $type['image'] ?> alt="">
                    </figure>
                    <div class="franchise-type-group-box-right">
                        <div class="franchise-type-group-box-right-title">
                            <p><?= $type['title'] ?></p>
                        </div>
                        <div class="franchise-type-group-box-right-description">
                            <p><?= $type['description'] ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>