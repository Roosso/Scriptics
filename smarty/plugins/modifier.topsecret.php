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
 * @return string
 */
function smarty_modifier_topsecret(string $text='') {

	return preg_replace('/\pL/u', '&#9618;', $text) ?? $text;
}
