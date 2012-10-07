<?php
/**
 * デフォルトレイアウト
 */
?>
<?php $bcBaser->docType('html5') ?>
<html>
<head>
<?php $bcBaser->charset() ?>
<?php $bcBaser->title() ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $bcBaser->metaDescription() ?>
<?php $bcBaser->metaKeywords() ?>
<?php $bcBaser->icon() ?>
<?php $bcBaser->rss('新着情報 RSS 2.0', '/news/index.rss') ?>
<?php $bcBaser->css(array('import', 'adjustment', 'colorbox/colorbox')) ?>
<?php $bcBaser->js(array(
	'jquery-1.8.1.min',
	'bootstrap.min',
	'jquery.colorbox-min',
	'yuga',
	'startup'
)) ?>
<?php $bcBaser->js(array(
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
<?php $bcBaser->scripts() ?>
<?php $bcBaser->element('google_analytics') ?>
</head>
<body id="<?php $bcBaser->contentsName() ?>">
<?php $bcBaser->header() ?>

<div class="container">
	<div class="row-fluid">
	<?php $bcBaser->element('sidebar') ?>

		<div class="span9">
			<?php if(!$bcBaser->isTop()): ?>
			<div id="navigation">
				<?php $bcBaser->element('crumbs'); ?>
			</div>
			<?php endif ?>

			<?php $bcBaser->flash() ?>
			<div id="ContentsBody">
				<?php if($bcBaser->isTop()) : ?>
				<div class="hero-unit">
					<h1>Hello, world!</h1>
					<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
					<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
				</div>
				<?php endif ?>

				<?php $bcBaser->content() ?>
				<?php $bcBaser->element('contents_navi') ?>
			</div><!--/#ContentsBody -->

		</div><!--/span-->
	</div><!--/row-->

	<?php $bcBaser->footer() ?>
	</div><!--/.container-->
<?php $bcBaser->func() ?>
</body>
</html>