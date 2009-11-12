<?php

/**
 * Malay (Malaysia) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('ms_MY', $lang) && is_array($lang['ms_MY'])) {
	$lang['ms_MY'] = array_merge($lang['en_US'], $lang['ms_MY']);
} else {
	$lang['ms_MY'] = $lang['en_US'];
}

$lang['ms_MY']['GenericDataAdmin']['CHOOSECRIT'] = 'Pilih beberapa kriteria carian and tekan \'Teruskan\'.';
$lang['ms_MY']['GenericDataAdmin']['CREATE'] = 'Hasilkan';
$lang['ms_MY']['GenericDataAdmin']['DELETE'] = 'Padamkan';
$lang['ms_MY']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Dipadam dengan jaya';
$lang['ms_MY']['GenericDataAdmin']['EXPORTCSV'] = 'Eksport sebagai CSV';
$lang['ms_MY']['GenericDataAdmin']['FOUND'] = 'dijumpai';
$lang['ms_MY']['GenericDataAdmin']['GO'] = 'Teruskan';
$lang['ms_MY']['GenericDataAdmin']['NORESULTS'] = 'Maaf, tiada %s ditemuai.';
$lang['ms_MY']['GenericDataAdmin']['SAVE'] = 'Simpan';
$lang['ms_MY']['GenericDataAdmin']['SAVED'] = 'Disimpan';
$lang['ms_MY']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Tambah Senarai';
$lang['ms_MY']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Lakukan Carian Senarai';
$lang['ms_MY']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Hasil Carian';

?>