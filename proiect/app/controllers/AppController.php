<?php

class AppController
{
    protected $routes = ['home' => 'HomeController',
                         'contact' => 'ContactController',
                         'desprenoi' => 'DespreNoiController',
                         'noutati' => 'NoutatiController',
                         'login' => 'LoginController',
                         'signup' => 'SignUpController',
                         'exercitiiacasa' => 'ExercitiiacasaController',
                         'suprasolicitarea' => 'SuprasolicitareaController',
                         'exercitii' => 'ExercitiiController'
                        ];

    public function __construct(){
        $this->init();
    }

    public function init(){
       
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        else $page = 'home'; 

        if(array_key_exists($page, $this->routes)){
            $className = $this->routes[$page];
        } else $className = $this->routes['home'];
        new $className;
    }

    public function render($page, $data){
        $template = file_get_contents($page); 

        preg_match_all("[{{\w+}}]", $template, $matches);

        foreach($matches[0] as $value){
            $item = str_replace('{{','', $value);
            $item = str_replace('}}','', $item);
            if(array_key_exists($item, $data)){
                $template = str_replace($value, $data[$item], $template);
            }
        }
        return $template;
    }

}
