<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<meta name="application-name" content="<?php bloginfo('name'); ?>" />
	<title><?php bloginfo("name"); ?> <?php wp_title("&bull;"); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
	<script type="text/javascript" src="//use.typekit.net/cvs4mot.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<div class="header">
	<div class="row">
		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg class="logo-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
				<polyline class="stroke" fill="none" stroke="#666766" stroke-width="5" stroke-miterlimit="10" points="31.768,45.604 38.417,55.73 46.019,45.604 
					49.784,55.73 56.154,45.604 61.222,55.73 66.712,45.604 "/>
				<polygon class="stroke" fill="none" stroke="#666766" stroke-width="8" stroke-miterlimit="10" points="8.605,86.877 90.962,86.877 49.784,13.5 
					34.868,40.079 "/>
				<path stroke="#FFFFFF" stroke-miterlimit="10" d="M51.784,43.752"/>
				</svg>
				<span class="logo-title">Chris Allen</span>
			</a>
		</div>
		<nav>
			<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?> 
		</nav>
	</div>
</div>

<body <?php body_class(); ?>>