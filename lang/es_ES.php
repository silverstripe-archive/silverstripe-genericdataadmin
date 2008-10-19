<?php

/**
 * Spanish (Spain) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('es_ES', $lang) && is_array($lang['es_ES'])) {
	$lang['es_ES'] = array_merge($lang['en_US'], $lang['es_ES']);
} else {
	$lang['es_ES'] = $lang['en_US'];
}

$lang['es_ES']['GenericDataAdmin']['CHOOSECRIT'] = 'Por favor elija algún criterio de búsqueda y presione \'Ir\'.';
$lang['es_ES']['GenericDataAdmin']['CREATE'] = 'Crear';
$lang['es_ES']['GenericDataAdmin']['DELETE'] = 'Borrar';
$lang['es_ES']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Borrado satisfactoriamente.';
$lang['es_ES']['GenericDataAdmin']['EXPORTCSV'] = 'Exportar a CSV';
$lang['es_ES']['GenericDataAdmin']['FOUND'] = 'encontrado:';
$lang['es_ES']['GenericDataAdmin']['GO'] = 'Ir';
$lang['es_ES']['GenericDataAdmin']['NORESULTS'] = 'Lo sentimos, no ha sido encontrado %s mediante esta búsqueda.';
$lang['es_ES']['GenericDataAdmin']['SAVE'] = 'Guardar';
$lang['es_ES']['GenericDataAdmin']['SAVED'] = 'Guardado';
$lang['es_ES']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Añadir Listado';
$lang['es_ES']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Buscar Listado';
$lang['es_ES']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Buscar Resultados';
$lang['es_ES']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Bienvenidos a';
$lang['es_ES']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Por favor haga clic en una de las entradas de la parte izquierda.';

?>