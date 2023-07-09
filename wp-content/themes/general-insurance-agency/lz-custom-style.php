<?php 

	$general_insurance_agency_custom_style = '';

	// Logo Size
	$general_insurance_agency_logo_top_padding = get_theme_mod('general_insurance_agency_logo_top_padding');
	$general_insurance_agency_logo_bottom_padding = get_theme_mod('general_insurance_agency_logo_bottom_padding');
	$general_insurance_agency_logo_left_padding = get_theme_mod('general_insurance_agency_logo_left_padding');
	$general_insurance_agency_logo_right_padding = get_theme_mod('general_insurance_agency_logo_right_padding');

	if( $general_insurance_agency_logo_top_padding != '' || $general_insurance_agency_logo_bottom_padding != '' || $general_insurance_agency_logo_left_padding != '' || $general_insurance_agency_logo_right_padding != ''){
		$general_insurance_agency_custom_style .=' .logo {';
			$general_insurance_agency_custom_style .=' padding-top: '.esc_attr($general_insurance_agency_logo_top_padding).'px; padding-bottom: '.esc_attr($general_insurance_agency_logo_bottom_padding).'px; padding-left: '.esc_attr($general_insurance_agency_logo_left_padding).'px; padding-right: '.esc_attr($general_insurance_agency_logo_right_padding).'px;';
		$general_insurance_agency_custom_style .=' }';
	}

	//site title 
	$general_insurance_agency_site_title_color = get_theme_mod('general_insurance_agency_site_title_color');
	if ( $general_insurance_agency_site_title_color != '') {
		$general_insurance_agency_custom_style .=' h1.site-title a, p.site-title a {';
			$general_insurance_agency_custom_style .=' color:'.esc_attr($general_insurance_agency_site_title_color).';';
		$general_insurance_agency_custom_style .=' }';
	}

	//site tagline
	$general_insurance_agency_site_tagline_color = get_theme_mod('general_insurance_agency_site_tagline_color');
	if ( $general_insurance_agency_site_tagline_color != '') {
		$general_insurance_agency_custom_style .=' p.site-description {';
			$general_insurance_agency_custom_style .=' color:'.esc_attr($general_insurance_agency_site_tagline_color).';';
		$general_insurance_agency_custom_style .=' }';
	}

	//Header color
	$general_insurance_agency_social_color = get_theme_mod('general_insurance_agency_social_color');
	$general_insurance_agency_socialbg_color = get_theme_mod('general_insurance_agency_socialbg_color');
	if ( $general_insurance_agency_social_color != '') {
		$general_insurance_agency_custom_style .=' #header .social-icons a {';
			$general_insurance_agency_custom_style .=' color:'.esc_attr($general_insurance_agency_social_color).'; background-color:'.esc_attr($general_insurance_agency_socialbg_color).';';
		$general_insurance_agency_custom_style .=' }';
	}

	$general_insurance_agency_hdrbtn_color = get_theme_mod('general_insurance_agency_hdrbtn_color');
	$general_insurance_agency_hdrbtnbg_color = get_theme_mod('general_insurance_agency_hdrbtnbg_color');
	if ( $general_insurance_agency_hdrbtn_color != '') {
		$general_insurance_agency_custom_style .=' .contact-btn a {';
			$general_insurance_agency_custom_style .=' color:'.esc_attr($general_insurance_agency_hdrbtn_color).'; background-color:'.esc_attr($general_insurance_agency_hdrbtnbg_color).';';
		$general_insurance_agency_custom_style .=' }';
	}