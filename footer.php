<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aisutheme
 */

?>

<footer>
	<?php
	$query_footer = new WP_QUERY(array(
		'p' => '1454',
		'post_type' => 'page',
		'post_status' => 'publish'
	));
	while ($query_footer->have_posts()) {
		$query_footer->the_post();
	?>
		<div class="footer" id="footer">
			<div class="footer-top">
				<div class="footer-top-group">
					<figure class="footer-top-group-logo">
						<img src=<?= get_field('footerlogo') ?> alt="">
					</figure>
					<div class="footer-top-group-address">
						<div class="footer-top-group-address-title">
							<?php
							if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
								echo '<p>' . get_field('footeraddresstitlekh') . '</p>';
							} else {
								echo '<p>' . get_field('footeraddresstitle') . '</p>';
							}
							?>
						</div>
						<div class="footer-top-group-address-description">

							<?php
							if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
								echo '<p>' . get_field('footeraddressdescriptionkh') . '</p>';
							} else {
								echo '<p>' . get_field('footeraddressdescription') . '</p>';
							}
							?>

						</div>
					</div>
					<?php
					if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
						$menu_items = wp_get_nav_menu_items('Footer Menu KH');
						$menu_array = array();
						foreach ($menu_items as $item) {
							$menu_array[] = array(
								'title' => $item->title,
								'url' => $item->url,

							);
						}
					} else {
						$menu_items = wp_get_nav_menu_items('Footer Menu');
						$menu_array = array();
						foreach ($menu_items as $item) {
							$menu_array[] = array(
								'title' => $item->title,
								'url' => $item->url,

							);
						}
					}
					?>
					<div class="footer-top-group-nav">
						<div class="footer-top-group-nav-left">
							<a href="/wynnsoftkh/">
								<p><?= $menu_array[0]['title'] ?></p>
							</a>
							<a href="/wynnsoftkh/service-vendingcafe/">
								<p><?= $menu_array[1]['title'] ?></p>
							</a>
							<a href="/wynnsoftkh/service-vendingcafe/">
								<p><?= $menu_array[2]['title'] ?></p>
							</a>
						</div>
						<div class="footer-top-group-nav-right">
							<a href="/wynnsoftkh/franchise/">
								<p><?= $menu_array[3]['title'] ?></p>
							</a>
							<a href="">
								<p><?= $menu_array[4]['title'] ?></p>
							</a>
							<a href="">
								<p><?= $menu_array[5]['title'] ?></p>
							</a>
						</div>
					</div>
					<div class="footer-top-group-contact">
						<div class="footer-top-group-contact-letter">
							<div class="footer-top-group-contact-letter-title">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<p>' . get_field('footersubscribetitlekh') . '</p>';
								} else {
									echo '<p>' . get_field('footersubscribetitle') . '</p>';
								}
								?>
							</div>
							<div class="footer-top-group-contact-letter-message">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<input type="text"><button>' . get_field('footersubscribebtnkh') . '</button>';
								} else {
									echo '<input type="text"><button>' . get_field('footersubscribebtn') . '</button>';
								}
								?>
							</div>
						</div>
						<figure class="footer-top-group-contact-social">
							<a href=""><img src=<?= wp_get_attachment_image_src(133)[0]; ?> alt=""></a>
							<a href=""><img src=<?= wp_get_attachment_image_src(129)[0]; ?> alt=""></a>
							<a href=""><img src=<?= wp_get_attachment_image_src(130)[0]; ?> alt=""></a>
							<a href=""><img src=<?= wp_get_attachment_image_src(132)[0]; ?> alt=""></a>
						</figure>
					</div>
				</div>
			</div>
			<div class="footer-bot">
				<p><?= get_field('footerlicence') ?></p>
			</div>
		</div>
	<?php }
	wp_reset_postdata();
	?>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>