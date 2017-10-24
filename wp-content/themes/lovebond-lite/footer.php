<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "page" div and all content after.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?>
<?php
$lovebond_lite_fb_url		= get_theme_mod('lovebond_lite_fbook_link', '#');
$lovebond_lite_tw_url		= get_theme_mod('lovebond_lite_twitter_link', '#');
$lovebond_lite_gplus_url	= get_theme_mod('lovebond_lite_gplus_link', '#');
$lovebond_lite_dribbble_url	= get_theme_mod('lovebond_lite_dribbble_link', '#');
$lovebond_lite_pinterest_url	= get_theme_mod('lovebond_lite_pinterest_link', '#');
$lovebond_lite_skype_url	= get_theme_mod('lovebond_lite_skype_link', '#');
$lovebond_lite_instagram_url	= get_theme_mod('lovebond_lite_instagram_link', '#');
$lovebond_lite_vk_url	= get_theme_mod('lovebond_lite_vk_link', '#');
$lovebond_lite_whatsapp_url	= get_theme_mod('lovebond_lite_whatsapp_link', '#');
?>
<!-- BEGIN: FOOTER -->
    <section id="footer-wrapper" class="front-sections">

    	<!-- BEGIN: CONTAINER -->
    	<div class="container">

    		<!-- BEGIN: INNER WRAPPER -->
	    	<div class="row footer-inner-wrapper">

	    		<div class="social-section-wrap">
	    			<?php if( $lovebond_lite_fb_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_fb_url); ?>"><i class="fa fa-facebook"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_tw_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_tw_url); ?>"><i class="fa fa-twitter"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_gplus_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_gplus_url); ?>"><i class="fa fa-google-plus"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_dribbble_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_dribbble_url); ?>"><i class="fa fa-dribbble"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_pinterest_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_pinterest_url); ?>"><i class="fa fa-pinterest"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_skype_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_skype_url); ?>"><i class="fa fa-skype"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_instagram_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_instagram_url); ?>"><i class="fa fa-instagram"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_vk_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_vk_url); ?>"><i class="fa fa-vk"></i></a>
					<?php } ?>
					<?php if( $lovebond_lite_whatsapp_url != '' ){ ?>
	    				<a href="<?php echo esc_url($lovebond_lite_whatsapp_url); ?>"><i class="fa fa-whatsapp"></i></a>
					<?php } ?>
	    		</div>

	    		<div class="credit-wrap">
	    			<span><?php printf( __( 'Lovebond Theme By %s | %s', 'lovebond-lite' ), '<a href="'.esc_url('https://sketchthemes.com').'"><strong>Sketchthemes</strong></a>', wp_kses_post( get_theme_mod( 'lovebond_lite_copyright', __('Proudly Powered by WordPress', 'lovebond-lite') ) ) ); ?></span>
	    		</div>

	    	</div>
	    	<!-- END: INNER WRAPPER -->

    	</div>
    	<!-- END: CONTAINER -->

    </section>
    <!-- END: FOOTER -->

    <!-- BEGAIN: SCROLL -->
    <div class='scrolltop'>
    	<div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
	</div>
	<!-- END: SCROLL -->

    <div class="tild-section"></div>
</div>
<?php wp_footer(); ?>
</body>
</html>