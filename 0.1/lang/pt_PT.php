<?php

/**
 * Portuguese (Portugal) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('pt_PT', $lang) && is_array($lang['pt_PT'])) {
	$lang['pt_PT'] = array_merge($lang['en_US'], $lang['pt_PT']);
} else {
	$lang['pt_PT'] = $lang['en_US'];
}

$lang['pt_PT']['GenericDataAdmin']['CHOOSECRIT'] = 'Seleccione um critério de pesquisa e pressione \'Ir\'.';
$lang['pt_PT']['GenericDataAdmin']['CREATE'] = 'Criar';
$lang['pt_PT']['GenericDataAdmin']['DELETE'] = 'Apagar';
$lang['pt_PT']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Apagado com sucesso';
$lang['pt_PT']['GenericDataAdmin']['EXPORTCSV'] = 'Exportar para CSV';
$lang['pt_PT']['GenericDataAdmin']['FOUND'] = 'encontrado:';
$lang['pt_PT']['GenericDataAdmin']['GO'] = 'Ir';
$lang['pt_PT']['GenericDataAdmin']['NORESULTS'] = 'Não foram encontrados resultados para %s.';
$lang['pt_PT']['GenericDataAdmin']['SAVE'] = 'Gravar';
$lang['pt_PT']['GenericDataAdmin']['SAVED'] = 'Gravado';
$lang['pt_PT']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Adicionar Lista';
$lang['pt_PT']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Procurar Listas';
$lang['pt_PT']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Resultados da Pesquisa';

?>