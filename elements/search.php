<?php
/**
 * [PUBLISH] サイト内検索フォーム
 * 
 */
if(Configure::read('BcRequest.isMaintenance')) {
	return;
}
if(!empty($this->passedArgs['num'])) {
	$url = array('plugin' => null, 'controller' => 'contents', 'num' => $this->passedArgs['num']);
} else {
	$url = array('plugin' => null, 'controller' => 'contents');
}
?>
<?php echo $bcForm->create('Content', array('type' => 'get', 'action' => 'search', 'url' => $url, 'class' => 'form-search')) ?>
<?php if(unserialize($bcBaser->siteConfig['content_categories'])) : ?>
<?php echo $bcForm->input('Content.c', array('type' => 'select', 'options' => unserialize($bcBaser->siteConfig['content_categories']), 'empty' => '', 'class' => 'span5')) ?>
<?php endif ?>

<?php echo $bcForm->input('Content.q', array('class' => 'span5')) ?>
<?php echo $bcForm->submit('検索', array('div'=>false, 'class' => 'btn')) ?>

<?php echo $bcForm->end() ?>
