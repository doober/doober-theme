<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<meta name="description" content="Doober is two Winnipeg Web developers who dream of one day owning their own Web business. Maybe." />
		<title><?php bloginfo('name') ?> - Welcome Here!</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" href="<?php echo bloginfo('rss2_url') ?>" title="<?php echo esc_html(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
		<?php wp_head() ?>
	</head>
	<body>
		<?php
		$user_has_requested_a_sane_color_scheme = isset( $_GET[ 'argh-my-eyes' ] );
		if ( $user_has_requested_a_sane_color_scheme ): ?>
		<style>
		body {
			background: #000;
			color: #fff;
		}

		a {
			color: #FE8F45;
		}
		</style>
		<?php endif ?>
		<div id="wrapper">
			<div id="main">
				<h1>
					<span>You&rsquo;ve found</span>
					<?php bloginfo('name') ?>
				</h1>
				<p>
					We&rsquo;re not <em>quite</em> there yet
					&mdash;
					but we&rsquo;re getting there &mdash; maybe!
				</p>
				<p>
					You can contact us at
					<a href="mailto:<?php bloginfo( 'admin_email' ) ?>"><?php bloginfo( 'admin_email' ) ?></a>
					in the meantime.
				</p>

				<?php if ( ! $user_has_requested_a_sane_color_scheme ): ?>
				<p style="margin-top: 50px;">
					<a href="<?php echo home_url( '?argh-my-eyes=1' ) ?>">
						Aaaargh! My eyes!
					</a>
				</p>
				<?php endif ?>
			</div><!-- #main -->
		</div><!-- #wrapper -->
		<?php wp_footer() ?>
	</body>
</html>
