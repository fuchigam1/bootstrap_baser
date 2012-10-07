<?php
/**
 * フッター
 */
?>
<hr>
<footer>
	<div class="container">
		<?php if(!$bcBaser->isTop()): ?>
		<div class="pull-right"><a href="#<?php $bcBaser->contentsName() ?>">To PageTop</a></div>
		<?php endif ?>

		<?php $bcBaser->element('global_menu_footer') ?>

		<div class="row-fluid">
			<div class="span6">
				<p id="Copyright">&copy; <?php echo $bcBaser->siteConfig['name'] ?> <?php $bcBaser->copyYear(2012) ?></p>
			</div>
			<div class="span6">
				<p class="pull-right"><a href="http://basercms.net/" target="_blank"><?php $bcBaser->img('baser.power.gif', array('alt'=> 'baserCMS : Based Website Development Project')); ?></a></p>
			</div>
		</div>
	</div>
</footer>
