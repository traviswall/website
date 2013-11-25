<?php
/*
Template Name: Work page
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<!-- ---------------------------------------

start work divider 

-->

	<section id="title-words" class="category-divider" onclick="location.href='/work/';" style="cursor:pointer;">
	
		<div class="centre-column">
		
			<h2>Work</h2>  
			
			<div class="triangle"></div> <!-- The triangle speech bubble thing. -->
			
		</div>
		
	</section>
	
<!-- 

end work divider 

---------------------------------------- -->

<!-- ---------------------------------------

start work previews 

-->

	<section id="work-previews" class="centre-column centre-column-work">
	
		<div class="centre-column-top-padding"></div> <!-- padding on top -->
		
<!-- ------------------- -->		
		
		<div class="work-preview work-preview-one">
				
			<div class="work-preview-hover clickable-internal">
			</div>
	
			
		</div>
		
<!-- ------------------- -->		
		
		<div class="work-preview work-preview-two">
			<div class="work-preview-hover clickable-internal">
			</div>
		</div>
		
<!-- ------------------- -->		
		
		<div class="work-preview work-preview-three">
			<div class="work-preview-hover clickable-internal">
			
			</div>		
		</div>
		
<!-- ------------------- -->		
		
		<div class="work-preview work-preview-four">
			<div class="work-preview-hover clickable-internal">
			
			</div>		
		</div>
		
<!-- ------------------- -->		
		
		<div class="work-preview work-preview-five">
			<div class="work-preview-hover clickable-internal">
			
			</div>		
		</div>
		
<!-- ------------------- -->		
		
		<div class="work-preview work-preview-six">
			<div class="work-preview-hover clickable-internal">
			
			</div>		
		</div>
		
<!-- ------------------- -->		
		
		<div class="work-preview work-preview-seven">
			<div class="work-preview-hover clickable-internal">
			
			</div>		
		</div>
		
<!-- ------------------- -->			
			
		<div class="work-preview work-preview-eight">
			<div class="work-preview-hover clickable-internal">
			
			</div>		
		</div>
		
<!-- ------------------- -->		
		
	</section>
	
<!-- 

end work previews 

---------------------------------------- -->	

<?php query_posts($query_string . '&cat=-11'); ?>

<?php if ( have_posts() ): ?>

<!-- ---------------------------------------

start words divider 

-->

	<section id="title-words" class="category-divider" onclick="location.href='/words/';" style="cursor:pointer;">
	
		<div class="centre-column">
		
			<h2>Words</h2>  
			
			<div class="triangle"></div> <!-- The triangle speech bubble thing. -->
			
		</div>
		
	</section>
	
	<div class="centre-column-top-padding"></div> <!-- Padding sits outside centre-column so it is the same as padding between work previews. -->
	
<!-- 

end words divider 

---------------------------------------- -->


<!-- ---------------------------------------

start content section 

-->

	<section id="content"> <!-- The ID "content" keeps standard Wordpress naming structure. -->
	
	<div class="centre-column-top-padding"></div>

	<!-- start the wordpress loop -->

	<?php while ( have_posts() ) : the_post(); ?>
		
		<!-- ===========================================

		if the posts are work posts, they look like this: 

		-->

		<?php if( in_category('work') ) { ?>

			<!-- ---------------------------------------
			
			start article 
			
			-->
	
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- Gets all the info about the post. This is standard wordpress naming structure and required for functionality extras, such as the infinite scroll. -->
			
				<div class="work"> <!-- Wrapper for toggling. --> 
				
			<!-- ---------------------------------------
			
			start article content
			
			-->
					<div class="work-container"> <!-- Extra div wraps this area for toggling purposes. -->
			
						<?php echo the_secondary_content( 'portfolio', get_the_ID() ); ?> <!-- Grabs the back-end 'secondary content'. -->
						
					</div>
			
			<!-- 

			end article content 

			---------------------------------------- -->
	
				<!-- ---------------------------------------
			
				start article meta
			
				-->
	
					<section class="work-meta">
			
					<!-- meta title -->
	
						<h5><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h5> <!-- This is the title of the post entered in the Wordpress back-end. -->
					
					<!-- meta icon -->				
		
						<div class="icon-work-expand">
						</div>

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
			
				<!-- 

				end article meta 

				---------------------------------------- -->
				
				<div class="clear"><!-- clear --></div>
			
				<div class="work-divider"><!-- divider --></div>
				
				</div> <!-- end work wrapper div -->
						
	</article>
	
	<!-- 

	end the article 

	---------------------------------------- -->
	
	<?php  } else { ?>
	
	<!-- ===========================================

	if they are not work posts, they will be words posts. they look like this: 

	-->	

			<!-- ---------------------------------------
			
			start article 
			
			-->

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- Gets all the info about the post. This is standard wordpress naming structure and required for functionality extras, such as the infinite scroll -->
	
				<!-- ---------------------------------------
	
				start article content 
	
				-->
	
					<div class="centre-column"> <!-- Wraps the article in the centre-column container. This prevents it from expanding into long line lengths on larger screens that reduce readbility -->
					
						<!-- title of the post -->
	
						<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>	

					<div class="article-container">
					
						<div class="article-content">
			
						<?php echo the_content(); ?>
			
						</div>	
					
					</div>
		
				<!-- 
				
				end article content 
				
				--------------------------------------- -->
	
				<!-- ---------------------------------------
			
				start article meta
			
				-->

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
			
				<!-- ---------------------------------------
					
				end article meta 
					
				--------------------------------------- -->	
								
				<div class="clear"><!-- clear --></div>
				
				</div> <!-- End the centre-column before the divider so it will run 100% wide. -->
				
				<div class="article-divider"><!-- divider --></div>
				
		</article>	

	<!-- 
	
	end article
	
	--------------------------------------- -->

<?php } ?>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>

	<!-- none of this is displayed, but required for infinite scroll function -->
		<div id="nav-below" class="navigation">
		<p class="nav-previous"><?php next_posts_link(__( '' )) ?></p>
		<p class="nav-next"><?php previous_posts_link(__( '' )) ?></p>
		</div>
	<!-- none of this is displayed, but required for infinite scroll function -->

</section>

<!-- 

end content section 

---------------------------------------- -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>