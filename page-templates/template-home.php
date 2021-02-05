<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="home-hero-banner-top">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-xl-7 col-md-12">
				<div class="skip-bin-info">
					<div class="overlay-image-arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-arrow-up.png"
							alt="arrow-up">
					</div>
					<div class="title">
						<i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Skip Bin instant quote
					</div>
					<div class="desc">
						Simply type your suburb above and you will be provided with an instant price across our range
					</div>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-xl-4 col-lg-12">
				<div class="home-hero">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-right-info.png" alt="home-hero"
						width="100%">
					<div class="seven-day-info">
						<div class="title">7-Day skip bin hire direct to your home covering Perth to Albany</div>
					</div>
				</div>
			</div>



		</div>

		<div class="home-hero-slider">
			<div class="slider">
				<div class="slider-wrapper">
					<div class="slide">
						<div class="image">
						</div>
						<div class="entry-content">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="">
							</div>
							<div class="info">
								We deliver the right skip bin for your residential and commercial projects.
							</div>
							<div class="slider-nav">
								<a href=""><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
								<a href=""><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>

<div class="home-product-info">
	<div class="background-overlay">
		<div class="container">
			<div class="home-special-offer">
				<div class="circle-centre">
					<div class="discount-circle">
						<div class="save">Save</div>
						<div class="precent">20%</div>
					</div>
				</div>
				<div class="entry-content">
					<div class="title">15 Day Storm Special on 9m3 Skip Bins</div>
					<div class="desc">BIN SERVICES - Perth, Fermantle, Kwianana, Rockingham, Mandurah, Pinjarra,
						Waroona, Harvey, Australid, Bunbury, Busselton, Margaret River</div>
					<a href="#" class="button">FIND OUT MORE INFORMATION</a>
				</div>
			</div>
		</div>
	</div>

	<div class="home-products-holder">
		<div class="container">
			<h2><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Select the right skip bin for your project
			</h2>


			<div class="home-product">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/6m3-Skip-Bin.png"
							alt="product-placeholder" width="100%">
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="title">4 Cubic Metre Skip</div>
						<ul>
							<li>Garden & Household clean-up</li>
							<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
							<li>Ideal for narrow alleys or small streets</li>
							<li>Building Sites</li>
						</ul>

					</div>
					<div class="col-xl-4 col-lg-2 col-md-12 ">
						<div class="col-xl-12 col-lg-3 col-md-12">
							<div class="approx-circles">
								<div class="row">
									<div class="col-xl-6 col-lg-4 col-md-4  col-sm-6">
										<div class="circle">
											<div class="title">Approx x4 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png"
													alt="">
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-4 col-md-4  col-sm-6">
										<div class="circle ">
											<div class="title">Approx x4 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-product.png"
													alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="abs-holder-button">Get a quote for this skip bin</div>
				</div>
			</div>

			<div class="home-product">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/6m3-Skip-Bin.png"
							alt="product-placeholder" width="100%">
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="title">4 Cubic Metre Skip</div>
						<ul>
							<li>Garden & Household clean-up</li>
							<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
							<li>Ideal for narrow alleys or small streets</li>
							<li>Building Sites</li>
						</ul>

					</div>
					<div class="col-xl-4 col-lg-2 col-md-12 ">
						<div class="col-xl-12 col-lg-3 col-md-12">
							<div class="approx-circles">
								<div class="row">
									<div class="col-xl-6 col-lg-4 col-md-4  col-sm-6">
										<div class="circle">
											<div class="title">Approx x4 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png"
													alt="">
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-4 col-md-4  col-sm-6">
										<div class="circle ">
											<div class="title">Approx x4 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-product.png"
													alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="abs-holder-button">Get a quote for this skip bin</div>
				</div>
			</div>

			<div class="home-product">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/6m3-Skip-Bin.png"
							alt="product-placeholder" width="100%">
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="title">4 Cubic Metre Skip</div>
						<ul>
							<li>Garden & Household clean-up</li>
							<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
							<li>Ideal for narrow alleys or small streets</li>
							<li>Building Sites</li>
						</ul>

					</div>
					<div class="col-xl-4 col-lg-2 col-md-12 ">
						<div class="col-xl-12 col-lg-3 col-md-12">
							<div class="approx-circles">
								<div class="row">
									<div class="col-xl-6 col-lg-4 col-md-4  col-sm-6">
										<div class="circle">
											<div class="title">Approx x4 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png"
													alt="">
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-4 col-md-4  col-sm-6">
										<div class="circle ">
											<div class="title">Approx x4 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-product.png"
													alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="abs-holder-button">Get a quote for this skip bin</div>
				</div>
			</div>


			<div class="home-product">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/6m3-Skip-Bin.png"
							alt="product-placeholder" width="100%">
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="title">4 Cubic Metre Skip</div>
						<ul>
							<li>Garden & Household clean-up</li>
							<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
							<li>Ideal for narrow alleys or small streets</li>
							<li>Building Sites</li>
						</ul>

					</div>
					<div class="col-xl-4 col-lg-2 col-md-12 ">
						<div class="col-xl-12 col-lg-3 col-md-12">
							<div class="approx-circles">
								<div class="row">
									<div class="col-xl-6 col-lg-4 col-md-4  col-sm-6">
										<div class="circle">
											<div class="title">Approx x4 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png"
													alt="">
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-4 col-md-4  col-sm-6">
										<div class="circle ">
											<div class="title">Approx x4 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-product.png"
													alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="abs-holder-button">Get a quote for this skip bin</div>
				</div>
			</div>


		</div>
	</div>


	<div class="home-following-waste">
		<div class="container">
			<div class="title-holder top">
				<h2>We accept the following waste</h2>
				<div class="button-holder">
					<a href="#" class="button">read the full list of acceptable waste</a>
				</div>
			</div>


			<div class="row">
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="circle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-1.png" alt="">
						<div class="title">Commercial Waste</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="circle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-2.png" alt="">
						<div class="title">Building Waste</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="circle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-3.png" alt="">
						<div class="title">Green Waste</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="circle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-4.png" alt="">
						<div class="title">Household Waste</div>
					</div>
				</div>
			</div>

			<div class="title-holder bottom">
				<div class="button-holder">
					<a href="#" class="button">read the full list of acceptable waste</a>
				</div>
			</div>
		</div>





	</div>
</div>


<?php
get_footer();
