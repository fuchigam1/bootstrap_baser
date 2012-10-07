<?php
class BootstrapBaserHelper extends AppHelper {

/**
 * タグを出力する
 *
 * @param array $post
 * @param string $separator
 * @return void
 * @access public
 * 
 */
	function tag($tags, $options = array()) {

		$options = array_merge(
			array('separator' => ','),
			$options
		);
		$tagLinks = explode($options['separator'], $tags);

		if($tagLinks) {

			foreach ($tagLinks as $key => $tagLink) {
				$tagLinks[$key] = '<span class="tag-separate"><i class="icon-tag"></i>' . $tagLink . '</span>';
			}

			echo implode($options['separator'], $tagLinks);
		} else {
			echo '';
		}

	}

}
