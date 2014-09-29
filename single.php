<?php
/**
 * The template for displaying all single posts.
 *
 * @package Heaven
 */
get_header();
?>

<div id="primary" class="content-area">
    <div class="container">
        <main id="main" class="site-main col-lg-8" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', 'single'); ?>

                <?php heaven_post_nav(); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number()) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
        <?php get_sidebar(); ?>
    </div>
</div><!-- #primary -->


<?php get_footer(); ?>