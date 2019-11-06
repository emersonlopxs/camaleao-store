<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path( __FILE__ ) . 'header/plugin-header.php';
?>

<div class="wschart-main-table res-cl">
    <h2><?php esc_html_e('Thanks For Installing Advanced Product Size Charts for WooCommerce', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></h2>
    <table class="table-outer">
        <tbody>
            <tr>
                <td class="fr-2">
                    <p class="block gettingstarted"><strong><?php esc_html_e('Getting Started', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?> </strong></p>
                    <p class="block textgetting">
                        <?php esc_html_e('Advanced Product Size Charts for WooCommerce allows you to assign ready-to-use default size chart templates to the product or Create Custom Size Chart for any of your WooCommerce products. You can also clone existing size chart templates and create your own size charts and assign them to a category or specific products.', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>
                    </p>
                    <p class="block textgetting">
                        <?php esc_html_e('You can edit any of the size charts available in the plugin, preview or clone them.', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>

                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/Getting_Started_01.png'); ?>">
                        </span>
                    </p>
                    <p class="block textgetting">
                        <?php esc_html_e('For each size chart, you can add label, chart image, categories for which you want the chart to appear, chart position (modal popup/additional tab on product page) and table style.', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>

                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/Getting_Started_02.png'); ?>">
                        </span>
                    </p>
                    <p class="block textgetting">
                        <?php esc_html_e('For each size chart, you can create your custom chart table (with as many rows and columns you would like to include)', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>

                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/Getting_Started_03.png'); ?>">
                        </span>
                    </p>
                    <p class="block textgetting">
                        <?php esc_html_e('Plugin settings offers the option to change the label of size chart tab and modal popup, which is displayed in product page.)', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>

                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/Getting_Started_04.png'); ?>">
                        </span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
require_once plugin_dir_path( __FILE__ ) . 'header/plugin-sidebar.php';