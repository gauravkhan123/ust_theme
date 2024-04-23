<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="top-header">
		<div class="top-header-content">
			<div class="call-us"><span>CALL US NOW!</span>
				<?php
				$phone = esc_html(get_option('phone'));
				if (!empty($phone)) {
					echo $phone = esc_html($phone);
				} else {
					echo '385.154.11.28.38';
				} ?>
			</div>
			<div class="login-signup"><a href="#"><span>LOGIN</span></a><a href="#">SIGNUP</a></div>
		</div>
	</div>
	<header class="head-menu">
		<div class="header-content">
			<div class="logo">
				<?php
				$logo = esc_attr(get_option('logo'));
				$site_url = site_url();
				if (!empty($logo)) {
					echo '<a href="' . $site_url . '"><img src="' . $logo . '" alt="Logo" width="100px;"></a>';
				} else {
					echo '<a href="' . $site_url . '">YOUR LOGO</a>' ;
				}
				?>
			</div>
			<nav>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'menu_class' => 'main-menu',
						'container' => false,
						'depth' => 2, // Allow 2 levels of submenus
					)
				);
				?>
			</nav>
		</div>
	</header>
	<!-- ... -->