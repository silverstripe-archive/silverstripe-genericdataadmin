<?php

/**
 * Danish (Denmark) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('da_DK', $lang) && is_array($lang['da_DK'])) {
	$lang['da_DK'] = array_merge($lang['en_US'], $lang['da_DK']);
} else {
	$lang['da_DK'] = $lang['en_US'];
}

$lang['da_DK']['GenericDataAdmin']['CHOOSECRIT'] = 'Vælge venligst dine søgekriterier og tryk OK.
';
$lang['da_DK']['GenericDataAdmin']['CREATE'] = 'Opret';
$lang['da_DK']['GenericDataAdmin']['DELETE'] = 'Slet';
$lang['da_DK']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Succesfuldt slettet';
$lang['da_DK']['GenericDataAdmin']['EXPORTCSV'] = 'Eksporter som CSV';
$lang['da_DK']['GenericDataAdmin']['FOUND'] = 'Fundet:';
$lang['da_DK']['GenericDataAdmin']['GO'] = 'OK';
$lang['da_DK']['GenericDataAdmin']['NORESULTS'] = 'Desværre, %S blev ikke fundet';
$lang['da_DK']['GenericDataAdmin']['SAVE'] = 'Gem';
$lang['da_DK']['GenericDataAdmin']['SAVED'] = 'Gemt';
$lang['da_DK']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Tilføj kategori';
$lang['da_DK']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Søgekategori';
$lang['da_DK']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Søgeresultater';
$lang['da_DK']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Velkommen til';

?>