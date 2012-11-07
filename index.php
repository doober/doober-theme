<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
$lp_feedburner_url = "http://feeds2.feedburner.com/" . $lp_feedburner_address;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title><?php bloginfo('name') ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/ie.css" />
<![endif]-->
<link rel="alternate" type="application/rss+xml" href="<?php if($lp_feedburner_address) { echo $lp_feedburner_url; } else { bloginfo('rss2_url'); }?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="main">
		<h1><span>You&rsquo;ve found</span> <?php bloginfo('name') ?></h1>
		<p>We&rsquo;re not <em>quite</em> there yet&mdash;<em>but we&rsquo;re getting there!</em>&mdash; You can contact us at <a href="<?php bloginfo( 'admin_email' ) ?>"><?php bloginfo( 'admin_email' ) ?></a> in the meantime.</p>
	</div><!-- #main -->
</div><!-- #wrapper -->
<?php wp_footer() ?>

</body>
</html>
