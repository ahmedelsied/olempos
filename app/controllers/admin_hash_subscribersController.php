<?php
namespace controllers;
use models\subModel;
use lib\sessionmanger;
use lib\helper;
use lib\inputfilter;
class admin_hash_subscribersController extends adminAbstractController
{
    use sessionmanger,helper,inputfilter;
    protected $subscribers;
    protected $subModel;
    public function __construct()
    {
        self::start();
        if(!$this->checkSession('username')){
            $this->redirect('../../admin_hash_login');
            exit();
        }else{
            $this->subModel = new subModel;
        }
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->subscribers = $this->subModel->getAll();
            $this->_temp($_SESSION['result']);
            $_SESSION['result'] = '';
        }else{
            $this->invalidparamsAction();
        }
    }
    public function deleteAction($params)
    {
        $referes = ['http://olymposweb.com:81/admin_hash_subscribers','http://olymposweb.com:81/admin_hash_subscribers/',
        'http://olymposweb.com:81/admin_hash_subscribers/default','http://olymposweb.com:81/admin_hash_subscribers/default/',
        'http://olymposweb.com:81/admin_hash_dashboard','http://olymposweb.com:81/admin_hash_dashboard/',
        'http://olymposweb.com:81/admin_hash_dashboard/default','http://olymposweb.com:81/admin_hash_dashboard/default/',
    
        ];
        $parmValid = $this->setParams($params,1);
        if($parmValid === true){
            $id = $this->filterInt($params[0]) ? $params[0] : null;
            if(in_array($_SERVER['HTTP_REFERER'],$referes) && intval($id)){
                if($this->subModel->abstractCheckIfExist('id',$id) == 1){
                    $this->subModel->deleteRec($id);
                    $_SESSION['result'] = '<div class="alert alert-success">Deleted Successfully</div>';
                }else{
                    $_SESSION['result'] = '<div class="alert alert-danger">Not Found ID</div>';
                }
                $this->redirect('../../admin_hash_subscribers');
            }else{
                $_SESSION['result'] = '<div class="alert alert-danger">Somthing Wrong</div>';
                $this->redirect('../../admin_hash_subscribers');
            }
        }else{
            $this->invalidparamsAction();
        }
    }
    private function _temp($param = null)
    {
        $this->title = 'Subscribers';
        $this->loadHeader();
        $this->renderNav();
        echo $param;
        $this->_view('subscribersView');
        $this->loadFooter();
    }
}