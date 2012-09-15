<?php
/**
 * サイドバー
 */
?>
<div class="span3">

	<div class="well sidebar-nav">
		<?php $bcBaser->element('global_menu') ?>
		<ul class="nav nav-list">
			<li class="nav-header">Sidebar</li>
			<li class="active"><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
		</ul>
	</div><!--/.well -->

<?php if(!empty($widgetArea)): ?>
	<?php $bcBaser->element('widget_area',array('no'=>$widgetArea)) ?>
<?php endif ?>

</div><!--/span-->
