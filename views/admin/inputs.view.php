<label for="<?= $shortname_id = uniqid('shortname_') ?>">Shortname Disqus (<?= $lien ? $lien : 'retrouvez le dans Disqus' ?>)</label>
<input id="<?= $shortname_id ?>" type="text" value="<?= isset($config['disqus_shortname']) ? $config['disqus_shortname'] : '' ?>" name="disqus_shortname" placeholder="Shortname Disqus">
