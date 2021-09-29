<?php
/**
 * Enqueue styles and scripts
 * Theme-specific styles and scripts
 */

/****************************************************************************************************
 Actions
 ****************************************************************************************************/

// Enqueue scripts
add_action('wp_enqueue_scripts', 'awi_enqueue_styles_scripts');


// Initialize scripts 
add_action('wp_footer', 'awi_initialize_scripts', 9999);

add_action( 'wp_head', 'preload_theme_styles', 5);

/****************************************************************************************************
 Functions
 ****************************************************************************************************/

 function awi_enqueue_styles_scripts() {
	// wp_enqueue_style('awi-google-fonts', '//fonts.googleapis.com/css2?family=Fjalla+One&family=Mulish:wght@300;400;700&display=swap');
	wp_enqueue_style('core', get_stylesheet_uri());
	wp_enqueue_style('theme', get_template_directory_uri().'/css/style.css');
	wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');

	wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.1.1.min.js');
	wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr-2.2.min.js');
	wp_enqueue_script('svgxuse', get_template_directory_uri().'/js/svgxuse.min.js', array('jquery'), false, true);
	wp_enqueue_script('awiNav', get_template_directory_uri().'/js/awiNav-1.2.1.js', array('jquery'), false, true);
	wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js');
	wp_enqueue_script('parallax', get_template_directory_uri().'/js/parallax-1.2.js', array('jquery'), false, true);
	wp_enqueue_script('fontfaceobserver', get_template_directory_uri().'/js/fontfaceobserver.js', array('jquery'), false, true);
	wp_enqueue_script('fontloader', get_template_directory_uri().'/js/fontloader.js', array('jquery'), false, true);

	//wp_enqueue_script('fancybox', get_template_directory_uri().'/js/fancybox.umd.js', array('jquery'), false, true);
	//wp_enqueue_style('fancybox', get_template_directory_uri().'/css/fancybox.css');
}
function preload_theme_styles()
{
    //echo '<link rel="preload" href="'. get_template_directory_uri() .'/fonts/[FONT_NAME].woff2" as="font" crossorigin="anonymous">';
}

function awi_initialize_scripts() { ?>

	<script>
		new WOW().init();
		
		/*
		
	  	(function($){
		    function sticky_header() {    
		    	var windowPosition = $(window).scrollTop();
		      	var switchTarget = $('header');
		      	var $w = $(window).scroll(function() {
		        	if ($w.scrollTop() > 100) {
		          		switchTarget.addClass('sticky');
		        	} else {
		          		switchTarget.removeClass('sticky');
		        	}
		      	});
		    };
		    $(function(){
		      	sticky_header();
		    });
		    $(window).resize(function() {
		      	sticky_header();
		    });
	  	})(jQuery);
	  	
	  	*/
	  	
	</script>

	<?php if(is_front_page()) { ?>
    
	<?php }
}