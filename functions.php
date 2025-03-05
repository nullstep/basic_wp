<?php
/*
 *  Author: nullstep
 *  URL: https://nullstep.com/
 */

// -_-

define('EOL', "\r\n");

define('_THEME', 'basic_wp');

define('_LOGO', 'PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDE5MjAgMjUzIj48Zz48cGF0aCBmaWxsPSIjMzMzMzMzIiBkPSJNMjMxLjMsMTkxLjZsLTIyMi4yLDBsMC00M2wxNzcuOC0wLjFsMC00M0w5LDEwNS43bC0wLjItODZsNDQuNSwwbDAsNDNsMTc3LjcsMEwyMzEuMywxOTEuNnoiLz48cGF0aCBmaWxsPSIjMzMzMzMzIiBkPSJNNDk4LDE5MS41bC00NC41LDBsLTAuMi04NmwtMTMzLjQsMGwwLDQzbDg4LjksMGwwLDQzbC0xMzMuNCwwbC0wLjMtMTI5bDIyMi4yLDBMNDk4LDE5MS41eiIvPjxwYXRoIGZpbGw9IiMzMzMzMzMiIGQ9Ik03NjQuNCwxMDUuNWwtODguOSwwbDAuMiw4NmwtMTMzLjQsMGwwLTQzbDg4LjksMGwtMC4yLTg2bDEzMy40LDBMNzY0LjQsMTA1LjV6Ii8+PHBhdGggZmlsbD0iIzMzMzMzMyIgZD0iTTg1My4yLDU4LjJsLTQ0LjUsMGwwLTQzbDQ0LjUsMEw4NTMuMiw1OC4yeiBNODUzLjQsMTkxLjVsLTQ0LjUsMGwtMC4yLTkwLjNsNDQuNSwwTDg1My40LDE5MS41eiIvPjxwYXRoIGZpbGw9IiMzMzMzMzMiIGQ9Ik0xMTIwLDE0OC41bDAsNDNsLTIyMi4yLDBsLTAuMy0xMjlsMjIyLjIsMGwwLDQzbC0xNzcuNywwbDAsNDNMMTEyMCwxNDguNXoiLz48cGF0aCBmaWxsPSIjMzMzMzMzIiBkPSJNMTE2NC40LDE0OC40bDE3Ny43LDBsMCw0M2wtMTc3LjcsMEwxMTY0LjQsMTQ4LjR6Ii8+PHBhdGggZmlsbD0iIzMzMzMzMyIgZD0iTTE2MDksMTkxLjNsLTIyMi4yLDBsLTAuMy0xMjlsNDQuNSwwbDAuMiw4Nmw0NC41LDBsLTAuMi04Nmw0NC41LDBsMC4yLDg2bDQ0LjUsMGwtMC4yLTg2bDQ0LjUsMEwxNjA5LDE5MS4zeiIvPjxwYXRoIGZpbGw9IiMzMzMzMzMiIGQ9Ik0xODc1LjYsMTkxLjNsLTE3Ny43LDBsMCw0M2wtNDQuNSwwbC0wLjItODZsMTc3LjcsMGwwLTQzbC0xNzcuNywwbDAtNDNsMjIyLjIsMEwxODc1LjYsMTkxLjN6Ii8+PC9nPjwvc3ZnPg==');

// basic_wp default css

define('_CSS_BASIC_WP', '#info-area {}' . EOL . '#nav-area {}' . EOL . '#banner-area {}' . EOL . '#content-area {}' . EOL . '#footer-top-area {}' . EOL . '#footer-area {}');

// nav hover css

define('_CSS_NAV_HOVER', '.hover .dropdown-menu{flex-direction:column}.nav-item{flex-direction:column}.dropdown-menu{
width:100%}@media(min-width:992px){.hover{& .dropdown-menu{display:none !important;margin-top:0 !important}& .navbar-nav > li > .dropdown-menu{top:100% !important}& .nav-item:hover > .dropdown-menu{display:flex !important}& .nav-item .nav-item .dropdown-menu{left:100%;top:0}& .dropdown-menu:hover{display:flex !important}}');

// parallax css

define('_CSS_PARALLAX', '.parallax{position:relative;z-index:0;display:grid;grid-template-areas:"stack"}.parallax > *{grid-area:stack;animation:parallax linear;animation-timeline:scroll()}@keyframes parallax{to{transform:translateY(calc(var(--parallax-speed) * 200px))}}');

// dark/light mode js

define('_JS_MODE', 'function sc(e,t){var n=new Date;n.setTime(n.getTime()+2592e6),document.cookie=e+"="+t+";expires="+n.toUTCString()+";path=/"}function gc(e){e+="=";for(var t=decodeURIComponent(document.cookie).split(";"),n=0;n<t.length;n++){for(var o=t[n];" "==o.charAt(0);)o=o.substring(1);if(0==o.indexOf(e))return o.substring(e.length,o.length)}return""}function sm(){var e=$("#body");e.hasClass("light")?(e.removeClass("light").addClass("dark"),sc("mode","dark")):(e.removeClass("dark").addClass("light"),sc("mode","light"))}$((function(){"dark"==(gc("mode")||"light")&&sm(),$("#mode").on("click",(function(){sm()}))}));');

// cookie acceptance js

define('JS_COOKIE', '');

// basic_wp data

define('_ARGS_BASIC_WP', [
	'container_class' => [
		'type' => 'string',
		'default' => 'container'
	],
	'max_width' => [
		'type' => 'string',
		'default' => '1200px'
	],
	'header_order' => [
		'type' => 'string',
		'default' => 'info,nav,banner'
	],
	'excerpt_length' => [
		'type' => 'integer',
		'default' => 20
	],
	'filter_post_list' => [
		'type' => 'string',
		'default' => ''
	],
	'admin_sees_all_posts' => [
		'type' => 'string',
		'default' => ''
	],
	'paginate_same_author' => [
		'type' => 'string',
		'default' => ''
	],
	'wp_footer' => [
		'type' => 'string',
		'default' => 'no'
	],
	'latest_images' => [
		'type' => 'string',
		'default' => 'no'
	],
	'favicon_image' => [
		'type' => 'string',
		'default' => ''
	],
	'logo_image_normal' => [
		'type' => 'string',
		'default' => ''
	],
	'logo_image_contrast' => [
		'type' => 'string',
		'default' => ''
	],
	'nav_logo' => [
		'type' => 'string',
		'default' => 'none'
	],
	'nav_width' => [
		'type' => 'string',
		'default' => 'container'
	],
	'nav_elements' => [
		'type' => 'string',
		'default' => 'logo,mode'
	],
	'nav_layout' => [
		'type' => 'string',
		'default' => 'links,search'
	],
	'nav_links_align' => [
		'type' => 'string',
		'default' => 'me-auto'
	],
	'nav_logo_align' => [
		'type' => 'string',
		'default' => 'mx-auto'
	],
	'nav_search_align' => [
		'type' => 'string',
		'default' => 'ms-auto'
	],
	'nav_mode_align' => [
		'type' => 'string',
		'default' => 'mx-auto'
	],
	'nav_shadow' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'nav_hover' => [
		'type' => 'string',
		'default' => 'no'
	],
	'nav_expand' => [
		'type' => 'string',
		'default' => 'xl'
	],
	'sticky_nav' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'nav_mobile' => [
		'type' => 'string',
		'default' => 'right'
	],
	'doc_colour' => [
		'type' => 'string',
		'default' => '#ffffff'
	],
	'page_colour' => [
		'type' => 'string',
		'default' => '#ffffff'
	],
	'text_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'heading_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'info_colour' => [
		'type' => 'string',
		'default' => '#aaaaaa'
	],
	'info_text_colour' => [
		'type' => 'string',
		'default' => '#222222'
	],
	'nav_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'nav_text_colour' => [
		'type' => 'string',
		'default' => '#eeeeee'
	],
	'nav_active_colour' => [
		'type' => 'string',
		'default' => '#ffffff'
	],
	'banner_colour' => [
		'type' => 'string',
		'default' => '#aaaaaa'
	],
	'banner_text_colour' => [
		'type' => 'string',
		'default' => '#222222'
	],
	'footer_top_colour' => [
		'type' => 'string',
		'default' => '#444444'
	],
	'footer_top_text_colour' => [
		'type' => 'string',
		'default' => '#eeeeee'
	],
	'footer_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'footer_text_colour' => [
		'type' => 'string',
		'default' => '#eeeeee'
	],
	'primary_colour' => [
		'type' => 'string',
		'default' => '#000000'
	],
	'secondary_colour' => [
		'type' => 'string',
		'default' => '#000000'
	],
	'tertiary_colour' => [
		'type' => 'string',
		'default' => '#000000'
	],
	'quaternary_colour' => [
		'type' => 'string',
		'default' => '#000000'
	],
	'light_colour' => [
		'type' => 'string',
		'default' => '#ffffff'
	],
	'dark_colour' => [
		'type' => 'string',
		'default' => '#000000'
	],
	'admin_link_colour' => [
		'type' => 'string',
		'default' => '#2271b1'
	],
	'admin_highlight_colour' => [
		'type' => 'string',
		'default' => '#2271b1'
	],
	'heading_font' => [
		'type' => 'string',
		'default' => ''
	],
	'nav_font' => [
		'type' => 'string',
		'default' => ''
	],
	'body_font' => [
		'type' => 'string',
		'default' => ''
	],
	'mono_font' => [
		'type' => 'string',
		'default' => ''
	],
	'headings_upper' => [
		'type' => 'string',
		'default' => ''
	],
	'nav_upper' => [
		'type' => 'string',
		'default' => ''
	],
	'google_api' => [
		'type' => 'string',
		'default' => ''
	],
	'font_awesome' => [
		'type' => 'string',
		'default' => ''
	],
	'stt_icon' => [
		'type' => 'string',
		'default' => ''
	],
	'ld_mode' => [
		'type' => 'string',
		'default' => ''
	],
	'parallax' => [
		'type' => 'string',
		'default' => 'no'
	],
	'dev_mode' => [
		'type' => 'string',
		'default' => 'no'
	],
	'reorder_menu' => [
		'type' => 'string',
		'default' => 'no'
	],
	'woo_support' => [
		'type' => 'string',
		'default' => ''
	],
	'woo_per_page' => [
		'type' => 'string',
		'default' => '4'
	],
	'woo_columns' => [
		'type' => 'string',
		'default' => '4'
	],
	'woo_cleanup' => [
		'type' => 'string',
		'default' => ''
	],
	'woo_styles' => [
		'type' => 'string',
		'default' => ''
	],
	'woo_title' => [
		'type' => 'string',
		'default' => ''
	],
	'editor_width' => [
		'type' => 'string',
		'default' => ''
	],
	'notes' => [
		'type' => 'string',
		'default' => ''
	],
	'theme_xs_css' => [
		'type' => 'string',
		'default' => _CSS_BASIC_WP
	],
	'theme_sm_css' => [
		'type' => 'string',
		'default' => _CSS_BASIC_WP
	],
	'theme_md_css' => [
		'type' => 'string',
		'default' => _CSS_BASIC_WP
	],
	'theme_lg_css' => [
		'type' => 'string',
		'default' => _CSS_BASIC_WP
	],
	'theme_xl_css' => [
		'type' => 'string',
		'default' => _CSS_BASIC_WP
	],
	'theme_xxl_css' => [
		'type' => 'string',
		'default' => _CSS_BASIC_WP
	],
	'theme_css_minified' => [
		'type' => 'string',
		'default' => ''
	],
	'auto_css' => [
		'type' => 'string',
		'default' => ''
	],
	'theme_js' => [
		'type' => 'string',
		'default' => ''
	],
	'theme_js_minified' => [
		'type' => 'string',
		'default' => ''
	]
]);

// basic_wp admin 

define('_ADMIN_BASIC_WP', [
	'general' => [
		'label' => 'General',
		'columns' => 4,
		'fields' => [
			'container_class' => [
				'label' => 'Site Width',
				'type' => 'select',
				'values' => [
					'container-fluid' => 'Full Width',
					'container' => 'Fixed Width'
				]
			],
			'max_width' => [
				'label' => 'Custom max-width of .boxed Elements',
				'type' => 'input'
			],
			'header_order' => [
				'label' => 'Header Order/Layout',
				'type' => 'select',
				'values' => [
					'nav' => 'Nav',
					'info,nav' => 'Info > Nav',
					'nav,info' => 'Nav > Info',
					'banner,nav' => 'Banner > Nav',
					'nav,banner' => 'Nav > Banner',
					'banner,info' => 'Banner > Info',
					'info,banner' => 'Info > Banner',
					'info,nav,banner' => 'Info > Nav > Banner',
					'info,banner,nav' => 'Info > Banner > Nav',
					'nav,info,banner' => 'Nav > Info > Banner',
					'nav,banner,info' => 'Nav > Banner > Info',
					'banner,info,nav' => 'Banner > Info > Nav',
					'banner,nav,info' => 'Banner > Nav > Info'
				]
			],
			'filter_post_list' => [
				'label' => 'Filter Post List By Current User',
				'type' => 'check'
			],
			'admin_sees_all_posts' => [
				'label' => 'Admin Sees All Posts',
				'type' => 'check'
			],
			'paginate_same_author' => [
				'label' => 'Blog Pagination To Same Author Posts',
				'type' => 'check'
			],
			'excerpt_length' => [
				'label' => 'Excerpt Word Limit',
				'type' => 'input'
			],
			'editor_width' => [
				'label' => 'Set Width of Gutenberg Editor',
				'type' => 'input'
			],
			'ld_mode' => [
				'label' => 'Light/Dark Mode Active',
				'type' => 'check'
			],
			'parallax' => [
				'label' => 'Parallax CSS/JS Active',
				'type' => 'check'
			],
			'dev_mode' => [
				'label' => 'Developer Mode Active',
				'type' => 'check'
			],
			'reorder_menu' => [
				'label' => 'Re-order Admin Menu',
				'type' => 'check'
			],
			'wp_footer' => [
				'label' => 'Add wp_footer()',
				'type' => 'check'
			]
		]
	],
	'images' => [
		'label' => 'Images',
		'columns' => 3,
		'fields' => [
			'favicon_image' => [
				'label' => 'Site Favicon',
				'type' => 'file'
			],
			'logo_image_normal' => [
				'label' => 'Logo Image (normal)',
				'type' => 'file'
			],
			'logo_image_contrast' => [
				'label' => 'Logo Image (contrast)',
				'type' => 'file'
			],
			'stt_icon' => [
				'label' => 'Scroll To Top Icon',
				'type' => 'file'
			],
			'latest_images' => [
				'label' => 'Show Images in Latest Posts Shortcode',
				'type' => 'check'
			]
		]
	],
	'navbar' => [
		'label' => 'Navbar',
		'columns' => 4,
		'fields' => [
			'nav_elements' => [
				'label' => 'Navbar Elements Available',
				'type' => 'sort',
				'connect' => 'nav_layout',
				'columns' => 2
			],
			'nav_layout' => [
				'label' => 'Navbar Layout',
				'type' => 'sort',
				'connect' => 'nav_elements',
				'columns' => 2
			],
			'nav_logo' => [
				'label' => 'Navbar Logo Image',
				'type' => 'select',
				'values' => [
					'none' => 'None',
					'normal' => 'Normal',
					'contrast' => 'Contrast'
				]
			],
			'nav_width' => [
				'label' => 'Navbar Width',
				'type' => 'select',
				'values' => [
					'container-fluid' => 'Full Width',
					'container' => 'Fixed Width'
				]
			],
			'nav_links_align' => [
				'label' => 'Links Alignment',
				'type' => 'select',
				'values' => [
					'm-none' => 'None',
					'me-auto' => 'Left',
					'mx-auto' => 'Middle',
					'ms-auto' => 'Right'
				]
			],
			'nav_logo_align' => [
				'label' => 'Logo Alignment',
				'type' => 'select',
				'values' => [
					'm-none' => 'None',
					'me-auto' => 'Left',
					'mx-auto' => 'Middle',
					'ms-auto' => 'Right'
				]
			],
			'nav_search_align' => [
				'label' => 'Search Alignment',
				'type' => 'select',
				'values' => [
					'm-none' => 'None',
					'me-auto' => 'Left',
					'mx-auto' => 'Middle',
					'ms-auto' => 'Right'
				]
			],
			'nav_mode_align' => [
				'label' => 'Mode Alignment',
				'type' => 'select',
				'values' => [
					'm-none' => 'None',
					'me-auto' => 'Left',
					'mx-auto' => 'Middle',
					'ms-auto' => 'Right'
				]
			],
			'nav_mobile' => [
				'label' => 'Mobile Nav Position',
				'type' => 'select',
				'values' => [
					'left' => 'Left',
					'right' => 'Right'
				]
			],
			'nav_hover' => [
				'label' => 'Show Submenus On Hover',
				'type' => 'check'
			],
			'nav_shadow' => [
				'label' => 'Navbar Shadow',
				'type' => 'check'
			],
			'nav_expand' => [
				'label' => 'Navbar Collapse Class',
				'type' => 'select',
				'values' => [
					'none' => 'None',
					'xl' => 'xl',
					'lg' => 'lg',
					'md' => 'md',
					'sm' => 'sm'
				]				
			],
			'sticky_nav' => [
				'label' => 'Sticky Navbar',
				'type' => 'check'
			]
		]
	],
	'colours' => [
		'label' => 'Colours',
		'columns' => 4,
		'fields' => [
			'page_colour' => [
				'label' => 'Page Background Colour',
				'type' => 'colour'
			],
			'text_colour' => [
				'label' => 'Text Colour',
				'type' => 'colour'
			],
			'heading_colour' => [
				'label' => 'Headings Colour',
				'type' => 'colour'
			],
			'info_colour' => [
				'label' => 'Info Area Background Colour',
				'type' => 'colour'
			],
			'info_text_colour' => [
				'label' => 'Info Area Text Colour',
				'type' => 'colour'
			],
			'nav_colour' => [
				'label' => 'Navbar Background Colour',
				'type' => 'colour'
			],
			'nav_text_colour' => [
				'label' => 'Navbar Text Colour',
				'type' => 'colour'
			],
			'nav_active_colour' => [
				'label' => 'Navbar Active Colour',
				'type' => 'colour'
			],
			'banner_colour' => [
				'label' => 'Banner Background Colour',
				'type' => 'colour'
			],
			'banner_text_colour' => [
				'label' => 'Banner Text Colour',
				'type' => 'colour'
			],
			'footer_top_colour' => [
				'label' => 'Footer Top Area Background Colour',
				'type' => 'colour'
			],
			'footer_colour' => [
				'label' => 'Footer Main Background Colour',
				'type' => 'colour'
			],
			'footer_text_colour' => [
				'label' => 'Footer Text Colour',
				'type' => 'colour'
			],
			'primary_colour' => [
				'label' => 'Primary Colour',
				'type' => 'colour'
			],
			'secondary_colour' => [
				'label' => 'Secondary Colour',
				'type' => 'colour'
			],
			'tertiary_colour' => [
				'label' => 'Tertiary Colour',
				'type' => 'colour'
			],
			'quaternary_colour' => [
				'label' => 'Quaternary Colour',
				'type' => 'colour'
			],
			'light_colour' => [
				'label' => 'Light Contrast Colour',
				'type' => 'colour'
			],
			'dark_colour' => [
				'label' => 'Dark Contrast Colour',
				'type' => 'colour'
			],
			'admin_link_colour' => [
				'label' => 'Admin Link Colour',
				'type' => 'colour'
			],
			'admin_highlight_colour' => [
				'label' => 'Admin Highlight Colour',
				'type' => 'colour'
			]
		]
	],
	'fonts' => [
		'label' => 'Fonts',
		'columns' => 4,
		'fields' => [
			'heading_font' => [
				'label' => 'Headings Font',
				'type' => 'font'
			],
			'nav_font' => [
				'label' => 'Navigation Font',
				'type' => 'font'
			],
			'body_font' => [
				'label' => 'Body Text Font',
				'type' => 'font'
			],
			'mono_font' => [
				'label' => 'Monospace Font',
				'type' => 'font'
			],
			'google_api' => [
				'label' => 'Google Font API Key',
				'type' => 'input'
			],
			'headings_upper' => [
				'label' => 'Uppercase Headings',
				'type' => 'check'
			],
			'nav_upper' => [
				'label' => 'Uppercase Navigation',
				'type' => 'check'
			],
			'font_awesome' => [
				'label' => 'Use Font Awesome',
				'type' => 'check'
			]
		]
	],
	'css' => [
		'label' => 'CSS',
		'columns' => 2,
		'fields' => [
			'theme_xs_css' => [
				'label' => 'Theme Styles (xs, 0px width and up)',
				'type' => 'code'
			],
			'theme_sm_css' => [
				'label' => 'Theme Styles (sm, 576px width and up)',
				'type' => 'code'
			],
			'theme_md_css' => [
				'label' => 'Theme Styles (md, 768px width and up)',
				'type' => 'code'
			],
			'theme_lg_css' => [
				'label' => 'Theme Styles (lg, 992px width and up)',
				'type' => 'code'
			],
			'theme_xl_css' => [
				'label' => 'Theme Styles (xl, 1200px width and up)',
				'type' => 'code'
			],
			'theme_xxl_css' => [
				'label' => 'Theme Styles (xxl, 1400px width and up)',
				'type' => 'code'
			]
		]
	],
	'js' => [
		'label' => 'JS',
		'columns' => 1,
		'fields' => [
			'theme_js' => [
				'label' => 'Theme Scripts',
				'type' => 'code'
			]
		]
	],
	'woo' => [
		'label' => 'Woo',
		'columns' => 4,
		'fields' => [
			'woo_support' => [
				'label' => 'Add Woocommerce Support',
				'type' => 'check'
			],
			'woo_columns' => [
				'label' => 'Woocommerce Thumbnail Columns',
				'type' => 'input'
			],
			'woo_per_page' => [
				'label' => 'Woocommerce Items Per Page',
				'type' => 'input'
			],
			'woo_cleanup' => [
				'label' => 'Clean up Woocommerce Pages',
				'type' => 'check'
			],
			'woo_styles' => [
				'label' => 'Load Woocommerce Styles',
				'type' => 'check'
			],
			'woo_title' => [
				'label' => 'Rename Woocommerce',
				'type' => 'input'
			]
		]
	],
	'misc' => [
		'label' => 'Miscellaneous',
		'columns' => 1,
		'fields' => [
			'notes' => [
				'label' => 'Notes',
				'type' => 'text'
			]
		]
	]
]);

// basic_wp rest api routes

define('_API_BASIC_WP', [
	[
		'methods' => 'POST',
		'path' => 'settings',
		'callback' => 'update_settings',
		'args' => _themeSettings::args(),
		'permission_callback' => 'permissions'
	],
	[
		'methods' => 'GET',
		'path' => 'settings',
		'callback' => 'get_settings',
		'args' => [],
		'permission_callback' => 'permissions'
	]
]);

// wp options

define('_OPTIONS_BASIC_WP', [
	'thumbnails' => true
]);

// wp menus

define('_MENUS_BASIC_WP', [
	'primary' => 'Primary Menu',
	'secondary' => 'Secondary Menu'
]);


//     ▄████████  ████████▄     ▄▄▄▄███▄▄▄▄     ▄█   ███▄▄▄▄▄    
//    ███    ███  ███   ▀███  ▄██▀▀▀███▀▀▀██▄  ███   ███▀▀▀▀██▄  
//    ███    ███  ███    ███  ███   ███   ███  ███▌  ███    ███  
//    ███    ███  ███    ███  ███   ███   ███  ███▌  ███    ███  
//  ▀███████████  ███    ███  ███   ███   ███  ███▌  ███    ███  
//    ███    ███  ███    ███  ███   ███   ███  ███   ███    ███  
//    ███    ███  ███   ▄███  ███   ███   ███  ███   ███    ███  
//    ███    █▀   ████████▀    ▀█   ███   █▀   █▀     ▀█    █▀   

class _themeAPI {
	public function add_routes() {
		if (count(_API_BASIC_WP)) {
			foreach(_API_BASIC_WP as $route) {
				register_rest_route(_THEME . '-api', '/' . $route['path'], [
					'methods' => $route['methods'],
					'callback' => [$this, $route['callback']],
					'args' => $route['args'],
					'permission_callback' => [$this, $route['permission_callback']]
				]);
			}
		}
	}

	public function permissions() {
		return current_user_can('manage_options');
	}

	public function update_settings(WP_REST_Request $request) {
		$settings = [];
		foreach (_themeSettings::args() as $key => $val) {
			$settings[$key] = $request->get_param($key);
		}
		_themeSettings::save_settings($settings);
		return rest_ensure_response(_themeSettings::get_settings());
	}

	public function get_settings(WP_REST_Request $request) {
		return rest_ensure_response(_themeSettings::get_settings());
	}
}

class _themeSettings {
	protected static $option_key = _THEME . '-theme-settings';

	public static function args() {
		$args = _ARGS_BASIC_WP;
		foreach (_ARGS_BASIC_WP as $key => $val) {
			$val['required'] = true;
			switch ($val['type']) {
				case 'integer': {
					$cb = 'absint';
					break;
				}
				default: {
					$cb = 'sanitize_text_field';
				}
				$val['sanitize_callback'] = $cb;
			}
		}
		return $args;
	}

	public static function get_settings() {
		$defaults = [];
		foreach (_ARGS_BASIC_WP as $key => $val) {
			$defaults[$key] = $val['default'];
		}
		$saved = get_option(self::$option_key, []);
		if (!is_array($saved) || empty($saved)) {
			return $defaults;
		}
		return wp_parse_args($saved, $defaults);
	}

	public static function save_settings(array $settings) {
		$defaults = [];
		foreach (_ARGS_BASIC_WP as $key => $val) {
			$defaults[$key] = $val['default'];
		}
		foreach ($settings as $i => $setting) {
			if (!array_key_exists($i, $defaults)) {
				unset($settings[$i]);
			}
			if ($i == 'theme_js') {
				$settings['theme_js_minified'] = minify_js($setting);
			}
		}

		// auto generate stored css

		update_option(self::$option_key, $settings);
		$settings['auto_css'] = generate_css();
		update_option(self::$option_key, $settings);
	}
}

class _themeMenu {
	protected $slug = _THEME . '-theme-menu';
	protected $assets_url;

	public function __construct($assets_url) {
		$this->assets_url = $assets_url;
		add_action('admin_menu', [$this, 'add_page']);
		add_action('admin_enqueue_scripts', [$this, 'register_assets']);
	}

	public function add_page() {
		add_menu_page(
			_THEME,
			_THEME,
			'manage_options',
			$this->slug,
			[$this, 'render_admin'],
			'data:image/svg+xml;base64,' . base64_encode('<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewbox="0 0 500 500"><path fill="#a7aaad" d="M250.2,17.4L49,133.5v232.3L250.2,482l201.2-116.2V133.5L250.2,17.4z M371.8,347H128.4v-48.7h194.7v-48.7H128.4v-97.4h48.7 v48.7h194.7V347z"/></svg>'),
			2
		);
	}

	public function register_assets() {
		$boo = md5(microtime(true));
		wp_register_script($this->slug, $this->assets_url . '/' . _THEME . '.js?' . $boo, ['jquery']);
		wp_register_style($this->slug, $this->assets_url . '/' . _THEME . '.css?' . $boo);
		wp_localize_script($this->slug, _THEME, [
			'strings' => [
				'saved' => 'Settings Saved',
				'error' => 'Error'
			],
			'api' => [
				'url' => esc_url_raw(rest_url(_THEME . '-api/settings')),
				'nonce' => wp_create_nonce('wp_rest')
			]
		]);
	}

	public function enqueue_assets() {
		if (!wp_script_is($this->slug, 'registered')) {
			$this->register_assets();
		}
		wp_enqueue_script($this->slug);
		wp_enqueue_style($this->slug);
	}

	public function render_admin() {
		wp_enqueue_media();
		$this->enqueue_assets();

		echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/html5sortable/0.13.3/html5sortable.min.js"></script>';

		$opts = '<option value="">None</option>';

		$wsf = [
			'Arial|sans-serif',
			'Verdana|sans-serif',
			'Tahoma|sans-serif',
			'Trebuchet MS|sans-serif',
			'Times New Roman|serif',
			'Georgia|serif',
			'Garamond|serif',
			'Courier New|monospace',
			'Brush Script MT|cursive'
		];

		foreach ($wsf as $font) {
			$font_array = explode('|', $font);
			$opts .= '<option value="' . $font_array[0] . '">' . $font_array[0] . ' (' . $font_array[1] . ')</option>';
		}

		if (_B['google_api'] != '') {
			$fonts = json_decode(
				curl('https://www.googleapis.com/webfonts/v1/webfonts?key=' . _B['google_api'])
			);
			foreach ($fonts->items as $item) {
				$opts .= '<option value="' . $item->family . '">' . $item->family . ' (' . $item->category . ')</option>';
			}
		}

		$name = _THEME;
		$form = _ADMIN_BASIC_WP;

		$pangrams = [
			'two driven jocks help fax my big quiz',
			'five quacking zephyrs jolt my waxed bed',
			'the five boxing wizards jump quickly',
			'pack my box with five dozen liquor jugs',
			'a sphinx of black quartz judges my vow'
		];

		// build form

		echo '<div id="' . $name . '-wrap" class="wrap">';
			echo '<script>';
				echo 'function gfp(e) {
						var f = jQuery(e).find(":selected").val();
						var gf = f.replace(/ /g, \'+\');
						var id = jQuery(e).attr("id");
						var p = "' . $pangrams[array_rand($pangrams)] . '";
						var pre = jQuery("#" + id + "-preview");
						pre.empty();
						if (f) {
							pre.append("<style>@import url(\'https://fonts.googleapis.com/css2?family=" + gf + "&display=swap\');#" + id + "-preview > p {font-family:\'" + f + "\';font-size:1.2rem;margin:0;padding:0}</style>").append("<p>" + p + " " + p.toUpperCase() + " 1234567890 \"!?-=+\'</p>");
						}
					}';
				echo 'jQuery(function($) {
					$(".gfs").on("change", function() {
						gfp(this);					
					});
					$(".ceb").on("change", function() {
						$("#col-" + $(this).attr("id")).val($(this).val());
					});
				});';
			echo '</script>';

			echo '<h1><img src="data:image/svg+xml;base64,' . _LOGO . '" style="height:32px"></h1>';
			echo '<p>Configure your ' . $name . ' settings...</p>';
			echo '<form id="' . $name . '-form" method="post">';
				echo '<nav id="' . $name . '-nav" class="nav-tab-wrapper">';
				foreach ($form as $tid => $tab) {
					echo '<a href="#' . $name . '-' . $tid . '" class="nav-tab">' . $tab['label'] . '</a>';
				}
				echo '</nav>';
				echo '<div class="tab-content">';
				foreach ($form as $tid => $tab) {
					echo '<div id="' . $name . '-' . $tid . '" class="' . $name . '-tab">';
					foreach ($tab['fields'] as $fid => $field) {
						$columns = (isset($field['columns'])) ? $field['columns'] : $tab['columns'];
						echo '<div class="form-block col-' . $columns . '">';
						switch ($field['type']) {
							case 'input': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								break;
							}
							case 'select': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<select id="' . $fid . '" name="' . $fid . '">';
									foreach ($field['values'] as $value => $label) {
										echo '<option value="' . $value . '">' . $label . '</option>';
									}
								echo '</select>';
								break;
							}
							case 'text': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<textarea id="' . $fid . '" class="tabs" name="' . $fid . '"></textarea>';
								break;
							}
							case 'file': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								echo '<input data-id="' . $fid . '" type="button" class="button-primary choose-file-button" value="...">';
								break;
							}
							case 'colour': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" class="ceb" type="text" name="' . $fid . '">';
								echo '<input id="col-' . $fid . '" data-id="' . $fid . '" type="color" class="choose-colour-button" value="#000000">';
								break;
							}
							case 'code': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<textarea id="' . $fid . '" class="code" name="' . $fid . '"></textarea>';
								break;
							}
							case 'content': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								wp_editor('', $fid, [
									'media_buttons' => true,
									'textarea_name' => $fid
								]);
								break;
							}
							case 'check': {
								echo '<em>' . $field['label'] . ':</em>';
								echo '<label class="switch">';
									echo '<input type="checkbox" id="' . $fid . '" name="' . $fid . '" value="yes">';
									echo '<span class="slider"></span>';
								echo '</label>';
								break;
							}
							case 'font': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<select id="' . $fid . '" name="' . $fid . '" class="gfs">';
									echo $opts;
								echo '</select>';
								echo '<div id="' . $fid . '-preview" class="gfp">';
									echo '';
								echo '</div>';
								break;
							}
							case 'sort': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								$connect = (isset($field['connect'])) ? $field['connect'] : '';
								echo '<input id="' . $fid . '" class="sort" data-connect="' . $connect . '" type="hidden" name="' . $fid . '">';
								echo '<ul id="' . $fid . '-sort" class="sortable"></ul>';
								break;
							}
						}
						echo '</div>';
					}
					echo '</div>';
				}
				echo '</div>';
				echo '<div>';
					submit_button();
				echo '</div>';
				echo '<div id="' . $name . '-feedback"></div>';
			echo '</form>';
		echo '</div>';
		echo '<script>';
			echo 'Array.prototype.rd=function(){return this.filter(function(item,index,self){return self.indexOf(item)==index;});};';
			echo 'function b_go() {
				jQuery(".gfs").each(function(i, o) {
					gfp(jQuery(this));
				});
				jQuery(".sort").each(function(i, o) {
					var id = "#" + jQuery(o).attr("id");
					var sid = id + "-sort";
					var conn = jQuery(o).data("connect");
					var p = (conn != "") ? {connectWith: "#" + conn + "-sort," + sid} : {};
					p.update = function(e, ui) {
						var t = jQuery(sid + " li").map(function() {
							return jQuery(this).text();
						}).get().join(",");
						jQuery(sid.split("-")[0]).val(t);
					};
					jQuery(o).val().split(",").rd().forEach(function(v, i) {
						if (v != "") {
							jQuery(sid).append("<li class=\"si\">" + v + "</li>");
						}
					});
					jQuery(sid).sortable(p);
					jQuery(sid).disableSelection();
				});
			}';
		echo '</script>';
	}
}


//   ▄█     █▄    ▄█   ████████▄      ▄██████▄      ▄████████      ███      
//  ███     ███  ███   ███   ▀███    ███    ███    ███    ███  ▀█████████▄  
//  ███     ███  ███▌  ███    ███    ███    █▀     ███    █▀      ▀███▀▀██  
//  ███     ███  ███▌  ███    ███   ▄███          ▄███▄▄▄          ███   ▀  
//  ███     ███  ███▌  ███    ███  ▀▀███ ████▄   ▀▀███▀▀▀          ███      
//  ███     ███  ███   ███    ███    ███    ███    ███    █▄       ███      
//  ███ ▄█▄ ███  ███   ███   ▄███    ███    ███    ███    ███      ███      
//   ▀███▀███▀   █▀    ████████▀     ████████▀     ██████████     ▄████▀

class _themeWidget {
	public $name;
	public $html;

	public function __construct($title) {
		$this->name = $title;
		$this->init();
	}
	
	public function init() {
		add_action('wp_dashboard_setup', [$this, 'widget']);
	}
	
	public function widget() {
		wp_add_dashboard_widget('b_' . $this->name . '_widget', ucwords(str_replace('-', ' ', $this->name)), [$this, 'render']);
	}

	public function button($title, $link) {
		return '<a class="button button-primary" style="text-decoration:none;margin:0.25rem" target="_blank" href="https://' . $link . '/">' . $title . '</a>';
	}
	
	public function render() {
		echo $this->html;
	}
}


//  ▀█████████▄   
//    ███    ███  
//    ███    ███  
//   ▄███▄▄▄██▀   
//  ▀▀███▀▀▀██▄   
//    ███    ██▄  
//    ███    ███  
//  ▄█████████▀

class B {
	public static $widgets = [];

	public static function title($echo = true) {
		$post = get_queried_object();

		if ($post) {
			$title = get_post_meta($post->ID, '_title', true) ?? get_the_title($post->ID);
			if ($echo) {
				echo $title;
			}
			else {
				return $title;
			}
		}
	}

	public static function description($echo = true) {
		$post = get_queried_object();

		if ($post) {
			$description = get_post_meta($post->ID, '_description', true) ?? '';
			if ($echo) {
				echo $description;
			}
			else {
				return $description;
			}
		}
	}

	public static function keywords($echo = true) {
		$post = get_queried_object();

		if ($post) {
			$keywords = get_post_meta($post->ID, '_keywords', true) ?? '';
			if ($echo) {
				echo $keywords;
			}
			else {
				return $keywords;
			}
		}
	}

	public static function css() {
		$hover = (_B['nav_hover'] == 'yes') ? _CSS_NAV_HOVER : '';
		$parallax = (_B['parallax'] == 'yes') ? _CSS_PARALLAX : '';
		echo $parallax . $hover . _B['auto_css'];
	}

	public static function js() {
		$mode = (_B['ld_mode'] == 'yes') ? _JS_MODE : '';
		echo $mode . _B['theme_js_minified'];
	}

	public static function concat($type) {
		$upload_dir = wp_upload_dir();

		switch ($type) {
			case 'js': {
				$file = $upload_dir['basedir'] . '/scripts.js';
				echo (file_exists($file)) ? '<script src="' . $upload_dir['url'] . '/' . basename($file) . '"></script>' : '';
				break;
			}
			case 'css': {
				$file = $upload_dir['basedir'] . '/styles.css';
				echo (file_exists($file)) ? '<link rel="stylesheet" href="' . $upload_dir['url'] . '/' . basename($file) . '">' : '';
				break;
			}
		}
	}

	public static function favicon() {
		$setting = _B['favicon_image'];
		$favicon = ($setting != '') ? '/uploads/' . $setting : '/img/favicon.png';
		echo $favicon;
	}

	public static function featured($type = '', $echo = true) {
		global $wp_query;

		if (function_exists('is_product_category') && is_product_category()) {
			$cat = $wp_query->get_queried_object();
			$thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
			$image = explode('/', wp_get_attachment_url($thumbnail_id));
		}
		else {
			$image = explode('/', wp_get_attachment_url(get_post_thumbnail_id(get_queried_object()->ID)));
		}

		if (end($image)) {
			switch ($type) {
				case 'bg': {
					$return = 'style="background:url(/uploads/' . end($image) . ') top center"';
					break;
				}
				case 'img': {
					$return = '<img src="/uploads/' . end($image) . '" class="img-fluid">';
					break;				
				}
				case 'img-fluid': {
					$return = '<img class="img-fluid" src="/uploads/' . end($image) . '">';
					break;				
				}
				case 'width': {
					list($width, $height) = getimagesize(wp_upload_dir()['url'] . end($image));
					$return = $width;
					break;
				}
				case 'height': {
					list($width, $height) = getimagesize(wp_upload_dir()['url'] . end($image));
					$return = $height;
					break;
				}
				default: {
					$return = end($image);
				}
			}
		}
		else {
			$return = '';
		}

		if ($echo) {
			echo $return;
		}
		else {
			return $return;
		}
	}

	public static function snippet($post, $count) {
		echo str_replace(["\r", "\n"], '', substr(strip_tags($post), 0, $count) . '&hellip;');
	}

	public static function align($item) {
		$align = _B['nav_' . $item . '_align'];
		if ($align == 'm-none') {
			if (end(explode(',', _B['nav_layout'])) == $item) {
				$align = 'mr-none';
			}
			else if (explode(',', _B['nav_layout'])[0] == $item) {
				$align = 'ml-none';
			}
			else {
				$align = 'mb-none';
			}
		}
		return $align;
	}

	public static function nav($value = null) {
		switch ($value) {
			case 'logo': {
				$logo = '<a href="/" class="navbar-brand">' . ((_B['nav_logo'] != 'none') ? '<img id="nav-logo" src="/uploads/' . _B['logo_image_' . _B['nav_logo']] . '">' : get_bloginfo('name')) . '</a>';
				echo '<div class="' . B::align('logo') . '">' . $logo . '</div>';
				break;
			}
			case 'links': {
				$toggle = '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".target"><span class="navbar-toggler-icon"></span></button>';
				echo (_B['nav_mobile'] == 'left') ? $toggle : '';
				echo '<div id="navbar" class="navbar-collapse collapse target ' . B::align('links') . '">';
				wp_nav_menu([
					'theme_location' => 'primary',
					'depth' => 0,
					'container' => false,
					'menu_class' => 'navbar-nav ' . B::align('links'),
					'fallback_cb' => '__return_false',
					'walker' => new WP_Bootstrap_Navwalker()
				]);
				echo '</div>';
				echo (_B['nav_mobile'] == 'right') ? $toggle : '';
				break;
			}
			case 'search': {
				echo '<form class="d-flex ' . B::align('search') . '" method="get" action="' . get_site_url() . '">';
					echo '<input class="form-control me-2" type="search" name="s" placeholder="Search">';
					echo '<button class="btn btn-primary" type="submit">';
						echo (_B['font_awesome'] == 'yes') ? '<i class="fa-solid fa-magnifying-glass"></i>' : 'Search';
					echo '</button>';
				echo '</form>';
				break;
			}
			case 'width': {
				echo _B['nav_width'];
				break;
			}
			case 'sticky': {
				echo (_B['sticky_nav'] == 'yes') ? 'sticky-top' : '';
				break;
			}
			case 'shadow': {
				echo (_B['nav_shadow'] == 'yes') ? ' shadow' : '';
				break;
			}
			case 'expand': {
				echo (_B['nav_expand'] == 'none') ? '' : ' navbar-expand-' . _B['nav_expand'];
				break;
			}
			case 'hover': {
				echo (_S9['nav_hover'] == 'yes') ? ' hover' : '';
				break;
			}
			case 'mode': {
				if ((B::value('ld_mode', 0) == 'yes')) {
					echo '<div id="mode-switch" class="d-flex ' . B::align('mode') . '">';
						echo (_B['font_awesome'] == 'yes') ? '<i class="fa-solid fa-sun"></i>' : 'sun';
						echo '<span class="toggle" id="mode"></span>';
						echo (_B['font_awesome'] == 'yes') ? '<i class="fa-solid fa-moon"></i>' : 'moon';
					echo '</div>';					
				}
				break;
			}
			default: {
				if (_B['nav_layout'] != '') {
					$items = explode(',', _B['nav_layout']);
					foreach ($items as $item) {
						B::nav($item);
					}
					echo "\n";
				}
			}
		}
	}

	// return values

	public static function value($key, $echo = true) {
		global $evil;

		$value = _B[$key];

		// special case for container_class
		// as it is dependant on possible meta data

		if ($key == 'container_class') {
			$id = (isset($evil['page_id'])) ? $evil['page_id'] : get_queried_object_id();
			$width = get_post_meta($id, 'page_width', true);

			switch ($width) {
				case '1':
					$value = 'container-fluid';
					break;
				case '2':
					$value = 'container';
					break;
			}
		}

		if ($echo) {
			echo $value;
		}
		else {
			return $value;
		}
	}

	// get header sections

	public static function sections() {
		$array = explode(',', _B['header_order']);

		foreach ($array as $template) {
			get_template_part($template);
		}
	}

	// pagination

	public static function pagination() {
		global $wp_query;

		$big = 999999999;
		echo paginate_links([
			'base' => str_replace($big, '%#%', get_pagenum_link($big)),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages
		]);
	}

	// get post excerpt

	public static function excerpt($echo = false) {
		$content = preg_replace('%\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))%s', '', get_the_content_feed());
		$excerpt = implode(' ', array_slice(explode(' ', trim(preg_replace('/<[^>]*>/', ' ', $content))), 0, _B['excerpt_length'])) . '&hellip;';
		if ($echo) {
			echo $excerpt;
		}
		else {
			return $excerpt;
		}
	}

	// get contrasting colour

	public static function contrast($hex) {
		$hex = str_split(ltrim($hex, '#'));

		if (count($hex) == 3) {
			$r = hexdec($hex[0] . $hex[0]);
			$g = hexdec($hex[1] . $hex[1]);
			$b = hexdec($hex[2] . $hex[2]);
		}
		else {
			$r = hexdec($hex[0] . $hex[1]);
			$g = hexdec($hex[2] . $hex[3]);
			$b = hexdec($hex[4] . $hex[5]);			
		}

		if (((max($r, $g, $b) + min($r, $g, $b)) / 510.0) >= .8) {
			return _B['dark_colour'];
		}
		else {
			return _B['light_colour'];
		}
	}

	// rgb to hsl

	public static function rgb_hsl($r, $g, $b) {
		$r /= 255;
		$g /= 255;
		$b /= 255;

		$max = max($r, $g, $b);
		$min = min($r, $g, $b);

		$h;
		$s;
		$l = ( $max + $min ) / 2;
		$d = $max - $min;

		if ($d == 0) {
			$h = $s = 0;
		}
		else {
			$s = $d / (1 - abs(2 * $l - 1));

			switch ($max) {
				case $r: {
					$h = 60 * fmod((($g - $b) / $d), 6); 
					if ($b > $g) {
						$h += 360;
					}
					break;
				}
				case $g: { 
					$h = 60 * (($b - $r) / $d + 2); 
					break;
				}
				case $b: { 
					$h = 60 * (($r - $g) / $d + 4); 
					break;
				}
			}			        	        
		}

		return [round($h, 3), round($s, 3), round($l, 3)];
	}

	// hsl to rgb

	public static function hsl_rgb($h, $s, $l) {
		$r; 
		$g; 
		$b;

		$c = (1 - abs(2 * $l - 1)) * $s;
		$x = $c * (1 - abs(fmod(($h / 60), 2) - 1));
		$m = $l - ($c / 2);

		if ($h < 60) {
			$r = $c;
			$g = $x;
			$b = 0;
		}
		else if ($h < 120) {
			$r = $x;
			$g = $c;
			$b = 0;			
		}
		else if ($h < 180) {
			$r = 0;
			$g = $c;
			$b = $x;					
		}
		else if ($h < 240) {
			$r = 0;
			$g = $x;
			$b = $c;
		}
		else if ($h < 300) {
			$r = $x;
			$g = 0;
			$b = $c;
		}
		else {
			$r = $c;
			$g = 0;
			$b = $x;
		}

		$r = ($r + $m) * 255;
		$g = ($g + $m) * 255;
		$b = ($b + $m) * 255;

		return [round($r), round($g), round($b)];
	}
}


//   ▄█     █▄    ▄██████▄    ▄██████▄   
//  ███     ███  ███    ███  ███    ███  
//  ███     ███  ███    ███  ███    ███  
//  ███     ███  ███    ███  ███    ███  
//  ███     ███  ███    ███  ███    ███  
//  ███     ███  ███    ███  ███    ███  
//  ███ ▄█▄ ███  ███    ███  ███    ███  
//   ▀███▀███▀    ▀██████▀    ▀██████▀ 

function b_woo_setup() {
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}

function b_woo_wrapper_before() {
?>
<div id="shop" class="row">
	<main class="col">
<?php
}

function b_woo_change_products_title() {
	echo '<h2 class="woo-product-title"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
}

function b_woo_wrapper_after() {
?>
	</main>
</div>
<?php
}

function b_woo_active_body_class($classes) {
	$classes[] = 'woo';
	return $classes;
}

function b_woo_thumbnail_columns() {
	return _B['woo_columns'];
}

function b_woo_related_products_args($args) {
	$defaults = [
		'posts_per_page' => _B['woo_per_page'],
		'columns' => _B['woo_columns']
	];
	$args = wp_parse_args($defaults, $args);
	return $args;
}

function b_dequeue_styles($styles) {
	if (_B['woo_styles'] != 'yes') {
		unset($styles['woocommerce-general']);
		unset($styles['woocommerce-layout']);
		unset($styles['woocommerce-smallscreen']);
	}

	return $styles;
}


//   ▄████████   ▄██████▄   ████████▄      ▄████████  
//  ███    ███  ███    ███  ███   ▀███    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄      
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      
//  ███    █▄   ███    ███  ███    ███    ███    █▄   
//  ███    ███  ███    ███  ███   ▄███    ███    ███  
//  ████████▀    ▀██████▀   ████████▀     ██████████

// theme setup

function b_do_setup() {
	define('_B', _themeSettings::get_settings());

	if (_B['woo_support'] == 'yes') {
		b_woo_setup();

		add_action('woocommerce_before_main_content', 'b_woo_wrapper_before');
		add_action('woocommerce_shop_loop_item_title', 'b_woo_change_products_title', 10);
		add_action('woocommerce_after_main_content', 'b_woo_wrapper_after');
		
		add_filter('body_class', 'b_woo_active_body_class');
		add_filter('woocommerce_product_thumbnails_columns', 'b_woo_thumbnail_columns');
		add_filter('woocommerce_output_related_products_args', 'b_woo_related_products_args');
	}

	if (_B['woo_cleanup'] == 'yes') {
		remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
		remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
		remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10);
		remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
		remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
		remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
	}

	if (_OPTIONS_BASIC_WP['thumbnails']) {
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(192, 108);
	}

	register_nav_menus(_MENUS_BASIC_WP);
}

// wp options

function b_set_wp_options() {
	if (_B['editor_width'] != '') {
		add_filter('block_editor_settings_all', 'b_editor_settings', 10, 2);
	}

	if (get_option('blog_public') == '0') {
		add_action('admin_notices', 'b_admin_notice_sev');
	}

	if (_B['filter_post_list'] == 'yes') {
		add_action('pre_get_posts', 'b_filter_access');
	}

	if (_B['paginate_same_author'] == 'yes') {
		add_filter('get_next_post_where', 'b_keep_same_author', 10, 3);
		add_filter('get_previous_post_where', 'b_keep_same_author', 10, 3);
	}

	if (is_admin()) {
		// init updater

		if (class_exists('WPTU')) {
			if (get_option('auth_key') !== '') {
				$updater = new WPTU(__FILE__);
				$updater->set_versions('6.5', '6.5.4');
				$updater->set_username('nullstep');
				$updater->set_repository('basic_wp');
				$updater->authorize(get_option('auth_key'));
				$updater->initialize();
			}
		}

		if (_B['dev_mode'] == 'yes') {
			$tools = new _themeWidget('tools');
			$tools->html = '<p>' .
				$tools->button('caniuse.com', 'caniuse.com') .
				$tools->button('svg path editor', 'yqnn.github.io/svg-path-editor') .
				$tools->button('css-generators.com', 'css-generators.com') .
				$tools->button('fontawesome search', 'fontawesome.com/search') .
			'</p>';
			B::$widgets[] = ['tools' => $tools];
		}

		if (_B['reorder_menu'] == 'yes') {
			add_filter('custom_menu_order', 'b_reorder_admin_menu');
			add_filter('menu_order', 'b_reorder_admin_menu');
		}
	}
}

// admin notice - search engine visbility

function b_admin_notice_sev() {
	echo '<div class="notice notice-warning is-dismissible">';
		echo '<p>This site is currently set to discourage search engines from indexing it. If this is a live site and you\'re hoping for visits, this should be turned off.</p>';
	echo '</div>';
}

// set editor width

function b_editor_settings($settings, $context) {
	$settings['styles'][] = [
		'css' => 'html :where(.wp-block) { max-width:' . _B['editor_width'] . ' !important }',
		'__unstableType' => 'base-layout',
		'isGlobalStyles' => true
	];

	return $settings;
}

// add admin scripts

function b_add_scripts($hook) {
	$screen = get_current_screen();

	if (null !== $screen && $screen->base == 'toplevel_page_' . _THEME . '-theme-menu') {
		wp_enqueue_code_editor(['type' => 'application/x-httpd-php']);
	}

	if (isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'category') {
		wp_enqueue_media();
		wp_enqueue_script('jquery');
		wp_add_inline_script('jquery', '
			jQuery(document).ready(function($) {
				$("#category_image_upload").click(function(e) {
					e.preventDefault();
					var imageFrame;
					if (imageFrame) {
						imageFrame.open();
						return;
					}
					imageFrame = wp.media({
						title: "Select Category Image",
						button: {
							text: "Use this image",
						},
						multiple: false
					});
					imageFrame.on("select", function() {
						var attachment = imageFrame.state().get("selection").first().toJSON();
						$("#category_image").val(attachment.url);
					});
					imageFrame.open();
				});
			});
		');
	}
}

// excerpts

function b_set_excerpt_length($length) {
	return _B['excerpt_length'];
}

// page metadata

function b_add_post_metadata() {
	$screen = 'page';
	add_meta_box(
		'post_meta_box',
		'Additional',
		'b_add_post_metadata_callback',
		$screen,
		'side',
		'default',
		null
	);
}

function b_add_post_metadata_callback($post) {
	wp_nonce_field('post_save_data', 'post_meta_nonce');

	$css_class = get_post_meta($post->ID, 'css_class', true);
	$is_element = get_post_meta($post->ID, 'is_element', true);
	$page_width = get_post_meta($post->ID, 'page_width', true) ?? '0';

	$checked = ($is_element == 'yes') ? ' checked' : '';
?>
	<style>#b-meta .switch{position:relative;display:inline-block;width:50px;height:24px;margin:3px 5px 3px 0}#b-meta .switch input{opacity:0;width:0;height:0}#b-meta .slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#ccc;transition:0.4s;border-radius:24px}#b-meta .slider:before{position:absolute;content:"";height:16px;width:16px;left:4px;bottom:4px;background-color:white;transition:0.4s;border-radius:50%}#b-meta input:checked + .slider{background-color:var(--wp-admin-theme-color)}#b-meta input:focus + .slider{box-shadow:0 0 1px var(--wp-admin-theme-color)}#b-meta input:checked + .slider:before{transform:translateX(26px)}</style>
	<div id="b-meta">
		<input class="components-text-control__input" style="margin-top:8px;height:30px !important" type="text" name="css_class" value="<?php echo esc_attr($css_class); ?>" placeholder="Enter CSS Class...">
		<br><br>
		<label class="switch">
			<input type="checkbox" name="is_element" value="yes"<?php echo $checked; ?>>
			<span class="slider"></span>
		</label>
		<span class="components-checkbox-control__label">Is Element?</span>
		<br><br>
		<select style="box-sizing:border-box;border-radius:2px;border:1px solid rgb(148,148,148);width:100%" name="page_width">
			<option value="0" <?php selected($page_width, 0); ?>>Page Width: Default</option>
			<option value="1" <?php selected($page_width, 1); ?>>Page Width: Full</option>
			<option value="2" <?php selected($page_width, 2); ?>>Page Width: Fixed</option>
		</select>
	</div>
<?php
}

function b_save_post_metadata($post_id) {
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return;
		}
	}
	else {
		if (!current_user_can('edit_post', $post_id)) {
			return;
		}
	}
	if (isset($_POST['post_type'])) {
		if (in_array($_POST['post_type'], ['page', 'post'])) {
			if (!isset($_POST['post_meta_nonce'])) {
				return;
			}
			if (!wp_verify_nonce($_POST['post_meta_nonce'], 'post_save_data')) {
				return;
			}

			$css_class = isset($_POST['css_class']) ? sanitize_text_field($_POST['css_class']) : '';
			update_post_meta($post_id, 'css_class', $css_class);

			$is_element = isset($_POST['is_element']) ? sanitize_text_field($_POST['is_element']) : '';
			update_post_meta($post_id, 'is_element', $is_element);

			$page_width = isset($_POST['page_width']) ? sanitize_text_field($_POST['page_width']) : '';
			update_post_meta($post_id, 'page_width', $page_width);
		}
	}
}

// add buttons to pages list

function b_add_buttons($which) {
	$type = $_GET['post_type'] ?? null;    
	
	if ($which == 'top' && $type == 'page') {
		$current = (isset($_GET['show'])) ? $_GET['show'] : 'all';
?>
	<span style="display:inline-block;margin:5px 5px 0 5px">Show: </span>
	<style>.tablenav .button.active {background:var(--admin-highlight) !important; color:var(--admin-contrast) !important;box-shadow:none}.tablenav .button.active:hover {box-shadow: inset 0 0 100px 100px rgba(255,255,255,0.2)}</style>
	<a href="/wp-admin/edit.php?post_type=page" class="button<?php echo ($current == 'all') ? ' active' : ''; ?>">All</a>
	<a href="/wp-admin/edit.php?post_type=page&show=pages" class="button<?php echo ($current == 'pages') ? ' active' : ''; ?>">Pages</a>
	<a href="/wp-admin/edit.php?post_type=page&show=elements" class="button<?php echo ($current == 'elements') ? ' active' : ''; ?>">Elements</a>
<?php
	}
}

// filter page edit list

function b_load_edit() {
	if (is_admin()) {
		$type = $_GET['post_type'] ?? null;

		if ($type == 'page') {

			$current = (isset($_GET['show'])) ? $_GET['show'] : 'all';

			switch ($current) {
				case 'pages': {
					add_action('pre_get_posts', function($query) {
						$query->set('meta_query', [
							'relation' => 'OR',
							[
								'key' => 'is_element',
								'value' => 'blah',
								'compare' => 'NOT EXISTS'
							],
							[
								'key' => 'is_element',
								'value' => 'yes',
								'compare' => '!='
							]
						]);
					});

					break;
				}
				case 'elements': {
					add_action('pre_get_posts', function($query) {
						$query->set('meta_query', [
							'relation' => 'OR',
							[
								'key' => 'is_element',
								'value' => 'yes',
								'compare' => '=='
							]
						]);
					});

					break;
				}
			}
		}
	}
}

// keep same author

function b_keep_same_author($where, $in_same_cat, $excluded_cats) {
	global $post;
	return $where .= " AND p.post_author='" . $post->post_author . "'";
}

// filter post list by admin/user

function b_filter_access($wp_query) {
	if (is_user_logged_in()) {
		global $current_user;

		if (_B['filter_post_list'] == 'yes') {
			if (isset($wp_query->query['post_type']) && (is_admin() && in_array($wp_query->query['post_type'], ['attachment', 'page', 'post']))) {
				if (_B['admin_sees_all_posts'] == 'yes') {
					if (!current_user_can('manage_options')) {
						if (in_array('editor', $current_user->roles)) {
							$wp_query->set('author', $current_user->ID);
						}
					}
				}
				else {
					$wp_query->set('author', $current_user->ID);
				}
			}
		}
	}
}

// post category meta

function b_add_category_image() {
?>
	<div class="form-field">
		<label for="category_image">Category Image</label>
		<input type="text" name="category_image" id="category_image" value="">
		<br><br>
		<button class="button" id="category_image_upload">Select Image</button>
	</div>
<?php
}

function b_edit_category_image($term) {
	$image = get_term_meta($term->term_id, 'category_image', true);
?>
	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_image">Category Image</label>
		</th>
		<td>
			<input type="text" name="category_image" id="category_image" value="<?php echo esc_attr($image); ?>">
			<br><br>
			<button class="button" id="category_image_upload">Select Image</button>
		</td>
	</tr>
<?php
}

function b_save_category_image($term_id) {
	if (isset($_POST['category_image']) && '' !== $_POST['category_image']) {
		$image = esc_url_raw($_POST['category_image']);
		update_term_meta($term_id, 'category_image', $image);
	}
	else {
		delete_term_meta($term_id, 'category_image');
	}
}

// nav menu fields

function b_add_menu_fields($item_id, $item) {
	$is_megamenu = get_post_meta($item_id, '_is-megamenu', true);
	$show_item_icon = get_post_meta($item_id, '_show-item-icon', true);
	$item_icon = get_post_meta($item_id, '_item-icon', true);
?>
<p class="description description-wide">
	<label for="b-is-megamenu-<?php echo $item_id; ?>" >
		<input type="checkbox" id="b-is-megamenu-<?php echo $item_id; ?>" name="b-is-megamenu[<?php echo $item_id; ?>]" <?php checked($is_megamenu, true); ?>>
		Is Megamenu?
	</label>
</p>
<p class="description description-wide">
	<label for="b-show-item-icon-<?php echo $item_id; ?>">Show Item Icon</label>
	<br>
	<select id="b-show-item-icon" name="b-show-item-icon-<?php echo $item_id; ?>">
		<option value="none" <?php selected($show_item_icon, 'none'); ?>>None</option>
		<option value="fa" <?php selected($show_item_icon, 'fa'); ?>>FontAwesome</option>
		<option value="svg" <?php selected($show_item_icon, 'svg'); ?>>SVG</option>
		<option value="url" <?php selected($show_item_icon, 'url'); ?>>URL</option>
	</select>
</p>
<p class="description description-wide">
	<label for="b-item-icon-<?php echo $item_id; ?>">Item Icon</label>
	<br>
	<input type="text" class="widefat" name="b-item-icon-<?php echo $item_id; ?>" value="<?php echo $item_icon; ?>">
</p>
<?php
}

function b_save_menu_fields($menu_id, $menu_item_id) {
	$is_megamenu = (isset($_POST['b-is-megamenu'][$menu_item_id]) && $_POST['b-is-megamenu'][$menu_item_id] == 'on') ? true : false;
	update_post_meta($menu_item_id, '_is-megamenu', $is_megamenu);
	update_post_meta($menu_item_id, '_show-item-icon', $_POST['b-show-item-icon-' . $menu_item_id]);
	update_post_meta($menu_item_id, '_item-icon', $_POST['b-item-icon-' . $menu_item_id]);
}

function b_add_menu_classes($classes, $menu_item) {
	$show_item_icon = get_post_meta($menu_item->ID, '_show-item-icon', true);
	$item_icon = get_post_meta($menu_item->ID, '_item-icon', true);

	if ($show_item_icon != 'none' && $item_icon != '') {
		$classes[] = 'has-icon';
	}

	return $classes;
}


//     ▄████████     ▄█    █▄      ▄██████▄      ▄████████      ███      
//    ███    ███    ███    ███    ███    ███    ███    ███  ▀█████████▄  
//    ███    █▀     ███    ███    ███    ███    ███    ███     ▀███▀▀██  
//    ███          ▄███▄▄▄▄███▄▄  ███    ███   ▄███▄▄▄▄██▀      ███   ▀  
//  ▀███████████  ▀▀███▀▀▀▀███▀   ███    ███  ▀▀███▀▀▀▀▀        ███      
//           ███    ███    ███    ███    ███  ▀███████████      ███      
//     ▄█    ███    ███    ███    ███    ███    ███    ███      ███      
//   ▄████████▀     ███    █▀      ▀██████▀     ███    ███     ▄████▀

//   ▄████████   ▄██████▄   ████████▄      ▄████████     ▄████████  
//  ███    ███  ███    ███  ███   ▀███    ███    ███    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀     ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄        ███         
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      ▀███████████  
//  ███    █▄   ███    ███  ███    ███    ███    █▄            ███  
//  ███    ███  ███    ███  ███   ▄███    ███    ███     ▄█    ███  
//  ████████▀    ▀██████▀   ████████▀     ██████████   ▄████████▀

// logo shortcodes

function b_logo_normal_shortcode($atts = [], $content = null, $tag = '') {
	return '<img src="/uploads/' . _B['logo_image_normal'] . '" class="logo ' . $content .'">';
}

function b_logo_contrast_shortcode($atts = [], $content = null, $tag = '') {
	return '<img src="/uploads/' . _B['logo_image_contrast'] . '" class="logo ' . $content .'">';
}

// include file shortcode

function b_inc_shortcode($atts = [], $content = null, $tag = '') {
	if ($content) {
		ob_start();
		get_template_part($content);
		return ob_get_clean();
	}
	else {
		return '';
	}
}

// button shortcode

function b_button_shortcode($atts = [], $content = null, $tag = '') {
	$a = shortcode_atts([
		'link' => '#',
		'align' => '',
		'class' => 'btn-custom'
	], $atts);

	$button = '<a class="btn ' . $a['class'] . '" href="' . $a['link'] . '">' . $content . '</a>';

	if ($a['align']) {
		return '<div class="w-100 ' . $a['align'] . '">' . $button . '</div>';
	}
	else {
		return $button;
	}
}

// video shortcode

function b_video_shortcode($atts = [], $content = null, $tag = '') {
	$html = '<div class="video-box">';
		$html .= '<div class="video">';
			$html .= '<iframe src="' . $content . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		$html .= '</div>';
	$html .= '</div>';

	return $html;
}

// show child pages shortcode

function b_children_shortcode($atts = [], $content = null, $tag = '') {
	global $evil;

	$a = shortcode_atts([
		'wide' => '',
		'bg' => ''
	], $atts);

	$html = '';
	$wide = ($a['wide']) ? true : false;
	$bg = ($a['bg']) ? ' style="background:' . $a['bg'] . '"' : '';

	if (is_page()) {
		$current_page_id = $evil['page_id'] ?? get_the_ID();
		$child_pages = get_pages([ 
			'child_of' => $current_page_id,
			'sort_column' => 'menu_order',
			'sort_order' => 'ASC'
		]);

		if ($child_pages) {
			if ($wide) {
						$html .= '</div>';
					$html .= '</div>';
				$html .= '</div>';
				$html .= '<div class="container-fluid"' . $bg . '>';
			}
			else {
				$html .= '<div class="row">';
			}

			foreach ($child_pages as $child_page) {
				$page_css_class = get_post_meta($child_page->ID, 'css_class', true);
				$class = 'section' . (($page_css_class) ? ' ' . $page_css_class : '');
				$html .= '<div id="' . $child_page->post_name .  '-section" class="' . $class . '">' . do_shortcode($child_page->post_content) . '</div>';
			}

			if ($wide) {
				$html .= '</div>';
				$html .= '<div class="' . B::value('container_class', false) . '">';
					$html .= '<div class="row">';
						$html .= '<div class="col-12">';
			}
			else {
				$html .= '</div>';
			}
		}
	}

	return $html;
}

// show page shortcode

function b_page_shortcode($atts = [], $content = null, $tag = '') {
	global $evil;

	$a = shortcode_atts([
		'wide' => '',
		'bg' => '',
		'class' => ''
	], $atts);

	$html = '';
	$bg = ($a['bg']) ? ' style="background:' . $a['bg'] . '"' : '';
	$class = ($a['class']) ? ' class="' . $a['class'] . '"' : '';

	if ($content) {
		$page = get_posts([
			'name' => $content,
			'post_type' => 'page'
		]);

		if (is_array($page)) {
			$page = empty($page) ? null : $page[0];
		}

		if ($page) {
			$evil['page_id'] = $page->ID;

					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			$html .= '<div id="' . $page->post_name . '-section"' . $class . '>';
				$html .= '<div class="' . (($a['wide']) ? 'container-fluid' : B::value('container_class', false)) . '"' . $bg . '>';
					$html .= '<div class="row">';
						$html .= '<div class="' . (get_post_meta($page->ID, 'css_class', true) ?: 'section') . '">' . do_shortcode($page->post_content) . '</div>';
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			$html .= '<div class="' . B::value('container_class', false) . '">';
				$html .= '<div class="row">';
					$html .= '<div class="col-12">';
		}
	}

	unset($evil['page_id']);

	return $html;
} 

// latest posts shortcode

function b_latest_shortcode($atts = [], $content = null, $tag = '') {
	wp_reset_postdata();

	$a = shortcode_atts([
		'class' => '',
		'bg' => 'no',
		'row' => 'no'
	], $atts);

	$row = ($a['row'] == 'yes') ? ' class="row"' : '';
	$class = ($a['class']) ? ' ' . $a['class'] : '';

	$count = $content;
	$none = true;
	$num = 0;
	$post_id = get_queried_object_id();
	$cat = get_category_by_slug('uncategorised');

	$query = new WP_Query([
		'posts_per_page' => $count,
		'category__not_in' => $cat->term_id
	]);
	$html = '<div id="latest-posts"' . $row . '>';

	while ($query -> have_posts()) : $query -> the_post();
		if ((get_the_ID() != $post_id)) {
			$bg = '';

			if (_B['latest_images'] == 'yes') {
				if (has_post_thumbnail()) {
					$array = explode('/', wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnail')[0]);
					$bg = end($array);
				}				
			}

			if ($num <= $count) {
				$html .= '<div class="post-box my-3' . $class . '">';
					$html .= '<a class="post-link" href="' . get_permalink() . '" title="' . get_the_title() . '">';

						if ($bg && _B['latest_images'] == 'yes') {
							if ($a['bg'] == 'yes') {
								$html .= '<div class="post-img" style="background-image:url(/uploads/' . $bg . ')"><h4 class="post-title">' . get_the_title() . '</h4></div>';
							}
							else {
								$html .= '<img class="post-img" src="/uploads/' . $bg . '">';
								$html .= '<h4 class="post-title">' . get_the_title() . '</h4>';
							}
						}
						else {
							$html .= '<h4 class="post-title">' . get_the_title() . '</h4>';
						}

						$html .= '<p class="post-date">' . get_the_time(get_option('date_format')) . ' - ' . get_the_time() . '</p>';
						$html .= '<p class="post-excerpt">' . get_the_excerpt() . '</p>';
					$html .= '</a>';
				$html .= '</div>';

				$none = false;
				$num++;
			}
		}
	endwhile;

	if ($none) {
		$html .= '<div>No Posts&hellip;</div>';
	}
	return $html . '</div>';
}


//   ▄██████▄   ███    █▄       ███         ▄███████▄  ███    █▄       ███      
//  ███    ███  ███    ███  ▀█████████▄    ███    ███  ███    ███  ▀█████████▄  
//  ███    ███  ███    ███     ▀███▀▀██    ███    ███  ███    ███     ▀███▀▀██  
//  ███    ███  ███    ███      ███   ▀    ███    ███  ███    ███      ███   ▀  
//  ███    ███  ███    ███      ███      ▀█████████▀   ███    ███      ███      
//  ███    ███  ███    ███      ███        ███         ███    ███      ███      
//  ███    ███  ███    ███      ███        ███         ███    ███      ███      
//   ▀██████▀   ████████▀      ▄████▀     ▄████▀       ████████▀      ▄████▀

function b_buffer_output() {
	if (!wp_doing_ajax() && !is_admin()) {
		ob_start('b_return_buffer');
	}
}

function b_return_buffer($html) {
	if (!$html) {
		return $html;
	}

	return apply_filters('b_buffer_output', $html);
}

function b_parse_output($html) {
	$regexes = [
		'/\swp-container-core-columns-is-layout-\w+/',
		'/\swp-block-columns-is-layout-\w+/',
		'/\swp-block-column-is-layout-\w+/',
		'/\sis-layout-\w+/'
	];

	foreach ($regexes as $regex) {
		$html = preg_replace($regex, '', $html);
	}

	$replace = [
		'alignwide' => 'container',
		'alignfull' => 'container-fluid',
		'wp-block-group__inner-container' => 'row',
		'wp-block-group' => 'col',
		'wp-block-button__link' => 'btn btn-primary',
		'wp-block-button' => 'btn-wrapper',
		'wp-block-cover__inner-container' => 'd-flex align-items-center justify-content-center',
		'wp-block-cover' => 'position-relative',
		'wp-block-image__figure' => 'img-fluid',
		'wp-block-image' => 'figure',
		'wp-block-gallery-item' => 'row',
		'wp-block-gallery' => 'col',
		'wp-block-quote' => 'blockquote',
		'wp-block-pullquote' => 'blockquote',
		'wp-block-table__table-wrapper' => 'table-responsive',
		'wp-block-table' => 'table',
		'wp-block-media-text' => 'd-flex align-items-center',
		'wp-block-columns' => 'row',
		'wp-block-column' => 'col',
		'wp-block-spacer' => 'my-3',
		'wp-block-separator' => 'border-top',
		'wp-block-list__item' => 'list-group-item',
		'wp-block-list' => 'list-unstyled',
		'has-text-align-left' => 'text-start',
		'has-text-align-right' => 'text-end',
		'has-text-align-center' => 'text-center',
		'alignleft' => 'float-start',
		'alignright' => 'float-end',
		'aligncenter' => 'text-center'
	];

	foreach ($replace as $wp => $bs) {
		$html = str_replace($wp, $bs, $html);
	}

	$html = str_replace('<div class="container"><div class="row"><div class="col-12"></div></div>', '', $html);
	$html = preg_replace(
		'#<div class="row"><div class="section"><div class="row">(.*?)</div></div></div>#s',
		'<div class="row">$1</div>',
		$html
	);

	return $html;
}


//    ▄▄▄▄███▄▄▄▄     ▄█      ▄████████   ▄████████  
//  ▄██▀▀▀███▀▀▀██▄  ███     ███    ███  ███    ███  
//  ███   ███   ███  ███▌    ███    █▀   ███    █▀   
//  ███   ███   ███  ███▌    ███         ███         
//  ███   ███   ███  ███▌  ▀███████████  ███         
//  ███   ███   ███  ███            ███  ███    █▄   
//  ███   ███   ███  ███      ▄█    ███  ███    ███  
//   ▀█   ███   █▀   █▀     ▄████████▀   ████████▀

// admin styling

function b_admin_styling() {
	$dir = wp_upload_dir();
	echo '<link rel="shortcut icon" type="image/x-icon" href="' . $dir['url'] . '/' . _B['favicon_image'] . '" />';
	echo '<style>';
		echo ':root{--admin-contrast:' . B::contrast(_B['admin_highlight_colour']) . ';--admin-link:' . _B['admin_link_colour'] . ';--admin-highlight:'. _B['admin_highlight_colour'] . '}';
		echo 'a{color:var(--admin-link)}input[type=checkbox]:focus,input[type=color]:focus,input[type=date]:focus,input[type=datetime-local]:focus,input[type=datetime]:focus,input[type=email]:focus,input[type=month]:focus,input[type=number]:focus,input[type=password]:focus,input[type=radio]:focus,input[type=search]:focus,input[type=tel]:focus,input[type=text]:focus,input[type=time]:focus,input[type=url]:focus,input[type=week]:focus,select:focus,textarea:focus{border-color:var(--admin-highlight);box-shadow:0 0 0 1px var(--admin-highlight)}a:active,a:hover{color:#2c3338}#adminmenu a:hover,#adminmenu li.menu-top:hover,#adminmenu li.opensub>a.menu-top,#adminmenu li>a.menu-top:focus,.wp-core-ui .wp-ui-highlight{color:#fff;background-color:var(--admin-highlight)}#adminmenu li:hover a div.wp-menu-image:before{color:#fff!important}#adminmenu .wp-has-current-submenu .wp-submenu a:focus,#adminmenu .wp-has-current-submenu .wp-submenu a:hover,#adminmenu .wp-has-current-submenu.opensub .wp-submenu a:focus,#adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover,#adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a:focus,#adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a:hover,#adminmenu .wp-submenu a:focus,#adminmenu .wp-submenu a:hover,#adminmenu .wp-submenu li.current a:focus,#adminmenu .wp-submenu li.current a:hover,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu a:focus,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu a:hover,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a:focus,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a:hover,.folded #adminmenu .wp-has-current-submenu .wp-submenu a:focus,.folded #adminmenu .wp-has-current-submenu .wp-submenu a:hover,.theme-browser .theme.add-new-theme a:focus span:after,.theme-browser .theme.add-new-theme a:hover span:after,.wp-core-ui .wp-ui-text-highlight,.wp-pointer .wp-pointer-content h3:before,#collapse-button:focus,#collapse-button:hover,#wpadminbar #wp-admin-bar-user-info a:hover .display-name,#wpadminbar .ab-top-menu>li.menupop.hover>.ab-item,#wpadminbar .menupop .menupop>.ab-item:hover:before,#wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover>a,#wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover>a .blavatar,#wpadminbar .quicklinks .menupop ul li a:focus,#wpadminbar .quicklinks .menupop ul li a:focus strong,#wpadminbar .quicklinks .menupop ul li a:hover,#wpadminbar .quicklinks .menupop ul li a:hover strong,#wpadminbar .quicklinks .menupop.hover ul li a:focus,#wpadminbar .quicklinks .menupop.hover ul li a:hover,#wpadminbar .quicklinks li a:focus .blavatar,#wpadminbar .quicklinks li a:hover .blavatar,#wpadminbar li #adminbarsearch.adminbar-focused:before,#wpadminbar li .ab-item:focus .ab-icon:before,#wpadminbar li .ab-item:focus:before,#wpadminbar li a:focus .ab-icon:before,#wpadminbar li.hover .ab-icon:before,#wpadminbar li.hover .ab-item:before,#wpadminbar li:hover #adminbarsearch:before,#wpadminbar li:hover .ab-icon:before,#wpadminbar li:hover .ab-item:before,#wpadminbar.mobile .quicklinks .ab-icon:before,#wpadminbar.mobile .quicklinks .ab-item:before,#wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus,#wpadminbar.nojs .ab-top-menu>li.menupop:hover>.ab-item,#wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus,#wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover,#wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item,#wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus,#wpadminbar:not(.mobile)>#wp-toolbar a:focus span.ab-label,#wpadminbar:not(.mobile)>#wp-toolbar li.hover span.ab-label,#wpadminbar:not(.mobile)>#wp-toolbar li:hover span.ab-label,#adminmenu li a:focus div.wp-menu-image:before,#adminmenu li.opensub div.wp-menu-image:before,#wp-toolbar li.menupop:hover,#adminmenu li:hover div.wp-menu-image:before,#adminmenu .wp-submenu li a:hover{color:#fff}#adminmenu li.current a.menu-top,#adminmenu li.wp-has-current-submenu .wp-submenu .wp-submenu-head,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,.folded #adminmenu li.current.menu-top{color:#fff;background:var(--admin-highlight)}.media-item .bar,.media-progress-bar div,.wp-pointer .wp-pointer-content h3{background-color:var(--admin-highlight)}.wp-pointer.wp-pointer-top .wp-pointer-arrow,.wp-pointer.wp-pointer-top .wp-pointer-arrow-inner,.wp-pointer.wp-pointer-undefined .wp-pointer-arrow,.wp-pointer.wp-pointer-undefined .wp-pointer-arrow-inner{border-bottom-color:var(--admin-highlight)}.details.attachment{box-shadow:inset 0 0 0 3px #fff,inset 0 0 0 7px var(--admin-highlight)}.attachment.details .check{background-color:var(--admin-highlight);box-shadow:0 0 0 1px #fff,0 0 0 2px var(--admin-highlight)}.media-selection .attachment.selection.details .thumbnail{box-shadow:0 0 0 1px #fff,0 0 0 3px var(--admin-highlight)}.mce-container.mce-menu .mce-menu-item-normal.mce-active,.mce-container.mce-menu .mce-menu-item-preview.mce-active,.mce-container.mce-menu .mce-menu-item.mce-selected,.mce-container.mce-menu .mce-menu-item:focus,.mce-container.mce-menu .mce-menu-item:hover,.theme-browser .theme.active .theme-name,.theme-browser .theme.add-new-theme a:focus:after,.theme-browser .theme.add-new-theme a:hover:after{background:var(--admin-highlight)}.widgets-chooser li.widgets-chooser-selected,body.more-filters-opened .more-filters:focus,body.more-filters-opened .more-filters:hover{background-color:var(--admin-highlight);color:#fff}.wp-responsive-open div#wp-responsive-toggle a{border-color:transparent;background:var(--admin-highlight)}#wpbody-content a.page-title-action,#wpbody-content .button:not(.show-settings),#wpbody-content .postform,#wpbody-content .actions select{border:1px solid var(--admin-highlight);color:#111}.wp-core-ui .button-primary{background:var(--admin-highlight)!important;border:1px solid var(--admin-highlight);color:var(--admin-contrast)!important}';
	echo '</style>';
	echo '<script>';
		echo 'var _wpColorScheme = {"icons":{"base":"#a7aaad","focus":"#fff","current":"#fff"}};';
		echo 'jQuery(function(){jQuery("#wp-toolbar #wp-admin-bar-site-name a.ab-item").attr("target","_blank");});';
	echo '</script>';
}

// re-order admin menu items

function b_reorder_admin_menu($__return_true) {
	return [
		 'index.php', // dashboard
		 'edit.php?post_type=page', // pages
		 'edit.php', // posts
		 'upload.php', // media
		 'edit-comments.php', // comments
		 'users.php', // users
		 'separator1', 
		 'themes.php', // appearance
		 'plugins.php', // plugins
		 'tools.php', // tools
		 'options-general.php', // settings
		 'separator2'        
   ];
}

// seo metadata fields

function b_post_sidebar_fields() {
	$types = ['page', 'post'];
	$fields = ['title', 'description', 'keywords'];

	$data = [
		'show_in_rest' => true,
		'type' => 'string',
		'single' => true,
		'sanitize_callback' => 'sanitize_text_field',
		'auth_callback' => function() {
			return current_user_can('edit_posts');
		}
	];

	foreach ($types as $type) {
		foreach ($fields as $field) {
			register_post_meta($type, '_' . $field, $data);
		}
	}	
}

function b_post_sidebar() {
	wp_register_script('b-sidebar-js', '', ['wp-plugins', 'wp-edit-post', 'wp-element', 'wp-components', 'wp-data']);

	$js = <<<JS
(function() {
	const { registerPlugin } = wp.plugins;
	const { PluginSidebar, PluginSidebarMoreMenuItem } = wp.editor;
	const { PanelBody, TextareaControl, TextControl } = wp.components;
	const { createElement, useEffect, useState } = wp.element;
	const { select, dispatch, subscribe, withSelect, withDispatch } = wp.data;

	const b_icon = ({ fillColour }) => createElement(
		'svg', {
			version: '1.1',
			xmlns: 'http://www.w3.org/2000/svg',
			width: '20',
			height: '20',
			viewBox: '0 0 500 500'
		},
		createElement('path', {
			fill: fillColour,
			d: 'M250.2,17.4L49,133.5v232.3L250.2,482l201.2-116.2V133.5L250.2,17.4z M371.8,347H128.4v-48.7h194.7v-48.7H128.4v-97.4h48.7 v48.7h194.7V347z'
		})
	);
	const b_sidebar = () => {
		const meta = select('core/editor').getEditedPostAttribute('meta') || {};
		const [titleField, setTitleField] = useState(meta._title || '');
		const [descriptionField, setDescriptionField] = useState(meta._description || '');
		const [keywordsField, setKeywordsField] = useState(meta._keywords || '');

		const updateTitle = (value) => {
			setTitleField(value);
			dispatch('core/editor').editPost({
				meta: { _title: value }
			});
		};
		const updateDescription = (value) => {
			setDescriptionField(value);
			dispatch('core/editor').editPost({
				meta: { _description: value }
			});
		};
		const updateKeywords = (value) => {
			setKeywordsField(value);
			dispatch('core/editor').editPost({
				meta: { _keywords: value }
			});
		};

		return createElement(
			PluginSidebar, {
				name: 'b-sidebar',
				title: 'SEO Metadata',
				icon: b_icon
			},
			createElement(
				PanelBody, {
					title: 'Settings'
				},
				createElement(
					TextControl, {
						label: 'Title',
						value: titleField,
						onChange: updateTitle
					}
				),
				createElement(
					TextareaControl, {
						label: 'Description',
						value: descriptionField,
						onChange: updateDescription
					}
				),
				createElement(
					TextareaControl, {
						label: 'Keywords',
						value: keywordsField,
						onChange: updateKeywords
					}
				)
			)
		);
	};

	registerPlugin('b-sidebar', {
		render: () => {
			const [isSidebarOpen, setIsSidebarOpen] = useState(false);

			useEffect(() => {
				const unsubscribe = subscribe(() => {
					const isOpen = select('core/edit-post').isPluginSidebarOpened('b-sidebar');
					setIsSidebarOpen(isOpen);
				});
				return () => unsubscribe();
			}, []);

			return [
				createElement(PluginSidebarMoreMenuItem, {
					target: 'b-sidebar',
					icon: createElement(b_icon, { fillColor: isSidebarOpen ? '#ffffff' : '#000000' })
				}, 'SEO Metadata'),
				createElement(b_sidebar)
			];
		}
	});
})();
JS;

	wp_add_inline_script('b-sidebar-js', $js);
	wp_enqueue_script('b-sidebar-js');
}


//     ▄█    █▄        ▄████████   ▄█           ▄███████▄  
//    ███    ███      ███    ███  ███          ███    ███  
//    ███    ███      ███    █▀   ███          ███    ███  
//   ▄███▄▄▄▄███▄▄   ▄███▄▄▄      ███          ███    ███  
//  ▀▀███▀▀▀▀███▀   ▀▀███▀▀▀      ███        ▀█████████▀   
//    ███    ███      ███    █▄   ███          ███         
//    ███    ███      ███    ███  ███▌    ▄    ███         
//    ███    █▀       ██████████  █████▄▄██   ▄████▀  

// bootstrap 5 nav walker

class WP_Bootstrap_Navwalker extends Walker_Nav_menu {
	private $current_item;

	function start_lvl(&$output, $depth = 0, $args = null) {
		$is_megamenu = get_post_meta($args->walker->current_item->ID, '_is-megamenu', true);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$megamenu = ($is_megamenu) ? ' is-megamenu' : '';
		$output .= '<ul class="dropdown-menu' . $submenu . $megamenu . '">';
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
		$this->current_item = $item;

		$li_attributes = $class_names = $value = '';

		$classes = empty($item->classes) ? [] : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = 'nav-item';

		if ($depth && $args->walker->has_children) {
			$classes[] = 'dropdown-menu dropdown-menu-end';
		}

		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

		$output .= '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

		$active_class = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link ';
		$attributes .= ($args->walker->has_children) ? ' class="'. $nav_link_class . $active_class . 'dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

		$show_item_icon = get_post_meta($item->ID, '_show-item-icon', true);
		$item_icon = get_post_meta($item->ID, '_item-icon', true);
		$icon = '';

		switch ($show_item_icon) {
			case 'fa': {
				$icon = '<i class="item-icon fa-solid ' . $item_icon . '"></i>';
				break;
			}
			case 'svg': {
				$icon = '<svg class="item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">' . $item_icon . '</svg>';
				break;
			}
			case 'url': {
				$icon = '<img class="item-icon" src="/uploads/' . $item_icon . '">';
				break;
			}
		}

		$item_output = $args->before . '<a' . $attributes . '>' . $icon . $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after . '</a>' . $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		$output = str_replace("\n", '', $output);
	}

	function end_el(&$output, $data_object, $depth = 0, $args = []) {
		$output = str_replace("\n", '', $output);
	}
}

// minifying functions

function minify_css($input) {
	if (trim($input) === '') {
		return $input;
	}

	return preg_replace([
			'#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?!\!)(?>.*?\*\/)|^\s*|\s*$#s',
			'#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~]|\s(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si',
			'#(?<=[\s:])(0)(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)#si',
			'#:(0\s+0|0\s+0\s+0\s+0)(?=[;\}]|\!important)#i',
			'#(background-position):0(?=[;\}])#si',
			'#(?<=[\s:,\-])0+\.(\d+)#s',
			'#(\/\*(?>.*?\*\/))|(?<!content\:)([\'"])([a-z_][a-z0-9\-_]*?)\2(?=[\s\{\}\];,])#si',
			'#(\/\*(?>.*?\*\/))|(\burl\()([\'"])([^\s]+?)\3(\))#si',
			'#(?<=[\s:,\-]\#)([a-f0-6]+)\1([a-f0-6]+)\2([a-f0-6]+)\3#i',
			'#(?<=[\{;])(border|outline):none(?=[;\}\!])#',
			'#(\/\*(?>.*?\*\/))|(^|[\{\}])(?:[^\s\{\}]+)\{\}#s'
		], [
			'$1',
			'$1$2$3$4$5$6$7',
			'$1',
			':0',
			'$1:0 0',
			'.$1',
			'$1$3',
			'$1$2$4$5',
			'$1$2$3',
			'$1:0',
			'$1$2'
		],
	$input);
}

function minify_js($input) {
	if (trim($input) === '') {
		return $input;
	}

	return preg_replace([
			'#\s*("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')\s*|\s*\/\*(?!\!|@cc_on)(?>[\s\S]*?\*\/)\s*|\s*(?<![\:\=])\/\/.*(?=[\n\r]|$)|^\s*|\s*$#',
			'#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/)|\/(?!\/)[^\n\r]*?\/(?=[\s.,;]|[gimuy]|$))|\s*([!%&*\(\)\-=+\[\]\{\}|;:,.<>?\/])\s*#s',
			'#;+\}#',
			'#([\{,])([\'])(\d+|[a-z_][a-z0-9_]*)\2(?=\:)#i',
			'#([a-z0-9_\)\]])\[([\'"])([a-z_][a-z0-9_]*)\2\]#i'
		], [
			'$1',
			'$1$2',
			'}',
			'$1$3',
			'$1.$3'
		],
	$input);
}

// generate our stored css

function generate_css() {
	$s = _themeSettings::get_settings();

	$css = ':root{';
	$colours = [
		'page',
		'text',
		'heading',
		'info',
		'info_text',
		'nav',
		'nav_text',
		'nav_active',
		'banner',
		'banner_text',
		'footer_top',
		'footer',
		'footer_text',
		'primary',
		'secondary',
		'tertiary',
		'quaternary',
		'light',
		'dark'
	];

	foreach ($colours as $c) {
		$css .= '--' . str_replace('_', '-', $c) . '-colour:' . $s[$c . '_colour'] . ';';
	}

	$contrasts = [
		'primary',
		'secondary',
		'tertiary',
		'quaternary'
	];

	foreach ($contrasts as $c) {
		$css .= '--' . str_replace('_', '-', $c) . '-contrast:' . B::contrast($s[$c . '_colour']) . ';';
	}		

	$css .= '}body{background:var(--page-colour);font-family:var(--body-font);color:var(--text-colour)}#body h1,h2,h3,h4,h5,h6{font-family:var(--heading-font);color:var(--heading-colour)}#body .navbar{font-family:var(--nav-font);background-color:var(--nav-colour)}#body .navbar .nav-link{color:var(--nav-text-colour)}#body .navbar .active{color:var(--nav-active-colour)}pre,code{font-family:var(--mono-font)}#info-area{background:var(--info-colour);color:var(--info-text-colour)}#banner-area{background:var(--banner-colour);color:var(--banner-text-colour)}#footer-top-area{background:var(--footer-top-colour);color:var(--footer-text-colour)}#footer-area{background:var(--footer-colour);color:var(--footer-text-colour)}a{color:var(--primary-colour)}h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{text-decoration:none;color:var(--heading-colour)}hr{height:5px!important;background:var(--primary-colour);width:75%;margin:1em auto}#body .dropdown-menu[data-bs-popper]{left:unset}#body .navbar-collapse{flex-grow:unset}.ml-none{margin-left:0;margin-right:.5rem}.mr-none{margin-left:.5rem;margin-right:0}.mb-none{margin-left:.5rem;margin-right:.5rem}#body .btn-primary{background-color:var(--primary-colour);border:none}#body .btn-primary:hover{box-shadow:0 0 100px 100px rgb(255 255 255 / .1) inset;color:var(--text-colour)}.feed a{text-decoration:none;color:var(--text-colour)}.size-full img{max-width:100%}#mode-switch{color:var(--nav-text-colour)}.toggle{margin:0 .25rem;display:block;height:1rem;width:2rem;border-radius:.5rem;background:#777879;position:relative;transition:0.25s}.toggle:after{transition:0.25s;content:"";display:block;position:absolute;top:0;bottom:0;margin:auto;width:.75rem;height:.75rem;background:#fff;border-radius:50%;margin-left:.125rem}body.dark .toggle:after{left:1rem}body.light .toggle:after{left:0}.boxed{max-width:' . B::value('max_width', false) . ';margin-inline:auto}.row .col:first-child{padding-left:0}.row .col:last-child{padding-right:0}@media(max-width:768px){.row{flex-wrap:wrap}.col{width:100%;flex:1 1 100%}}';

	if ($s['headings_upper'] == 'yes') {
		$css .= 'h1,h2,h3,h4,h5,h6{text-transform:uppercase}';
	}

	if ($s['nav_upper'] == 'yes') {
		$css .= '#nav-area nav .nav-item{text-transform:uppercase}';
	}

	$buttons = [
		'primary',
		'secondary',
		'tertiary',
		'quaternary'
	];

	foreach ($buttons as $b) {
		$css .= str_replace('bwp', $b, '#body .btn-bwp,#body .btn-bwp.disabled,#body .btn-bwp.disabled.active,#body .btn-bwp.disabled:active,#body .btn-bwp.disabled:focus,#body .btn-bwp.disabled:hover,#body .btn-bwp[disabled],#body .btn-bwp[disabled].active,#body .btn-bwp[disabled]:active,#body .btn-bwp[disabled]:focus,#body .btn-bwp[disabled]:hover,#body fieldset[disabled] .btn-bwp,#body fieldset[disabled] .btn-bwp.active,#body fieldset[disabled] .btn-bwp:active,#body fieldset[disabled] .btn-bwp:focus,#body fieldset[disabled] .btn-bwp:hover{background-color:var(--bwp-colour);border-color:var(--bwp-colour);color:var(--bwp-contrast)}#body .btn-bwp.active,#body .btn-bwp:active,#body .btn-bwp:focus,#body .btn-bwp:hover,#body .open .dropdown-toggle.btn-bwp{color:var(--bwp-contrast);background-color:var(--bwp-colour);border-color:var(--bwp-colour);box-shadow:0 0 100px 100px rgba(255,255,255,.1) inset}#body .btn-bwp.active,#body .btn-bwp:active,#body .open .dropdown-toggle.btn-bwp{background-image:none}#body .btn-bwp .badge{color:var(--bwp-colour);background-color:var(--bwp-contrast)}');
	}

	$root = '';
	$fonts = '';

	$template = '@import url(\'https://fonts.googleapis.com/css2?family=[F]:wght@200..800&display=swap\');';

	$types = [
		'heading',
		'nav',
		'body',
		'mono'
	];

	foreach ($types as $font_type) {
		if ($s[$font_type . '_font'] != '') {
			$name = str_replace(' ', '+', $s[$font_type . '_font']);

			if (($fonts == '') || (strpos($fonts, $name) === false)) {
				$fonts .= str_replace('[F]', $name, $template);
			}

			$root .= '--' . str_replace('_', '-', $font_type . '_font') . ':' . $s[$font_type . '_font'] . ';';
		}
	}

	if ($root != '') {
		$fonts .= ':root{' . $root . '}';
	}

	$breakpoints = [
		'xs' => '@media(min-width:0){',
		'sm' => '@media(min-width:576px){',
		'md' => '@media(min-width:768){',
		'lg' => '@media(min-width:992px){',
		'xl' => '@media(min-width:1200px){',
		'xxl' => '@media(min-width:1400px){',
	];

	$theme_css = '';

	foreach ($breakpoints as $bp => $mq) {
		$theme_css .= $mq . minify_css($s['theme_' . $bp . '_css']) . '}';
	}

	return $fonts . $css . $theme_css;
}

// curl

function curl($url) {
	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

	$response = curl_exec($curl);
	curl_close($curl);

	return $response;
}

function b_css_concatenator() {
	global $wp_styles;

	$upload_dir = wp_upload_dir();
	$concat_file_path = $upload_dir['basedir'] . '/styles.css';

	$concatenated_content = '';
	$concat_styles = [];
	$processed_styles = [];

	function process_style($handle, &$concatenated_content, &$concat_styles, &$processed_styles) {
		global $wp_styles;

		if (in_array($handle, $processed_styles)) {
			return;
		}

		$style = $wp_styles->registered[$handle];

		if (!empty($style->deps)) {
			foreach ($style->deps as $dep) {
				process_style($dep, $concatenated_content, $concat_styles, $processed_styles);
			}
		}

		$style_path = ABSPATH . str_replace(site_url('/'), '', $style->src);

		if (file_exists($style_path)) {
			$content = file_get_contents($style_path);
			$concatenated_content .= $content . "\n";
			$concat_styles[] = $handle;
			$processed_styles[] = $handle;
		}
	}

	if (!file_exists($concat_file_path)) {
		foreach ($wp_styles->queue as $handle) {
			process_style($handle, $concatenated_content, $concat_styles, $processed_styles);
		}

		file_put_contents($concat_file_path, $concatenated_content);
	}

	//wp_enqueue_style('styles', $upload_dir['baseurl'] . '/styles.css', [], null, 'all');

	foreach ($wp_styles->queue as $handle) {
		wp_dequeue_style($handle);
	}
}

function b_js_concatenator() {
	global $wp_scripts;

	$upload_dir = wp_upload_dir();
	$concat_file_path = $upload_dir['basedir'] . '/scripts.js';

	$concatenated_content = '';
	$concat_scripts = [];
	$processed_scripts = [];

	function process_script($handle, &$concatenated_content, &$concat_scripts, &$processed_scripts) {
		global $wp_scripts;

		if (in_array($handle, $processed_scripts)) {
			return;
		}

		$script = $wp_scripts->registered[$handle];

		if (!empty($script->deps)) {
			foreach ($script->deps as $dep) {
				process_script($dep, $concatenated_content, $concat_scripts, $processed_scripts);
			}
		}

		$script_path = ABSPATH . str_replace(site_url('/'), '', $script->src);

		if (file_exists($script_path)) {
			$content = file_get_contents($script_path);
			$concatenated_content .= $content . "\n";
			$concat_scripts[] = $handle;
			$processed_scripts[] = $handle;
		}
	}

	if (!file_exists($concat_file_path)) {
		foreach ($wp_scripts->queue as $handle) {
			process_script($handle, $concatenated_content, $concat_scripts, $processed_scripts);
		}
		
		file_put_contents($concat_file_path, $concatenated_content);
	}

	//wp_enqueue_script('scripts', $upload_dir['baseurl'] . '/scripts.js', [], null, true);

	foreach ($wp_scripts->queue as $handle) {
		wp_dequeue_script($handle);
	}
}


//   ▄█   ███▄▄▄▄▄     ▄█       ███      
//  ███   ███▀▀▀▀██▄  ███   ▀█████████▄  
//  ███▌  ███    ███  ███▌     ▀███▀▀██  
//  ███▌  ███    ███  ███▌      ███   ▀  
//  ███▌  ███    ███  ███▌      ███      
//  ███   ███    ███  ███       ███      
//  ███   ███    ███  ███       ███      
//  █▀     ▀█    █▀   █▀       ▄████▀

// oh mah gawd a global!

global $evil;

// actions

add_action('init', 'b_set_wp_options');
add_action('admin_enqueue_scripts', 'b_add_scripts');
add_action('admin_head', 'b_admin_styling', 999);
add_action('after_setup_theme', 'b_do_setup');
add_action('add_meta_boxes', 'b_add_post_metadata');
add_action('save_post', 'b_save_post_metadata');
add_action('load-edit.php', 'b_load_edit');
add_action('manage_posts_extra_tablenav', 'b_add_buttons', 10, 1);
add_action('wp_nav_menu_item_custom_fields', 'b_add_menu_fields', 10, 2);
add_action('wp_update_nav_menu_item', 'b_save_menu_fields', 10, 2);
add_action('category_add_form_fields', 'b_add_category_image', 10, 2);
add_action('category_edit_form_fields', 'b_edit_category_image', 10, 2);
add_action('created_category', 'b_save_category_image', 10, 2);
add_action('edited_category', 'b_save_category_image', 10, 2);
add_action('enqueue_block_editor_assets', 'b_post_sidebar');
add_action('init', 'b_post_sidebar_fields');

//add_action('wp_enqueue_scripts', 'b_js_concatenator', 999);
//add_action('wp_enqueue_scripts', 'b_css_concatenator', 999);

// filters

add_filter('excerpt_length', 'b_set_excerpt_length', 999);
add_filter('nav_menu_css_class', 'b_add_menu_classes', 10, 2);
add_filter('woocommerce_enqueue_styles', 'b_dequeue_styles');

// shortcodes

add_shortcode('logo-normal', 'b_logo_normal_shortcode');
add_shortcode('logo-contrast', 'b_logo_contrast_shortcode');
add_shortcode('children', 'b_children_shortcode');
add_shortcode('inc', 'b_inc_shortcode');
add_shortcode('latest', 'b_latest_shortcode');
add_shortcode('page', 'b_page_shortcode');
add_shortcode('video', 'b_video_shortcode');
add_shortcode('button', 'b_button_shortcode');

// fix lazy-loading/auto issue

add_filter('wp_content_img_tag', function($image) {
	return str_replace(' sizes="auto, ', ' sizes="', $image);
});

add_filter('wp_get_attachment_image_attributes', function($attr) {
	if (isset($attr['sizes'])) {
		$attr['sizes'] = preg_replace('/^auto, /', '', $attr['sizes']);
	}

	return $attr;
});

// parse final output

add_action('template_redirect', 'b_buffer_output', 3);
add_filter('b_buffer_output', 'b_parse_output');

// we don't want these

remove_action('shutdown', 'wp_ob_end_flush_all', 1);

// boot theme

add_action('init', function() {
	if (is_admin()) {
		$assets_url = get_template_directory_uri();
		new _themeMenu($assets_url);
	}
});

// boot api

add_action('rest_api_init', function() {
	_themeSettings::args();
	$api = new _themeAPI();
	$api->add_routes();
});

// eof