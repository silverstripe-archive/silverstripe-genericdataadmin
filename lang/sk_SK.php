<?php

/**
 * Slovak (Slovakia) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('sk_SK', $lang) && is_array($lang['sk_SK'])) {
	$lang['sk_SK'] = array_merge($lang['en_US'], $lang['sk_SK']);
} else {
	$lang['sk_SK'] = $lang['en_US'];
}

$lang['sk_SK']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Pridať Zoznam';
$lang['sk_SK']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Hľadať v Zoznamoch';
$lang['sk_SK']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Výsledky hľadania';

?>