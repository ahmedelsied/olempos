<?php
namespace controllers;
use models\servicesModel;
use models\requestsModel;
use lib\inputfilter;
use lib\validate;
use lib\helper;
class our_servicesController extends abstractController
{
    use inputfilter,validate,helper;
    protected $servicesModel;
    protected $servicesFooter;
    protected $servicesDetaile;
    protected $Allservices;
    protected $service;
    protected $params;
    protected $branchService;
    public function __construct()
    {
        $this->servicesModel = new servicesModel;
        $this->servicesFooter = $this->servicesModel->getLimit(6);
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->servicesDetaile = $this->servicesModel->getAll();
            $this->loadHeader();
            $this->title = $this->ger == 'GER'.DS ? 'Unsere Dienstleistungen' :'خدماتنا';
            $this->renderNav();
            $this->_view('servicesView');
            $this->loadFooter();
        }else{
            $this->invalidparamsAction();
        }
    }
    public function detailsAction($params)
    {
        $parmValid = $this->setParams($params,1);
        if($parmValid === true){
            if($this->filterInt($params[0]) && $this->servicesModel->checkIfExist($params[0])){
                $this->params = $params[0];
                $this->Allservices = $this->servicesModel->getAll();
                $this->service = $this->servicesModel->getWPK($params[0]);
                $this->branchService = $this->servicesModel->getJOIN('branchservices','*','branchservices.serviceID',$params[0]);
                $this->loadHeader();
                $this->title = $this->ger == 'GER'.DS ? 'Servicedetails' :'تفاصيل الخدمه';
                $this->renderNav();
                $this->_view('services_detailsView');
                $this->loadFooter();
            }else{
                $this->invalidparamsAction();
            }
        }else{
            $this->invalidparamsAction();
        }
    }
    public function handle_requestAction($params)
    {
        if(isset($_POST['serviceID']) && $this->servicesModel->checkIfExist($_POST['serviceID']) > 0){
            $Href = [
                'http://olymposweb.com:81/our_services/details/'.$_POST['serviceID'],
                'http://olymposweb.com:81/our_services/details/'.$_POST['serviceID'].'/',
                'http://olymposweb.com:81/our_services/details/'.$_POST['serviceID'].'?lang=ger',
                'http://olymposweb.com:81/our_services/details/'.$_POST['serviceID'].'/?lang=ger',];
            if($_SERVER['REQUEST_METHOD'] == 'POST' &&
            $_SERVER['HTTP_X_REQUESTED_WITH'] &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest' &&
            isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) && isset($_POST['serviceID']) &&
            in_array($_SERVER["HTTP_REFERER"],$Href)){
                $this->_newReq();
                exit();
            }elseif($_SERVER['REQUEST_METHOD'] != 'POST'){
                $this->redirect('../../');
            }else{
                echo 'Something Wrong';
            }
        }else{
            echo 'Something Wrong';
        }
        
    }
    private function _newReq()
    {
        $filteredName = $this->filterString($_POST['name']);
        $filteredEmail = $this->filterEmail($_POST['email']);
        $filteredPhone = $this->filterString($_POST['phone']);
        $filteredMessage = $this->filterString($_POST['message']);
        $serviceID = isset($_POST['serviceID']) ? $this->filterString($_POST['serviceID']) : '';
        $branchServiceID = isset($_POST['course']) ? $this->filterString($_POST['course']) : '';
        $validName = $this->inputStringValidate($filteredName,2,70);
        $validEmail = $this->emailValidate($filteredEmail,100);
        $validPhone = $this->inputStringValidate($filteredPhone,5,50);
        $validContent = $this->inputStringValidate($filteredMessage,20,200);
        $get = explode('?',$_SERVER["HTTP_REFERER"]);
        $serviceExist = $this->servicesModel->abstractCheckIfExist('id',$serviceID);
        if($validName == true && $validEmail[1] === 'success' && $validPhone == true && $validContent == true && $serviceExist == 1){
            $certific = isset($_POST['certific']) ? $this->filterString($_POST['certific']) : '';
            $time = isset($_POST['time']) ? $this->filterString($_POST['time']) : '';
            $request = new requestsModel;
            $request::$tableSchema['name'] = $filteredName;
            $request::$tableSchema['email'] = $filteredEmail;
            $request::$tableSchema['phone'] = $filteredPhone;
            $request::$tableSchema['certific'] = $certific;
            $request::$tableSchema['mainServiceID'] = $serviceID;
            $request::$tableSchema['branchServiceID'] = $branchServiceID;
            $request::$tableSchema['time'] = $time;
            $request::$tableSchema['note'] = $filteredMessage;
            $request::$tableSchema['dateRequest'] = date('Y-m-d');
            $request->insertRec();
            echo end($get) == 'lang=ger' ? 'Wir haben Ihre Bestellung erfolgreich erhalten!' : '!لقد استلمنا طلبك بنجاح';
        }else{
            echo end($get) == 'lang=ger' ? 'Bitte geben Sie die Informationen korrekt ein' : 'يرجى ملئ البيانات بشكل صحيح';
        }
    }
}