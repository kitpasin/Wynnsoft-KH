<section id="works-workAbout">
    <div class="works-work-about">
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
            $concept_title = get_field('concepttitle');
            $concept_description = get_field('conceptdescription');
            $design_title = get_field('designtitle');
            $design_description = get_field('designdescription');
            $color_title = get_field('colortitle');
            $colors = array(
                array(
                    'color' => get_field('colorcode1')
                ),
                array(
                    'color' => get_field('colorcode2')
                ),
                array(
                    'color' => get_field('colorcode3')
                )
            );
            $publish_title = get_field('publishtitle');
            $publish_date = get_field('publishdate');
            $keyword_title = get_field('keywordtitle');
            $keyword_description = get_field('keyworddescription');
            $no_title = get_field('notitle');
            $no_description = get_field('nodescription');
            $detail_title = get_field('detailtitle');
            $details = array(
                array(
                    'description' => get_field('detaildescription1')
                ),
                array(
                    'description' => get_field('detaildescription2')
                )
            );
            // Get the works KH data
            $work_title_kh = get_field('worktitlekh');
            $work_description_kh = get_field('workdescriptionkh');
            $concept_title_kh = get_field('concepttitlekh');
            $concept_description_kh = get_field('conceptdescriptionkh');
            $design_title_kh = get_field('designtitlekh');
            $design_description_kh = get_field('designdescriptionkh');
            $color_title_kh = get_field('colortitlekh');
            $colors_kh = array(
                array(
                    'color' => get_field('colorcode1kh')
                ),
                array(
                    'color' => get_field('colorcode2kh')
                ),
                array(
                    'color' => get_field('colorcode3kh')
                )
            );
            $publish_title_kh = get_field('publishtitlekh');
            $publish_date_kh = get_field('publishdatekh');
            $keyword_title_kh = get_field('keywordtitlekh');
            $keyword_description_kh = get_field('keyworddescriptionkh');
            $no_title_kh = get_field('notitlekh');
            $no_description_kh = get_field('nodescriptionkh');
            $detail_title_kh = get_field('detailtitlekh');
            $details_kh = array(
                array(
                    'description' => get_field('detaildescription1kh')
                ),
                array(
                    'description' => get_field('detaildescription2kh')
                )
            );
        ?>
            <div class="works-work-about-group">
                <div class="works-work-about-group-top">
                    <div class="works-work-about-group-top-box">
                        <div class="works-work-about-group-top-box-title">
                            <?php
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                echo '<p>' . $concept_title_kh . '</p>';
                            } else {
                                echo '<p>' . $concept_title . '</p>';
                            }
                            ?>
                        </div>
                        <div class="works-work-about-group-top-box-description">
                            <?php
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                echo '<p>' . $concept_description_kh . '</p>';
                            } else {
                                echo '<p>' . $concept_description . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="works-work-about-group-top-box">
                        <div class="works-work-about-group-top-box-title">
                            <?php
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                echo '<p>' . $design_title_kh . '</p>';
                            } else {
                                echo '<p>' . $design_title . '</p>';
                            }
                            ?>
                        </div>
                        <div class="works-work-about-group-top-box-description">
                            <?php
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                echo '<p>' . $design_description_kh . '</p>';
                            } else {
                                echo '<p>' . $design_description . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="works-work-about-group-top-box">
                        <div class="works-work-about-group-top-box-title">
                            <?php
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                echo '<p>' . $color_title_kh . '</p>';
                            } else {
                                echo '<p>' . $color_title . '</p>';
                            }
                            ?>
                        </div>
                        <div class="works-work-about-group-top-box-description">
                            <?php
                            if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                foreach ($colors_kh as $color) {
                                    echo '<div class="works-work-about-group-top-box-description-box">';
                                    echo '<div class="works-work-about-group-top-box-description-box-color" style="background: ' . $color['color'] . ';">';
                                    echo '</div>';
                                    echo '<div class="works-work-about group-top-box-description-box-code">';
                                    echo '<p>' . $color['color'] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                foreach ($colors as $color) {
                                    echo '<div class="works-work-about-group-top-box-description-box">';
                                    echo '<div class="works-work-about-group-top-box-description-box-color" style="background: ' . $color['color'] . ';">';
                                    echo '</div>';
                                    echo '<div class="works-work-about group-top-box-description-box-code">';
                                    echo '<p>' . $color['color'] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="works-work-about-group-mid">
                    <div class="works-work-about-group-mid-name">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<p>' . $work_title_kh . '</p>';
                        } else {
                            echo '<p>' . get_the_title() . '</p>';
                        }
                        ?>
                    </div>
                    <div class="works-work-about-group-mid-detail">
                        <div class="works-work-about-group-mid-detail-box">
                            <div class="works-work-about-group-mid-detail-box-title">
                                <?php
                                if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                    echo '<p>' . $publish_title_kh . '</p>';
                                } else {
                                    echo '<p>' . $publish_title . '</p>';
                                }
                                ?>
                            </div>
                            <div class="works-work-about-group-mid-detail-box-description">
                                <?php
                                if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                    echo '<p>' . $publish_date_kh . '</p>';
                                } else {
                                    echo '<p>' . $publish_date . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="works-work-about-group-mid-detail-box">
                            <div class="works-work-about-group-mid-detail-box-title">
                                <?php
                                if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                    echo '<p>' . $keyword_title_kh . '</p>';
                                } else {
                                    echo '<p>' . $keyword_title . '</p>';
                                }
                                ?>
                            </div>
                            <div class="works-work-about-group-mid-detail-box-description">
                                <?php
                                if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                    echo '<p>' . $keyword_description_kh . '</p>';
                                } else {
                                    echo '<p>' . $keyword_description . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="works-work-about-group-mid-detail-box">
                            <div class="works-work-about-group-mid-detail-box-title">
                                <?php
                                if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                    echo '<p>' . $no_title_kh . '</p>';
                                } else {
                                    echo '<p>' . $no_title . '</p>';
                                }
                                ?>
                            </div>
                            <div class="works-work-about-group-mid-detail-box-description">
                                <?php
                                if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                                    echo '<p>' . $no_description_kh . '</p>';
                                } else {
                                    echo '<p>' . $no_description . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="works-work-about-group-bot">
                    <div class="works-work-about-group-bot-title">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            echo '<p>' . $detail_title_kh . '</p>';
                        } else {
                            echo '<p>' . $detail_title . '</p>';
                        }
                        ?>
                    </div>
                    <div class="works-work-about-group-bot-description">
                        <?php
                        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
                            foreach ($details_kh as $detail) {
                                echo '<p>' . $detail['description'] . '</p>';
                            }
                        } else {
                            foreach ($details as $detail) {
                                echo '<p>' . $detail['description'] . '</p>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>