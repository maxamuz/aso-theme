<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aso-theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="row">
		<div class="col-md-3">
			<div class="logo-footer">
				<img src="https://asobezh-msk.ru/wp-content/themes/aco-child/src/img/xaco-logo.jpg.pagespeed.ic.YHd8f3yqUZ.webp"
					alt="АСО">
			</div>
		</div>
		<div class="col-md-3">2</div>
		<div class="col-md-3">3</div>
		<div class="col-md-3">
			<div class="footer_contact">
				<div class="footer_contact_link">
					<div class="header_contact_link_icon fa-stack fa-md">
						<i class="fas fa-envelope fa-stack-1x"></i>
					</div>
					<a class="mail_a" onclick="yaCounter49417606.reachGoal('email_clicked');"
						href="mailto:manager15@asobezh-msk.ru">manager15@asobezh-msk.ru</a>
				</div>
				<div class="footer_contact_link">
					<div class="header_contact_link_icon fa-stack fa-md">
						<i class="fas fa-phone-volume fa-stack-1x"></i>
					</div>
					<a onclick="yaCounter49417606.reachGoal('phone_clicked');" href="tel:+74951896877">+7 (495)
						189-68-77</a>
				</div>
			</div>
		</div>
	</div>
	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'aso-theme')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'aso-theme'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'aso-theme'), 'aso-theme', '<a href="http://underscores.me/">Alex</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>