<?php

class LoginController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $userName = $_POST['userName'];
        $userPass = $_POST['userPass'];
        $user = new UsersModel;
        $interogare = "SELECT * FROM utilizatori WHERE `userName` = '$userName' ";
        $result = $user->db()->query($interogare);
        $dataArray = $result->fetch_assoc();

        $hash = $dataArray['hashedPass'];
        $data = array();
        if(password_verify($userPass, $hash)) {
            echo "<h1 style='color:green'>You are logged in!</h1>";
            session_start();
            $_SESSION['user'] = $userName;
            
            $data['title'] = 'Private zone!';
            $data['mainContent'] = "<h1>Salut, $userName</h1>";
            echo $this->render(APP_PATH.VIEWS.'index.html',$data);
        }
        else {
            echo '<h1 style="color:red">You are NOT logged in!';
            echo $this->render(APP_PATH.VIEWS.'index.html',$data);
        }
    }
}