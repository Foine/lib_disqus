<?
\View::redirect('noviusos_comments::front/list', false, function&(&$datas){
    $config = \Config::load(APPPATH.\Lib\Disqus\Controller_Admin_Config::CONFIG_PATH, true);
    if (isset($config['disqus_shortname']) && $config['disqus_shortname'] != '') {
        $datas['config'] = $config;
        return 'lib_disqus::front/main';
    } else {
        return 'lib_disqus::front/no_disqus';
    }
});
\View::redirect('noviusos_comments::front/form', false, function&(&$datas){
    $config = \Config::load(APPPATH.\Lib\Disqus\Controller_Admin_Config::CONFIG_PATH, true);
    if (isset($config['disqus_shortname']) && $config['disqus_shortname'] != '') {
        $datas['config'] = $config;
        return 'lib_disqus::front/main';
    } else {
        return 'lib_disqus::front/no_disqus';
    }
});
\View::redirect('noviusos_blognews::front/comment/nb', false, function(&$datas){
    $config = \Config::load(APPPATH.\Lib\Disqus\Controller_Admin_Config::CONFIG_PATH, true);
    if (isset($config['disqus_shortname']) && $config['disqus_shortname'] != '') {
        $datas['config'] = $config;
        return 'lib_disqus::front/nb';
    } else {
        return 'lib_disqus::front/no_disqus';
    }
});