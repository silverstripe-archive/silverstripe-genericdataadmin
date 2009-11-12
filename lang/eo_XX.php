<?php

/**
 * Esperanto language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('eo_XX', $lang) && is_array($lang['eo_XX'])) {
	$lang['eo_XX'] = array_merge($lang['en_US'], $lang['eo_XX']);
} else {
	$lang['eo_XX'] = $lang['en_US'];
}

$lang['eo_XX']['GenericDataAdmin']['CHOOSECRIT'] = 'Bonvole elektu ian serĉan kriterion kaj premu je \'Ek\'.';
$lang['eo_XX']['GenericDataAdmin']['CREATE'] = 'Krei';
$lang['eo_XX']['GenericDataAdmin']['DELETE'] = 'Forigi';
$lang['eo_XX']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Sukcesis forigi';
$lang['eo_XX']['GenericDataAdmin']['EXPORTCSV'] = 'Eksporti kiel CSV';
$lang['eo_XX']['GenericDataAdmin']['FOUND'] = 'trovis je:';
$lang['eo_XX']['GenericDataAdmin']['GO'] = 'Ek';
$lang['eo_XX']['GenericDataAdmin']['NORESULTS'] = 'Bedaŭrinde ĉi tiu serĉo trovis nenian %s.';
$lang['eo_XX']['GenericDataAdmin']['SAVE'] = 'Konservi';
$lang['eo_XX']['GenericDataAdmin']['SAVED'] = 'Konservita';
$lang['eo_XX']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Enmeti Liston';
$lang['eo_XX']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Serĉi Listojn';
$lang['eo_XX']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Serĉi Rezultojn';
$lang['eo_XX']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Bonvenon al';
$lang['eo_XX']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Bonvole alklaku iun el la eroj en la maldekstra fenestro.';

?>