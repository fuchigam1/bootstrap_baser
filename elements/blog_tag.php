<?php
/**
 * [PUBLISH] タグ
 *
 */
?>
<?php if(!empty($blog->blogContent['tag_use'])): ?>
	<?php if(!empty($post['BlogTag'])) : ?>
		<div class="tag">タグ：<?php $bootstrapBaser->tag($blog->getTag($post)) ?></div>
	<?php endif ?>
<?php endif ?>
