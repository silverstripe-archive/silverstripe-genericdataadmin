<?php

/**
 * Catalan (Andorra) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('ca_AD', $lang) && is_array($lang['ca_AD'])) {
	$lang['ca_AD'] = array_merge($lang['en_US'], $lang['ca_AD']);
} else {
	$lang['ca_AD'] = $lang['en_US'];
}

$lang['ca_AD']['GenericDataAdmin']['CHOOSECRIT'] = 'Si us plau, trieu algun criteri de cerca i premeu \'Vés\'.';
$lang['ca_AD']['GenericDataAdmin']['CREATE'] = 'Crea';
$lang['ca_AD']['GenericDataAdmin']['DELETE'] = 'Suprimeix';
$lang['ca_AD']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Suprimit amb èxit.';
$lang['ca_AD']['GenericDataAdmin']['EXPORTCSV'] = 'Exporta com a CSV';
$lang['ca_AD']['GenericDataAdmin']['FOUND'] = 'trobat:';
$lang['ca_AD']['GenericDataAdmin']['GO'] = 'Vés';
$lang['ca_AD']['GenericDataAdmin']['NORESULTS'] = 'No s\'ha trobat %s en aquesta cerca.';
$lang['ca_AD']['GenericDataAdmin']['SAVE'] = 'Desa';
$lang['ca_AD']['GenericDataAdmin']['SAVED'] = 'Desat';
$lang['ca_AD']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Afegeix una llista';
$lang['ca_AD']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Cerca a les llistes';
$lang['ca_AD']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Cerca als resultats';
$lang['ca_AD']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Benvingut a';
$lang['ca_AD']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Si us plau, cliqueu una de les entrades del panell esquerra.';

?>