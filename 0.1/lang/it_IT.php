<?php

/**
 * Italian (Italy) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('it_IT', $lang) && is_array($lang['it_IT'])) {
	$lang['it_IT'] = array_merge($lang['en_US'], $lang['it_IT']);
} else {
	$lang['it_IT'] = $lang['en_US'];
}

$lang['it_IT']['GenericDataAdmin']['CREATE'] = 'Crea';
$lang['it_IT']['GenericDataAdmin']['DELETE'] = 'Cancella';
$lang['it_IT']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Correttamente cancellato';
$lang['it_IT']['GenericDataAdmin']['EXPORTCSV'] = 'Esporta come CSV';
$lang['it_IT']['GenericDataAdmin']['FOUND'] = 'trovato:';
$lang['it_IT']['GenericDataAdmin']['GO'] = 'Vai';
$lang['it_IT']['GenericDataAdmin']['SAVE'] = 'Salva';
$lang['it_IT']['GenericDataAdmin']['SAVED'] = 'Salvato';
$lang['it_IT']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Aggiungi quotazione';
$lang['it_IT']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Cerca quotazioni';
$lang['it_IT']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Cerca risultati';
$lang['it_IT']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Benvenuto in ';

?>