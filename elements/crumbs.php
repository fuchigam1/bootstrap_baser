<?php
/**
 * [PUBLISH] ナビゲーション
 *
 */
?>
<ul class="breadcrumb">
<?php
if ($this->viewPath == 'home'){
	echo '<li>ホーム</li>';
}else{
	$crumbs = $bcBaser->getCrumbs();
	if (!empty($crumbs)){
		foreach($crumbs as $key => $crumb){
			if($bcArray->last($crumbs, $key+1)) {
				if($crumbs[$key+1]['name'] == $crumb['name']) {
					continue;
				}
			}
			if($bcArray->last($crumbs, $key)) {
				if ($this->viewPath != 'home' && $crumb['name']){
					$bcBaser->addCrumb('<li class="active">'.$crumb['name'].'</li>');
				}elseif($this->name == 'CakeError'){
					$bcBaser->addCrumb('<li class="active">404 NOT FOUND</li>');
				}
			} else {
				$bcBaser->addCrumb($crumb['name'], $crumb['url']);
			}
		}
	}
	$bcBaser->crumbs(' &gt; ','ホーム');
}
?>
</ul>