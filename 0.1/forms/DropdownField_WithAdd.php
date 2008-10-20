<?php
/**
 * Dropdown field with an add button to the right.
 * The class is originally designed to be used by RelatedDataEditor
 * However, it can potentially be used as a normal dropdown field with add links in a normal form
 * @package forms
 * @subpackage fields-basic
 */
class DropdownField_WithAdd extends DropdownField {
		
	protected $addText, $useExistingText, $addLink, $useExistingLink;
	public $editLink;
	
	function __construct($name, $title = "", $source = array(), $addLink=null, $useExistingLink=null, $addText="Add", $useExistingText="Use Existing", $value = "", $form = null){
		parent::__construct($name, $title, $source, $value, $form);
		$this->addText = $addText;
		$this->useExistingText = $useExistingText;	
		$this->addLink = $addLink;
		$this->useExistingLink = $useExistingLink;
	}
	
	function emptyString($string){
		
	}
	
	/**
	 * Returns a <select> tag containing all the appropriate <option> tags and with add/useExisting link
	 */
	function Field() {
		
		//Add these js file so that the DropdownField_WithAdd can work alone (in a webpage, rather than CMS).
		Requirements::javascript(THIRDPARTY_DIR . '/prototype.js');
		Requirements::javascript(THIRDPARTY_DIR . '/behaviour.js');
		Requirements::javascript(THIRDPARTY_DIR . '/prototype_improvements.js');
		Requirements::Javascript(GENERICDATAADMIN_DIR . "/javascript/DropdownField_WithAdd.js");

		$dropdown = parent::Field();
		if($this->addLink) $addLink = <<<HTML
<a class="addlink link" id="{$this->name}_addLink" href="$this->addLink" style="display: inline; padding-left: 1em; text-decoration: underline;">$this->addText</a>
HTML;
		if($this->useExistingLink) $useExistingLink = <<<HTML
<a class="useExistinglink link" id="{$this->name}_useExistingLink" href="$this->useExistingLink" style="display: none; padding-left: 1em; text-decoration: underline;">$this->useExistingText</a>
HTML;

		if($this->editLink) $editLink = <<<HTML
<a class="editlink" id="{$this->name}_editLink" href="$this->editLink" style="display: inline; padding-left: 1em; text-decoration: underline;">edit</a>
HTML;

		return $dropdown . $addLink .  $useExistingLink . $editLink;
	}
	
	/**
	  * Add a class for this special label so that 
	  * it can have special styling
	  */
	function Title() {
		$title = parent::Title();
		if( $title ) {
			return <<<HTML
<span class="keylabel">$title</span>
HTML;
		}
		else
			return '';
	}
}
?>