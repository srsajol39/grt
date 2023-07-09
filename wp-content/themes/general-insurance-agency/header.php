<?php
/**
 * The header for our theme
 *
 * @subpackage General Insurance Agency
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'general-insurance-agency' ); ?></a>

<div id="header">
	<div class="container">
		<div class="row ">
			<div class="col-lg-3 col-md-3 pd-0">
				<div class="logo text-md-left text-center">
					<?php if ( has_custom_logo() ) : ?>
	            		<?php the_custom_logo(); ?>
		            <?php endif; ?>
	             	<?php if (get_theme_mod('general_insurance_agency_show_site_title',true)) {?>
	          			<?php $general_insurance_agency_blog_info = get_bloginfo( 'name' ); ?>
		                <?php if ( ! empty( $general_insurance_agency_blog_info ) ) : ?>
		                  	<?php if ( is_front_page() && is_home() ) : ?>
		                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                  	<?php else : ?>
	                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	                  		<?php endif; ?>
		                <?php endif; ?>
		            <?php }?>
		            <?php if (get_theme_mod('general_insurance_agency_show_tagline',true)) {?>
		                <?php $general_insurance_agency_description = get_bloginfo( 'description', 'display' );
	                  	if ( $general_insurance_agency_description || is_customize_preview() ) : ?>
		                  	<p class="site-description"><?php echo esc_html($general_insurance_agency_description); ?></p>
	              		<?php endif; ?>
	          		<?php }?>
				</div>
			</div>

			<div class="col-lg-9 col-md-9 main-bx pd-0">

				<div class="headtop row">

					<div class="col-lg-8 col-md-8 ">
						<p><?php echo esc_html(get_theme_mod('general_insurance_agency_headtext')); ?></p>
					</div>

					<div class="col-lg-4 col-md-4 ">
						<?php if(get_theme_mod('general_insurance_agency_facebook_url') != '' || get_theme_mod('general_insurance_agency_twitter_url') != '' || get_theme_mod('general_insurance_agency_instagram_url') != '' || get_theme_mod('general_insurance_agency_telegram_url') != ''){ ?>
							<div class="phone">
								<div class="social-icons ">
									<?php if(get_theme_mod('general_insurance_agency_facebook_url') != ''){?>
										<a href="<?php echo esc_url(get_theme_mod('general_insurance_agency_facebook_url')) ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'general_insurance_agency'); ?></span></a>
									<?php }?>
									<?php if(get_theme_mod('general_insurance_agency_twitter_url') != ''){?>
										<a href="<?php echo esc_url(get_theme_mod('general_insurance_agency_twitter_url')) ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'general_insurance_agency'); ?></span></a>
									<?php }?>
									<?php if(get_theme_mod('general_insurance_agency_instagram_url') != ''){?>
										<a href="<?php echo esc_url(get_theme_mod('general_insurance_agency_instagram_url')) ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'general_insurance_agency'); ?></span></a>
									<?php }?>
									<?php if(get_theme_mod('general_insurance_agency_telegram_url') != ''){?>
										<a href="<?php echo esc_url(get_theme_mod('general_insurance_agency_telegram_url')) ?>"><i class="fab fa-telegram"></i><span class="screen-reader-text"><?php echo esc_html('Telegram', 'general_insurance_agency'); ?></span></a>
									<?php }?>
								</div>
							</div>
						<?php }?>
					</div>

				</div>

				<div class="headdown">
					<div class="menu-bar row mrg-0 ">
						<div class="toggle-menu responsive-menu text-right">
							<?php if(has_nav_menu('primary')){ ?>
				            	<button onclick="general_insurance_agency_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','general-insurance-agency'); ?></span></button>
				            <?php }?>
				        </div>
				        <div class=" col-md-10 col-sm-10 ">
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu " role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'general-insurance-agency' ); ?>">
				                  	<?php if(has_nav_menu('primary')){
					                    wp_nav_menu( array( 
											'theme_location' => 'primary',
											'container_class' => 'main-menu-navigation clearfix' ,
											'menu_class' => 'clearfix',
											'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
											'fallback_cb' => 'wp_page_menu',
					                    ) ); 
				                  	} ?>
				                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="general_insurance_agency_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','general-insurance-agency'); ?></span></a>

				                  	<?php if(get_theme_mod('general_insurance_agency_contact_btn_url') != '' || get_theme_mod('general_insurance_agency_contact_btn_text') != '') {?>
				                  	<div class=" mob-y">
								  		<div class=" contact-btn">
								  			<a href="<?php echo esc_url(get_theme_mod('general_insurance_agency_contact_btn_url')); ?>" target="_blank"><span><?php echo esc_html(get_theme_mod('general_insurance_agency_contact_btn_text')); ?></span></a>
								  		</div>
								  	</div>
								  	<?php }?>
				                </nav>
				            </div>
				        </div>
			            <div class=" col-md-2 col-sm-2 pd-0">
			            <?php if(get_theme_mod('general_insurance_agency_contact_btn_url') != '' || get_theme_mod('general_insurance_agency_contact_btn_text') != '') {?>
				            <div class=" mob-n">
						  		<div class=" contact-btn">
						  			<a href="<?php echo esc_url(get_theme_mod('general_insurance_agency_contact_btn_url')); ?>" target="_blank"><span><?php echo esc_html(get_theme_mod('general_insurance_agency_contact_btn_text')); ?></span></a>
						  		</div>
						  	</div>
					  	<?php }?>
					  </div>
			        </div>
				</div>
		       <div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>