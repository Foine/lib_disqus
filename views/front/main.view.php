<?
if(!Lib\Disqus\Controller_Front::$main_affiche) :
    Lib\Disqus\Controller_Front::$main_affiche = true;
?>
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = '<?= $config['disqus_shortname'] ?>'; // required: replace example with your forum shortname
    <? if (isset($from_item) && $from_item->post_id) : ?>
    var disqus_identifier = '<?= $from_item->post_id ?>';
    <? endif; ?>
    <? if (isset($from_item) && $from_item->virtual_name()) : ?>
    var disqus_title = '<?= \Inflector::friendly_title($from_item->virtual_name()) ?>';
    <? endif; ?>
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
<? endif; ?>