<?php
return array(
    'name'    => 'Disqus',
    'version' => '0.1',
    'icons' => array(
        16 => 'static/apps/lib_disqus/images/16-disqus.png',
        32 => 'static/apps/lib_disqus/images/32-disqus.png',
        64 => 'static/apps/lib_disqus/images/64-disqus.png',
    ),
    'extends' => 'noviusos_comments',
    'provider' => array(
        'name' => 'Novius',
    ),
    'namespace' => 'Lib\Disqus',
    'permission' => array(
    ),
    'launchers' => array(
        'disqus_launcher' => array(
            'name' => 'Disqus',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/lib_disqus/config/externe',
                )
            ),
        ),
        'disqus_launcher_configuration' => array(
            'name' => 'Disqus Configuration',
            'icon64' => 'static/apps/lib_disqus/images/64-config-disqus.png',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/lib_disqus/config',
                )
            ),
        ),
    ),
    'enhancers' => array(
        'disqus_enhancer_latest_comments' => array(
            'title' => 'Latest Comments',
            'desc'  => '',
            'enhancer' => 'lib_disqus/front/latest_com',
            'iconUrl' => 'static/apps/lib_disqus/images/16-disqus.png',
        ),
    ),
);
