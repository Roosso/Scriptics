<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 * @author alex Roosso <http://www.roocms.com>
 */


/**
 * Highlights a text by searching a word in it.
 *
 * ! add in your css mark object
 *
 * @param string $text - text fo handle
 * @param string $word - highlight word
 *
 * @return string|string[]|null
 */
function smarty_modifier_highlight(string &$text='', string $word='') {

	if($word) {
		$word = preg_quote($word);
		$text = preg_replace('/('.$word.')/iu', '<mark>\1</mark>', $text);
	}

	return($text);
}
