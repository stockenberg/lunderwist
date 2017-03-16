<?php

/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 15.03.17
 * Time: 12:21
 */
namespace api;

class App
{

    public $request;

    public function run()
    {
        $this->request = array_merge($_GET, $_POST);

        switch ($this->request["p"]){

            case "login":
                $user = new UserItem();
                $user->setUsername($_POST["username"]);
                $user->setPassword(md5($_POST["password"]));
                if(UserController::login($user)){
                    echo json_encode($_SESSION);
                }else{
                    echo 0;
                }
                break;

            case "user":
                echo json_encode((new UserController())->run());
                break;

            case "task":
                echo json_encode((new TaskController())->run());
                break;

            case "check_session":
                if(!empty($_SESSION)){
                    echo json_encode($_SESSION);
                }else{
                    echo 0;
                }
                break;

        }

    }

}


