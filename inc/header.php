<?php 
GLOBAL $detect;
if(function_exists('get_field')) {
 	$header_image = get_field('header_image') ? $header_image = get_field('header_image') : $header_image = get_field('default_header_image', 'option');
 	$header_image = ($detect->isMobile() && !$detect->isTablet()) ? $header_image['sizes']['large'] : $header_image['url'];
}
if(is_user_logged_in()){ ?>
		<style>
			.header {
				top:32px!important;
			}
			.main {
				margin-top:32px!important;
			}
		</style>
	<?php } ?>
<header class="header">
	<a class="logo" href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() . '/img/2019 Road Safety Logo.png'; ?>"></img></a>
	<?php get_search_form(); ?>
	<button id="quote-button">REQUEST A QUOTE</button>
	<a id="cart" href="<?php echo home_url() ?>"><img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/09/Shopping-Cart-Icon.png'?>"></a>
	<div id="nav-wrapper">
		<nav class="nav" id="nav">
			<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'awiNav' ) ); ?>
		</nav>
	</div>
</header>
<?php if($header_image && !is_front_page()) { ?>
	<div class="interior-banner" style="background-image:url('<?php echo $header_image; ?>');"></div>
<?php } ?>