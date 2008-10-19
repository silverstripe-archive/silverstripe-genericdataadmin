<?php

/**
 * Hungarian (Hungary) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('hu_HU', $lang) && is_array($lang['hu_HU'])) {
	$lang['hu_HU'] = array_merge($lang['en_US'], $lang['hu_HU']);
} else {
	$lang['hu_HU'] = $lang['en_US'];
}

$lang['hu_HU']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Listázás hozzáadása';
$lang['hu_HU']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Listázások keresése';
$lang['hu_HU']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Kereséseredmények';

?>