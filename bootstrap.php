<?
//The default launcher of the comment app is removed
Event::register_function('config|noviusos_comments::metadata', function(&$config)
{
    unset($config['launchers']);
});
Event::register_function('config|noviusos_comments::orm/behaviour/commentable', function(&$config)
{
    $config['actions']['comments']['visible'] = function($item) { return false; };
    unset($config['data_mapping']['comments_count']);
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
