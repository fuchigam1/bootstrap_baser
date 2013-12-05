<?php
/**
 * [PUBLISH] ページネーションシンプル
 *
 */
if(empty($this->Paginator)) {
	return;
}
if(!isset($modules)) {
	$modules = 8;
}
?>
<?php if((int)$this->Paginator->counter(array('format'=>'%pages%')) > 1): ?>
<div class="pagination pagination-centered">
	<ul>
		<li><?php echo $this->Paginator->prev('前へ', array('class'=>'prev'), null, array('class'=>'disabled', 'tag' => 'span')) ?></li>
		<?php echo $this->Html->tag('li', $this->Paginator->numbers(array('separator' => '', 'class' => 'number', 'modulus' => $modules), array('class' => 'page-numbers'))) ?>
		<li><?php echo $this->Paginator->next('次へ', array('class'=>'next'), null, array('class'=>'disabled', 'tag' => 'span')) ?></li>
	</ul>
</div>
<?php endif; ?>
