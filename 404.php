<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Heaven
 */

get_header(); ?>

	<div id="primary" class="content-area">
            <div class="container">
		<main id="main" class="site-main col-lg-8" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'heaven' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'heaven' ); ?></p>

					<?php get_search_form(); ?>

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
                <?php get_sidebar(); ?>
            </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
