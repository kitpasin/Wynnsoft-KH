<section id="service-franchise-type">
    <div class="service-franchise-type">
        <?php
        $p_value = '798'; // Default value
        if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
            $p_value = '1644'; // Update value if URL contains "-kh"
        }
        $query_service_franchise_type = new WP_Query(array(
            'p' => $p_value,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
        while ($query_service_franchise_type->have_posts()) {
            $query_service_franchise_type->the_post();

            // Get the field values
            $header_title = get_field('typeheadertitle');
            $header_description = get_field('typeheaderdescription');
            $types1 = array(
                array(
                    'image' => get_field('typeimage1'),
                    'bgimage' => get_field('typebgimage1'),
                    'title' => get_field('typetitle1'),
                    'description' => get_field('typedescription1'),
                )
            );
            $types2 = array(
                array(
                    'image' => get_field('typeimage2'),
                    'bgimage' => get_field('typebgimage2'),
                    'title' => get_field('typetitle2'),
                    'description' => get_field('typedescription2'),
                )
            );
            $types3 = array(
                array(
                    'image' => get_field('typeimage3'),
                    'bgimage' => get_field('typebgimage3'),
                    'title' => get_field('typetitle3'),
                    'description' => get_field('typedescription3'),
                )
            );
            $types4 = array(
                array(
                    'image' => get_field('typeimage4'),
                    'bgimage' => get_field('typebgimage4'),
                    'title' => get_field('typetitle4'),
                    'description' => get_field('typedescription4'),
                )
            );
        ?>
            <figure class="service-franchise-type-floatingimg-1">
                <img src=<?= wp_get_attachment_image_src(244)[0] ?> alt="">
            </figure>
            <figure class="service-franchise-type-floatingimg-2">
                <img src=<?= wp_get_attachment_image_src(220)[0] ?> alt="">
            </figure>
            <div class="service-franchise-type-header">
                <div class="service-franchise-type-header-title">
                    <p><?= $header_title ?></p>
                </div>
                <div class="service-franchise-type-header-description">
                    <p><?= $header_description ?>
                    </p>
                </div>
            </div>
            <div class="service-franchise-type-group">
                <?php foreach ($types1 as $type1) { ?>
                    <div class="service-franchise-type-group-box">
                        <div class="service-franchise-type-group-box-left">
                            <figure>
                                <img src=<?= $type1['image'] ?> alt="">
                            </figure>
                        </div>
                        <div class="service-franchise-type-group-box-right">
                            <figure>
                                <img src=<?= $type1['bgimage'] ?> alt="">
                                <div class="service-franchise-type-group-box-right-content">
                                    <div class="service-franchise-type-group-box-right-content-top">
                                        <div class="service-franchise-type-group-box-right-content-top-title">
                                            <p><?= $type1['title'] ?></p>
                                        </div>
                                        <div class="service-franchise-type-group-box-right-content-top-description">
                                            <p><?= $type1['description'] ?></p>
                                        </div>
                                    </div>
                                    <div class="service-franchise-type-group-box-right-content-bot">
                                        <div class="service-franchise-type-group-box-right-content-bot-detail">
                                            <?php
                                            if ($p_value == '1644') {
                                                echo '<button><a href="/service-franchise-kh/small-franchise-kh/">Detail</a></button>';
                                            } else {
                                                echo '<button><a href="/service-franchise/small-franchise/">Detail</a></button>';
                                            }
                                            ?>
                                        </div>
                                        <figure>
                                            <a href=""><img src=<?= wp_get_attachment_image_src(853)[0] ?> alt=""></a>
                                        </figure>
                                        <figure>
                                            <a href=""><img src=<?= wp_get_attachment_image_src(854)[0] ?> alt=""></a>
                                        </figure>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($types2 as $type2) { ?>
                    <div class="service-franchise-type-group-reversebox">
                        <div class="service-franchise-type-group-reversebox-left">
                            <figure>
                                <img src=<?= $type2['bgimage'] ?> alt="">
                                <div class="service-franchise-type-group-reversebox-left-content">
                                    <div class="service-franchise-type-group-reversebox-left-content-top">
                                        <div class="service-franchise-type-group-reversebox-left-content-top-title">
                                            <p><?= $type2['title'] ?></p>
                                        </div>
                                        <div class="service-franchise-type-group-reversebox-left-content-top-description">
                                            <p><?= $type2['description'] ?></p>
                                        </div>
                                    </div>
                                    <div class="service-franchise-type-group-reversebox-left-content-bot">
                                        <div class="service-franchise-type-group-reversebox-left-content-bot-detail">
                                            <?php
                                            if ($p_value == '1644') {
                                                echo '<button><a href="/service-franchise-kh/medium-franchise-kh/">Detail</a></button>';
                                            } else {
                                                echo '<button><a href="/service-franchise/medium-franchise/">Detail</a></button>';
                                            }
                                            ?>
                                        </div>
                                        <figure>
                                            <a href=""><img src=<?= wp_get_attachment_image_src(853)[0] ?> alt=""></a>
                                        </figure>
                                        <figure>
                                            <a href=""><img src=<?= wp_get_attachment_image_src(854)[0] ?> alt=""></a>
                                        </figure>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="service-franchise-type-group-reversebox-right">
                            <figure>
                                <img src=<?= $type2['image'] ?> alt="">
                            </figure>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($types3 as $type3) { ?>
                    <div class="service-franchise-type-group-box">
                        <div class="service-franchise-type-group-box-left">
                            <figure>
                                <img src=<?= $type3['image'] ?> alt="">
                            </figure>
                        </div>
                        <div class="service-franchise-type-group-box-right">
                            <figure>
                                <img src=<?= $type3['bgimage'] ?> alt="">
                                <div class="service-franchise-type-group-box-right-content">
                                    <div class="service-franchise-type-group-box-right-content-top">
                                        <div class="service-franchise-type-group-box-right-content-top-title">
                                            <p><?= $type3['title'] ?></p>
                                        </div>
                                        <div class="service-franchise-type-group-box-right-content-top-description">
                                            <p><?= $type3['description'] ?></p>
                                        </div>
                                    </div>
                                    <div class="service-franchise-type-group-box-right-content-bot">
                                        <div class="service-franchise-type-group-box-right-content-bot-detail">
                                            <?php
                                            if ($p_value == '1644') {
                                                echo '<button><a href="/service-franchise-kh/large-franchise-kh/">Detail</a></button>';
                                            } else {
                                                echo '<button><a href="/service-franchise/large-franchise/">Detail</a></button>';
                                            }
                                            ?>
                                        </div>
                                        <figure>
                                            <a href=""><img src=<?= wp_get_attachment_image_src(853)[0] ?> alt=""></a>
                                        </figure>
                                        <figure>
                                            <a href=""><img src=<?= wp_get_attachment_image_src(854)[0] ?> alt=""></a>
                                        </figure>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($types4 as $type4) { ?>
                    <div class="service-franchise-type-group-reversebox">
                        <div class="service-franchise-type-group-reversebox-left">
                            <figure>
                                <img src=<?= $type4['bgimage'] ?> alt="">
                                <div class="service-franchise-type-group-reversebox-left-content">
                                    <div class="service-franchise-type-group-reversebox-left-content-top">
                                        <div class="service-franchise-type-group-reversebox-left-content-top-title">
                                            <p><?= $type4['title'] ?></p>
                                        </div>
                                        <div class="service-franchise-type-group-reversebox-left-content-top-description">
                                            <p><?= $type4['description'] ?></p>
                                        </div>
                                    </div>
                                    <div class="service-franchise-type-group-reversebox-left-content-bot">
                                        <div class="service-franchise-type-group-reversebox-left-content-bot-detail">
                                            <?php
                                            if ($p_value == '1644') {
                                                echo '<button><a href="/service-franchise-kh/location-franchise-kh/">Detail</a></button>';
                                            } else {
                                                echo '<button><a href="/service-franchise/location-franchise/">Detail</a></button>';
                                            }
                                            ?>
                                        </div>
                                        <figure>
                                            <a href=""><img src=<?= wp_get_attachment_image_src(853)[0] ?> alt=""></a>
                                        </figure>
                                        <figure>
                                            <a href=""><img src=<?= wp_get_attachment_image_src(854)[0] ?> alt=""></a>
                                        </figure>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="service-franchise-type-group-reversebox-right">
                            <figure>
                                <img src=<?= $type4['image'] ?> alt="">
                            </figure>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>