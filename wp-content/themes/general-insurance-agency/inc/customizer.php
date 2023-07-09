<?php
/**
 * General Insurance Agency: Customizer
 *
 * @subpackage General Insurance Agency
 * @since 1.0
 */

use WPTRT\Customize\Section\General_Insurance_Agency_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( General_Insurance_Agency_Button::class );

	$manager->add_section(
		new General_Insurance_Agency_Button( $manager, 'general_insurance_agency_pro', [
			'title' => __( 'Insurance Agency Pro', 'general-insurance-agency' ),
			'priority' => 0,
			'button_text' => __( 'Go Pro', 'general-insurance-agency' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/insurance-agency-wordpress-theme', 'general-insurance-agency')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'general-insurance-agency-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'general-insurance-agency-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function general_insurance_agency_customize_register( $wp_customize ) {

	$wp_customize->add_setting('general_insurance_agency_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('general_insurance_agency_logo_padding',array(
		'label' => __('Logo Margin','general-insurance-agency'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('general_insurance_agency_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'general_insurance_agency_sanitize_float'
	));
	$wp_customize->add_control('general_insurance_agency_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','general-insurance-agency'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('general_insurance_agency_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'general_insurance_agency_sanitize_float'
	));
	$wp_customize->add_control('general_insurance_agency_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','general-insurance-agency'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('general_insurance_agency_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'general_insurance_agency_sanitize_float'
	));
	$wp_customize->add_control('general_insurance_agency_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','general-insurance-agency'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('general_insurance_agency_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'general_insurance_agency_sanitize_float'
 	));
 	$wp_customize->add_control('general_insurance_agency_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','general-insurance-agency'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('general_insurance_agency_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'general_insurance_agency_sanitize_checkbox'
	));
	$wp_customize->add_control('general_insurance_agency_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','general-insurance-agency'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting( 'general_insurance_agency_site_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'general_insurance_agency_site_title_color', array(
		'label' => 'Title Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('general_insurance_agency_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'general_insurance_agency_sanitize_checkbox'
	));
	$wp_customize->add_control('general_insurance_agency_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','general-insurance-agency'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting( 'general_insurance_agency_site_tagline_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'general_insurance_agency_site_tagline_color', array(
		'label' => 'Tagline Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'general_insurance_agency_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'general-insurance-agency' ),
		'description' => __( 'Description of what this panel does.', 'general-insurance-agency' ),
	) );

	$wp_customize->add_section( 'general_insurance_agency_theme_options_section', array(
    	'title'      => __( 'General Settings', 'general-insurance-agency' ),
		'priority'   => 30,
		'panel' => 'general_insurance_agency_panel_id'
	) );

	$wp_customize->add_setting('general_insurance_agency_theme_options',array(
		'default' => 'One Column',
		'sanitize_callback' => 'general_insurance_agency_sanitize_choices'
	));
	$wp_customize->add_control('general_insurance_agency_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','general-insurance-agency'),
		'section' => 'general_insurance_agency_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','general-insurance-agency'),
		   'Right Sidebar' => __('Right Sidebar','general-insurance-agency'),
		   'One Column' => __('One Column','general-insurance-agency'),
		   'Grid Layout' => __('Grid Layout','general-insurance-agency')
		),
	));

	$wp_customize->add_setting('general_insurance_agency_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'general_insurance_agency_sanitize_choices'
	));
	$wp_customize->add_control('general_insurance_agency_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','general-insurance-agency'),
        'section' => 'general_insurance_agency_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','general-insurance-agency'),
            'Right Sidebar' => __('Right Sidebar','general-insurance-agency'),
            'One Column' => __('One Column','general-insurance-agency')
        ),
	));

	$wp_customize->add_setting('general_insurance_agency_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'general_insurance_agency_sanitize_choices'
	));
	$wp_customize->add_control('general_insurance_agency_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','general-insurance-agency'),
        'section' => 'general_insurance_agency_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','general-insurance-agency'),
            'Right Sidebar' => __('Right Sidebar','general-insurance-agency'),
            'One Column' => __('One Column','general-insurance-agency')
        ),
	));

	$wp_customize->add_setting('general_insurance_agency_archive_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'general_insurance_agency_sanitize_choices'
	));
	$wp_customize->add_control('general_insurance_agency_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','general-insurance-agency'),
        'section' => 'general_insurance_agency_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','general-insurance-agency'),
            'Right Sidebar' => __('Right Sidebar','general-insurance-agency'),
            'One Column' => __('One Column','general-insurance-agency'),
            'Grid Layout' => __('Grid Layout','general-insurance-agency')
        ),
	));

	//home page header
	$wp_customize->add_section( 'general_insurance_agency_header_section' , array(
    	'title'    => __( 'Header Settings', 'general-insurance-agency' ),
		'priority' => null,
		'panel' => 'general_insurance_agency_panel_id'
	) );


	$wp_customize->add_setting('general_insurance_agency_headtext',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('general_insurance_agency_headtext',array(
		'label'	=> __('Text','general-insurance-agency'),
		'section' => 'general_insurance_agency_header_section',
		'type' => 'text'
	));


	$wp_customize->add_setting('general_insurance_agency_facebook_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('general_insurance_agency_facebook_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Facebook URL','general-insurance-agency'),
	   	'section' => 'general_insurance_agency_header_section',
	));

	$wp_customize->add_setting('general_insurance_agency_twitter_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('general_insurance_agency_twitter_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Twitter URL','general-insurance-agency'),
	   	'section' => 'general_insurance_agency_header_section',
	));

	$wp_customize->add_setting('general_insurance_agency_instagram_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('general_insurance_agency_instagram_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Instagram URL','general-insurance-agency'),
	   	'section' => 'general_insurance_agency_header_section',
	));

	$wp_customize->add_setting('general_insurance_agency_telegram_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('general_insurance_agency_telegram_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Telegram URL','general-insurance-agency'),
	   	'section' => 'general_insurance_agency_header_section',
	));

    $wp_customize->add_setting('general_insurance_agency_contact_btn_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('general_insurance_agency_contact_btn_text',array(
		'label'	=> __('Button Text','general-insurance-agency'),
		'section' => 'general_insurance_agency_header_section',
		'type' => 'text'
	));

    $wp_customize->add_setting('general_insurance_agency_contact_btn_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('general_insurance_agency_contact_btn_url',array(
		'label'	=> __('Button URL','general-insurance-agency'),
		'section' => 'general_insurance_agency_header_section',
		'type' => 'url'
	));

	$wp_customize->add_setting( 'general_insurance_agency_social_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'general_insurance_agency_social_color', array(
		'label' => 'Social Icon Color',
		'section' => 'general_insurance_agency_header_section',
	)));

	$wp_customize->add_setting( 'general_insurance_agency_socialbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'general_insurance_agency_socialbg_color', array(
		'label' => 'Social Icon Bg Color',
		'section' => 'general_insurance_agency_header_section',
	)));

	$wp_customize->add_setting( 'general_insurance_agency_hdrbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'general_insurance_agency_hdrbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'general_insurance_agency_header_section',
	)));

	$wp_customize->add_setting( 'general_insurance_agency_hdrbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'general_insurance_agency_hdrbtnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'general_insurance_agency_header_section',
	)));

	//home page slider
	$wp_customize->add_section( 'general_insurance_agency_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'general-insurance-agency' ),
		'priority' => null,
		'panel' => 'general_insurance_agency_panel_id'
	) );

	$wp_customize->add_setting('general_insurance_agency_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'general_insurance_agency_sanitize_checkbox'
	));
	$wp_customize->add_control('general_insurance_agency_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','general-insurance-agency'),
	   	'section' => 'general_insurance_agency_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'general_insurance_agency_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'general_insurance_agency_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'general_insurance_agency_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'general-insurance-agency' ),
			'description' => __('Image Size ( 600 x 650 )', 'general-insurance-agency' ),
			'section' => 'general_insurance_agency_slider_section',
			'type' => 'dropdown-pages'
		));
	}


	// banner Section
	$wp_customize->add_section('general_insurance_agency_banner_section',array(
		'title'	=> __('Banner Section','general-insurance-agency'),
		'description'=> __('<b>Note :</b> This section will appear below the Slider.','general-insurance-agency'),
		'panel' => 'general_insurance_agency_panel_id',
	));

 
    $wp_customize->add_setting('general_insurance_agency_bannertext',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('general_insurance_agency_bannertext',array(
		'label'	=> __('Text','general-insurance-agency'),
		'section' => 'general_insurance_agency_banner_section',
		'type' => 'text'
	));

	$wp_customize->add_setting('general_insurance_agency_bannercontacttext',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('general_insurance_agency_bannercontacttext',array(
		'label'	=> __('contact','general-insurance-agency'),
		'section' => 'general_insurance_agency_banner_section',
		'type' => 'text'
	));


	$wp_customize->add_setting('general_insurance_agency_bannercontactnumber',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('general_insurance_agency_bannercontactnumber',array(
		'label'	=> __('Contact Number','general-insurance-agency'),
		'section' => 'general_insurance_agency_banner_section',
		'type' => 'text'
	));


	//Service Section
	$wp_customize->add_section('general_insurance_agency_service_section',array(
		'title'	=> __('Service Section','general-insurance-agency'),
		'description'=> __('<b>Note :</b> This section will appear below the Banner.','general-insurance-agency'),
		'panel' => 'general_insurance_agency_panel_id',
	));

 
    $wp_customize->add_setting('general_insurance_agency_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('general_insurance_agency_section_title',array(
		'label'	=> __('Section Title','general-insurance-agency'),
		'section' => 'general_insurance_agency_service_section',
		'type' => 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('general_insurance_agency_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'general_insurance_agency_sanitize_choices',
	));
	$wp_customize->add_control('general_insurance_agency_category_setting',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','general-insurance-agency'),
		'section' => 'general_insurance_agency_service_section',
	));

	//Footer
    $wp_customize->add_section( 'general_insurance_agency_footer', array(
    	'title'  => __( 'Footer Text', 'general-insurance-agency' ),
		'priority' => null,
		'panel' => 'general_insurance_agency_panel_id'
	) );

	$wp_customize->add_setting('general_insurance_agency_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'general_insurance_agency_sanitize_checkbox'
    ));
    $wp_customize->add_control('general_insurance_agency_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','general-insurance-agency'),
       'section' => 'general_insurance_agency_footer'
    ));

    $wp_customize->add_setting('general_insurance_agency_footer_copy',array(
		'default' => 'General Insurance Agency WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('general_insurance_agency_footer_copy',array(
		'label'	=> __('Footer Text','general-insurance-agency'),
		'section' => 'general_insurance_agency_footer',
		'setting' => 'general_insurance_agency_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting('general_insurance_agency_footer_copylink',array(
		'default' => 'https://www.luzuk.com/themes/general-insurance-agency-wordpress-theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('general_insurance_agency_footer_copylink',array(
		'label'	=> __('Footer Link','general-insurance-agency'),
		'section' => 'general_insurance_agency_footer',
		'setting' => 'general_insurance_agency_footer_copylink',
		'type' => 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'general_insurance_agency_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'general_insurance_agency_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'general_insurance_agency_customize_register' );

function general_insurance_agency_customize_partial_blogname() {
	bloginfo( 'name' );
}

function general_insurance_agency_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if (class_exists('WP_Customize_Control')) {

   	class general_insurance_agency_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="general-insurance-agency-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="general-insurance-agency-icon-list clearfix">
	                <?php
	                $general_insurance_agency_font_awesome_icon_array = general_insurance_agency_font_awesome_icon_array();
	                foreach ($general_insurance_agency_font_awesome_icon_array as $general_insurance_agency_font_awesome_icon) {
	                   $icon_class = $this->value() == $general_insurance_agency_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($general_insurance_agency_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function general_insurance_agency_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', get_template_directory_uri().'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'general_insurance_agency_customizer_script' );