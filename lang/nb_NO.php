<?php

/**
 * Norwegian Bokmal (Norway) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('nb_NO', $lang) && is_array($lang['nb_NO'])) {
	$lang['nb_NO'] = array_merge($lang['en_US'], $lang['nb_NO']);
} else {
	$lang['nb_NO'] = $lang['en_US'];
}

$lang['nb_NO']['GenericDataAdmin']['CHOOSECRIT'] = 'Vennligst fyll inn søkekriterier og trykk \'Utfør\'.';
$lang['nb_NO']['GenericDataAdmin']['CREATE'] = 'Opprett';
$lang['nb_NO']['GenericDataAdmin']['DELETE'] = 'Slett';
$lang['nb_NO']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Slettet';
$lang['nb_NO']['GenericDataAdmin']['EXPORTCSV'] = 'Eksporter som CSV';
$lang['nb_NO']['GenericDataAdmin']['FOUND'] = 'fant:';
$lang['nb_NO']['GenericDataAdmin']['GO'] = 'Utfør';
$lang['nb_NO']['GenericDataAdmin']['NORESULTS'] = 'Beklager, fant ingen %s med dette søket.';
$lang['nb_NO']['GenericDataAdmin']['SAVE'] = 'Lagre';
$lang['nb_NO']['GenericDataAdmin']['SAVED'] = 'Lagret';
$lang['nb_NO']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Legg til lister';
$lang['nb_NO']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Søkelister';
$lang['nb_NO']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Søkeresultater';
$lang['nb_NO']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Velkommen til';
$lang['nb_NO']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Vennligst velg et av oppføringene i venstre panel.';

?>