<?php
/**
 * ヘッダー
 */
?>
<div class="container">
	<div class="page-header">
		<div class="row-fluid">
			<div class="span7">
			<h1><?php $this->BcBaser->link($this->BcBaser->siteConfig['name'],'/') ?>
				<small>Subtext</small></h1>
			</div>
			<div class="span5 pull-right">
			<?php $this->BcBaser->element('search') ?>
			</div>
		</div>
	</div>
</div><!-- /.container -->
