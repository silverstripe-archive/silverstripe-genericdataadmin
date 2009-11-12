<?php

/**
 * English (United Kingdom) language pack
 * @package genericdataadmin
 * @subpackage i18n
 */

i18n::include_locale_file('genericdataadmin', 'en_US');

global $lang;

if(array_key_exists('en_GB', $lang) && is_array($lang['en_GB'])) {
	$lang['en_GB'] = array_merge($lang['en_US'], $lang['en_GB']);
} else {
	$lang['en_GB'] = $lang['en_US'];
}

$lang['en_GB']['GenericDataAdmin']['CHOOSECRIT'] = 'Please choose some search criteria and press \'Go\'.';
$lang['en_GB']['GenericDataAdmin']['CREATE'] = 'Create';
$lang['en_GB']['GenericDataAdmin']['DELETE'] = 'Delete';
$lang['en_GB']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Successfully deleted';
$lang['en_GB']['GenericDataAdmin']['EXPORTCSV'] = 'Export as CSV';
$lang['en_GB']['GenericDataAdmin']['FOUND'] = 'found:';
$lang['en_GB']['GenericDataAdmin']['GO'] = 'Go';
$lang['en_GB']['GenericDataAdmin']['NORESULTS'] = 'Sorry, no %s found by this search.';
$lang['en_GB']['GenericDataAdmin']['SAVE'] = 'Save';
$lang['en_GB']['GenericDataAdmin']['SAVED'] = 'Saved';
$lang['en_GB']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Add Listing';
$lang['en_GB']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Search Listings';
$lang['en_GB']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Search Results';
$lang['en_GB']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Welcome to';
$lang['en_GB']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Please choose click on one of the entries on the left pane.';

?>