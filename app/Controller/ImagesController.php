<?php
class ImagesController extends AppController {
	public function delete ($id = null) {
		if (isset($id)) {
			$this->Image->delete($id);
			$this->redirect($this->request->referer());
		}
	}
}