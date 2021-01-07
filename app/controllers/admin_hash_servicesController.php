<?php
namespace controllers;
use models\servicesModel;
use models\subServiceModel;
use lib\sessionmanger;
use lib\imgupload;
use lib\helper;
use lib\inputfilter;
class admin_hash_servicesController extends adminAbstractController
{
    use sessionmanger,imgupload,helper,inputfilter;
    protected $services;
    protected $subServices;
    protected $servicesModel;
    protected $subServiceModel;
    protected $addServiceActive;
    protected $idService;
    protected $referes;
    public function __construct()
    {
        self::start();
        if(!$this->checkSession('username')){
            $this->redirect('../../admin_hash_login');
            exit();
        }else{
            $this->servicesModel = new servicesModel;
            $this->subServiceModel = new subServiceModel;
            $this->imgPath = 'C:\xampp\htdocs\olymposweb\public\img\service\\';
            $this->referes = ['http://olymposweb.com:81/admin_hash_services','http://olymposweb.com:81/admin_hash_services/',
            'http://olymposweb.com:81/admin_hash_services/default','http://olymposweb.com:81/admin_hash_services/default/',
            'http://olymposweb.com:81/admin_hash_dashboard','http://olymposweb.com:81/admin_hash_dashboard/',
            'http://olymposweb.com:81/admin_hash_dashboard/default','http://olymposweb.com:81/admin_hash_dashboard/default/',
            ];
        }
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->title = 'services';
            $this->services = $this->servicesModel->getAll();
            $this->loadHeader();
            $this->renderNav();
            echo $_SESSION['result'];
            $this->_view('serviceView');
            $this->loadFooter();
            $_SESSION['result'] = '';
        }else{
            $this->invalidparamsAction();
        }
    }
    public function addAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $this->servicesModel::$tableSchema['title'] = $this->filterString($_POST['title']);
                $this->servicesModel::$tableSchema['titleGer'] = $this->filterString($_POST['titleGer']);
                $this->servicesModel::$tableSchema['descr'] = $this->filterString($_POST['details']);
                $this->servicesModel::$tableSchema['descrGer'] = $this->filterString($_POST['detailsGer']);
                $this->servicesModel::$tableSchema['img'] = $this->multipleuploads('images',$this->imgPath);
                $this->servicesModel->insertRec();
                $_SESSION['result'] = '<div class="alert alert-success">Added Successfully</div>';
            }
            $this->title = 'Add service';
            $this->addServiceActive = 'active';
            $this->services = $this->servicesModel->getAll();
            $this->loadHeader();
            $this->renderNav();
            echo $_SESSION['result'];
            $this->_view('addServiceView');
            $this->loadFooter();
            $_SESSION['result'] = '';
        }else{
            $this->invalidparamsAction();
        }
    }
    public function editAction($params)
    {
        $parmValid = $this->setParams($params,1);
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['artcID'])){
            $artcID = $this->filterInt($_POST['artcID']) ? $_POST['artcID'] : null;
            $data = $this->servicesModel->getSpec('*','id',$artcID);
                if($_SERVER['HTTP_REFERER'] == 'http://olymposweb.com:81/admin_hash_services/edit/'.$artcID && isset($_POST['title']) && isset($_POST['titleGer']) && isset($_POST['details']) && isset($_POST['detailsGer'])){
                    if(!empty($_FILES['images'])){
                        $newImages = $this->multipleuploads('images',$this->imgPath);
                        $old = empty($data[0]['img']) ? '' : $data[0]['img'].',';
                        $finalImages = $old.$newImages;
                    }else{
                        $newImages = null;
                    }
                    $inserImage = $newImages == null ? $data[0]['img'] : $finalImages;
                    $title = $this->filterString($_POST['title']);
                    $titleGer = $this->filterString($_POST['titleGer']);
                    $certific = $this->filterString($_POST['certific']);
                    $certificGer = $this->filterString($_POST['certificGer']);
                    $time = $this->filterString($_POST['time']);
                    $details = $this->filterString($_POST['details']);
                    $detailsGer = $this->filterString($_POST['detailsGer']);
                    $this->servicesModel::$tableSchema['title'] = $title;
                    $this->servicesModel::$tableSchema['titleGer'] = $titleGer;
                    $this->servicesModel::$tableSchema['certific'] = $certific;
                    $this->servicesModel::$tableSchema['certificGer'] = $certificGer;
                    $this->servicesModel::$tableSchema['time'] = $time;
                    $this->servicesModel::$tableSchema['descr'] = $details;
                    $this->servicesModel::$tableSchema['descrGer'] = $detailsGer;
                    $this->servicesModel::$tableSchema['img'] = $inserImage;
                    $this->servicesModel->updateRec($artcID);
                    $_SESSION['result'] = '<div class="alert alert-success">ُEdited Successfully</div>';
                    $this->redirect('../../admin_hash_services/edit/4');
                }
                if($_SERVER['HTTP_REFERER'] == 'http://olymposweb.com:81/admin_hash_services/edit/'.$artcID){
                    $deletedImg = $this->filterString($_POST['images']);
                    $oldimgarr = $data[0]['img'];
                    $this->servicesModel::$tableSchema['title'] = $data[0]['title'];
                    $this->servicesModel::$tableSchema['titleGer'] = $data[0]['titleGer'];
                    $this->servicesModel::$tableSchema['certific'] = $data[0]['certific'];
                    $this->servicesModel::$tableSchema['certificGer'] = $data[0]['certificGer'];
                    $this->servicesModel::$tableSchema['time'] = $data[0]['time'];
                    $this->servicesModel::$tableSchema['descr'] = $data[0]['descr'];
                    $this->servicesModel::$tableSchema['descrGer'] = $data[0]['descrGer'];
                    $this->servicesModel::$tableSchema['img'] = '';
                    if(file_exists($this->imgPath.$deletedImg)){
                        $this->servicesModel->updateRec($artcID);
                        unlink($this->imgPath.$deletedImg);
                        $_SESSION['result'] = '<div class="alert alert-success">Done</div>';
                        $this->redirect('../../admin_hash_services/edit/'.$artcID);
                    }else{
                        $_SESSION['result'] = '<div class="alert alert-danger">Something Wrong</div>';
                        $this->redirect('../../admin_hash_services/edit/'.$artcID);
                    }
                }
                if(in_array($_SERVER['HTTP_REFERER'],$this->referes)){
                    if($data[0]['img'] !== ''){
                        $arrimg = explode(',',$data[0]['img']);
                        foreach($arrimg as $img){
                            unlink($this->imgPath.$img);
                        }
                    }
                    $this->servicesModel->deleteRec($_POST['artcID']);
                    $_SESSION['result'] = '<div class="alert alert-success">Image Deleted</div>';
                    $this->redirect('../../admin_hash_services/edit/'.$artcID);
                    exit();
                }
        }
        if($parmValid === true){
            $this->addServiceActive = 'active';
            $this->idService = $this->filterInt($params[0]) ? $params[0] : null;
            if(intval($this->idService)){
                $this->subService = $this->subServiceModel->getSpec('*','serviceID',$this->idService);
                $this->title = 'Edit Service';
                $this->services = $this->servicesModel->getWPK($this->idService);
                if(!empty($this->services)){
                    $this->loadHeader();
                    $this->renderNav();
                    echo $_SESSION['result'];
                    $this->_view('editServiceView');
                    $this->loadFooter();
                    $_SESSION['result'] = '';
                }else{
                    $this->invalidparamsAction();
                }
            }else{
                $this->invalidparamsAction();
            }
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
                if($this->servicesModel->abstractCheckIfExist('id',$id) > 0){
                    $deletedImg = $this->servicesModel->getSpec('img','id',$id);
                    $this->servicesModel->deleteRec($id);
                    unlink($this->imgPath.$deletedImg[0]['img']);
                    $_SESSION['result'] = '<div class="alert alert-success">Deleted Successfully</div>';
                }else{
                    $_SESSION['result'] = '<div class="alert alert-danger">Not Found ID</div>';
                }
                $this->redirect('../../admin_hash_services');
            }else{
                $_SESSION['result'] = '<div class="alert alert-danger">Somthing Wrong</div>';
                $this->redirect('../../admin_hash_services');
            }
        }else{
            $this->invalidparamsAction();
        }
    }    
    public function deleteSubAction($params)
    {
        $parmValid = $this->setParams($params,1);
        if($parmValid === true){
            $id = $this->filterInt($params[0]) ? $params[0] : null;
                if($this->subServiceModel->abstractCheckIfExist('id',$id) > 0){
                    $main = $this->subServiceModel->getSpec('serviceID','id',$id);
                    $this->subServiceModel->deleteRec($id);
                    $_SESSION['result'] = '<div class="alert alert-success">Deleted Successfully</div>';
                }else{
                    $_SESSION['result'] = '<div class="alert alert-danger">Not Found ID</div>';
                }
                $this->redirect('../../admin_hash_services/edit/'.$main[0]['serviceID']);
        }else{
            $this->invalidparamsAction();
        }
    }
    public function addSubAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            if($_SERVER['REQUEST_METHOD'] == 'POST' && $this->servicesModel->abstractCheckIfExist('id',$_POST['serviceID']) > 0){
                $this->subServiceModel::$tableSchema['title'] = $_POST['title'];
                $this->subServiceModel::$tableSchema['titleGer'] = $_POST['titleGer'];
                $this->subServiceModel::$tableSchema['serviceID'] = $_POST['serviceID'];
                $this->subServiceModel->insertRec();
                $_SESSION['result'] = '<div class="alert alert-success">Added Successfully</div>';
                $this->redirect('../../admin_hash_services/edit/'.$_POST['serviceID']);
            }else{
                $this->redirect('../../admin_hash_services');
            }
        }else{
            $this->invalidparamsAction();
        }
    }
}