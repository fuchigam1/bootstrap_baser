<?php
/**
 * [PUBLISH] ブログ アーカイブ一覧
 *
 */
$this->BcBaser->setDescription($this->Blog->getTitle().'｜'.$this->BcBaser->getContentsTitle().'のアーカイブ一覧です。');
?>
<div class="hero-unit">
	<h2><?php $this->Blog->title() ?>：<?php $this->BcBaser->contentsTitle() ?></h2>
</div>

<?php if(!empty($posts)): ?>
	<?php foreach($posts as $post): ?>
<h3><?php $this->Blog->postTitle($post) ?></h3>
<div class="post">
	<?php $this->Blog->postContent($post,true,true) ?>
</div>
	<?php $this->BcBaser->element('meta', array('post' => $post)) ?>
	<?php endforeach; ?>
<?php else: ?>
<div class="alert alert-info">
	<a class="close">&times;</a>
	<strong>記事がありません。</strong>
</div>
<?php endif; ?>

<?php $this->BcBaser->pagination('simple'); ?>
