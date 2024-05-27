<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aso-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'aso-theme'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<div class="container container-header">
					<div class="row">
						<div class="col-lg-7 header-logo">
							<div class="header_logo_block">

								<?php
								the_custom_logo();
								if (is_front_page() && is_home()):
									?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
											rel="home"><?php bloginfo('name'); ?></a></h1>
									<?php
								else:
									?>
									<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
											rel="home"><?php bloginfo('name'); ?></a></p>
									<?php
								endif;
								$aso_theme_description = get_bloginfo('description', 'display');
								if ($aso_theme_description || is_customize_preview()):
									?>
									<p class="logo_block_text_pro">
										Ведущий российский производитель компрессорного оборудования.
									</p>
								</div>

								<p class="site-description">
									<?php echo $aso_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								</p>
							<?php endif; ?>
						</div>

						<div class="col-lg-5 header_right">
							<div class="header_contact">
								<div class="header_contact_link">
									<div class="header_contact_link_icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
											fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
											<path
												d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
										</svg>
									</div>
									<a class="mail_a" onclick="yaCounter49417606.reachGoal('email_clicked');"
										href="https://asobezh-msk.ru/mailto:aso@asobezh-msk.ru">aso@asobezh-msk.ru</a>
								</div>
								<div class="header_contact_link">
									<div class="header_contact_link_icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
											fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
											<path fill-rule="evenodd"
												d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
										</svg>
									</div>
									<a onclick="yaCounter49417606.reachGoal('phone_clicked');"
										href="https://asobezh-msk.ru/tel:+74993900278">+7 (499) 390-02-78</a>
								</div>
							</div>
							<?php get_search_form() ?>
							<!-- <form method="get" action="https://asobezh-msk.ru/" class="header_search d-none d-sm-block">
								<input class="header_search_input" type="text" name="s" placeholder="Поиск по каталогу"
									value="">
								<button class="header_search_btn">
									<i class="fas fa-search"></i>
								</button>
							</form> -->
						</div>
					</div>

				</div>


			</div><!-- .site-branding -->
			<div class="main-menu">
				<div class="container">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu"
							aria-expanded="false"><?php esc_html_e('Primary Menu', 'aso-theme'); ?>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>


		</header><!-- #masthead -->