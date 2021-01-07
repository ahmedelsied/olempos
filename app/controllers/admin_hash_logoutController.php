<?php
namespace controllers;
use lib\sessionmanger;
use lib\helper;
class admin_hash_logoutController extends adminAbstractController
{
    use sessionmanger,helper;
    public function __construct()
    {
        self::start();
        if($this->checkSession('username')){
            $this->finishSession();
            $this->redirect('../../admin_hash_login');
            exit();
        }
    }
    public function defaultAction($params)
    {
        $this->redirect('../../admin_hash_login');
    }
}