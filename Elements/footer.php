<?php
/**
 * フッター
 */
?>
<hr>
<footer>
	<div class="container">
		<?php if(!$this->BcBaser->isTop()): ?>
		<div class="pull-right"><a href="#<?php $this->BcBaser->contentsName() ?>">To PageTop</a></div>
		<?php endif ?>

		<?php $this->BcBaser->element('global_menu_footer') ?>

		<div class="row-fluid">
			<div class="span6">
				<p id="Copyright">&copy; <?php echo $this->BcBaser->siteConfig['name'] ?> <?php $this->BcBaser->copyYear(2012) ?></p>
			</div>
			<div class="span6">
				<p class="pull-right"><a href="http://basercms.net/" target="_blank"><?php $this->BcBaser->img('baser.power.gif', array('alt'=> 'baserCMS : Based Website Development Project')); ?></a></p>
			</div>
		</div>
	</div>
</footer>
