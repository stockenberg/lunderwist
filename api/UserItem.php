<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 15.03.17
 * Time: 12:27
 */

namespace api;


class UserItem
{

    private $user_id;
    private $user_username;
    private $user_password;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->user_username;
    }

    /**
     * @param mixed $user_username
     */
    public function setUsername($user_username)
    {
        $this->user_username = $user_username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->user_password;
    }

    /**
     * @param mixed $user_password
     */
    public function setPassword($user_password)
    {
        $this->user_password = $user_password;
    }



}