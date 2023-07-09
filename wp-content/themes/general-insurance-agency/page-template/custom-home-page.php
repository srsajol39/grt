<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'general_insurance_agency_above_slider' ); ?>

	<?php if( get_theme_mod('general_insurance_agency_slider_hide_show') != ''){ ?>
		<section id="slider">
			<div class="main-slider-inn">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			    <?php $general_insurance_agency_slider_pages = array();
			    for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'general_insurance_agency_slider'. $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $general_insurance_agency_slider_pages[] = $mod;
			        }
			    }
		      	if( !empty($general_insurance_agency_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $general_insurance_agency_slider_pages,
			          	'orderby' => 'post__in'
			        );
		        	$query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          	$i = 1;
		    	?>     
				    <div class="carousel-inner" role="listbox">
				      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
					        <div <?php if($i == 1){echo 'class="carousel-item fade-in-image active"';} else{ echo 'class="carousel-item fade-in-image"';}?>>
					        	<div class="row"> 
					        		<div class="col-lg-6 col-md-6 align-self-center">
						        		<div class="inner-carousel">
							            	<!-- <div class="contenbx"></div> -->
							              	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							              	<p class="mb-0"><?php $general_insurance_agency_excerpt = get_the_excerpt(); echo esc_html( general_insurance_agency_string_limit_words( $general_insurance_agency_excerpt,20 ) ); ?></p>
							              	<a href="<?php the_permalink(); ?>" class="read-btn"><span><?php esc_html_e('contact','general-insurance-agency'); ?></span><div class="icn"><i class="fa fa-phone" aria-hidden="true"></i></div></a>
					            		</div>
					            	</div>
					        		<div class="col-lg-6 col-md-6 sliderimg">	
				            			<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
									   
					        		</div> 
					        	 </div> 
					        </div>
				      	<?php $i++; endwhile; 
				      	wp_reset_postdata();?>
				    </div>
			    <?php else : ?>
			    	<div class="no-postfound"></div>
	      		<?php endif;
			    endif;?>
			    <div class="slider-arrow">
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Prev','general-insurance-agency' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Next','general-insurance-agency' );?></span>
			    </a>
			</div>
			</div>
			
		  	<div class="clearfix"></div>
		  	</div>
		</section>
	<?php }?>

	<?php do_action('general_insurance_agency_below_slider'); ?>

	<?php if(get_theme_mod('general_insurance_agency_slidertext') != '' ){?>

	<section id="banner-section">
		<div class="container"> 
			<div class="bannerbottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-126 ">
							<h1><?php echo esc_html(get_theme_mod('general_insurance_agency_bannertext')); ?></h1>
						</div>

						<div class="col-lg-5 col-md-5">
							<div class="callbx">
								<div class="row mr-0">
									<div class="col-lg-3">
										<div class="ph-icn">
											<i class="fa fa-phone" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-lg-9">
										<h2><?php echo esc_html(get_theme_mod('general_insurance_agency_bannercontacttext')); ?></h2>
										<a href="tel:<?php echo $general_insurance_agency_bannercontactnumber;?>"><h3><?php echo esc_html(get_theme_mod('general_insurance_agency_bannercontactnumber')); ?></h3></a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php }?>
	
	<?php do_action('general_insurance_agency_below_banner'); ?>

	<?php if(get_theme_mod('general_insurance_agency_section_title') != '' || get_theme_mod('general_insurance_agency_category_setting') != ''){?>

		<section id="service-section">
			<div class="container"> 
	        	<div class="service-head ">
					
					<?php if(get_theme_mod('general_insurance_agency_section_title') != ''){?>
			      		<h3><?php echo esc_html(get_theme_mod('general_insurance_agency_section_title')); ?></h3>
			      	<?php }?>
		       	</div>
		       	<div class="row">
			       	<?php $general_insurance_agency_catData1 = get_theme_mod('general_insurance_agency_category_setting');
					if($general_insurance_agency_catData1){ 
						$args = array(
							'post_type' => 'post',
							'category_name' => $general_insurance_agency_catData1,
				        );
				        $i=1; ?>
			    		<?php $query = new WP_Query( $args );
			          	if ( $query->have_posts() ) :
			        		while( $query->have_posts() ) : $query->the_post(); ?>
			        			<div class="col-lg-4 col-md-4">
				      				<div class="service-box mb-4">
				      					<div class="service-img">
				      						<?php the_post_thumbnail(); ?>
				      						<div class="service-content">
					            				<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
								              	<p><?php $general_insurance_agency_excerpt = get_the_excerpt(); echo esc_html( general_insurance_agency_string_limit_words( $general_insurance_agency_excerpt,15 ) ); ?></p>
								              	<div class="service-btn ">
								              		<a href="<?php the_permalink(); ?>" class="read-btn"><span><?php esc_html_e('Read More','general-insurance-agency'); ?></span><div class="icn"><i class="fa fa-angle-double-right"></i></div></a>
								              	</div>
				            				</div>
				      					</div>
			  							
				      				</div>
				      			</div>
			          		<?php $i++; endwhile; 
			          		wp_reset_postdata(); ?>
			          	<?php else : ?>
			              	<div class="no-postfound"></div>
			            <?php endif; ?>
			  		<?php }?>
			  	</div>
			</div>
		</section>

	<?php }?>

	<?php do_action('general_insurance_agency_below_service_section'); ?>

	<!-- <div class="container">
	  	<//?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content py-5">
	        	<//?php the_content(); ?>
	        </div>
	    <//?php endwhile; // end of the loop. ?>
	</div> -->
</main>

<?php get_footer(); ?>