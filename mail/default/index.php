<?php
/**
 * [PUBLISH] メール フォーム
 * 
 */
$bcBaser->css(array('/mail/css/style', 'jquery-ui/ui.all'), array('inline' => true));
$bcBaser->js(array('jquery-ui-1.8.14.custom.min','i18n/ui.datepicker-ja'), false);
?>
<div class="hero-unit">
	<h2><?php $bcBaser->contentsTitle() ?></h2>
	<?php if($mail->description()): ?>
	<div class="blog-description">
		<?php $mail->description() ?>
	</div>
	<?php endif ?>
</div>

<h3>入力フォーム</h3>

<div class="section">
	<?php $bcBaser->flash() ?>
	<?php $bcBaser->element('mail_form') ?>
</div>
