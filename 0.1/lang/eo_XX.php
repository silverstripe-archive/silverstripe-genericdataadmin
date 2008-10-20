<?php

/**
 * Esperanto language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('eo_XX', $lang) && is_array($lang['eo_XX'])) {
	$lang['eo_XX'] = array_merge($lang['en_US'], $lang['eo_XX']);
} else {
	$lang['eo_XX'] = $lang['en_US'];
}

$lang['eo_XX']['GenericDataAdmin']['CREATE'] = 'Krei';
$lang['eo_XX']['GenericDataAdmin']['GO'] = 'Ek';
$lang['eo_XX']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Enmetu Liston';
$lang['eo_XX']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Serĉu listojn';
$lang['eo_XX']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Serĉu rezultojn';

?>