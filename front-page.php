<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

 /**
 * Template Name: Home Page
 */

?>

<?php get_header(); ?>

<main id="main-content">
<?php $image = get_field('hero_background'); ?>
	<section style="background-image: url(<?php echo $image['url']; ?>)" id="hero-area">
		<button id="phone"><a href="tel:14107870222">410-787-0222</a></button>
		<div id="hero-products">
			<h2>Traffic Control Experts Who Keep Your Families Safe in Work Zones in MD, DC, DE, & Northern VA</h2>
			<button>SEE OUR PRODUCTS</button>
		</div>
	</section>
	<section id="products">
		<?php $products_image = get_field('products_background'); ?>
		<h1 style="background-image: url(<?php echo $products_image['url']; ?>)">TRAFFIC CONTROL PRODUCTS</h1>
		<div id="bucket-container">
			<?php
				$products = new WP_Query(array(
					'post_type' => 'product',
						'posts_per_page'	=> 5,
						'order' => 'ASC'
				));

				while($products->have_posts()) {
					$products->the_post(); ?>
						<div class="bucket" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>">							
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>							
						</div>          
				<?php }
			?>
			<div class="bucket" id="view-all">
				<h3>View All Products</h3>
				<a href="#">
					<img id="products-svg" src="<?php echo get_template_directory_uri() . '/icons/arrow.svg'; ?>"></img>
				</a>
			</div>
		</div>
	</section>
	<section id="about-services">
		<div id="about-us">
			<h2>WHY ROAD SAFETY LLC?</h2>
			<img src="<?php echo get_template_directory_uri() . '/img/Heading Underline.png'; ?>"></img>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel leo semper, pulvinar magna nec, posuere nisl. Suspendisse libero quam, ultricies vel nibh sit amet, placerat lacinia lacus. Pellentesque condimentum cursus ex, nec ultricies erat tincidunt et. Integer scelerisque vitae quam id tempus. Praesent eu cursus elit. Praesent imperdiet metus ut mattis rhoncus. Aenean nec tristique nibh. Maecenas sit amet leo arcu. Nunc eu interdum est. Ut non pretium est. Pellentesque bibendum elementum eros at molestie.</p>
			<button>LEARN MORE ABOUT US</button>
		</div>
		<div id="services">
			<div class="service-bucket">
				<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/09/traffic-control.png'; ?>"></img>
				<h3><span class="orange">Traffic Control</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mollis elit, quis lobortis sapien. Nunc nec nulla mattis ex tempus dignissim.</p>
			</div>
			<div class="service-bucket">
			<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/09/rentals.png'; ?>"></img>
				<h3>Rentals</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mollis elit, quis lobortis sapien. Nunc nec nulla mattis ex tempus dignissim.</p>
			</div>
			<div class="service-bucket">
				<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/09/fabrication.png'; ?>"></img>
				<h3><span class="green">Sign Fabrication</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mollis elit, quis lobortis sapien. Nunc nec nulla mattis ex tempus dignissim.</p>
			</div>
			<div class="service-bucket">
				<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/09/installation.png'; ?>"></img>
				<h3><span class="orange">Sign Installation</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mollis elit, quis lobortis sapien. Nunc nec nulla mattis ex tempus dignissim.</p>
			</div>
		</div>
	</section>
	<section id="cta-area">
		<h2>HOW CAN WE HELP YOU?</h2>
		<img src="<?php echo get_template_directory_uri() . '/img/CTA Heading Line.png'; ?>"></img>
		<div id="cta-container">
			<div class="cta-bucket">
				<a href="">
					<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/09/quote.png'; ?>"></img>
					<h2>READY TO GET A <span class="orange">QUOTE?</span></h2>
				</a>
			</div>
			<div class="cta-bucket">
				<a href="">
					<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/09/products.png'; ?>"></img>
					<h2>VIEW OUR <span class="orange">PRODUCTS</span></h2>
				</a>
			</div>
			<div class="cta-bucket">
				<a href="">
					<img src="<?php echo wp_upload_dir()['baseurl'] . '/2021/09/services.png'; ?>"></img>
					<h2>VIEW OUR <span class="orange">SERVICES</span></h2>
				</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>