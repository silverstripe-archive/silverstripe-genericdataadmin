<?php

/**
 * Arabic (Saudi Arabia) language pack
 * @package modules: genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('ar_SA', $lang) && is_array($lang['ar_SA'])) {
	$lang['ar_SA'] = array_merge($lang['en_US'], $lang['ar_SA']);
} else {
	$lang['ar_SA'] = $lang['en_US'];
}

$lang['ar_SA']['GenericDataAdmin']['CHOOSECRIT'] = 'فضلاً اختر معايير البحث ثم اضغط على الزر "اذهب"';
$lang['ar_SA']['GenericDataAdmin']['CREATE'] = 'إنشاء';
$lang['ar_SA']['GenericDataAdmin']['DELETE'] = 'حذف';
$lang['ar_SA']['GenericDataAdmin']['DELETEDSUCCESS'] = 'حذف بنجاح';
$lang['ar_SA']['GenericDataAdmin']['EXPORTCSV'] = 'تصدير كـ CSV';
$lang['ar_SA']['GenericDataAdmin']['FOUND'] = 'النتائج:';
$lang['ar_SA']['GenericDataAdmin']['GO'] = 'اذهب';
$lang['ar_SA']['GenericDataAdmin']['NORESULTS'] = 'عذراً . لايوجد نتائج بحث مطابقة لـ %s';
$lang['ar_SA']['GenericDataAdmin']['SAVE'] = 'حفظ';
$lang['ar_SA']['GenericDataAdmin']['SAVED'] = 'محفوظ';
$lang['ar_SA']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'أضف قائمة';
$lang['ar_SA']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'بحث القوائم';
$lang['ar_SA']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'بحث النتائج';
$lang['ar_SA']['GenericDataAdmin_right.ss']['WELCOME1'] = 'مرحباً بك في ';
$lang['ar_SA']['GenericDataAdmin_right.ss']['WELCOME2'] = 'فضلاً اضغط على أحد المدخلات في القائمة اليسرى';

?>