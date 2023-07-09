<?php
/**
 * The template for displaying comments
 * @subpackage General Insurance Agency
 * @since 1.0
 * @version 0.1
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$general_insurance_agency_comments_number = get_comments_number();
			if ( '1' === $general_insurance_agency_comments_number ) {
				/* translators: %s: post title */
				printf( esc_html__( 'One thought on &ldquo;%s&rdquo;', 'general-insurance-agency' ), esc_html(get_the_title()) );
			} else {
				printf(
				   	esc_html(
				      	/* translators: 1: number of comments, 2: post title */
				     	_nx( 
				          	'%1$s thought on &ldquo;%2$s&rdquo;',
				          	'%1$s thoughts on &ldquo;%2$s&rdquo;',
				          	$general_insurance_agency_comments_number,
				          	'comments title',
				          	'general-insurance-agency'
				       	)
				   	),
				   	esc_html (number_format_i18n( $general_insurance_agency_comments_number ) ),
				   	esc_html (get_the_title())
				);
			}
			?>
		</h2>

		<div class="pre">
			<?php the_comments_navigation(); ?>
		</div>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 100,
					'style'       => 'ol',
					'short_ping'  => true,
				) );
			?>
		</ol>
		
		<div class="nex">
			<?php the_comments_navigation(); ?>
		</div>

	<?php

	endif; 
	
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'general-insurance-agency' ); ?></p>
	<?php
	endif;

	comment_form();
	?>
</div>