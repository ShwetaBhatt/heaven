/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
        /*slider-image section start  */
        wp.customize( 'img-upload', function( value ) {
		value.bind( function( to ) {
			$( '.slider-image img' ).attr('src', to );
		} );
	} );
        /*slider-image section end  */
        
        /*featured-title-area section start  */
        
        wp.customize( 'heaven_featured_title', function( value ) {
		value.bind( function( to ) {
			$( '.featured-title-area h1' ).text( to );
		} );
	} );
        
        /*featured-title-area section end  */
        
        /*featured-title-area background and color start */
        
        wp.customize( 'background-setting', function( value ) {
		value.bind( function( to ) {
			$( '.featured-title-area' ).css('background-color', to );
		} );
	} );
        
        wp.customize( 'color-setting', function( value ) {
		value.bind( function( to ) {
			$( '.featured-title-area h1' ).css('color', to );
		} );
	} );
        
        /*featured-title-area background and color end */
        
        /*home-widget-one section start  */
        
        wp.customize( 'img_upload_one', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-one img' ).attr('src', to );
		} );
	} );
        
        wp.customize( 'textbox_one', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-one h1' ).text( to );
		} );
	} );
        
        wp.customize( 'textarea_one', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-one p' ).text( to );
		} );
	} );        
        
        /*home-widget-one section end  */
        
        /*home-widget-two section start  */
        
         wp.customize( 'img_upload_two', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-two img' ).attr('src', to );
		} );
	} );
        
         wp.customize( 'textbox_two', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-two h1' ).text( to );
		} );
	} );
        
        wp.customize( 'textarea_two', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-two p' ).text( to );
		} );
	} );   
        
        /*home-widget-two section end  */
        
        /*home-widget-three section start  */
        
         wp.customize( 'img_upload_three', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-one three' ).attr('src', to );
		} );
	} );
        
         wp.customize( 'textbox_three', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-three h1' ).text( to );
		} );
	} );
        
        wp.customize( 'textarea_three', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-three p' ).text( to );
		} );
	} );   
        
        /*home-widget-three section end  */
        
        
        /*home-widget-four section start  */
        
         wp.customize( 'img_upload_four', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-one four' ).attr('src', to );
		} );
	} );
        
         wp.customize( 'textbox_four', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-four h1' ).text( to );
		} );
	} );
        
        wp.customize( 'textarea_four', function( value ) {
		value.bind( function( to ) {
			$( '.home-featured-four p' ).text( to );
		} );
	} );   
        
        /*home-widget-four section end  */
        
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
} )( jQuery );
