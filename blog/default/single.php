<?php
/**
 * [PUBLISH] ブログ 詳細ページ
 * 
 */
$bcBaser->setDescription($blog->getTitle().'｜'.$blog->getPostContent($post,false,false,50));
?>
<h2><?php $bcBaser->contentsTitle() ?></h2>

<div class="post">
	<?php $blog->postContent($post) ?>
</div>
	<?php $bcBaser->element('meta', array('post' => $post)) ?>

<div id="contentsNavi">
	<ul class="pager">
		<li><?php $blog->prevLink($post) ?></li>
		<li><?php $blog->nextLink($post) ?></li>
	</ul>
</div>

<?php $bcBaser->element('blog_comments') ?>
