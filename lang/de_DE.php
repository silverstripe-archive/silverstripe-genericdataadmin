<?php

/**
 * German (Germany) language pack
 * @package modules: genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('de_DE', $lang) && is_array($lang['de_DE'])) {
	$lang['de_DE'] = array_merge($lang['en_US'], $lang['de_DE']);
} else {
	$lang['de_DE'] = $lang['en_US'];
}

$lang['de_DE']['GenericDataAdmin']['CHOOSECRIT'] = 'Bitte wählen Sie einige Suchkriterien aus und drücken Sie "Start"';
$lang['de_DE']['GenericDataAdmin']['CREATE'] = 'Erstellen';
$lang['de_DE']['GenericDataAdmin']['DELETE'] = 'Löschen';
$lang['de_DE']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Erfolgreich gelöscht';
$lang['de_DE']['GenericDataAdmin']['EXPORTCSV'] = 'Exportieren als CSV';
$lang['de_DE']['GenericDataAdmin']['FOUND'] = 'gefunden:';
$lang['de_DE']['GenericDataAdmin']['GO'] = 'Los';
$lang['de_DE']['GenericDataAdmin']['NORESULTS'] = 'Entschuldigung, es wurde kein %s bei dieser Suche gefunden.';
$lang['de_DE']['GenericDataAdmin']['SAVE'] = 'Speichern';
$lang['de_DE']['GenericDataAdmin']['SAVED'] = 'Gespeichert';
$lang['de_DE']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Listing hinzufügen';
$lang['de_DE']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Durchsuche Listings';
$lang['de_DE']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Suche Ergebnisse';
$lang['de_DE']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Willkommen zu';
$lang['de_DE']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Bitte klicken Sie auf einen der Einträge die auf der linken Seite angezeigt werden.';

?>