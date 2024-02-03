<?php
add_action( 'admin_init', 'goldy_market_remove_menu_pages' );

function goldy_market_remove_menu_pages() {          
	remove_submenu_page( 'themes.php', 'goldy-mex-about' );                                          
}

function goldy_market_about_menu() {
	add_theme_page( esc_html__( 'About Theme', 'goldy-market' ), esc_html__( 'About Theme', 'goldy-market' ), 'edit_theme_options', 'goldy-market-about', 'goldy_market_about_display' );
}
add_action( 'admin_menu', 'goldy_market_about_menu' );

function goldy_market_about_display(){
	?>
	<div class="goldy_market_about_data">
		<div class="goldy_market_about_title">
			<h1><?php echo esc_html( 'Goldy Market', 'goldy-market' ); ?></h1>
			<div class="goldy_market_about_theme">
				<div class="goldy_market_about_description">
					<p>
					<?php echo esc_html( 'Goldy Market is a cutting-edge and adaptable WordPress theme crafted specifically for marketplaces and retail-focused businesses. With Goldy Market, you have the ideal WordPress theme to establish a compelling and functional website that will elevate your market, engage your audience, and enhance your online presence in the retail domain. This theme serves as your key to creating an enticing online platform that caters to a diverse range of market products and services. Featuring a sleek and user-friendly design, Goldy Market offers a responsive and customizable framework suitable for various niches, from grocery markets and specialty stores to online retail and shopping platforms. The design of this theme is both striking and tailored to perfection, ensuring a seamless and visually appealing experience for your market-focused website.', 'goldy-market' ); ?>
					</p>
					<div class="goldy_market_about_demo">
						<div class="feature-section">
							<div class="about_data_goldy_solar">
								<h3><?php echo esc_html( 'Free Theme Demo', 'goldy-market' ); ?></h3>
								<?php $theme_demo_url = 'https://inverstheme.com/themedemo/goldy-market/'; ?>
								<a href="<?php echo esc_url($theme_demo_url); ?>"><?php echo esc_html( 'Theme Demo ', 'goldy-market' ); ?></a>
							</div>
						</div>
						<div class="feature-section">
							<div class="about_data_goldy_solar">
								<h3><?php echo esc_html( 'Documentation', 'goldy-market' ); ?></h3>
								<?php $theme_doc_url = 'https://www.inverstheme.com/goldy-market-documentation/'; ?>
								<a href="<?php echo esc_url($theme_doc_url); ?>"><?php echo esc_html( 'Read Documentation', 'goldy-market' ); ?></a>
							</div>
						</div>
						<div class="feature-section">
							<div class="about_data_goldy_solar">
								<h3><?php echo esc_html( 'Free VS Pro', 'goldy-market' ); ?></h3>
								<?php $theme_compare_url = 'https://www.inverstheme.com/theme/goldy-market-pro/'; ?>
								<a href="<?php echo esc_url($theme_compare_url); ?>"><?php echo esc_html( 'Compare free Vs Pro ', 'goldy-market' ); ?></a>
							</div>
						</div>
					</div>
				</div>

				<div class="goldy_market_about_image">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
				</div>
			</div>
		</div>
		<ul class="tabs">
			<li class="tab-link current" data-tab="about"><?php echo esc_html( 'About', 'goldy-market' ); ?></li>
		</ul> 
		<div id="about" class="tab-content current">
			<div class="about_section">
				<div class="about_info_data theme_info">
					<div class="about_theme_title">
						<h2><?php echo esc_html( 'For Shortcode', 'goldy-market' ); ?></h2>
					</div>
					<div class="about_theme_data">
						<p><?php echo esc_html( "For Displaying Theme Sections in Page or Post Put the Shortcode Which Is Given Below.", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "Featured Slider : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_featuredimage_slider']", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "Featured Section : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_featured_section']", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "Our Portfolio : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_our_portfolio_section']", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "About Us : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_about_section']", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "Book an Appointment : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_appointment_section']", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "Our Team : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_our_team_section']", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "Our Testimonial : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_our_testimonial_section']", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "Pricing Plan : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_market_pricing_plan_section']", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "Our Sponsors : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_our_sponsors_section']", 'goldy-market' ); ?></p>
						<p><strong><?php echo esc_html( "Our Services : ", 'goldy-market' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_services_section']", 'goldy-market' ); ?></p>
					</div>
				</div>
				<div class="about_info_data theme_info">
					<div class="about_theme_title">
						<h2><?php echo esc_html( 'Theme Customizer', 'goldy-market' ); ?></h2>
					</div>
					<div class="about_theme_data">
						<p><?php echo esc_html( 'All Theme Options are available via Customize screen.', 'goldy-market' ); ?></p>
					</div>
					<div class="about_theme_btn">
						<a class="customize_btn button button-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php echo esc_html( 'Customize', 'goldy-market' ); ?></a>
					</div>
				</div>
				<div class="theme_que theme_info">
					<div class="about_theme_que">
						<h2><?php echo esc_html( 'Got theme support question?', 'goldy-market' ); ?></h2>
					</div>
					<div class="about_que_data">
						<p><?php echo esc_html( 'Get genuine support from genuine people. Whether its customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'goldy-market' ); ?></p>
					</div>
					<div class="about_que_btn">
						<a class="support_forum button button-primary" href="https://www.inverstheme.com/contact-us/"><?php echo esc_html( 'Support Forum', 'goldy-market' ); ?></a>
					</div>
				</div>
			</div>
		</div>			
	</div>
	<?php
}
?>