<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 15.03.17
 * Time: 13:02
 */

namespace api;


trait Database
{

    public static function getInstance() : \PDO{
        return new \PDO('mysql:host=localhost;dbname=lunderwist', "marten", "1234");
    }

}