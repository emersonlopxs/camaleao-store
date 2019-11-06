<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
$image_url = SIZE_CHART_PLUGIN_URL . 'admin/images/right_click.png';
?>
<div class="dotstore_plugin_sidebar">

    <div class="dotstore-important-link">
        <h2><span class="dotstore-important-link-title"><?php esc_html_e('Important link', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></span></h2>
        <div class="video-detail important-link">
            <ul>
                <li>
                    <img src="<?php echo esc_url($image_url); ?>">
                    <a target="_blank" href="#"><?php esc_html_e('Plugin documentation', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                </li> 
                <li>
                    <img src="<?php echo esc_url($image_url); ?>">
                    <a target="_blank" href="<?php echo esc_url("https://store.multidots.com/dotstore-support-panel/"); ?>"><?php esc_html_e('Support platform', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                </li>
                <li>
                    <img src="<?php echo esc_url($image_url); ?>">
                    <a target="_blank" href="<?php echo esc_url("https://store.multidots.com/suggest-a-feature/"); ?>"><?php esc_html_e('Suggest A Feature', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                </li>
                <li>
                    <img src="<?php echo esc_url($image_url); ?>">
                    <a  target="_blank" href="<?php echo esc_url("https://store.multidots.com/woocommerce-advanced-product-size-charts"); ?>"><?php esc_html_e('Changelog', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- html for popular plugin !-->
    <div class="dotstore-important-link">
        <h2><span class="dotstore-important-link-title"><?php esc_html_e('OUR POPULAR PLUGIN', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></span></h2>
        <div class="video-detail important-link">
            <ul>
                <li>
                    <img class="sidebar_plugin_icone" src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/Advance_Extra_Cost_Plugin_for_WooCommerce_sidebar.png'); ?>">
                    <a target="_blank" href="<?php echo esc_url("https://store.multidots.com/go/flatrate-pro-new-interface--extra-cost"); ?>"><?php esc_html_e('Conditional Product Fees For WooCommerce Checkout', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                </li> 
                <li>
                    <img class="sidebar_plugin_icone" src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/Woocommerce_Blocker_Lite_Prevent_fake_orders_and_Blacklist_fraud_customers.png'); ?>">
                    <a  target="_blank" href="<?php echo esc_url("https://store.multidots.com/go/flatrate-pro-new-interface-woo-blocker"); ?>"><?php esc_html_e('Blocker – Prevent Fake Orders And Blacklist Fraud Customers for WooCommerce', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                </li>
                <li>
                    <img class="sidebar_plugin_icone" src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/advanced_product_Size_Chart_WooCommerce_icone.png'); ?>">
                    <a target="_blank" href="<?php echo esc_url("https://store.multidots.com/go/flatrate-pro-new-interface-size-chart"); ?>"><?php esc_html_e('Advanced Product Size Charts for WooCommerce', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                </li>
                <li>
                    <img class="sidebar_plugin_icone" src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/WooCommerce_Enhanced_Ecommerce_Analytics_Integration_with_Conversion_Tracking.png'); ?>">
                    <a  target="_blank" href="<?php echo esc_url("https://store.multidots.com/go/flatrate-pro-new-interface-ecommerce-tracking"); ?>"><?php esc_html_e('Enhanced Ecommerce Google Analytics for WooCommerce', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                </li>
                <li>
                    <img  class="sidebar_plugin_icone" src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/AMM.png'); ?>">
                    <a target="_blank" href="<?php echo esc_url("https://store.multidots.com/advance-menu-manager-wordpress/"); ?>"><?php esc_html_e('Advanced Menu Manager For WordPress', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                </li>
                </br>
            </ul>
        </div>
        <div class="view-button">
            <a class="view_button_dotstore" target="_blank" href="<?php echo esc_url("https://store.multidots.com/go/flatrate-pro-new-interface-viewall-plugin-button"); ?>"><?php esc_html_e('VIEW ALL', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
        </div>
    </div>
</div>	
</div>
</body>
</html>
