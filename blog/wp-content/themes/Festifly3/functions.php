<?php
/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

function core_js(){
    if (!is_admin()) {
    
    	wp_deregister_script('jquery'); // Deregister WordPress jQuery
    	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', array(), '1.9.1'); // Google CDN jQuery
    	wp_enqueue_script('jquery'); // Enqueue it!
    	
    	wp_register_script('conditionizr', 'http://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/2.2.0/conditionizr.min.js', array(), '2.2.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!
        
        wp_register_script('modernizr', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '2.6.2'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!
        
    }
}

function foundation_js(){

    wp_register_script( 'base_js', get_template_directory_uri() . '/javascripts/foundation/foundation.js' ); 
    wp_enqueue_script( 'base_js', 'jQuery', '','', true );

    wp_register_script( 'cookie_js', get_template_directory_uri() . '/javascripts/foundation/foundation.cookie.js' ); 
    wp_enqueue_script( 'cookie_js', 'jQuery', '','', true );

    wp_register_script( 'forms_js', get_template_directory_uri() . '/javascripts/foundation/foundation.forms.js' ); 
    wp_enqueue_script( 'forms_js', 'jQuery', '','', true );  

    wp_register_script( 'drop_js', get_template_directory_uri() . '/javascripts/foundation/foundation.dropdown.js' ); 
    wp_enqueue_script( 'drop_js', 'jQuery', '','', true );  

    wp_register_script( 'abide_js', get_template_directory_uri() . '/javascripts/foundation/foundation.abide.js' ); 
    wp_enqueue_script( 'abide_js', 'jQuery', '','', true );  

    wp_register_script( 'tool_js', get_template_directory_uri() . '/javascripts/foundation/foundation.tooltips.js' ); 
    wp_enqueue_script( 'tool_js', 'jQuery', '','', true );  

    wp_register_script( 'tool_js', get_template_directory_uri() . '/javascripts/foundation/foundation.tooltips.js' ); 
    wp_enqueue_script( 'tool_js', 'jQuery', '','', true );  

    wp_register_script( 'bgScreen_js', get_template_directory_uri() . '/javascripts/jquery.backstretch.min.js' ); 
    wp_enqueue_script( 'bgScreen_js', 'jQuery', '','', true );  
}

add_action('wp_enqueue_scripts', 'foundation_js');

/*------------------------------------*\
	Wordpress Functions
\*------------------------------------*/

/************* The Post Thumbnail *************************/

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

/*************  Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin *************************/
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

/************* Register The Main Menu *************************/

register_nav_menu( 'Header', 'Header Menu' ); 
register_nav_menu( 'Footer', 'Footer Menu' ); 

/************* Add Shortcodes to excerpts *************************/
add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');

/************* Strip Empty P tags from excerpt *************************/

add_filter( 'the_excerpt', 'strip_some_paragraphs', 20 );
function strip_some_paragraphs( $content ) {

    $content = preg_replace(
        '/<p>(([\s]*)|[\s]*(<img[^>]*>|\[[^\]]*\])[\s]*)<\/p>/',
        '$3',
        $content
    );

    return $content;
}

/************* Excerpt Length *************************/

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 60;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '? <a class="readmore" href="'. get_permalink($post->ID) . '">' . 'Read More' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

/************* Meta Box *************************/
	
	add_action('admin_init','portfolio_meta_init');
	
	function portfolio_meta_init()
	{
		// add a meta box for WordPress 'project' type
		add_meta_box('portfolio_meta', 'Project Infos', 'portfolio_meta_setup', 'post', 'side', 'low');
	 
		// add a callback function to save any data a user enters in
		add_action('save_post','portfolio_meta_save');
	}
	
	function portfolio_meta_setup()
	{
		global $post;
	 	 
		?>
			<div class="portfolio_meta_control">
				<label>URL</label>
				<p>
					<input type="text" name="_url" value="<?php echo get_post_meta($post->ID,'_url',TRUE); ?>" style="width: 100%;" />
				</p>
			</div>
		<?php

		// create for validation
		echo '<input type="hidden" name="meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
	}
	
	function portfolio_meta_save($post_id) 
	{
		// check nonce
		if (!isset($_POST['meta_noncename']) || !wp_verify_nonce($_POST['meta_noncename'], __FILE__)) {
		return $post_id;
		}

		// check capabilities
		if ('post' == $_POST['post_type']) {
		if (!current_user_can('edit_post', $post_id)) {
		return $post_id;
		}
		} elseif (!current_user_can('edit_page', $post_id)) {
		return $post_id;
		}

		// exit on autosave
		if (defined('DOING_AUTOSAVE') == DOING_AUTOSAVE) {
		return $post_id;
		}

		if(isset($_POST['_url'])) 
		{
			update_post_meta($post_id, '_url', $_POST['_url']);
		} else 
		{
			delete_post_meta($post_id, '_url');
		}
	}
	
	/*--- #end  Demo URL meta box ---*/

?>