<h1 class="lib_disqus">
    <?= __('Configuration de disqus') ?>
</h1>
<form class="lib_disqus" id="<?= $form_id = uniqid('lib_disqus_') ?>" action="admin/lib_disqus/appdesk/save" method="post">
    <?= render('nos::form/expander', array(
    'title' => __('Vos identifiants Disqus'),
    'content' => render('lib_disqus::admin/inputs', array('config' => $config)),
    ), false); ?>
    <?= render('nos::form/expander', array(
            'title' => __('Administration Disqus'),
            'content' => render(
                'lib_disqus::admin/lien_externe',
                array(
                    'label' => __('Acceder à Disqus'),
                )
            )
        ),
        false
    ); ?>
    <input type="submit" value="<?= __('Save') ?>">
</form>
<style>
    .lib_disqus {
        width: 90%;
        margin: 0 auto;
    }
    h1.lib_disqus {
        font-size: 18px;
        margin-top: 7px;
        margin-bottom: 7px;
    }
</style>
<script language="JAVAScript">
    require(
            [
                'jquery-nos'
            ],
            function($) {
                var $form = $('#<?= $form_id ?>');
                $form.nosFormAjax();
                $form.nosFormUI();
                var onglet_externe =
                {
                    url: '',
                    label: 'Administration externe Disqus'
                }
                $('a.lib_disqus_externe').on('click', function(event){
                    event.preventDefault();
                    onglet_externe.url = $(this).attr('href');
                    $(this).nosTabs('open', onglet_externe);
                });
            }
            );
</script>