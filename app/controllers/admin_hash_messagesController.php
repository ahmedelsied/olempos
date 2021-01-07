<?php
namespace controllers;
use models\msgModel;
use lib\sessionmanger;
use lib\helper;
use lib\inputfilter;
class admin_hash_messagesController extends adminAbstractController
{
    use sessionmanger,helper,inputfilter;
    protected $messages;
    protected $msgModel;
    public function __construct()
    {
        self::start();
        if(!$this->checkSession('username')){
            $this->redirect('../../admin_hash_login');
            exit();
        }else{
            $this->msgModel = new msgModel;
        }
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->title = 'Messages';
            $this->messages = $this->msgModel->getAll();
            $this->loadHeader();
            $this->renderNav();
            echo $_SESSION['result'];
            $this->_view('messagesView');
            $this->loadFooter();
            $_SESSION['result'] = '';
        }else{
            $this->invalidparamsAction();
        }
    }
    public function deleteAction($params)
    {
        $referes = ['http://olymposweb.com:81/admin_hash_messages','http://olymposweb.com:81/admin_hash_messages/',
        'http://olymposweb.com:81/admin_hash_messages/default','http://olymposweb.com:81/admin_hash_messages/default/',
        'http://olymposweb.com:81/admin_hash_dashboard','http://olymposweb.com:81/admin_hash_dashboard/',
        'http://olymposweb.com:81/admin_hash_dashboard/default','http://olymposweb.com:81/admin_hash_dashboard/default/',
    
        ];
        $parmValid = $this->setParams($params,1);
        if($parmValid === true){
            $id = $this->filterInt($params[0]) ? $params[0] : null;
            if(in_array($_SERVER['HTTP_REFERER'],$referes) && intval($id)){
                if($this->msgModel->abstractCheckIfExist('id',$id) > 0){
                    $this->msgModel->deleteRec($id);
                    $_SESSION['result'] = '<div class="alert alert-success">Deleted Successfully</div>';
                }else{
                    $_SESSION['result'] = '<div class="alert alert-danger">Not Found ID</div>';
                }
                $this->redirect('../../admin_hash_messages');
            }else{
                $_SESSION['result'] = '<div class="alert alert-danger">Somthing Wrong</div>';
                $this->redirect('../../admin_hash_messages');
            }
        }else{
            $this->invalidparamsAction();
        }
    }
}