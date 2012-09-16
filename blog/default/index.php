<?php
/**
 * [PUBLISH] ブログ トップ
 * 
 */
$bcBaser->setDescription($blog->getDescription());
?>
<div class="hero-unit">
	<h2><?php $blog->title() ?></h2>
	<?php if($blog->descriptionExists()): ?>
	<div class="blog-description">
		<?php $blog->description() ?>
	</div>
	<?php endif ?>
</div>

<?php if(!empty($posts)): ?>
	<?php foreach($posts as $post): ?>
<h3><?php $blog->postTitle($post) ?></h3>
<div class="post">
	<?php $blog->postContent($post, false, true) ?>	
</div>
	<?php $bcBaser->element('meta', array('post' => $post)) ?>
	<?php endforeach; ?>
<?php else: ?>
<div class="alert alert-info">
	<a class="close">&times;</a>
	<strong>記事がありません。</strong>
</div>
<?php endif; ?>

<!-- pagination -->
<?php $bcBaser->pagination('simple') ?>
