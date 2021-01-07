<?php
namespace controllers;
use models\adminsModel;
use lib\login;
use lib\inputfilter;
use lib\sessionmanger;
use lib\helper;
class admin_hash_loginController extends adminAbstractController
{
    use login,inputfilter,sessionmanger,helper;
    protected $articlesActive;
    public function __construct()
    {
        self::start();
        if($this->checkSession('username')){
            $this->redirect('../../admin_hash_dashboard');
            exit();
        }
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->referer();
            if($_SERVER['REQUEST_METHOD'] == 'POST' && in_array($_SERVER['HTTP_REFERER'],$this->Href)){
                $this->_loginProcess();
            }
            $this->_temp();
        }else{
            $this->invalidparamsAction();
        }
    }
    private function _loginProcess()
    {
        $usrname = $this->filterString($_POST['username']);
        $password = sha1($_POST['password']);
        $process = $this->login([$usrname,$password]);
        if($process[1] > 0){
            $this->setSession('username',$usrname);
            session_regenerate_id();
            $this->redirect('../../admin_hash_dashboard');
        }else{
            $wrong = '<div class="alert alert-danger">Username Or Password is wrong</div>';
            $this->_temp($wrong);
        }
    }
    private function _temp($parm = null)
    {
        $this->title = 'Login';
        $this->loadHeader();
        echo $parm;
        $this->_view('loginView');
        $this->loadFooter();
    }
}