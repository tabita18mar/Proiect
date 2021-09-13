<?php

class ContactController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $data['title'] = 'CONTACT';
      $data['mainContent'] = "<h1>CONTACT page content</h1>";
        $data['mainContent'] .= $this->render(APP_PATH.VIEWS.'contact.html', $data);
        echo $this->render(APP_PATH.VIEWS.'contact.html', $data);
    }
}

