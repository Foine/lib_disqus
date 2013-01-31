<h1 class="lib_disqus">
    <?= __('Configuration de disqus') ?>
</h1>
<form class="lib_disqus" id="<?= $form_id = uniqid('lib_disqus_') ?>" action="admin/lib_disqus/config/save" method="post">
    <?= render('nos::form/expander', array(
    'title' => __('Vos identifiants Disqus'),
    'content' => render('lib_disqus::admin/inputs',
        array(
            'config' => $config,
            'lien' => render('lib_disqus::admin/lien_externe',array('label' => __('retrouvez le dans Disqus')), false)
        ), false),
    ), false); ?>
    <input type="submit" value="<?= __('Save') ?>">
</form>
<div class="lib_disqus" id="<?= $install_id = uniqid('disqus_install_') ?>"id="">
    <?= render('nos::form/expander', array(
    'title' => __('Instruction d\'installation'),
    'options' => array('expanded' => false),
    'content' => render('lib_disqus::admin/install',array(), false),
    ), false); ?>
</div>
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
    #<?= $install_id ?> {
        margin-top: 15px;
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
                $form.nosTabs('update', {
                    label: <?= \Format::forge(__('Configuration Disqus'))->to_json() ?>,
                    url:  'admin/lib_disqus/config',
                    iconUrl: '/static/apps/lib_disqus/images/32-config-disqus.png',
                    app: true,
                    iconSize: 32,
                    labelDisplay: false
                });
                var install = $('#<?= $install_id?>');
                install.nosFormUI();
            }
            );
</script>