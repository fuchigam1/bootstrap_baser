<?php
/**
 * サイドバー
 */
?>
<div class="span3">

	<div class="well sidebar-nav">
		<?php $this->BcBaser->element('global_menu') ?>
	</div><!--/.well -->

<?php if(!empty($widgetArea)): ?>
	<?php $this->BcBaser->element('widget_area',array('no'=>$widgetArea)) ?>
<?php endif ?>

</div><!--/span-->
