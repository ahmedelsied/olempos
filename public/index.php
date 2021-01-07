<?php
ob_start();
use lib\sessionmanger;
if(!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
require_once '..'.DS.'app'.DS.'config.php';
require_once '..'.DS.'app'.DS.'lib'.DS.'autoloader.php';
$connect = new lib\database\dbConnection;
$handleurl = new lib\frontController;
ob_end_flush();