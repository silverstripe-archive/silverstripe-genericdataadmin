<?php

/**
 * Bosnian (Bosnia and Herzegovina) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('bs_BA', $lang) && is_array($lang['bs_BA'])) {
	$lang['bs_BA'] = array_merge($lang['en_US'], $lang['bs_BA']);
} else {
	$lang['bs_BA'] = $lang['en_US'];
}

$lang['bs_BA']['GenericDataAdmin']['CHOOSECRIT'] = 'Molimo, izaberite kriterij pretrage i kliknite \'Idi\'.';
$lang['bs_BA']['GenericDataAdmin']['CREATE'] = 'Kreiraj';
$lang['bs_BA']['GenericDataAdmin']['DELETE'] = 'Izbriši';
$lang['bs_BA']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Uspješno izbrisano';
$lang['bs_BA']['GenericDataAdmin']['EXPORTCSV'] = 'Izvezi kao CSV';
$lang['bs_BA']['GenericDataAdmin']['FOUND'] = 'pronađeno:';
$lang['bs_BA']['GenericDataAdmin']['GO'] = 'Idi';
$lang['bs_BA']['GenericDataAdmin']['NORESULTS'] = 'Žao nam je, %s nije pronađeno ovom pretragom.';
$lang['bs_BA']['GenericDataAdmin']['SAVE'] = 'Snimi';
$lang['bs_BA']['GenericDataAdmin']['SAVED'] = 'Snimljeno';
$lang['bs_BA']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Dodaj popis';
$lang['bs_BA']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Pretraži popise';
$lang['bs_BA']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Rezultati pretrage';
$lang['bs_BA']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Dobrodošli u';
$lang['bs_BA']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Molimo, izaberite jedan od unosa sa lijeve strane.';

?>