<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.multidots.com/
 * @since      1.0.0
 *
 * @package    woo_advanced_product_size_chart
 * @subpackage woo_advanced_product_size_chart/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    woo_advanced_product_size_chart
 * @subpackage woo_advanced_product_size_chart/admin
 * @author     Multidots <inquiry@multidots.in>
 */
class Size_Chart_For_Woocommerce_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name The name of this plugin.
     * @param      string $version The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Size_Chart_For_Woocommerce_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Size_Chart_For_Woocommerce_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_style('wp-jquery-ui-dialog');
        wp_enqueue_style($this->plugin_name . "-jquery-editable-style", plugin_dir_url(__FILE__) . 'css/jquery.edittable.css', array(), $this->version, 'all');
        wp_enqueue_style($this->plugin_name . "-select2", plugin_dir_url(__FILE__) . 'css/select2.min.css', array(), $this->version, 'all');
        wp_enqueue_style($this->plugin_name . "main-style", plugin_dir_url(__FILE__) . 'css/style.css', array(), $this->version, 'all');
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/size-chart-for-woocommerce-admin.css', array(), $this->version, 'all');
        wp_enqueue_style($this->plugin_name . "-jquery-modal", plugin_dir_url(__FILE__) . 'css/remodal.css', array(), $this->version, 'all');
        wp_enqueue_style($this->plugin_name . "-jquery-modal-default-theme", plugin_dir_url(__FILE__) . 'css/remodal-default-theme.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Size_Chart_For_Woocommerce_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Size_Chart_For_Woocommerce_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_script('jquery-ui-dialog');
        wp_enqueue_script($this->plugin_name . "-jquery-editable-js", plugin_dir_url(__FILE__) . 'js/jquery.edittable.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->plugin_name . "-jquery-select2", plugin_dir_url(__FILE__) . 'js/select2.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/size-chart-for-woocommerce-admin.js', array('jquery', 'wp-color-picker'), $this->version, false);
        wp_localize_script($this->plugin_name, 'size_chart', array(
            'ajaxurl'                           => admin_url( 'admin-ajax.php' ),
            'ajax_icon'                         => esc_url( plugin_dir_url( __FILE__ ) . '/images/ajax-loader.gif' )
        ));
        wp_enqueue_script($this->plugin_name . "-jquery-modal", plugin_dir_url(__FILE__) . 'js/remodal.js', array('jquery'), $this->version, false);
    }

    /**
     * Register a new post type called chart
     *
     * @since    1.0.0
     */
    public function size_chart_register_post_type_chart() {
        $labels = array(
            'name' => esc_html__('Size Charts', $this->plugin_name),
            'singular_name' => esc_html__('Size Charts', $this->plugin_name),
            'menu_name' => esc_html__('Size Charts', $this->plugin_name),
            'name_admin_bar' => esc_html__('Size Charts', $this->plugin_name),
            'add_new' => esc_html__('Add New', $this->plugin_name),
            'add_new_item' => esc_html__('Add New Size Charts', $this->plugin_name),
            'new_item' => esc_html__('New Size Charts', $this->plugin_name),
            'edit_item' => esc_html__('Edit Size Charts', $this->plugin_name),
            'view_item' => esc_html__('View Size Charts', $this->plugin_name),
            'all_items' => esc_html__('All Size Charts', $this->plugin_name),
            'search_items' => esc_html__('Search Size Charts', $this->plugin_name),
            'parent_item_colon' => esc_html__('Parent Size Charts:', $this->plugin_name),
            'not_found' => esc_html__('No chart found.', $this->plugin_name),
            'not_found_in_trash' => esc_html__('No charts found in Trash.', $this->plugin_name)
        );
        $args = array(
            'labels' => $labels,
            'description' => esc_html__('Description.', $this->plugin_name),
            'public' => true,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => FALSE,
            'query_var' => true,
            'rewrite' => false,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon' => plugin_dir_url(__FILE__) . 'images/menu-icon.png',
            'supports' => array('title', 'editor')
        );
        register_post_type('size-chart', $args);
    }

    /**
     * Adds the meta box container.
     *
     * @since    1.0.0
     */
    public function size_chart_add_meta_box($post_type) {

        $post_types_chart = array('size-chart', 'product');   //limit meta box to chart post type
        if (in_array($post_type, $post_types_chart)) {

            // chart setting meta box
            add_meta_box('chart-settings', esc_html__('Size Chart Settings', $this->plugin_name), array($this, 'size_chart_meta_box_content'), 'size-chart', 'advanced', 'high'
            );
            //meta box to select chart in product page	
            add_meta_box('additional-chart', esc_html__('Select Size Chart', $this->plugin_name), array($this, 'size_chart_select_chart'), 'product', 'side', 'default'
            );
            //meta box to List of assign category	
            add_meta_box('chart-assign-category', esc_html__('Assign Category', $this->plugin_name), array($this, 'size_chart_assign_category'), 'size-chart', 'side', 'default'
            );
            //meta box to List of assign Product	
            add_meta_box('chart-assign-product', esc_html__('Assign Product', $this->plugin_name), array($this, 'size_chart_assign_product'), 'size-chart', 'side', 'default'
            );
        }
    }

    /**
     * Meta Box content.
     *
     * @param WP_Post $post The post object.
     */
    public function size_chart_meta_box_content($post) {

        require_once plugin_dir_path( __FILE__ ) . 'includes/size-chart-meta-box-content-form.php';
    }

    /**
     *  Meta Box content to select chart on product page.
     *
     * @param WP_Post $post The post object.
     */
    public function size_chart_select_chart($post) {

        require_once plugin_dir_path( __FILE__ ) . 'includes/size-chart-select-chart-form.php';
    }

    /**
     *  Meta Box content to assign category list.
     *
     * @param WP_Post $post The post object.
     */
    public function size_chart_assign_category($post) {

        require_once plugin_dir_path( __FILE__ ) . 'includes/size-chart-assign-category.php';
    }

    /**
     *  Meta Box content to assign category list.
     *
     * @param WP_Post $post The post object.
     */
    public function size_chart_assign_product($post) {

        require_once plugin_dir_path( __FILE__ ) . 'includes/size-chart-assign-product.php';
    }

    /**
     * Save the meta when the chart post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function size_chart_content_meta_save($post_id) {
        $get_size_chart_inner_custom_box = filter_input(INPUT_POST, 'size_chart_inner_custom_box', FILTER_SANITIZE_STRING);
        $get_post_type = filter_input(INPUT_POST, 'post_type', FILTER_SANITIZE_STRING);

        // Check if our nonce is set.
        if (!isset($get_size_chart_inner_custom_box))
            return $post_id;

        $nonce = $get_size_chart_inner_custom_box;

        // Verify that the nonce is valid.
        if (!wp_verify_nonce($nonce, 'size_chart_inner_custom_box'))
            return $post_id;

        // If this is an autosave, our form has not been submitted,
        // so we don't want to do anything.
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;

        // Check the user's permissions.
        if ('size-chart' === $get_post_type) {

            if (!current_user_can('edit_page', $post_id))
                return $post_id;
        } else {

            if (!current_user_can('edit_post', $post_id))
                return $post_id;
        }

        $get_label = filter_input(INPUT_POST, 'label', FILTER_SANITIZE_STRING);
        $get_primary_chart_image = filter_input(INPUT_POST, 'primary-chart-image', FILTER_SANITIZE_STRING);
        $get_position = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_STRING);
        $get_chart_categories = filter_input(INPUT_POST, 'chart-categories', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
        $get_chart_table = sanitize_text_field($_POST['chart-table']);
        $get_table_style = filter_input(INPUT_POST, 'table-style', FILTER_SANITIZE_STRING);
        // Sanitize the user input.
        $chart_label = sanitize_text_field($get_label);
        $chart_img = sanitize_text_field($get_primary_chart_image);
        $chart_position = sanitize_text_field($get_position);
        $chart_categories = (isset($get_chart_categories)) ? $get_chart_categories : '';
        $chart_table = $get_chart_table;
        $table_style = sanitize_text_field($get_table_style);
        /* save the data  */
        update_post_meta($post_id, 'label', $chart_label);
        update_post_meta($post_id, 'primary-chart-image', $chart_img);
        update_post_meta($post_id, 'position', $chart_position);
        update_post_meta($post_id, 'chart-categories', $chart_categories);
        update_post_meta($post_id, 'chart-table', $chart_table);
        update_post_meta($post_id, 'table-style', $table_style);
    }

    /**
     * Save the meta when the product is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function product_select_size_chart_save($post_id) {
        $get_size_chart_select_custom_box = filter_input(INPUT_POST, 'size_chart_select_custom_box', FILTER_SANITIZE_STRING);
        $get_post_type = filter_input(INPUT_POST, 'post_type', FILTER_SANITIZE_STRING);
        $get_prod_chart = filter_input(INPUT_POST, 'prod-chart', FILTER_SANITIZE_STRING);

        // Check if our nonce is set.
        if (!isset($get_size_chart_select_custom_box))
            return $post_id;

        $nonce = $get_size_chart_select_custom_box;

        // Verify that the nonce is valid.
        if (!wp_verify_nonce($nonce, 'size_chart_select_custom_box'))
            return $post_id;

        // If this is an autosave, our form has not been submitted,
        // so we don't want to do anything.
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;

        // Check the user's permissions.
        if ('product' === $get_post_type) {

            if (!current_user_can('edit_page', $post_id))
                return $post_id;
        } else {

            if (!current_user_can('edit_post', $post_id))
                return $post_id;
        }

        /* save the data  */

        if (isset($get_prod_chart)) {
            $chart_id = sanitize_text_field($get_prod_chart);
            update_post_meta($post_id, 'prod-chart', $chart_id);
            return;
        }
    }

    /**
     * Loads the image iframe
     */
    public function size_chart_meta_image_enqueue() {
        global $typenow;
        if ($typenow == 'size-chart') {
            wp_enqueue_media();

            // Registers and enqueues the required javascript.
            wp_register_script('meta-box-image', plugin_dir_url(__FILE__) . '/js/images-frame.js', array('jquery'));
            wp_localize_script('meta-box-image', 'meta_image', array(
                'title' => esc_html__('Upload an Image', $this->plugin_name),
                'button' => esc_html__('Use this image', $this->plugin_name),
                    )
            );
            wp_enqueue_script('meta-box-image');
        }
    }

    /**
     * Register admin menu for the plugin
     * @since      1.0.0
     */
    public function size_chart_menu() {

        global $GLOBALS;
        if (empty($GLOBALS['admin_page_hooks']['dots_store'])) {
            add_menu_page(
                    'DotStore Plugins', 'DotStore Plugins', 'NULL', 'dots_store', array($this, 'size_chart_get_started_page'), plugin_dir_url(__FILE__) . 'images/menu-icon.png', 25
            );
        }
        add_submenu_page('dots_store', 'Advanced Product Size Charts for WooCommerce', 'Advanced Product Size Charts for WooCommerce', 'manage_options', 'size_chart_get_started_page', array($this, 'size_chart_get_started_page'));
        add_submenu_page('dots_store', 'Introduction', 'Introduction', 'manage_options', 'size-chart-information', array($this, 'size_chart_information_page'));
        add_submenu_page('dots_store', 'Get Started', 'Get Started', 'manage_options', 'size-chart-get-started', array($this, 'size_chart_get_started_page'));
        add_submenu_page('dots_store', 'Premium Version', 'Premium Version', 'manage_options', 'size-chart-premium', array($this, 'premium_version_size_chart_page'));
        $settings = add_submenu_page('edit.php?post_type=size-chart', 'Settings', esc_html__('Settings', $this->plugin_name), 'manage_options', 'size_chart_setting_page', array($this, 'size_chart_settings_form'));
        add_action("load-{$settings}", array($this, 'size_chart_settings_page'));
        add_action("load-{$settings}", array($this, 'size_chart_settings_page'));
    }

    public function size_chart_remove_admin_submenus() {
        remove_submenu_page('dots_store', 'size-chart-information');
        remove_submenu_page('dots_store', 'size-chart-premium');
        remove_submenu_page('dots_store', 'size-chart-get-started');
    }

    public function size_chart_get_started_page() {
        require_once plugin_dir_path( __FILE__ ) . 'partials/size-chart-get-started-page.php';
    }

    public function premium_version_size_chart_page() {
        require_once plugin_dir_path( __FILE__ ) . 'partials/size-chart-premium-version-page.php';
    }

    public function size_chart_information_page() {
        require_once plugin_dir_path( __FILE__ ) . 'partials/size-chart-information-page.php';
    }

    public function remove_custom_post_size_chart_admin_menu() {
        remove_menu_page('edit.php?post_type=size-chart');
    }

    public function size_chart_custom_plugin_header() {
        $get_post_type = filter_input(INPUT_GET, 'post_type', FILTER_SANITIZE_STRING);

        if ((isset($get_post_type) && $get_post_type === 'size-chart')) :
            include_once plugin_dir_path( __FILE__ ) . 'partials/header/plugin-header.php';
        endif;
    }

    public function size_chart_menu_active() {
        $screen = get_current_screen();
        if (!empty($screen) && ($screen->id == 'admin_page_size_chart_setting_page' || $screen->id == 'dotstore-plugins_page_size-chart-premium' || $screen->id == 'dotstore-plugins_page_size-chart-information')) {
            ?>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $('#toplevel_page_dots_store').addClass('wp-has-current-submenu wp-menu-open menu-top menu-top-first').removeClass('wp-not-current-submenu');
                    $('#toplevel_page_dots_store > a').addClass('wp-has-current-submenu current').removeClass('wp-not-current-submenu');
                    $('li#menu-posts').removeClass('wp-not-current-submenu wp-has-current-submenu wp-menu-open current');
                    $('li.mine').css('display', 'none');
                    $('li.publish').css('display', 'none');
                    $('a[href="admin.php?page=size_chart_get_started_page"]').parent().addClass('current');

                });
            </script>
            <style type="text/css">.page-title-action{ display:none; }</style>
            <?php
        }
        if (!empty($screen) && ($screen->id == 'edit-size-chart' || $screen->id == 'size-chart')) {
            ?>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $('#toplevel_page_dots_store').addClass('wp-has-current-submenu wp-menu-open menu-top menu-top-first').removeClass('wp-not-current-submenu');
                    $('#toplevel_page_dots_store > a').addClass('wp-has-current-submenu current').removeClass('wp-not-current-submenu');
                    $('li#menu-posts').removeClass('wp-not-current-submenu wp-has-current-submenu wp-menu-open current');
                    $('li.mine').css('display', 'none');
                    $('li.publish').css('display', 'none');
                    $('a[href="admin.php?page=size_chart_get_started_page"]').parent().addClass('current');
                });
            </script>
            <style type="text/css">.page-title-action{ display:none; }</style>
            <?php
        }
    }

    /**
     *  size chart settings form
     * @since      1.0.0
     */
    public function size_chart_settings_form() {

        include_once plugin_dir_path( __FILE__ ) . 'includes/size-chart-settings-form.php';
    }

    /**
     *  size chart settings and redirection
     * @since      1.0.0
     */
    public function size_chart_settings_page() {
        $get_page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
        $get_size_chart_submit = filter_input(INPUT_POST, 'size_chart_submit', FILTER_SANITIZE_STRING);

        if (isset($get_size_chart_submit) && isset($get_page) == 'size_chart_setting_page') {
            $get_size_chart_button_position = filter_input(INPUT_POST, 'size-chart-button-position', FILTER_SANITIZE_STRING);
            $get_size_chart_title_color = filter_input(INPUT_POST, 'size-chart-title-color', FILTER_SANITIZE_STRING);
            $get_size_chart_table_head_color = filter_input(INPUT_POST, 'size-chart-table-head-color', FILTER_SANITIZE_STRING);
            $get_size_chart_table_head_font_color = filter_input(INPUT_POST, 'size-chart-table-head-font-color', FILTER_SANITIZE_STRING);
            $get_size_chart_tab_label = filter_input(INPUT_POST, 'size-chart-tab-label', FILTER_SANITIZE_STRING);
            $get_size_chart_popup_label = filter_input(INPUT_POST, 'size-chart-popup-label', FILTER_SANITIZE_STRING);
            $get_size_chart_button_class = filter_input(INPUT_POST, 'size-chart-button-class', FILTER_SANITIZE_STRING);
            $get_size_table_row_even_color = filter_input(INPUT_POST, 'size-chart-table-row-even-color', FILTER_SANITIZE_STRING);
            $get_size_chart_table_row_odd_color = filter_input(INPUT_POST, 'size-chart-table-row-odd-color', FILTER_SANITIZE_STRING);

            $this->size_chart_settings = array();

            $this->size_chart_settings['size-chart-button-position'] = isset($get_size_chart_button_position) ? $get_size_chart_button_position : '';
            $this->size_chart_settings['size-chart-title-color'] = isset($get_size_chart_title_color) ? $get_size_chart_title_color : '';
            $this->size_chart_settings['size-chart-table-head-color'] = isset($get_size_chart_table_head_color) ? $get_size_chart_table_head_color : '';
            $this->size_chart_settings['size-chart-table-head-font-color'] = isset($get_size_chart_table_head_font_color) ? $get_size_chart_table_head_font_color : '';
            $this->size_chart_settings['size-chart-tab-label'] = isset($get_size_chart_tab_label) ? $get_size_chart_tab_label : 'Woo Product Size Chart';
            $this->size_chart_settings['size-chart-popup-label'] = !empty($get_size_chart_popup_label) ? $get_size_chart_popup_label : 'Woo Product Size Chart';
            $this->size_chart_settings['size-chart-button-class'] = !empty($get_size_chart_button_class) ? $get_size_chart_button_class : '';
            $this->size_chart_settings['size-chart-table-row-even-color'] = isset($get_size_table_row_even_color) ? $get_size_table_row_even_color : '';
            $this->size_chart_settings['size-chart-table-row-odd-color'] = isset($get_size_chart_table_row_odd_color) ? $get_size_chart_table_row_odd_color : '';

            //update option
            update_option("size_chart_settings", $this->size_chart_settings);
            ?>
            <div class="updated"><p><strong><?php esc_html_e('settings saved.', $this->plugin_name); ?></strong></p></div>
            <?php
        }
    }

    public function size_chart_plugin_introduction_free() {
        $plugin_name = SIZE_CHART_PLUGIN_NAME;
        $plugin_version = SIZE_CHART_PLUGIN_VERSION;
        ?>
        <div class="wcodd-table-main res-cl">
            <h2><?php esc_html_e('Quick info', 'size-chart-for-woocommerce'); ?></h2>
            <table class="wcodd-tableouter">
                <tbody>
                    <tr>
                        <td class="fr-1"><?php esc_html_e('Product Type', 'size-chart-for-woocommerce'); ?></td>
                        <td class="fr-2"><?php esc_html_e('WooCommerce Plugin', 'size-chart-for-woocommerce'); ?></td>
                    </tr>
                    <tr>
                        <td class="fr-1"><?php esc_html_e('Product Name', 'size-chart-for-woocommerce'); ?></td>
                        <td class="fr-2"><?php echo esc_html($plugin_name); ?></td>
                    </tr>
                    <tr>
                        <td class="fr-1"><?php esc_html_e('Installed Version', 'size-chart-for-woocommerce'); ?></td>
                        <td class="fr-2"><?php echo esc_html($plugin_version); ?></td>
                    </tr>
                    <tr>
                        <td class="fr-1"><?php esc_html_e('License & Terms of use', 'size-chart-for-woocommerce'); ?></td>
                        <td class="fr-2">
                            <a target="_blank"  href=" https://store.multidots.com/terms-conditions/">
                                <?php esc_html_e('Click here', 'size-chart-for-woocommerce'); ?>
                            </a> <?php esc_html_e('to view license and terms of use.', 'size-chart-for-woocommerce'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="fr-1"><?php esc_html_e('Help & Support', 'size-chart-for-woocommerce'); ?></td>
                        <td class="fr-2">
                            <ul class="help-support">
                                <li>
                                    <a href="<?php echo esc_url(site_url('wp-admin/admin.php?page=wc_order_delivery_date_pro&tab=get-started-dots-about-plugin-settings')); ?>">
                                        <?php esc_html_e('Quick Start Guide', 'size-chart-for-woocommerce'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://store.multidots.com/docs/plugins/woocommerce-order-delivery-date/">
                                        <?php esc_html_e('Documentation', 'size-chart-for-woocommerce'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://store.multidots.com/dotstore-support-panel/">
                                        <?php esc_html_e('Support Forum', 'size-chart-for-woocommerce'); ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="fr-1"><?php esc_html_e('Localization', 'size-chart-for-woocommerce'); ?></td>
                        <td class="fr-2"><?php esc_html_e('English, Spanish', 'size-chart-for-woocommerce'); ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <?php
    }

    /**
     * chart table content
     *
     * @since    1.0.0
     * @param      string $chart_content display chart details with table
     */
    public function size_chart_display_table($chart_content) {
        $chart_table = json_decode($chart_content);
        if (!empty($chart_table)) {
            echo "<table id='size-chart'>";
            $i = 0;
            foreach ($chart_table as $chart) {
                echo "<tr>";
                for ($j = 0; $j < count($chart); $j++) {
                    echo ($i == 0) ? "<th>" . esc_html__($chart[$j], $this->plugin_name) . "</th>" : "<td>" . esc_html__($chart[$j], $this->plugin_name) . "</td>";
                }
                echo "</tr>";
                $i++;
            }
            echo "</table>";
        }
    }

    /*
     * Function creates post duplicate as a draft and redirects then to the edit post screen
     */

    public function size_chart_duplicate_post() {
        global $wpdb;
        $get_post = filter_input(INPUT_GET, 'post', FILTER_SANITIZE_STRING);

        $get_post_id = isset($get_post) ? absint($get_post) : '';
        $post = get_post($get_post_id);
        $cntCoty = get_post_meta($get_post_id, 'clone-cnt', true);
        if (isset($cntCoty) && $cntCoty != '') {
            $cnt = $cntCoty + 1;
        } else {
            $cnt = 0;
        }
        update_post_meta($get_post_id, 'clone-cnt', $cnt);
        $count_clone = get_post_meta($get_post_id, 'clone-cnt', true);
        $current_user = wp_get_current_user();
        $clone_post_author = $current_user->ID;
        $count = isset($count_clone) && $count_clone != 0 ? '(' . $count_clone . ')' : '';
        if (isset($post) && !empty($post)) {

            $args = array(
                'comment_status' => $post->comment_status,
                'ping_status' => $post->ping_status,
                'post_author' => $clone_post_author,
                'post_content' => $post->post_content,
                'post_excerpt' => $post->post_excerpt,
                'post_name' => $post->post_name,
                'post_parent' => $post->post_parent,
                'post_password' => $post->post_password,
                'post_status' => 'draft',
                'post_title' => $post->post_title . ' - Copy' . $count,
                'post_type' => $post->post_type,
                'to_ping' => $post->to_ping,
                'menu_order' => $post->menu_order
            );

            /*
             * insert the clone post 
             */
            $clone_post_id = wp_insert_post($args);
            /*
             * duplicate all post meta
             */
            $chart_post_meta = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$get_post_id");
            if (count($chart_post_meta) != 0) {
                $sql_sel = array();
                $sql_ins = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
                foreach ($chart_post_meta as $chart_meta) {
                    if ($chart_meta->meta_key != 'post_status' && $chart_meta->meta_key != 'clone-cnt') {
                        $meta_key = $chart_meta->meta_key;
                        $meta_value = addslashes($chart_meta->meta_value);
                        $sql_sel[] = "SELECT " . $clone_post_id . ", '" . $meta_key . "', '" . $meta_value . "'";
                    }
                }
                $sql_ins .= implode(" UNION ALL ", $sql_sel);
                $wpdb->query($sql_ins);
            }
            wp_redirect(admin_url('post.php?action=edit&post=' . esc_attr($clone_post_id)));
            exit;
        } else {
            wp_die('could not find post: ' . esc_attr($get_post_id));
        }
    }

    /*
     * Function creates post preview */

    public function size_chart_preview_post() {
        $get_chart_id = filter_input(INPUT_GET, 'chart_id', FILTER_SANITIZE_STRING);

        $chart_id = $get_chart_id;
        if (isset($chart_id) && $chart_id !== '') {
            $size_chart_setting = get_option('size_chart_settings');
            $table_style = get_post_meta($chart_id, 'table-style', true);
            $chart_label = get_post_meta($chart_id, 'label', true);
            $chart_table = get_post_meta($chart_id, 'chart-table', true);
            $chart_position = get_post_meta($chart_id, 'position', true);
            ?>
            <style type="text/css">
            <?php if ($table_style === 'style-1') { ?>
                    #size-chart tr:nth-child(2n+1) {
                        background: none;
                    }

            <?php } elseif ($table_style === 'style-2') { ?>
                    #size-chart tr:nth-child(2n+1) {
                        background: #ebe9eb;
                    }

            <?php } elseif ($table_style === 'custom-style') { ?>
                    table#size-chart tr:first-child {
                        background: <?php echo (isset($size_chart_setting['size-chart-table-head-color']) && $size_chart_setting['size-chart-table-head-color'] != '') ? esc_attr($size_chart_setting['size-chart-table-head-color']) : '#000'; ?>;
                        color: <?php echo (isset($size_chart_setting['size-chart-table-head-font-color']) && $size_chart_setting['size-chart-table-head-font-color'] != '') ? esc_attr($size_chart_setting['size-chart-table-head-font-color']) : '#fff'; ?>;
                    }

                    #size-chart tr:nth-child(even) {
                        background: <?php echo (isset($size_chart_setting['size-chart-table-row-even-color']) && $size_chart_setting['size-chart-table-row-even-color'] != '') ? esc_attr($size_chart_setting['size-chart-table-row-even-color']) : '#fff'; ?>
                    }

                    #size-chart tr:nth-child(odd) {
                        background: <?php echo (isset($size_chart_setting['size-chart-table-row-odd-color']) && $size_chart_setting['size-chart-table-row-odd-color'] != '') ? esc_attr($size_chart_setting['size-chart-table-row-odd-color']) : '#ebe9eb'; ?>
                    }
            <?php } else { ?>
                    table#size-chart tr:first-child {
                        background: #000;;
                        color: #fff;
                    }

                    #size-chart tr:nth-child(2n+1) {
                        background: #ebe9eb;
                    }

            <?php } ?>
            </style>
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div class="chart-container">
                <?php require_once plugin_dir_path( __FILE__ ) . 'includes/size-chart-contents.php'; ?>
            </div>
            <?php
        } else {
            esc_html_e('No Result Found', 'size-chart-for-woocommerce');
        }
        wp_die();
    }

    public function size_chart_preview_dialog_box() {
        ?>
        <div id="wait">
            <img src=<?php echo esc_url(plugins_url('admin/images/loader.gif', dirname(__FILE__))); ?> width="64"
                            height="64"/><br>Loading..
        </div>
        <div class="remodal size-chart-model" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title"
             aria-describedby="modal1Desc">
        </div>
        <?php
    }

    /**
     * Manage Size Chart Type And Action
     */
    public function size_chart_column($columns) {
        $new_columns = (is_array($columns)) ? $columns : array();
        unset($new_columns['date']);
        $new_columns['size-chart-type'] = esc_html__('Size Chart Type', $this->plugin_name);
        $new_columns['action'] = esc_html__('Action', $this->plugin_name);
        return $new_columns;
    }

    /**
     * Manage Size Chart Column
     */
    public function size_chart_manage_column($column) {
        global $post;
        switch ($column) {
            case 'size-chart-type' :
                $size_chart_type = get_post_meta($post->ID, 'post_status', true);
                if (isset($size_chart_type) && $size_chart_type === 'default') {
                    $type = esc_html__('Default Template', $this->plugin_name);
                } else {
                    $type = esc_html__('Custom Template', $this->plugin_name);
                }
                echo esc_html($type);
                break;
            case 'action' :
                echo '<a href="admin.php?action=size_chart_duplicate_post&amp;post=' . esc_attr($post->ID) . '" class="clone-chart" title="' . esc_html__('Clone', $this->plugin_name) . '" rel="permalink"></a><a id="' . esc_attr($post->ID) . '"  href="#modal" class="preview_chart" title="' . esc_html__('Preview', $this->plugin_name) . '" rel="permalink"></a>';
                break;
        }
    }

    public function size_chart_delete_image() {
        $get_post_id = filter_input(INPUT_POST, 'post_id', FILTER_SANITIZE_STRING);
        $receive_post_id = $get_post_id;
        update_post_meta($receive_post_id, 'primary-chart-image', '');
        echo esc_url(plugins_url('admin/images/chart-img-placeholder.jpg', dirname(__FILE__)));
        wp_die();
    }

    /**
     * Size Chart welcome page
     *
     */
    public function welcome_screen_do_activation_redirect() {
        // if no activation redirect
        if (!get_transient('_welcome_screen_activation_redirect_size_chart')) {
            return;
        }
        // Delete the redirect transient
        delete_transient('_welcome_screen_activation_redirect_size_chart');
        // if activating from network, or bulk
        $get_activate_multi = filter_input(INPUT_GET, 'activate-multi', FILTER_SANITIZE_STRING);

        if (is_network_admin() || isset($get_activate_multi)) {
            return;
        }
        // Redirect to size chart welcome  page
        wp_safe_redirect(add_query_arg(array('page' => 'size_chart_get_started_page'), admin_url('admin.php')));
        exit();
    }

    public function add_plugin_update_message_row_aec($plugin_file, $plugin_data, $status) {

        $ver = get_option('size_chart_latest_version');
        if (isset($ver) && !empty($ver)) {
            $latest_var = '<a href="#">View version details&nbsp;' . $ver . '</a>';
        }
        echo '<tr class="plugin-update-tr active">
                <td colspan="3">
                <div class="update-message">' . esc_html__('There is a new version of Size Chart for WooCommerce available', 'size-chart-for-woocommerce'). '&nbsp;' . esc_html($latest_var) . '</div>
                </td>
                </tr>';
    }

    public function size_chart_publish_button_disable($hook_suffix) {
        if ('post.php' == $hook_suffix) {
            global $post;
            $post_status = get_post_meta($post->ID, 'post_status', true);
            if ('size-chart' === $post->post_type && isset($post_status) && $post_status === 'default') {
                ?>
                <script type="text/javascript">
                    window.onload = function() {
                        jQuery("#title").prop("disabled", true);
                    };
                </script>
                <?php
            }
        }
    }

    public function size_chart_remove_row_actions($actions) {
        global $post;
        $post_status = get_post_meta($post->ID, 'post_status', true);
        if ($post->post_type == 'size-chart' && isset($post_status) && $post_status == 'default') {
            unset($actions['inline hide-if-no-js']);
	        unset($actions['view']);
        }
        return $actions;
    }

    public function size_chart_filter_default_template() {
        global $typenow;
        $post_type = 'size-chart';
        $get_default_template = filter_input(INPUT_GET, 'default_template', FILTER_SANITIZE_STRING);

        $current = isset($get_default_template) ? $get_default_template : '';
        if ($typenow == $post_type) {
            ?>
            <select name="default_template" id="issue">
                <option value=""><?php esc_html_e('Show All Template', $this->plugin_name); ?></option>
                <option value="hide-default" <?php echo $current === 'hide-default' ? ' selected="selected"' : ''; ?>><?php esc_html_e('Hide Default Template', $this->plugin_name); ?></option>
            </select>
            <?php
        }
    }

    public function size_chart_filter_default_template_query($query) {
        global $pagenow;
        $get_post_type = filter_input(INPUT_GET, 'post_type', FILTER_SANITIZE_STRING);
        $get_default_template = filter_input(INPUT_GET, 'default_template', FILTER_SANITIZE_STRING);

        if (is_admin() && $pagenow == 'edit.php' &&
                isset($get_post_type) && $get_post_type === 'size-chart' &&
                isset($get_default_template) && !empty($get_default_template)
        ) {
            set_query_var('meta_query', array(array('key' => 'post_status', 'value' => 'default', 'compare' => 'NOT EXISTS')));
        }
    }

    public function size_chart_selected_chart_delete($post_id) {
        global $wpdb;
        if (isset($post_id) && !empty($post_id) && get_post_type($post_id) == 'size-chart') {
            $sql = "SELECT post_id  FROM $wpdb->postmeta where meta_key='prod-chart' AND meta_value=" . $post_id;
            $result = $wpdb->get_results($sql);
            if (!empty($result)) {
                foreach ($result as $value) {
                    delete_post_meta($value->post_id, 'prod-chart', $post_id);
                }
            }
        }
    }
    /*
     * review section
     */
    function size_chart_admin_footer_review() {
        echo sprintf( wp_kses( __( 'If you like <strong>Woocommerce Advanced Product Size Chart</strong> plugin, please leave us ★★★★★ ratings on <a href="%1$s" target="_blank">DotStore</a>.', 'size-chart-for-woocommerce' ), array('strong' => array(), 'a' => array('href' => array()) )), esc_url('https://wordpress.org/support/plugin/woo-advanced-product-size-chart/reviews/#new-post'));
    }
	function size_chart_plugin_row_meta( $links, $file ) {

		if ( strpos( $file, 'size-chart-for-woocommerce' ) !== false ) {
			$new_links = array(
				'support' => '<a href="'.esc_url("https://www.thedotstore.com/support/").'" target="_blank">'. esc_html__('Support', 'size-chart-for-woocommerce'). '</a>',
			);

			$links = array_merge( $links, $new_links );
		}

		return $links;
	}
}
