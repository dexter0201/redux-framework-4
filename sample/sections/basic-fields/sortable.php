<?php
/**
 * Redux Framework sortable config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Sortable', 'your-domain-here' ),
		'id'         => 'basic-sortable',
		'subsection' => true,
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'your-domain-here' ) . '<a href="//docs.redux.io/core/fields/sortable/" target="_blank">docs.redux.io/core/fields/sortable/</a>',
		'fields'     => array(
			array(
				'id'       => 'opt-sortable',
				'type'     => 'sortable',
				'title'    => esc_html__( 'Sortable Text Option', 'your-domain-here' ),
				'subtitle' => esc_html__( 'Define and reorder these however you want.', 'your-domain-here' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'your-domain-here' ),
				'label'    => true,
				'options'  => array(
					'Text One'   => 'Item 1',
					'Text Two'   => 'Item 2',
					'Text Three' => 'Item 3',
				),
			),
			array(
				'id'       => 'opt-check-sortable',
				'type'     => 'sortable',
				'mode'     => 'toggle', // toggle or text.
				'title'    => esc_html__( 'Sortable Toggle Option', 'your-domain-here' ),
				'subtitle' => esc_html__( 'Define and reorder these however you want.', 'your-domain-here' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'your-domain-here' ),
				'options'  => array(
					'cb1' => 'Option One',
					'cb2' => 'Option Two',
					'cb3' => 'Option Three',
				),
				'default'  => array(
					'cb1' => false,
					'cb2' => true,
					'cb3' => false,
				),
			),
		),
	)
);
