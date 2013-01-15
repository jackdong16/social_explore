<?php
class MessagesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('messages', $this->Message->find('all'));
    }

    public function view($id = null) {
        $this->Message->id = $id;
        $this->set('message', $this->Message->read());
    }
}

?>