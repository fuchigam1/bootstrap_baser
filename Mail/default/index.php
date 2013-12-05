<?php
/**
 * [PUBLISH] メール フォーム
 *
 */
$this->BcBaser->css(array('/mail/css/style', 'admin/jquery-ui/ui.all'), array('inline' => true));
$this->BcBaser->js(array('admin/jquery-ui-1.8.19.custom.min','admin/i18n/ui.datepicker-ja'), false);
?>
<div class="hero-unit">
	<h2><?php $this->BcBaser->contentsTitle() ?></h2>
	<?php if($this->Mail->description()): ?>
	<div class="blog-description">
		<?php $this->Mail->description() ?>
	</div>
	<?php endif ?>
</div>

<h3>入力フォーム</h3>

<div class="section">
	<?php $this->BcBaser->flash() ?>
	<?php $this->BcBaser->element('mail_form') ?>
</div>
