<section id="service-websiteProcess">
    <div class="process">
        <?php
        $p_value = '593'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1616'; // Update value if URL contains "-kh"
        }
        $query_service_website_process = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_website_process->have_posts()) {
            $query_service_website_process->the_post();

            // Get the field values
            $header_title = get_field('processheadertitle');
            $header_description = get_field('processheaderdescription');
            $processes = array(
                array(
                    'image' => get_field('processimage1'),
                    'no' => 1,
                    'title' => get_field('processtitle1'),
                    'description' => get_field('processdescription1')
                ),
                array(
                    'image' => get_field('processimage2'),
                    'no' => 2,
                    'title' => get_field('processtitle2'),
                    'description' => get_field('processdescription2')
                ),
                array(
                    'image' => get_field('processimage3'),
                    'no' => 3,
                    'title' => get_field('processtitle3'),
                    'description' => get_field('processdescription3')
                ),
                array(
                    'image' => get_field('processimage4'),
                    'no' => 4,
                    'title' => get_field('processtitle4'),
                    'description' => get_field('processdescription4')
                ),
                array(
                    'image' => get_field('processimage5'),
                    'no' => 5,
                    'title' => get_field('processtitle5'),
                    'description' => get_field('processdescription5')
                ),
                array(
                    'image' => get_field('processimage6'),
                    'no' => 6,
                    'title' => get_field('processtitle6'),
                    'description' => get_field('processdescription6')
                ),
            );
        ?>
            <div class="process-header">
                <div class="process-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="process-header-description">
                    <p><?= $header_description ?>
                    </p>
                </div>
            </div>
            <div class="process-group">
                <?php foreach ($processes as $process) { ?>
                    <div class="process-group-box">
                        <figure class="process-group-box-left">
                            <img src=<?= $process['image'] ?> alt="">
                        </figure>
                        <div class="process-group-box-right">
                            <div class="process-group-box-right-title">
                                <p><?= $process['no'] ?>.</p>
                                <p><?= $process['title'] ?></p>
                            </div>
                            <div class="process-group-box-right-description">
                                <p><?= $process['description'] ?></p>
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