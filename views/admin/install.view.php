<p><?= __('Disqus est votre modile de commentaire externe. Pour son bon fonctionnement, vous devez :') ?></p>
<ul>
    <li><?= __('Avoir un compte Disqus et vous connecter') ?>.
        <?= __('Si ce n\'est pas le cas, vous pouvez le créer depuis') ?>
        <?= render('lib_disqus::admin/lien_externe', array('label' => __('depuis votre Back Office') ), false) ?>
    </li>
    <li><?= __('Ajouter un nouveau site dans Disqus') ?></li>
    <li><?= __('Remplir les information de ce nouveau site') ?></li>
    <li><?= __('Récupérer le "shortname" de ce nouveau site pour l\'enregistrer si dessus') ?></li>
</ul>
<p><?= __('Dans le cas d\'un multi-site, vous pouvez facilement ajouter un autre site à Disqus par le même procédé.') ?></p>