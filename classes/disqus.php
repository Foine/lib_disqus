<?php
namespace Lib\Disqus;

class Disqus {
    static function getIdentifierFromItem(\Nos\Orm\Model $item) {
        $config = \Lib\Disqus\Controller_Admin_Config::getOptions();
        $config = \Arr::get($config, \Nos\Nos::main_controller()->getContext());
        if ($config['update_date'] != '') {
            return self::_getOldIdentifier($item, $config['update_date']);
        } 
        return str_replace('\\', '/',get_class($item)).'/'.$item->get('id');
    }
    
    static protected function _getOldIdentifier(\Nos\Orm\Model $item, $start_date) {
        //return $item->get('created_at');
        return $item->get('id');
    }
}
