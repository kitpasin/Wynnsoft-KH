<section id="works-workBanner">
    <div class="works-work-banner">
        <?php
        if (isset($_GET['works_id'])) {
            $works_id = $_GET['works_id'];
        }
        $query_works = new WP_Query(array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'p' => $works_id,
            'posts_per_page' => 1
        ));
        while ($query_works->have_posts()) {
            $query_works->the_post();

            // Get the works data
            $works_image = get_the_post_thumbnail_url();
            $works_bgimage = get_field('bannerbackgroundimage');
        ?>
            <figure class="works-work-banner-bg">
                <img src=<?= $works_bgimage ?> alt="">
            </figure>
            <figure class="works-work-banner-image">
                <img src=<?= $works_image ?> alt="">
            </figure>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>