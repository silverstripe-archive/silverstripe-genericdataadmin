<?php

/**
 * Japanese (Japan) language pack
 * @package modules: genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('ja_JP', $lang) && is_array($lang['ja_JP'])) {
	$lang['ja_JP'] = array_merge($lang['en_US'], $lang['ja_JP']);
} else {
	$lang['ja_JP'] = $lang['en_US'];
}

$lang['ja_JP']['GenericDataAdmin']['CHOOSECRIT'] = '検索条件を選んでから \'Go\' を押してください';
$lang['ja_JP']['GenericDataAdmin']['CREATE'] = '作成';
$lang['ja_JP']['GenericDataAdmin']['DELETE'] = '削除';
$lang['ja_JP']['GenericDataAdmin']['DELETEDSUCCESS'] = '削除しました';
$lang['ja_JP']['GenericDataAdmin']['EXPORTCSV'] = 'CSVファイルにエクスポート';
$lang['ja_JP']['GenericDataAdmin']['FOUND'] = '発見:';
$lang['ja_JP']['GenericDataAdmin']['GO'] = 'へ移動';
$lang['ja_JP']['GenericDataAdmin']['NORESULTS'] = '申し訳ございませんが %s は検索されませんでした';
$lang['ja_JP']['GenericDataAdmin']['SAVE'] = '保存';
$lang['ja_JP']['GenericDataAdmin']['SAVED'] = '保存しました';
$lang['ja_JP']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'リストに追加';
$lang['ja_JP']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'リストの検索';
$lang['ja_JP']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = '検索結果';
$lang['ja_JP']['GenericDataAdmin_right.ss']['WELCOME1'] = 'ようこそ';
$lang['ja_JP']['GenericDataAdmin_right.ss']['WELCOME2'] = '左の枠からエントリーをクリックして選んでください';

?>