<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 15.03.17
 * Time: 13:09
 */

require_once "vendor/autoload.php";


session_name("lunderwist");
session_start();
session_regenerate_id();

$app = new \api\App();
$app->run();