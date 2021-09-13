<?php

class SignupController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $signUpName = $_POST['userNameSignUp'];
        $signUpPass = $_POST['userPassSignUp1'];
        $user = new UsersModel;

        $data = array();
        if($user->addUser($signUpName, $signUpPass)){
            echo "<h1>Bad query!</h1>";
            echo $this->render(APP_PATH.VIEWS.'index.html',$data);
        }
        else {
            echo "User added ... redirect to your page!";
            session_start();
            $_SESSION['user'] = $signUpName;
            echo $this->render(APP_PATH.VIEWS.'index.html',$data);
        }  
    }
}