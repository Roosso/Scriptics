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
 * @param string $text   - text fo handle
 * @param string $word   - highlight word
 * @param bool   $escape - escape html in text (default true). Pass false only for trusted html.
 *
 * @return string
 */
function smarty_modifier_highlight(string $text='', string $word='', bool $escape=true) {

	if($escape) {
		$text = htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
		$word = htmlspecialchars($word, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
	}

	if($word !== '') {
		$word = preg_quote($word, '/');
		$text = preg_replace('/('.$word.')/iu', '<mark>\1</mark>', $text) ?? $text;
	}

	return $text;
}
