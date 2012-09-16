<?php
/**
 * [PUBLISH] メール フォーム本体
 * 
 */
$prefix = '';
if(Configure::read('BcRequest.agent')) {
	$prefix = '/'.Configure::read('BcRequest.agentAlias');
}
?>
<div class="span10 offset1">
<?php /* フォーム開始タグ */ ?>
<?php if(!$freezed): ?>
<?php echo $mailform->create('Message', array('url' => $prefix.'/'.$mailContent['MailContent']['name'].'/confirm', 'class' => 'form-horizontal well')) ?>
<?php else: ?>
<?php echo $mailform->create('Message', array('url' => $prefix.'/'.$mailContent['MailContent']['name'].'/submit', 'class' => 'form-horizontal well')) ?>
<?php endif; ?>

<?php /* フォーム本体 */ ?>
<h4>HOGE</h4>
<table class="table">
	<?php $bcBaser->element('mail_input', array('blockStart' => 1)) ?>
</table>
<?php if(!$freezed && $mailContent['MailContent']['auth_captcha']): ?>
<div class="auth-captcha clearfix">
	<?php $bcBaser->img($prefix.'/'.$mailContent['MailContent']['name'] . '/captcha', array('alt' => '認証画像', 'class' => 'auth-captcha-image')) ?>
	<?php echo $mailform->text('Message.auth_captcha') ?><br />
	&nbsp;画像の文字を入力してください<br clear="all" />
	<?php echo $mailform->error('Message.auth_captcha', '入力された文字が間違っています。入力をやり直してください。') ?>
</div>
<?php endif ?>

<?php /* 送信ボタン */ ?>
<div class="submit">
<?php if($this->action=='index'): ?>
	<input name="resetdata" value="　取り消す　" type="reset" class="btn" />
<?php endif; ?>
<?php if($freezed): ?>
	<?php echo $mailform->submit('　送信する　', array('div' => false, 'class' => 'btn btn-primary', 'id' => 'MessageSubmit'))  ?>
<?php elseif($this->action != 'submit'): ?>
	<?php echo $mailform->submit('　入力内容を確認する　', array('div' => false, 'class' => 'btn btn-primary', 'id' => 'MessageConfirm'))  ?>
<?php endif; ?>
</div>

<?php echo $mailform->end() ?>

</div>
