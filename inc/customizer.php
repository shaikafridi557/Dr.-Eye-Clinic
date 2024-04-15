<?php
/**
 * doctor-clinic: Customizer
 *
 * @subpackage doctor-clinic
 * @since 1.0
 */

function doctor_clinic_customize_register( $wp_customize ) {

	$wp_customize->add_setting('doctor_clinic_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('doctor_clinic_logo_padding',array(
		'label' => __('Logo Padding','doctor-clinic'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('doctor_clinic_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'doctor_clinic_sanitize_float'
	));
	$wp_customize->add_control('doctor_clinic_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','doctor-clinic'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('doctor_clinic_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'doctor_clinic_sanitize_float'
	));
	$wp_customize->add_control('doctor_clinic_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','doctor-clinic'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('doctor_clinic_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'doctor_clinic_sanitize_float'
	));
	$wp_customize->add_control('doctor_clinic_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','doctor-clinic'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('doctor_clinic_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'doctor_clinic_sanitize_float'
	));
	$wp_customize->add_control('doctor_clinic_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','doctor-clinic'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('doctor_clinic_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'doctor_clinic_sanitize_checkbox'
	));
	$wp_customize->add_control('doctor_clinic_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','doctor-clinic'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('doctor_clinic_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'doctor_clinic_sanitize_float'
	));
	$wp_customize->add_control('doctor_clinic_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','doctor-clinic'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'doctor_clinic_site_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'doctor_clinic_site_title_color', array(
		'label' => 'Title Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('doctor_clinic_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'doctor_clinic_sanitize_checkbox'
	));
	$wp_customize->add_control('doctor_clinic_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','doctor-clinic'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('doctor_clinic_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'doctor_clinic_sanitize_float'
	));
	$wp_customize->add_control('doctor_clinic_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','doctor-clinic'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'doctor_clinic_site_tagline_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'doctor_clinic_site_tagline_color', array(
		'label' => 'Tagline Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'doctor_clinic_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'doctor-clinic' ),
	) );

	$wp_customize->add_section( 'doctor_clinic_theme_options_section', array(
    	'title'      => __( 'General Settings', 'doctor-clinic' ),
		'priority'   => 30,
		'panel' => 'doctor_clinic_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('doctor_clinic_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'doctor_clinic_sanitize_choices'	        
	));

	$wp_customize->add_control('doctor_clinic_theme_options',array(
		'type' => 'radio',
		'label' => __('Do you want this section','doctor-clinic'),
		'section' => 'doctor_clinic_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','doctor-clinic'),
		   'Right Sidebar' => __('Right Sidebar','doctor-clinic'),
		   'One Column' => __('One Column','doctor-clinic'),
		   'Three Columns' => __('Three Columns','doctor-clinic'),
		   'Four Columns' => __('Four Columns','doctor-clinic'),
		   'Grid Layout' => __('Grid Layout','doctor-clinic')
		),
	));

	// Top Bar
	$wp_customize->add_section( 'doctor_clinic_contact_details', array(
    	'title'      => __( 'Top Bar', 'doctor-clinic' ),
		'priority'   => null,
		'panel' => 'doctor_clinic_panel_id'
	) );

	$wp_customize->add_setting('doctor_clinic_hide_show_topbar',array(
    	'default' => false,
    	'sanitize_callback'	=> 'doctor_clinic_sanitize_checkbox'
	));
	$wp_customize->add_control('doctor_clinic_hide_show_topbar',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Topbar','doctor-clinic'),
   	'section' => 'doctor_clinic_contact_details',
	));

	$wp_customize->add_setting('doctor_clinic_call1',array(
		'default'=> '',
		'sanitize_callback'	=> 'doctor_clinic_sanitize_phone_number'
	));	
	$wp_customize->add_control('doctor_clinic_call1',array(
		'label'	=> __('Phone Number','doctor-clinic'),
		'section'=> 'doctor_clinic_contact_details',
		'setting'=> 'doctor_clinic_call1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('doctor_clinic_email1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('doctor_clinic_email1',array(
		'label'	=> __('Email Address','doctor-clinic'),
		'section'=> 'doctor_clinic_contact_details',
		'setting'=> 'doctor_clinic_email1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('doctor_clinic_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('doctor_clinic_btn_text',array(
		'label'	=> __('Add Button Text','doctor-clinic'),
		'section'	=> 'doctor_clinic_contact_details',
		'setting'	=> 'doctor_clinic_btn_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('doctor_clinic_btn_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('doctor_clinic_btn_link',array(
		'label'	=> __('Add Button Link','doctor-clinic'),
		'section'	=> 'doctor_clinic_contact_details',
		'setting'	=> 'doctor_clinic_btn_link',
		'type'	=> 'url'
	));

	//social icons
	$wp_customize->add_section( 'doctor_clinic_social', array(
    	'title'      => __( 'Social Icons', 'doctor-clinic' ),
		'priority'   => null,
		'panel' => 'doctor_clinic_panel_id'
	) );

	$wp_customize->add_setting('doctor_clinic_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('doctor_clinic_facebook_url',array(
		'label'	=> __('Add Facebook link','doctor-clinic'),
		'section'	=> 'doctor_clinic_social',
		'setting'	=> 'doctor_clinic_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('doctor_clinic_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('doctor_clinic_twitter_url',array(
		'label'	=> __('Add Twitter link','doctor-clinic'),
		'section'	=> 'doctor_clinic_social',
		'setting'	=> 'doctor_clinic_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('doctor_clinic_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('doctor_clinic_insta_url',array(
		'label'	=> __('Add Instagram link','doctor-clinic'),
		'section'	=> 'doctor_clinic_social',
		'setting'	=> 'doctor_clinic_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('doctor_clinic_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('doctor_clinic_linkedin_url',array(
		'label'	=> __('Add Linkedin link','doctor-clinic'),
		'section'	=> 'doctor_clinic_social',
		'setting'	=> 'doctor_clinic_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting( 'doctor_clinic_social_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'doctor_clinic_social_color', array(
		'label' => 'Icon Color',
		'section' => 'doctor_clinic_social',
	)));

	$wp_customize->add_setting( 'doctor_clinic_social_hover_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'doctor_clinic_social_hover_color', array(
		'label' => 'Icon Hover Color',
		'section' => 'doctor_clinic_social',
	)));
	
	//home page slider
	$wp_customize->add_section( 'doctor_clinic_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'doctor-clinic' ),
		'priority'   => null,
		'panel' => 'doctor_clinic_panel_id'
	) );

	$wp_customize->add_setting('doctor_clinic_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'doctor_clinic_sanitize_checkbox'
	));
	$wp_customize->add_control('doctor_clinic_slider_hide_show',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide slider','doctor-clinic'),
   	'description' => __('Image Size ( 1600px x 582px )','doctor-clinic'),
   	'section' => 'doctor_clinic_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'doctor_clinic_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'doctor_clinic_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'doctor_clinic_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'doctor-clinic' ),
			'section'  => 'doctor_clinic_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('doctor_clinic_slider_excerpt_length',array(
		'default' => '20',
		'sanitize_callback'	=> 'doctor_clinic_sanitize_float'
	));
	$wp_customize->add_control('doctor_clinic_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Slider Excerpt Length','doctor-clinic'),
		'section' => 'doctor_clinic_slider_section',
	));

	$wp_customize->add_setting( 'doctor_clinic_slider_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	   ));
	 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'doctor_clinic_slider_color', array(
		   'label' => 'Text Color',
		'section' => 'doctor_clinic_slider_section',
	   )));

	//About Section
	$wp_customize->add_section('doctor_clinic_choose_us',array(
		'title'	=> __('About Section','doctor-clinic'),
		'panel' => 'doctor_clinic_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$psts[]='Select';  
	foreach($post_list as $post){
		$psts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('doctor_clinic_post',array(
		'sanitize_callback' => 'doctor_clinic_sanitize_choices',
	));
	$wp_customize->add_control('doctor_clinic_post',array(
		'type'    => 'select',
		'choices' => $psts,
		'label' => __('Select post','doctor-clinic'),
		'section' => 'doctor_clinic_choose_us',
	));

	$wp_customize->add_setting('doctor_clinic_chooseus_section_padding',array(
       'default' => '',
       'sanitize_callback'	=> 'doctor_clinic_sanitize_float'
    ));
    $wp_customize->add_control('doctor_clinic_chooseus_section_padding',array(
       'type' => 'number',
       'label' => __('Section Top Bottom Padding','doctor-clinic'),
       'section' => 'doctor_clinic_choose_us',
    ));

	$wp_customize->add_setting( 'doctor_clinic_about_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'doctor_clinic_about_color', array(
		'label' => 'Text Color',
		'section' => 'doctor_clinic_choose_us',
	)));

	//Footer
	$wp_customize->add_section( 'doctor_clinic_footer', array(
    	'title'      => __( 'Footer Setting', 'doctor-clinic' ),
		'priority'   => null,
		'panel' => 'doctor_clinic_panel_id'
	) );

	$wp_customize->add_setting('doctor_clinic_show_back_totop',array(
 		'default' => true,
   	'sanitize_callback'	=> 'doctor_clinic_sanitize_checkbox'
	));
	$wp_customize->add_control('doctor_clinic_show_back_totop',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Back to Top','doctor-clinic'),
   	'section' => 'doctor_clinic_footer'
	));

   $wp_customize->add_setting('doctor_clinic_footer_copy',array(
		'default'	=> 'Doctor Clinic WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('doctor_clinic_footer_copy',array(
		'label'	=> __('Copyright Text','doctor-clinic'),
		'section'	=> 'doctor_clinic_footer',
		'setting'	=> 'doctor_clinic_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('doctor_clinic_footer_copylink',array(
		'default'	=> 'https://www.luzuk.com/themes/free-doctor-wordpress-theme/',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('doctor_clinic_footer_copylink',array(
		'label'	=> __('Copyright Link','doctor-clinic'),
		'section'	=> 'doctor_clinic_footer',
		'setting'	=> 'doctor_clinic_footer_copylink',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('doctor_clinic_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'doctor_clinic_sanitize_float'
 	));
 	$wp_customize->add_control('doctor_clinic_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','doctor-clinic'),
		'section' => 'doctor_clinic_footer',
	));

	$wp_customize->add_setting( 'doctor_clinic_copyright_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'doctor_clinic_copyright_color', array(
		'label' => 'Text Color',
		'section' => 'doctor_clinic_footer',
	)));

	$wp_customize->add_setting( 'doctor_clinic_copyrightbg_color1', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'doctor_clinic_copyrightbg_color1', array(
		'label' => 'Background Color 1',
		'section' => 'doctor_clinic_footer',
	)));

	$wp_customize->add_setting( 'doctor_clinic_copyrightbg_color2', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'doctor_clinic_copyrightbg_color2', array(
		'label' => 'Background Color 2',
		'section' => 'doctor_clinic_footer',
	)));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'doctor_clinic_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'doctor_clinic_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'doctor_clinic_customize_register' );

function doctor_clinic_customize_partial_blogname() {
	bloginfo( 'name' );
}

function doctor_clinic_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function doctor_clinic_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function doctor_clinic_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Doctor_Clinic_Customize {

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
		$manager->register_section_type( 'Doctor_Clinic_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Doctor_Clinic_Customize_Section_Pro(
				$manager,
				'doctor_clinic_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Doctor Clinic Pro', 'doctor-clinic' ),
					'pro_text' => esc_html__( 'Go Pro','doctor-clinic' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/product/clinic-wordpress-theme/' ),
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

		wp_enqueue_script( 'doctor-clinic-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'doctor-clinic-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Doctor_Clinic_Customize::get_instance();