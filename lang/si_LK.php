<?php

/**
 * Sinhalese (Sri Lanka) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('si_LK', $lang) && is_array($lang['si_LK'])) {
	$lang['si_LK'] = array_merge($lang['en_US'], $lang['si_LK']);
} else {
	$lang['si_LK'] = $lang['en_US'];
}

$lang['si_LK']['GenericDataAdmin']['CREATE'] = 'නිර්මාණය කරන්න';
$lang['si_LK']['GenericDataAdmin']['DELETE'] = 'මකන්න';
$lang['si_LK']['GenericDataAdmin']['DELETEDSUCCESS'] = 'සාර්ථකව මකා ඇත';
$lang['si_LK']['GenericDataAdmin']['FOUND'] = 'හමුවුණා';
$lang['si_LK']['GenericDataAdmin']['GO'] = 'යන්න';
$lang['si_LK']['GenericDataAdmin']['SAVE'] = 'ගබඩා කරන්න';
$lang['si_LK']['GenericDataAdmin']['SAVED'] = 'ගබඩා කළා';
$lang['si_LK']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'ලයිස්තුවක් ඵකතු කරන්න';
$lang['si_LK']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'ලයිස්තු සොයන්න';
$lang['si_LK']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'පිලිතුරැ';
$lang['si_LK']['GenericDataAdmin_right.ss']['WELCOME1'] = 'පිළිගන්න';
$lang['si_LK']['GenericDataAdmin_right.ss']['WELCOME2'] = 'කරැණාකර වමි පස කොටුවෙන් "එක් ප්රවේශයක් මත ක්ලික් කරන්න" තෝරන්න ';

?>