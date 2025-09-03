<?php
/**
 * Smarty postfilter
 *
 * Type:     filter
 * Name:     correct_4pu
 * Purpose:  correct href
 *
 * @param array                    $tpl_source
 *
 * @return array
 * @author Jambik <> idea and creations
 *         alex Roosso <http://www.roocms.com> - mod: added flag noentitys & modifications
 *
 */
function smarty_outputfilter_correct4pu(array $tpl_source) {

	$uri_separator = '/';

	preg_match_all("/<[Aa][\s]{1}[^>]*[Hh][Rr][Ee][Ff][^=]*=[ '\"\s]*([^ \"'>\s#]+)[^>]*>/", $tpl_source, $matches);

	$urls = $matches[1];

	foreach($urls AS $value) {

		if(substr($value, 0, 1) == "/") {
			$od = $value;
			$rd = strtr($value, array('?' => $uri_separator,
						  '&' => $uri_separator,
						  '=' => $uri_separator));

			$tpl_source = str_ireplace($od, $rd, $tpl_source);
		}
	}

	return $tpl_source;
}