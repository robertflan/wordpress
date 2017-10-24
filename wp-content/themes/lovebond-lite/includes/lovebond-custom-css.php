<?php
/**
 * The Sketch Custom Template to add custom code (PHP/CSS)
 * @package WordPress
 * @SketchThemes
 */
?>
<?php
global $post;

$_primary_color		= esc_attr(get_theme_mod('lovebond_lite_pri_color','#ED2437'));
$_secondary_color	= '#131b28';


$_skt_header_bgimg 	= get_header_image();

$rgb=array();
$rgb = lovebond_lite_Hex2RGB($_primary_color);
$R = $rgb['red'];
$G = $rgb['green'];
$B = $rgb['blue'];
$_primary_rgba_color = "rgba(". $R .",". $G .",". $B .",.7)";
?>
<style type="text/css">
/*FONT COLOR*/
#skenav .max-menu li.current a,
#skenav ul li a:hover,
.strip-icon i,.iconbox-icon i:hover{color:<?php echo $_primary_color; ?>;}
/*PRIMARY BACKGROUND*/
.search-bar input[type="text"],
.horizontal-style::before,
.horizontal-style::after,.iconbox-icon i:hover .featured-style{background-color:<?php echo $_primary_color; ?>; }
/*SECONDARY BACKGROUND COLOR*/
#skenav ul ul,
.iconbox-icon i:hover,
.horizontal-style{background-color: <?php echo $_secondary_color; ?>; }
/*HOVER COLOR*/
#skenav ul.max-menu ul.sub-menu li:hover a { background-color: <?php echo $_primary_color; ?>; color:#000000; }
/*BACKGROUND COLOR*/
#skenav ul.max-menu ul.sub-menu li.current a { background-color: <?php echo $_secondary_color; ?>; }

/*INNERPAGE HEADERIMAGE*/
header#sktwed-blogpage {background: #25292c url("<?php echo $_skt_header_bgimg; ?>") no-repeat fixed 100% -50px / 100% auto; }
@media (max-width: 767px) {
	header#sktwed-blogpage {background: #25292c url("<?php echo $_skt_header_bgimg; ?>") no-repeat fixed 100% 0 / 100% auto; }
}

.footer-social { border: 1px solid #FFFFFF; }
.footer-social:hover { background: none repeat scroll 0 0 <?php echo $_secondary_color; ?>; border: 1px solid <?php echo $_secondary_color; ?>; }
.footer-social:hover a { color: #FFFFFF; }

#footer_bottom .copyright p, #footer_bottom .refrence_link { color: <?php echo $_primary_color; ?>; }
.skt-iconbox.iconbox-top .iconbox-content h4:after {background-color: <?php echo $_primary_color; ?>;}
.skepost .team .black { color: <?php echo $_primary_color; ?>; }
.skepage .team .team-overlay { background-color: <?php echo $_primary_color; ?>; }
.team-social:hover {background: none repeat scroll 0 0 <?php echo $_secondary_color; ?>; border: 1px solid <?php echo $_secondary_color; ?>; }
#skenav .max-menu li.current a { background-color: ; }
.sketch-theme-black .sketch-close {background-color: <?php echo $_primary_color; ?>; }
.prot_text_wrap h2 {color: <?php echo $_primary_color; ?>; margin-bottom: 27px;}


#wp-calendar tbody a { background: none repeat scroll 0 0 <?php echo $_secondary_color; ?>; color: #ffffff;}
.wp-calender-head {background-color: <?php echo $_secondary_color; ?>; }

.reply a:hover, a.comment-edit-link:hover, #cancel-comment-reply-link{color: <?php echo $_secondary_color; ?>;}

#sidebar li.ske-container #wp-calendar .wp-calender-head a:hover,.skt_price_table .price_table_inner .price_button a{color: <?php echo $_secondary_color; ?>; }
#wp-calendar.skt-wp-calendar tbody tr td:last-child,#wp-calendar.skt-wp-calendar tbody tr th:last-child {color:<?php echo $_primary_color; ?>;}

/* BUTTONS STYLE */
a.large-button:hover, a.small-button:hover, a.medium-button:hover,.skt_price_table .price_table_inner .price_button a:hover { background: none repeat scroll 0 0 <?php echo $_secondary_color; ?> !important; color: #FFFFFF !important; }


/* BLOG STYLE */
.post-calendar {background-color: <?php echo $_primary_color; ?>; }
.skt_blog_title { color: <?php echo $_primary_color; ?>; margin-bottom: 9px; }
.skt_blog_middle .btn_readmore,.skt_price_table .price_in_table .value {color: <?php echo $_secondary_color; ?>; }
.news_blog .news-details .skt_blog_commt {color: <?php echo $_primary_color; ?>; }
.news_full_blog .news-details .skt_blog_commt {color: <?php echo $_primary_color; ?>; }
.news_full_blog .full-post-calendar i.fa {color: <?php echo $_primary_color; ?>; }
.bread-title-holder,.skt_price_table .price_table_inner ul li.table_title { background-color: <?php echo $_primary_color; ?>; }
 blockquote.skt-quote, .page blockquote { color: #fff; background: <?php echo $_primary_color; ?>; }
 blockquote p,blockquote a,blockquote cite a{color: #fff !important;}
.skt_blog_top .image-gallery-slider .postformat-gallerycontrol-nav li a.postformat-galleryactive { background-color: <?php echo $_secondary_color; ?>; }
.play_button_overlay a.play_btn:hover {background-color: <?php echo $_secondary_color; ?>; }
.play_button_overlay a.play_btn:hover i.fa.fa-play {color: #FFFFFF; }
.play_button_overlay a i.fa.fa-play {color: <?php echo $_secondary_color; ?>;  }
 #lovebond-paginate a:hover{background-color: <?php echo $_secondary_color; ?>; }
 #lovebond-paginate .lovebond-next, #lovebond-paginate .lovebond-prev{background-color:<?php echo $_primary_color; ?>; }
.author_social .team-social {border: 1px solid <?php echo $_primary_color; ?>; }
.skt_price_table .price_table_inner .price_button a {border: 1px solid <?php echo $_secondary_color; ?>; }
.author_social .team-social a {color: <?php echo $_primary_color; ?>; }
.author_social .team-social:hover {background-color: <?php echo $_secondary_color; ?>; border: 1px solid <?php echo $_secondary_color; ?>; }
.author_social .team-social:hover a { color: #FFFFFF; }
.author-comment-section .author_title, .author-comment-section .black.mb, h3#reply-title, .reply a, #comments, .comment-author cite, .commentlist p {color: <?php echo $_primary_color; ?>; }


/* PAGINATION */
#lovebond-paginate .lovebond-page {background-color: <?php echo $_primary_color; ?>;}
#lovebond-paginate .lovebond-current{background-color: <?php echo $_secondary_color; ?>;}
/* SHORTCODE */
.ske_tab_v ul.ske_tabs li.active{border-left-color:<?php echo $_secondary_color; ?>;}
.ske_tab_h ul.ske_tabs li.active{border-top-color:<?php echo $_secondary_color; ?>;}
/* SIDEBAR STYLE */
h3.ske-title {color: <?php echo $_primary_color; ?>; }

.widget_tag_cloud a:hover,.widget_product_tag_cloud a:hover { background-color: <?php echo $_secondary_color; ?>;border:1px solid <?php echo $_secondary_color; ?>; }
.line {border-bottom: 1px solid <?php echo $_primary_color; ?>; }

/*NEW*/
.main_menu_btn .line, #event-component.owl-theme .owl-controls .owl-page span, .blog-img-wrap:hover .blog-meta-wrap, #gallery-post-format.owl-theme .owl-controls .owl-page span, .author-social-wrap > a i, #sktwed-main-sidebar .sktwed-sub-button, #sktwed-main-sidebar .tagcloud a:hover, .wp-calendar-head i, .notfound-inner-wrapper .sktwed-sub-button, #search-wrapper .sktwed-sub-button, .scroll {
	background: <?php echo $_primary_color; ?> none repeat scroll 0 0;
}
.home-slider-wrapper .owl-controls .owl-buttons div span, .section-heading-content h2::after, .video-overlay span, a.view-all-link i.fa, .seperator-inner, .seperator-inner.seperator-white, .comment-form-wrap h3.comment-form-heading:after, #sktwed-main-sidebar li.sktwed-widget-list h3.sktwed-widget-title::after, #sktwed-main-sidebar .widget_archive ul > li:hover a:before, .notfound-inner-wrapper .notfound-text h4::after, .author-wrap h3.author-heading::after, .comments-wrap h3.comments-heading:after, .comment-form-wrap h3.comment-form-heading:after {
	background-color: <?php echo $_primary_color; ?>;
}
#home-slider .slider-text h2, #home-slider .slider-text h2.second-slide-thirdtext span, .event-date, .gallery-overlay-ef .fa.fa-search-plus, .gallery-overlay-ef .icon.wedding-gallery-search, .blog-content-wrap > a, .blog-content-wrap > a:hover, .blog-page-des a.readmore, .blog-page-des a.readmore:hover, .blog-content-pagination li:hover a, .blog-content-pagination li a:focus, .blog-content-pagination .c-active a,.widget_archive ul > li:hover a, .sktwed-recent-post .sktwed-sidebar-date, .notfound-inner-wrapper h2, .backtohome div a span, div.backbtn-seperator, #footer-wrapper .credit-wrap a, #wp-calendar.sktwed-wp-calendar tbody tr td:last-child, #wp-calendar.sktwed-wp-calendar tbody tr th:last-child,
.widget_categories ul > li:hover a, .widget_categories ul > li:hover a span, .widget_recent_entries ul > li:hover a, .widget_recent_entries ul > li:hover a span, .widget_meta ul > li:hover a, .widget_meta ul > li:hover a span, .widget_recent_comments ul > li:hover a, .widget_recent_comments ul > li:hover a span, .widget_nav_menu ul > li:hover a, .widget_nav_menu ul > li:hover a span, .widget_pages ul > li:hover a, .widget_pages ul > li:hover a span {
	color: <?php echo $_primary_color; ?>;
}
.sub_img:before{ background: <?php echo $_primary_rgba_color; ?>; }
.slider-text h4.border-text {border-top: 1px solid <?php echo $_primary_color; ?>; }
.blog-img-wrap:hover .blog-meta-wrap:before {-moz-border-bottom-color: <?php echo $_primary_color; ?>; border-bottom-color: <?php echo $_primary_color; ?>; }
.comment-text a.comment-reply-link:hover {background-color: <?php echo $_primary_color; ?>; border:1px solid <?php echo $_primary_color; ?>; }
#sktwed-main-sidebar .tagcloud a:hover{border-color: <?php echo $_primary_color; ?>;}
input:focus{border-bottom-color: <?php echo $_primary_color; ?>;}
#section2 .skt-page-overlay{background-color: <?php echo $_primary_rgba_color; ?>;}
#seperator1,#seperator2{border: 2px solid <?php echo $_primary_rgba_color; ?>;}
.sticky{
-webkit-box-shadow: 0 0 10px 0 <?php echo $_primary_rgba_color; ?>;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
  -moz-box-shadow: 0 0 10px 0 <?php echo $_primary_rgba_color; ?>;  /* Firefox 3.5 - 3.6 */
  box-shadow: 0 0 10px 0 <?php echo $_primary_rgba_color; ?>;
}
</style>

<!-- Set Default Current Menu-item when site opens in < 960px resolution -->
<?php
if(is_front_page()){ ?>
<script>
	jQuery('document').ready(function(){
		"use strict";
		if(jQuery(window).width() < 960)
		jQuery('ul#menu.mini-menu >li:first-child').addClass('current');
	});
</script>
<?php } ?>