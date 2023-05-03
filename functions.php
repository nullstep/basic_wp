<?php
/*
 *  Author: nullstep
 *  URL: nullstep.com
 */

define('_THEME', 'basic_wp');

// basic_wp default css

define('_CSS_BASIC_WP', '');

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
		'default' => 'normal'
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
		'default' => 'left'
	],
	'nav_logo_align' => [
		'type' => 'string',
		'default' => 'middle'
	],
	'nav_search_align' => [
		'type' => 'string',
		'default' => 'right'
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
	'font_awesome' => [
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
		'columns' => 3,
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
			'excerpt_length' => [
				'label' => 'Excerpt Word Limit',
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
				'label' => 'Info Colour',
				'type' => 'colour'
			],
			'info_text_colour' => [
				'label' => 'Info Text Colour',
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

// you can change these
// if you want to though

// wp options

define('_OPTIONS_BASIC_WP', [
	'thumbnails' => true
]);

// wp menus

define('_MENUS_BASIC_WP', [
	'primary' => 'Primary Menu',
	'secondary' => 'Secondary Menu'
]);

//     ▄████████     ▄███████▄   ▄█   
//    ███    ███    ███    ███  ███   
//    ███    ███    ███    ███  ███▌  
//    ███    ███    ███    ███  ███▌  
//  ▀███████████  ▀█████████▀   ███▌  
//    ███    ███    ███         ███   
//    ███    ███    ███         ███   
//    ███    █▀    ▄████▀       █▀   

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

//     ▄████████     ▄████████      ███          ███       ▄█   ███▄▄▄▄▄       ▄██████▄      ▄████████  
//    ███    ███    ███    ███  ▀█████████▄  ▀█████████▄  ███   ███▀▀▀▀██▄    ███    ███    ███    ███  
//    ███    █▀     ███    █▀      ▀███▀▀██     ▀███▀▀██  ███▌  ███    ███    ███    █▀     ███    █▀   
//    ███          ▄███▄▄▄          ███   ▀      ███   ▀  ███▌  ███    ███   ▄███           ███         
//  ▀███████████  ▀▀███▀▀▀          ███          ███      ███▌  ███    ███  ▀▀███ ████▄   ▀███████████  
//           ███    ███    █▄       ███          ███      ███   ███    ███    ███    ███           ███  
//     ▄█    ███    ███    ███      ███          ███      ███   ███    ███    ███    ███     ▄█    ███  
//   ▄████████▀     ██████████     ▄████▀       ▄████▀    █▀     ▀█    █▀     ████████▀    ▄████████▀ 

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
				$settings['theme_css_minified'] = minify_css($setting);
			}
			if ($i == 'theme_js') {
				$settings['theme_js_minified'] = minify_js($setting);
			}
		}
		update_option(self::$option_key, $settings);
	}
}

//    ▄▄▄▄███▄▄▄▄       ▄████████  ███▄▄▄▄▄    ███    █▄   
//  ▄██▀▀▀███▀▀▀██▄    ███    ███  ███▀▀▀▀██▄  ███    ███  
//  ███   ███   ███    ███    █▀   ███    ███  ███    ███  
//  ███   ███   ███   ▄███▄▄▄      ███    ███  ███    ███  
//  ███   ███   ███  ▀▀███▀▀▀      ███    ███  ███    ███  
//  ███   ███   ███    ███    █▄   ███    ███  ███    ███  
//  ███   ███   ███    ███    ███  ███    ███  ███    ███  
//   ▀█   ███   █▀     ██████████   ▀█    █▀   ████████▀ 

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
		$boo = microtime(false);
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
		$ctx = stream_context_create([
			'ssl' => [
				'verify_peer' => false,
				'verify_peer_name' => false
			]
		]);
		$fonts = json_decode(file_get_contents(__DIR__ . '/fonts.json', false, $ctx));
		$opts = '<option value="">None</option>';
		$types = [
			'serif',
			'sans-serif',
			'display',
			'handwriting',
			'monospace'
		];
		foreach ($fonts as $item) {
			$font = explode(',', $item);
			$opts .= '<option value="' . $font[0] . '">' . $font[0] . ' (' . $types[(int)$font[1]] . ')</option>';
		}

		$name = _THEME;
		$form = _ADMIN_BASIC_WP;

		// build form

		echo '<div id="' . $name . '-wrap" class="wrap">';
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
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								echo '<input data-id="' . $fid . '" type="color" class="choose-colour-button" value="#000000">';
								break;
							}
							case 'code': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<textarea id="' . $fid . '" class="code" name="' . $fid . '"></textarea>';
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
								echo '<select id="' . $fid . '" name="' . $fid . '">';
									echo $opts;
								echo '</select>';
								echo '<div id="' . $fid . '-preview"></div>';
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
			
		echo '</script>';
	}
}

//   ▄████████   ▄██████▄   ████████▄      ▄████████  
//  ███    ███  ███    ███  ███   ▀███    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄      
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      
//  ███    █▄   ███    ███  ███    ███    ███    █▄   
//  ███    ███  ███    ███  ███   ▄███    ███    ███  
//  ████████▀    ▀██████▀   ████████▀     ██████████   

function get_colours() {
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
		'footer',
		'footer_text',
		'primary',
		'secondary',
		'tertiary',
		'quaternary'
	];
	foreach ($colours as $c) {
		$css .= '--' . str_replace('_', '-', $c) . '-colour:' . _BWP[$c . '_colour'] . ';';
	}
	echo $css . '}';
}

function get_css() {
	echo 'body{background:var(--page-colour);font-family:var(--body-font);color:var(--text-colour)}#body h1,h2,h3,h4,h5,h6{font-family:var(--heading-font);color:var(--heading-colour)}#body .navbar{font-family:var(--nav-font);background-color:var(--nav-colour)!important}#body .navbar .nav-link{color:var(--nav-text-colour)!important}#body .navbar .active{color:var(--primary-colour)!important}#body pre,code{font-family:var(--mono-font)}#info-area{background:var(--info-colour);color:var(--info-text-colour)}#banner-area{background:var(--banner-colour);color:var(--banner-text-colour)}#footer-area{background:var(--footer-colour);color:var(--footer-text-colour)}article,section{padding:1rem 0} a{color:var(--primary-colour)} h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{text-decoration:none!important;color:var(--heading-colour)!important} hr{height:5px!important;background:var(--primary-colour)width:75%;margin:1em auto}#body .dropdown-menu[data-bs-popper]{left:unset}#body .navbar-collapse{flex-grow:unset}.ml-none{margin-left:0;margin-right:0.5rem}.mr-none{margin-left:0.5rem;margin-right:0}.mb-none{margin-left:0.5rem;margin-right:0.5rem}#body .btn{color:var(--primary-colour);border-color:var(--primary-colour)}#body .btn:hover{background-color:var(--primary-colour);color:var(--nav-colour)}' . _BWP['theme_css_minified'];
}

function get_js() {
	echo _BWP['theme_js_minified'];
}

function get_fonts() {
	$template = '@import url(\'https://fonts.googleapis.com/css2?family=[F]&display=swap\');';
	$fonts = [
		'heading',
		'nav',
		'body',
		'mono'
	];
	$css = '';
	$root = '';
	foreach ($fonts as $f) {
		if (_BWP[$f . '_font'] != '') {
			$name = str_replace(' ', '+', _BWP[$f . '_font']);
			if (($css == '') || (strpos($css, $name) === FALSE)) {
				$css .= str_replace('[F]', $name, $template);
			}
			$root .= '--' . str_replace('_', '-', $f . '_font') . ':' . _BWP[$f . '_font'] . ';';
		}
	}
	if ($root != '') {
		$css .= ':root{' . $root . '}';
	}
	echo $css;
}

function get_favicon() {
	$setting = _BWP['favicon_image'];
	$favicon = ($setting != '') ? '/uploads/' . $setting : '/img/favicon.png';
	echo $favicon;
}

function get_featured($echo = TRUE) {
	$image = explode('/', wp_get_attachment_url(get_post_thumbnail_id(get_queried_object()->ID)));

	if ($echo) {
		echo end($image);
	}
	else {
		return end($image);
	}
}

function get_snippet($post, $count) {
	echo str_replace(["\r", "\n"], '', substr(strip_tags($post), 0, $count) . '&hellip;');
}

function get_align($item) {
	$align = _BWP['nav_' . $item . '_align'];
	if ($align == 'm-none') {
		if (end(explode(',', _BWP['nav_layout'])) == $item) {
			$align = 'mr-none';
		}
		else if (explode(',', _BWP['nav_layout'])[0] == $item) {
			$align = 'ml-none';
		}
		else {
			$align = 'mb-none';
		}
	}
	return $align;
}

function get_nav($value = NULL) {
	switch ($value) {
		case 'logo': {
			$brand = '<a href="/" class="navbar-brand">' . ((_BWP['nav_logo'] != 'none') ? '<img id="nav-logo" src="/uploads/' . _BWP['logo_image_' . _BWP['nav_logo']] . '">' : 'Brand') . '</a>';
			$toggle = '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".target"><span class="navbar-toggler-icon"></span></button>';
			$logo = (_BWP['nav_mobile'] == 'left') ? $brand . $toggle : $toggle . $brand;
			echo '<div class="' . get_align('logo') . '">' . $logo . '</div>';
			break;
		}
		case 'nav': {
			echo '<div id="navbar" class="navbar-collapse collapse target ' . get_align('nav') . '">';
			wp_nav_menu([
				'theme_location' => 'primary',
				'depth' => 0,
				'container' => FALSE,
				'menu_class' => 'navbar-nav position-relative',
				'fallback_cb' => '__return_false',
				'walker' => new WP_Bootstrap_Navwalker()
			]);
			echo '</div>';
			break;
		}
		case 'search': {
			echo '<form class="d-flex ' . get_align('search') . '">';
			echo '<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">';
			echo '<button class="btn btn-outline-primary" type="submit">';
			echo (_BWP['font_awesome'] == 'yes') ? '<i class="fa-solid fa-magnifying-glass"></i>' : 'Search';
			echo '</button>';
			echo '</form>';
			break;
		}
		case 'width': {
			echo _BWP['nav_width'];
			break;
		}
		case 'sticky': {
			echo (_BWP['sticky_nav'] == 'yes') ? 'sticky-top' : '';
			break;
		}
		case 'shadow': {
			echo (_BWP['nav_shadow'] == 'yes') ? ' shadow' : '';
			break;
		}
		default: {
			$items = explode(',', _BWP['nav_layout']);
			foreach ($items as $item) {
				get_nav($item);
			}
			echo "\n";
		}
	}
}

// return values

function get_value($key, $echo = TRUE) {
	if ($echo) {
		echo _BWP[$key];
	}
	else {
		return _BWP[$key];
	}
}

// header order

function get_order($item) {
	return explode(',', _BWP['header_order'])[$item];
}

// pagination

function get_pagination() {
	global $wp_query;
	$big = 999999999;
	echo paginate_links([
		'base' => str_replace($big, '%#%', get_pagenum_link($big)),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages
	]);
}

// wp options

function bwp_set_wp_options() {
	define('_BWP', _themeSettings::get_settings());
}

// add admin scripts

function bwp_add_scripts($hook) {
	$screen = get_current_screen();

	if (null === $screen || $screen->base !== 'toplevel_page_' . _THEME . '-theme-menu') {
		return;
	}

	wp_enqueue_code_editor(['type' => 'application/x-httpd-php']);
}

// excerpts

function bwp_set_excerpt_length($length) {
	return _BWP['excerpt_length'];
}

// page column class metadata

function bwp_add_post_metadata() {
	$screen = 'page';
	add_meta_box(
		'post_meta_box',
		'CSS Classes',
		'bwp_add_post_metadata_callback',
		$screen,
		'side',
		'default',
		null
	);
}

function bwp_add_post_metadata_callback($post) {
	wp_nonce_field('css_class_save_data', 'css_class_nonce');
	$value = get_post_meta($post->ID, 'css_class', true);
	echo '<input class="components-text-control__input" style="margin-top:8px" type="text" name="css_class" value="' . esc_attr($value) . '" placeholder="Enter CSS Class...">';
}

function bwp_save_post_metadata($post_id) {
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

// logo shortcodes

function bwp_logo_normal_shortcode($atts = [], $content = null, $tag = '') {
	return '<img src="/uploads/' . _BWP['logo_image_normal'] . '" class="logo ' . $content .'">';
}

function bwp_logo_contrast_shortcode($atts = [], $content = null, $tag = '') {
	return '<img src="/uploads/' . _BWP['logo_image_contrast'] . '" class="logo ' . $content .'">';
}

// theme setup

function bwp_do_setup() {
	if (_OPTIONS_BASIC_WP['thumbnails']) {
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(192, 108);
	}

	register_nav_menus(_MENUS_BASIC_WP);
}

// admin favicon

function bwp_admin_favicon() {
	$dir = wp_upload_dir();
	echo '<link rel="shortcut icon" type="image/x-icon" href="' . $dir['url'] . '/' . _BWP['favicon_image'] . '" />';
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

//   ▄█   ███▄▄▄▄▄     ▄█       ███      
//  ███   ███▀▀▀▀██▄  ███   ▀█████████▄  
//  ███▌  ███    ███  ███▌     ▀███▀▀██  
//  ███▌  ███    ███  ███▌      ███   ▀  
//  ███▌  ███    ███  ███▌      ███      
//  ███   ███    ███  ███       ███      
//  ███   ███    ███  ███       ███      
//  █▀     ▀█    █▀   █▀       ▄████▀ 

// actions

add_action('init', 'bwp_set_wp_options');
add_action('admin_enqueue_scripts', 'bwp_add_scripts');
add_action('admin_head', 'bwp_admin_favicon');
add_action('after_setup_theme', 'bwp_do_setup');
add_action('add_meta_boxes', 'bwp_add_post_metadata');
add_action('save_post', 'bwp_save_post_metadata');

// filters

add_filter('excerpt_length', 'bwp_set_excerpt_length', 999);

// shortcodes

add_shortcode('logo-normal', 'bwp_logo_normal_shortcode');
add_shortcode('logo-contrast', 'bwp_logo_contrast_shortcode');

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