<?
    $js = <<<SCRIPT
    var disqus_shortname = 'oppoc'; // required: replace example with your forum shortname
    var disqus_identifier = '$item->post_id';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
SCRIPT;
    \Nos\Nos::main_controller()->addJavascriptInline($js, true);
?>
<a href="<?= $item->url() ?>#disqus_thread">Link</a>