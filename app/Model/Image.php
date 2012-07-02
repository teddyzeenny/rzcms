<?php
class Image extends AppModel {
	public $belongsTo = array('Event');
	
	
	public function beforeDelete($cascade) {
		if (!parent::beforeDelete($cascade)) {
			return false;
		}
		$file = APP . 'webroot' . DS . 'img' . DS . 'events' . DS . $this->id . '.jpg';
		if (file_exists($file)) {
			unlink($file);
		}
		return true;
	}
		
}