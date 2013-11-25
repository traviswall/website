<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php if( in_category('work') ) { ?>
	<!-- start header -->
	<header class="single-page">
		<div id="header-wrapper" class="centre-column">
			<div class="bar-button clickable-internal"><h1><a href="/"><?php bloginfo( 'name' ); ?></a></h1></div>	
			<div class="bar-button bar-button-about"><h1 class="about">ABOUT</h1><div class="icon icon-about"></div></div>
			<div class="bar-button bar-button-contact"><h1 class="contact">CONTACT</h1><div class="icon"></div></div>
			<div class="clear-menu"></div>
			<div class="bar-button bar-button-category" onclick="location.href='/category/words/';" style="cursor:pointer;"><h1 class="category">WORDS</h1></div>
			<div class="bar-button bar-button-category bar-button-active" onclick="location.href='/category/work/';" style="cursor:pointer;"><h1 class="category">WORK</h1><div class="triangle-header"></div> <!-- The triangle speech bubble thing. --></div>				
		</div>
	</header>
	<!-- end header -->
	<!-- start panel -->
	<section id="panel-wrapper">
		<div class="panel-column">
			<div class="panel">
				<section class="panel-about">
					<p><b>Short story:</b> I am a meta-disciplinary designer in Surry Hills/Wollongong.<br><br>
<b>Longer story:</b>
I'm a graphic designer/art director dealing in both CMYK and RGB. I help and advise people with the creation of their product's brands and identities, I produce objects made from paper and ink, and I make visual assets for digital things along with writing code pulling them together.<br><br>
Graphic design is an output and bi-product of my main interest though - I'm naturally an observant problem solver always looking for ways to improve things, which has lead me to branch out into matters of general creative problem solving and this much hyped idea of "design-thinking". I use this process and mindset every day to work with problems, and in 2012 I wrote a thesis about it exploring how it works sociologically.<br><br>
Using design, I created a community called Mash and I help grow and direct Hackagong as part of Wollongong's 'future initiative', where I work with the Wollongong community at a grassroots level to cultivate a sustainable maker movement and startup ecosystem, with the goal of increasing Wollongong's creative and technical output to build new businesses and opportunities in the area. I also work as a graphic designer/art director for clients in Wollongong, and teach graphic design at the University of Wollongong focusing on design process and problem solving through visual composition.<br><br>
I'm an insight and research driven designer, and my projects have lead me down paths of study and interest in general sociology, innovation and creativity, responsible development of new technologies and tomorrowism. I keep my approach very meta-disciplinary, and make sure it's wrapped up in an ongoing interest in popular culture and the general zeitgeist.<br><br>
<b>What's next?</b> I'm currently looking for full-time problem solving work in Sydney. Contact me if you'd like to talk!</p>
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
					</nav>
				</section>									
			</div>
		</div>
	</section>
	<!-- end panel -->
	<!-- ---------------------------------------
	start content section 
	--------------------------------------- --->
	<section id="content"> <!-- The ID "content" keeps standard Wordpress naming structure. -->
		<div class="centre-column-top-padding"></div>
		<!-- ---------------------------------------
		start article 
		---------------------------------------- -->	
		<article name="work" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- Gets all the info about the post. This is standard wordpress naming structure and required for functionality extras, such as the infinite scroll. -->
			<div class="work"> <!-- Wrapper for toggling. --> 	
			<!-- ---------------------------------------
			start article content		
			---------------------------------------- -->
				<div class="work-container"> <!-- Extra div wraps this area for toggling purposes. -->			
					<?php echo the_secondary_content( 'portfolio', get_the_ID() ); ?> <!-- Grabs the back-end 'secondary content'. -->	
				</div>
				<!-- ---------------------------------------
				end article content 
				---------------------------------------- -->
				<!-- ---------------------------------------		
				start article meta	
				---------------------------------------- -->
				<section class="work-meta">
					<!-- meta title -->
					<h5><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h5> <!-- This is the title of the post entered in the Wordpress back-end. -->
				<!-- meta paragraph -->					
					<div class="work-meta-text">
						<?php echo the_content(); ?> <!-- This is actually the primary content in the Wordpress back-end, but is displayed as the description. This helps the related posts plugin match related posts via the description of the work. -->
					</div>
					<!-- meta list area -->	
					<div class="work-meta-list-container">
					<!-- meta tags -->
						<div class="meta-date">	
							<span class="date"><?php echo get_the_date('F Y'); ?></span>		
						</div>							
						<div class="meta-tags meta-tags-work">
							<span class="tags"><?php the_tags('',' '); ?></span>	
						</div>	
					<!-- meta related -->	
						<?php related_posts(); ?> <!-- Most of the styling for this is actually done in the YARPP plugin settings in the Wordpress back-end. -->
					<!-- meta social -->
						<div class="meta-social">	
							<a data-pin-config="above" href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>				
						<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
						<a href="https://twitter.com/share" class="twitter-share-button twitter-button" data-via="traviswall7">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</div>	
				</section>
				<!-- ----------------------------------------
				end article meta 
				----------------------------------------- -->
				<div class="clear"><!-- clear --></div>
				<div class="work-divider"><!-- divider --></div>
			</div> <!-- end work wrapper div -->			
	</article>
	<!-- ----------------------------------------
	end the article 
	---------------------------------------- -->
<?php  } else { ?>		
	<!-- start header -->
	<header class="single-page">
		<div id="header-wrapper" class="centre-column">
			<div class="bar-button clickable-internal"><h1><a href="/"><?php bloginfo( 'name' ); ?></a></h1></div>	
			<div class="bar-button bar-button-about"><h1 class="about">ABOUT</h1><div class="icon icon-about"></div></div>
			<div class="bar-button bar-button-contact"><h1 class="contact">CONTACT</h1><div class="icon"></div></div>
			<div class="clear-menu"></div>
			<div class="bar-button bar-button-category bar-button-active" onclick="location.href='/category/words/';" style="cursor:pointer;"><h1 class="category">Words</h1><div class="triangle-header"></div> <!-- The triangle speech bubble thing. --></div>			
		</div>
	</header>
	<!-- end header -->
	<!-- start panel -->
	<section id="panel-wrapper">
		<div class="panel-column">
			<div class="panel">
				<section class="panel-about">
					<p><b>Short story:</b> I am a meta-disciplinary designer in Surry Hills/Wollongong.<br><br>
<b>Longer story:</b>
I'm a graphic designer/art director dealing in both CMYK and RGB. I help and advise people with the creation of their product's brands and identities, I produce objects made from paper and ink, and I make visual assets for digital things along with writing code pulling them together.<br><br>
Graphic design is an output and bi-product of my main interest though - I'm naturally an observant problem solver always looking for ways to improve things, which has lead me to branch out into matters of general creative problem solving and this much hyped idea of "design-thinking". I use this process and mindset every day to work with problems, and in 2012 I wrote a thesis about it exploring how it works sociologically.<br><br>
Using design, I created a community called Mash and I help grow and direct Hackagong as part of Wollongong's 'future initiative', where I work with the Wollongong community at a grassroots level to cultivate a sustainable maker movement and startup ecosystem, with the goal of increasing Wollongong's creative and technical output to build new businesses and opportunities in the area. I also work as a graphic designer/art director for clients in Wollongong, and teach graphic design at the University of Wollongong focusing on design process and problem solving through visual composition.<br><br>
I'm an insight and research driven designer, and my projects have lead me down paths of study and interest in general sociology, innovation and creativity, responsible development of new technologies and tomorrowism. I keep my approach very meta-disciplinary, and make sure it's wrapped up in an ongoing interest in popular culture and the general zeitgeist.<br><br>
<b>What's next?</b> I'm currently looking for full-time problem solving work in Sydney. Contact me if you'd like to talk!</p>
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
					</nav>
				</section>											
			</div>
		</div>
	</section>
	<!-- end panel -->
	<!-- ---------------------------------------
	start content section 
	--------------------------------------- --->
	<section id="content"> <!-- The ID "content" keeps standard Wordpress naming structure. -->
		<div class="centre-column-top-padding"></div>
 		<!-- ---------------------------------------
		start article 
		---------------------------------------- -->	
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- gets all the info about the post. this is standard wordpress naming structure and required for functionality extras, such as the infinite scroll -->
			<!-- ---------------------------------------
			start article content		
			---------------------------------------- -->
				<div class="centre-column"> <!-- Wraps the article in the centre-column container. This prevents it from expanding into long line lengths on larger screens that reduce readbility -->	
					<!-- title of the post -->
					<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<span class="phone-date"><?php the_date(); ?></span>
					<div class="article-container">
						<div class="article-content">
						<?php echo the_content(); ?>			
						</div>			
					</div>
				<!-- ---------------------------------------
				end article content 
				---------------------------------------- -->
				<!-- ---------------------------------------		
				start article meta	
				---------------------------------------- -->
					<section class="article-meta">			
						<div class="meta-area viewable">					
						<!-- meta tags -->							
							<div class="meta-date meta-date-words">	
								<span class="date"><?php echo get_the_date(); ?></span>		
							</div>					
							<div class="meta-tags">	
								<span class="tags"><?php the_tags('',' '); ?></span>
							</div>	
						<!-- meta related -->								
							<?php related_posts(); ?> <!-- Most of the styling for this is actually done in the YARPP plugin settings in the Wordpress back-end. -->						
						</div>				
					</section>
				<!-- ----------------------------------------
				end article meta 
				----------------------------------------- -->			
				<div class="clear"><!-- clear --></div>
				</div> <!-- End the centre-column before the divider so it will run 100% wide. -->
				<div class="article-divider"><!-- divider --></div>				
			</article>	
	<!-- ----------------------------------------
	end the article 
	---------------------------------------- -->
	</section>		
<?php } ?>
<?php endwhile; ?>	
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>