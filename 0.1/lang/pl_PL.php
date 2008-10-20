<?php

/**
 * Polish (Poland) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('pl_PL', $lang) && is_array($lang['pl_PL'])) {
	$lang['pl_PL'] = array_merge($lang['en_US'], $lang['pl_PL']);
} else {
	$lang['pl_PL'] = $lang['en_US'];
}

$lang['pl_PL']['GenericDataAdmin']['CHOOSECRIT'] = 'Dodaj kryteria wyszukiwania i naciśnij \'Idź\'.';
$lang['pl_PL']['GenericDataAdmin']['CREATE'] = 'Utwórz';
$lang['pl_PL']['GenericDataAdmin']['DELETE'] = 'Usuń';
$lang['pl_PL']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Pomyślnie usunięto';
$lang['pl_PL']['GenericDataAdmin']['EXPORTCSV'] = 'Eksportuj jako CSV';
$lang['pl_PL']['GenericDataAdmin']['FOUND'] = 'znaleziono:';
$lang['pl_PL']['GenericDataAdmin']['GO'] = 'Idź';
$lang['pl_PL']['GenericDataAdmin']['NORESULTS'] = 'Niestety, żadne %s nie zostały znalezione dla tego wyszukiwania.';
$lang['pl_PL']['GenericDataAdmin']['SAVE'] = 'Zapisz';
$lang['pl_PL']['GenericDataAdmin']['SAVED'] = 'Zapisano';
$lang['pl_PL']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Dodaj listę';
$lang['pl_PL']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Szukaj listy';
$lang['pl_PL']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Rezultat wyszukiwania';
$lang['pl_PL']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Witaj w ';
$lang['pl_PL']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Wybierz jeden z wpisów na liście po lewej';

?>