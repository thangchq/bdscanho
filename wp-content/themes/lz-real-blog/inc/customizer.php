<?php
/**
 * lz-real-blog: Customizer
 *
 * @package WordPress
 * @subpackage lz-real-blog
 * @since 1.0
 */

function lz_real_blog_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'lz_real_blog_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'lz-real-blog' ),
	    'description' => __( 'Description of what this panel does.', 'lz-real-blog' ),
	) );

	$wp_customize->add_section( 'lz_real_blog_theme_options_section', array(
    	'title'      => __( 'General Settings', 'lz-real-blog' ),
		'priority'   => 30,
		'panel' => 'lz_real_blog_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('lz_real_blog_theme_options',array(
	        'default' => __('Right Sidebar','lz-real-blog'),
	        'sanitize_callback' => 'lz_real_blog_sanitize_choices'	        
	));

	$wp_customize->add_control('lz_real_blog_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section','lz-real-blog'),
	        'section' => 'lz_real_blog_theme_options_section',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','lz-real-blog'),
	            'Right Sidebar' => __('Right Sidebar','lz-real-blog'),
	            'One Column' => __('One Column','lz-real-blog'),
	            'Three Columns' => __('Three Columns','lz-real-blog'),
	            'Four Columns' => __('Four Columns','lz-real-blog'),
	            'Grid Layout' => __('Grid Layout','lz-real-blog')
	        ),
	));

	// Contact Details
	$wp_customize->add_section( 'lz_real_blog_contact_details', array(
    	'title'      => __( 'Contact Details', 'lz-real-blog' ),
		'priority'   => null,
		'panel' => 'lz_real_blog_panel_id'
	) );

	$wp_customize->add_setting('lz_real_blog_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_real_blog_mail',array(
		'label'	=> __('Email Address','lz-real-blog'),
		'section'=> 'lz_real_blog_contact_details',
		'setting'=> 'lz_real_blog_mail',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('lz_real_blog_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_real_blog_location',array(
		'label'	=> __('Contact Number','lz-real-blog'),
		'section'=> 'lz_real_blog_contact_details',
		'setting'=> 'lz_real_blog_location',
		'type'=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('lz_real_blog_topbar_header',array(
		'title'	=> __('Social Icon Section','lz-real-blog'),
		'description'	=> __('Add Header Content here','lz-real-blog'),
		'priority'	=> null,
		'panel' => 'lz_real_blog_panel_id',
	));

	$wp_customize->add_setting('lz_real_blog_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_real_blog_facebook_url',array(
		'label'	=> __('Add Facebook link','lz-real-blog'),
		'section'	=> 'lz_real_blog_topbar_header',
		'setting'	=> 'lz_real_blog_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('lz_real_blog_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_real_blog_twitter_url',array(
		'label'	=> __('Add Twitter link','lz-real-blog'),
		'section'	=> 'lz_real_blog_topbar_header',
		'setting'	=> 'lz_real_blog_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('lz_real_blog_googleplus_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_real_blog_googleplus_url',array(
		'label'	=> __('Add Google Plus link','lz-real-blog'),
		'section'	=> 'lz_real_blog_topbar_header',
		'setting'	=> 'lz_real_blog_googleplus_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('lz_real_blog_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_real_blog_pinterest_url',array(
		'label'	=> __('Add Pinterest link','lz-real-blog'),
		'section'	=> 'lz_real_blog_topbar_header',
		'setting'	=> 'lz_real_blog_pinterest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('lz_real_blog_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_real_blog_linkedin_url',array(
		'label'	=> __('Add Linkedin link','lz-real-blog'),
		'section'	=> 'lz_real_blog_topbar_header',
		'setting'	=> 'lz_real_blog_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('lz_real_blog_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_real_blog_insta_url',array(
		'label'	=> __('Add Instagram link','lz-real-blog'),
		'section'	=> 'lz_real_blog_topbar_header',
		'setting'	=> 'lz_real_blog_insta_url',
		'type'	=> 'url'
	));


	//home page slider
	$wp_customize->add_section( 'lz_real_blog_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'lz-real-blog' ),
		'priority'   => null,
		'panel' => 'lz_real_blog_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'lz_real_blog_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'lz_real_blog_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'lz_real_blog_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'lz-real-blog' ),
			'section'  => 'lz_real_blog_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//TRENDING ITEMS
	$wp_customize->add_section('lz_real_blog_trending_items',array(
		'title'	=> __('Trending Items','lz-real-blog'),
		'description'=> __('This section will appear below the slider.','lz-real-blog'),
		'panel' => 'lz_real_blog_panel_id',
	));

	$wp_customize->add_setting('lz_real_blog_trending_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_real_blog_trending_title',array(
		'label'	=> __('Section Title','lz-real-blog'),
		'section'	=> 'lz_real_blog_trending_items',
		'setting'	=> 'lz_real_blog_trending_title',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cats[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('lz_real_blog_trendingcategory_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'lz_real_blog_sanitize_choices',
	));
	$wp_customize->add_control('lz_real_blog_trendingcategory_setting',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Select Category to display Latest Post','lz-real-blog'),
		'section' => 'lz_real_blog_trending_items',
	));

	//Footer
    $wp_customize->add_section( 'lz_real_blog_footer', array(
    	'title'      => __( 'Footer Text', 'lz-real-blog' ),
		'priority'   => null,
		'panel' => 'lz_real_blog_panel_id'
	) );

    $wp_customize->add_setting('lz_real_blog_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('lz_real_blog_footer_copy',array(
		'label'	=> __('Section Title','lz-real-blog'),
		'section'	=> 'lz_real_blog_footer',
		'setting'	=> 'lz_real_blog_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'lz_real_blog_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'lz_real_blog_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'lz_real_blog_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'lz-real-blog' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'lz-real-blog' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'lz_real_blog_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'lz_real_blog_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'lz_real_blog_customize_register' );

function lz_real_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

function lz_real_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function lz_real_blog_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function lz_real_blog_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class LZ_Real_Blog_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'LZ_Real_Blog_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new LZ_Real_Blog_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'LZ Real Blog Pro', 'lz-real-blog' ),
					'pro_text' => esc_html__( 'Go Pro','lz-real-blog' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/themes/premium-blog-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'lz-real-blog-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'lz-real-blog-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
LZ_Real_Blog_Customize::get_instance();