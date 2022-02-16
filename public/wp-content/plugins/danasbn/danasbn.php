<?php
/**
 * Plugin Name: Danasbn
 */
use Danasbn\Plugin;
 require __DIR__ . '/static-vendor/autoload.php';

 $plugin = new Plugin();
// WARNING we must write __FILE__ and not __DIR__ , __FILE__ handle the plugin
register_activation_hook(__FILE__, [$plugin, 'activate']);
register_deactivation_hook(__FILE__, [$plugin, 'deactivate']);

function ag_filter_post_json($response, $post, $context)
{
    $tags = wp_get_post_tags($post->ID);
    $response->data['tag_names'] = [];

    foreach ($tags as $tag) {
        $response->data['tag_names'][] = $tag->name;
    }

    return $response;
}
// Add custom fields to json response
function slug_register_featured()
{
    register_rest_field(
        'post',
        'site_url',
        array(
            'get_callback'    => 'get_meta_to_response',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
add_action('rest_api_init', 'slug_register_featured');

function get_meta_to_response($object, $field_name)
{
    return get_post_meta($object['id'], $field_name, true);
}

add_filter('rest_prepare_post', 'ag_filter_post_json', 10, 3);
