<?php

class ExercitiiacasaController extends AppController
{
    public function __construct(){
        $this->init();
    }

    
public function init(){
    $data['title'] = 'Exercitiiacasa';
    $data['mainContent'] = "<h1>Exercițiile fizice acasă</h1>";
    $data['mainContent'] .= $this->render(APP_PATH.VIEWS.'Exercitiiacasa.html', $data);
   echo $this->render(APP_PATH.VIEWS.'index.html', $data);
}
}