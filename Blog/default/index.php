<?php
/**
 * [PUBLISH] ブログ トップ
 *
 */
$this->BcBaser->setDescription($this->Blog->getDescription());
?>
<div class="hero-unit">
	<h2><?php $this->Blog->title() ?></h2>
	<?php if($this->Blog->descriptionExists()): ?>
	<div class="blog-description">
		<?php $this->Blog->description() ?>
	</div>
	<?php endif ?>
</div>

<?php if(!empty($posts)): ?>
	<?php foreach($posts as $post): ?>
<h3><?php $this->Blog->postTitle($post) ?></h3>
<div class="post">
	<?php $this->Blog->postContent($post, false, true) ?>
</div>
	<?php $this->BcBaser->element('meta', array('post' => $post)) ?>
	<?php endforeach; ?>
<?php else: ?>
<div class="alert alert-info">
	<a class="close">&times;</a>
	<strong>記事がありません。</strong>
</div>
<?php endif; ?>

<!-- pagination -->
<?php $this->BcBaser->pagination('simple') ?>
