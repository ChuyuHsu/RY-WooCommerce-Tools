<?php
defined('RY_WT_VERSION') OR exit('No direct script access allowed');

return array(
	'enabled' => array(
		'title' => __('Enable/Disable', 'woocommerce'),
		'label' => sprintf(__('Enable %s', RY_WT::$textdomain), $this->method_title),
		'type' => 'checkbox',
		'default' => 'no',
	),
	'title' => array(
		'title' => __('Title', 'woocommerce'),
		'type' => 'text',
		'default' => $this->method_title,
		'description' => __('This controls the title which the user sees during checkout.', 'woocommerce'),
		'desc_tip' => true,
	),
	'description' => array(
		'title' => __( 'Description', 'woocommerce' ),
		'type' => 'text',
		'default' => $this->order_button_text,
		'desc_tip' => true,
		'description' => __('This controls the description which the user sees during checkout.', 'woocommerce'),
	),
	'min_amount' => array(
		'title' => __('Minimum order amount', RY_WT::$textdomain),
		'type' => 'number',
		'default' => 0,
		'placeholder' => 0,
		'description' => __('0 to disable minimum amount limit.', RY_WT::$textdomain),
		'custom_attributes' => array(
			'min' => 0,
			'max' => 20000,
			'step' => 1
		)
	),
	'max_amount' => array(
		'title' => __('Maximum order amount', RY_WT::$textdomain),
		'type' => 'number',
		'default' => 0,
		'placeholder' => 0,
		'description' => __('0 to disable maximum amount limit.', RY_WT::$textdomain),
		'custom_attributes' => array(
			'min' => 0,
			'max' => 20000,
			'step' => 1
		)
	),
	'expire_date' => array(
		'title' => __('Payment deadline', RY_WT::$textdomain),
		'type' => 'number',
		'default' => 7,
		'placeholder' => 7,
		'description' => __('Barcode allowable payment deadline from 1 day to 30 days.', RY_WT::$textdomain),
		'custom_attributes' => array(
			'min' => 1,
			'max' => 30,
			'step' => 1
		)
	)
);