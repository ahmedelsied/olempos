<?php
namespace controllers;
use models\requestsModel;
use models\servicesModel;
use models\subServiceModel;
use lib\sessionmanger;
use lib\helper;
use lib\inputfilter;
class admin_hash_requestsController extends adminAbstractController
{
    use sessionmanger,helper,inputfilter;
    protected $requests;
    protected $services;
    protected $requestsModel;
    public function __construct()
    {
        self::start();
        if(!$this->checkSession('username')){
            $this->redirect('../../admin_hash_login');
            exit();
        }else{
            $this->referes = ['http://olymposweb.com:81/admin_hash_requests','http://olymposweb.com:81/admin_hash_requests/',
            'http://olymposweb.com:81/admin_hash_requests/default','http://olymposweb.com:81/admin_hash_requests/default/',
            'http://olymposweb.com:81/admin_hash_dashboard','http://olymposweb.com:81/admin_hash_dashboard/',
            'http://olymposweb.com:81/admin_hash_dashboard/default','http://olymposweb.com:81/admin_hash_dashboard/default/',
            ];
            $this->requestsModel = new requestsModel;
            $this->servicesModel = new servicesModel;
            $this->subServicesModel = new subServiceModel;
        }
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->requests = $this->requestsModel->getAll();
            $result = isset($_SESSION['result']) ? $_SESSION['result'] : '';
            $this->_temp($result);
            $_SESSION['result'] = '';
        }else{
            $this->invalidparamsAction();
        }
    }
    public function deleteAction($params)
    {
        $parmValid = $this->setParams($params,1);
        if($parmValid === true){
            $id = $this->filterInt($params[0]) ? $params[0] : null;
            if(in_array($_SERVER['HTTP_REFERER'],$this->referes) && intval($id)){
                if($this->requestsModel->abstractCheckIfExist('id',$id) == 1){
                    $this->requestsModel->deleteRec($id);
                    $_SESSION['result'] = '<div class="alert alert-success">Deleted Successfully</div>';
                }else{
                    $_SESSION['result'] = '<div class="alert alert-danger">Not Found ID</div>';
                }
                $this->redirect('../../admin_hash_requests');
            }else{
                $_SESSION['result'] = '<div class="alert alert-danger">Somthing Wrong</div>';
                $this->redirect('../../admin_hash_requests');
            }
        }else{
            $this->invalidparamsAction();
        }
    }
    public function finishedAction($params)
    {
        $parmValid = $this->setParams($params,1);
        if($parmValid === true){
            $id = $this->filterInt($params[0]) ? $params[0] : null;
            if(in_array($_SERVER['HTTP_REFERER'],$this->referes) && intval($id)){
                if($this->requestsModel->abstractCheckIfExist('id',$id) == 1){
                    $this->requestsModel->updateSpecRec('completed',1,$id);
                    $_SESSION['result'] = '<div class="alert alert-success">Updated Successfully</div>';
                }else{
                    $_SESSION['result'] = '<div class="alert alert-danger">Not Found ID</div>';
                }
                $this->redirect('../../admin_hash_requests');
            }else{
                $_SESSION['result'] = '<div class="alert alert-danger">Somthing Wrong</div>';
                $this->redirect('../../admin_hash_requests');
            }
        }else{
            $this->invalidparamsAction();
        }
    }
    private function _temp($param = null)
    {
        $this->title = 'Requests';
        $this->loadHeader();
        $this->renderNav();
        echo $param;
        $this->_view('requestsView');
        $this->loadFooter();
    }
}