<?php
/**
 * [PUBLISH] ブログ アーカイブ一覧
 * 
 */
$bcBaser->setDescription($blog->getTitle().'｜'.$bcBaser->getContentsTitle().'のアーカイブ一覧です。');
?>
<div class="hero-unit">
	<h2><?php $blog->title() ?>：<?php $bcBaser->contentsTitle() ?></h2>
</div>

<?php if(!empty($posts)): ?>
	<?php foreach($posts as $post): ?>
<h3><?php $blog->postTitle($post) ?></h3>
<div class="post">
	<?php $blog->postContent($post,true,true) ?>
</div>
	<?php $bcBaser->element('meta', array('post' => $post)) ?>
	<?php endforeach; ?>
<?php else: ?>
<div class="alert alert-info">
	<a class="close">&times;</a>
	<strong>記事がありません。</strong>
</div>
<?php endif; ?>

<?php $bcBaser->pagination('simple'); ?>
