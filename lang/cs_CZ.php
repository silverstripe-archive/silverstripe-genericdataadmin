<?php

/**
 * Czech (Czech Republic) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('cs_CZ', $lang) && is_array($lang['cs_CZ'])) {
	$lang['cs_CZ'] = array_merge($lang['en_US'], $lang['cs_CZ']);
} else {
	$lang['cs_CZ'] = $lang['en_US'];
}

$lang['cs_CZ']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Přidat seznam';
$lang['cs_CZ']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Hledat v seznamech';
$lang['cs_CZ']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Výsledky hledání';

?>