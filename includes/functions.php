<?php
/**
 * Functions
 *
 * @package     AutomatorWP\Integrations\WooCommerce\Functions
 * @author      AutomatorWP <contact@automatorwp.com>, Ruben Garcia <rubengcdev@gmail.com>
 * @since       1.0.0
 */
// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

/**
 * Helper function to get the address fields
 *
 * @since 1.0.0
 *
 * @return array
 */
function automatorwp_woocommerce_get_address_fields() {

    return array(
        'first_name',
        'last_name',
        'company',
        'address_1',
        'address_2',
        'city',
        'postcode',
        'country',
        'state',
        'phone',
        'email',
    );

}

/**
 * Helper function to get an address field label
 *
 * @since 1.0.0
 *
 * @param string $field
 *
 * @return string
 */
function automatorwp_woocommerce_get_address_field_label( $field ) {

    $labels = array(
        'first_name' => __( 'First name', 'automatorwp-woocommerce-integration' ),
        'last_name' => __( 'Last name', 'automatorwp-woocommerce-integration' ),
        'company' => __( 'Company', 'automatorwp-woocommerce-integration' ),
        'address_1' => __( 'Address line 1', 'automatorwp-woocommerce-integration' ),
        'address_2' => __( 'Address line 2', 'automatorwp-woocommerce-integration' ),
        'city' => __( 'City', 'automatorwp-woocommerce-integration' ),
        'postcode' => __( 'Postcode / ZIP', 'automatorwp-woocommerce-integration' ),
        'country' => __( 'Country / Region', 'automatorwp-woocommerce-integration' ),
        'state' => __( 'State / County', 'automatorwp-woocommerce-integration' ),
        'phone' => __( 'Phone', 'automatorwp-woocommerce-integration' ),
        'email' => __( 'Email', 'automatorwp-woocommerce-integration' ),
    );

    return isset( $labels[$field] ) ? $labels[$field] : '';

}

/**
 * Helper function to get an address field preview
 *
 * @since 1.0.0
 *
 * @param string $field
 *
 * @return string
 */
function automatorwp_woocommerce_get_address_field_preview( $field ) {

    $previews = array(
        'first_name' => __( 'AutomatorWP', 'automatorwp-woocommerce-integration' ),
        'last_name' => __( 'Plugin', 'automatorwp-woocommerce-integration' ),
        'company' => __( 'AutomatorWP Ltd.', 'automatorwp-woocommerce-integration' ),
        'address_1' => __( 'False Street, 123', 'automatorwp-woocommerce-integration' ),
        'address_2' => __( 'First floor, door 2', 'automatorwp-woocommerce-integration' ),
        'city' => __( 'Brooklyn', 'automatorwp-woocommerce-integration' ),
        'postcode' => __( '12345', 'automatorwp-woocommerce-integration' ),
        'country' => __( 'United States', 'automatorwp-woocommerce-integration' ),
        'state' => __( 'New York', 'automatorwp-woocommerce-integration' ),
        'phone' => __( '202-555-1234', 'automatorwp-woocommerce-integration' ),
        'email' => __( 'contact@automatorwp.com', 'automatorwp-woocommerce-integration' ),
    );

    return isset( $previews[$field] ) ? $previews[$field] : '';

}