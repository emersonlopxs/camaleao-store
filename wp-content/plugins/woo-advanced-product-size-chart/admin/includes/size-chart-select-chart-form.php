<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Provide a admin area form view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @since      1.0.0
 *
 * @package    size-chart-for-woocommerce
 * @subpackage size-chart-for-woocommerce/admin/includes
 */
// Add an nonce field so we can check for it later.
wp_nonce_field('size_chart_select_custom_box', 'size_chart_select_custom_box');

// Use get_post_meta to retrieve an existing value of chart 1 from the database.
$chart_id = get_post_meta($post->ID, 'prod-chart', true);

$args = array(
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'size-chart',
    'post_status' => 'publish',
    'suppress_filters' => true
);
$posts_array = get_posts($args);
?>
<div id="size-chart-meta-fields"> 
    <div id="field">
        <div class="field-item">
            <select name="prod-chart" id="prod-chart">
                <option value=""><?php esc_html_e('Select Chart', $this->plugin_name); ?></option>
                <?php foreach ($posts_array as $get_posts) { ?>
                    <option value="<?php echo esc_attr($get_posts->ID); ?>" <?php echo esc_attr($get_posts->ID) == esc_attr($chart_id) ? 'selected="selected"' : ''; ?> ><?php esc_html_e($get_posts->post_title, $this->plugin_name); ?></option>
                <?php } ?>
            </select>
        </div>
    </div> 
</div>