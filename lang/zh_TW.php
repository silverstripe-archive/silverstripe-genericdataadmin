<?php

/**
 * Chinese (Taiwan) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('zh_TW', $lang) && is_array($lang['zh_TW'])) {
	$lang['zh_TW'] = array_merge($lang['en_US'], $lang['zh_TW']);
} else {
	$lang['zh_TW'] = $lang['en_US'];
}

$lang['zh_TW']['GenericDataAdmin_left.ss']['ADDLISTING'] = '新增列表';
$lang['zh_TW']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = '搜尋列表';
$lang['zh_TW']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = '搜尋結果';

?>