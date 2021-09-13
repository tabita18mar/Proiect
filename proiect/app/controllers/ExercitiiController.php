<?php

class ExercitiiController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $data['title'] = 'Exercitii';
        $data['mainContent'] = "<h1>Antrenamente în aer liber</h1>";
        $data['mainContent'] .= $this->render(APP_PATH.VIEWS.'Exercitii.html', $data);
       echo $this->render(APP_PATH.VIEWS.'index.html', $data);
    }
}