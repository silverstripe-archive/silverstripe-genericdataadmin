<?php

/**
 * Dutch (Netherlands) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('nl_NL', $lang) && is_array($lang['nl_NL'])) {
	$lang['nl_NL'] = array_merge($lang['en_US'], $lang['nl_NL']);
} else {
	$lang['nl_NL'] = $lang['en_US'];
}

$lang['nl_NL']['GenericDataAdmin']['CHOOSECRIT'] = 'Gelieve uw zoekcriteria te selecteren en druk op \'Go\'.';
$lang['nl_NL']['GenericDataAdmin']['CREATE'] = 'Maak aan';
$lang['nl_NL']['GenericDataAdmin']['DELETE'] = 'Verwijder';
$lang['nl_NL']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Met succes verwijderd';
$lang['nl_NL']['GenericDataAdmin']['EXPORTCSV'] = 'Exporteer als CSV';
$lang['nl_NL']['GenericDataAdmin']['FOUND'] = 'gevonden:';
$lang['nl_NL']['GenericDataAdmin']['GO'] = 'Go';
$lang['nl_NL']['GenericDataAdmin']['NORESULTS'] = 'Sorry, deze zoektocht leverde geen %s op.';
$lang['nl_NL']['GenericDataAdmin']['SAVE'] = 'Bewaren';
$lang['nl_NL']['GenericDataAdmin']['SAVED'] = 'Bewaard';
$lang['nl_NL']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Lijst toevoegen';
$lang['nl_NL']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Zoek lijsten';
$lang['nl_NL']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Zoekresultaten';
$lang['nl_NL']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Welkom bij';
$lang['nl_NL']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Gelieve op één van de elementen in het linkerpaneel te klikken';

?>