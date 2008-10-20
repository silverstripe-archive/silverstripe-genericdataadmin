<?php

/**
 * Croatian (Croatia) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('hr_HR', $lang) && is_array($lang['hr_HR'])) {
	$lang['hr_HR'] = array_merge($lang['en_US'], $lang['hr_HR']);
} else {
	$lang['hr_HR'] = $lang['en_US'];
}

$lang['hr_HR']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Dodaj listu';
$lang['hr_HR']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Pretraži istu';
$lang['hr_HR']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Rezultati pretrage';

?>