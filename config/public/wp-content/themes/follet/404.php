<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Follet_Theme
 * @since   1.0
 */
?>
<?php get_header(); ?>

	<div id="primary" class="content-area <?php follet_content_span(); ?>">

		<main id="main-content" class="site-main-content" role="main">

			<section class="error-404 not-found">

				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'follet_theme' ); ?></h1>
				</header>

				<div class="page-content">

					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'follet_theme' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( follet_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

						<div class="widget widget_categories">
							<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'follet_theme' ); ?></h2>
							<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
							</ul>
						</div>

					<?php endif; ?>

					<?php
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'follet_theme' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div>

			</section>

		</main>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
