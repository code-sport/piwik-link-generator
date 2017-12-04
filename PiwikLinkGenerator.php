<?php


class PiwikLinkGenerator
{
    private static $initiated = false;

    public static function init()
    {
        if (!self::$initiated) {
            self::init_hooks();
        }
    }

    /**
     * Attached to activate_{ plugin_basename( __FILES__ ) } by register_activation_hook()
     * @static
     */
    public static function plugin_activation()
    {

    }

    /**
     * Removes all connection options
     * @static
     */
    public static function plugin_deactivation()
    {

    }

    public static function work_on_content($content)
    {
        if (is_user_logged_in()
            && (is_singular('post')
                || is_singular('page'))) {
            $content .= '[PiwikLinkGenerator]';
        }

        // return content
        return $content;
    }

    public static function work_on_shortcode($atts, $content = null)
    {
        wp_register_script('PiwikAdminShareFormularScript', plugins_url('scripts/formular.js', __FILE__), array('jquery'));
        wp_enqueue_script('PiwikAdminShareFormularScript');
        wp_register_style('PiwikAdminShareFormularStyle', plugins_url('style/formular.css', __FILE__));
        wp_enqueue_style('PiwikAdminShareFormularStyle');

        $contentbefore = ob_get_contents();
        ob_clean();

        include(PLG_PLUGIN_DIR . '/views/formular.php');
        $content = ob_get_contents();

        ob_clean();
        echo $contentbefore;

        return $content;
    }

    /**
     * Initializes WordPress hooks
     */
    private static function init_hooks()
    {
        self::$initiated = true;

        add_filter('the_content', array('PiwikLinkGenerator', 'work_on_content'));
        add_shortcode('PiwikLinkGenerator', array('PiwikLinkGenerator', 'work_on_shortcode'));
    }


}