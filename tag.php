<?php
/**
 * The template used to display Tag Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header') ); ?>
<?php if ( have_posts() ): ?>		

<!-- start header -->
<header class="single-page">
	<div id="header-wrapper" class="centre-column">
		<div class="bar-button clickable-internal"><h1><a href="/"><?php bloginfo( 'name' ); ?></a></h1></div>			
		<div class="bar-button bar-button-about"><h1 class="about">ABOUT</h1><div class="icon icon-about"></div></div>
		<div class="bar-button bar-button-contact"><h1 class="contact">CONTACT</h1><div class="icon"></div></div>
						<div class="clear-menu"></div>

		<div class="bar-button bar-button-category" onclick="location.href='/category/words/';" style="cursor:pointer;"><h1 class="category"><?php echo single_tag_title( '', false ); ?></h1><div class="triangle-header"></div> <!-- The triangle speech bubble thing. --></div>
				
	</div>
</header>
<!-- end header -->

<!-- start panel -->
<section id="panel-wrapper">
	<div class="panel-column">
		<div class="panel">
			<section class="panel-about">
				<div class="short-story">
					<span>
						<?php
							$my_id = 692;
							$post_id_692 = get_post($my_id);
							$title = $post_id_692->post_title;
							$title = apply_filters('the_title', $title);
							$title = str_replace(']]>', ']]>', $title);
							echo $title;
						?>
					</span>
				</div>
				<div>
					<?php
						$my_id = 692;
						$post_id_692 = get_post($my_id);
						$content = $post_id_692->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
				</div>
				<div class="longer-story">
					<span>
						<?php
							$my_id = 694;
							$post_id_694 = get_post($my_id);
							$title = $post_id_694->post_title;
							$title = apply_filters('the_title', $title);
							$title = str_replace(']]>', ']]>', $title);
							echo $title;
						?>
					</span>
				</div>				
				<div>
					<?php
						$my_id = 694;
						$post_id_694 = get_post($my_id);
						$content = $post_id_694->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
				</div>
				<div class="whats-next">
					<span>
						<?php
							$my_id = 696;
							$post_id_696 = get_post($my_id);
							$title = $post_id_696->post_title;
							$title = apply_filters('the_title', $title);
							$title = str_replace(']]>', ']]>', $title);
							echo $title;
						?>
					</span>
				</div>
				<div>
					<?php
						$my_id = 696;
						$post_id_696 = get_post($my_id);
						$content = $post_id_696->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
				</div>
			</section>
			<section class="panel-contact">
				<nav id="social">
				<!-- -->				
					<div id="email" class="email social-button clickable-external">
						<div class="icon-social icon-email"></div>
						<a class="social" href="mailto:travis.wall@gmail.com?Subject=">travis.wall@gmail.com</a>
						<p class="social-button-caption">For: digital letters or substantial communication.</p>
					</div>
				<!-- -->					
					<div id="twitter" class="social-button clickable-external">
						<div class="icon-social icon-twitter"></div>
						<a class="social" href="http://twitter.com/_traviswall">traviswall7</a>
						<p class="social-button-caption">For: casual communication and television commentary.</p>			
					</div>
				<!-- -->				
					<div id="flickr" class="social-button clickable-external">
						<div class="icon-social icon-flickr"></div>
						<a class="social" href="http://www.flickr.com/photos/traviswall7">traviswall7</a>
						<p class="social-button-caption">For: following more considered and “serious” photography.</p>			
					</div>
				<!-- -->				
					<div id="instagram" class="social-button clickable-external">
						<div class="icon-social icon-instagram"></div>
						<a class="social" href="http://instagram.com/_traviswall">traviswall7</a>
						<p class="social-button-caption">For: visual documentation of daily activities and events.</p>			
					</div>
				<!-- -->				
					<div id="skype" class="social-button clickable-external">
						<div class="icon-social icon-skype"></div>
						<a class="social" href="callto://travis.wall7">travis.wall7</a>
						<p class="social-button-caption">For: futuristic video phone calls.</p>	
						</div>
						<div id="linkedin" class="social-button clickable-external">
							<div class="icon-social icon-linkedin"></div>
							<a class="social" href="http://www.linkedin.com/profile/view?id=244858838">Travis Wall</a>
							<p class="social-button-caption">For: professional networking and online resume.</p>	
						</div>
					</nav>
			</section>											
		</div>
	</div>
</section>
<!-- end panel -->


<!-- start content section -->
	<section id="content"> <!-- The ID "content" keeps standard Wordpress naming structure. -->
		<div class="centre-column-top-padding"></div>
<?php while ( have_posts() ) : the_post(); ?>
	<?php if( in_category('work') ) { ?>
		<!-- start article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- Gets all the info about the post. This is standard wordpress naming structure and required for functionality extras, such as the infinite scroll. -->
			<div class="work"> <!-- Wrapper for toggling. --> 
			<!-- start article content -->
				<div class="work-container"> <!-- Extra div wraps this area for toggling purposes. -->
					<?php echo the_secondary_content( 'portfolio', get_the_ID() ); ?> <!-- Grabs the back-end 'secondary content'. -->	
				</div>
			<!-- end article content -->
			<!-- start article meta -->
			<section class="work-meta">
			<!-- meta title -->
				<h5><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h5> <!-- This is the title of the post entered in the Wordpress back-end. -->
			<!-- meta icon -->				
				<div class="icon-work-expand"></div>
			<!-- meta paragraph -->					
				<div class="work-meta-text">	
					<?php echo the_content(); ?> <!-- This is actually the primary content in the Wordpress back-end, but is displayed as the description. This helps the related posts plugin match related posts via the description of the work. -->
				</div>
			<!-- meta list area -->	
				<div class="work-meta-list-container">
				<!-- meta tags -->
					<div class="meta-date">	
						<span class="date"><?php the_time('F Y') ?></span>
					</div>					
					<div class="meta-tags">
						<span class="tags"><?php the_tags('',' '); ?></span>
					</div>		
				<!-- meta related -->			
					<?php related_posts(); ?> <!-- Most of the styling for this is actually done in the YARPP plugin settings in the Wordpress back-end. -->
				</div>			
			</section>
			<!-- end article meta -->
			<div class="clear"><!-- clear --></div>
			<div class="work-divider"><!-- divider --></div>	
			</div> <!-- end work wrapper div -->				
		</article>
	<!-- end the article -->
	<?php  } else { ?>
	<!-- if they are not work posts, they will be words posts. they look like this -->	
	<!-- start article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- Gets all the info about the post. This is standard wordpress naming structure and required for functionality extras, such as the infinite scroll -->
			<div class="centre-column"> <!-- Wraps the article in the centre-column container. This prevents it from expanding into long line lengths on larger screens that reduce readbility -->
				<!-- title of the post -->
				<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<!-- start article content -->	
				<div class="article-container">	
					<div class="article-content">
					<?php echo the_content(); ?>
					</div>	
				</div>
				<!-- end article content -->
				<!-- start article meta -->
				<section class="article-meta">
					<div class="meta-area viewable">
					<!-- meta tags -->
						<div class="meta-date">	
							<span class="date"><?php the_date(); ?></span>
						</div>	
						<div class="meta-tags">	
							<span class="tags"><?php the_tags('',' '); ?></span>
						</div>	
					<!-- meta related -->
						<?php related_posts(); ?> <!-- Most of the styling for this is actually done in the YARPP plugin settings in the Wordpress back-end. -->	
					</div>					
				</section>
				<!-- end article meta -->	
				<div class="clear"><!-- clear --></div>
			</div> <!-- End the centre-column before the divider so it will run 100% wide. -->
			<div class="article-divider"><!-- divider --></div>				
		</article>	
		<!-- end article -->
	<?php } ?>
<?php endwhile; ?>
<?php else: ?>
<!-- start tag divider -->
	<section id="title-work" class="category-divider" onclick="location.href='/category/work/';" style="cursor:pointer;">
		<div class="centre-column">	
			<h2>Nothing in <?php echo single_tag_title( '', false ); ?></h2>  		
			<div class="triangle"></div> <!-- The triangle speech bubble thing. -->		
		</div>	
	</section>
<!-- end tag divider -->	
<?php endif; ?>
	<!-- none of this is displayed, but required for infinite scroll function -->
	<div id="nav-below" class="navigation">
	<p class="nav-previous"><?php next_posts_link(__( '' )) ?></p>
	<p class="nav-next"><?php previous_posts_link(__( '' )) ?></p>
	</div>
	<!-- none of this is displayed, but required for infinite scroll function -->
</section> <!-- End "content" section -->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>