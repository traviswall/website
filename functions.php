<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));
	
	function my_load_infinite_scroll( $load_infinite_scroll ) {
    if( is_page( array('words','work')) )
        return true;
    return $load_infinite_scroll;
	}

add_filter('infinite_scroll_load_override', 'my_load_infinite_scroll');

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		
		wp_register_script( 'jquery-lib', get_template_directory_uri().'/js/1-4-2-jquery.min.js' );
		wp_enqueue_script( 'jquery-lib' );
		
		wp_register_script( 'jquery-resize', get_template_directory_uri().'/js/jquery-resize.js', array( 'jquery-lib') );
		wp_enqueue_script( 'jquery-resize' );
		
		wp_register_script( 'clickable', get_template_directory_uri().'/js/clickable.js', array( 'jquery-lib') );
		wp_enqueue_script( 'clickable' );
		
		wp_register_script( 'toggles', get_template_directory_uri().'/js/toggles.js', array( 'jquery-lib') );
		wp_enqueue_script( 'toggles' );				
        
        wp_register_style( 'general', get_stylesheet_directory_uri().'/css/general.css', '', '', 'screen' );
        wp_enqueue_style( 'general' );
        
        wp_register_style( 'layout', get_stylesheet_directory_uri().'/css/layout.css', '', '', 'screen' );
        wp_enqueue_style( 'layout' );
        
        wp_register_style( 'images', get_stylesheet_directory_uri().'/css/images.css', '', '', 'screen' );
        wp_enqueue_style( 'images' );
        
        wp_register_style( 'typography', get_stylesheet_directory_uri().'/css/typography.css', '', '', 'screen' );
        wp_enqueue_style( 'typography' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
	
	