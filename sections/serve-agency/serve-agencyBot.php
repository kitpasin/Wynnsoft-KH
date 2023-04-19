<section id="serve-agencyBot">
    <div class="bot">
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
            $lefts = array(
                array(
                    'title' => get_field('agencybottitle1'),
                    'description' => get_field('agencybotdescription1')
                ),
                array(
                    'title' => get_field('agencybottitle2'),
                    'description' => get_field('agencybotdescription2')
                ),
                array(
                    'title' => get_field('agencybottitle3'),
                    'description' => get_field('agencybotdescription3')
                ),
                array(
                    'title' => get_field('agencybottitle4'),
                    'description' => get_field('agencybotdescription4')
                ),
            );
            $rights = array(
                array(
                    'title' => get_field('agencybottitle5'),
                    'description' => get_field('agencybotdescription5')
                ),
                array(
                    'title' => get_field('agencybottitle6'),
                    'description' => get_field('agencybotdescription6')
                ),
                array(
                    'title' => get_field('agencybottitle7'),
                    'description' => get_field('agencybotdescription7')
                ),
                array(
                    'title' => get_field('agencybottitle8'),
                    'description' => get_field('agencybotdescription8')
                ),
            );
        ?>
            <div class="bot-group">
                <div class="bot-group-left">
                    <?php foreach ($lefts as $left) { ?>
                        <div class="bot-group-left-box">
                            <div class="bot-group-left-box-title">
                                <p><?= $left['title'] ?></p>
                            </div>
                            <div class="bot-group-left-box-description">
                                <p><?= $left['description'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="bot-group-right">
                    <?php foreach ($rights as $right) { ?>
                        <div class="bot-group-right-box">
                            <div class="bot-group-right-box-title">
                                <p><?= $right['title'] ?></p>
                            </div>
                            <div class="bot-group-right-box-description">
                                <p><?= $right['description'] ?></p>
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