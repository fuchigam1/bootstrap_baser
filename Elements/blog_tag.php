<?php
/**
 * [PUBLISH] タグ
 *
 */
?>
<?php if(!empty($this->Blog->blogContent['tag_use'])): ?>
	<?php if(!empty($post['BlogTag'])) : ?>
		<div class="tag">タグ：<?php $this->BootstrapBaser->tag($this->Blog->getTag($post)) ?></div>
	<?php endif ?>
<?php endif ?>
