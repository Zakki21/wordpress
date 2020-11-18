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
					'name'        => __( 'Sidebar', 'twentytwenty' ),
					'id'          => 'sidebar-1',
					'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
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
	
//	function mythem_enqueue_style() {
//		wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css' );
//		wp_enqueue_style( 'tw_style', get_template_directory_uri(). '/tw_style.css' );
//		wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
//	}
//	add_action( 'wp_enqueue_scripts', 'mythem_enqueue_style' );
