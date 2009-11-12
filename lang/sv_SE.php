<?php

/**
 * Swedish (Sweden) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('sv_SE', $lang) && is_array($lang['sv_SE'])) {
	$lang['sv_SE'] = array_merge($lang['en_US'], $lang['sv_SE']);
} else {
	$lang['sv_SE'] = $lang['en_US'];
}

$lang['sv_SE']['GenericDataAdmin']['CHOOSECRIT'] = 'Var god och välj någon sökkriterie och klicka på \'sök\'.';
$lang['sv_SE']['GenericDataAdmin']['CREATE'] = 'Skapa';
$lang['sv_SE']['GenericDataAdmin']['DELETE'] = 'Radera';
$lang['sv_SE']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Raderingingen lyckades';
$lang['sv_SE']['GenericDataAdmin']['EXPORTCSV'] = 'Exportera som CSV';
$lang['sv_SE']['GenericDataAdmin']['FOUND'] = 'hittade:';
$lang['sv_SE']['GenericDataAdmin']['GO'] = 'Gå ';
$lang['sv_SE']['GenericDataAdmin']['NORESULTS'] = 'Ledsen, inga %s hittades i sökningen.';
$lang['sv_SE']['GenericDataAdmin']['SAVE'] = 'Spara';
$lang['sv_SE']['GenericDataAdmin']['SAVED'] = 'Sparad';
$lang['sv_SE']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Skapa notering / lista';
$lang['sv_SE']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Sök i noteringar / listor';
$lang['sv_SE']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Sökresultat';
$lang['sv_SE']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Välkommen till';
$lang['sv_SE']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Var god och välj en av inläggen till vänster.';

?>