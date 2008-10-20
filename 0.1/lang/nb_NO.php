<?php

/**
 * Norwegian Bokmal (Norway) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('nb_NO', $lang) && is_array($lang['nb_NO'])) {
	$lang['nb_NO'] = array_merge($lang['en_US'], $lang['nb_NO']);
} else {
	$lang['nb_NO'] = $lang['en_US'];
}

$lang['nb_NO']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Legg til lister';
$lang['nb_NO']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Søkelister';
$lang['nb_NO']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Søkeresultater';

?>