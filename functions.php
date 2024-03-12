<?php
/*
 *  Author: nullstep
 *  URL: https://nullstep.com/
 */

// -_-

define('EOL', "\r\n");

define('_THEME', 'basic_wp');

// basic_wp default css

define('_CSS_BASIC_WP', '#info-area {}' . EOL . '#nav-area {}' . EOL . '#banner-area {}' . EOL . '#content-area {}' . EOL . '#footer-top-area {}' . EOL . '#footer-area {}' . EOL . '@media (max-width: 576px) {}' . EOL . '@media (max-width: 768px) {}' . EOL . '@media (max-width: 992px) {}' . EOL . '@media (max-width: 1200px) {}' . EOL . '@media (max-width: 1400px) {}');

// basic_wp data

define('_ARGS_BASIC_WP', [
	'container_class' => [
		'type' => 'string',
		'default' => 'container'
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
	'nav_layout' => [
		'type' => 'string',
		'default' => 'nav,logo,search'
	],
	'nav_nav_align' => [
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
	'nav_shadow' => [
		'type' => 'string',
		'default' => 'yes'
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
	'editor_width' => [
		'type' => 'string',
		'default' => ''
	],
	'theme_css' => [
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
			'header_order' => [
				'label' => 'Header Order/Layout',
				'type' => 'select',
				'values' => [
					'nav' => 'Nav',
					'info,nav' => 'Info > Nav',
					'nav,info' => 'Nav > Info',
					'banner,nav' => 'Banner > Nav',
					'nav,banner' => 'Nav > Banner',
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
			'editor_width' => [
				'label' => 'Set Width of Gutenberg Editor',
				'type' => 'input'
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
			'latest_images' => [
				'label' => 'Show Images in Latest Posts',
				'type' => 'check'
			]
		]
	],
	'navbar' => [
		'label' => 'Navbar',
		'columns' => 4,
		'fields' => [
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
			'nav_layout' => [
				'label' => 'Navbar Layout',
				'type' => 'select',
				'values' => [
					'nav' => 'Nav',
					'logo,nav' => 'Logo > Nav',
					'nav,logo' => 'Nav > Logo',
					'search,nav' => 'Search > Nav',
					'nav,search' => 'Nav > Search',
					'logo,nav,search' => 'Logo > Nav > Search',
					'logo,search,nav' => 'Logo > Search > Nav',
					'nav,logo,search' => 'Nav > Logo > Search',
					'nav,search,logo' => 'Nav > Search > Logo',
					'search,logo,nav' => 'Search > Logo > Nav',
					'search,nav,logo' => 'Search > Nav > Logo'
				]
			],
			'nav_nav_align' => [
				'label' => 'Nav Alignment',
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
			'nav_mobile' => [
				'label' => 'Mobile Nav Position',
				'type' => 'select',
				'values' => [
					'left' => 'Left',
					'right' => 'Right'
				]
			],
			'nav_shadow' => [
				'label' => 'Navbar Shadow',
				'type' => 'check'
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
				'label' => 'Page Colour',
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
				'label' => 'Info Area Colour',
				'type' => 'colour'
			],
			'info_text_colour' => [
				'label' => 'Info Area Text Colour',
				'type' => 'colour'
			],
			'nav_colour' => [
				'label' => 'Nav Colour',
				'type' => 'colour'
			],
			'nav_text_colour' => [
				'label' => 'Nav Text Colour',
				'type' => 'colour'
			],
			'banner_colour' => [
				'label' => 'Banner Colour',
				'type' => 'colour'
			],
			'banner_text_colour' => [
				'label' => 'Banner Text Colour',
				'type' => 'colour'
			],
			'footer_top_colour' => [
				'label' => 'Footer Top Area Colour',
				'type' => 'colour'
			],
			'footer_colour' => [
				'label' => 'Footer Colour',
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
				'label' => 'Light Colour',
				'type' => 'colour'
			],
			'dark_colour' => [
				'label' => 'Dark Colour',
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
			'headings_upper' => [
				'label' => 'Uppercase Headings',
				'type' => 'check'
			],
			'nav_upper' => [
				'label' => 'Uppercase Navigation',
				'type' => 'check'
			],
			'google_api' => [
				'label' => 'Google Font API Key',
				'type' => 'input'
			],
			'font_awesome' => [
				'label' => 'Use Font Awesome',
				'type' => 'check'
			]
		]
	],
	'css' => [
		'label' => 'CSS',
		'columns' => 1,
		'fields' => [
			'theme_css' => [
				'label' => 'Theme Styles',
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
			if ($i == 'theme_css') {
				if ($setting == '?') {
					$settings[$i] = _CSS_BASIC_WP;
				}

				$settings['theme_css_minified'] = minify_css($setting);
			}
			if ($i == 'theme_js') {
				$settings['theme_js_minified'] = minify_js($setting);
			}
		}

		// auto generate stored css
		// based on configs

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
			'data:image/svg+xml;base64,' . base64_encode(
				'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="500px" height="500px" viewbox="0 0 500 500"><path fill="#a7aaad" d="M250.2,17.4L49,133.5v232.3L250.2,482l201.2-116.2V133.5L250.2,17.4z M371.8,347H128.4v-48.7h194.7v-48.7H128.4v-97.4h48.7 v48.7h194.7V347z"/></svg>'
			),
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

		$opts = '<option value="">None</option>';

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

			echo '<h1>' . $name . '</h1>';
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
						echo '<div class="form-block col-' . $tab['columns'] . '">';
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
			echo 'function b_go() {
				jQuery(".gfs").each(function(i, o) {
					gfp(jQuery(this));
				});
			}';
		echo '</script>';
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
	public static function css() {
		echo _B['auto_css'] . _B['theme_css_minified'];
	}

	public static function js() {
		echo _B['theme_js_minified'];
	}

	public static function favicon() {
		$setting = _B['favicon_image'];
		$favicon = ($setting != '') ? '/uploads/' . $setting : '/img/favicon.png';
		echo $favicon;
	}

	public static function featured($type = '', $echo = true) {
		$image = explode('/', wp_get_attachment_url(get_post_thumbnail_id(get_queried_object()->ID)));

		if (end($image)) {
			switch ($type) {
				case 'bg': {
					$return = 'style="background:url(/uploads/' . end($image) . ') top center"';
					break;
				}
				case 'img': {
					$return = '<img src="/uploads/' . end($image) . '">';
					break;				
				}
				case 'img-fluid': {
					$return = '<img class="img-fluid" src="/uploads/' . end($image) . '">';
					break;				
				}
				case 'width': {
					list($width, $height) = getimagesize($_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/' . end($image));
					$return = $width;
					break;
				}
				case 'height': {
					list($width, $height) = getimagesize($_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/' . end($image));
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
			case 'nav': {
				$toggle = '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".target"><span class="navbar-toggler-icon"></span></button>';
				echo (_B['nav_mobile'] == 'left') ? $toggle : '';
				echo '<div id="navbar" class="navbar-collapse collapse target ' . B::align('nav') . '">';
				wp_nav_menu([
					'theme_location' => 'primary',
					'depth' => 0,
					'container' => false,
					'menu_class' => 'navbar-nav position-relative',
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
			default: {
				$items = explode(',', _B['nav_layout']);
				foreach ($items as $item) {
					B::nav($item);
				}
				echo "\n";
			}
		}
	}

	// return values

	public static function value($key, $echo = true) {
		if ($echo) {
			echo _B[$key];
		}
		else {
			return _B[$key];
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

	public static function excerpt() {
		$content = preg_replace('%\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))%s', '', get_the_content_feed());
		echo implode(' ', array_slice(explode(' ', trim(preg_replace('/<[^>]*>/', ' ', $content))), 0, _B['excerpt_length'])) . '&hellip;';
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
	<main class="col-md-12">
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

//   ▄████████   ▄██████▄   ████████▄      ▄████████  
//  ███    ███  ███    ███  ███   ▀███    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄      
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      
//  ███    █▄   ███    ███  ███    ███    ███    █▄   
//  ███    ███  ███    ███  ███   ▄███    ███    ███  
//  ████████▀    ▀██████▀   ████████▀     ██████████

// wp options

function b_set_wp_options() {
	define('_B', _themeSettings::get_settings());

	if (_B['woo_support'] == 'yes') {
		add_action('after_setup_theme', 'b_woo_setup');
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

	if (_B['editor_width'] != '') {
		add_theme_support('align-wide');
		add_action('admin_head', 'b_editor_width');
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
}

// admin notice - search engine visbility

function b_admin_notice_sev() {
	echo '<div class="notice notice-warning is-dismissible">';
		echo '<p>This site is currently set to discourage search engines from indexing it. If this is a live site and you\'re hoping for visits, this should be turned off.</p>';
	echo '</div>';
}

// set editor width

function b_editor_width() {
	echo '<style>.wp-block{max-width:' . _B['editor_width'] . ' !important}</style>';
}

// add admin scripts

function b_add_scripts($hook) {
	$screen = get_current_screen();

	if (null === $screen || $screen->base !== 'toplevel_page_' . _THEME . '-theme-menu') {
		return;
	}

	wp_enqueue_code_editor(['type' => 'application/x-httpd-php']);
}

// excerpts

function b_set_excerpt_length($length) {
	return _B['excerpt_length'];
}

// page column class metadata

function b_add_post_metadata() {
	$screen = 'page';
	add_meta_box(
		'post_meta_box',
		'CSS Classes',
		'b_add_post_metadata_callback',
		$screen,
		'side',
		'default',
		null
	);
}

function b_add_post_metadata_callback($post) {
	wp_nonce_field('css_class_save_data', 'css_class_nonce');
	$value = get_post_meta($post->ID, 'css_class', true);
	echo '<input class="components-text-control__input" style="margin-top:8px" type="text" name="css_class" value="' . esc_attr($value) . '" placeholder="Enter CSS Class...">';
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
			if (!isset($_POST['css_class_nonce'])) {
				return;
			}
			if (!wp_verify_nonce($_POST['css_class_nonce'], 'css_class_save_data')) {
				return;
			}
			$data = sanitize_text_field($_POST['css_class']);
			update_post_meta($post_id, 'css_class', $data);
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

		if (_CS['filter_post_list'] == 'yes') {
			if (isset($wp_query->query['post_type']) && (is_admin() && in_array($wp_query->query['post_type'], ['attachment', 'page', 'post']))) {
				if (_CS['admin_sees_all_posts'] == 'yes') {
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

// set bootstrap class names

function b_set_class_names($content) {
	if (is_singular() && in_the_loop() && is_main_query()) {
		$content = str_replace([
			'has-text-align-left',
			'has-text-align-right',
			'has-text-align-center',
			'alignleft',
			'alignright',
			'aligncenter',
			'wp-container-core-columns-',
			'wp-block-columns-is-layout-flex',
			'is-layout-flex',
			'is-layout-flow',
			'wp-block-column-is-layout-flow',
			'is-not-stacked-on-mobile',
			'wp-block-columns',
			'wp-block-column'
		], [
			'text-start',
			'text-end',
			'text-center',
			'float-start',
			'float-end',
			'text-center',
			'',
			'',
			'',
			'',
			'',
			'',
			'row',
			'col'
		],
			$content
		);

		$content = preg_replace('/layout-\d+/', '', $content);
	}

	return $content;
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
	return '<div class="video"><iframe src="' . $content . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

// show child pages shortcode

function b_children_shortcode($atts = [], $content = null, $tag = '') {
	global $evil;

	$a = shortcode_atts([
		'wide' => '',
		'bg' => ''
	], $atts);

	$html = '';
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
				$html .= '<div class="' . (($a['wide']) ? 'container-fluid' : _B['container_class']) . '"' . $bg . '>';
			}
			else {
				$html .= '<div class="row">';
			}

			foreach ($child_pages as $child_page) {
				$page_id = $child_page->ID;
				$page_link = get_permalink($page_id);
				$page_title = $child_page->post_title;
				$page_content = $child_page->post_content;
				$page_css_class = get_post_meta($page_id, 'css_class', true);
				$html .= '<div id="' . $child_page->post_name .  '-section" class="' . $page_css_class . '">' . do_shortcode($page_content) . '</div>';
			}

			if ($wide) {
				$html .= '</div>';
				$html .= '<div class="' . _B['container_class'] . '">';
					$html .= '<div class="row">';
						$html .= '<div class="col-xs-12">';
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
		'bg' => ''
	], $atts);

	$html = '';
	$bg = ($a['bg']) ? ' style="background:' . $a['bg'] . '"' : '';

	if ($content) {
		$page = get_page_by_path($content);

		if ($page) {
			$evil['page_id'] = $page->ID;

					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			$html .= '<div id="' . $page->post_name . '-section">';
				$html .= '<div class="' . (($a['wide']) ? 'container-fluid' : _B['container_class']) . '"' . $bg . '>';
					$html .= '<div class="row">';
						$html .= '<div class="' . get_post_meta($page->ID, 'css_class', true) . '">' . do_shortcode($page->post_content) . '</div>';
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			$html .= '<div class="' . _B['container_class'] . '">';
				$html .= '<div class="row">';
					$html .= '<div class="col-xs-12">';
		}
	}

	unset($evil['page_id']);

	return $html;
}

// latest posts shortcode

function b_latest_shortcode($atts = [], $content = null, $tag = '') {
	wp_reset_postdata();

	$count = $content;
	$none = true;
	$num = 0;
	$post_id = get_queried_object_id();
	$cat = get_category_by_slug('uncategorised');

	$query = new WP_Query([
		'posts_per_page' => $count,
		'category__not_in' => $cat->term_id
	]);
	$html = '<div id="latest-posts">';

	while ($query -> have_posts()) : $query -> the_post();
		if ((get_the_ID() != $post_id)) {
			$bg = '';

			if (has_post_thumbnail()) {
				$array = explode('/', wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnail')[0]);
				$bg = end($array);
			}

			if ($num <= $count) {
				$html .= '<div class="post-box my-3">';
					$html .= '<a class="post-link" href="' . get_permalink() . '" title="' . get_the_title() . '">';
						$html .= '<h4 class="post-title">' . get_the_title() . '</h4>';
						$html .= '<p class="post-date">' . get_the_time(get_option('date_format')) . ' - ' . get_the_time() . '</p>';

						if ($bg && _B['latest_images'] == 'yes') {
							$html .= '<div class="post-img" style="background-image:url(/uploads/' . $bg . ')"></div>';
						}

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

//    ▄▄▄▄███▄▄▄▄     ▄█      ▄████████   ▄████████  
//  ▄██▀▀▀███▀▀▀██▄  ███     ███    ███  ███    ███  
//  ███   ███   ███  ███▌    ███    █▀   ███    █▀   
//  ███   ███   ███  ███▌    ███         ███         
//  ███   ███   ███  ███▌  ▀███████████  ███         
//  ███   ███   ███  ███            ███  ███    █▄   
//  ███   ███   ███  ███      ▄█    ███  ███    ███  
//   ▀█   ███   █▀   █▀     ▄████████▀   ████████▀

// theme setup

function b_do_setup() {
	if (_OPTIONS_BASIC_WP['thumbnails']) {
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(192, 108);
	}

	register_nav_menus(_MENUS_BASIC_WP);
}

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
	private $dropdown_menu_alignment_values = [
		'dropdown-menu-start',
		'dropdown-menu-end',
		'dropdown-menu-sm-start',
		'dropdown-menu-sm-end',
		'dropdown-menu-md-start',
		'dropdown-menu-md-end',
		'dropdown-menu-lg-start',
		'dropdown-menu-lg-end',
		'dropdown-menu-xl-start',
		'dropdown-menu-xl-end',
		'dropdown-menu-xxl-start',
		'dropdown-menu-xxl-end'
	];

	function start_lvl(&$output, $depth = 0, $args = null) {
		$dropdown_menu_class[] = '';
		foreach ($this->current_item->classes as $class) {
			if (in_array($class, $this->dropdown_menu_alignment_values)) {
				$dropdown_menu_class[] = $class;
			}
		}
		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " $depth\">";
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
		$this->current_item = $item;

		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;
		if ($depth && $args->walker->has_children) {
			$classes[] = 'dropdown-menu dropdown-menu-end';
		}

		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

		$active_class = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link ';
		$attributes .= ($args->walker->has_children) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

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

	$css .= '}';

	$css .= 'body{background:var(--page-colour);font-family:var(--body-font);color:var(--text-colour)}#body h1,h2,h3,h4,h5,h6{font-family:var(--heading-font);color:var(--heading-colour)}#body .navbar{font-family:var(--nav-font);background-color:var(--nav-colour)!important}#body .navbar .nav-link{color:var(--nav-text-colour)!important}#body pre,code{font-family:var(--mono-font)} #info-area{background:var(--info-colour);color:var(--info-text-colour)} #banner-area{background:var(--banner-colour);color:var(--banner-text-colour)} #footer-top-area{background:var(--footer-top-colour);color:var(--footer-text-colour)} #footer-area{background:var(--footer-colour);color:var(--footer-text-colour)}#content-area a{color:var(--primary-colour)}h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{text-decoration:none!important;color:var(--heading-colour)!important}hr{height:5px!important;background:var(--primary-colour);width:75%;margin:1em auto}#body .dropdown-menu[data-bs-popper]{left:unset}#body .navbar-collapse{flex-grow:unset}.ml-none{margin-left:0;margin-right:0.5rem} .mr-none{margin-left:0.5rem;margin-right:0} .mb-none{margin-left:0.5rem;margin-right:0.5rem}.feed a{text-decoration:none;color:var(--text-colour)}#content-area figure.size-full img{max-width:100%;height:auto}';

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

	$template = '@import url(\'https://fonts.googleapis.com/css2?family=[F]&display=swap\');';

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

	return $fonts . $css;
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

//  ███    █▄      ▄███████▄  ████████▄      ▄████████      ███         ▄████████  
//  ███    ███    ███    ███  ███   ▀███    ███    ███  ▀█████████▄    ███    ███  
//  ███    ███    ███    ███  ███    ███    ███    ███     ▀███▀▀██    ███    █▀   
//  ███    ███    ███    ███  ███    ███    ███    ███      ███   ▀   ▄███▄▄▄      
//  ███    ███  ▀█████████▀   ███    ███  ▀███████████      ███      ▀▀███▀▀▀      
//  ███    ███    ███         ███    ███    ███    ███      ███        ███    █▄   
//  ███    ███    ███         ███   ▄███    ███    ███      ███        ███    ███  
//  ████████▀    ▄████▀       ████████▀     ███    █▀      ▄████▀      ██████████

if (!class_exists('WPU')) {
	class WPU {
		private $file;
		private $plugin;
		private $basename;
		private $active;
		private $username;
		private $repository;
		private $authorize_token;
		private $github_response;

		public $requires;
		public $tested;

		public function __construct($file) {
			$this->file = $file;
			add_action('admin_init', [$this, 'set_plugin_properties']);

			return $this;
		}

		public function set_plugin_properties() {
			$this->plugin = get_plugin_data($this->file);
			$this->basename = plugin_basename($this->file);
			$this->active = is_plugin_active($this->basename);
		}

		public function set_username($username) {
			$this->username = $username;
		}

		public function set_repository($repository) {
			$this->repository = $repository;
		}

		public function authorize($token) {
			$this->authorize_token = $token;
		}

		private function get_repository_info() {
			if (is_null($this->github_response)) {
				$request_uri = sprintf('https://api.github.com/repos/%s/%s/releases', $this->username, $this->repository);

				$curl = curl_init();

				curl_setopt_array($curl, [
					CURLOPT_URL => $request_uri,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => '',
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 0,
					CURLOPT_FOLLOWLOCATION => true,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => 'GET',
					CURLOPT_HTTPHEADER => [
						'Authorization: token ' . $this->authorize_token,
						'User-Agent: WPUpdater/1.0.0'
					]
				]);

				$response = curl_exec($curl);

				curl_close($curl);

				$response = json_decode($response, true);

				if (is_array($response)) {
					$response = current($response);
				}

				$this->github_response = $response;
			}
		}

		public function initialize() {
			add_filter('pre_set_site_transient_update_plugins', [$this, 'modify_transient'], 10, 1);
			add_filter('plugins_api', [$this, 'plugin_popup'], 10, 3);
			add_filter('upgrader_post_install', [$this, 'after_install'], 10, 3);
		}

		public function modify_transient($transient) {
			if (property_exists($transient, 'checked')) {
				if ($checked = $transient->checked) {
					$this->get_repository_info();

					$out_of_date = version_compare($this->github_response['tag_name'], $checked[$this->basename], 'gt');

					if ($out_of_date) {
						$new_files = $this->github_response['zipball_url'];
						$slug = current(explode('/', $this->basename));

						$plugin = [
							'url' => $this->plugin['PluginURI'],
							'slug' => $slug,
							'package' => $new_files,
							'new_version' => $this->github_response['tag_name']
						];

						$transient->response[$this->basename] = (object) $plugin;
					}
				}
			}

			return $transient;
		}

		public function plugin_popup($result, $action, $args) {
			if ($action !== 'plugin_information') {
				return false;
			}

			if (!empty($args->slug)) {
				if ($args->slug == current(explode('/' , $this->basename))) {
					$this->get_repository_info();

					$plugin = [
						'name' => $this->plugin['Name'],
						'slug' => $this->basename,
						'requires' => $this->$requires ?? '6.3',
						'tested' => $this->$tested ?? '6.4.3',
						'version' => $this->github_response['tag_name'],
						'author' => $this->plugin['AuthorName'],
						'author_profile' => $this->plugin['AuthorURI'],
						'last_updated' => $this->github_response['published_at'],
						'homepage' => $this->plugin['PluginURI'],
						'short_description' => $this->plugin['Description'],
						'sections' => [
							'Description' => $this->plugin['Description'],
							'Updates' => $this->github_response['body'],
						],
						'download_link' => $this->github_response['zipball_url']
					];

					return (object) $plugin;
				}
			}


			return $result;
		}

		public function after_install($response, $hook_extra, $result) {
			global $wp_filesystem;

			$install_directory = plugin_dir_path($this->file);
			$wp_filesystem->move($result['destination'], $install_directory);
			$result['destination'] = $install_directory;

			if ($this->active) {
				activate_plugin($this->basename);
			}

			return $result;
		}
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

// init updater

if (get_option('auth_key') !== '') {
	$updater = new WPU(__FILE__);
	$updater->$requires = '6.4';
	$updater->$tested = '6.4.3';
	$updater->set_username('nullstep');
	$updater->set_repository('basic_wp');
	$updater->authorize(get_option('auth_key'));
	$updater->initialize();
}

// oh mah gawd a global!

global $evil;

// actions

add_action('init', 'b_set_wp_options');
add_action('admin_enqueue_scripts', 'b_add_scripts');
add_action('admin_head', 'b_admin_styling', 999);
add_action('after_setup_theme', 'b_do_setup');
add_action('add_meta_boxes', 'b_add_post_metadata');
add_action('save_post', 'b_save_post_metadata');

// filters

add_filter('excerpt_length', 'b_set_excerpt_length', 999);
add_filter('the_content', 'b_set_class_names', 999);

// shortcodes

add_shortcode('logo-normal', 'b_logo_normal_shortcode');
add_shortcode('logo-contrast', 'b_logo_contrast_shortcode');
add_shortcode('children', 'b_children_shortcode');
add_shortcode('inc', 'b_inc_shortcode');
add_shortcode('latest', 'b_latest_shortcode');
add_shortcode('page', 'b_page_shortcode');
add_shortcode('video', 'b_video_shortcode');
add_shortcode('button', 'b_button_shortcode');

// fix ob flush issues

remove_action('shutdown', 'wp_ob_end_flush_all', 1);

add_action('shutdown', function() {
   while (@ob_end_flush());
});

// boot theme

add_action('init', function() {
	if (is_admin()) {
		$assets_url = get_template_directory_uri();
		new _themeMenu($assets_url);
	}
});

add_action('rest_api_init', function() {
	_themeSettings::args();
	$api = new _themeAPI();
	$api->add_routes();
});

// eof