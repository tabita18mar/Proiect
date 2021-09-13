<?php

class SuprasolicitareaController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $data['title'] = 'Suprasolicitarea';
        $data['mainContent'] = "<h1>Suprasolicitarea fizică</h1>";
        $data['mainContent'] .= $this->render(APP_PATH.VIEWS.'Suprasolicitarea.html', $data);
       echo $this->render(APP_PATH.VIEWS.'index.html', $data);
    }
}