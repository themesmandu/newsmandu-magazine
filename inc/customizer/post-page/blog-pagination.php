<?php
/**
 * Newsmandu functions and definitions for blog page pagination.
 *
 * @package Newsmandu
 */

	$wp_customize->add_setting(
		'blog_pagination_mode',
		array(
			'default'           => 'standard',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'newsmandu_sanitize_blog_pagination_mode',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'blog_pagination_mode',
			array(
				'label'    => __( 'Posts page navigation', 'newsmandu-magizine' ),
				'section'  => 'blog_options',
				'settings' => 'blog_pagination_mode',
				'type'     => 'select',
				'choices'  => array(
					'standard' => __( 'Standard', 'newsmandu-magizine' ),
					'numeric'  => __( 'Numeric', 'newsmandu-magizine' ),
				),
				'priority' => '20',
			)
		)
	);
