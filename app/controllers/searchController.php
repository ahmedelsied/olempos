<?php
namespace controllers;
use models\servicesModel;
use models\blogsModel;
use lib\helper;
use lib\search;
use lib\setDate;
class searchController extends abstractController
{
    use helper,search,setDate;
    protected $services;
    protected $blogs;
    protected $servicesModel;
    protected $servicesFooter;
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tag'])){
                $this->services = $this->serviceSearch($_POST['tag']);
                $this->blogs =   $this->searchBlog($_POST['tag']);
                $this->servicesModel = new servicesModel;
                $this->servicesFooter = $this->servicesModel->getLimit(6);
                $this->loadHeader();
                $this->title = $this->ger == 'GER'.DS ? 'OLEMPOS' :'اوليمبوس';
                $this->renderNav();
                $this->_view('searchView');
                $this->loadFooter();
        }else{
            $this->redirect('../../../');
        }
    }
}