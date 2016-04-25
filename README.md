**This is an archived project and is no longer supported or updated by SilverStripe.
Please do not file issues or pull-requests against this repo. 
If you wish to continue to develop this code yourself, 
we recommend you fork it or contact the maintainers directly
(check latest commits for email addresses).**

**This module has been replaced by [ModelAdmin](http://doc.silverstripe.org/sapphire/current/reference/modeladmin) core functionality**

# genericdataadmin Module #

## Introduction ##

Generic Data Admin lets you manage any DataObject subclasses through a three-pane interface with integrated search, record creation and edit forms. It is deprecated in favour of the new [[:modeladmin|ModelAdmin]] class which has nearly the same interface, but requires a lot less custom coding to get you going. While you have to define your custom edit forms and saving logic in GenericDataAdmin, the new ModelAdmin extracts most of this knowledge from your existing datamodel-definitions.

## Maintainer Contact ##

 * Normann Lou (Nickname: nlou), normann@silverstripe.com

## Requirements

 * SilverStripe 2.3

## Installation 
It is depending on two other core modules of SilverStripe: cms and sapphire. Before install this module, cms and sapphire need to be pre-installed
To install the module, download the module's tar file, extract to your project root folder, sibling to cms and sapphire.

## Usage

GenericDataAdmin is an abstract class for building custom interfaces, with built-in search- and edit-functionality. The interface is mostly tailored around a single type of DataObject (e.g. News for the subclass your NewsAdmin). The customization is achieved by overriding a few context-specific methods (e.g. performSearch() and save()) and using Silverstripe’s sophisticated form-generation. GenericDataAdmin builds on the basic CMS-interface (class LeftAndMain), so you can also use this class to generate trees etc.

## Known issues

'genericdataadmin' will be deprecated starting from 2.3 in favor of ModelAdmin, no further development needed.
Historically, it does bring lots of interesting issues as following:

1. Validation to GenericDataAdmin forms: fixed by the adding specific function to the data object it manages: getCMSRequiredField(). No particular ticket is created for this, but a changset #40754 (http://open.silverstripe.com/changeset/40754) address this.
2. It is not scrollable and not resizable in IE for the search results pane: its is fixed by css and update the search result holder with fitToParent function in front end in JS.
3. Stabilizing GenericDataAdmin search result export function, allowing for multiple GDA search buttons: done by checking if the posted csvIDs is set, calling the button's name rather than hard-coded 'action_getResults', etc. Changeset #57276 (http://open.silverstripe.com/changeset/57276)

## Customizing

Create  a static field called result_columns as a blank array:

	static $result_columns = array();

You need to create three abstract methods: Link(), getSearchFields() and performSearch():

	function Link() {
	    return "admin/urlsegment";
	  }

	  function getSearchFields() {
	    return new FieldSet(
				new DateField("From", "From"),
				new DateField("To", "To"),
				new TextField("Title", "Title")
	    );
	  }

	  function performSearch() {
	    return DataObject::get("Member");
	  }

Then modify these to do what you want. Some examples are Writework (nlou/writework) and Guano (hsmith/guano)

Now there are two generic functions added to genericDataAdmin: 
    * save() - deal with click save button on right-top
    * getEditForm(). deal with get the content in right panel and load data from database

Needed to make these generic functions work, you have two static data members in your subclass. Example from WorkshopAdmin:

	static $data_type = 'Workshop'; 
	static $data_type_extra = array('Client', 'ContactManager', 'ContactAdmin');

They are basically telling save() and getEditForm() that they need to deal with not only the DataObject of Workshops, but also DataObjects of Client, ContactManger and ContactAdmin which related to each workshop.

When you make your getCMSField(), you need to give those fields related to $data_type_extra a special name like this: 'Client[Title]', 'Client[MainBusiness]', etc. In this way, the $_REQUEST is made up like this $_REQUEST[Client][Title], $REQUEST[Client][MainBusiness].

If your fields don't have 'Client[ID]', add it as a hidden field. So that while saving the whole form, no new Client record is added, the old client record will be overwriten.

If your subclass needs to make something special for their own save()-method, the generic save() and getEditForm() can still be used, just call `$ret=parent::save();` and then do you special stuff and then return $ret, because in ajax-context the generic save()-method returns some javascript-statements. 

## Customizing Search Results

You can choose between a tabular view (one level with columns) or a nested list-view (multiple levels with custom formatting). Use the list-view if you want to show relations to the main DataObject, and/or trigger different views for these.

	// Format "table":
	array(
	    'FirstName' => 'First Name',
	    'Surname' => 'Surname'
	)
 
	// Format "list" (use "Root" to specifiy the current level):
	// Example shows Members on the first level and their connected Groups on the second level
	array(
	    "Root" => "<li>\$FirstName \$Surname",
	    "Groups" => "<li>\$Title"
	)

See [[DataObjectSet]]->buildNestedUL for a more detailed description on list-formats.

## Best Practices

### More than one editing-interface 

You might want to edit parts of the underlying DataObject (or related DataObjects) in a completely seperate EditForm.
To edit e.g. an Task associated to a Member-Object, you would write (shortened code):

	function showtask() { // get your custom form here }
	function savetask() { // custom saving here }
	function deletetask() { // custom deleting here }
	function TaskEditForm() { // return the form }
	function EditForm() { // switch between actions here by evaluating $this->getAction() to determine which form to use }
