<?php
namespace controllers;
use models\blogsModel;
use models\subModel;
use lib\sessionmanger;
use lib\imgupload;
use lib\helper;
use lib\inputfilter;
use lib\mailer;
class admin_hash_blogsController extends adminAbstractController
{
    use sessionmanger,imgupload,helper,inputfilter,mailer;
    protected $blogs;
    protected $blogsModel;
    protected $addBlogActive;
    protected $idBlog;
    protected $referes;
    protected $allsubs;
    public function __construct()
    {
        self::start();
        if(!$this->checkSession('username')){
            $this->redirect('../../admin_hash_login');
            exit();
        }else{
            $this->blogsModel = new blogsModel;
            $this->imgPath = 'C:\xampp\htdocs\olymposweb\public\img\blog\\';
            $this->referes = ['http://olymposweb.com:81/admin_hash_blogs','http://olymposweb.com:81/admin_hash_blogs/',
            'http://olymposweb.com:81/admin_hash_blogs/default','http://olymposweb.com:81/admin_hash_blogs/default/'];
        }
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->title = 'Blogs';
            $this->blogs = $this->blogsModel->getAll();
            $this->loadHeader();
            $this->renderNav();
            echo $_SESSION['result'];
            $this->_view('articleView');
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
                $this->subsModel = new subModel;
                $imgPath = 'C:\xampp\htdocs\olymposweb\public\img\blog\\';
                $this->blogsModel::$tableSchema['title'] = $this->filterString($_POST['title']);
                $this->blogsModel::$tableSchema['titleGer'] = $this->filterString($_POST['titleGer']);
                $this->blogsModel::$tableSchema['content'] = $this->filterString($_POST['details']);
                $this->blogsModel::$tableSchema['contentGer'] = $this->filterString($_POST['detailsGer']);
                $this->blogsModel::$tableSchema['imgs'] = $this->multipleuploads('images',$imgPath);
                $this->blogsModel::$tableSchema['tags'] = $this->filterString($_POST['tags']);
                $this->blogsModel::$tableSchema['date'] = date('Y-m-d');
                $this->blogsModel->insertRec();
                //MAILERRRRRRRRRRRRRRR
                $idArr = $this->blogsModel->getLimit(1,'ORDER BY id DESC');
                $id = $idArr[0]['id'];
                $this->allsubs = $this->subsModel->getAll();
                $message = '<html><body>';
                $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>Hello There Is A New Article Check It</td></tr>";
                $message .= "<tr><td><strong>NEW Article:</strong> </td><td><a href='https://olempos.com/blogs/".$id."'>Here</a></td></tr>";
                $message .= "</table>";
                $message .= "</body></html>";
                if(!empty($this->allsubs)){
                    foreach($this->allsubs as $sub){
                        $this->mailer('info@olympos.com',$sub['email'],$message);
                    }
                }
                $_SESSION['result'] = '<div class="alert alert-success">Added Successfully</div>';
            }
            $this->title = 'Add Blog';
            $this->addBlogActive = 'active';
            $this->blogs = $this->blogsModel->getAll();
            $this->loadHeader();
            $this->renderNav();
            echo $_SESSION['result'];
            $this->_view('addArticleView');
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
            $OldImagesFromDb = $this->blogsModel->getSpec('*','id',$artcID);
            $imgPath = 'C:\xampp\htdocs\olymposweb\public\img\blog\\';
                if($_SERVER['HTTP_REFERER'] == 'http://olymposweb.com:81/admin_hash_blogs/edit/'.$artcID && isset($_POST['title']) && isset($_POST['titleGer']) && isset($_POST['details']) && isset($_POST['detailsGer'])){
                    if(!empty($_FILES['images']['name'][0])){
                        $newImages = $this->multipleuploads('images',$this->imgPath);
                        $old = empty($OldImagesFromDb[0]['imgs']) ? '' : $OldImagesFromDb[0]['imgs'].',';
                        $finalImages = $old.$newImages;
                    }else{
                        $newImages = null;
                    }
                    $inserImage = $newImages == null ? $OldImagesFromDb[0]['imgs'] : $finalImages;
                    $title = $this->filterString($_POST['title']);
                    $titleGer = $this->filterString($_POST['titleGer']);
                    $details = $this->filterString($_POST['details']);
                    $detailsGer = $this->filterString($_POST['detailsGer']);
                    $tags = $this->filterString($_POST['tags']);
                    $this->blogsModel::$tableSchema['title'] = $title;
                    $this->blogsModel::$tableSchema['titleGer'] = $titleGer;
                    $this->blogsModel::$tableSchema['content'] = $details;
                    $this->blogsModel::$tableSchema['contentGer'] = $detailsGer;
                    $this->blogsModel::$tableSchema['tags'] = $tags;
                    $this->blogsModel::$tableSchema['imgs'] = $inserImage;
                    $this->blogsModel::$tableSchema['date'] = date('Y-m-d');
                    if($this->blogsModel->updateRec($artcID)){
                        $_SESSION['result'] = '<div class="alert alert-success">ُEdited Successfully</div>';
                        $this->redirect('../../admin_hash_blogs/edit/'.$artcID);
                        exit();
                    }else{
                        $_SESSION['result'] = '<div class="alert alert-success">Something Wrong</div>';
                        $this->redirect('../../admin_hash_blogs/edit/'.$artcID);
                        exit();
                    }
                    
                }
                if($_SERVER['HTTP_REFERER'] == 'http://olymposweb.com:81/admin_hash_blogs/edit/'.$artcID){
                    $deletedImg = $this->filterString($_POST['images']);
                    $oldimgsarr = $OldImagesFromDb[0]['imgs'];
                    $this->blogsModel::$tableSchema['title'] = $OldImagesFromDb[0]['title'];
                    $this->blogsModel::$tableSchema['titleGer'] = $OldImagesFromDb[0]['titleGer'];
                    $this->blogsModel::$tableSchema['content'] = $OldImagesFromDb[0]['content'];
                    $this->blogsModel::$tableSchema['contentGer'] = $OldImagesFromDb[0]['contentGer'];
                    $this->blogsModel::$tableSchema['tags'] = $OldImagesFromDb[0]['tags'];
                    $this->blogsModel::$tableSchema['date'] = date('Y-m-d');
                    $this->blogsModel::$tableSchema['imgs'] = '';
                    if(file_exists($this->imgPath.$deletedImg)){
                        $this->blogsModel->updateRec($artcID);
                        unlink($this->imgPath.$deletedImg);
                        $_SESSION['result'] = '<div class="alert alert-success">Done</div>';
                        $this->redirect('../../admin_hash_blogs/edit/'.$artcID);
                    }else{
                        $_SESSION['result'] = '<div class="alert alert-danger">Something Wrong</div>';
                        $this->redirect('../../admin_hash_blogs/edit/'.$artcID);
                    }
                    exit();
                }
                if(in_array($_SERVER['HTTP_REFERER'],$this->referes)){
                    if($OldImagesFromDb[0]['imgs'] !== ''){
                        $arrimgs = explode(',',$OldImagesFromDb[0]['imgs']);
                        foreach($arrimgs as $img){
                            unlink($imgPath.$img);
                        }
                    }
                    $this->blogsModel->deleteRec($_POST['artcID']);
                    $_SESSION['result'] = '<div class="alert alert-success">Image Deleted</div>';
                    $this->redirect('../../admin_hash_blogs/edit/'.$artcID);
                    exit();
                }
        }
        if($parmValid === true){
            $this->addBlogActive = 'active';
            $this->idBlog = $this->filterInt($params[0]) ? $params[0] : null;
            if(intval($this->idBlog)){
                $this->title = 'Edit Blog';
                $this->blogs = $this->blogsModel->getWPK($params[0]);
                $this->loadHeader();
                $this->renderNav();
                echo $_SESSION['result'];
                $this->_view('editArticleView');
                $this->loadFooter();
                $_SESSION['result'] = '';
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
                if($this->blogsModel->abstractCheckIfExist('id',$id) > 0){
                    $deletedImg = $this->blogsModel->getSpec('imgs','id',$id);
                    $this->blogsModel->deleteRec($id);
                    unlink($this->imgPath.$deletedImg[0]['imgs']);
                    $_SESSION['result'] = '<div class="alert alert-success">Deleted Successfully</div>';
                }else{
                    $_SESSION['result'] = '<div class="alert alert-danger">Not Found ID</div>';
                }
                $this->redirect('../../admin_hash_blogs');
            }else{
                $_SESSION['result'] = '<div class="alert alert-danger">Somthing Wrong</div>';
                $this->redirect('../../admin_hash_blogs');
            }
        }else{
            $this->invalidparamsAction();
        }
    }
}