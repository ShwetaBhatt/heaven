<?php
/**
 * @package Heaven
 */
?>

   
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ('' != get_the_post_thumbnail() && !is_search()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(the_title_attribute('echo=0'))); ?>">
                    <?php the_post_thumbnail('singlepage-thumb'); ?>
                </a>
            <?php } ?>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                <div class="entry-meta">
                    <?php heaven_posted_on(); ?>
                </div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'heaven'),
                    'after' => '</div>',
                ));
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php heaven_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </article><!-- #post-## -->
 