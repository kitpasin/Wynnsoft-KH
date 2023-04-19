<section id="serve-agencyTop">
    <div class="top">
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
            $title = get_field('agencytopheadertitle');
            $description = get_field('agencytopheaderdescription');
            $tops = array(
                array(
                    'icon' => get_field('agencytopicon1'),
                    'title' => get_field('agencytoptitle1'),
                    'description' => get_field('agencytopdescription1'),
                ),
                array(
                    'icon' => get_field('agencytopicon2'),
                    'title' => get_field('agencytoptitle2'),
                    'description' => get_field('agencytopdescription2'),
                ),
                array(
                    'icon' => get_field('agencytopicon3'),
                    'title' => get_field('agencytoptitle3'),
                    'description' => get_field('agencytopdescription3'),
                )
            );
        ?>
            <div class="top-header">
                <div class="top-header-title">
                    <p><?= $title ?></p>
                </div>
                <div class="top-header-description">
                    <p><?= $description ?></p>
                </div>
            </div>
            <div class="top-group">
                <?php foreach ($tops as $top) { ?>
                    <div class="top-group-box">
                        <figure>
                            <img src=<?= $top['icon'] ?> alt="">
                        </figure>
                        <div class="top-group-box-title">
                            <p><?= $top['title'] ?></p>
                        </div>
                        <div class="top-group-box-line"></div>
                        <div class="top-group-box-description">
                            <p><?= $top['description'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>