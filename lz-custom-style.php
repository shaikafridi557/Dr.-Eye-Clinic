<?php 

	$doctor_clinic_custom_style = '';

	// Logo Size
	$doctor_clinic_logo_top_padding = get_theme_mod('doctor_clinic_logo_top_padding');
	$doctor_clinic_logo_bottom_padding = get_theme_mod('doctor_clinic_logo_bottom_padding');
	$doctor_clinic_logo_left_padding = get_theme_mod('doctor_clinic_logo_left_padding');
	$doctor_clinic_logo_right_padding = get_theme_mod('doctor_clinic_logo_right_padding');

	if( $doctor_clinic_logo_top_padding != '' || $doctor_clinic_logo_bottom_padding != '' || $doctor_clinic_logo_left_padding != '' || $doctor_clinic_logo_right_padding != ''){
		$doctor_clinic_custom_style .=' .logo {';
			$doctor_clinic_custom_style .=' padding-top: '.esc_attr($doctor_clinic_logo_top_padding).'px; padding-bottom: '.esc_attr($doctor_clinic_logo_bottom_padding).'px; padding-left: '.esc_attr($doctor_clinic_logo_left_padding).'px; padding-right: '.esc_attr($doctor_clinic_logo_right_padding).'px;';
		$doctor_clinic_custom_style .=' }';
	}

	// service section padding
	$doctor_clinic_chooseus_section_padding = get_theme_mod('doctor_clinic_chooseus_section_padding');

	if( $doctor_clinic_chooseus_section_padding != ''){
		$doctor_clinic_custom_style .=' #choose_us {';
			$doctor_clinic_custom_style .=' padding-top: '.esc_attr($doctor_clinic_chooseus_section_padding).'px; padding-bottom: '.esc_attr($doctor_clinic_chooseus_section_padding).'px;';
		$doctor_clinic_custom_style .=' }';
	}

	// Site Title Font Size
	$doctor_clinic_site_title_font_size = get_theme_mod('doctor_clinic_site_title_font_size');
	if( $doctor_clinic_site_title_font_size != ''){
		$doctor_clinic_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$doctor_clinic_custom_style .=' font-size: '.esc_attr($doctor_clinic_site_title_font_size).'px;';
		$doctor_clinic_custom_style .=' }';
	}

	$doctor_clinic_site_title_color = get_theme_mod('doctor_clinic_site_title_color');

	if ( $doctor_clinic_site_title_color != '') {
	$doctor_clinic_custom_style .=' .logo h1 a, .logo p.site-title a {';
		$doctor_clinic_custom_style .=' color:'.esc_attr($doctor_clinic_site_title_color).';';
	$doctor_clinic_custom_style .=' }';
	}

	// Site Tagline Font Size
	$doctor_clinic_site_tagline_font_size = get_theme_mod('doctor_clinic_site_tagline_font_size');
	if( $doctor_clinic_site_tagline_font_size != ''){
		$doctor_clinic_custom_style .=' .logo p.site-description {';
			$doctor_clinic_custom_style .=' font-size: '.esc_attr($doctor_clinic_site_tagline_font_size).'px;';
		$doctor_clinic_custom_style .=' }';
	}

	$doctor_clinic_site_tagline_color = get_theme_mod('doctor_clinic_site_tagline_color');

	if ( $doctor_clinic_site_tagline_color != '') {
	$doctor_clinic_custom_style .=' p.site-description {';
		$doctor_clinic_custom_style .=' color:'.esc_attr($doctor_clinic_site_tagline_color).';';
	$doctor_clinic_custom_style .=' }';
	}

	//Social color
	$doctor_clinic_social_color = get_theme_mod('doctor_clinic_social_color');
	if ( $doctor_clinic_social_color != '') {
		$doctor_clinic_custom_style .=' .social-icons a i {';
			$doctor_clinic_custom_style .=' color:'.esc_attr($doctor_clinic_social_color).';';
		$doctor_clinic_custom_style .=' }';
	}

	$doctor_clinic_social_hover_color = get_theme_mod('doctor_clinic_social_hover_color');
	if ( $doctor_clinic_social_hover_color != '') {
		$doctor_clinic_custom_style .=' .social-icons a i:hover {';
			$doctor_clinic_custom_style .=' color:'.esc_attr($doctor_clinic_social_hover_color).';';
		$doctor_clinic_custom_style .=' }';
	}

	//Slider color
	$doctor_clinic_slider_color = get_theme_mod('doctor_clinic_slider_color');

	if ( $doctor_clinic_slider_color != '') {
		$doctor_clinic_custom_style .='  #slider .inner_carousel h1 {';
			$doctor_clinic_custom_style .=' color:'.esc_attr($doctor_clinic_slider_color).';';
		$doctor_clinic_custom_style .=' }';
	}

	//About color
	$doctor_clinic_about_color = get_theme_mod('doctor_clinic_about_color');

	if ( $doctor_clinic_about_color != '') {
	$doctor_clinic_custom_style .='  #choose_us h2 {';
		$doctor_clinic_custom_style .=' color:'.esc_attr($doctor_clinic_about_color).';';
	$doctor_clinic_custom_style .=' }';
	}

	// Copyright padding
	$doctor_clinic_copyright_padding = get_theme_mod('doctor_clinic_copyright_padding');

	if( $doctor_clinic_copyright_padding != ''){
		$doctor_clinic_custom_style .=' .site-info {';
			$doctor_clinic_custom_style .=' padding-top: '.esc_attr($doctor_clinic_copyright_padding).'px; padding-bottom: '.esc_attr($doctor_clinic_copyright_padding).'px;';
		$doctor_clinic_custom_style .=' }';
	}

	$doctor_clinic_slider_hide_show = get_theme_mod('doctor_clinic_slider_hide_show',false);
	if( $doctor_clinic_slider_hide_show == true){
		$doctor_clinic_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$doctor_clinic_custom_style .=' display:none;';
		$doctor_clinic_custom_style .=' }';
	}

	$doctor_clinic_copyright_color = get_theme_mod('doctor_clinic_copyright_color');

	if ( $doctor_clinic_copyright_color != '') {
	$doctor_clinic_custom_style .='  .site-info a p {';
		$doctor_clinic_custom_style .=' color:'.esc_attr($doctor_clinic_copyright_color).';';
	$doctor_clinic_custom_style .=' }';
	}

	$doctor_clinic_copyrightbg_color1 = get_theme_mod('doctor_clinic_copyrightbg_color1');
	$doctor_clinic_copyrightbg_color2 = get_theme_mod('doctor_clinic_copyrightbg_color2');

	if ( $doctor_clinic_copyrightbg_color1 != '') {
	$doctor_clinic_custom_style .='  .copyright {';
		$doctor_clinic_custom_style .='     background: linear-gradient(0deg, '.esc_attr($doctor_clinic_copyrightbg_color1).' 0%, '.esc_attr($doctor_clinic_copyrightbg_color2).' 100%);';
	$doctor_clinic_custom_style .=' }';
	}