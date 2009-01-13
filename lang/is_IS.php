<?php

/**
 * Icelandic (Iceland) language pack
 * @package modules: genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('is_IS', $lang) && is_array($lang['is_IS'])) {
	$lang['is_IS'] = array_merge($lang['en_US'], $lang['is_IS']);
} else {
	$lang['is_IS'] = $lang['en_US'];
}

$lang['is_IS']['GenericDataAdmin']['CHOOSECRIT'] = 'Vinsamlegast veldu leita skilyrði og ýttu á \'Framkvæma\'.';
$lang['is_IS']['GenericDataAdmin']['CREATE'] = 'Búa til';
$lang['is_IS']['GenericDataAdmin']['DELETE'] = 'Eyða';
$lang['is_IS']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Eyðing tókst';
$lang['is_IS']['GenericDataAdmin']['EXPORTCSV'] = 'Flytja út sem CSV';
$lang['is_IS']['GenericDataAdmin']['FOUND'] = 'fann:';
$lang['is_IS']['GenericDataAdmin']['GO'] = 'Framkvæma';
$lang['is_IS']['GenericDataAdmin']['NORESULTS'] = 'Því miður, engin %s fundust með þessari leit';
$lang['is_IS']['GenericDataAdmin']['SAVE'] = 'Vista';
$lang['is_IS']['GenericDataAdmin']['SAVED'] = 'Vistað';
$lang['is_IS']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Bæta við Listun';
$lang['is_IS']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Leita Listun';
$lang['is_IS']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Leitar niðurstöður';
$lang['is_IS']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Velkomin(n) á';

?>