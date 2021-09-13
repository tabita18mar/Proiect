<?php

class NoutatiController extends AppController
{
    public function __construct(){
        $this->init();
    }

    

public function init(){
    $data['title'] = 'Noutati';
    $data['mainContent'] = "<h1>Noutăți</h1>";
    $data['mainContent'] .= $this->render(APP_PATH.VIEWS.'Noutati.html', $data);
   echo $this->render(APP_PATH.VIEWS.'index.html', $data);
}
}