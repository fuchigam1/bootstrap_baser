<?php
/**
 * [PUBLISH] ブログ コメント一覧
 * 
 */
$prefix = '';
if(Configure::read('BcRequest.agent')) {
	$prefix = '/'.Configure::read('BcRequest.agentAlias');
}
?>
<script type="text/javascript">
$(function(){
	loadAuthCaptcha();
	$("#BlogCommentAddButton").click(function(){
		sendComment();
		return false;
	});
});
/**
 * コメントを送信する
 */
function sendComment() {
	var msg = '';
	if(!$("#BlogCommentName").val()){
		msg += 'お名前を入力してください\n';
	}
	if(!$("#BlogCommentMessage").val()){
		msg += 'コメントを入力してください\n';
	}
	<?php if($blogContent['BlogContent']['auth_captcha']): ?>
	if(!$("#BlogCommentAuthCaptcha").val()){
		msg += '画象の文字を入力してください\n';
	}
	<?php endif ?>
	if(!msg){
		$.ajax({
			url: $("#BlogCommentAddForm").attr('action'),
			type: 'POST',
			data: $("#BlogCommentAddForm").serialize(),
			dataType: 'html',
			beforeSend: function() {
				$("#BlogCommentAddButton").attr('disabled', 'disabled');
				$("#ResultMessage").slideUp();
			},
			success: function(result){
				if(result){
					<?php if($blogContent['BlogContent']['auth_captcha']): ?>
					loadAuthCaptcha();
					<?php endif ?>
					$("#BlogCommentName").val('');
					$("#BlogCommentEmail").val('');
					$("#BlogCommentUrl").val('');
					$("#BlogCommentMessage").val('');
					$("#BlogCommentAuthCaptcha").val('');
					var resultMessage = '';
					<?php if($blogContent['BlogContent']['comment_approve']): ?>
					resultMessage = '送信が完了しました。送信された内容は確認後公開させて頂きます。';
					<?php else: ?>
					var comment = $(result);
					comment.hide();
					$("#BlogCommentList").append(comment);
					comment.show(500);
					resultMessage = 'コメントの送信が完了しました。';
					<?php endif ?>
					$("#ResultMessage").html(resultMessage);
					$("#ResultMessage").slideDown();
				}else{
					<?php if($blogContent['BlogContent']['auth_captcha']): ?>
					loadAuthCaptcha();
					<?php endif ?>
					$("#ResultMessage").html('コメントの送信に失敗しました。入力内容を見なおしてください。');
					$("#ResultMessage").slideDown();
				}
			},
			error: function(result){
				alert('コメントの送信に失敗しました。入力内容を見なおしてください。');
			},
			complete: function(xhr, textStatus) {
				$("#BlogCommentAddButton").removeAttr('disabled');
			}
		});
	}else{
		alert(msg);
	}
}
/**
 * キャプチャ画像を読み込む
 */
function loadAuthCaptcha(){

	var src = $("#BlogCommentCaptchaUrl").html()+'?'+Math.floor( Math.random() * 100 );	
	$("#AuthCaptchaImage").hide();
	$("#CaptchaLoader").show();
	$("#AuthCaptchaImage").load(function(){
		$("#CaptchaLoader").hide();
		$("#AuthCaptchaImage").fadeIn(1000);
	});
	$("#AuthCaptchaImage").attr('src',src);

}
</script>

<div id="BlogCommentCaptchaUrl" class="display-none"><?php echo $bcBaser->getUrl($prefix.'/blog/blog_comments/captcha') ?></div>

<?php if($blogContent['BlogContent']['comment_use']): ?>
<div id="BlogComment">
	<h3>この記事へのコメント</h3>

	<div id="BlogCommentList">
	<?php if(!empty($post['BlogComment'])): ?>
		<?php foreach($post['BlogComment'] as $comment): ?>
		<?php $bcBaser->element('blog_comment', array('dbData'=>$comment)) ?>
		<?php endforeach ?>
	<?php endif ?>
	</div>

	<div class="span8 offset1">
		<?php echo $bcForm->create('BlogComment', array('url' => $prefix.'/blog/blog_comments/add/'.$blogContent['BlogContent']['id'].'/'. $post['BlogPost']['id'], 'id' => 'BlogCommentAddForm', 'class' => 'form-horizontal well')) ?>
		<legend>コメントを送る</legend>
		<div class="control-group">
			<?php echo $bcForm->label('BlogComment.name','お名前', array('class' => 'control-label')) ?>
			<div class="controls">
				<?php echo $bcForm->input('BlogComment.name', array('type' => 'text', 'class' => 'input-xlarge')) ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo $bcForm->label('BlogComment.email','Eメール', array('class' => 'control-label')) ?>
			<div class="controls">
				<?php echo $bcForm->input('BlogComment.email', array('type' => 'text', 'class' => 'input-xlarge')) ?>
				<p class="help-block">※ メールは公開されません</p>
			</div>
		</div>
		<div class="control-group">
			<?php echo $bcForm->label('BlogComment.url','URL', array('class' => 'control-label')) ?>
			<div class="controls">
				<?php echo $bcForm->input('BlogComment.url', array('type' => 'text', 'class' => 'input-xlarge')) ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo $bcForm->label('BlogComment.message','コメント', array('class' => 'control-label')) ?>
			<div class="controls">
				<?php echo $bcForm->input('BlogComment.message', array('type' => 'textarea', 'rows' => '6', 'class' => 'input-xlarge')) ?>
			</div>
		</div>

		<?php if($blogContent['BlogContent']['auth_captcha']): ?>
		<div class="control-group">
			<div class="auth-captcha">
				<label for="BlogCommentAuthCaptcha" class="control-label">
					<img src="" alt="認証画象" class="auth-captcha-image" id="AuthCaptchaImage" style="display:none" />
					<?php $bcBaser->img('/img/captcha_loader.gif', array('alt' => 'Loading...', 'class' => 'auth-captcha-image', 'id'=>'CaptchaLoader')) ?>
				</label>
				<div class="controls">
					<?php echo $bcForm->text('BlogComment.auth_captcha') ?><br />
				<p class="help-block">画像の文字を入力してください</p>
				</div>
			</div>
		</div>
		<?php endif ?>

		<div class="form-actions">
			<?php echo $bcForm->end(array('label'=>'　送信する　', 'id'=>'BlogCommentAddButton', 'class' => 'btn btn-primary')) ?>
		</div>
		<div id="ResultMessage" class="message" style="display:none;text-align:center">&nbsp;</div>
	</div>


	
</div>
<?php endif ?>
