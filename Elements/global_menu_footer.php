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
<ul class="nav nav-pills">
  <li class="active">
    <a href="#">Home</a>
  </li>
	<?php if(empty($menuType)) $menuType = '' ?>
		<?php $globalMenus = $this->BcBaser->getMenus() ?>
		<?php if(!empty($globalMenus)): ?>
			<?php foreach($globalMenus as $key => $globalMenu): ?>
				<?php $no = sprintf('%02d',$key+1) ?>
				<?php if($globalMenu['Menu']['status']): ?>
					<?php if($key == 0): ?>
						<?php $class = ' class="first menu'.$no.'"' ?>
					<?php elseif($key == count($globalMenus) - 1): ?>
						<?php $class = ' class="last menu'.$no.'"' ?>
					<?php else: ?>
						<?php $class = ' class="menu'.$no.'"' ?>
					<?php endif ?>
					<?php if(!Configure::read('BcRequest.agent') && $this->base == '/index.php' && $globalMenu['Menu']['link'] == '/'): ?>
	<?php /* PC版トップページ */ ?>
	<li<?php echo $class ?>><?php echo str_replace('/index.php','',$this->BcBaser->link($globalMenu['Menu']['name'],$globalMenu['Menu']['link'])) ?></li>
					<?php else: ?>
	<li<?php echo $class ?>>
	<?php $this->BcBaser->link($globalMenu['Menu']['name'], $prefix.$globalMenu['Menu']['link']) ?>
	</li>
					<?php endif ?>
				<?php endif ?>
		<?php endforeach ?>
	<?php endif ?>
</ul>
