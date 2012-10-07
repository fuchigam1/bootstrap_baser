<?php
/**
 * [PUBLISH] ブログ カテゴリー一覧
 * 
 */
if(empty($view_count)) {
	$view_count = '0';
}
if(empty($limit)) {
	$limit = '0';
}
if(!isset($by_year)) {
	$by_year = null;
}
if(isset($blogContent)){
	$id = $blogContent['BlogContent']['id'];
}else{
	$id = $blog_content_id;
}
if(empty($depth)) {
	$depth = 1;
}
$actionUrl = '/blog/blog/get_categories/'.$id.'/'.$limit.'/'.$view_count.'/'.$depth;
if($by_year) {
	$actionUrl .= '/year';
}
$data = $this->requestAction($actionUrl);
$categories = $data['categories'];
$this->viewVars['blogContent'] = $data['blogContent'];
App::import('Helper','Blog.Blog');
$blog = new BlogHelper();
?>
<div class="widget widget-blog-categories-archives widget-blog-categories-archives-<?php echo $id ?> blog-widget">
<?php if($name && $use_title): ?>
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo $name ?></li>
	</ul>
<?php endif ?>
<?php if($by_year): ?>
	<ul class="nav nav-list">
	<?php foreach($categories as $key => $category): ?>
		<li class="category-year"><span><?php $bcBaser->link($key.'年', array('plugin' => null, 'controller' => $blogContent['BlogContent']['name'], 'action' => 'archives', 'date', $key)) ?></span>
		<?php echo $blog->getCategoryList($category, $depth, $view_count, array('named' => array('year' => $key))) ?>
		</li>
	<?php endforeach ?>
	</ul>
<?php else: ?>
	<?php echo $blog->getCategoryList($categories, $depth, $view_count) ?>
<?php endif ?>
</div>
