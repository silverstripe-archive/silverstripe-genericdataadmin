<?php

/**
 * Finnish (Finland) language pack
 * @package modules: genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('fi_FI', $lang) && is_array($lang['fi_FI'])) {
	$lang['fi_FI'] = array_merge($lang['en_US'], $lang['fi_FI']);
} else {
	$lang['fi_FI'] = $lang['en_US'];
}

$lang['fi_FI']['GenericDataAdmin']['CHOOSECRIT'] = 'Ole hyvä ja valitse hakuehto ja paina "Mene".';
$lang['fi_FI']['GenericDataAdmin']['CREATE'] = 'Luo';
$lang['fi_FI']['GenericDataAdmin']['DELETE'] = 'Poista';
$lang['fi_FI']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Poistettu onnistuneesti';
$lang['fi_FI']['GenericDataAdmin']['EXPORTCSV'] = 'Vie CSV:nä';
$lang['fi_FI']['GenericDataAdmin']['FOUND'] = 'löydetty:';
$lang['fi_FI']['GenericDataAdmin']['GO'] = 'Mene';
$lang['fi_FI']['GenericDataAdmin']['SAVE'] = 'Tallenna';
$lang['fi_FI']['GenericDataAdmin']['SAVED'] = 'Tallennettu';
$lang['fi_FI']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Lisää luettelointi';
$lang['fi_FI']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Etsi luettelointeja';
$lang['fi_FI']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Etsinnän tulokset';
$lang['fi_FI']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Tervetuloa ';
$lang['fi_FI']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Ole hyvä ja valitse merkintä vasemmasta paneelista.';

?>