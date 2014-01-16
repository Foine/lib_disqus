<?php
namespace Lib\Disqus;

class Disqus {
    static function getIdentifierFromItem(\Nos\Orm\Model $item) {
        $item_class = get_class($item);
        if ($item_class == 'Nos\BlogNews\Blog\Model_Post') {
            return $item->get('id');
        } else {
            return str_replace('\\', '/',$item_class).'/'.$item->get('id');
        }
    }
}
