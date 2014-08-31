<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="application-name" content="<?php bloginfo('name'); ?>" />
	<title><?php if(is_post_type_archive( $project )){ ?> Work |  <?php bloginfo("name"); ?><?php } if(!is_page('Home') && !is_post_type_archive( $project )){ wp_title(''); } ?><?php if(is_page('Home')){ ?><?php bloginfo("name"); ?> | Web Developer + Designer <?php } ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/cpallen_favicon.png">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
	<script type="text/javascript" src="//use.typekit.net/cvs4mot.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<div class="header">
	<div class="row">
		<div class="logo">
			<a href="<?php echo home_url(); ?>">
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
	<div class="banner <?php if(is_page('Home')){ ?>large<?php } ?><?php if(!is_page('Home') && !is_single() ){ ?>small<?php } if(is_single() ){ ?>Medium<?php } ?>">
		<div class="banner-wrapper">
			<div class="banner-body">
				<?php if(is_single() ) { ?>
			        <div id="slideshow">
			        	<div class="slideshow-bg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/macbook.png" alt="macbook" class="slideshow-macbook" />
							<div class="cycle-slideshow" 
							    data-cycle-timeout=9000
							    data-cycle-fx=scrollHorz
							    data-cycle-caption="#adv-custom-caption"
							    data-cycle-caption-template="{{cycleTitle}}"
							    data-cycle-prev="#prev"
	    						data-cycle-next="#next"
	    						data-cycle-pager=".slideshow-pager"
								 >
							    	<?php if(get_field('project_slider')): ?>
										<?php while(has_sub_field('project_slider')): ?>
										<?php $slider_image = get_sub_field('slider_image'); ?>
								   	 	<img src="<?php echo $slider_image['sizes']['slider-work']; ?>" data-cycle-title="<?php the_sub_field('slider_title'); ?>" alt="<?php the_sub_field('slider_title'); ?>" class="slider-img" />
							   	 		<?php endwhile; ?>
							   	 	<?php endif; ?>
							</div>
						</div>
						<div class="slideshow-control">
							<div class="prev-wrapper">
					       	 	<span id="prev" class="icon-arrow-left3">&nbsp;</span>
					       	</div>
					       	<div class="next-wrapper">
					       		<span id="next" class="icon-arrow-right3">&nbsp;</span>
					       	</div>
					    </div>
					    <div class="slideshow-pager"></div>
					</div> 
			   <?php } ?>
				<?php if(is_page('Home')){ ?>
					<h1 class="banner-body-text"><span class="banner-body-text-small">Hello, I am Chris Allen</span> Front-end Web Developer <!--span class="banner-body-text-small">Working <a href="http://sightworks.com" target="_blank">@SightWorks</a></span--></h1>
					<div class="banner-body-button">
						<a href="work" class="button primary large">View Work <span class="icon-arrow-right3"></span></a>
					</div>
					<div class="banner-scroll">
						<a href="#featured" class="scroll">Scroll Down <span class="icon-arrow-down3"></span></a>
					</div>
				<?php } ?>
				<?php if(!is_page('Home') && !is_single() && !is_home() && !is_post_type_archive( $project )){ ?>
					<div class="banner-body-text row">
						<h1 class="banner-body-title"><?php the_title(); ?></h1>
					</div>
				<?php } ?>
				<?php if(is_post_type_archive( $project ) ){ ?>
					<div class="banner-body-text row">
						<h1 class="banner-body-title">Work</h1>
					</div>
				<?php } ?>
				<?php if ( is_404() ) { ?>
					<div class="banner-body-text row">
						<h1 class="banner-body-title">404 Page Not Found</h1>
					</div>
				<?php } ?>
				<?php if( is_home()) { ?>
					<div class="banner-body-text row">
						<h1 class="banner-body-title">Blog</h1>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
