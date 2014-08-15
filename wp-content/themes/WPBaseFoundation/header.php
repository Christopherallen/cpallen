<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="application-name" content="<?php bloginfo('name'); ?>" />
	<title><?php if(!is_page('Home')){ ?><?php wp_title(''); ?> |  <?php bloginfo("name"); ?><?php } ?><?php if(is_page('Home')){ ?><?php bloginfo("name"); ?> | Web Developer + Designer <?php } ?></title>
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
				<!--!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg class="logo-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
				<polyline class="stroke" fill="none" stroke="#666766" stroke-width="5" stroke-miterlimit="10" points="31.768,45.604 38.417,55.73 46.019,45.604 
					49.784,55.73 56.154,45.604 61.222,55.73 66.712,45.604 "/>
				<polygon class="stroke" fill="none" stroke="#666766" stroke-width="8" stroke-miterlimit="10" points="8.605,86.877 90.962,86.877 49.784,13.5 
					34.868,40.079 "/>
				<path stroke="#FFFFFF" stroke-miterlimit="10" d="M51.784,43.752"/>
				</svg-->
				<span class="logo-title">Chris Allen</span>
			</a>
		</div>
		<a class="nav-mobile-toggle" href="javascript:void(0)" >
			<svg class="nav-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 		width="40px" height="45px" viewBox="0 0 32 22.5" enable-background="new 0 0 32 22.5" xml:space="preserve">
					<title>Mobile Menu</title>
					<g class="svg-menu-toggle">

					<path class="bar" d="M20.945,8.75c0,0.69-0.5,1.25-1.117,1.25H3.141c-0.617,0-1.118-0.56-1.118-1.25l0,0
						c0-0.69,0.5-1.25,1.118-1.25h16.688C20.445,7.5,20.945,8.06,20.945,8.75L20.945,8.75z">
					</path>
					<path class="bar" d="M20.923,15c0,0.689-0.501,1.25-1.118,1.25H3.118C2.5,16.25,2,15.689,2,15l0,0c0-0.689,0.5-1.25,1.118-1.25 h16.687C20.422,13.75,20.923,14.311,20.923,15L20.923,15z">
					</path>
					<path class="bar" d="M20.969,21.25c0,0.689-0.5,1.25-1.117,1.25H3.164c-0.617,0-1.118-0.561-1.118-1.25l0,0
						c0-0.689,0.5-1.25,1.118-1.25h16.688C20.469,20,20.969,20.561,20.969,21.25L20.969,21.25z">
					</path>
					<!-- needs to be here as a 'hit area' -->
          			<rect width="320" height="220" fill="none">

					</rect>
					</g>

			</svg>
		</a>
		<nav class="nav">
			<div>
				<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?> 
			</div>
		</nav>	
	</div>
</div>

<body <?php body_class(); ?>>
	<?php $hex = get_post_meta( get_the_ID(), 'cpa_post_class', true ); ?>
	<?php if(is_page('Home') || is_single() ){ ?>
	<div class="banner <?php if(is_page('Home')){ ?>large<?php } ?><?php if(!is_page('Home') && !is_single() ){ ?>small<?php } if(is_single() ){ ?>Medium<?php } ?>" <?php if(is_single() ) { ?>style="background-color: #<?php echo $hex; ?>; background-image:none;"<?php } ?>>
		<div class="banner-wrapper">
			<div class="banner-body">
				<?php
				if(is_single() ) {
			        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			            the_post_thumbnail('featured');
			        }  
			    }         
        		?>
				<?php if(is_page('Home')){ ?>
					<h2 class="banner-body-text"><span class="banner-body-text-small">I craft</span> digital experiences <span class="banner-body-text-small">in the pacific northwest</span></h2>
					<div class="banner-body-button">
						<a href="work" class="button secondary large">View Work</a>
					</div>
				<?php } ?>
				<?php if(!is_page('Home') && !is_single() ){ ?>
					<h2 class="banner-body-text"><?php the_title(); ?></h2>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
		<?php if(is_page('Home')){ ?>
			<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
			<svg class="banner-mountains" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 400 100" enable-background="new 0 0 400 100" xml:space="preserve">
			<polygon fill="#7BC0E1" points="169.222,131.076 122.797,71.173 76.372,131.076 "/>
			<polygon fill="#CEE9F5" points="96.528,105.069 149.067,105.069 122.797,71.173 "/>
			<path fill="#CEE9F5" d="M101.971,102.837c-0.65,0.685-1.295,1.375-1.961,2.044l8.5,10.967l10.084-13.011H101.971z"/>
			<polygon fill="#CEE9F5" points="111.931,102.837 132.098,102.837 122.015,115.848 "/>
			<path fill="#CEE9F5" d="M141.448,102.186c-0.054-0.054-0.091-0.117-0.141-0.174h-15.797l10.084,13.011l8.161-10.531L141.448,102.186
				z"/>
			<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="40" y1="101.1244" x2="122.7973" y2="101.1244">
				<stop  offset="0" style="stop-color:#FFFFFF"/>
				<stop  offset="0.1402" style="stop-color:#F4FAFE"/>
				<stop  offset="0.3518" style="stop-color:#DEF0FB"/>
				<stop  offset="0.6086" style="stop-color:#BBE1F7"/>
				<stop  offset="0.8984" style="stop-color:#87CFF3"/>
				<stop  offset="1" style="stop-color:#71C8F1"/>
			</linearGradient>
			<polygon opacity="0.42" fill="url(#SVGID_1_)" points="122.797,131.076 122.797,71.173 76.372,131.076 "/>
			<polygon fill="#7BC0E1" points="318.628,131.076 318.571,131.003 272.203,71.173 225.778,131.076 "/>
			<polygon fill="#CEE9F5" points="246.112,104.994 298.651,104.994 272.382,71.098 "/>
			<path fill="#CEE9F5" d="M251.555,102.762c-0.65,0.685-1.295,1.375-1.961,2.044l8.5,10.967l10.084-13.011H251.555z"/>
			<polygon fill="#CEE9F5" points="261.516,102.762 281.683,102.762 271.599,115.774 "/>
			<path fill="#CEE9F5" d="M291.032,102.111c-0.054-0.054-0.091-0.117-0.141-0.174h-15.797l10.084,13.011l8.161-10.531L291.032,102.111
				z"/>
			<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="189.5847" y1="101.1244" x2="272.382" y2="101.1244">
				<stop  offset="0" style="stop-color:#FFFFFF"/>
				<stop  offset="0.1402" style="stop-color:#F4FAFE"/>
				<stop  offset="0.3518" style="stop-color:#DEF0FB"/>
				<stop  offset="0.6086" style="stop-color:#BBE1F7"/>
				<stop  offset="0.8984" style="stop-color:#87CFF3"/>
				<stop  offset="1" style="stop-color:#71C8F1"/>
			</linearGradient>
			<polygon opacity="0.42" fill="url(#SVGID_2_)" points="272.382,131.076 272.382,71.173 225.957,131.076 "/>
			<polygon fill="#7BC0E2" points="274.882,131.076 198.098,32 121.315,131.076 "/>
			<polygon fill="#CEE9F5" points="155.574,86.871 240.623,86.871 198.098,32 "/>
			<path fill="#CEE9F5" d="M164.136,83.257c-1.052,1.11-2.096,2.227-3.175,3.309l13.759,17.754l16.324-21.063H164.136z"/>
			<polygon fill="#CEE9F5" points="180.259,83.257 212.906,83.257 196.583,104.32 "/>
			<path fill="#CEE9F5" d="M228.04,82.203c-0.087-0.087-0.148-0.19-0.228-0.281H202.24l16.324,21.063l13.212-17.047L228.04,82.203z"/>
			<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="84.9421" y1="81.538" x2="198.0984" y2="81.538">
				<stop  offset="0" style="stop-color:#FFFFFF"/>
				<stop  offset="0.1402" style="stop-color:#F4FAFE"/>
				<stop  offset="0.3518" style="stop-color:#DEF0FB"/>
				<stop  offset="0.6086" style="stop-color:#BBE1F7"/>
				<stop  offset="0.8984" style="stop-color:#87CFF3"/>
				<stop  offset="1" style="stop-color:#71C8F1"/>
			</linearGradient>
			<polygon opacity="0.42" fill="url(#SVGID_3_)" points="198.098,131.076 198.098,32 121.315,131.076 "/>
			</svg>
		   <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
			<svg  class="banner-clouds" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 400 100" enable-background="new 0 0 400 100" xml:space="preserve">
			<ellipse fill="#FFFFFF" cx="132.009" cy="61.667" rx="86.611" ry="30.833"/>
			<ellipse fill="#FFFFFF" cx="210.425" cy="37.987" rx="86.611" ry="30.833"/>
			<ellipse fill="#FFFFFF" cx="271.386" cy="61.667" rx="86.611" ry="30.833"/>
			</svg>	
			<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
			<svg  class="banner-clouds-2" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 400 100" enable-background="new 0 0 400 100" xml:space="preserve">
			<ellipse fill="#FFFFFF" cx="132.009" cy="61.667" rx="86.611" ry="30.833"/>
			<ellipse fill="#FFFFFF" cx="210.425" cy="37.987" rx="86.611" ry="30.833"/>
			<ellipse fill="#FFFFFF" cx="271.386" cy="61.667" rx="86.611" ry="30.833"/>
			</svg>	
		<?php } ?>
	</div>