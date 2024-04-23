<?php
// Register settings
function register_theme_settings()
{
	register_setting('theme-settings', 'logo', 'sanitize_logo');
	register_setting('theme-settings', 'phone');
	register_setting('theme-settings', 'address');
	register_setting('theme-settings', 'fax');
	register_setting('theme-settings', 'facebook');
	register_setting('theme-settings', 'twitter');
	register_setting('theme-settings', 'linkedin');
	register_setting('theme-settings', 'pinterest');
}
add_action('admin_init', 'register_theme_settings');

// Register settings sections
function register_theme_settings_sections()
{
	add_settings_section('theme-settings-section', 'Theme Settings', null, 'theme-settings');
}
add_action('admin_init', 'register_theme_settings_sections');
// Add theme settings page to the admin menu
function add_theme_settings_page()
{
	add_theme_page('Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', 'render_theme_settings_page');
}
add_action('admin_menu', 'add_theme_settings_page');

// Render the theme settings page
function render_theme_settings_page()
{
	require_once get_template_directory() . '/theme-settings.php';
}
// Sanitize and upload the logo
function sanitize_logo($logo_url)
{
	$upload_dir = wp_upload_dir();
	$upload_path = $upload_dir['path'] . '/';
	$max_file_size = 100 * 1024 * 1024; // 100 MB in bytes

	if (!empty($_FILES['logo_upload']['tmp_name'])) {
		$file = $_FILES['logo_upload'];
		$file_name = basename($file['name']);
		$file_tmp = $file['tmp_name'];
		$file_size = $file['size'];
		$file_type = wp_check_filetype($file_name);

		$allowed_types = array('jpg', 'jpeg', 'png', 'svg');
		if (in_array($file_type['ext'], $allowed_types) && $file_size <= $max_file_size) {
			if (move_uploaded_file($file_tmp, $upload_path . $file_name)) {
				$logo_url = $upload_dir['url'] . '/' . $file_name;
			} else {
				add_settings_error('theme-settings', 'logo-error', 'Error uploading logo. Please try again.', 'error');
			}
		} else {
			add_settings_error('theme-settings', 'logo-error', 'Invalid file type or size. Please upload a JPG, PNG, or SVG file under 100 MB.', 'error');
		}
	}

	return $logo_url;
}