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

	// Primary Color.
	wp.customize( 'ft_primary_color', function( value ) {
		value.bind( function( newval ) {
			$('.site-footer a, .entry-content a, .page-links a, #comments a').css('color', newval );
			$('input[type="reset"], input[type="submit"], input[type="submit"]').css('background', newval);
		} );
	} );

	// Secondary Color.
	wp.customize( 'ft_secondary_color', function( value ) {
		value.bind( function( newval ) {
			$('#site-navigation.main-navigation.toggled .menu-toggle span,#site-navigation .menu ul li a:hover, #site-navigation .menu ul li a:focus, #site-navigation .menu ul ul li a:hover, #site-navigation .menu ul ul li a:focus, #site-navigation .nav-menu ul li a:hover, #site-navigation .nav-menu ul li a:focus, #site-navigation .nav-menu ul ul li a:hover, #site-navigation .nav-menu ul ul li a:focus,#site-navigation .menu li a:hover, #site-navigation .nav-menu li a:hover ,#site-navigation .menu li.current-menu-item a, #site-navigation .menu li.current_page_item a, #site-navigation .nav-menu li.current-menu-item a, #site-navigation .nav-menu li.current_page_item a,.more-link,.more-link:hover,.loop-pagination a:hover, .loop-pagination span:hover,.loop-pagination a.current, .loop-pagination span.current,.entry-footer .post-categories li a:hover, .entry-footer .post-tags li a:hover,.post-navigation a:hover,.post-categories li a:hover, .post-tags li a:hover,#comments .comment .comment-wrapper .comment-meta .comment-time:hover, #comments .comment .comment-wrapper .comment-meta .comment-reply-link:hover, #comments .comment .comment-wrapper .comment-meta .comment-edit-link:hover,.widget a:hover,.widget #calendar_wrap a').css('color', newval );
			$('input[type="reset"]:hover, input[type="submit"]:hover, input[type="submit"]:hover,.entry-meta').css('background', newval);
		} );
	} );

} )( jQuery );
