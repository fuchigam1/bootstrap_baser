<?php
/**
 * [PUBLISH] タグ
 *
 */
?>
<?php if(!empty($blog->blogContent['tag_use'])): ?>
	<?php $bootstrapBaser->tag($blog->getTag($post, ',')) ?>
<?php endif ?>