<iframe height="99%" width="100%" src="http://disqus.com/admin/moderate"></iframe>
<script language="JAVAScript">
    require(
            [
                'jquery-nos'
            ],
            function($) {
                $form.nosTabs('update', {
                    label: <?= \Format::forge(__('Administration externe Disqus'))->to_json() ?>,
                    url:  'admin/lib_disqus/config/externe',
                    iconUrl: '/static/apps/lib_disqus/images/32-config-disqus.png',
                    app: true,
                    iconSize: 32,
                    labelDisplay: false
                });
            }
            );
</script>