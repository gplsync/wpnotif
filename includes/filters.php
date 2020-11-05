<?php
defined('ABSPATH') || exit;


add_filter('wpnotif_filter_message', 'wpnotif_add_tracking_details', 10, 2);


function wpnotif_add_tracking_details($msg, $order)
{

    $tracking_link_string = '';

    if (class_exists('YITH_Tracking_Data')) {
        $values = array();
        $yith_placeholders = apply_filters('ywsn_sms_placeholders', array(), $order);
        /* foreach ($yith_placeholders as $key => $value) {
             $values['{'.$key.'}'] = $value;
         }
         $msg = strtr($msg, $values);*/

        if (isset($yith_placeholders['{tracking_url}'])) {
            $tracking_link_string = $yith_placeholders['{tracking_url}'];
        }

    } else {

        try {
            $tracking_links = wpnotif_get_wc_tracking_links($order);
        } catch (Exception $e) {
            $tracking_links = array();
        }
        if (!empty($tracking_links)) {
            $tracking_link_string = implode(',', $tracking_links);
        }
    }

    $msg = str_replace('{{wc-tracking-link}}', $tracking_link_string, $msg);

    return $msg;
}

function wpnotif_get_wc_tracking_links($order)
{
    $tracking_links = array();

    if (class_exists('WC_Shipment_Tracking_Actions')) {
        $st = WC_Shipment_Tracking_Actions::get_instance();

        $order_number = $order->get_order_number();

        $tracking_items = $st->get_tracking_items($order_number);
        if (!empty($tracking_items)) {
            $tracking_links = array();
            foreach ($tracking_items as $tracking_item) {
                $formated_item = $st->get_formatted_tracking_item($order_number, $tracking_item);
                $tracking_links[] = htmlspecialchars_decode($formated_item['formatted_tracking_link']);
                break;
            }

        }
    } else if (class_exists('WC_Advanced_Shipment_Tracking_Actions')) {
        if ( function_exists( 'ast_get_tracking_items' ) ) {
            $order_id = $order->get_id();
            $tracking_items = ast_get_tracking_items($order_id);
            foreach($tracking_items as $tracking_item){
                $tracking_number = $tracking_item['tracking_number'];
                $tracking_provider = $tracking_item['formatted_tracking_provider'];
                $tracking_url = $tracking_item['formatted_tracking_link'];

                $tracking_links[] = htmlspecialchars_decode($tracking_url);
            }
        }
    } else {
        return array();
    }

    return $tracking_links;
}