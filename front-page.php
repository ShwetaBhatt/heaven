

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();
?>


<div class="featured-area">
    <div class="container">
        <!--<?php if (get_theme_mod('copyright_textbox')) { ?>
            <?php echo get_theme_mod('copyright_textbox'); ?>
        <?php } ?>-->


        <div class="row">
            <div class="slider-block col-lg-12">
                <div class="slider-image">

                    <?php if (get_theme_mod('img_upload')) { ?>
                        <img src=" <?php echo get_theme_mod('img_upload'); ?>" />
                    <?php } else { ?>
                        <h1><?php _e('Slider Image', 'heaven'); ?> </h1>
                    <?php } ?>




                    <!--    <?php if (is_active_sidebar('home-featured')) { ?>                               
                        <?php dynamic_sidebar('home-featured'); ?>
                    <?php } ?> -->

<!--                    <img src="<?php echo get_template_directory_uri(); ?> /images/slider3.jpg" />-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="Service-area">
    <div class="container">
        <div class="row">
            <div class="featured-title-area col-lg-12 clearfix">

                <?php if (get_theme_mod('heaven_featured_title')) { ?>
                    <h1><?php echo get_theme_mod('heaven_featured_title'); ?> </h1>
                <?php } else { ?>
                    <h1><?php _e('Service Title', 'heaven'); ?> </h1>
                <?php } ?>

                <!-- <?php if (is_active_sidebar('service-title')) { ?>
                    <?php dynamic_sidebar('service-title'); ?>
                <?php } ?>-->

                <!--                <h3 class="featured-title">IdeaBox Themes are the most easy to use WordPress themes. Our unique live customization and preview features will make your life easy.</h3>-->
            </div>

        </div>



    </div>
</div>

<div class="practice">
    <div class="row">

        <div class="radio_button col-lg-3">
            <?php if (get_theme_mod('radio_button')) { ?>
                <h1><?php echo get_theme_mod('radio_button'); ?> </h1>
            <?php } else { ?>
                <h1><?php _e('Demo Radio Button', 'heaven'); ?> </h1>
            <?php } ?>
        </div>

        <div class="select_lists col-lg-3">
            <?php if (get_theme_mod('select_lists')) { ?>
                <h1><?php echo get_theme_mod('select_lists'); ?> </h1>
            <?php } else { ?>
                <h1><?php _e('Demo select lists', 'heaven'); ?> </h1>
            <?php } ?>
        </div>

        <div class="drop_down col-lg-3">
            <?php if (get_theme_mod('drop_down')) { ?>
                <h1><?php echo get_theme_mod('drop_down'); ?> </h1>
            <?php } else { ?>
                <h1><?php _e('Demo drop down', 'heaven'); ?> </h1>
            <?php } ?>
        </div>
        
        
        <div class="file_upload col-lg-3">
            <?php if (get_theme_mod('file_upload')) { ?>
                <h1><?php echo get_theme_mod('file_upload'); ?> </h1>
            <?php } else { ?>
                <h1><?php _e('Demo file upload', 'heaven'); ?> </h1>
            <?php } ?>
        </div>

    </div>
    
 

</div>

<?php if (!get_theme_mod('home_widget_section_check')) { ?>
    <div class="widget-area">
        <div class="container">
            <div class="row">
                <div class="home-featured-one col-lg-3 col-md-3 col-sm-6 col-xs-12 clearfix">
                    <div class="featured">

                        <div class="featured-image">
                            <?php if (get_theme_mod('img_upload_one')) { ?>
                                <img src=" <?php echo get_theme_mod('img_upload_one'); ?> "/>
                            <?php } else { ?>

                                <h1><?php _e('featured one image', 'heaven'); ?> </h1>
                            <?php } ?>

                            <!-- <?php if (is_active_sidebar('home-widget-1')) { ?>                       
                                <?php dynamic_sidebar('home-widget-1'); ?>
                            <?php } ?>-->
     <!--                    <img src="<?php echo get_template_directory_uri(); ?>/images/feature1.jpg" />-->
                        </div>

                        <div class="featured-content">

                            <div class="featured-content-title">
                                <?php if (get_theme_mod('textbox_one')) { ?>
                                    <h1>  <?php echo get_theme_mod('textbox_one'); ?> </h1>
                                <?php } else { ?>
                                    <h1><?php _e('featured one title', 'heaven'); ?> </h1>
                                <?php } ?>
                            </div>

                            <div class="featured-content-description">
                                <?php if (get_theme_mod('textarea_one')) { ?>
                                    <p> <?php echo get_theme_mod('textarea_one'); ?> </p>
                                <?php } else { ?>
                                    <h1><?php _e('featured one description', 'heaven'); ?> </h1>
                                <?php } ?>
                            </div>

                        </div>

                    </div>
                </div>



                <div class="home-featured-two col-lg-3 col-md-3 col-sm-6 col-xs-12 clearfix">

                    <div class="featured">

                        <div class="featured-image">
                            <?php if (get_theme_mod('img_upload_two')) { ?>
                                <img src=" <?php echo get_theme_mod('img_upload_two'); ?> "/>
                            <?php } else { ?>
                                <h1><?php _e('featured two image', 'heaven'); ?> </h1>
                            <?php } ?>

                            <!--<?php if (is_active_sidebar('home-widget-2')) { ?>
                                <?php dynamic_sidebar('home-widget-2'); ?>
                            <?php } ?>-->

        <!--                    <img src="<?php echo get_template_directory_uri(); ?>/images/feature2.jpg" />-->


                        </div>

                        <div class="featured-content">
                            <div class="featured-content-title">
                                <?php if (get_theme_mod('textbox_two')) { ?>
                                    <h1> <?php echo get_theme_mod('textbox_two'); ?> </h1>
                                <?php } else { ?>
                                    <h1><?php _e('featured two title', 'heaven'); ?> </h1>
                                <?php } ?>
                            </div>

                            <div class="featured-content-description">
                                <?php if (get_theme_mod('textarea_two')) { ?>
                                    <p>  <?php echo get_theme_mod('textarea_two'); ?> </p>
                                <?php } else { ?>
                                    <h1><?php _e('featured two description', 'heaven'); ?> </h1>
                                <?php } ?>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="home-featured-three col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <div class="featured">

                        <div class="featured-image">

                            <?php if (get_theme_mod('img_upload_three')) { ?>
                                <img src=" <?php echo get_theme_mod('img_upload_three'); ?> "/>
                            <?php } else { ?>
                                <h1><?php _e('featured three image', 'heaven'); ?> </h1>
                            <?php } ?>

                            <!--   <?php if (is_active_sidebar('home-widget-3')) { ?>
                                <?php dynamic_sidebar('home-widget-3'); ?>
                            <?php } ?> -->

        <!--                    <img src="<?php echo get_template_directory_uri(); ?>/images/feature3.jpg" />-->

                        </div>

                        <div class="featured-content">

                            <div class="featured-content-title">
                                <?php if (get_theme_mod('textbox_three')) { ?>
                                    <h1> <?php echo get_theme_mod('textbox_three'); ?> </h1>
                                <?php } else { ?>
                                    <h1><?php _e('featured three title', 'heaven'); ?> </h1>
                                <?php } ?>
                            </div>

                            <div class="featured-content-description">
                                <?php if (get_theme_mod('textarea_three')) { ?>
                                    <p>    <?php echo get_theme_mod('textarea_three'); ?> </p>
                                <?php } else { ?>
                                    <h1><?php _e('featured three description', 'heaven'); ?> </h1>
                                <?php } ?>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="home-featured-four col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <div class="featured">

                        <div class="featured-image">

                            <?php if (get_theme_mod('img_upload_four')) { ?>
                                <img src=" <?php echo get_theme_mod('img_upload_four'); ?> "/>
                            <?php } else { ?>
                                <h1><?php _e('featured four image', 'heaven'); ?> </h1>
                            <?php } ?>

                            <!-- <?php if (is_active_sidebar('home-widget-4')) { ?>
                                <?php dynamic_sidebar('home-widget-4'); ?>
                            <?php } ?> -->

        <!--                    <img src="<?php echo get_template_directory_uri(); ?>/images/feature4.jpg" />-->
                        </div>

                        <div class="featured-content">

                            <div class="featured-content-title">
                                <?php if (get_theme_mod('textbox_four')) { ?>
                                    <h1>  <?php echo get_theme_mod('textbox_four'); ?> </h1>
                                <?php } else { ?>
                                    <h1><?php _e('featured four title', 'heaven'); ?> </h1>
                                <?php } ?>
                            </div>

                            <div class="featured-content-description">
                                <?php if (get_theme_mod('textarea_four')) { ?>
                                    <p>  <?php echo get_theme_mod('textarea_four'); ?> </p>
                                <?php } else { ?>
                                    <h1><?php _e('featured four description', 'heaven'); ?> </h1>
                                <?php } ?>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div><!-- /.container -->

    </div>

<?php } ?>



<?php get_footer(); ?>


