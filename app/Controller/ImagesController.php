<?php
class ImagesController extends AppController {
	public function delete ($id = null) {
		if ($this->request->is('get')) {
			$this->Image->delete($id);
			$file = APP . 'webroot' . DS . 'img' . DS . 'events' . DS . $id . '.jpg';
			unset($file);
			$this->redirect($this->request->referer());
		}
	}
}