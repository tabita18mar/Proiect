
<?php

class HomeController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $data['title'] = 'HOME';
        $data['mainContent'] = "<h1>Home</h1>";
    //    $user = new UsersModel();
    //    $myUsers = $user->getUsers();
    //    $data['mainContent'] .= implode('<br>', $myUsers[0]);
       $data['mainContent'] .= $this->render(APP_PATH.VIEWS.'home.html', $data);
        echo $this->render(APP_PATH.VIEWS.'index.html', $data);
    }
}