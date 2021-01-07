<?php
namespace controllers;
use models\servicesModel;
use models\blogsModel;
use models\subModel;
use models\requestsModel;
use models\staticsModel;
use lib\inputfilter;
use lib\validate;
use lib\setDate;
use lib\helper;
class mainController extends abstractController
{
    use inputfilter,validate,setDate,helper;
    protected $servicesModel;
    protected $blogsModel;
    protected $requestsModel;
    protected $allProjects;
    protected $staticsModel;
    protected $statics;
    public function __construct()
    {
        $this->servicesModel = new servicesModel;
        $this->blogsModel = new blogsModel;
        $this->requestsModel = new requestsModel;
        $this->staticsModel = new staticsModel;
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->servicesDetails = $this->servicesModel->getLimit(6);
            $this->servicesFooter = $this->servicesDetails;
            $this->blogsModel = $this->blogsModel->getLimit(3);
            $this->allProjects = $this->requestsModel->countRow(' WHERE completed = 1');
            $this->statics = $this->staticsModel->getAll();
            $this->loadHeader();
            $this->title = $this->ger == 'GER'.DS ? 'OLEMPOS' :'اوليمبوس';
            $this->renderNav();
            $this->_view('defaultView');
            $this->loadFooter();
        }else{
            $this->invalidparamsAction();
        }
    }
    public function subscribersAction()
    {
        $prm = isset($_POST['id']) ? $_POST['id'] : '';
        $this->referer($prm);
        if($_SERVER['REQUEST_METHOD'] == 'POST' &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest' &&
        isset($_POST['email']) &&
        in_array($_SERVER["HTTP_REFERER"],$this->Href)){
            $this->_newsubscriber();
            exit();
        }elseif($_SERVER['REQUEST_METHOD'] != 'POST'){
            $this->redirect('../../');
        }else{
            return null;
        }
    }
    private function _newsubscriber()
    {
        $filteredEmail = $this->filterEmail($_POST['email']);
        $msg = $this->emailValidate($filteredEmail,100);
        $get = explode('?',$_SERVER["HTTP_REFERER"]);
        $tagVal = isset($_SESSION['tag']) ? $_SESSION['tag'] : '';
        if($msg[1] == 'success'){
            $subsModel = new subModel;
            $subsModel::$tableSchema['email'] = $filteredEmail;
            if($subsModel->checkIfExist($filteredEmail) == 0){
                $subsModel->insertRec();
                echo end($get);
                $msg[0] = (end($get) == 'lang=ger' || end($get) == 'lang=ger&tag='.$tagVal) ? 'Abonnement erfolgreich!' : 'تم الاشتراك بنجاح!';
            }else{
                $msg[0] = (end($get) == 'lang=ger' || end($get) == 'lang=ger&tag='.$tagVal) ? 'Bereits abonniert!' : 'تم الاشتراك من قبل!';
            }
        }else{
            $msg[0] = (end($get) == 'lang=ger' || end($get) == 'lang=ger&tag='.$tagVal) ? 'Bitte schreiben Sie eine gültige E-Mail' : 'يرجى كتابة بريد الكتروني صالح';
        }
        echo '<div class="suc-msg alert alert-'.$msg[1].'">'.$msg[0].'</div>';
    }
}