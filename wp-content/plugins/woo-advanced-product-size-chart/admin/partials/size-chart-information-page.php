<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once plugin_dir_path( __FILE__ ) . 'header/plugin-header.php';
?>

<div class="wschart-main-table res-cl">
    <h2><?php esc_html_e('Quick info', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></h2>
    <table class="table-outer">
        <tbody>
            <tr>
                <td class="fr-1"><?php esc_html_e('Product Type', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                <td class="fr-2"><?php esc_html_e('WooCommerce Plugin', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('Product Name', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                <td class="fr-2"><?php esc_html_e($plugin_name, SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('Installed Version', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                <td class="fr-2"><?php esc_html_e('Free Version', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?> <?php echo esc_html($plugin_version); ?></td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('License & Terms of use', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                <td class="fr-2">
                    <a target="_blank"  href="<?php echo esc_url(''); ?>">
                    <?php esc_html_e('Click here', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>
                    </a>
                    <?php esc_html_e('to view license and terms of use.', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>
                </td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('Help & Support', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                <td class="fr-2 wschart-information">
                    <ul>
                        <li><a target="_blank" href="<?php echo esc_url(site_url('wp-admin/admin.php?page=size_chart_get_started_page')); ?>"><?php esc_html_e('Quick Start', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a></li>
                        <li><a target="_blank" href="#"><?php esc_html_e('Guide Documentation', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a></li>
                        <li>
                            <a target="_blank" href="<?php echo esc_url("http://t.signauxdeux.com/e1t/c/5/f18dQhb0SmZ58dDMPbW2n0x6l2B9nMJW7sM9dn7dK_MMdBzM2-04?t=https%3A%2F%2Fstore.multidots.com%2Fdotstore-support-panel%2F&si=4973901068632064&pi=61378fda-f5e5-4125-c521-28a4597b13d6"); ?>">
                                <?php esc_html_e('Support Forum', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>
                            </a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('Localization', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
                <td class="fr-2"><?php esc_html_e('English', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?>, <?php esc_html_e('Spanish', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php
require_once plugin_dir_path( __FILE__ ) . 'header/plugin-sidebar.php';