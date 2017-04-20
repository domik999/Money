<?php

require 'vendor/autoload.php';
$app = new \atk4\ui\App('Money lending');

$app->initLayout('Centered');

$db = new
\atk4\data\Persistence_SQL('mysql:dbname=contact;host=localhost','domik','yes');

class Contact extends \atk4\data\Model {
	public $table = 'info';
	
	function init() {
		parent::init();
		
		$this->addField('name');
		$this->addField('age');
		$this->addField('email');
		$this->addField('city');
	}
}
?>