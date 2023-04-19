<section id="newspromotion-newsBanner">
    <div class="newspromotion-news-banner">
        <?php
        if (isset($_GET['news_id'])) {
            $news_id = $_GET['news_id'];
        }
        $query_news = new WP_Query(array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'p' => $news_id,
            'posts_per_page' => 1
        ));
        while ($query_news->have_posts()) {
            $query_news->the_post();

            // Get the news data
            $news_image = get_the_post_thumbnail_url();
            $news_bgimage = get_field('bannerbackgroundimage');
        ?>
            <figure class="newspromotion-news-banner-bg">
                <img src=<?= $news_bgimage ?> alt="">
            </figure>
            <figure class="newspromotion-news-banner-image">
                <img src=<?= $news_image ?> alt="">
            </figure>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>