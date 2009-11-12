<?php

/**
 * Spanish (Mexico) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('es_MX', $lang) && is_array($lang['es_MX'])) {
	$lang['es_MX'] = array_merge($lang['en_US'], $lang['es_MX']);
} else {
	$lang['es_MX'] = $lang['en_US'];
}

$lang['es_MX']['GenericDataAdmin']['CHOOSECRIT'] = 'Por favor selecciona algún criterio de búsqueda y pulsa en \'Ir\'';
$lang['es_MX']['GenericDataAdmin']['CREATE'] = 'Crear';
$lang['es_MX']['GenericDataAdmin']['DELETE'] = 'Eliminar';
$lang['es_MX']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Eliminado satisfactoriamente';
$lang['es_MX']['GenericDataAdmin']['EXPORTCSV'] = 'Exporta como CSV';
$lang['es_MX']['GenericDataAdmin']['FOUND'] = 'encontré:';
$lang['es_MX']['GenericDataAdmin']['GO'] = 'Ir';
$lang['es_MX']['GenericDataAdmin']['NORESULTS'] = 'Lo siento, no encuentro la condición %s.';
$lang['es_MX']['GenericDataAdmin']['SAVE'] = 'Guardar';
$lang['es_MX']['GenericDataAdmin']['SAVED'] = 'Guardado';
$lang['es_MX']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Añadir Listado';
$lang['es_MX']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Buscar Listado';
$lang['es_MX']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Buscar Resultados';
$lang['es_MX']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Bienvenido a';
$lang['es_MX']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Por favor pulsa con el ratón en uno de los elementos del panel de la izquierda.';

?>