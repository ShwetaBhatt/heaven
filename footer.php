<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Heaven
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-widget">
        <div class="container">
            <div clas="row">
                <div class="footer-widget-1 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <?php if (is_active_sidebar('footer-1')) { ?>

                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php } ?>
                </div> 
                
                <div class="footer-widget-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <?php if (is_active_sidebar('footer-2')) { ?>

                        <?php dynamic_sidebar('footer-2'); ?>
                    <?php } ?>
                </div> 

               
                <div class="footer-widget-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <?php if (is_active_sidebar('footer-3')) { ?>

                        <?php dynamic_sidebar('footer-3'); ?>
                    <?php } ?>
                </div> 


                

            </div>

        </div>
    </div>


    <div class="site-info">
        <a href="#">Webify by IdeaBox Themes</a>
        <!--<a href="<?php echo esc_url(__('http://wordpress.org/', 'heaven')); ?>"><?php printf(__('Proudly powered by %s', 'heaven'), 'WordPress'); ?></a>
        <span class="sep"> | </span>
        <?php printf(__('Theme: %1$s by %2$s.', 'heaven'), 'Heaven', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>'); ?>-->
    </div><!-- .site-info -->


</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div>
</body>
</html>
