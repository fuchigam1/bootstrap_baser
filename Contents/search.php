<?php
/**
 * サイト内検索結果
 *
 */
?>
<h2><?php $this->BcBaser->contentsTitle() ?></h2>

<div class="section">
<?php if(!empty($paginator)): ?>
	<div class="alert alert-success">
	<a class="close">&times;</a>
	<?php echo $this->Paginator->counter(array('format' => '<strong>'.implode(' ', $query).'</strong> で検索した結果 <strong>%start%～%end%</strong>件目 / %count% 件')) ?>
	</div>
<?php endif ?>
	<?php $this->BcBaser->element('list_num') ?>
</div>

<?php if($datas): ?>
	<?php foreach($datas as $data): ?>
<div class="section">
	<h4 class="result-head"><?php $this->BcBaser->link($this->BcBaser->mark($query, $data['Content']['title']), $data['Content']['url']) ?></h4>
	<p class="result-body"><?php echo $this->BcBaser->mark($query, $this->BcText->truncate($data['Content']['detail'],100)) ?></p>
	<p class="result-link"><small><?php $this->BcBaser->link(fullUrl($data['Content']['url']), $data['Content']['url']) ?></small></p>
</div>
	<?php endforeach ?>
<?php else: ?>
<div class="alert alert-info">
	<a class="close">&times;</a>
	<strong>該当する結果が存在しませんでした。</strong>
</div>
<?php endif ?>

<?php $this->BcBaser->pagination('simple') ?>
