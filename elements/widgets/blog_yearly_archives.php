<?php
/**
 * [PUBLISH] ブログ 年別アーカイブ
 * 
 */
if(!isset($view_count)) {
	$view_count = false;
}
if(!isset($limit)) {
	$limit = false;
}
if(isset($blogContent)){
	$id = $blogContent['BlogContent']['id'];
}else{
	$id = $blog_content_id;
}
$actionUrl = '/blog/blog/get_posted_years/'.$id;
if($limit) {
	$actionUrl .= '/'.$limit;
} else {
	$actionUrl .= '/0';
}
if($view_count) {
	$actionUrl .= '/1';
}
$data = $this->requestAction($actionUrl);
$postedDates = $data['postedDates'];
$blogContent = $data['blogContent'];
$baseCurrentUrl = $blogContent['BlogContent']['name'].'/archives/date/';
?>
<div class="widget widget-blog-yearly-archives widget-blog-yearly-archives-<?php echo $id ?> blog-widget">
<?php if($name && $use_title): ?>
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo $name ?></li>
	</ul>
<?php endif ?>
	<?php if(!empty($postedDates)): ?>
	<ul class="nav nav-list">
		<?php foreach($postedDates as $postedDate): ?>
			<?php if(isset($this->params['named']['year']) && $this->params['named']['year'] == $postedDate['year']): ?>
				<?php $class = ' class="selected"' ?>
			<?php elseif($this->params['url']['url'] == $baseCurrentUrl.$postedDate['year']): ?>
				<?php $class = ' class="current"' ?>
			<?php else: ?>
				<?php $class = '' ?>
			<?php endif ?>
			<?php if($view_count): ?>
				<?php $title = $postedDate['year'].'年'.'('.$postedDate['count'].')' ?>
			<?php else: ?>
				<?php $title = $postedDate['year'].'年' ?>
			<?php endif ?>
		<li<?php echo $class ?>>
			<?php $bcBaser->link($title, array(
				'admin'			=> false, 
				'plugin'		=> '', 
				'controller'	=> $blogContent['BlogContent']['name'], 
				'action'		=> 'archives', 
				'date', $postedDate['year']
			)) ?>
		</li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>
