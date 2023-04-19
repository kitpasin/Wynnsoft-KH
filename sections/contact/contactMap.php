<section id="contactMap">
    <div class="contact-map">
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
            $map = get_field('contactmap')
        ?>
            <iframe src=<?= $map ?> style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>