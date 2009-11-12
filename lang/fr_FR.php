<?php

/**
 * French (France) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('fr_FR', $lang) && is_array($lang['fr_FR'])) {
	$lang['fr_FR'] = array_merge($lang['en_US'], $lang['fr_FR']);
} else {
	$lang['fr_FR'] = $lang['en_US'];
}

$lang['fr_FR']['GenericDataAdmin']['CHOOSECRIT'] = 'Sélectionner des critères de recherche puis appuyer sur le bouton \'Chercher\'.';
$lang['fr_FR']['GenericDataAdmin']['CREATE'] = 'Créer';
$lang['fr_FR']['GenericDataAdmin']['DELETE'] = 'Supprimer';
$lang['fr_FR']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Suppression réussie';
$lang['fr_FR']['GenericDataAdmin']['EXPORTCSV'] = 'Exporter au format CSV';
$lang['fr_FR']['GenericDataAdmin']['FOUND'] = 'trouvé :';
$lang['fr_FR']['GenericDataAdmin']['GO'] = 'Chercher';
$lang['fr_FR']['GenericDataAdmin']['NORESULTS'] = 'Désolé, aucun %s n\'a été trouvé.';
$lang['fr_FR']['GenericDataAdmin']['SAVE'] = 'Enregistrer';
$lang['fr_FR']['GenericDataAdmin']['SAVED'] = 'Enregistré';
$lang['fr_FR']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Ajouter le listing';
$lang['fr_FR']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Chercher Listings';
$lang['fr_FR']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Résultats de la recherche';
$lang['fr_FR']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Bienvenue sur';
$lang['fr_FR']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Veuillez choisir en cliquant sur un des entrées du panneau de gauche';

?>