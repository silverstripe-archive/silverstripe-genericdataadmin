<?php

/**
 * Serbian (Serbia) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('sr_RS', $lang) && is_array($lang['sr_RS'])) {
	$lang['sr_RS'] = array_merge($lang['en_US'], $lang['sr_RS']);
} else {
	$lang['sr_RS'] = $lang['en_US'];
}

$lang['sr_RS']['GenericDataAdmin']['CHOOSECRIT'] = 'Изаберите неки критеријум за претрагу и кликните на \'Иди\'.';
$lang['sr_RS']['GenericDataAdmin']['CREATE'] = 'Направи';
$lang['sr_RS']['GenericDataAdmin']['DELETE'] = 'Обриши';
$lang['sr_RS']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Успешно обрисано';
$lang['sr_RS']['GenericDataAdmin']['EXPORTCSV'] = 'Извези у CSV';
$lang['sr_RS']['GenericDataAdmin']['FOUND'] = 'пронађено:';
$lang['sr_RS']['GenericDataAdmin']['GO'] = 'Иди';
$lang['sr_RS']['GenericDataAdmin']['SAVE'] = 'Сачувај';
$lang['sr_RS']['GenericDataAdmin']['SAVED'] = 'Сачувано';
$lang['sr_RS']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Додај листинг';
$lang['sr_RS']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Претражи листинге';
$lang['sr_RS']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Резултати претраге';
$lang['sr_RS']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Добродошли у';

?>