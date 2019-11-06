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
// Use get_post_meta to retrieve an existing value of chart 1 from the database.
$get_cat_id = get_post_meta($post->ID, 'chart-categories', true);
?>
<div id="size-chart-meta-fields"> 
    <div id="assign-category">

        <div class="assign-item">
            <?php $get_term = get_terms('product_cat', array()); ?>
            <ul>
                <?php
                if (!empty($get_cat_id)) {
                    if (!empty($get_term)) {
                        foreach ($get_term as $get_cat) {
                            if (in_array($get_cat->term_id, $get_cat_id)) {
                                ?>
                                <li><?php esc_html_e($get_cat->name, $this->plugin_name); ?></li>

                            <?php
                            }
                        }
                    }
                } else {
                    esc_html_e('No Category Assign', $this->plugin_name);
                }
                ?>
            </ul>   
        </div>
    </div> 
</div>