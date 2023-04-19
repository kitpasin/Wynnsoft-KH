<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aisutheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'aisutheme'); ?></a>
		<header>
			<?php
			$p_value = '1454'; // Default value

			$query_header = new WP_QUERY(array(
				'p' => $p_value,
				'post_type' => 'page',
				'post_status' => 'publish'
			));
			while ($query_header->have_posts()) {
				$query_header->the_post();
			?>
				<div class="header" id="header">
					<div class="header-top">
						<div class="header-top-group">
							<div class="header-top-group-contact">
								<div class="header-top-group-contact-box">
									<figure>
										<img src=<?= wp_get_attachment_image_src(15)[0]; ?> alt="">
									</figure>
									<p>Tel: <?= get_field('headerphonenumber') ?></p>
								</div>
								<div class="header-top-group-contact-box">
									<figure>
										<img src=<?= wp_get_attachment_image_src(13)[0]; ?> alt="">
									</figure>
									<p>Fax: <?= get_field('headerfaxnumber') ?></p>
								</div>
							</div>
							<div class="header-top-group-logo">
								<figure>
									<img src=<?= get_field('headerpclogo') ?> alt="">
								</figure>
							</div>
							<div class="header-top-group-social">
								<label class="header-top-group-social-switch">
									<input type="checkbox" id="language">
									<span class="header-top-group-social-switch-slider">
										<p><?= get_field('firstlanguage') ?></p>
										<p><?= get_field('secondlanguage') ?></p>
									</span>
								</label>
								<figure>
									<a href=<?= get_field('headerfacebooklink') ?>><img src=<?= wp_get_attachment_image_src(12)[0]; ?> alt=""></a>
								</figure>
								<figure>
									<a href=<?= get_field('headerinstagramlink') ?>><img src=<?= wp_get_attachment_image_src(14)[0]; ?> alt=""></a>
								</figure>
								<figure>
									<a href=<?= get_field('headertwitterlink') ?>><img src=<?= wp_get_attachment_image_src(16)[0]; ?> alt=""></a>
								</figure>
							</div>
						</div>
					</div>
					<nav class="header-bot">
						<figure class="header-bot-logo">
							<img src=<?= get_field('headermobilelogo') ?> alt="">
						</figure>
						<div class="header-bot-burger">
							<div class="header-bot-burger-line-1"></div>
							<div class="header-bot-burger-line-2"></div>
							<div class="header-bot-burger-line-3"></div>
						</div>
						<?php
						if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
							$menu_items = wp_get_nav_menu_items('Header Menu KH');
							$menu_array = array();
							foreach ($menu_items as $item) {
								$menu_array[] = array(
									'title' => $item->title,
									'url' => $item->url,

								);
							}
						} else {
							$menu_items = wp_get_nav_menu_items('Header Menu');
							$menu_array = array();
							foreach ($menu_items as $item) {
								$menu_array[] = array(
									'title' => $item->title,
									'url' => $item->url,

								);
							}
						}
						?>
						<ul class="header-bot-sidenav">
							<li class="header-bot-sidenav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/home-kh/">' . $menu_array[0]['title']  . ' </a>';
								} else {
									echo '<a href="/">' . $menu_array[0]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-sidenav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/serve-kh/">' . $menu_array[1]['title']  . ' </a>';
								} else {
									echo '<a href="/serve/">' . $menu_array[1]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-sidenav-dropdown">
								<button><?= $menu_array[2]['title'] ?>
									<figure>
										<img src=<?= wp_get_attachment_image_src(11)[0]; ?> alt="">
									</figure>
								</button>
								<ul class="header-bot-sidenav-dropdown-menu">
									<?php
									if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/service-website-kh/">' . $menu_array[3]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/service-vendingcafe-kh/">' . $menu_array[4]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/service-franchise-kh/">' . $menu_array[5]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/service-payment-kh/">' . $menu_array[6]['title'] . '</a></li>';
									} else {
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/service-website/">' . $menu_array[3]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/service-vendingcafe/">' . $menu_array[4]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/service-franchise/">' . $menu_array[5]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/service-payment/">' . $menu_array[6]['title'] . '</a></li>';
									}
									?>
								</ul>
							</li>
							<li class="header-bot-sidenav-dropdown">
								<button><?= $menu_array[7]['title'] ?>
									<figure>
										<img src=<?= wp_get_attachment_image_src(11)[0]; ?> alt="">
									</figure>
								</button>
								<ul class="header-bot-sidenav-dropdown-menu">
									<?php
									if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/brand-website-kh/">' . $menu_array[8]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/brand-seo-kh/">' . $menu_array[9]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/brand-studio-kh/">' . $menu_array[10]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/brand-vendingcafe-kh/">' . $menu_array[11]['title'] . '</a></li>';
									} else {
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/brand-website/">' . $menu_array[8]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/brand-seo/">' . $menu_array[9]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/brand-studio/">' . $menu_array[10]['title'] . '</a></li>';
										echo '<li class="header-bot-sidenav-dropdown-menu-link"><a href="/brand-vendingcafe/">' . $menu_array[11]['title'] . '</a></li>';
									}
									?>
								</ul>
							</li>
							<li class="header-bot-sidenav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/newspromotion-kh/">' . $menu_array[12]['title']  . ' </a>';
								} else {
									echo '<a href="/newspromotion/">' . $menu_array[12]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-sidenav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/franchise-kh/">' . $menu_array[13]['title']  . ' </a>';
								} else {
									echo '<a href="/franchise/">' . $menu_array[13]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-sidenav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/works-kh/">' . $menu_array[14]['title']  . ' </a>';
								} else {
									echo '<a href="/works/">' . $menu_array[14]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-sidenav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/contact-kh/">' . $menu_array[15]['title']  . ' </a>';
								} else {
									echo '<a href="/contact/">' . $menu_array[15]['title']  . ' </a>';
								}
								?>
							</li>
						</ul>
						<ul class="header-bot-nav">
							<li class="header-bot-nav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/home-kh/">' . $menu_array[0]['title']  . ' </a>';
								} else {
									echo '<a href="/">' . $menu_array[0]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-nav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/serve-kh/">' . $menu_array[1]['title']  . ' </a>';
								} else {
									echo '<a href="/serve/">' . $menu_array[1]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-nav-dropdown">
								<button><?= $menu_array[2]['title'] ?>
									<figure>
										<img src=<?= wp_get_attachment_image_src(11)[0]; ?> alt="">
									</figure>
								</button>
								<ul class="header-bot-nav-dropdown-menu">
									<?php
									if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/service-website-kh/">' . $menu_array[3]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/service-vendingcafe-kh/">' . $menu_array[4]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/service-franchise-kh/">' . $menu_array[5]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/service-payment-kh/">' . $menu_array[6]['title'] . '</a></li>';
									} else {
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/service-website/">' . $menu_array[3]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/service-vendingcafe/">' . $menu_array[4]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/service-franchise/">' . $menu_array[5]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/service-payment/">' . $menu_array[6]['title'] . '</a></li>';
									}
									?>
								</ul>
							</li>
							<li class="header-bot-nav-dropdown">
								<button><?= $menu_array[7]['title'] ?>
									<figure>
										<img src=<?= wp_get_attachment_image_src(11)[0]; ?> alt="">
									</figure>
								</button>
								<ul class="header-bot-nav-dropdown-menu">
									<?php
									if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/brand-website-kh/">' . $menu_array[8]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/brand-seo-kh/">' . $menu_array[9]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/brand-studio-kh/">' . $menu_array[10]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/brand-vendingcafe-kh/">' . $menu_array[11]['title'] . '</a></li>';
									} else {
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/brand-website/">' . $menu_array[8]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/brand-seo/">' . $menu_array[9]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/brand-studio/">' . $menu_array[10]['title'] . '</a></li>';
										echo '<li class="header-bot-nav-dropdown-menu-link"><a href="/brand-vendingcafe/">' . $menu_array[11]['title'] . '</a></li>';
									}
									?>
								</ul>
							</li>
							<li class="header-bot-nav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/newspromotion-kh/">' . $menu_array[12]['title']  . ' </a>';
								} else {
									echo '<a href="/newspromotion/">' . $menu_array[12]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-nav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/franchise-kh/">' . $menu_array[13]['title']  . ' </a>';
								} else {
									echo '<a href="/franchise/">' . $menu_array[13]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-nav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/works-kh/">' . $menu_array[14]['title']  . ' </a>';
								} else {
									echo '<a href="/works/">' . $menu_array[14]['title']  . ' </a>';
								}
								?>
							</li>
							<li class="header-bot-nav-link">
								<?php
								if (strpos($_SERVER['REQUEST_URI'], '-kh') !== false) {
									echo '<a href="/contact-kh/">' . $menu_array[15]['title']  . ' </a>';
								} else {
									echo '<a href="/contact/">' . $menu_array[15]['title']  . ' </a>';
								}
								?>
							</li>
						</ul>
					</nav>
				</div>
			<?php }
			wp_reset_postdata();
			?>
		</header>