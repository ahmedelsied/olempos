<?php
namespace controllers;
use models\servicesModel;
use models\requestsModel;
use models\staticsModel;
class about_usController extends abstractController
{
    protected $requestsModel;
    protected $allProjects;
    protected $staticsModel;
    protected $servicesModel;
    protected $statics;
    public function __construct()
    {
        $this->servicesModel = new servicesModel;
        $this->servicesFooter = $this->servicesModel->getLimit(6);
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->requestsModel = new requestsModel;
            $this->staticsModel = new staticsModel;
            $this->allProjects = $this->requestsModel->countRow(' WHERE completed = 1');
            $this->statics = $this->staticsModel->getAll();
            $this->loadHeader();
            $this->title = $this->ger == 'GER'.DS ? 'Über uns' :'من نحن';
            $this->renderNav();
            $this->_view('aboutUsView');
            $this->loadFooter();
        }else{
            $this->invalidparamsAction();
        }
    }
}