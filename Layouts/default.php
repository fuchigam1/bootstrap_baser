<?php
/**
 * デフォルトレイアウト
 */
?>
<?php $this->BcBaser->docType('html5') ?>
<html>
<head>
<?php $this->BcBaser->charset() ?>
<?php $this->BcBaser->title() ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $this->BcBaser->metaDescription() ?>
<?php $this->BcBaser->metaKeywords() ?>
<?php $this->BcBaser->icon() ?>
<?php $this->BcBaser->rss('新着情報 RSS 2.0', '/news/index.rss') ?>
<?php $this->BcBaser->css(array('import', 'adjustment', 'colorbox/colorbox')) ?>
<?php $this->BcBaser->js(array(
	'jquery-1.8.1.min',
	'bootstrap.min',
	'jquery.colorbox-min',
	'yuga',
	'startup'
)) ?>
<?php $this->BcBaser->js(array(
	'bootstrap-transition',
	'bootstrap-alert',
	'bootstrap-modal',
	'bootstrap-dropdown',
	'bootstrap-scrollspy',
	'bootstrap-tab',
	'bootstrap-tooltip',
	'bootstrap-popover',
	'bootstrap-button',
	'bootstrap-collapse',
	'bootstrap-carousel',
	'bootstrap-typeahead'
)) ?>
<?php $this->BcBaser->scripts() ?>
<?php $this->BcBaser->element('google_analytics') ?>
</head>
<body id="<?php $this->BcBaser->contentsName() ?>">
<?php $this->BcBaser->header() ?>

<div class="container">
	<div class="row-fluid">
	<?php $this->BcBaser->element('sidebar') ?>

		<div class="span9">
			<?php if(!$this->BcBaser->isTop()): ?>
			<div id="navigation">
				<?php $this->BcBaser->element('crumbs'); ?>
			</div>
			<?php endif ?>

			<?php $this->BcBaser->flash() ?>
			<div id="ContentsBody">
				<?php if($this->BcBaser->isTop()) : ?>
				<div class="hero-unit">
					<h1>Hello, world!</h1>
					<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
					<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
				</div>
				<?php endif ?>

				<?php $this->BcBaser->content() ?>
				<?php $this->BcBaser->element('contents_navi') ?>
			</div><!--/#ContentsBody -->

		</div><!--/span-->
	</div><!--/row-->

	<?php $this->BcBaser->footer() ?>
	</div><!--/.container-->
<?php $this->BcBaser->func() ?>
</body>
</html>