<?php

/**
 * Turkish (Turkey) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('tr_TR', $lang) && is_array($lang['tr_TR'])) {
	$lang['tr_TR'] = array_merge($lang['en_US'], $lang['tr_TR']);
} else {
	$lang['tr_TR'] = $lang['en_US'];
}

$lang['tr_TR']['GenericDataAdmin']['CHOOSECRIT'] = 'Lütfen arama kriteri seçip \'Git\' e basınız.';
$lang['tr_TR']['GenericDataAdmin']['CREATE'] = 'Oluştur';
$lang['tr_TR']['GenericDataAdmin']['DELETE'] = 'Sil';
$lang['tr_TR']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Başarıyla silindi';
$lang['tr_TR']['GenericDataAdmin']['EXPORTCSV'] = 'CSV olarak kaydet';
$lang['tr_TR']['GenericDataAdmin']['FOUND'] = 'bulundu:';
$lang['tr_TR']['GenericDataAdmin']['GO'] = 'Git';
$lang['tr_TR']['GenericDataAdmin']['NORESULTS'] = 'Üzgünüz, %s bulunamadı.';
$lang['tr_TR']['GenericDataAdmin']['SAVE'] = 'Kaydet';
$lang['tr_TR']['GenericDataAdmin']['SAVED'] = 'Kaydedildi';
$lang['tr_TR']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Listeleme Ekle';
$lang['tr_TR']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Listelerde Ara';
$lang['tr_TR']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Arama Sonuçları';
$lang['tr_TR']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Hoşgeldiniz, ';
$lang['tr_TR']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Lütfen sol panodaki maddelerden birini seciniz.';

?>