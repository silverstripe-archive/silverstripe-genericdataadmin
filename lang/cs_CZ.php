<?php

/**
 * Czech (Czech Republic) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('cs_CZ', $lang) && is_array($lang['cs_CZ'])) {
	$lang['cs_CZ'] = array_merge($lang['en_US'], $lang['cs_CZ']);
} else {
	$lang['cs_CZ'] = $lang['en_US'];
}

$lang['cs_CZ']['GenericDataAdmin']['CHOOSECRIT'] = 'Prosíme vyberte některé z vyhledávacích kritérií a stiskněte \'Přejít\'';
$lang['cs_CZ']['GenericDataAdmin']['CREATE'] = 'Vytvořit';
$lang['cs_CZ']['GenericDataAdmin']['DELETE'] = 'Odstranit';
$lang['cs_CZ']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Úspěšně odstraněno';
$lang['cs_CZ']['GenericDataAdmin']['EXPORTCSV'] = 'Exportovat jako soubor CSV';
$lang['cs_CZ']['GenericDataAdmin']['FOUND'] = 'nalezeno:';
$lang['cs_CZ']['GenericDataAdmin']['GO'] = 'Přejít';
$lang['cs_CZ']['GenericDataAdmin']['NORESULTS'] = '%s nebylo nalezeno.';
$lang['cs_CZ']['GenericDataAdmin']['SAVE'] = 'Uložit';
$lang['cs_CZ']['GenericDataAdmin']['SAVED'] = 'Uloženo';
$lang['cs_CZ']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Přidat seznam';
$lang['cs_CZ']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Hledat v seznamech';
$lang['cs_CZ']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Výsledky hledání';
$lang['cs_CZ']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Vítejte v';
$lang['cs_CZ']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Vyberte prosím jeden ze článků v levém panelu.';

?>