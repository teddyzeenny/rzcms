<?php
class Event extends AppModel {
	public $belongsTo = array('Category');
	public $hasMany = array(
		'Image' => array(
			'dependent' => true
		)
	);
	
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'The title should not be empty'
			),
			'alphaNumericSpace' => array(
				'rule' => 'alphaNumericSpace',
				'required' => 'create',
				'message' => 'Title should only contain characters and numbers'
			)
		),
		'lecturer' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This field should not be empty'
			),
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric',
				'required' => 'create',
				'message' => 'This field should only contain characters and numbers'
			)
		),
		'date' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This field should not be empty'
			),
			'date' => array(
				'rule' => array('datetime'),
				'required' => 'create',
				'message' => 'This field should be date'
			)
		),
		'lecturer_website' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This field should not be empty'
			),
			'website' => array(
				'rule' => 'url',
				'required' => 'create',
				'message' => 'Please put a valid website'
			)
		),
		'description' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => 'create',
				'message' => 'Description is required'
			)
		)
	);
	
	
	
	public function alphaNumericSpace($check) {
		$value = array_values($check);
		$value = $value[0];

		return preg_match('|^[0-9a-zA-Z ]*$|', $value);
	}
}