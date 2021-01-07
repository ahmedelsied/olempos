<?php
namespace controllers;
use models\servicesModel;
use models\msgModel;
use lib\inputfilter;
use lib\validate;
use lib\helper;
class contact_usController extends abstractController
{
    use inputfilter,validate,helper;
    protected $servicesModel;
    private $msgModel;
    public function __construct()
    {
        $this->servicesModel = new servicesModel;
        $this->servicesFooter = $this->servicesModel->getLimit(6);
    
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->loadHeader();
            $this->title = $this->ger == 'GER'.DS ? 'Kontaktieren Sie uns' :'تواصل معنا';
            $this->renderNav();
            $this->_view('contactView');
            $this->loadFooter();
        }else{
            $this->invalidparamsAction();
        }
    }
    public function contactAction()
    {
        $prm = isset($_POST['id']) ? $_POST['id'] : '';
        $this->referer($prm);
        if($_SERVER['REQUEST_METHOD'] == 'POST' &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest' &&
        isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg_subject']) && isset($_POST['message']) &&
        in_array($_SERVER["HTTP_REFERER"],$this->Href)){
            $this->_newMsg();
            exit();
        }elseif($_SERVER['REQUEST_METHOD'] != 'POST'){
            $this->redirect('../../');
        }else{
            return null;
        }
    }
    private function _newMsg()
    {
        $filteredName = $this->filterString($_POST['name']);
        $filteredEmail = $this->filterEmail($_POST['email']);
        $filteredMsgSubject = $this->filterString($_POST['msg_subject']);
        $filteredMsgContent = $this->filterString($_POST['message']);
        $validName = $this->inputStringValidate($filteredName,2,50);
        $validEmail = $this->emailValidate($filteredEmail,100);
        $validSub = $this->inputStringValidate($filteredMsgSubject,10,100);
        $validContent = $this->inputStringValidate($filteredMsgContent,20,200);
        $hashContent = sha1($validContent);
        $get = explode('?',$_SERVER["HTTP_REFERER"]);
        if($validName == true && $validEmail == true && $validSub == true && $validContent == true){
            $this->msgModel = new msgModel;
            $this->msgModel::$tableSchema['name'] = $filteredName;
            $this->msgModel::$tableSchema['email'] = $filteredEmail;
            $this->msgModel::$tableSchema['messageTitle'] = $filteredMsgSubject;
            $this->msgModel::$tableSchema['messageContent'] = $filteredMsgContent;
            $this->msgModel::$tableSchema['date'] = date('Y-m-d');
            $this->msgModel->insertRec();
            echo end($get) == 'lang=ger' ? 'Wir haben Ihre Bestellung erfolgreich erhalten' : 'لقد استلمنا طلبك بنجاح';
        }else{
            echo end($get) == 'lang=ger' ? 'Bitte geben Sie die Informationen korrekt ein' : 'يرجى ملئ البيانات بشكل صحيح';
        }
    }
}