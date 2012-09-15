<?php
/**
 * [PUBLISH] ブログ コメント単記事
 * 
 * Ajax でも利用される
 * 
 */
?>

<?php if(!empty($dbData)): ?>
	<?php if($dbData['status']): ?>
<div class="comment" id="Comment<?php echo $dbData['no'] ?>">
	<span class="comment-name">≫
		<?php if($dbData['url']): ?>
		<?php echo $bcBaser->link($dbData['name'], $dbData['url'], array('target' => '_blank')) ?>
		<?php else: ?>
		<?php echo $dbData['name'] ?>
		<?php endif ?>
	</span><br />
	<span class="comment-message"><?php echo nl2br($bcText->autoLinkUrls($dbData['message'])) ?></span>
</div>
	<?php endif ?>
<?php endif ?>