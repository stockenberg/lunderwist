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

                break;

            case "user":
                echo json_encode((new UserController())->run());
                break;

            case "task":
                echo json_encode((new TaskController())->run());
                break;

        }

    }

}


