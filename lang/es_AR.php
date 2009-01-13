<?php

/**
 * Spanish (Argentina) language pack
 * @package modules: genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('es_AR', $lang) && is_array($lang['es_AR'])) {
	$lang['es_AR'] = array_merge($lang['en_US'], $lang['es_AR']);
} else {
	$lang['es_AR'] = $lang['en_US'];
}

$lang['es_AR']['GenericDataAdmin']['CHOOSECRIT'] = 'Por favor selecciona algún criterio de búsqueda y pulsa \'Ir\'.';
$lang['es_AR']['GenericDataAdmin']['CREATE'] = 'Crear';
$lang['es_AR']['GenericDataAdmin']['DELETE'] = 'Eliminar';
$lang['es_AR']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Eliminado satisfactoriamente';
$lang['es_AR']['GenericDataAdmin']['EXPORTCSV'] = 'Exporta como CSV';
$lang['es_AR']['GenericDataAdmin']['FOUND'] = 'encontrado:';
$lang['es_AR']['GenericDataAdmin']['GO'] = 'Ir';
$lang['es_AR']['GenericDataAdmin']['NORESULTS'] = 'Lo siento, no se ha encontrado a %s en la búsqueda.';
$lang['es_AR']['GenericDataAdmin']['SAVE'] = 'Guardar';
$lang['es_AR']['GenericDataAdmin']['SAVED'] = 'Guardado';
$lang['es_AR']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Añadir Listado';
$lang['es_AR']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Buscar Listado';
$lang['es_AR']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Buscar en Resultados';
$lang['es_AR']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Bienvenido a';
$lang['es_AR']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Por favor pulsa con el ratón en uno de los elementos del panel de la izquierda.';

?>