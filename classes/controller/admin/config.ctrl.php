<?php
namespace Lib\Disqus;

class Controller_Admin_Config extends \Lib\Options\Controller_Admin_Options
{
    public function action_externe($view = null) {
        return \View::forge('lib_disqus::admin/ext_admin');
    }
}