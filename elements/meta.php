<?php
/**
 * [PUBLISH] 記事情報
 *
 */
?>
<div class="meta">
<p>
	<?php $blog->category($post) ?>
	<?php $bcBaser->element('blog_tag', array('post' => $post)) ?>
 | <i class="icon-user"></i><?php $blog->author($post) ?>
 | <i class="icon-calendar"></i><?php $blog->postDate($post) ?>
</p>
</div>
