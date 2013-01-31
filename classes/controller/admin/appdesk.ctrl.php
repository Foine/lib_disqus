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

class Controller_Admin_Appdesk extends \Nos\Controller_Admin_Application
{
    public function action_index($view = null)
    {
        $config = \Config::load('lib_disqus::api_config', 'disqus_api_config', true);
        return \View::forge('lib_disqus::admin/index', array(
            'config' => $config,
        ), false);
    }

    public function action_save($view = null)
    {
        $config = \Config::load('lib_disqus::api_config', 'disqus_api_config', true);
        if (\Fuel\Core\Input::post('disqus_shortname')) {
            $config['disqus_shortname'] = \Fuel\Core\Input::post('disqus_shortname');
            $result = \Config::save('lib_disqus::api_config', $config);
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