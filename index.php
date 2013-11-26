<?php
/**

 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header') ); ?>

<!-- start header -->
<header class="home-page">
	<div id="header-wrapper">
		<div class="nav-bar-wrapper">
			<div class="centre-column">
				<div class="bar-button bar-button-about"><h1 class="about">ABOUT</h1><div class="icon icon-about"></div></div>
				<div class="bar-button bar-button-contact"><h1 class="contact">CONTACT</h1><div class="icon"></div></div>	
			</div>
		</div>
		<div class="centre-column">
			<div class="bar-button clickable-internal"><h1 class="title"><a href="/"><?php bloginfo( 'name' ); ?></a></h1></div>					</div>
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

<div id="page-wrapper">
<!-- start tooltip -->
<div id="dhtmltooltip"></div>
<script type="text/javascript">

/***********************************************
* Cool DHTML tooltip script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

var offsetxpoint=-20 //Customize x offset of tooltip
var offsetypoint=-100 //Customize y offset of tooltip
var ie=document.all
var ns6=document.getElementById && !document.all
var enabletip=false
if (ie||ns6)
var tipobj=document.all? document.all["dhtmltooltip"] : document.getElementById? document.getElementById("dhtmltooltip") : ""

function ietruebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function ddrivetip(thetext, thecolor, thewidth){
if (ns6||ie){
if (typeof thewidth!="undefined") tipobj.style.width=thewidth+"px"
if (typeof thecolor!="undefined" && thecolor!="") tipobj.style.backgroundColor=thecolor
tipobj.innerHTML=thetext
enabletip=true
return false
}
}

function positiontip(e){
if (enabletip){
var curX=(ns6)?e.pageX : event.clientX+ietruebody().scrollLeft;
var curY=(ns6)?e.pageY : event.clientY+ietruebody().scrollTop;
//Find out how close the mouse is to the corner of the window
var rightedge=ie&&!window.opera? ietruebody().clientWidth-event.clientX-offsetxpoint : window.innerWidth-e.clientX-offsetxpoint-20
var bottomedge=ie&&!window.opera? ietruebody().clientHeight-event.clientY-offsetypoint : window.innerHeight-e.clientY-offsetypoint-20

var leftedge=(offsetxpoint<0)? offsetxpoint*(-1) : -1000

//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<tipobj.offsetWidth)
//move the horizontal position of the menu to the left by it's width
tipobj.style.left=ie? ietruebody().scrollLeft+event.clientX-tipobj.offsetWidth+"px" : window.pageXOffset+e.clientX-tipobj.offsetWidth+"px"
else if (curX<leftedge)
tipobj.style.left="5px"
else
//position the horizontal position of the menu where the mouse is positioned
tipobj.style.left=curX+offsetxpoint+"px"

//same concept with the vertical position
if (bottomedge<tipobj.offsetHeight)
tipobj.style.top=ie? ietruebody().scrollTop+event.clientY-tipobj.offsetHeight-offsetypoint+"px" : window.pageYOffset+e.clientY-tipobj.offsetHeight-offsetypoint+"px"
else
tipobj.style.top=curY+offsetypoint+"px"
tipobj.style.visibility="visible"
}
}

function hideddrivetip(){
if (ns6||ie){
enabletip=false
tipobj.style.visibility="hidden"
tipobj.style.left="-1000px"
tipobj.style.backgroundColor=''
tipobj.style.width=''
}
}

document.onmousemove=positiontip

</script>
<!-- end tooltip -->
<!-- start work divider -->
	<section id="title-work" class="category-divider" onclick="location.href='/category/work/';" style="cursor:pointer;">
		<div class="centre-column">	
			<h2>Work</h2>  		
			<div class="triangle-divider"></div> <!-- The triangle speech bubble thing. -->		
		</div>	
	</section>
<!-- end work divider -->
<!-- start work previews -->
	<section id="work-previews" class="centre-column centre-column-work">	
		<div class="centre-column-top-padding"></div> <!-- padding on top -->
<!-- -->				
		<div class="work-preview work-preview-two" onclick="location.href='/work/unicentre/';" onmouseover="ddrivetip('UniCentre', 250)" ;="" onmouseout="hideddrivetip()">
		</div>				
<!-- -->				
		<div class="work-preview work-preview-one" onclick="location.href='/work/hackagong/';" onmouseover="ddrivetip('Hackagong', 250)" ;="" onmouseout="hideddrivetip()">							
		</div>		
<!-- -->				
		<div class="work-preview work-preview-three" onclick="location.href='/work/mash/';" onmouseover="ddrivetip('Mash', 250)" ;="" onmouseout="hideddrivetip()">	
		</div>		
<!-- -->				
		<div class="work-preview work-preview-four" onclick="location.href='/work/letter-a-day-project/';" onmouseover="ddrivetip('Letter-A-Day', 250)" ;="" onmouseout="hideddrivetip()">	
		</div>		
<!-- -->				
		<div class="work-preview work-preview-five" onclick="location.href='/work/fuel/';" onmouseover="ddrivetip('Fuel', 250)" ;="" onmouseout="hideddrivetip()">	
		</div>		
<!-- -->				
		<div class="work-preview work-preview-six" onclick="location.href='/work/101-design/';" onmouseover="ddrivetip('101 Design', 250)" ;="" onmouseout="hideddrivetip()">	
		</div>		
<!-- -->				
		<div class="work-preview work-preview-seven" onclick="location.href='/work/student-posters/';" onmouseover="ddrivetip('Student Posters', 250)" ;="" onmouseout="hideddrivetip()">	
		</div>		
<!-- -->						
		<div class="work-preview work-preview-eight" onclick="location.href='/work/uow-global-challenges-visualisation-tool/';" onmouseover="ddrivetip('UOW Global Challenges Visualisation Tool', 250)" ;="" onmouseout="hideddrivetip()">	
		</div>		
<!-- -->				
	</section>	
<!-- end work previews -->	
<?php query_posts($query_string . '&cat=-11'); ?>
<?php if ( have_posts() ): ?>
<!-- start words divider -->
	<section id="title-words" class="category-divider" onclick="location.href='/category/words/';" style="cursor:pointer;">	
		<div class="centre-column">		
			<h2>Words</h2>  			
			<div class="triangle-divider"></div> <!-- The triangle speech bubble thing. -->			
		</div>		
	</section>	
	<div class="centre-column-top-padding"></div> <!-- Padding sits outside centre-column so it is the same as padding between work previews. -->	
<!-- end words divider -->
<!-- start content section -->
	<section id="content"> <!-- The ID "content" keeps standard Wordpress naming structure. -->	
		<div class="centre-column-top-padding"></div>
	<!-- start the wordpress loop -->
	<?php while ( have_posts() ) : the_post(); ?>		
		<!-- start article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- Gets all the info about the post. This is standard wordpress naming structure and required for functionality extras, such as the infinite scroll -->
			<div class="centre-column"> <!-- Wraps the article in the centre-column container. This prevents it from expanding into long line lengths on larger screens that reduce readbility -->
				<!-- title of the post -->
				<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3><span class="phone-date"><?php the_date(); ?></span>

				<!-- start article content -->	
				<div class="article-container">	
					<div class="article-content clickable-external">
					<?php echo the_content('Keep reading...'); ?>
					</div>	
				</div>
				<!-- end article content -->
				<!-- start article meta -->
				<section class="article-meta">
					<div class="meta-area viewable">
					<!-- meta tags -->
						<div class="meta-date meta-date-words">	
							<span class="date"><?php echo get_the_date(); ?></span>		
						</div>	
						<div class="meta-tags">
							<span class="tags"><?php the_tags('',' '); ?></span>
						</div>	
			
					</div>					
				</section>
				<!-- end article meta -->	
				<div class="clear"><!-- clear --></div>
			</div> <!-- End the centre-column before the divider so it will run 100% wide. -->
			<div class="article-divider"><!-- divider --></div>				
		</article>	
		<!-- end article -->
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
	<!-- end content section -->
</div>	
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>