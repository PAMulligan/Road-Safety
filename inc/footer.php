<footer>
	<div class="container" id="certs-container">
		<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/08/mdot.png'; ?>"></img>
		<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/08/sbe.png'; ?>"></img>
		<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/08/srb-small-business-reserve.png'; ?>"></img>
	</div>
	<div id="footer-border"></div>
	<div id="main-footer">
		<a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() . '/img/2019 Road Safety Logo.png'; ?>" id="footer-logo"></img></a>
		<div id="contact-methods">
			<p>Road Safety LLC</p>
			<p>129 Roesler Road</p>
			<p>Glen Burnie, MD 21060</p>
			<p>Tel: 410-787-0222</p>
			<p>Fax: 410-787-1260</p>
		</div>
		<div id="footer-nav">
			<h3>Quick Links</h3>
			<?php // Footer Nav
			wp_nav_menu(
				array(
					'theme_location' => 'footer_nav'
				)
			); ?>
		</div>
		<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/08/american-owned-and-operated-business.png'; ?>" id="merica"></img>
	</div>
</footer>
<div class="copyright">
	<p>© 2021 Road Safety LLC | All rights reserved | Website Design & Marketing provided by Adventure Web Interactive</p>
</div>