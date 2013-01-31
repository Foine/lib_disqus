<?
\View::redirect('noviusos_comments::front/list', false, function&(&$datas){
    $config = \Config::load('local::lib_disqus/api_config', 'disqus_api_config', true);
    if ($config['disqus_shortname']) {
        $datas['config'] = $config;
        return 'lib_disqus::front/main';
    } else {
        return 'lib_disqus::front/no_disqus';
    }
});
\View::redirect('noviusos_comments::front/form', false, function&(&$datas){
    $config = \Config::load('local::lib_disqus/api_config', 'disqus_api_config', true);
    if ($config['disqus_shortname']) {
        $datas['config'] = $config;
        return 'lib_disqus::front/main';
    } else {
        return 'lib_disqus::front/no_disqus';
    }
});
\View::redirect('noviusos_blognews::front/comment/nb', false, function(&$datas){
    $config = \Config::load('local::lib_disqus/api_config', 'disqus_api_config', true);
    if ($config['disqus_shortname']) {
        $datas['config'] = $config;
        return 'lib_disqus::front/nb';
    } else {
        return 'lib_disqus::front/no_disqus';
    }
});