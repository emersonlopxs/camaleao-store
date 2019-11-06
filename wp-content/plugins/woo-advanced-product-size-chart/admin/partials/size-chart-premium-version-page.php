<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
require_once plugin_dir_path( __FILE__ ) . 'header/plugin-header.php';
?>
<div id="main-tab">
    <div class="wrapper">
        <div class="tab-dot">
            <div class="wschart-main-table res-cl key-featured">
                <h2>Free vs Pro </h2>
                <table class="table-outer premium-free-table" align="center">
                    <thead>
                        <tr class="blue">
                            <th><?php esc_html_e('KEY FEATURES LIST', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></th>
                            <th><?php esc_html_e('FREE', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></th>
                            <th><?php esc_html_e('PRO', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Create Extra Fees based on combination of multiple conditions', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/check-mark.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Enable and Disable Conditional Fee', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Apply Fee for each quantity', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Schedule Fee between a time period', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Customers Country', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Customers Postcode', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>

                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Shipping Zone', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Product', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Product Category', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Product Tag', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Logged in User', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Logged in Users Role', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Cart Subtotal (Before Discount)', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Cart Subtotal (After Discount)', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Total Prouduct Quantity in Cart', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Total Product Weight in Cart', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Discount Coupon applied', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Shipping Class', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr class="dark">
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Payment Method selected in checkout', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr>
                            <td class="pad"><?php esc_html_e('Conditional Fees based on Shipping Method selected in checkout', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/trash.png'); ?>"></td>
                            <td><img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL  . 'admin/images/check-mark.png'); ?>"></td>
                        </tr>
                        <tr class="pad radius-s">
                            <td class="pad"></td>
                            <td></td>
                            <td class="green red">
                                <a href="<?php echo esc_url("https://store.multidots.com/woocommerce-conditional-product-fees-checkout/"); ?>" target="_blank">
                                    <?php esc_html_e('UPGRADE TO ', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>
                                     <br>
                                    <?php esc_html_e('PREMIUM VERSION', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        require_once plugin_dir_path( __FILE__ ) . 'header/plugin-sidebar.php';
        ?>
    </div>
</div>