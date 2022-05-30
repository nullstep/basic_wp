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

// basic_wp default css

define('_BASIC_WP_CSS', '
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
	'theme_css' => [
		'type' => 'string',
		'default' => _BASIC_WP_CSS
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

// don't change this unless
// you want to change the
// contact form fields

// contact form

define('_FORM_BASIC_WP', [
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
]);

// you can change these
// if you want to though

// page views ignore ips

define('_IGNORE_BASIC_WP', [
	'127.0.0.1'
]);

// wp options

define('_OPTIONS_BASIC_WP', [
	'thumbnails' => true
]);

// wp menus

define('_MENUS_BASIC_WP', [
	'primary' => 'Primary Menu'
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
		register_rest_route(_THEME . '-theme-api/v1', '/settings', [
			'methods' => 'POST',
			'callback' => [$this, 'update_settings'],
			'args' => _themeSettings::args(),
			'permission_callback' => [$this, 'permissions']
		]);
		register_rest_route(_THEME . '-theme-api/v1', '/settings', [
			'methods' => 'GET',
			'callback' => [$this, 'get_settings'],
			'args' => [],
			'permission_callback' => [$this, 'permissions']
		]);
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
				'url' => esc_url_raw(rest_url(_THEME . '-theme-api/v1/settings')),
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
	echo $css . _BWP['theme_css_minified'] . "\n";
}

function get_js() {
	$js = 'window.addEventListener(\'load\',(event)=>{if(typeof(boot)===typeof(Function))boot();});';
	echo $js . _BWP['theme_js_minified'] . "\n";
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
	update_option('permalink_structure', '/%postname%/');
	update_option('category_base', '');
	update_option('tag_base', '');
	update_option('posts_per_page', 10);
	update_option('uploads_use_yearmonth_folders', 0);
	update_option('ping_sites', '');
	update_option('use_smilies', 0);
	update_option('default_pingback_flag', 0);
	update_option('show_avatars', 0);

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

// no category base

function no_category_base_refresh_rules() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}

function no_category_base_permastruct() {
	global $wp_rewrite;
	$wp_rewrite->extra_permastructs['category']['struct'] = '%category%';
}

function no_category_base_rewrite_rules($category_rewrite) {
	global $wp_rewrite;
	$category_rewrite = [];
	$categories = get_categories([
		'hide_empty' => false
	]);

	foreach ($categories as $category) {
		$category_nicename = $category->slug;

		if ($category->parent == $category->cat_ID) {
			$category->parent = 0;
		}
		elseif ($category->parent != 0) {
			$category_nicename = get_category_parents($category->parent, false, '/', true) . $category_nicename;
		}

		$category_rewrite['('.$category_nicename.')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
		$category_rewrite["({$category_nicename})/{$wp_rewrite->pagination_base}/?([0-9]{1,})/?$"] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
		$category_rewrite['('.$category_nicename.')/?$'] = 'index.php?category_name=$matches[1]';
	}

	$old_category_base = get_option('category_base') ? get_option('category_base') : 'category';
	$old_category_base = trim($old_category_base, '/');
	$category_rewrite[$old_category_base.'/(.*)$'] = 'index.php?category_redirect=$matches[1]';

	return $category_rewrite;
}

function no_category_base_query_vars($public_query_vars) {
	$public_query_vars[] = 'category_redirect';
	return $public_query_vars;
}

function no_category_base_request($query_vars) {
	if (isset($query_vars['category_redirect'])) {
		$catlink = trailingslashit(get_option('home')) . user_trailingslashit($query_vars['category_redirect'], 'category');
		status_header(301);
		header('Location: ' . $catlink);
		exit();
	}

	return $query_vars;
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

// mime types

function add_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	$mimes['ico'] = 'image/vnd.microsoft.icon';
	return $mimes;
}

// pages/posts views count

function get_views($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		echo "No Views";
	}
	echo $count . ' View' . (($count != 1)? 's' : '');
}

function set_views($id) {
	$ip = $_SERVER['REMOTE_ADDR'];
	if (!in_array($ip, _IGNORE_BASIC_WP)) {
		$count_key = 'post_views_count';
		$count = get_post_meta($id, $count_key, true);
		if ($count == '') {
			$count = 0;
			delete_post_meta($id, $count_key);
			add_post_meta($id, $count_key, '0');
		}
		else {
			$count++;
			update_post_meta($id, $count_key, $count);
		}
	}
}

function posts_column_views($defaults) {
	$defaults['post_views'] = 'Views';
	return $defaults;
}

function posts_custom_column_views($column_name, $id) {
	if ($column_name === 'post_views') {
		get_views(get_the_ID());
	}
}

function pages_column_views($defaults) {
	$defaults['page_views'] = 'Views';
	return $defaults;
}

function pages_custom_column_views($column_name, $id) {
	if ($column_name === 'page_views') {
		get_views(get_the_ID());
	}
}

// media downloads field

function media_downloads($form_fields, $post) {
	$form_fields['file_downloads'] = [
		'label' => 'Downloads',
		'input' => 'text',
		'value' => get_post_meta($post->ID, 'file_downloads', true),
		'helps' => ''
	];
	return $form_fields;
}
 
function media_downloads_save($post, $attachment) {
	if (isset($attachment['file_downloads'])) {
		update_post_meta($post->ID, 'file_downloads', $attachment['file_downloads']);
	}
	return $post;
}

// page column class metadata

function add_post_metadata() {
	$screen = 'page';
	add_meta_box(
		'post_meta_box',
		'Column Class',
		'add_post_metadata_callback',
		$screen,
		'side',
		'default',
		null
	);
}

function add_post_metadata_callback($post) {
	wp_nonce_field('column_class_save_data', 'column_class_nonce');
	$value = get_post_meta($post->ID, 'column_class', true);
	echo '<input class="components-text-control__input" style="margin-top:8px" type="text" name="column_class" value="' . esc_attr($value) . '" placeholder="Enter Column Class...">';
}

function save_post_metadata($post_id) {
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
			if (!isset($_POST['column_class_nonce'])) {
				return;
			}
			if (!wp_verify_nonce($_POST['column_class_nonce'], 'column_class_save_data')) {
				return;
			}
			$data = sanitize_text_field($_POST['column_class']);
			update_post_meta($post_id, 'column_class', $data);
		}
	}
}

// htaccess stuff

function output_htaccess($rules) {
	$theme = _THEME;
	$new_rules = "\n# BEGIN basic_wp\n\nOptions -Indexes\n\n<IfModule mod_rewrite.c>\nRewriteEngine On\nRewriteCond %{REQUEST_URI} ^/img [NC]\nRewriteRule /(.*) wp-content/themes/{$theme}/$1 [L]\nRewriteCond %{REQUEST_URI} ^/css [NC]\nRewriteRule /(.*) wp-content/themes/{$theme}/$1 [L]\nRewriteCond %{REQUEST_URI} ^/js [NC]\nRewriteRule /(.*) wp-content/themes/{$theme}/$1 [L]\nRewriteCond %{REQUEST_URI} ^/uploads [NC]\nRewriteRule /(.*) wp-content/themes/{$theme}/uploads.php?file=$1 [L]\nRewriteCond %{QUERY_STRING} (author=\d+) [NC]\nRewriteRule .* - [F]\n</IfModule>\n\n<Files xmlrpc.php>\norder deny,allow\ndeny from all\n</Files>\n\n# END basic_wp\n\n";
	return $new_rules . $rules;
}

function flush_htaccess() {
	flush_rewrite_rules();
}

// login screen

function basic_wp_login_logo() {
	echo '<style>h1 a { background-image:url(' . get_template_directory_uri() . '/logo_dark.svg) !important; width: 300px !important; background-size: auto auto !important; }</style>';
}

//     ▄████████   ▄█   ▀████    ▐████▀     ▄████████     ▄████████  
//    ███    ███  ███     ███▌   ████▀     ███    ███    ███    ███  
//    ███    █▀   ███▌     ███  ▐███       ███    █▀     ███    █▀   
//   ▄███▄▄▄      ███▌     ▀███▄███▀      ▄███▄▄▄        ███         
//  ▀▀███▀▀▀      ███▌     ████▀██▄      ▀▀███▀▀▀      ▀███████████  
//    ███         ███     ▐███  ▀███       ███    █▄            ███  
//    ███         ███    ▄███     ███▄     ███    ███     ▄█    ███  
//    ███         █▀    ████       ███▄    ██████████   ▄████████▀   

// fix content urls/classes etc

function fix_content($content) {
	if ($content == '') {
		return '';
	}
	else {
		libxml_use_internal_errors(true);
		$dom = new DOMDocument;
		$dom->strictErrorChecking = false;
		$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NODEFDTD);
		foreach ($dom->getElementsByTagName('img') as $img) {
			$classes = explode(' ', $img->getAttribute('class'));
			if (!in_array('ext', $classes)) {
				$file = basename(parse_url($img->getAttribute('src'), PHP_URL_PATH));
				$path = substr($img->getAttribute('src'), 0, (0 - strlen($file)));
				$img->setAttribute('src', '/uploads/' . $file);
				$set = str_replace($path, '/uploads/', $img->getAttribute('srcset'));
				$img->setAttribute('srcset', $set);
			}
		}
		foreach ($dom->getElementsByTagName('figure') as $fig) {
			$fig->removeAttribute('class');
		}
		foreach ($dom->getElementsByTagName('pre') as $pre) {
			$pre->removeAttribute('class');
		}
		$xpath = new DOMXPath($dom);
		for ($els = $xpath->query('//comment()'), $i = $els->length - 1; $i >= 0; $i--) {
			$els->item($i)->parentNode->removeChild($els->item($i));
		}
		$temp = str_replace('<html><body>', '', $dom->saveHTML());
		$temp = str_replace('</body></html>', '', $temp);
		return "\t\t\t\t\t\t" . str_replace("\n", '', $temp);
	}
}

// remove crap

function remove_category_rel_from_category_list($thelist) {
	return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action('wp_head', [
		$wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
		'recent_comments_style'
	]);
}

function remove_crap() {
	wp_dequeue_style('wp-block-library');
	wp_deregister_script('jquery');
	wp_dequeue_style('global-styles');
}

// tidy head

function start_wp_head_buffer() {
	ob_start();
}

function end_wp_head_buffer() {
	$content = ob_get_clean();
	if ($content == '') {
		echo '';
	}
	else {
		libxml_use_internal_errors(true);
		$head = new DOMDocument;
		$head->strictErrorChecking = false;
		$head->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
		foreach ($head->getElementsByTagName('script') as $script) {
			$script->removeAttribute('id');
			$script->removeAttribute('type');
		}
		foreach ($head->getElementsByTagName('link') as $style) {
			if ($style->getAttribute('id') == 'parent-style-css') {
				$style->parentNode->removeChild($style);
			}
		}
		$html = $head->saveHTML();
		echo (trim($html) == '') ? '' : "\t" . str_replace("\n", '', $head->saveHTML()) . "\n";
	}
}

// clean up nav items

function nav_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, ['current-menu-item', 'nav-item']) : '';
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
	return '<img src="/uploads/' . _NWP['logo_image_normal'] . '" class="logo ' . $content .'">';
}

function logo_contrast_shortcode($atts = [], $content = null, $tag = '') {
	return '<img src="/uploads/' . _NWP['logo_image_contrast'] . '" class="logo ' . $content .'">';
}

// include file shortcode

function inc_shortcode($atts = [], $content = null, $tag = '') {
	if ($content) {
		ob_start();
		get_template_part($content);
		return ob_get_clean();
	}
	else {
		return '';
	}
}

// responsive video shortcode

function video_shortcode($atts = [], $content = null, $tag = '') {
	return '<div class="video"><iframe src="' . $content . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

// show child pages shortcode

function children_shortcode() {
	ob_start();
	if (is_page()) {
		$current_page_id = get_the_ID();
		$child_pages = get_pages([ 
			'child_of' => $current_page_id,
			'sort_column' => 'menu_order',
			'sort_order' => 'ASC'
		]);
		if ($child_pages) {
			echo '<div class="row">';
			foreach ($child_pages as $child_page) {
				$page_id = $child_page->ID;
				$page_link = get_permalink($page_id);
				$page_title = $child_page->post_title;
				$page_content = $child_page->post_content;
				$page_col_class = get_post_meta($page_id, 'column_class', true);
				?><div class="<?php echo $page_col_class; ?>"><?php echo do_shortcode($page_content); ?></div><?php
			}
			echo '</div>';
		}
	}
	return ob_get_clean();
}

// contact form shortcode

function contact_shortcode() {
	$html = '<form id="contact-form">';
	$form = _FORM_BASIC_WP;
	foreach ($form as $field => $data) {
		$html .= '<div class="mb-3">';
			$html .= '<label for="' . $field . '" class="form-label">' . $data['label'] . '</label>';
			switch ($data['type']) {
				case 'textarea': {
					$html .= '<textarea id="' . $field . '" class="f form-control" name="' . $field . '"></textarea>';
					break;
				}
				case 'checkbox': {
					$html .= '<input id="' . $field . '" type="checkbox" class="form-check-input" name="' . $field . '">';
					break;
				}
				default: {
					$html .= '<input id="' . $field . '" type="' . $data['type'] . '" class="f form-control" name="' . $field . '">';
				}
			}
		$html .= '</div>';
	}
	$html .= '<div class="mb-3">';
		$html .= '<input type="hidden" name="action" value="contact_form_action">';
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
				m.text('empty fields');
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

// contact form post handler

function contact_form_callback() {
	if (!wp_verify_nonce($_POST['_acf_nonce'], $_POST['action'])) {
		$error = 'verification error, try again.';
	}
	else {
		$form = _FORM_BASIC_WP;
		$message = 'IP address: ' . $_SERVER['REMOTE_ADDR'] . "\n\n";

		foreach ($form as $field => $data) {
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
		$sendmsg = 'Thanks, for the message. We will respond as soon as possible.';
		$to = get_option('admin_email');

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
add_action('init', 'no_category_base_permastruct');
add_action('widgets_init', 'remove_recent_comments_style');
add_action('admin_init', 'flush_htaccess');
add_action('wp_head','start_wp_head_buffer', 0);
add_action('wp_head','end_wp_head_buffer', PHP_INT_MAX);
add_action('login_head', 'basic_wp_login_logo');
add_action('wp_enqueue_scripts', 'remove_crap');
add_action('admin_enqueue_scripts', 'add_scripts');
add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);
add_action('manage_pages_custom_column', 'pages_custom_column_views', 5, 2);
add_action('created_category', 'no_category_base_refresh_rules');
add_action('delete_category', 'no_category_base_refresh_rules');
add_action('edited_category', 'no_category_base_refresh_rules');
add_action('add_meta_boxes', 'add_post_metadata');
add_action('save_post', 'save_post_metadata');
add_action('after_setup_theme', 'do_setup');

add_action('shutdown', function() {
	while (@ob_end_flush());
});

add_action('wp_ajax_contact_form_action', 'contact_form_callback');
add_action('wp_ajax_nopriv_contact_form_action', 'contact_form_callback');

remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'noindex', 1);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'oa_social_login_add_javascripts');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('shutdown', 'wp_ob_end_flush_all', 1);

// filters

add_filter('widget_text', 'shortcode_unautop');
add_filter('the_category', 'remove_category_rel_from_category_list');
add_filter('the_excerpt', 'shortcode_unautop');
add_filter('show_admin_bar', '__return_false');
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10);
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10);
add_filter('manage_posts_columns', 'posts_column_views');
add_filter('manage_pages_columns', 'pages_column_views');
add_filter('the_content', 'fix_content', 20);
add_filter('mod_rewrite_rules', 'output_htaccess');
add_filter('upload_mimes', 'add_mime_types');
add_filter('attachment_fields_to_edit', 'media_downloads', 10, 2);
add_filter('attachment_fields_to_save', 'media_downloads_save', 10, 2);
add_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
add_filter('query_vars', 'no_category_base_query_vars');
add_filter('request', 'no_category_base_request');
add_filter('nav_menu_css_class', 'nav_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'nav_attributes_filter', 100, 1);
add_filter('page_css_class', 'nav_attributes_filter', 100, 1);
add_filter('excerpt_length', 'set_excerpt_length', 999);

remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_filter('the_excerpt', 'wpautop');
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

// shortcodes

add_shortcode('logo-normal', 'logo_normal_shortcode');
add_shortcode('logo-contrast', 'logo_contrast_shortcode');
add_shortcode('inc', 'inc_shortcode');
add_shortcode('video', 'video_shortcode');
add_shortcode('children', 'children_shortcode');
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

// EOF