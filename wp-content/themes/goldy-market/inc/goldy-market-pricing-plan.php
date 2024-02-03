<?php
add_action("init","goldy_market_pricing_plan_customizer",12);
function goldy_market_pricing_plan_customizer(){
// Restaurant Menu
	new \Kirki\Section(
		'goldy_market_pricing_plan_section',
		[
			'title'       => esc_html__( 'Pricing Plan', 'goldy-market' ),
			'panel'       => 'globly_theme_option',
			'priority'    => 150,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'goldy_market_pricing_plan_main_title',
			'label'    => esc_html__( 'Pricing Plan Title', 'goldy-market' ),
			'section'  => 'goldy_market_pricing_plan_section',
			'default'  => esc_html__( 'Pricing Plan', 'goldy-market' ),
			'priority' => 5,
			'partial_refresh'    => [
				'goldy_market_pricing_plan_main_title' => [
					'selector'        => '.market_pricing_plan_section',
					'render_callback' => function() {
					    return true;
					}
				],
			],
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'goldy_market_pricing_plan_content',
			'label'    => esc_html__( 'Pricing Plan Content', 'goldy-market' ),
			'row_label' => array( 'value' => 'Info item' ),
			'section'  => 'goldy_market_pricing_plan_section',
			'priority' => 10,
			'default'  => [
				[
					'image'    => '',
					'price_value'    => esc_html__('$120', 'goldy-market' ),
					'plan_time'    => esc_html__('Per Month', 'goldy-market' ),
					'plan_type'    => esc_html__('Basic', 'goldy-market' ),
					'plan_description'    => esc_html__('Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.', 'goldy-market' ),	
					'link_text'    => esc_html__('Select Plan', 'goldy-market' ),	
					'link_url'    => '#',	
				],
				[
					'image'    => '',
					'price_value'    => esc_html__('$160', 'goldy-market' ),
					'plan_time'    => esc_html__('Per Month', 'goldy-market' ),
					'plan_type'    => esc_html__('Standard', 'goldy-market' ),
					'plan_description'    => esc_html__('Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.', 'goldy-market' ),	
					'link_text'    => esc_html__('Select Plan', 'goldy-market' ),	
					'link_url'    => '#',
				],
				[
					'image'    => '',
					'price_value'    => esc_html__('$190', 'goldy-market' ),
					'plan_time'    => esc_html__('Per Month', 'goldy-market' ),
					'plan_type'    => esc_html__('Premium', 'goldy-market' ),
					'plan_description'    => esc_html__('Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.', 'goldy-market' ),	
					'link_text'    => esc_html__('Select Plan', 'goldy-market' ),	
					'link_url'    => '#',
				],
			],
			'fields'   => [
				'image'    => [
					'type'		  => 'image',
					'label'       => esc_html__( 'Image:', 'goldy-market' ),
				],
				'price_value'    => [
					'type'		  => 'text',
					'label'       => esc_html__( 'Plan Price:', 'goldy-market' ),
				],
				'plan_time'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Time', 'goldy-market' ),
				],
				'plan_type'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Plan Type', 'goldy-market' ),
				],
				'plan_description'    => [
					'type'        => 'textarea',
					'label'       => esc_html__( 'About Plan', 'goldy-market' ),
				],
				'link_text'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Link Text:', 'goldy-market' ),
				],
				'link_url'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Link URL:', 'goldy-market' ),
				],
			],
			'choices' => [
				'limit' => 3,
			]
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'goldy_market_pricing_plan_background_image',
			'label'       => esc_html__( 'Backgroung Image', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '',
			'priority'    => 15,
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_market_pricing_plan_background_position',
			'label'       => esc_html__( 'Background Position', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => 'center center',
			'priority'    => 20,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-market' ),
			'choices'     => [
				'left top' => esc_html__( 'Left Top', 'goldy-market' ),
				'left center' => esc_html__( 'Left Center', 'goldy-market' ),
				'left bottom' => esc_html__( 'Left Bottom', 'goldy-market' ),
				'right top' => esc_html__( 'Right Top', 'goldy-market' ),
				'right center' => esc_html__( 'Right Center', 'goldy-market' ),
				'right bottom' => esc_html__( 'Right Bottom', 'goldy-market' ),
				'center top' => esc_html__( 'Center Top', 'goldy-market' ),
				'center center' => esc_html__( 'Center Center', 'goldy-market' ),
				'center bottom' => esc_html__( 'Center Bottom', 'goldy-market' ),
			],
			'output' => array(
				array(
					'element'  => '.market_pricing_plan_section',
					'property' => 'background-position',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_market_pricing_plan_background_attachment',
			'label'       => esc_html__( 'Background Attachment', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => 'scroll',
			'priority'    => 25,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-market' ),
			'choices'     => [
				'scroll' => esc_html__( 'Scroll', 'goldy-market' ),
				'fixed' => esc_html__( 'Fixed', 'goldy-market' ),
			],
			'output' => array(
				array(
					'element'  => '.market_pricing_plan_section',
					'property' => 'background-attachment',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_market_pricing_plan_background_size',
			'label'       => esc_html__( 'Background Size', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => 'cover',
			'priority'    => 30,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-market' ),
			'choices'     => [
				'auto' => esc_html__( 'Auto', 'goldy-market' ),
				'cover' => esc_html__( 'Cover', 'goldy-market' ),
				'contain' => esc_html__( 'Contain', 'goldy-market' ),
			],
			'output' => array(
				array(
					'element'  => '.market_pricing_plan_section',
					'property' => 'background-size',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_bg_color',
			'label'       => __( 'Background Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 35,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.market_pricing_plan_section',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_text_color',
			'label'       => __( 'Title Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#333',
			'priority'    => 40,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing_plan_title h2',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_content_bg_color',
			'label'       => __( 'Contain Background Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#000000',
			'priority'    => 45,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_content_bg_hover_color',
			'label'       => __( 'Contain Background Hover Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#000000',
			'priority'    => 50,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_contain_text_color',
			'label'       => __( 'Contain Text Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 55,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_contain_text_hover_color',
			'label'       => __( 'Contain Text Hover Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 60,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_contain_bg_color',
			'label'       => __( 'Pricing Plan Background Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#6754e9',
			'priority'    => 65,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_first_inner_data',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_contain_bg_hover_color',
			'label'       => __( 'Pricing Plan Background Hover Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#6754e9',
			'priority'    => 70,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover .pp_first_inner_data',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_time_text_color',
			'label'       => __( 'Price Plan Text Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 75,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_first_content',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_time_text_hover_color',
			'label'       => __( 'Price Plan Text Hover Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 80,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover .pp_first_content',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_content_price_color',
			'label'       => __( 'Contain Price Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 85,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_amount',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_content_hover_price_color',
			'label'       => __( 'Contain Price Hover Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 90,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover .pp_amount',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_border_color',
			'label'       => __( 'Pricing Plan Contain Border Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 100,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_first_inner_data',
					'property' => 'border-bottom-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_img_border_color',
			'label'       => __( 'Contain Image Border Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 105,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_second_content img',
					'property' => 'border-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_button_bg_color',
			'label'       => __( 'Button Background Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#6754e9',
			'priority'    => 110,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_button_bg_hover_color',
			'label'       => __( 'Background Hover Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 115,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons::before, .pp_btn.pp_btn .buttons::after',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_button_text_color',
			'label'       => __( 'Button Text Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 120,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_button_texthover_color',
			'label'       => __( 'Button Text Hover Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#6754e9',
			'priority'    => 125,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons:hover',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_market_pricing_plan_button_border_color',
			'label'       => __( 'Button Border Color', 'goldy-market' ),
			'section'     => 'goldy_market_pricing_plan_section',
			'default'     => '#6754e9',
			'priority'    => 130,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'border-color',
					'suffix' => '!important',
				),
			),
		]
	);	
}
?>