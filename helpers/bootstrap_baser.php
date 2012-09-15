<?php
class BootstrapBaserHelper extends AppHelper {

/**
 * タグを出力する
 *
 * @param array $post
 * @param string $separator
 * @return void
 * @access public
 * <a href="#"><span class="label label-info">Snipp</span></a> 
 */
	function tag($tags, $separator = ',') {

		$tagLinks = explode($separator, $tags);

		if($tagLinks) {

			foreach ($tagLinks as $key => $tagLink) {
				$replace = '<span class="label label-info">{$1}</span>';
				$tagLinks[$key] = preg_replace('/^<a.*\">($1)<\/a>/', $replace, $tagLink);
			}

			echo implode($separator, $tagLinks);
		} else {
			echo '';
		}

	}

}
