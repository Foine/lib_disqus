<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright 2011 Novius
 * @license GNU Affero General Public License v3 or (at your option) any later version
 * http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

namespace Lib\Disqus;

class Controller_Admin_Config extends \Nos\Controller_Admin_Application
{

    CONST CONFIG_PATH = 'data/apps/lib_disqus/api_config.config.php';

    public function action_index($view = null)
    {
        $config = \Config::load(APPPATH.\Lib\Disqus\Controller_Admin_Config::CONFIG_PATH, true);
        return \View::forge('lib_disqus::admin/index', array(
            'config' => $config,
        ), false);
    }

    public function action_save($view = null)
    {
        \Nos\I18n::current_dictionary(array('lib_disqus::default', 'nos::common'));
        $config = \Config::load(APPPATH.\Lib\Disqus\Controller_Admin_Config::CONFIG_PATH, true);
        if (\Fuel\Core\Input::post('disqus_shortname')) {
            $config['disqus_shortname'] = \Fuel\Core\Input::post('disqus_shortname');
            $result = \Config::save(APPPATH.\Lib\Disqus\Controller_Admin_Config::CONFIG_PATH, $config);
        }
        $return = array();
        if (!empty($result)) {
            $return['success'] = true;
            $return['notify'] = __('OK, les modifications ont été enregistrées');
            $return['closeDialog'] = true;
        } else {
            $return['success'] = false;
            $return['notify'] = __('Erreur dans l\'enregistrement des modifications');
            $return['closeDialog'] = true;
        }
        return \Fuel\Core\Format::forge($return)->to_json();
    }

    public function action_externe($view = null) {
        return \View::forge('lib_disqus::admin/ext_admin');
    }
}