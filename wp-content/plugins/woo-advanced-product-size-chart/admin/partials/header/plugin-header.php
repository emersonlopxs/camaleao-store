<?php
	// Exit if accessed directly
	if (!defined('ABSPATH')) {
		exit;
	}
	$plugin_name = SIZE_CHART_PLUGIN_NAME;
	$plugin_version = SIZE_CHART_PLUGIN_VERSION;
?>
<div id="dotsstoremain">
    <div class="all-pad">
        <header class="dots-header">
            <div class="dots-logo-main">
                <img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . '/admin/images/Advanced-Product-Size-Charts.png'); ?>">
            </div>
            <div class="dots-header-right">
                <div class="logo-detail">
                    <strong><?php esc_html_e($plugin_name, SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?> </strong>
                    <span><?php esc_html_e('Free Version', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?> <?php echo esc_html($plugin_version); ?> </span>
                </div>
                <div class="button-dots">
                    <span class="support_dotstore_image"><a target="_blank"
                                                            href="<?php echo esc_url("https://store.multidots.com/woocommerce-advanced-product-size-charts"); ?>">
                            <img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . 'admin/images/upgrade_new.png'); ?>"></a>
                    </span>
                    <span class="support_dotstore_image"><a target="_blank"
                                                            href="<?php echo esc_url("https://store.multidots.com/dotstore-support-panel/"); ?>">
                            <img src="<?php echo esc_url(SIZE_CHART_PLUGIN_URL . '/admin/images/support_new.png'); ?>"></a>
                    </span>

                </div>
            </div>
			
			<?php
				global $pagenow;
				$size_charts_lists = '';
				$size_charts_add_menu_enable = '';
				$size_chart_settings_page = '';
				$get_started_about_plugin_setting_menu_enable = '';
				$dots_about_plugin_introduction = '';
				$dotpremium_get_started_menu_enable = '';
				$about_plugin_setting_menu_enable = '';
				$size_charts_list = '';
				$premium_version = '';

                $get_page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
                $get_post_type = filter_input(INPUT_GET, 'post_type', FILTER_SANITIZE_STRING);

				if ((isset($get_post_type) && $get_post_type === 'size-chart') && ($pagenow === 'edit.php' || $pagenow === 'post.php') && empty($get_page)) {
					$size_charts_list = "active";
				}
				if ((isset($get_post_type) && $get_post_type === 'size-chart') && ('post-new.php' === $pagenow)) {
					$size_charts_add_menu_enable = "active";
				}
				if (!empty($get_page) && $get_page === 'size_chart_setting_page' && $get_post_type === 'size-chart') {
					$size_chart_settings_page = "active";
				}
				if (isset($get_page) && !empty($get_page) && ($get_page === 'size_chart_get_started_page' || $get_page === 'size-chart-information')) {
					$about_plugin_setting_menu_enable = "active";
				}
				if (!empty($get_page) && $get_page === 'size_chart_get_started_page') {
					$dotpremium_get_started_menu_enable = "active";
				}
				if (!empty($get_page) && $get_page === 'size-chart-information') {
					$dots_about_plugin_introduction = "active";
				}
				$siteTabPath = 'wp-admin/edit.php?post_type=size-chart&tab=';
			?>
            <div class="dots-menu-main">
                <nav>
                    <ul>
                        <li>
                            <a class="dotstore_plugin <?php echo esc_attr($size_charts_list); ?>"
                               href="<?php echo esc_url(site_url('wp-admin/edit.php?post_type=size-chart')); ?>"><?php esc_html_e('Size Charts', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                        </li>
                        <li>
                            <a class="dotstore_plugin <?php echo esc_attr($size_charts_add_menu_enable); ?>"
                               href="<?php echo esc_url(site_url('wp-admin/post-new.php?post_type=size-chart')); ?>"><?php esc_html_e('Add New', SIZE_CHART_PLUGIN_TEXT_DOMAIN); ?></a>
                        </li>
                        <li>
                            <a class="dotstore_plugin <?php echo esc_attr($size_chart_settings_page); ?>"
                               href="<?php echo esc_url(site_url('/wp-admin/edit.php?post_type=size-chart&page=size_chart_setting_page')); ?>"><?php esc_html_e('Settings', SIZE_CHART_PLUGIN_TEXT_DOMAIN) ?></a>
                        </li>
                        <li>
                            <a class="dotstore_plugin <?php echo esc_attr($about_plugin_setting_menu_enable); ?>"
                               href="<?php echo esc_url(site_url('/wp-admin/admin.php?page=size_chart_get_started_page')); ?>"><?php esc_html_e('About', SIZE_CHART_PLUGIN_TEXT_DOMAIN) ?>
                                Plugin</a>
                            <ul class="sub-menu">
                                <li><a class="dotstore_plugin <?php echo esc_attr($dotpremium_get_started_menu_enable); ?>"
                                       href="<?php echo esc_url(site_url('/wp-admin/admin.php?page=size_chart_get_started_page')); ?>"><?php esc_html_e('Getting Started', SIZE_CHART_PLUGIN_TEXT_DOMAIN) ?></a></li>
                                <li><a class="dotstore_plugin <?php echo esc_attr($dots_about_plugin_introduction); ?>"
                                       href="<?php echo esc_url(site_url('/wp-admin/admin.php?page=size-chart-information')); ?>"><?php esc_html_e('Quick Info', SIZE_CHART_PLUGIN_TEXT_DOMAIN) ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dotstore_plugin " href="#"><?php esc_html_e('Dotstore', SIZE_CHART_PLUGIN_TEXT_DOMAIN) ?></a>
                            <ul class="sub-menu">

                                <li><a target="_blank" href="<?php echo esc_url("https://store.multidots.com/woocommerce-plugins/"); ?>"><?php esc_html_e('WooCommerce Plugins', SIZE_CHART_PLUGIN_TEXT_DOMAIN) ?></a></li>
                                <li><a target="_blank" href="<?php echo esc_url("https://store.multidots.com/wordpress-plugins/"); ?>"><?php esc_html_e('Wordpress Plugins', SIZE_CHART_PLUGIN_TEXT_DOMAIN) ?></a></li>
                                <br>
                                <li><a target="_blank" href="<?php echo esc_url("https://store.multidots.com/dotstore-support-panel/"); ?>"><?php esc_html_e('Contact Support', SIZE_CHART_PLUGIN_TEXT_DOMAIN) ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>