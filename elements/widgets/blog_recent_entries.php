<?php
/**
 * [PUBLISH] ブログ 最近の投稿
 * 
 */
if(!isset($count)) {
	$count = 5;
}
if(isset($blogContent)){
	$id = $blogContent['BlogContent']['id'];
}else{
	$id = $blog_content_id;
}
$data = $this->requestAction('/blog/blog/get_recent_entries/'.$id.'/'.$count);
$recentEntries = $data['recentEntries'];
$blogContent = $data['blogContent'];
$baseCurrentUrl = $blogContent['BlogContent']['name'].'/archives/';
?>
<div class="widget widget-blog-recent-entries widget-blog-recent-entries-<?php echo $id ?> blog-widget">
<?php if($name && $use_title): ?>
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo $name ?></li>
	</ul>
<?php endif ?>
	<?php if($recentEntries): ?>
	<ul class="nav nav-list">
		<?php foreach($recentEntries as $recentEntry): ?>
			<?php if($this->params['url']['url'] == $baseCurrentUrl.$recentEntry['BlogPost']['no']): ?>
				<?php $class = ' class="current"' ?>
			<?php else: ?>
				<?php $class = '' ?>
			<?php endif ?>
		<li<?php echo $class ?>>
			<?php $bcBaser->link($recentEntry['BlogPost']['name'],array('admin'=>false,'plugin'=>'','controller'=>$blogContent['BlogContent']['name'],'action'=>'archives',$recentEntry['BlogPost']['no'])) ?>
		</li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>
