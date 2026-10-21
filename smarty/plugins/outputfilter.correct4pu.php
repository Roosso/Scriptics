<?php
/**
 * Smarty output filter
 *
 * Type:     outputfilter
 * Name:     correct4pu
 * Purpose:  correct href
 *
 * Register: $smarty->loadFilter('output', 'correct4pu');
 *
 * @param array $tpl_source
 *
 * @return array
 * @author Jambik <> idea and creations
 *         alex Roosso <http://www.roocms.com> - mod: added flag noentitys & modifications
 *
 */
function smarty_outputfilter_correct4pu(array $tpl_source) {

	$uri_separator = '/';

	// only the href value of local links (starting with a single "/") is touched
	$correct = function(array $m) use ($uri_separator) {
		return $m[1].strtr($m[2], array('&amp;' => $uri_separator,
						'?'     => $uri_separator,
						'&'     => $uri_separator,
						'='     => $uri_separator));
	};

	// $tpl_source is an array: every element is processed, keys are preserved
	foreach($tpl_source as $key => $source) {
		if(is_string($source)) {
			$tpl_source[$key] = preg_replace_callback("/(<a\s[^>]*?href\s*=\s*[\"']?)(\/(?!\/)[^\"'>\s#]*)/i", $correct, $source) ?? $source;
		}
	}

	return $tpl_source;
}
