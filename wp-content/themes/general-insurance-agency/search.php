<?php
/**
 * The template for displaying search results pages
 * 
 * @subpackage General Insurance Agency
 * @since 1.0
 * @version 0.1
 */

get_header(); ?>

<div class="container">
	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','general-insurance-agency'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'general-insurance-agency' ); ?></h1>
		<?php endif; ?>
	</header>

	<div class="content-area">
		<main id="skip-content" class="site-main" role="main">
			<?php $general_insurance_agency_layout_option = get_theme_mod( 'general_insurance_agency_archive_page_sidebar', 'One Column' );
		    if($general_insurance_agency_layout_option == 'Left Sidebar'){ ?>
		    	<div class="row">
			        <div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			        <div class="content_area col-lg-8 col-md-8">
				    	<section id="post_section">
				    		<?php
							if ( have_posts() ) :
								/* Start the Loop */ ?>
								<div class="row">
									<?php while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-4 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile; // End of the loop. ?>
								</div>

								<?php else : ?>

								<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'general-insurance-agency' ); ?></p>
								<?php
									get_search_form();

							endif;
							?>
							<div class="navigation">
				                <?php
				                    // Previous/next page navigation.
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'general-insurance-agency' ),
				                        'next_text'          => __( 'Next page', 'general-insurance-agency' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'general-insurance-agency' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<div class="clearfix"></div>
				</div>
			<?php }else if($general_insurance_agency_layout_option == 'Right Sidebar'){ ?>
				<div class="row">
					<div class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<?php
							if ( have_posts() ) :
								/* Start the Loop */ ?>
								<div class="row">
									<?php while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-4 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile; // End of the loop. ?>
								</div>

								<?php else : ?>

								<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'general-insurance-agency' ); ?></p>
								<?php
									get_search_form();

							endif;
							?>
							<div class="navigation">
				                <?php
				                    // Previous/next page navigation.
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'general-insurance-agency' ),
				                        'next_text'          => __( 'Next page', 'general-insurance-agency' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'general-insurance-agency' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-2'); ?>						
					</div>
				</div>
			<?php }else if($general_insurance_agency_layout_option == 'One Column'){ ?>
				<div class="content_area">
					<section id="post_section">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */ ?>
							<div class="row">
								<?php while ( have_posts() ) : the_post(); ?>
									
									<div class="col-lg-4 col-md-6">
										<?php get_template_part( 'template-parts/post/content' ); ?>
									</div>

								<?php endwhile; // End of the loop. ?>
							</div>

							<?php else : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'general-insurance-agency' ); ?></p>
							<?php
								get_search_form();

						endif;
						?>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'general-insurance-agency' ),
			                        'next_text'          => __( 'Next page', 'general-insurance-agency' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'general-insurance-agency' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</section>
				</div>
			<?php }else if($general_insurance_agency_layout_option == 'Grid Layout'){ ?>
		    	<div class="content_area">
					<section id="post_section">
						<?php
						if ( have_posts() ) :

							/* Start the Loop */?>
							<div class="row">
								<?php while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/grid-layout');

								endwhile; ?>
							</div>

						<?php else : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'general-insurance-agency' ); ?></p>
							<?php
								get_search_form();

						endif;
						?>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'general-insurance-agency' ),
			                        'next_text'          => __( 'Next page', 'general-insurance-agency' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'general-insurance-agency' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</section>
				</div>
			<?php } else { ?>
				<div class="row">
					<div class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<?php
							if ( have_posts() ) :
								/* Start the Loop */ ?>
								<div class="row">
									<?php while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-4 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile; // End of the loop. ?>
								</div>

								<?php else : ?>

								<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'general-insurance-agency' ); ?></p>
								<?php
									get_search_form();

							endif;
							?>
							<div class="navigation">
				                <?php
				                    // Previous/next page navigation.
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'general-insurance-agency' ),
				                        'next_text'          => __( 'Next page', 'general-insurance-agency' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'general-insurance-agency' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?>
					</div>
				</div>
			<?php } ?>
		</main>
	</div>
</div>

<?php get_footer();