<?php

/**
 * Portuguese (Brazil) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('pt_BR', $lang) && is_array($lang['pt_BR'])) {
	$lang['pt_BR'] = array_merge($lang['en_US'], $lang['pt_BR']);
} else {
	$lang['pt_BR'] = $lang['en_US'];
}

$lang['pt_BR']['GenericDataAdmin']['CHOOSECRIT'] = 'Por favor, escolha alguns filtros para pesquisa e click \'Ir\'';
$lang['pt_BR']['GenericDataAdmin']['CREATE'] = 'Criar';
$lang['pt_BR']['GenericDataAdmin']['DELETE'] = 'Excluir';
$lang['pt_BR']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Deletado com sucesso';
$lang['pt_BR']['GenericDataAdmin']['EXPORTCSV'] = 'Exportar como CSV';
$lang['pt_BR']['GenericDataAdmin']['FOUND'] = 'encontrado(s):';
$lang['pt_BR']['GenericDataAdmin']['GO'] = 'Ir';
$lang['pt_BR']['GenericDataAdmin']['NORESULTS'] = 'Desculpe-nos, nenhum %s foi encontrado por esta pesquisa.';
$lang['pt_BR']['GenericDataAdmin']['SAVE'] = 'Salvar';
$lang['pt_BR']['GenericDataAdmin']['SAVED'] = 'Salvo';
$lang['pt_BR']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Adicionar listagem';
$lang['pt_BR']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Procurar listagens';
$lang['pt_BR']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Resultados da Pesquisa';
$lang['pt_BR']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Bem vindo ao';
$lang['pt_BR']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Por favor, escolha um dos itens no painel esquerdo';

?>