<?php
/**
 * Heaven Theme Customizer
 *
 * @package Heaven
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function heaven_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';


    /* this class is added to create text area */

    class Heaven_Customize_Textarea_Control extends WP_Customize_Control {

        public $type = 'textarea';

        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
            </label>
            <?php
        }

    }

    /* text area class end */

    /**
     * Adds the individual sections, settings, and controls to the theme customizer
     */
//    $wp_customize->add_section(
//        'example_section_one',
//        array(
//            'title' => 'Example Settings',
//            'description' => 'This is a settings section.',
//            'priority' => 35,
//        )
//    );
//    
//    $wp_customize->add_setting(
//    'copyright_textbox',
//    array(
//        'default' => 'Default copyright text',
//    )
//);
//    $wp_customize->add_control(
//    'copyright_textbox',
//    array(
//        'label' => 'Copyright text',
//        'section' => 'example_section_one',
//        'type' => 'text',
//    )
//);
//    
//     $wp_customize->add_setting(
//    'copyright_textboxs',
//    array(
//        'default' => 0,
//    )
//);
//    $wp_customize->add_control(
//    'copyright_textboxs',
//    array(
//        'label' => 'Copyright text',
//        'section' => 'example_section_one',
//        'type' => 'checkbox',
//    )
//);
//                 /**
    /* Adds the individual sections, settings, and controls to the theme customizer
     */
//    $wp_customize->add_section(
//        'example_section_two',
//        array(
//            'title' => 'Example Settings Two',
//            'description' => 'This is a settings section.',
//            'priority' => 36,
//        )
//    );
//    
//    $wp_customize->add_setting(
//    'copyright_textboxa',
//    array(
//        'default' => 'Default copyright text',
//    )
//);
//    $wp_customize->add_control(
//    'copyright_textboxa',
//    array(
//        'label' => 'Copyright text',
//        'section' => 'example_section_two',
//        'type' => 'text',
//    )
//);
//    
//     $wp_customize->add_setting(
//    'copyright_textboxsa',
//    array(
//        'default' => 0,
//    )
//);
//    $wp_customize->add_control(
//    'copyright_textboxsa',
//    array(
//        'label' => 'Copyright text',
//        'section' => 'example_section_two',
//        'type' => 'checkbox',
//    )
//);
//    


    /*slider-image section start  */
    
    $wp_customize->add_section(
            'slider_image', array(
        'title' => 'Slider Image',
        'description' => 'This is a Slider Image section.',
        'priority' => 35,
            )
    );

    $wp_customize->add_setting('img_upload');

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'img_upload', array(
        'label' => 'Image Upload',
        'section' => 'slider_image',
        'settings' => 'img_upload'
            )
            )
    );

    /*slider-image section end  */
    
    /*featured-title-area section start  */

    $wp_customize->add_section(
            'featured_title_area', array(
        'title' => 'Featured Title',
        'description' => 'This is a Featured Title section.',
        'priority' => 36,
            )
    );

    $wp_customize->add_setting('heaven_featured_title', 
            array(
                    'sanitize_callback' => 'heaven_sanitize_text',
                    'trasnport' => 'postMessage',
        
    ));

    $wp_customize->add_control(
            new Heaven_Customize_Textarea_Control(
            $wp_customize, 'textarea', array(
        'label' => 'Featured Title Area',
        'section' => 'featured_title_area',
        'settings' => 'heaven_featured_title',
            )
            )
    );
    
    $wp_customize->add_setting(
    'background-setting',
    array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
    
    $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'background-setting',
        array(
            'label' => 'Background Setting',
            'section' => 'featured_title_area',
            'settings' => 'background-setting',
        )
    )
);
    
    $wp_customize->add_setting(
    'color-setting',
    array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
    
    $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'color-setting',
        array(
            'label' => 'Color Setting',
            'section' => 'featured_title_area',
            'settings' => 'color-setting',
        )
    )
);
    

    /*featured-title-area section end  */
    
    
   /*practice section start  */

    $wp_customize->add_section(
            'practice', array(
        'title' => 'practice',
        'description' => 'This is a practice section.',
        'priority' => 37,
            )
    );
    
    
    $wp_customize->add_setting(
    'radio_button',
    array(
        'default' => 'left',
    )
);
 
$wp_customize->add_control(
    'radio_button',
    array(
        'type' => 'radio',
        'label' => 'Radio Button',
        'section' => 'practice',
        'choices' => array(
            'left' => 'Left',
            'right' => 'Right',
            'center' => 'Center',
        ),
    )
);

$wp_customize->add_setting(
    'select_lists',
    array(
        'default' => 'wordpress',
    )
);
 
$wp_customize->add_control(
    'select_lists',
    array(
        'type' => 'select',
        'label' => 'Select Lists',
        'section' => 'practice',
        'choices' => array(
            'wordpress' => 'WordPress',
            'hamsters' => 'Hamsters',
            'jet-fuel' => 'Jet Fuel',
            'nuclear-energy' => 'Nuclear Energy',
        ),
    )
);

$wp_customize->add_setting(
    'drop_down',
    array(
        'sanitize_callback' => 'heaven_sanitize_integer',
    )
);
 
$wp_customize->add_control(
    'drop_down',
    array(
        'type' => 'dropdown-pages',
        'label' => 'Choose a page:',
        'section' => 'practice',
    )
);

$wp_customize->add_setting( 'file_upload' );
 
$wp_customize->add_control(
    new WP_Customize_Upload_Control(
        $wp_customize,
        'file-upload',
        array(
            'label' => 'File Upload',
            'section' => 'practice',
            'settings' => 'file_upload'
        )
    )
);
      
/*practice section end*/
    
    /* home widget settings section start */
        $wp_customize->add_section(
        'home_widget_settings',
        array(
            'title' => 'Home Widget Settings',
            'description' => 'This is a home widget settings section.',
            'priority' => 38,
        )
    );
             $wp_customize->add_setting(
    'home_widget_section_check',
    array(
        'default' => 0,
    )
);
    $wp_customize->add_control(
    'home_widget_section_check',
    array(
        'label' => 'Hide Widget Section',
        'section' => 'home_widget_settings',
        'type' => 'checkbox',
    )
);
        /* home widget settings section end */
    
    /*home-widget-one section start  */
    
    $wp_customize->add_section(
            'widget_one', array(
        'title' => 'Widget One',
        'description' => 'This is a Widget One section.',
        'priority' => 39,
            )
    );
    
    $wp_customize->add_setting('img_upload_one');

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'img_upload_one', array(
        'label' => 'Widget One Image',
        'section' => 'widget_one',
        'settings' => 'img_upload_one'
            )
            )
    );
    
    $wp_customize->add_setting(
    'textbox_one',
    array(
        'default' => 'Default copyright text',
        'sanitize_callback' => 'heaven_sanitize_text',
        'trasnport' => 'postMessage',
    )
);
    $wp_customize->add_control(
    'textbox_one',
    array(
        'label' => 'Widget One Title',
        'section' => 'widget_one',
        'type' => 'text',
    )
);
    
     $wp_customize->add_setting(
             'textarea_one',
             array (
                 'sanitize_callback' => 'heaven_sanitize_text',
                 'trasnport' => 'postMessage',
         
     ));

    $wp_customize->add_control(
            new Heaven_Customize_Textarea_Control(
            $wp_customize, 'textarea_one', array(
        'label' => 'Widget One Textarea',
        'section' => 'widget_one',
        'settings' => 'textarea_one'
            )
            )
    );
    
    /*home-widget-one section end  */
    
    /*home-widget-two section start  */
    
     $wp_customize->add_section(
            'widget_two', array(
        'title' => 'Widget two',
        'description' => 'This is a Widget two section.',
        'priority' => 40,
            )
    );
    
    $wp_customize->add_setting('img_upload_two');

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'img_upload_two', array(
        'label' => 'Widget two Image',
        'section' => 'widget_two',
        'settings' => 'img_upload_two'
            )
            )
    );
    
    $wp_customize->add_setting(
    'textbox_two',
    array(
        'default' => 'Default copyright text',
        'sanitize_callback' => 'heaven_sanitize_text',
        'trasnport' => 'postMessage',
    )
);
    $wp_customize->add_control(
    'textbox_two',
    array(
        'label' => 'Widget two Title',
        'section' => 'widget_two',
        'type' => 'text',
    )
);
    
     $wp_customize->add_setting(
             'textarea_two',
             array (
                 'sanitize_callback' => 'heaven_sanitize_text',
                 'trasnport' => 'postMessage',
         
     ));

    $wp_customize->add_control(
            new Heaven_Customize_Textarea_Control(
            $wp_customize, 'textarea_two', array(
        'label' => 'Widget Two Textarea',
        'section' => 'widget_two',
        'settings' => 'textarea_two'
            )
            )
    );
    
    
    /*home-widget-two section end  */
    
    /*home-widget-three section start  */
    
 $wp_customize->add_section(
            'widget_three', array(
        'title' => 'Widget Three',
        'description' => 'This is a Widget Three section.',
        'priority' => 41,
            )
    );
    
    $wp_customize->add_setting('img_upload_three');

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'img_upload_three', array(
        'label' => 'Widget Three Image',
        'section' => 'widget_three',
        'settings' => 'img_upload_three'
            )
            )
    );
    
    $wp_customize->add_setting(
    'textbox_three',
    array(
        'default' => 'Default copyright text',
        'sanitize_callback' => 'heaven_sanitize_text',
        'trasnport' => 'postMessage',
    )
);
    $wp_customize->add_control(
    'textbox_three',
    array(
        'label' => 'Widget three Title',
        'section' => 'widget_three',
        'type' => 'text',
    )
);
    
     $wp_customize->add_setting(
             'textarea_three',
             array (
                 'sanitize_callback' => 'heaven_sanitize_text',
                 'trasnport' => 'postMessage',
         
     ));

    $wp_customize->add_control(
            new Heaven_Customize_Textarea_Control(
            $wp_customize, 'textarea_three', array(
        'label' => 'Widget three Textarea',
        'section' => 'widget_three',
        'settings' => 'textarea_three'
            )
            )
    );
    
    
    /*home-widget-three section end  */
    
     /*home-widget-four section start  */
    
    $wp_customize->add_section(
            'widget_four', array(
        'title' => 'Widget Four',
        'description' => 'This is a Widget Four section.',
        'priority' => 42,
            )
    );
    
    $wp_customize->add_setting('img_upload_four');

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'img_upload_four', array(
        'label' => 'Widget Four Image',
        'section' => 'widget_four',
        'settings' => 'img_upload_four'
            )
            )
    );
    
    $wp_customize->add_setting(
    'textbox_four',
    array(
        'default' => 'Default copyright text',
        'sanitize_callback' => 'heaven_sanitize_text',
        'trasnport' => 'postMessage',
    )
);
    $wp_customize->add_control(
    'textbox_four',
    array(
        'label' => 'Widget Four Title',
        'section' => 'widget_four',
        'type' => 'text',
    )
);
    
     $wp_customize->add_setting(
             'textarea_four',
             array (
                 'sanitize_callback' => 'heaven_sanitize_text',
                 'trasnport' => 'postMessage',
         
     ));

    $wp_customize->add_control(
            new Heaven_Customize_Textarea_Control(
            $wp_customize, 'textarea_four', array(
        'label' => 'Widget Four Textarea',
        'section' => 'widget_four',
        'settings' => 'textarea_four'
            )
            )
    );
    
    /*home-widget-four section end  */

}

add_action('customize_register', 'heaven_customize_register');


/* sanitize function for radio button start*/

function heaven_sanitize_logo_placement( $input ) {
    $valid = array(
        'left' => 'Left',
        'right' => 'Right',
        'center' => 'Center',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/* sanitize function for radio button end*/

/* sanitize function for select lists start*/

function heaven_sanitize_powered_by( $input ) {
    $valid = array(
        'wordpress' => 'WordPress',
        'hamsters' => 'Hamsters',
        'jet-fuel' => 'Jet Fuel',
        'nuclear-energy' => 'Nuclear Energy',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/* sanitize function for select lists end*/

/* function for drop down start*/

function heaven_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
/* function for drop down end*/

/* sanitize function for check box start*/

function heaven_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}
/* sanitize function for check box end*/

/* sanitize function for Text Field start */

function heaven_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

/* sanitize function for Text end */

/* function for featured-title background-color and color  start*/
function heaven_featured_title_background_color() {
    
    $background_featured = get_theme_mod('background-setting');
    $color_featured = get_theme_mod('color-setting');
    // If we get this far, we have custom styles.
    ?>
     
    
    <style type="text/css" id="heaven-background-color">
    <?php if (get_theme_mod('background-setting')) { ?>
            .featured-title-area{
                background:<?php echo $background_featured ?>;
            }
    <?php } ?>
            
            <?php if (get_theme_mod('color-setting')) { ?>
            .featured-title-area h1{
                color:<?php echo $color_featured ?>;
            }
    <?php } ?>
            
            
    </style>

    <?php
}

add_action('wp_head', 'heaven_featured_title_background_color');

/* function for featured-title background-color and color  end*/

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

function heaven_customize_preview_js() {
    wp_enqueue_script('heaven_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20130408', true);
}

add_action('customize_preview_init', 'heaven_customize_preview_js');
