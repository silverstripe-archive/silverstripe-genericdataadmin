<?php

/**
 * Ukrainian (Ukraine) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('uk_UA', $lang) && is_array($lang['uk_UA'])) {
	$lang['uk_UA'] = array_merge($lang['en_US'], $lang['uk_UA']);
} else {
	$lang['uk_UA'] = $lang['en_US'];
}

$lang['uk_UA']['GenericDataAdmin']['CREATE'] = 'Створити';
$lang['uk_UA']['GenericDataAdmin']['DELETE'] = 'Видалити';
$lang['uk_UA']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Успішно видалено';
$lang['uk_UA']['GenericDataAdmin']['EXPORTCSV'] = 'Ексортувати як CSV';
$lang['uk_UA']['GenericDataAdmin']['FOUND'] = 'знайдено:';
$lang['uk_UA']['GenericDataAdmin']['GO'] = 'Далі';
$lang['uk_UA']['GenericDataAdmin']['SAVE'] = 'Зберегти';
$lang['uk_UA']['GenericDataAdmin']['SAVED'] = 'Збережено';
$lang['uk_UA']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Додати Список';
$lang['uk_UA']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Шукати у Списках';
$lang['uk_UA']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Результати Пошуку';

?>