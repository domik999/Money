<?php
class Money extends \atk4\data\Model {
	public $table = 'money';
	function init() {
		parent::init();
		
		$this->addField('type');
		$this->addField('date');
		$this->addField('amount');
		$this->hasOne('friend_id');

	}
}

