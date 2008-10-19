<?php

/**
 * Portuguese (Brazil) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('pt_BR', $lang) && is_array($lang['pt_BR'])) {
	$lang['pt_BR'] = array_merge($lang['en_US'], $lang['pt_BR']);
} else {
	$lang['pt_BR'] = $lang['en_US'];
}

$lang['pt_BR']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Adicionar listagem';
$lang['pt_BR']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Procurar listagens';
$lang['pt_BR']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Resultados da Pesquisa';

?>