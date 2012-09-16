<?php
/**
 * [PUBLISH] リスト設定リンク
 *
 */
$currentNum = '';
if(empty($nums)){
	$nums = array('10','20','50','100');
}
if(!is_array($nums)){
	$nums = array($nums);
}
if(!empty($this->passedArgs['num'])){
	$currentNum = $this->passedArgs['num'];
}
$links = array();
foreach($nums as $num){
	if($currentNum != $num){
		$links[] = '<li><span>'.$bcBaser->getLink($num, am($this->passedArgs,array('num'=>$num))).'</span></li>';
	} else {
		$links[] = '<li><span class="current">'. $num .'</span></li>';
	}
}
if ($links) {
	$link = implode(' ',$links);
}
?>
<?php if($link): ?>
<div class="pagination pagination-centered">
	<ul>
		<li class="disabled"><span>表示件数</span></li>
			<?php echo $link ?>
	</ul>
</div>
<?php endif ?>