<?php
/**
 * [PUBLISH] 記事情報
 *
 */
?>
<div class="meta">
<p>
	<?php if(!empty($post['BlogCategory'])) : ?>
		<span class="label"><?php $this->Blog->category($post) ?></span>
	<?php endif ?>
	<?php $this->BcBaser->element('blog_tag', array('post' => $post)) ?>
 | <i class="icon-user"></i><?php $this->Blog->author($post) ?>
 | <i class="icon-calendar"></i><?php $this->Blog->postDate($post) ?>
</p>
</div>
