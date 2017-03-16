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

        switch ($this->request["update"]) {

            case "pw":
                return $this->changePassword();
                break;

            case "username":
                return $this->changeUsername();
                break;
        }

    }

    public static function login(UserItem $user)
    {
        $db = Database::getInstance();
        $sql = "SELECT * FROM users WHERE user_username = :username and user_password = :password";
        $stmt = $db->prepare($sql);
        $stmt->execute(
            array(
                ":username" => $user->getUsername(),
                ":password" => $user->getPassword()
            )
        );

        $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        if(!empty($res)){
            $_SESSION["username"] = $res[0]["user_username"];
            $_SESSION["user_id"] = $res[0]["user_id"];
            return true;
        }else{
            return false;
        }
    }

    private function changePassword(\api\UserItem $user = null)
    {
        // TODO: Implement changePassword() method.
    }

    private function changeUsername(\api\UserItem $user = null)
    {
        // TODO: Implement changeUsername() method.
    }


}
