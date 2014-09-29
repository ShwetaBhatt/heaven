<?php
/**
 * @package Heaven
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
   
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php heaven_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
        
        <?php if ('' != get_the_post_thumbnail() && !is_search() ) { ?>
                        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( the_title_attribute( 'echo=0' ) ) ); ?>">
                                <?php the_post_thumbnail( 'homepage-thumb' ); ?>
                        </a>
                <?php } ?>
        
	<?php if ( is_search() || is_home() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
                    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'heaven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'heaven' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
                

	<footer class="entry-footer">
		<?php heaven_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
