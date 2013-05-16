<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<meta name="description" content="Doober is two Winnipeg Web developers who dream of one day owning their own Web business. Maybe." />
		<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
		<title>DooBer Web - Welcome Here!</title>
		<link rel="stylesheet" type="text/css" href="http://www.doober.ca/wp-content/themes/doober/style.css" />
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
					DooBer Web				</h1>
				<p>
					We&rsquo;re not <em>quite</em> there yet
					&mdash;
					but we&rsquo;re getting there &mdash; maybe!
				</p>
				<p>
					You can contact us at
					<a href="mailto:info@doober.ca">info@doober.ca</a>
					in the meantime.
				</p>

				<?php if ( ! $user_has_requested_a_sane_color_scheme ): ?>
				<p style="margin-top: 50px;">
					<a href="http://www.doober.ca/?argh-my-eyes=1">
						Aaaargh! My eyes!
					</a>
				</p>
				<?php endif ?>
				</div><!-- #main -->
		</div><!-- #wrapper -->
			<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"d1ros97qkrwjf5.cloudfront.net/42/eum/rum.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-3.newrelic.com","55d5508e2f","2347239","M1UEZktQCxBRVxBdCQofJ1FNWAoNH10KUAMc",0,189,new Date().getTime(),"","","","",""]);</script>
</body>
</html>
