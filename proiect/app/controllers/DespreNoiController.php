<?php

class DespreNoiController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $data['title'] = 'DESPRENOI';
        $data['mainContent'] = "<h1>Despre noi </h1>";
        $data['mainContent'] .= $this->render(APP_PATH.VIEWS.'DespreNoi.html', $data);
       echo $this->render(APP_PATH.VIEWS.'index.html', $data);
    }
}