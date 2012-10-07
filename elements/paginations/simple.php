<?php
/**
 * [PUBLISH] ページネーションシンプル
 *
 */
if(empty($paginator)) {
	return;
}
if(!isset($modules)) {
	$modules = 8;
}
?>
<?php $paginator->options = array('url' => $this->passedArgs) ?>
<?php if((int)$paginator->counter(array('format'=>'%pages%')) > 1): ?>
<div class="pagination pagination-centered">
	<ul>
		<li><?php echo $paginator->prev('前へ', array('class'=>'prev'), null, array('class'=>'disabled', 'tag' => 'span')) ?></li>
		<?php echo $html->tag('li', $paginator->numbers(array('separator' => '', 'class' => 'number', 'modulus' => $modules), array('class' => 'page-numbers'))) ?>
		<li><?php echo $paginator->next('次へ', array('class'=>'next'), null, array('class'=>'disabled', 'tag' => 'span')) ?></li>
	</ul>
</div>
<?php endif; ?>