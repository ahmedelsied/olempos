<?php
namespace controllers;
use models\requestsModel;
use models\servicesModel;
use models\subModel;
use models\msgModel;
use lib\sessionmanger;
use lib\helper;
class admin_hash_dashboardController extends adminAbstractController
{
    use sessionmanger,helper;
    protected $requestsModel;
    protected $servicesModel;
    protected $subModel;
    protected $msgModel;
    protected $requests;
    protected $services;
    protected $subs;
    protected $msg;
    public function __construct()
    {
        self::start();
        if(!$this->checkSession('username')){
            $this->redirect('../../admin_hash_login');
            exit();
        }else{
            $this->requestsModel = new requestsModel;
            $this->servicesModel = new servicesModel;
            $this->subModel = new subModel;
            $this->msgModel = new msgModel;
            $this->requests = $this->requestsModel->getLimit(6,'WHERE completed = 0');
            $this->requestsCount = $this->requestsModel->countRow();
            $this->services = $this->servicesModel->getLimit(6);
            $this->servicesCount = $this->servicesModel->countRow();
            $this->subs = $this->subModel->getLimit(6);
            $this->subsCount = $this->subModel->countRow();
            $this->msg = $this->msgModel->getLimit(6);
            $this->msgCount = $this->msgModel->countRow();
            // print_r($this->requests);
            // exit();
        }
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->title = 'Dashboard';
            $this->loadHeader();
            $this->renderNav();
            $this->_view('dashboardView');
            $this->loadFooter();
        }else{
            $this->invalidparamsAction();
        }
    }
}