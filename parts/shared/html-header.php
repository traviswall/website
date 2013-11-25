<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="content-type" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- Meta -->
		<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
		<!-- if page is content page -->
		<?php if (is_single()) { ?>
			<!-- Facebook -->
			<meta property="og:url" content="<?php the_permalink() ?>"/>
			<meta property="og:title" content="<?php single_post_title(''); ?>" />
			<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:image" content="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>" />
			<!-- Twitter -->
			<meta name="twitter:title" content="<?php single_post_title(''); ?>">
			<meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>">
			<meta name="twitter:image" content="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>">		
		<?php } else { ?>
		<!-- if page is others -->
			<!-- Facebook -->
			<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
			<meta property="og:description" content="<?php bloginfo('description'); ?>" />
			<meta property="og:type" content="website" />
			<meta property="og:image" content="http://www.travis-wall.com/traviswall/wp-content/themes/traviswall.me-04102013/css/assets/facebook-open-graph.png" />
			<!-- Twitter -->
			<meta name="twitter:title" content="<?php single_post_title(''); ?>">
			<meta name="twitter:description" content="I’m one of these design thinker types - a naturally an observant problem solver always looking for ways to improve things. This is some of my work.">
			<meta name="twitter:image" content="http://travis-wall.com/traviswall/wp-content/themes/folioblog-04.10.2013/css/assets/preview-illustration.jpg">		

		<?php } ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/css/assets/favicon-4.ico"/>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		