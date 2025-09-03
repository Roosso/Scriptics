<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 * @author alex Roosso <http://www.roocms.com>
 */


/**
 * Hide all symbolds
 *
 * @param string $text - text fo handle
 *
 * @return string|string[]|null
 */
function smarty_modifier_topsecret(string &$text='') {

	$text = preg_replace('/(\pL)/iu', '&#9618;', $text);

	return($text);
}
