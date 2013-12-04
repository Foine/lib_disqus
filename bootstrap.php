<?
//The default launcher of the comment app is removed
Event::register_function('config|noviusos_comments::metadata', function(&$config)
{
    unset($config['launchers']);
});
\View::redirect('noviusos_comments::front/list', false, function(&$datas){
    $config = \Lib\Disqus\Controller_Admin_Config::getOptions();
    $config = \Arr::get($config, \Nos\Nos::main_controller()->getContext());
    if (isset($config['disqus_shortname']) && $config['disqus_shortname'] != '') {
        $datas['config'] = $config;
        return 'lib_disqus::front/main';
    } else {
        return 'lib_disqus::front/no_disqus';
    }
});
\View::redirect('noviusos_comments::front/form', false, function(&$datas){
    $config = \Lib\Disqus\Controller_Admin_Config::getOptions();
    $config = \Arr::get($config, \Nos\Nos::main_controller()->getContext());
    if (isset($config['disqus_shortname']) && $config['disqus_shortname'] != '') {
        $datas['config'] = $config;
        return 'lib_disqus::front/main';
    } else {
        return 'lib_disqus::front/no_disqus';
    }
});
\View::redirect('noviusos_blognews::front/comment/nb', false, function(&$datas){
    $config = \Lib\Disqus\Controller_Admin_Config::getOptions();
    $config = \Arr::get($config, \Nos\Nos::main_controller()->getContext());
    if (isset($config['disqus_shortname']) && $config['disqus_shortname'] != '') {
        $datas['config'] = $config;
        return 'lib_disqus::front/nb';
    } else {
        return 'lib_disqus::front/no_disqus';
    }
});
