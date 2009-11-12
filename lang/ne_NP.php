<?php

/**
 * Nepali (Nepal) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('ne_NP', $lang) && is_array($lang['ne_NP'])) {
	$lang['ne_NP'] = array_merge($lang['en_US'], $lang['ne_NP']);
} else {
	$lang['ne_NP'] = $lang['en_US'];
}

$lang['ne_NP']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'लिस्टिङ्हरु थपनुहोस्';
$lang['ne_NP']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'लिस्टिङ्हरु खोज्नुहोस्';
$lang['ne_NP']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'परीणाम खोज्नुहोस्';

?>