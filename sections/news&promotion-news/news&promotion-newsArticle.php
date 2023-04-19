<section id="newspromotion-newsArticle">
    <div class="newspromotion-news-article">
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
            $news_date = get_field('date');
            $articles = array(
                array(
                    'title' => get_field('title1'),
                    'description' => get_field('description1'),
                ),
                array(
                    'title' => get_field('title2'),
                    'description' => get_field('description2'),
                ),
                array(
                    'title' => get_field('title3'),
                    'description' => get_field('description3'),
                ),
            );
            $news_title_kh = get_field('newspromotiontitlekh');
            $news_description_kh = get_field('newspromotiondescriptionkh');
            $articles_kh = array(
                array(
                    'title' => get_field('title1kh'),
                    'description' => get_field('description1kh'),
                ),
                array(
                    'title' => get_field('title2kh'),
                    'description' => get_field('description2kh'),
                ),
                array(
                    'title' => get_field('title3kh'),
                    'description' => get_field('description3kh'),
                ),
            );
        ?>
            <div class="newspromotion-news-article-group">
                <div class="newspromotion-news-article-group-header">
                    <div class="newspromotion-news-article-group-header-date">
                        <p><?= $news_date ?></p>
                    </div>
                    <p>|</p>
                    <figure class="newspromotion-news-article-group-header-social">
                        <a href="/"><img src=<?= wp_get_attachment_image_src(1358)[0] ?> alt=""></a>
                        <a href="/"><img src=<?= wp_get_attachment_image_src(1356)[0] ?> alt=""></a>
                        <a href="/"><img src=<?= wp_get_attachment_image_src(1359)[0] ?> alt=""></a>
                        <a href="/"><img src=<?= wp_get_attachment_image_src(1357)[0] ?> alt=""></a>
                    </figure>
                </div>
                <div class="newspromotion-news-article-group-box">
                    <div class="newspromotion-news-article-group-box-left">
                        <div class="newspromotion-news-article-group-box-left-header">
                            <figure class="newspromotion-news-article-group-box-left-header-left">
                                <img src=<?= wp_get_attachment_image_src(1355)[0] ?> alt="">
                            </figure>
                            <div class="newspromotion-news-article-group-box-left-header-right">
                                <div class="newspromotion-news-article-group-box-left-header-right-title">
                                    <?php
                                    if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                        echo '<p>' . $news_title_kh . '</p>';
                                    } else {
                                        echo '<p>' . get_the_title() . '</p>';
                                    }
                                    ?>
                                </div>
                                <div class="newspromotion-news-article-group-box-left-header-right-description">
                                    <?php
                                    if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                        echo '<p>' . $news_description_kh . '</p>';
                                    } else {
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                    }
                                    ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            foreach ($articles_kh as $article) {
                                echo '<div class="newspromotion-news-article-group-box-left-content">';
                                echo '<div class="newspromotion-news-article-group-box-left-content-title">';
                                echo '<p>' . $article['title'] . '</p>';
                                echo '</div>';
                                echo '<div class="newspromotion-news-article-group-box-left-content-description">';
                                echo '<p>' . $article['description'] . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            foreach ($articles as $article) {
                                echo '<div class="newspromotion-news-article-group-box-left-content">';
                                echo '<div class="newspromotion-news-article-group-box-left-content-title">';
                                echo '<p>' . $article['title'] . '</p>';
                                echo '</div>';
                                echo '<div class="newspromotion-news-article-group-box-left-content-description">';
                                echo '<p>' . $article['description'] . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                        ?>


                    </div>
                    <div class="newspromotion-news-article-group-box-right">
                        <div class="newspromotion-news-article-group-box-right-title">
                            <?php 
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                echo '<p>Related Article KH</p>';
                            } else {
                                echo '<p>Related Article</p>';
                            }
                            ?>
                        </div>
                        <?php
                        if (isset($_GET['category_id'])) {
                            $category_id = $_GET['category_id'];
                        }
                        if (isset($_GET['news_id'])) {
                            $news_id = $_GET['news_id'];
                        }
                        $args = array(
                            'post_type' => 'product',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'term_id',
                                    'terms' => $category_id,
                                    'include_children' => true,
                                ),
                            ),
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'order' => 'DESC',
                        );

                        if ($news_id) {
                            $args['post__not_in'] = array($news_id);
                        }

                        $query = new WP_Query($args);

                        while ($query->have_posts()) {
                            $query->the_post();

                            $news_id = get_the_ID();
                            $image = get_the_post_thumbnail_url();
                            $title = get_the_title();
                            $title_kh = get_field('newspromotiontitlekh');
                            $description = get_the_excerpt();
                            $description_kh = get_field('newspromotiondescriptionkh');
                            $date = get_field('date');
                        ?>

                            <figure class="newspromotion-news-article-group-box-right-content">
                                <img src=<?= $image ?> alt="">
                                <div class="newspromotion-news-article-group-box-right-content-top">
                                    <div class="newspromotion-news-article-group-box-right-content-top-date">
                                        <p><?= $date ?></p>
                                    </div>
                                    <figure class="newspromotion-news-article-group-box-right-content-top-share">
                                        <a href=""><img src=<?= wp_get_attachment_image_src(310)[0] ?> alt=""></a>
                                    </figure>
                                </div>
                                <div class="newspromotion-news-article-group-box-right-content-view">
                                    <?php
                                    if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                        echo '<a href="'. esc_url('/newspromotion-kh/news-kh/' . '?category_id=' . $category_id . '&news_id=' . $news_id).'">View</a>';
                                    } else {
                                        echo '<a href="' . esc_url('/newspromotion/news/' . '?category_id=' . $category_id . '&news_id=' . $news_id) . '">View</a>';
                                    }
                                    ?>
                                </div>
                                <div class="newspromotion-news-article-group-box-right-content-bot">
                                    <div class="newspromotion-news-article-group-box-right-content-bot-title">
                                        <?php
                                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                            echo '<p>'. $title_kh.'</p>';
                                        } else {
                                            echo '<p>' . $title . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="newspromotion-news-article-group-box-right-content-bot-description">
                                        <?php
                                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                            echo '<p>'. $description_kh.'</p>';
                                        } else {
                                            echo '<p>' . $description . '</p>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </figure>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>