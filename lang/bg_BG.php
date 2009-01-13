<?php

/**
 * Bulgarian (Bulgaria) language pack
 * @package modules: genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('bg_BG', $lang) && is_array($lang['bg_BG'])) {
	$lang['bg_BG'] = array_merge($lang['en_US'], $lang['bg_BG']);
} else {
	$lang['bg_BG'] = $lang['en_US'];
}

$lang['bg_BG']['GenericDataAdmin']['CHOOSECRIT'] = 'Моля изберете някаква критерия за търсене и натиснете \'Давай\'. ';
$lang['bg_BG']['GenericDataAdmin']['CREATE'] = 'Създай';
$lang['bg_BG']['GenericDataAdmin']['DELETE'] = 'Изтрий';
$lang['bg_BG']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Успешно изтрито';
$lang['bg_BG']['GenericDataAdmin']['EXPORTCSV'] = 'Експортирай като CSV';
$lang['bg_BG']['GenericDataAdmin']['FOUND'] = 'намерено:';
$lang['bg_BG']['GenericDataAdmin']['GO'] = 'Давай';
$lang['bg_BG']['GenericDataAdmin']['NORESULTS'] = 'Съжелявам, няма намерено %s в това търсене.';
$lang['bg_BG']['GenericDataAdmin']['SAVE'] = 'Съхрани';
$lang['bg_BG']['GenericDataAdmin']['SAVED'] = 'Съхранено';
$lang['bg_BG']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Добави списък';
$lang['bg_BG']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Търси списъци';
$lang['bg_BG']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Търси резултати';
$lang['bg_BG']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Добре дошли в';
$lang['bg_BG']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Моля кликнете върхо едно от вписванията на левия панел.';

?>