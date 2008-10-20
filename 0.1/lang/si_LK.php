<?php

/**
 * Sinhalese (Sri Lanka) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('si_LK', $lang) && is_array($lang['si_LK'])) {
	$lang['si_LK'] = array_merge($lang['en_US'], $lang['si_LK']);
} else {
	$lang['si_LK'] = $lang['en_US'];
}

$lang['si_LK']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'ලයිස්තුවක් ඵකතු කරන්න';
$lang['si_LK']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'ලයිස්තු සොයන්න';
$lang['si_LK']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'පිලිතුරැ';

?>