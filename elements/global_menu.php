<?php
/**
 * メニュー
 * 
 */
if(Configure::read('BcRequest.isMaintenance')) {
	return;
}
$prefix = '';
if(Configure::read('BcRequest.agent')) {
	$prefix = '/'.Configure::read('BcRequest.agentAlias');
}
?>
<ul class="nav nav-list">
	<li class="nav-header">Menu</li>
	<?php if(empty($menuType)) $menuType = '' ?>
		<?php $globalMenus = $bcBaser->getMenus() ?>
		<?php if(!empty($globalMenus)): ?>
			<?php foreach($globalMenus as $key => $globalMenu): ?>
				<?php $no = sprintf('%02d',$key+1) ?>
				<?php if($globalMenu['GlobalMenu']['status']): ?>
					<?php if($key == 0): ?>
						<?php $class = ' class="first menu'.$no.'"' ?>
					<?php elseif($key == count($globalMenus) - 1): ?>
						<?php $class = ' class="last menu'.$no.'"' ?>
					<?php else: ?>
						<?php $class = ' class="menu'.$no.'"' ?>
					<?php endif ?>
					<?php if(!Configure::read('BcRequest.agent') && $this->base == '/index.php' && $globalMenu['GlobalMenu']['link'] == '/'): ?>
	<?php /* PC版トップページ */ ?>
	<li<?php echo $class ?>><?php echo str_replace('/index.php','',$bcBaser->link($globalMenu['GlobalMenu']['name'],$globalMenu['GlobalMenu']['link'])) ?></li>
					<?php else: ?>
	<li<?php echo $class ?>>
	<?php $bcBaser->link($globalMenu['GlobalMenu']['name'], $prefix.$globalMenu['GlobalMenu']['link']) ?>
	</li>
					<?php endif ?>
				<?php endif ?>
		<?php endforeach ?>
	<?php endif ?>
</ul>
