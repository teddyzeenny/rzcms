<?php
class Image extends AppModel {
	public $belongsTo = array('Event');
	
	public function remove($id = null) {
		$this->delete($id);
		$file = APP . 'webroot' . DS . 'img' . DS . 'events' . DS . $id . '.jpg';
		unlink($file);
	}
		
}