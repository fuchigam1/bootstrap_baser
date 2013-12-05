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
	$crumbs = $this->BcBaser->getCrumbs();
	if (!empty($crumbs)){
		foreach($crumbs as $key => $crumb){
			if($this->BcArray->last($crumbs, $key+1)) {
				if($crumbs[$key+1]['name'] == $crumb['name']) {
					continue;
				}
			}
			if($this->BcArray->last($crumbs, $key)) {
				if ($this->viewPath != 'home' && $crumb['name']){
					$this->BcBaser->addCrumb('<li class="active">'.$crumb['name'].'</li>');
				}elseif($this->name == 'CakeError'){
					$this->BcBaser->addCrumb('<li class="active">404 NOT FOUND</li>');
				}
			} else {
				$this->BcBaser->addCrumb($crumb['name'], $crumb['url']);
			}
		}
	}
	$this->BcBaser->crumbs(' &gt; ','ホーム');
}
?>
</ul>