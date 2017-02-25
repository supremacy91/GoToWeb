<?php if($theme_options->get( 'font_status' ) == '1' || $theme_options->get( 'colors_status' ) == '1') { ?>
<style type="text/css">
	<?php if($theme_options->get( 'colors_status' ) == '1') { ?>
		<?php if($theme_options->get( 'primary_hover_color' ) != '') { ?>
		.btn-default:hover, .btn:hover, .button:hover,
		.newsletter-widget input[type="submit"]:hover,
		#header.header3 .currency-switcher li li:hover > a, 
		#header.header3 .view-switcher li li:hover > a,
		#header.header4 .currency-switcher li li:hover > a, 
		#header.header4 .view-switcher li li:hover > a,
		.skin7 #footer .widget .tagcloud a:hover, .skin7 #footer .newsletter-widget input[type="submit"]:hover,
		#header.header6 .currency-switcher li li:hover > a, 
		#header.header6 .view-switcher li li:hover > a,
		.skin8 #footer  .newsletter-widget input[type="submit"]:hover,
		#header.header7 .currency-switcher li li:hover > a, 
		#header.header7 .view-switcher li li:hover > a,
		#header.header18 .currency-switcher li ul li:hover a, 
		#header.header18 .view-switcher li ul li:hover a {
			background: <?php echo $theme_options->get( 'primary_hover_color' ); ?>;
		}
		#header .currency-switcher li li:hover > a,
		#header .view-switcher li li:hover > a {
			background: <?php echo $theme_options->get( 'primary_hover_color' ); ?> !important;
		}
		.newsletter-widget input[type="submit"]:hover,
		.skin7 #footer .widget .tagcloud a:hover, .skin7 #footer .newsletter-widget input[type="submit"]:hover,
		#header.header6,
		.skin8 #footer  .newsletter-widget input[type="submit"]:hover {
			border-color: <?php echo $theme_options->get( 'primary_hover_color' ); ?>;
		}
		
		#header.header3 .top-links a:hover, #header.header3 #header-inner .header-contact a:hover, #header.header3 .searchform-popup .search-toggle:hover, #header.header3 .mobile-toggle:hover,
		.icon-read:hover,
		.icon-read:focus,
		.skin1 .owl-prev:hover, .skin1 .owl-next:hover {
			color: <?php echo $theme_options->get( 'primary_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_background_color' ) != '') { ?>
		body,
		.slider-title .inline-title {
			background: <?php echo $theme_options->get( 'body_background_color' ); ?>;
		}
		
		.post .comments-list .text:after {
			border-bottom-color: <?php echo $theme_options->get( 'body_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_background_color' ) != '') { ?>
		#header #header-top {
			background: <?php echo $theme_options->get( 'top_bar_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'primary_color' ) != '') { ?>
		.widget.newsletter-widget-box .box-content input[type="submit"],
		.gridlist-toggle > a:hover,
		.gridlist-toggle > a:focus,
		.gridlist-toggle > a.active,
		.pagination > li > a:hover,
		.pagination > li > span:hover,
		.pagination > li > a:focus,
		.pagination > li > span:focus,
		.pagination > .active > a,
		.pagination > .active > span,
		.pagination > .active > a:hover,
		.pagination > .active > span:hover,
		.pagination > .active > a:focus,
		.pagination > .active > span:focus,
		.widget-title .toggle:hover,
		.filter-size-box.active,
		.filter-size-box:hover,
		.filter-size-box:focus,
		.noUi-connect,
		.noUi-handle,
		.filter-slider-action  .btn,
		.product:hover .product-btn.btn-add-cart,
		.product-details .single_add_to_cart_button,
		#footer .footer-ribbon,
		.widget .tagcloud a:hover,
		#footer .widget .tagcloud a:hover,
		.newsletter-widget input[type="submit"],
		.product-center .radio-type-button2 span:hover,
		.product-center .radio-type-button2 span.active,
		.newsletter-widget input[type="submit"],
		.product-filter .options .button-group button:hover, .product-filter .options .button-group .active,
		.btn-default, .btn, .button,
		.product-list .btn-add-cart,
		.skin1 .owl-dot,
		#main-content .mfilter-heading .mfilter-head-icon:hover,
		.header4 .megamenu-wrapper,
		.skin7 #footer .widget .tagcloud a:hover, .skin7 #footer .newsletter-widget input[type="submit"],
		.skin7 #main-content .product .product-image .product-btn.btn-add-cart:hover,
		.skin7 .product:hover .product-btn.btn-add-cart,
		ul.megamenu li.type2 .sub-menu .content,
		ul.megamenu li.type2 .sub-menu .content .hover-menu .menu ul ul,
		.skin11 .newsletter-widget input[type="submit"],
		.skin1 blockquote.testimonial,
		.blog-tags .tagcloud a,
		.news .media-body .tags a {
			background-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		#footer .footer-ribbon:before {
			border-right-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		.vertical ul.megamenu > li > .sub-menu > .content,
		.skin11 #footer .footer-ribbon:before,
		.banner .category-title:after {
			border-right-color: <?php echo $theme_options->get( 'primary_color' ); ?> !important;
		}
		
		.vertical ul.megamenu > li.click > a:before, 
		.vertical ul.megamenu > li.hover > a:before,
		.vertical ul.megamenu > li > .sub-menu > .content {
			border-left-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		@media (min-width: 767px) {
			.vertical-tabs .nav-tabs > li.active > a {
				border-left-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
			}
			
			.rtl .vertical-tabs .nav-tabs > li.active > a {
				border-right-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
			}
		}
		
		.accordion-product-tab .panel-heading a {
			background: <?php echo $theme_options->get( 'primary_color' ); ?>;
			border-left: 3px solid <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		.accordion-product-tab .panel-heading a.collapsed {
			color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		.rtl .accordion-product-tab .panel-heading a {
			border-right-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		.skin7 #footer .widget .tagcloud a:hover, .skin7 #footer .newsletter-widget input[type="submit"],
		.skin7 #main-content .product .product-image .product-btn.btn-add-cart,
		.skin7 #main-content .product .product-image .product-btn.btn-add-cart:hover,
		.skin7 .product:hover .product-btn.btn-add-cart,
		.skin11 .newsletter-widget input[type="submit"],
		.skin13 .newsletter-widget input[type="submit"] {
			border-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		#main-content .mfilter-slider-slider .ui-slider-handle, 
		#main-content #mfilter-price-slider .ui-slider-handle,
		#main-content .mfilter-slider-slider .ui-slider-range, 
		#main-content #mfilter-price-slider .ui-slider-range,
		.post .date-published .month,
		.posts .button-more,
		a.quickviewlink.quickview-icon:hover,
		.product-image a.quickview-icon,
		.box .box-heading .toggle:hover,
		.body-header-type-4 ul.megamenu > li.home > a, .body-header-type-4 ul.megamenu > li:hover > a,
		#header.header3 .currency-switcher > li > ul, #header.header3 .view-switcher > li ul,
		#header.header3 .currency-switcher > li:hover > a, 
		#header.header3 .view-switcher > li:hover > a,
		#header.header4 .currency-switcher > li > ul, #header.header4 .view-switcher > li ul,
		#header.header4 .currency-switcher > li:hover > a, 
		#header.header4 .view-switcher > li:hover > a,
		.skin1 .post-item .post-date .month,
		.skin7 blockquote.testimonial,
		#header.header6 #header-top,
		.header6 ul.megamenu > li > a:hover, .header6 ul.megamenu > li.active > a, .header6 ul.megamenu > li.home > a, .header6 ul.megamenu > li:hover > a,
		#header.header6 .currency-switcher > li:hover > a, 
		#header.header6 .view-switcher > li:hover > a,
		#header.header6 .currency-switcher > li > ul, 
		#header.header6 .view-switcher > li ul,
		.skin8 #footer  .widget .tagcloud a:hover, .skin8 #footer  .newsletter-widget input[type="submit"],
		#header.header7 .currency-switcher > li:hover > a, 
		#header.header7 .view-switcher > li:hover > a,
		#header.header7 .currency-switcher > li > ul, 
		#header.header7 .view-switcher > li ul,
		.vertical ul.megamenu > li.active > a,
		.vertical ul.megamenu > li:hover > a,
		#header.header8 #header-inner,
		.skin11 #footer .footer-ribbon,
		.header10 ul.megamenu > li > a:hover, .header10 ul.megamenu > li.active > a, .header10 ul.megamenu > li.home > a, .header10 ul.megamenu > li:hover > a,
		.skin13 .newsletter-widget input[type="submit"],
		.header12 ul.megamenu > li > a:hover, .header12 ul.megamenu > li.active > a, .header12 ul.megamenu > li.home > a, .header12 ul.megamenu > li:hover > a,
		.skin13 .product .product-image .product-btn.btn-quickview,
		.skin14 .owl-carousel .owl-dot:hover, .skin14 .owl-carousel .owl-dot.active, .skin14 .top-container .owl-carousel .owl-dot:hover, .skin14 .top-container .owl-carousel .owl-dot.active,
		.common-home .header13 ul.megamenu > li:first-child, .header13 ul.megamenu > li:hover,
		.skin14 .product .product-image .product-btn.btn-quickview,
		.body-header-type-15 ul.megamenu > li.home > a,
		.body-header-type-15 ul.megamenu > li:hover > a,
		.body-header-type-15 .overflow-menu #mini-cart,
		.skin15 .owl-carousel .owl-dot:hover, .skin15 .owl-carousel .owl-dot.active, .skin15 .top-container .owl-carousel .owl-dot:hover, .skin15 .top-container .owl-carousel .owl-dot.active,
		#header.header15 #header-top,
		.header18#header .currency-switcher li > ul, 
		.header18#header .view-switcher li > ul,
		#header.header18 #header-top .currency-switcher > li:hover > a, 
		#header.header18 #header-top .view-switcher > li:hover > a,
		.skin17-2 .product-grid > .row > div .product-action .product-btn.btn-add-cart,
		.skin17-button,
		.skin17 .newsletter-widget input[type="submit"],
		.banner .category-title,
		#header .currency-switcher li > ul, 
		#header .view-switcher li > ul,
		#header .currency-switcher li:hover > a,
		#header .view-switcher li:hover > a,
		.post .tags a {
			background: <?php echo $theme_options->get( 'primary_color' ); ?> !important;
		}
		
		.product-image a.quickview-icon,
		.skin11 #scroll-top, .skin11 #scroll-top:hover {
			color: #fff !important;
		}

		@media (max-width: 480px) {
			#header.header3 #mini-cart .cart-items {
				color: <?php echo $theme_options->get( 'primary_color' ); ?>;
			}
		}
		
		a:active,
		a:hover,
		a:focus,
		.nav-tabs > li > a,
		.nav-tabs > li.active > a,
		.nav-tabs > li.active > a:hover,
		.nav-tabs > li.active > a:focus,
		ul.product_list_widget li .product-details a:hover, 
		.widget ul.product_list_widget li .product-details a:hover,
		.links-block-content ul li > a:hover,
		.icon-read,
		.gridlist-toggle > a:hover,
		.gridlist-toggle > a:focus,
		.gridlist-toggle > a.active,
		.product h3 a:hover,
		.product-details .price,
		.product-details .product_meta span a,
		.owl-prev,
		.owl-next,
		#mini-cart .mini-cart-info table td.name .price2,
		.product-center .price .price-new,
		a.quickviewlink.quickview-icon,
		body .popup-module .mfp-close,
		.pagination > li > a, .pagination > li > span,
		#mini-cart .mini-cart-total tr td:last-child,
		#header.header3 .top-links a, #header.header3 #header-inner .header-contact a, #header.header3 #mini-cart .minicart-icon, #header.header3 .searchform button:hover, #header.header3 .searchform-popup .search-toggle, #header.header3 .mobile-toggle,
		.body-header-type-4 ul.megamenu > li > a,
		.skin5 #footer a, .skin5 #footer a:hover, .skin5 #footer .widget-title,
		#header.header4 .top-links a, #header.header4 #header-inner .header-contact a, #header.header4 #mini-cart .minicart-icon, #header.header4 .searchform button:hover, #header.header4 .searchform-popup .search-toggle, #header.header4 .mobile-toggle,
		.header4 .megamenu-wrapper ul.megamenu > li.home > a, .header4 .megamenu-wrapper ul.megamenu > li > a:hover,
		.skin1 .post-item .post-date .day, .skin1 .post-item h4 a, .skin1 .post-item h4 a:hover, .skin1 .post-item a, .skin1 .post-item a:hover,
		.skin7 .owl-prev, .skin7 .owl-next,
		.skin7 #main-content .product .product-image .product-btn.btn-add-cart,
		#header.header6 #header-inner .header-contact a, #header.header6 #mini-cart .minicart-icon,
		.header6 ul.megamenu > li > a,
		.skin8 #footer .widget-title,
		#header.header7 #header-inner .header-contact a, #header.header7 #mini-cart .minicart-icon, #header.header7 .top-links li  a, #header.header7 .searchform-popup .search-toggle, #header.header7 .mobile-toggle,
		.header7 ul.megamenu > li > a:hover, .header7 ul.megamenu > li.active > a, .header7 ul.megamenu > li.home > a, .header7 ul.megamenu > li:hover > a,
		#header.header8 .currency-switcher li li a, 
		#header.header8 .view-switcher li li a,
		#header.header8 .currency-switcher > li:hover > a, 
		#header.header8 .view-switcher > li:hover > a,
		#header.header8 .top-links li a:hover,
		#header.header8 .searchform button:hover,
		.header8 .horizontal ul.megamenu > li > a:hover,
		.skin11 .owl-prev, .skin11 .owl-next,
		.nav-tabs.nav-links > li.active > a, .nav-tabs.nav-links > li.active > a:hover, .nav-tabs.nav-links  > li.active > a:focus,
		.skin13 .owl-prev, .skin13 .owl-next,
		#header.header12 #mini-cart .minicart-icon,
		.header13 ul.megamenu > li > a,
		.body-header-type-15 ul.megamenu > li > a,
		.skin15 .product h3 > a:hover, .skin15 .nav-tabs.nav-links > li.active > a, .skin15 .nav-tabs.nav-links > li.active > a:hover, .skin15 .nav-tabs.nav-links > li.active > a:focus, .skin15 .post-item h4 a, .post-item h4 a:hover, .skin15 .post-item a, .skin15 .post-item a:hover, .skin15 .post-item .post-date .day, .skin15 .product-categories li a:hover,
		.skin1 .owl-prev, .skin1 .owl-next,
		.header18 ul.megamenu > li > a:hover, 
		.header18 ul.megamenu > li.active > a, 
		.header18 ul.megamenu > li.home > a, 
		.header18 ul.megamenu > li:hover > a,
		.header18 #mini-cart .minicart-icon,
		.header18 #mini-cart.minicart-inline .cart-items,
		.header18#header .mobile-toggle,
		#header.header19 .searchform-popup .search-toggle,
		.header19 #mini-cart.minicart-inline .cart-items,
		.header19 #mini-cart .minicart-icon,
		.header19#header .mobile-toggle,
		.header1.fixed-header.type3 #mini-cart .minicart-icon,
		.header1.fixed-header.type7 #mini-cart .minicart-icon,
		.header1.fixed-header.type14 #mini-cart .minicart-icon,
		.header1.fixed-header.type15 #mini-cart .minicart-icon,
		.header1.fixed-header.type17 #mini-cart .minicart-icon,
		.box .box-category .active {
			color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		@media (max-width: 480px) {
			.header19#header #mini-cart .cart-items {
				color: <?php echo $theme_options->get( 'primary_color' ); ?>;
			}
		}
		
		#main-content .tp-leftarrow,
		#main-content .tp-rightarrow,
		.posts .post .post-title a,
		.post .date-published .day,
		.widget.contact-info li i, #footer .widget .links li > i,
		#header.header10 #header-inner .header-contact a, #header.header10 #mini-cart .minicart-icon, #header.header10 .top-links li  a, #header.header10 .top-links li:hover > a, #header.header10 .searchform-popup .search-toggle, #header.header10 .mobile-toggle,
		#header.header12 #header-top .top-links > li > a, #header.header12 #header-top .top-links > li:hover > a,
		#header.header12 #header-inner .header-contact a,
		.post .meta > li a {
			color: <?php echo $theme_options->get( 'primary_color' ); ?> !important;
		}
		
		.nav-tabs > li > a:hover,
		.nav-tabs > li > a:focus,
		.nav-tabs > li.active > a,
		.nav-tabs > li.active > a:hover,
		.nav-tabs > li.active > a:focus,
		ul.megamenu li .sub-menu .content,
		.popup,
		.well,
		#header.header3,
		.skin5,
		.prev-next-products .product-nav .product-pop,
		.skin1 .testimonial-arrow-down,
		#header.header10,
		#header.header12 #mini-cart.dropdown .dropdown-menu, #header.header12 .menu ul, #header.header12 .menu .megamenu,
		#header.header13 #mini-cart.minicart-inline .dropdown-menu,
		#header.header15 #mini-cart.dropdown .dropdown-menu, #header.header15 .menu ul, #header.header15 .menu .megamenu,
		.banner .category-title:after,
		#mini-cart.dropdown .dropdown-menu,
		.widget.newsletter-widget-box .box-content {
			border-top-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		.widget.newsletter-widget-box .box-content input[type="submit"],
		.pagination > li > a:hover,
		.pagination > li > span:hover,
		.pagination > li > a:focus,
		.pagination > li > span:focus,
		.pagination > .active > a,
		.pagination > .active > span,
		.pagination > .active > a:hover,
		.pagination > .active > span:hover,
		.pagination > .active > a:focus,
		.pagination > .active > span:focus,
		.widget-title .toggle:hover,
		.filter-size-box.active,
		.filter-size-box:hover,
		.filter-size-box:focus,
		.filter-slider-action  .btn,
		.product:hover .product-btn.btn-add-cart,
		.product-details .single_add_to_cart_button,
		.widget .tagcloud a:hover,
		#footer .widget .tagcloud a:hover,
		.newsletter-widget input[type="submit"],
		.product-center .radio-type-button2 span:hover,
		.product-center .radio-type-button2 span.active,
		.product-filter .options .button-group button:hover, .product-filter .options .button-group .active,
		.product-list .btn-add-cart,
		a.quickviewlink.quickview-icon,
		#main-content .mfilter-heading .mfilter-head-icon:hover,
		.box .box-heading .toggle:hover,
		#header.header3 #mini-cart.dropdown .dropdown-menu,
		#header.header6 #mini-cart.dropdown .dropdown-menu, #header.header6 .menu ul, #header.header6 .menu .megamenu,
		.skin8 #footer  .widget .tagcloud a:hover, .skin8 #footer  .newsletter-widget input[type="submit"],
		#header.header7 #mini-cart.dropdown .dropdown-menu,
		#header.header7 .menu ul,
		#header.header7 .menu .megamenu,
		.header_10 ul.megamenu li .sub-menu .content,
		.rtl .header_10 ul.megamenu li .sub-menu .content,
		#header.header10 #mini-cart.dropdown .dropdown-menu, #header.header10 .menu ul, #header.header10 .menu .megamenu,
		.skin13 .product .product-image .product-btn.btn-quickview,
		.skin14 .product .product-image .product-btn.btn-quickview,
		.skin15 .newsletter-widget input[type="submit"],
		#header.header15 .searchform,
		.header18 #mini-cart.minicart-inline .dropdown-menu,
		.skin17 .newsletter-widget input[type="submit"],
		#header.header4 #mini-cart.dropdown .dropdown-menu {
			border-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		
		#header.header3 #mini-cart.dropdown .dropdown-menu:before,
		.prev-next-products .product-nav .product-pop:before,
		#header.header6 #mini-cart.dropdown .dropdown-menu:before,
		#header.header7 #mini-cart.dropdown .dropdown-menu:before,
		#header.header10 #mini-cart.dropdown .dropdown-menu:before,
		.header12 ul.megamenu > li > a:hover, .header12 ul.megamenu > li.active > a, .header12 ul.megamenu > li.home > a, .header12 ul.megamenu > li:hover > a,
		#header.header12 #mini-cart.dropdown .dropdown-menu:before,
		#header.header13 #mini-cart.dropdown.minicart-inline .dropdown-menu:before,
		#header.header15 #mini-cart.dropdown .dropdown-menu:before,
		.header18 #mini-cart.dropdown.minicart-inline .dropdown-menu:before,
		#mini-cart.dropdown .dropdown-menu:before,
		#mini-cart.dropdown.minicart-inline .dropdown-menu:before,
		#header.header4 #mini-cart.dropdown .dropdown-menu:before {
			border-bottom-color: <?php echo $theme_options->get( 'primary_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_text_color' ) != '') { ?>
		#header #header-top,
		#header .currency-switcher a, #header .view-switcher a, #header .top-links a {
			color: <?php echo $theme_options->get( 'top_bar_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_links_hover_color' ) != '') { ?>
		#header .currency-switcher li:hover > a,
		#header .view-switcher li:hover > a, 
		#header .top-links a:hover {
			color: <?php echo $theme_options->get( 'top_bar_links_hover_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_background_color' ) != '') { ?>
		#header,
		#header.header8 #header-inner {
			background: <?php echo $theme_options->get( 'header_background_color' ); ?> !important;
		}
		
		@media (max-width: 480px) {
			#header #mini-cart {
				background: none;
			}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_text_color' ) != '') { ?>
		#header #header-inner .header-contact,
		#header #header-inner .header-contact a {
			color: <?php echo $theme_options->get( 'header_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_links_hover_color' ) != '') { ?>
		#header #header-inner .header-contact a:hover {
			color: <?php echo $theme_options->get( 'header_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_cart_icon_color' ) != '') { ?>
		#mini-cart .minicart-icon {
			color: <?php echo $theme_options->get( 'header_cart_icon_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_cart_count_color' ) != '') { ?>
		#mini-cart .cart-items {
			color: <?php echo $theme_options->get( 'header_cart_count_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_search_input_background_color' ) != '') { ?>
		#header .searchform {
			background: <?php echo $theme_options->get( 'header_search_input_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_search_input_border_color' ) != '') { ?>
		#header .searchform,
		#header .searchform input, 
		#header .searchform select {
			border-color: <?php echo $theme_options->get( 'header_search_input_border_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_search_input_text_color' ) != '') { ?>
		#header .searchform input, #header .searchform select {
			color: <?php echo $theme_options->get( 'header_search_input_text_color' ); ?> !important;
		}
		
		#header .searchform input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
		    color:    <?php echo $theme_options->get( 'header_search_input_text_color' ); ?>;
		}
		#header .searchform input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		   color:    <?php echo $theme_options->get( 'header_search_input_text_color' ); ?>;
		   opacity:  1;
		}
		#header .searchform input::-moz-placeholder { /* Mozilla Firefox 19+ */
		   color:    <?php echo $theme_options->get( 'header_search_input_text_color' ); ?>;
		   opacity:  1;
		}
		#header .searchform input:-ms-input-placeholder { /* Internet Explorer 10-11 */
		   color:   <?php echo $theme_options->get( 'header_search_input_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_search_icon_search_color' ) != '') { ?>
		#header .searchform button {
			color: <?php echo $theme_options->get( 'header_search_icon_search_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_background_color' ) != '') { ?>
		.megamenu-wrapper,
		.header1.fixed-header,
		.body-header-type-4 ul.megamenu,
		.header4 .megamenu-wrapper,
		.header11 .megamenu-wrapper,
		.header1.fixed-header.type12,
		.header12 .megamenu-wrapper,
		.header1.fixed-header.type15,
		.header1.fixed-header.type16,
		.header1.fixed-header.type17 {
			background: <?php echo $theme_options->get( 'menu_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_links_color' ) != '') { ?>
		ul.megamenu > li > a {
			color: <?php echo $theme_options->get( 'menu_links_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_links_hover_color' ) != '') { ?>
		ul.megamenu > li:hover > a {
			color: <?php echo $theme_options->get( 'menu_links_hover_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'sale_background_color' ) != '') { ?>
		.product-image .onsale {
			background: <?php echo $theme_options->get( 'sale_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'sale_text_color' ) != '') { ?>
		.product-image .onsale {
			color: <?php echo $theme_options->get( 'sale_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'new_background_color' ) != '') { ?>
		.product-image .onhot {
			background: <?php echo $theme_options->get( 'new_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'new_text_color' ) != '') { ?>
		.product-image .onhot {
			color: <?php echo $theme_options->get( 'new_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'wishlist_background_color' ) != '') { ?>
		.product-btn.btn-wishlist,
		.product-center .single-add-to-wishlist a:before {
			background: <?php echo $theme_options->get( 'wishlist_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'wishlist_border_color' ) != '') { ?>
		.product-btn.btn-wishlist,
		.product-center .single-add-to-wishlist a:before {
			border-color: <?php echo $theme_options->get( 'wishlist_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'wishlist_text_color' ) != '') { ?>
		.product-btn.btn-wishlist,
		.product-center .single-add-to-wishlist a:before {
			color: <?php echo $theme_options->get( 'wishlist_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'wishlist_hover_background_color' ) != '') { ?>
		.product-btn.btn-wishlist:hover,
		.product-center .single-add-to-wishlist a:hover:before {
			background: <?php echo $theme_options->get( 'wishlist_hover_background_color' ); ?>;
		}
		
		.product-center .single-add-to-wishlist a:hover {
			color: <?php echo $theme_options->get( 'wishlist_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'wishlist_hover_border_color' ) != '') { ?>
		.product-btn.btn-wishlist:hover,
		.product-center .single-add-to-wishlist a:hover:before {
			border-color: <?php echo $theme_options->get( 'wishlist_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'wishlist_hover_text_color' ) != '') { ?>
		.product-btn.btn-wishlist:hover,
		.product-center .single-add-to-wishlist a:hover:before {
			color: <?php echo $theme_options->get( 'wishlist_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'compare_background_color' ) != '') { ?>
		.product-btn.btn-quickview,
		.product-center .single-add-to-compare a:before {
			background: <?php echo $theme_options->get( 'compare_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'compare_border_color' ) != '') { ?>
		.product-btn.btn-quickview,
		.product-center .single-add-to-compare a:before {
			border-color: <?php echo $theme_options->get( 'compare_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'compare_text_color' ) != '') { ?>
		.product-btn.btn-quickview,
		.product-center .single-add-to-compare a:before {
			color: <?php echo $theme_options->get( 'compare_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'compare_hover_background_color' ) != '') { ?>
		.product-btn.btn-quickview:hover,
		.product-center .single-add-to-compare a:hover:before {
			background: <?php echo $theme_options->get( 'compare_hover_background_color' ); ?>;
		}
		
		.product-center .single-add-to-compare a:hover {
			color: <?php echo $theme_options->get( 'compare_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'compare_hover_border_color' ) != '') { ?>
		.product-btn.btn-quickview:hover,
		.product-center .single-add-to-compare a:hover:before {
			border-color: <?php echo $theme_options->get( 'compare_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'compare_hover_text_color' ) != '') { ?>
		.product-btn.btn-quickview:hover,
		.product-center .single-add-to-compare a:hover:before {
			color: <?php echo $theme_options->get( 'compare_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_background_color' ) != '') { ?>
		#footer {
			background: <?php echo $theme_options->get( 'footer_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_text_color' ) != '') { ?>
		#footer {
			color: <?php echo $theme_options->get( 'footer_text_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_links_color' ) != '') { ?>
		#footer a {
			color: <?php echo $theme_options->get( 'footer_links_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_links_hover_color' ) != '') { ?>
		#footer a:hover {
			color: <?php echo $theme_options->get( 'footer_links_hover_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_heading_color' ) != '') { ?>
		#footer .widget-title {
			color: <?php echo $theme_options->get( 'footer_heading_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_badge_background_color' ) != '') { ?>
		#footer .footer-ribbon {
			background: <?php echo $theme_options->get( 'footer_badge_background_color' ); ?> !important;
		}
		
		#footer .footer-ribbon:before {
			border-right-color: <?php echo $theme_options->get( 'footer_badge_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_badge_text_color' ) != '') { ?>
		#footer .footer-ribbon,
		#footer .footer-ribbon a {
			color: <?php echo $theme_options->get( 'footer_badge_text_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'copyright_background_color' ) != '') { ?>
		#footer #footer-bottom {
			background: <?php echo $theme_options->get( 'copyright_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'copyright_text_color' ) != '') { ?>
		#footer #footer-bottom {
			color: <?php echo $theme_options->get( 'copyright_text_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'copyright_links_color' ) != '') { ?>
		#footer #footer-bottom a {
			color: <?php echo $theme_options->get( 'copyright_links_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'copyright_links_hover_color' ) != '') { ?>
		#footer #footer-bottom a:hover {
			color: <?php echo $theme_options->get( 'copyright_links_hover_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_background_color' ) != '') { ?>
		.btn,
		.button {
			background: <?php echo $theme_options->get( 'button_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_text_color' ) != '') { ?>
		.btn,
		.button {
			color: <?php echo $theme_options->get( 'button_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_hover_background_color' ) != '') { ?>
		.btn:hover,
		.button:hover {
			background: <?php echo $theme_options->get( 'button_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_hover_text_color' ) != '') { ?>
		.btn:hover,
		.button:hover {
			color: <?php echo $theme_options->get( 'button_hover_text_color' ); ?>;
		}
		<?php } ?>
	<?php } ?>
			
	<?php if($theme_options->get( 'font_status' ) == '1') { ?>
		body {
			font-size: <?php echo $theme_options->get( 'body_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'body_font' ); ?>;
			<?php } ?>
		}
		
		ul.megamenu > li > a strong {
			font-size: <?php echo $theme_options->get( 'categories_bar_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar' ) != '' && $theme_options->get( 'categories_bar' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar' ); ?>;
			<?php } ?>
		}
		
		.megamenuToogle-wrapper .container {
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar_font' ) != '' && $theme_options->get( 'categories_bar_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar_font' ); ?>;
			<?php } ?>
		}
		
		.vertical ul.megamenu > li > a strong {
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?>;
		}
		
		.widget .widget-title,
		.sidebar .widget .widget-title, 
		#content .widget .widget-title,
		.slider-title .inline-title {
			font-size: <?php echo $theme_options->get( 'headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'headlines' ) != '' && $theme_options->get( 'headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'headlines' ); ?>;
			<?php } ?>
		}
		
		#footer .widget-title {
			font-size: <?php echo $theme_options->get( 'footer_headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'footer_headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'footer_headlines' ) != '' && $theme_options->get( 'footer_headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'footer_headlines' ); ?>;
			<?php } ?>
		}
		
		.product-center .product-title {
			font-size: <?php echo $theme_options->get( 'page_name_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'page_name_weight' )*100; ?>;
			<?php if( $theme_options->get( 'page_name' ) != '' && $theme_options->get( 'page_name' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'page_name' ); ?>;
			<?php } ?>
		}
		
		.button,
		.btn {
			font-size: <?php echo $theme_options->get( 'button_font_px' ); ?>px !important;
			font-weight: <?php echo $theme_options->get( 'button_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'button_font' ) != '' && $theme_options->get( 'button_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'button_font' ); ?>;
			<?php } ?>
		}
		
		<?php if( $theme_options->get( 'custom_price' ) != '' && $theme_options->get( 'custom_price' ) != 'standard' ) { ?>
		.product-grid .product .price, 
		.hover-product .price, 
		.product-list .actions > div .price, 
		.product-info .price .price-new,
		ul.megamenu li .product .price,
		.advanced-grid-products .product .right .price {
			font-family: <?php echo $theme_options->get( 'custom_price' ); ?>;
		}
		<?php } ?>
		
		.product-grid .product .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_small' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.product-info .price .price-new {
			font-size: <?php echo $theme_options->get( 'custom_price_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.product-list .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_medium' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.price del {
			font-size: <?php echo $theme_options->get( 'custom_price_px_old_price' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
	<?php } ?>
</style>
<?php } ?>

<?php if($theme_options->get( 'background_status' ) == 1) { ?>
<style type="text/css">
	<?php if($theme_options->get( 'body_background_background' ) == '1') { ?> 
	body { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '2') { ?> 
	body { background-image:url(image/<?php echo $theme_options->get( 'body_background' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '3') { ?> 
	body { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'body_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
</style>
<?php } ?>