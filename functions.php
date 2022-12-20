<?php
/*
 *  Author: nullstep
 *  URL: nullstep.com
 */

// don't change these if
// you want updates to work

define('_THEME', 'basic_wp');
define('_AUTHOR', 'nullstep');

// don't change these unless
// you know what you're doing
// and have a good reason

// basic_wp placeholder

define('_IMG_BASIC_WP', 'data:image/png;base64,' .
	'iVBORw0KGgoAAAANSUhEUgAAAAgAAAAICAIAAABLbSn' . 
	'cAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAA' . 
	'AJcEhZcwAADsMAAA7DAcdvqGQAAAAQSURBVBhXY1DEA' .
	'YaUhKIiAKxPGMHCx0CmAAAAAElFTkSuQmCC
');

// basic_wp default css

define('_CSS_BASIC_WP', '
:root {
	--main-doc-colour: #fff;
	--info-area-colour: #eee;
	--info-area-font-colour: #000;
	--info-area-height: auto;
	--navbar-colour: var(--secondary-colour);
	--navitem-hover-colour: #eee;
	--navlink-colour: #fff;
	--navlink-hover-colour: var(--secondary-colour);
	--navtext-transform: uppercase;
	--banner-area-colour: #eee;
	--banner-area-font-colour: var(--secondary-colour);
	--banner-area-height: auto;
	--banner-area-image: none;
	--content-area-colour: #fff;
	--content-area-font-colour: var(--secondary-colour);
	--footer-area-colour: var(--secondary-colour);
	--footer-area-font-colour: #fff;
	--footer-area-height: auto;
	--link-colour: var(--primary-colour);
	--link-hover-colour: #222;
	--heading-colour: var(--tertiary-colour);
	--heading-transform: uppercase;
	--border-colour: var(--primary-colour);
	--h1-size: 2rem;
	--h2-size: 1.8rem;
	--h3-size: 1.6rem;
	--h4-size: 1.4rem;
	--h5-size: 1.2rem;
	--h6-size: 1rem;
	--p-size: 1.25rem;
	--li-size: 1.25rem;
	--button-colour: var(--primary-colour);
	--button-text-colour: #333;
	--button-hover-colour: #333;
	--button-hover-text-colour: var(--primary-colour);
}
html {
	background-color: var(--main-doc-colour);
}
body {
	background-color: var(--main-doc-colour);
	font-family: var(--body-font);
}
h1, h2, h3, h4, h5, h6 {
	font-family: var(--heading-font);
	color: var(--heading-colour);
	text-transform: var(--heading-transform);
}
h1 {
	font-size: var(--h1-size);
	margin-bottom: 1.5rem;
}
h2 {
	font-size: var(--h2-size);
}
h3 {
	font-size: var(--h3-size);
}
h4 {
	font-size: var(--h4-size);
}
h5 {
	font-size: var(--h5-size);
}
h6 {
	font-size: var(--h6-size);
}
a {
	color: var(--link-colour);
	text-decoration: none !important;
}
a:hover {
	color: var(--link-hover-colour);
	text-decoration: none !important;
}
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
	color: var(--heading-colour);
}
p {
	font-size: var(--p-size);
}
li {
	font-size: var(--li-size);
}
#info-area {
	height: var(--info-area-height);
	background-color: var(--info-area-colour);
	color: var(--info-area-font-colour);
}
#banner-area {
	background-image: var(--banner-area-image);
	background-size: cover;
	height: var(--banner-area-height);
	color: var(--banner-area-font-colour);
}
#content-area {
	background-color: var(--content-area-colour);
	color: var(--content-area-font-colour);
	padding: 2rem 0;
	min-height: 450px;
}
#footer-area {
	height: var(--footer-area-height);
	background-color: var(--footer-area-colour);
	color: var(--footer-area-font-colour);
	padding: 2rem 0;
}
#override .btn-primary {
	font-family: var(--nav-font);
	text-transform: var(--heading-transform);
	background-color: var(--button-colour);
	border: none;
	border-radius: 0;
	color: var(--button-text-colour);
}
#override .btn-primary:hover {
	background-color: var(--button-hover-colour);
	color: var(--button-hover-text-colour);
}
#override .bg-dark {
	background-color: var(--navbar-colour) !important;
}
#override .nav-item {
	font-family: var(--nav-font);
	text-transform: var(--navtext-transform);
}
#override .nav-item:hover {
	background-color: var(--navitem-hover-colour);
}
#override .nav-link {
	color: var(--navlink-colour);
}
#override .nav-link:hover {
	color: var(--navlink-hover-colour);
}
#searchform label {
	display: block;
	font-size: var(--p-size);
}
#searchform #s {
	border-radius: 0;
	border: 1px solid var(--border-colour);
	width: 65%;
}
#searchform #searchsubmit {
	border-radius: 0;
	border: none;
	background: var(--button-colour);
	color: var(--button-text-colour);
	font-size: small;
	width: 25%;
}
#searchform #searchsubmit:hover {
	background: var(--button-hover-colour);
	color: var(--button-hover-text-colour);	
}
.widget_recent_entries .post-date {
	display: block;
}
.widget_recent_entries ul {
	list-style: none;
	padding: 0;
}
#logo {
	padding: 15px 0;
	height: 100px;
}
#nav-logo {
	height: 64px;
}
pre {
	font-family: var(--mono-font) !important;
}
.pagination {
	font-family: var(--nav-font);
	text-transform: var(--heading-transform);
	margin: 2rem 0;
}
.page-numbers {
	margin: 0 1rem 0 0;
	background-color: var(--button-colour);
	border: none;
	border-radius: 0;
	color: var(--button-text-colour);
	padding: 2px 0.5rem 0;
}
.current {
	background-color: var(--button-hover-colour)
}
.page-numbers:hover {
	background-color: var(--button-hover-colour);
	color: var(--button-hover-text-colour);
}
.post-date {
	font-size: 14px;
	font-style: italic;
}
.post-time {
	font-size: 14px;
	font-style: italic;
}
.video {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
}
.video iframe, .video object, .video embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
');

// basic_wp data

define('_ARGS_BASIC_WP', [
	'container_class' => [
		'type' => 'string',
		'default' => 'container'
	],
	'excerpt_length' => [
		'type' => 'integer',
		'default' => 20
	],
	'sticky_nav' => [
		'type' => 'string',
		'default' => 'yes'
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
	'primary_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'secondary_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'tertiary_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'quaternary_colour' => [
		'type' => 'string',
		'default' => '#333333'
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
	'form_email' => [
		'type' => 'string',
		'default' => get_option('admin_email')
	],
	'form_active' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'form_success' => [
		'type' => 'string',
		'default' => 'Thanks for the message. We will respond as soon as possible.'
	],
	'form_json' => [
		'type' => 'string',
		'default' => json_encode([[
			'name' => [
				'label' => 'Name',
				'type' => 'text'
			],
			'email' => [
				'label' => 'Email',
				'type' => 'email'
			],
			'message' => [
				'label' => 'Message',
				'type' => 'textarea'
			]
		]])
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
			'excerpt_length' => [
				'label' => 'Excerpt Word Limit',
				'type' => 'input'
			],
			'sticky_nav' => [
				'label' => 'Sticky Navbar',
				'type' => 'check'
			]

		]
	],
	'images' => [
		'label' => 'Images',
		'columns' => 4,
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
			'nav_logo' => [
				'label' => 'Navbar Logo',
				'type' => 'select',
				'values' => [
					'none' => 'None',
					'normal' => 'Normal',
					'contrast' => 'Contrast'
				]
			]
		]
	],
	'visuals' => [
		'label' => 'Visuals',
		'columns' => 4,
		'fields' => [
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
			]
		]
	],
	'forms' => [
		'label' => 'Forms',
		'columns' => 4,
		'fields' => [
			'form_json' => [
				'label' => 'Forms Config',
				'type' => 'code'
			],
			'form_email' => [
				'label' => 'Forms Email',
				'type' => 'input'
			],
			'form_success' => [
				'label' => 'Forms Thanks Message',
				'type' => 'text'
			],
			'form_active' => [
				'label' => 'Forms Active',
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

// you can change these
// if you want to though

// wp options

define('_OPTIONS_BASIC_WP', [
	'thumbnails' => true
]);

// wp menus

define('_MENUS_BASIC_WP', [
	'primary' => 'Primary Menu'
]);

// basic_wp api routes

define('_APIPATH_BASIC_WP',
	'settings'
);

define('_API_BASIC_WP', [
	[
		'methods' => 'POST',
		'callback' => 'update_settings',
		'args' => _themeSettings::args(),
		'permission_callback' => 'permissions'
	],
	[
		'methods' => 'GET',
		'callback' => 'get_settings',
		'args' => [],
		'permission_callback' => 'permissions'
	]
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
				register_rest_route(_THEME . '-api/v1', '/' . _APIPATH_BASIC_WP, [
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
				$settings['theme_css_minified'] = minify_css($setting);
			}
			if ($i == 'theme_js') {
				$settings['theme_js_minified'] = minify_js($setting);
			}
		}
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
			'dashicons-palmtree',
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
				'url' => esc_url_raw(rest_url(_THEME . '-api/v1/settings')),
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
		$fonts = json_decode(file_get_contents($this->assets_url . '/fonts.json'));
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
	}
}

//  ███    █▄      ▄███████▄  ████████▄      ▄████████      ███         ▄████████     ▄████████  
//  ███    ███    ███    ███  ███   ▀███    ███    ███  ▀█████████▄    ███    ███    ███    ███  
//  ███    ███    ███    ███  ███    ███    ███    ███     ▀███▀▀██    ███    █▀     ███    ███  
//  ███    ███    ███    ███  ███    ███    ███    ███      ███   ▀   ▄███▄▄▄       ▄███▄▄▄▄██▀  
//  ███    ███  ▀█████████▀   ███    ███  ▀███████████      ███      ▀▀███▀▀▀      ▀▀███▀▀▀▀▀    
//  ███    ███    ███         ███    ███    ███    ███      ███        ███    █▄   ▀███████████  
//  ███    ███    ███         ███   ▄███    ███    ███      ███        ███    ███    ███    ███  
//  ████████▀    ▄████▀       ████████▀     ███    █▀      ▄████▀      ██████████    ███    ███  

class _themeUpdater {
	protected $theme = _THEME;
	protected $repository = _AUTHOR . '/' . _THEME;
	protected $domain = 'https://github.com/';
	protected $raw_domain = 'https://raw.githubusercontent.com/';
	protected $css_endpoint = '/main/style.css';
	protected $zip_endpoint = '/releases/download/v';
	protected $remote_css_uri;
	protected $remote_zip_uri;
	protected $remote_version;
	protected $local_version;

	public function init() {
		add_filter('auto_update_theme', [
			$this,
			'auto_update_theme'
		], 20, 2);
		add_filter('upgrader_source_selection', [$this,
			'upgrader_source_selection'
		], 10, 4);
		add_filter('pre_set_site_transient_update_themes', [
			$this,
			'pre_set_site_transient_update_themes'
		]);
	}

	public function auto_update_theme($update, $item) {
		return $this->theme === $item->theme;
	}

	public function upgrader_source_selection($source, $remote_source, $upgrader, $hook_extra) {
		global $wp_filesystem;

		$update = [
			'update-selected',
			'update-selected-themes',
			'upgrade-theme'
		];

		if (!isset($_GET['action']) || !in_array($_GET['action'], $update, true)) {
			return $source;
		}

		if (!isset($source, $remote_source)) {
			return $source;
		}

		if (false === stristr(basename($source), $this->theme)) {
			return $source;
		}

		$basename = basename($source);
		$upgrader->skin->feedback(esc_html_e('Renaming theme directory.', 'bootstrap'));
		$corrected_source = str_replace($basename, $this->theme, $source);

		if ($wp_filesystem->move($source, $corrected_source, true)) {
			$upgrader->skin->feedback(esc_html_e('Rename successful.', 'bootstrap'));
			return $corrected_source;
		}

		return new WP_Error();
	}

	public function pre_set_site_transient_update_themes($transient) {
		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
		$this->local_version = (wp_get_theme($this->theme))->get('Version');

		if ($this->has_update()) {
			$response = [
				'theme' => $this->theme,
				'new_version' => $this->remote_version,
				'url' => $this->construct_repository_uri(),
				'package' => $this->construct_remote_zip_uri(),
				'branch' => 'master'
			];
			$transient->response[$this->theme] = $response;
		}

		return $transient;
	}

	protected function construct_remote_stylesheet_uri() {
		return $this->remote_css_uri = $this->raw_domain . $this->repository . $this->css_endpoint;
	}

	protected function construct_remote_zip_uri() {
		return $this->remote_zip_uri = $this->domain . $this->repository . $this->zip_endpoint . $this->remote_version . '/' . $this->theme . '.zip';
	}

	protected function construct_repository_uri() {
		return $this->repository_uri = $this->domain . trailingslashit($this->repository);
	}

	protected function get_remote_version() {
		$this->remote_stylesheet_uri = $this->construct_remote_stylesheet_uri();
		$response = $this->remote_get($this->remote_stylesheet_uri);
		$response = str_replace("\r", "\n", wp_remote_retrieve_body($response));
		$headers = [
			'Version' => 'Version'
		];

		foreach ($headers as $field => $regex) {
			if (preg_match( '/^[ \t\/*#@]*' . preg_quote($regex, '/') . ':(.*)$/mi', $response, $match) && $match[1]) {
				$headers[$field] = _cleanup_header_comment($match[1]);
			}
			else {
				$headers[$field] = '';
			}
		}

		return $this->remote_version = ('' === $headers['Version']) ? '' : $headers['Version'];
	}

	protected function has_update() {
		if (!$this->remote_version) {
			$this->remote_version = $this->get_remote_version();
		}
		return version_compare($this->remote_version, $this->local_version, '>');
	}

	protected function remote_get($url, $args = []) {
		return wp_remote_get($url, $args);
	}
}

//     ▄████████  ███    █▄   ███▄▄▄▄▄     ▄████████     ▄████████  
//    ███    ███  ███    ███  ███▀▀▀▀██▄  ███    ███    ███    ███  
//    ███    █▀   ███    ███  ███    ███  ███    █▀     ███    █▀   
//   ▄███▄▄▄      ███    ███  ███    ███  ███           ███         
//  ▀▀███▀▀▀      ███    ███  ███    ███  ███         ▀███████████  
//    ███         ███    ███  ███    ███  ███    █▄            ███  
//    ███         ███    ███  ███    ███  ███    ███     ▄█    ███  
//    ███         ████████▀    ▀█    █▀   ████████▀    ▄████████▀   

function get_css() {
	$css = ':root{' .
		'--primary-colour:' . _BWP['primary_colour'] . ';' .
		'--secondary-colour:' . _BWP['secondary_colour'] . ';' .
		'--tertiary-colour:' . _BWP['tertiary_colour'] . ';' .
		'--quaternary-colour:' . _BWP['quaternary_colour'] . ';' .
	'}.dropdown-menu[data-bs-popper]{left:unset;}';
	$pad = (_BWP['nav_logo'] == 'none') ? '53' : '122';
	$fix = (_BWP['sticky_nav']) ? ".fix{position:fixed;top:0;width:100%;z-index:3}.fix + .content{padding-top:" . $pad . "px!important}" : '';
	echo $css . _BWP['theme_css_minified'] . $fix . "\n";
}

function get_js() {
	$js = 'window.addEventListener(\'load\',(event)=>{if(typeof(boot)===typeof(Function))boot();});';
	$fix = (_BWP['sticky_nav']) ? "window.onscroll=function(){s()};var n=document.getElementById('nav-area');var o=n.offsetTop;function s(){if(window.pageYOffset>=o){n.classList.add('fix')}else{n.classList.remove('fix')}}" : '';
	echo $js . $fix . _BWP['theme_js_minified'] . "\n";
}

function get_fonts() {
	$template = '@import url(\'https://fonts.googleapis.com/css2?family=[F]&display=swap\');';
	$fonts = [
		'heading_font',
		'nav_font',
		'body_font',
		'mono_font'
	];
	$css = '';
	$root = '';
	foreach ($fonts as $font) {
		if (_BWP[$font] != '') {
			$name = str_replace(' ', '+', _BWP[$font]);
			if (($css == '') || (strpos($css, $name) === false)) {
				$css .= str_replace('[F]', $name, $template);
			}
			$root .= '--' . str_replace('_', '-', $font) . ':' . _BWP[$font] . ';';
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

function get_featured($echo = true) {
	$image = explode('/', wp_get_attachment_image_src(get_post_thumbnail_id(get_queried_object_id()), 'full')[0]);
	if ($echo) {
		echo end($image);
	}
	else {
		return end($image);
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

// wp options

function set_wp_options() {
	define('_BWP', _themeSettings::get_settings());
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

// add admin scripts

function add_scripts($hook) {
	$screen = get_current_screen();

	if (null === $screen || $screen->base !== 'toplevel_page_' . _THEME . '-theme-menu') {
		return;
	}

	wp_enqueue_code_editor(['type' => 'application/x-httpd-php']);
}

// excerpts

function set_excerpt_length($length) {
	return _BWP['excerpt_length'];
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

function logo_normal_shortcode($atts = [], $content = null, $tag = '') {
	return '<img src="/uploads/' . _BWP['logo_image_normal'] . '" class="logo ' . $content .'">';
}

function logo_contrast_shortcode($atts = [], $content = null, $tag = '') {
	return '<img src="/uploads/' . _BWP['logo_image_contrast'] . '" class="logo ' . $content .'">';
}

// contact form shortcode

function contact_shortcode($atts = [], $content = null, $tag = '') {
	if (_BWP['form_active'] == 'yes') {
		$html = '<form id="contact-form">';
		$id = ($content) ? $content : 0;
		$form = json_decode(_BWP['form_json'], true);
		foreach ($form[$id] as $field => $data) {
			$html .= '<div class="mb-3">';
				$html .= '<label for="' . $field . '" class="form-label">' . $data['label'] . '</label>';
				switch ($data['type']) {
					case 'textarea': {
						$html .= '<textarea id="' . $field . '" class="f form-control" name="' . $field . '" placeholder="' . $data['label'] . '"></textarea>';
						break;
					}
					case 'checkbox': {
						$html .= '<input id="' . $field . '" type="checkbox" class="form-check-input" name="' . $field . '">';
						break;
					}
					default: {
						$html .= '<input id="' . $field . '" type="' . $data['type'] . '" class="f form-control" name="' . $field . '" placeholder="' . $data['label'] . '">';
					}
				}
			$html .= '</div>';
		}
		$html .= '<div class="mb-3">';
			$html .= '<input type="hidden" name="action" value="contact_form_action">';
			$html .= '<input type="hidden" name="form_id" value="' . $id . '">';
			$html .= wp_nonce_field('contact_form_action', '_acf_nonce', true, false);
			$html .= '<input id="contact-button" type="button" value="Send">';
		$html .= '</div>';
		$html .= '</form>';
		$html .= '<div id="contact-msg"></div>';

		$url = admin_url('admin-ajax.php');

		$script = "<script>function boot(){
			$('article').on('click','#contact-button',function(){
				var f=$('#contact-form');
				var m=$('#contact-msg');
				m.text('...');
				var ne=$('.f').filter(function(){
					return this.value != '';
				});
				if(ne.length==0){
					m.text('Please complete all the fields.');
					return false;
				}else{
					$.ajax({
						type:'POST',
						url:'{$url}',
						data:f.serialize(),
						dataType:'json',
						success:function(res){
							if(res.status=='success'){
								f[0].reset();
							}
							m.text(res.errmessage);
						}
					});
				}
			});
		}</script>";

		return $html . minify_js($script);
	}
	else {
		return null;
	}
}

// contact form post handler

function contact_form_callback() {
	if (!wp_verify_nonce($_POST['_acf_nonce'], $_POST['action'])) {
		$error = 'verification error, try again.';
	}
	else {
		$id = $_POST['form_id'];
		$forms = json_decode(_BWP['form_json'], true);
		$message = 'IP address: ' . $_SERVER['REMOTE_ADDR'] . "\n\n";

		foreach ($forms[$id] as $field => $data) {
			$sane = '';

			switch ($field) {
				case 'email': {
					$sane = filter_var($_POST[$field], FILTER_SANITIZE_EMAIL);
					break;
				}
				case 'message': {
					$sane = stripslashes($_POST[$field]);
					break;
				}
				default: {
					$sane = filter_var($_POST[$field], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
				}
			}

			$message .= $field . ': ';
			if (strlen($sane) > 50) {
				$message .= "\n\n" . $sane . "\n\n";
			}
			else {
				$message .= $sane . "\n";
			}
		}

		$subject = 'A messsage from ' . get_option('blogname');
		$sendmsg = _BWP['form_success'];
		$to = _BWP['form_email'];

		$parsed = parse_url(site_url());

		$header = 'From: ' . get_option('blogname') . ' <no-reply@' . $parsed['host'] . '>' . "\n";
		$header .= 'Reply-To: ' . $email . "\n";

		if (wp_mail($to, $subject, $message, $header)) {
			$status = 'success';
			$error = $sendmsg;
		}
		else {
			$error = 'error(s)';
		}
	}

	$json = [
		'status' => $status,
		'errmessage' => $error
	];
	
	header('Content-Type: application/json');
	die(json_encode($json));
}

// theme setup

function do_setup() {
	if (_OPTIONS_BASIC_WP['thumbnails']) {
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(192, 108);
	}

	register_nav_menus(_MENUS_BASIC_WP);
}

//   ▄█   ███▄▄▄▄▄     ▄█       ███      
//  ███   ███▀▀▀▀██▄  ███   ▀█████████▄  
//  ███▌  ███    ███  ███▌     ▀███▀▀██  
//  ███▌  ███    ███  ███▌      ███   ▀  
//  ███▌  ███    ███  ███▌      ███      
//  ███   ███    ███  ███       ███      
//  ███   ███    ███  ███       ███      
//  █▀     ▀█    █▀   █▀       ▄████▀  

// theme updater

//$updater = new _themeUpdater();

//add_action('init', [$updater, 'init']);
add_action('init', 'set_wp_options');
add_action('init', 'get_pagination');
add_action('admin_enqueue_scripts', 'add_scripts');
add_action('after_setup_theme', 'do_setup');
add_action('wp_ajax_contact_form_action', 'contact_form_callback');
add_action('wp_ajax_nopriv_contact_form_action', 'contact_form_callback');

// filters

add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10);
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10);

add_filter('excerpt_length', 'set_excerpt_length', 999);

// shortcodes

add_shortcode('logo-normal', 'logo_normal_shortcode');
add_shortcode('logo-contrast', 'logo_contrast_shortcode');

add_shortcode('contact-form', 'contact_shortcode');

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

		$active_class = ($item->current || $item->current_item_ancestor) ? ' active' : '';

		$extra_classes = [];
		if ((is_array($item->classes)) && (count($item->classes) > 0)) {
			foreach ($item->classes as $class) {
				if (substr($class, 0, 9) != 'menu-item') {
					$extra_classes[] = $class;
				}
			}
		}
		
		$nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link';
		$nav_link_class .= (count($extra_classes)) ? ' ' . implode(' ', $extra_classes) : '';
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

// EOF