<?php

class ImageController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'DebugKit.Toolbar');

    public function index() {
        $this->set('images', $this->Image->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
             $this->Image->create();
             if ($this->Image->save($this->request->data)) {
                 $this->Session->SetFlash(__('Latest image has been saved.'));
                 return $this->redirect(array('action'=>'index'));
             }
             debug($this->Image->validationErrors);
             $this->Session->SetFlash(__('Image failed to save.'));
        }
    }
}

?>
