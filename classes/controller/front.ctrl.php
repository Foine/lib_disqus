<?
namespace Lib\Disqus;
class Controller_Front extends \Nos\Controller
{
    static $main_affiche = false;

    public function action_latest_com($args = array()) {
        $config = \Lib\Disqus\Controller_Admin_Config::getOptions();
        $config = \Arr::get($config, \Nos\Nos::main_controller()->getContext());
        if (empty($config['disqus_shortname'])) {
            return \View::forge('lib_disqus::front/no_disqus');
        }

        return \View::forge('lib_disqus::front/latest_com', array(
            'disqus_id' => $config['disqus_shortname'],
            'nb_com' => empty($args['nb_com']) ? $this->config['latest_comments']['nb_com'] : $args['nb_com'],
            'avatar' => empty($args['avatar']) ? $this->config['latest_comments']['avatar'] : $args['avatar'],
            'avatar_size' => empty($args['avatar_size']) ? $this->config['latest_comments']['avatar_size'] : $args['avatar_size'],
            'nb_chars' => empty($args['nb_chars']) ? $this->config['latest_comments']['nb_chars'] : $args['nb_chars'],
        ), true);
    }
}