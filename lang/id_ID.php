<?php

/**
 * Indonesian (Indonesia) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('id_ID', $lang) && is_array($lang['id_ID'])) {
	$lang['id_ID'] = array_merge($lang['en_US'], $lang['id_ID']);
} else {
	$lang['id_ID'] = $lang['en_US'];
}

$lang['id_ID']['GenericDataAdmin']['CHOOSECRIT'] = 'Mohon pilih kriteria pencarian dan tekan  \'Go\'.';
$lang['id_ID']['GenericDataAdmin']['CREATE'] = 'Buat';
$lang['id_ID']['GenericDataAdmin']['DELETE'] = 'Hapus';
$lang['id_ID']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Telah dihapus dengan sukses';
$lang['id_ID']['GenericDataAdmin']['EXPORTCSV'] = 'Ekspor sebagai CSV';
$lang['id_ID']['GenericDataAdmin']['FOUND'] = 'ditemukan:';
$lang['id_ID']['GenericDataAdmin']['GO'] = 'Pergi';
$lang['id_ID']['GenericDataAdmin']['NORESULTS'] = 'Maaf, tidak ada %s ditemukan dalam pencarian ini.';
$lang['id_ID']['GenericDataAdmin']['SAVE'] = 'Simpan';
$lang['id_ID']['GenericDataAdmin']['SAVED'] = 'Tersimpan';
$lang['id_ID']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Tambahkan Pendaftaran';
$lang['id_ID']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Menyusun Pencarian';
$lang['id_ID']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Hasil Pencarian';
$lang['id_ID']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Selamat datang ke';
$lang['id_ID']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Tolong pilih klik pada salah satu entri pada bagian kiri';

?>