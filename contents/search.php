<?php
/**
 * サイト内検索結果
 *
 */
?>
<h2><?php $bcBaser->contentsTitle() ?></h2>

<div class="section">
<?php if(!empty($paginator)): ?>
	<div class="alert alert-success">
	<a class="close">&times;</a>
	<?php echo $paginator->counter(array('format' => '<strong>'.implode(' ', $query).'</strong> で検索した結果 <strong>%start%～%end%</strong>件目 / %count% 件')) ?>
	</div>
<?php endif ?>
	<?php $bcBaser->element('list_num') ?>
</div>

<?php if($datas): ?>
	<?php foreach($datas as $data): ?>
<div class="section">
	<h4 class="result-head"><?php $bcBaser->link($bcBaser->mark($query, $data['Content']['title']), $data['Content']['url']) ?></h4>
	<p class="result-body"><?php echo $bcBaser->mark($query, $bcText->mbTruncate($data['Content']['detail'],100)) ?></p>
	<p class="result-link"><small><?php $bcBaser->link(fullUrl($data['Content']['url']), $data['Content']['url']) ?></small></p>
</div>
	<?php endforeach ?>
<?php else: ?>
<div class="alert alert-info">
	<a class="close">&times;</a>
	<strong>該当する結果が存在しませんでした。</strong>
</div>
<?php endif ?>

<?php $bcBaser->pagination('simple', array(), null, false) ?>
