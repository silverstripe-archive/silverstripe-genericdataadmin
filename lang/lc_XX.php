<?php

/**
 * LOLCAT language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('lc_XX', $lang) && is_array($lang['lc_XX'])) {
	$lang['lc_XX'] = array_merge($lang['en_US'], $lang['lc_XX']);
} else {
	$lang['lc_XX'] = $lang['en_US'];
}

$lang['lc_XX']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'ADD TEH LISTING';
$lang['lc_XX']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'SEARCH LISTINGZ';
$lang['lc_XX']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'SEARCH REZULTZ';

?>