<?php
class Service extends AppModel {
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'The title should not be empty'
			),
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric',
				'required' => 'create',
				'message' => 'Title should only contain characters and numbers'
			)
		),
		'content' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => 'create',
				'message' => 'Content is required'
			)
		)
	);
}