<?php
class Event extends AppModel {
	public $belongsTo = array('Category');
	public $hasMany = array('Image');
}