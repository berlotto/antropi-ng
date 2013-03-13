<?php
/**
 * Template Name: Front Page Magazine
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<div id="left-sidebar">
				<?php if ( is_active_sidebar( 'sidebar-front-left' ) ) : ?>
				<div class="first front-widgets">
					<?php dynamic_sidebar( 'sidebar-front-left' ); ?>
				</div><!-- .first -->
				<?php endif; ?>
			</div>

			<div id="right-container">

				<div id="top">
					<?php if ( is_active_sidebar( 'sidebar-front-top' ) ) : ?>
					<div class="first front-widgets">
						<?php dynamic_sidebar( 'sidebar-front-top' ); ?>
					</div><!-- .first -->
					<?php endif; ?>
				</div>

				<div id="left">
					<?php if ( is_active_sidebar( 'sidebar-front-half' ) ) : ?>
					<div class="first front-widgets">
						<?php dynamic_sidebar( 'sidebar-front-half' ); ?>
					</div><!-- .first -->
					<?php endif; ?>
				</div>
				<div id="right">
					<?php if ( is_active_sidebar( 'sidebar-front-right' ) ) : ?>
					<div class="first front-widgets">
						<?php dynamic_sidebar( 'sidebar-front-right' ); ?>
					</div><!-- .first -->
					<?php endif; ?>
				</div>

			</div>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>