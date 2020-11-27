<?php
	
	/**
	 * Register navigation menus uses wp_nav_menu in five places.
	 */
	function travel_menus() {
		
		$locations = array(
			'primary'  => __( 'Desktop Horizontal Menu', 'travel' ),
			'footer'   => __( 'Footer Menu', 'travel' )
		);
		
		register_nav_menus( $locations );
	}
	
	add_action( 'init', 'travel_menus' );
	
	
	function travel_sidebar_registration() {
		
		// Arguments used in all register_sidebar() calls.
		$shared_args = array(
			'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
			'after_title'   => '</h2>',
			'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
			'after_widget'  => '</div></div>',
		);
		
		register_sidebar(
			array_merge(
				$shared_args,
				array(
					'name'        => __( 'Sidebar', 'travel' ),
					'id'          => 'sidebar-1',
					'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'travel' ),
				)
			)
		);
		
	}
	
	add_action( 'widgets_init', 'travel_sidebar_registration' );
	
	

	add_action( 'wp_enqueue_scripts', 'travel_scripts' );
	function travel_scripts() {
		wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css' );
		wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css' );
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
	}


	add_action( 'init', 'register_travel_post_type' );

	function register_travel_post_type() {

		$labels = array(
			'name' => _x( 'Travel', 'post type general name' ),
			'singular_name' => _x( 'Travel', 'post type singular name' ),
		);
		$args = array(
			'labels' => $labels,
			'description' => 'My custom post type',
			'public' => true,
		);
		register_post_type( 'travel', $args );
	}
	
	
	add_shortcode('gallery_travel', 'gallery_travel_shortcode');
	function gallery_travel_shortcode($atts)
	{
		$atts = shortcode_atts([
			'orderby'     => 'date',
			'order'       => 'DESC',
			'numberposts' => 10
		], $atts);
		
		$posts = get_posts( array(
			'orderby'     => $atts['orderby'],
			'order'       => $atts['order'],
			'numberposts' => $atts['numberposts'],
			'post_type'   => 'travel'
		) );
		
		$output = '<div class="regular slider">';
		foreach ($posts as $post) {
			setup_postdata($post);
			$output .= '<div><a href="'.get_the_permalink($post->ID).'"> '.get_the_title($post->ID).' </a>'.get_the_content().'</div>';
		};
		$output .= '</div>';
		
		wp_reset_postdata();
		
		return $output;
	}
