<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 * @author Jambik <> idea and creations
 *         alex Roosso <http://www.roocms.com> - mod: added flag noentitys & modifications
 */

/**
 * Smarty {get_params} function plugin
 *
 * Type:     function
 * Name:     get_params
 * Purpose:  generate get parameters
 * Input:
 *         - prefix  = before string
 *         - suffix  = after string
 *         - exclude = GET params wich should be excluded
 *
 * @param array   $params   parameters
 *
 * @return string
 *@author Jambik <> idea and creations
 *         alex Roosso <http://www.roocms.com> - mod: added flag noentitys & modifications
 *
 */
function smarty_function_get_params(array $params) {

	$prefix = isset($params['prefix']) ? trim($params['prefix']) : "";
	$suffix = isset($params['suffix']) ? trim($params['suffix']) : "";
	$excludeParams = isset($params['exclude']) ? trim($params['exclude']) : "";
	$noentity = isset($params['noentity']) ? true : false;

	$output = "";
	
	$excludeParams = explode(",", $excludeParams);
	foreach($excludeParams as $key => $value) {
		$excludeParams[$key] = trim($value);
	}

	if($_GET) {
		$entity = $noentity ? "&" : "&amp;";
		foreach($_GET as $key=>$value) {
			if(!in_array((string) $key, $excludeParams, true)) {
				// http_build_query url-encodes keys and values (arrays included),
				// so user input can not break out of the attribute or inject markup
				$query = http_build_query(array($key => $value), '', $entity, PHP_QUERY_RFC3986);
				if($query !== '') {
					$output .= $entity.$query;
				}
			}
		}
	}

	$output = $prefix.$output.$suffix;

	return $output;
}
