<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 15.03.17
 * Time: 12:32
 */

namespace api;


use interfaces\ControllerInterface;

class UserController implements ControllerInterface
{

    public $request;

    public function run()
    {

        $this->request = array_merge($_GET, $_POST);

        switch ($this->request["update"]){

            case "pw":
                return $this->changePassword();
                break;

            case "username":
                return $this->changeUsername();
                break;

        }

    }

    private function changePassword(\api\UserItem $user = NULL)
    {
        // TODO: Implement changePassword() method.
    }

    private function changeUsername(\api\UserItem $user = NULL)
    {
        // TODO: Implement changeUsername() method.
    }


}
