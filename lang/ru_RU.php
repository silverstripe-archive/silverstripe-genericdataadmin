<?php

/**
 * Russian (Russia) language pack
 * @package modules: genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('ru_RU', $lang) && is_array($lang['ru_RU'])) {
	$lang['ru_RU'] = array_merge($lang['en_US'], $lang['ru_RU']);
} else {
	$lang['ru_RU'] = $lang['en_US'];
}

$lang['ru_RU']['GenericDataAdmin']['CHOOSECRIT'] = 'Пожалуйста, выберите критерии поиска и нажмите "Выполнить".';
$lang['ru_RU']['GenericDataAdmin']['CREATE'] = 'Создать';
$lang['ru_RU']['GenericDataAdmin']['DELETE'] = 'Удалить';
$lang['ru_RU']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Успешно удалено';
$lang['ru_RU']['GenericDataAdmin']['EXPORTCSV'] = 'Експорт в CSV';
$lang['ru_RU']['GenericDataAdmin']['FOUND'] = 'найдено:';
$lang['ru_RU']['GenericDataAdmin']['GO'] = 'Выполнить';
$lang['ru_RU']['GenericDataAdmin']['NORESULTS'] = 'Извините, поиск %s не дал результатов.';
$lang['ru_RU']['GenericDataAdmin']['SAVE'] = 'Сохранить';
$lang['ru_RU']['GenericDataAdmin']['SAVED'] = 'Сохранено';
$lang['ru_RU']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Создать перечень';
$lang['ru_RU']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Найти в перечнях';
$lang['ru_RU']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Найти в результатах';
$lang['ru_RU']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Добро пожаловать в';
$lang['ru_RU']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Пожалуйста, выберите одну из записей в левой панели.';

?>