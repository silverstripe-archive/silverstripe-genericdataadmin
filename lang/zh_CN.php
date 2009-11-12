<?php

/**
 * Chinese (China) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('zh_CN', $lang) && is_array($lang['zh_CN'])) {
	$lang['zh_CN'] = array_merge($lang['en_US'], $lang['zh_CN']);
} else {
	$lang['zh_CN'] = $lang['en_US'];
}

$lang['zh_CN']['GenericDataAdmin']['CREATE'] = '建立';
$lang['zh_CN']['GenericDataAdmin']['DELETE'] = '删除';
$lang['zh_CN']['GenericDataAdmin']['EXPORTCSV'] = '导出为 CSV';
$lang['zh_CN']['GenericDataAdmin']['FOUND'] = '找到：';
$lang['zh_CN']['GenericDataAdmin']['GO'] = 'GO';
$lang['zh_CN']['GenericDataAdmin']['SAVE'] = '保存';
$lang['zh_CN']['GenericDataAdmin_left.ss']['ADDLISTING'] = '新建列表项';
$lang['zh_CN']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = '搜索列表';
$lang['zh_CN']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = '搜索结果';

?>