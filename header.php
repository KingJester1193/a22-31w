<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">

			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>

			<?php
				$underscore_description = get_bloginfo( 'description', 'display' );
				if ( $underscore_description || is_customize_preview() ) : ?>

				<h3 class="site-description"><?php echo $underscore_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
				<?php endif;?>
		</div><!-- .site-branding -->
		<?php wp_nav_menu(array("menu" => "primaire"));?>
	</header><!-- #masthead -->
