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
wp_nonce_field('size_chart_inner_custom_box', 'size_chart_inner_custom_box');

// Use get_post_meta to retrieve an existing value from the database.
$chart_label = get_post_meta($post->ID, 'label', true);
$chart_img = get_post_meta($post->ID, 'primary-chart-image', true);
$chart_position = get_post_meta($post->ID, 'position', true);
$chart_categories = (array) get_post_meta($post->ID, 'chart-categories', true);
$chart_table = get_post_meta($post->ID, 'chart-table', true);
$table_style = get_post_meta($post->ID, 'table-style', true);

// Display the form, using the current value.
?>
<div id="size-chart-meta-fields"> 
    <div id="field">
        <div class="field-title"><h4><?php esc_html_e('Label', $this->plugin_name); ?></h4></div>
        <div class="field-description"><?php esc_html_e('Chart Label', $this->plugin_name); ?></div>
        <div class="field-item"><input type="text" id="label" name="label" value="<?php echo esc_attr($chart_label); ?>" /></div>
    </div>

    <div id="field">
        <div class="field-title"><h4><?php esc_html_e('Primary Chart Image', $this->plugin_name); ?></h4></div>
        <div class="field-description"><?php esc_html_e('Add/Edit primary chart image below', $this->plugin_name); ?></div>
        <div class="field-item"> 
            <input type="hidden" name="primary-chart-image" id="primary-chart-image" value="<?php echo esc_attr($chart_img); ?>" /></div>
        <?php $img = wp_get_attachment_image_src($chart_img, 'thumbnail'); ?>
        <div id="field-image">
            <div class="field_image_box">
                <img src="<?php echo !empty($img[0]) ? esc_url($img[0]) : esc_url(plugins_url('images/chart-img-placeholder.jpg', dirname(__FILE__))); ?>" width="<?php echo esc_attr($img[1]); ?>" height="<?php echo esc_attr($img[2]); ?>" class="<?php echo esc_attr($post->ID); ?>"  id="meta_img" />

            <?php if (!empty($img[0])) { ?>
                <a id="<?php echo esc_attr($post->ID); ?>" class="delete-chart-image">
                    <img src="<?php echo esc_url(plugins_url('images/close-icon.png', dirname(__FILE__))); ?>"/>
                </a>
            <?php } ?>
                            </div>
        </div>
        <div class="field-item"><input type="button" id="meta-image-button" class="button" value="<?php esc_html_e('Upload', $this->plugin_name) ?>" /></div>
    </div>

    <div id="field">
        <div class="field-title"><h4><?php esc_html_e('Chart Categories', $this->plugin_name); ?></h4></div>
        <div class="field-description"><?php esc_html_e('Select categories for chart to appear on.', $this->plugin_name); ?></div>
        <div class="field-item">
            <select name="chart-categories[]" id="chart-categories" multiple="multiple" >
                <?php $get_term = get_terms('product_cat', array()); ?>
                <?php if ($get_term): foreach ($get_term as $get_cat) { ?>
                        <option value="<?php echo esc_attr($get_cat->term_id); ?>" <?php echo in_array($get_cat->term_id, $chart_categories) ? 'selected="selected"' : ''; ?> ><?php esc_html_e($get_cat->name, $this->plugin_name); ?></option>
                    <?php } endif; ?>

            </select>
        </div>
    </div>
    <div style="clear:both"></div>         
    <div id="field">
        <div class="field-title"><h4><?php esc_html_e('Chart Position', $this->plugin_name); ?></h4></div>
        <div class="field-description"><?php esc_html_e('Select if the chart will display as a popup or as a additional tab', $this->plugin_name); ?></div>
        <div class="field-item">
            <select name="position" id="position">
                <option value="tab" <?php echo $chart_position === "tab" ? 'selected="selected"' : ''; ?> ><?php esc_html_e('Additional Tab', $this->plugin_name); ?></option>
                <option value="popup" <?php echo $chart_position === "popup" ? 'selected="selected"' : ''; ?>><?php esc_html_e('Modal Pop Up', $this->plugin_name); ?></option>
            </select>
        </div>
    </div>
    <div id="field">
        <div class="field-title"><h4><?php esc_html_e('Chart Table Style', $this->plugin_name); ?></h4></div>
        <div class="field-description"><?php esc_html_e('Chart Table Styles (Default Style)', $this->plugin_name); ?></div>
        <div class="field-item">
            <select name="table-style" id="table-style">
                <option value="default-style" <?php echo $table_style === "default-style" ? 'selected="selected"' : ''; ?> ><?php esc_html_e('Default Style', $this->plugin_name); ?></option>
                <option value="minimalistic" <?php echo $table_style === "minimalistic" ? 'selected="selected"' : ''; ?> ><?php esc_html_e('Minimalistic', $this->plugin_name); ?></option>
                <option value="classic" <?php echo $table_style === "classic" ? 'selected="selected"' : ''; ?> ><?php esc_html_e('Classic', $this->plugin_name); ?></option>
                <option value="modern" <?php echo $table_style === "modern" ? 'selected="selected"' : ''; ?>><?php esc_html_e('Modern', $this->plugin_name); ?></option>
                <option value="custom-style" disabled="" style="color:red"><?php esc_html_e('Custom Style (Avaible On Pro)', $this->plugin_name); ?></option>
            </select>
        </div>
    </div>
    <div id="field">
        <div class="field-title"><h4><?php esc_html_e('Chart Table', $this->plugin_name); ?></h4></div>
        <div class="field-description"><?php esc_html_e('Add/Edit chart below', $this->plugin_name); ?></div>
        <div class="field-item">
            <textarea  id="chart-table" name="chart-table"><?php echo esc_attr($chart_table); ?></textarea></div>
    </div>
</div>