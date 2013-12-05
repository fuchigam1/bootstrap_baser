<?php
/**
 * [PUBLISH] ブログ 詳細ページ
 *
 */
$this->BcBaser->setDescription($this->Blog->getTitle().'｜'.$this->Blog->getPostContent($post,false,false,50));
?>
<h2><?php $this->BcBaser->contentsTitle() ?></h2>

<div class="post">
	<?php $this->Blog->postContent($post) ?>
</div>
	<?php $this->BcBaser->element('meta', array('post' => $post)) ?>

<div id="contentsNavi">
	<ul class="pager">
		<li><?php $this->Blog->prevLink($post) ?></li>
		<li><?php $this->Blog->nextLink($post) ?></li>
	</ul>
</div>

<?php $this->BcBaser->element('blog_comments') ?>
