<?php
namespace controllers;
use models\blogsModel;
use models\servicesModel;
use lib\setdate;
use lib\inputfilter;
use lib\search;
use lib\helper;
class blogsController extends abstractController
{
    use setdate,inputfilter,search,helper;
    protected $blogsModel;
    protected $blogsDetails;
    protected $recentBlogs;
    protected $finalDate;
    public function __construct()
    {
        $this->blogsModel = new blogsModel;
        $this->servicesModel = new servicesModel;
        $this->servicesFooter = $this->servicesModel->getLimit(6);
    }
    public function defaultAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            $this->blogsDetails = $this->blogsModel->getAll();
            $this->loadHeader();
            $this->title = $this->ger == 'GER'.DS ? 'Blog' :'المدونه';
            $this->renderNav();
            $this->_view('blogView');
            $this->loadFooter();
        }else{
            $this->invalidparamsAction();
        }
    }
    public function detailsAction($params)
    {
        $parmValid = $this->setParams($params,1);
        if($parmValid === true){
            if($this->filterInt($params[0])){
                $this->blogsDetails = $this->blogsModel->getWPK($params[0]);
                $this->recentBlogs = $this->blogsModel->getLimit(4);
                $date = $this->setDate($this->blogsDetails[0]['date']);
                $dateDetails = $date[0];
                $year = $dateDetails[0];
                $month = $dateDetails[1];
                $day = $dateDetails[2];
                $this->finalDate = $day .' '. $date[1][$month] .' ' .$year;
                $this->loadHeader();
                $this->title = $this->ger == 'GER'.DS ? 'Blog' :'المدونه';
                $this->renderNav();
                $this->_view('blog_detailsView');
                $this->loadFooter();
            }else{
                $this->invalidparamsAction();
            }
        }else{
            $this->invalidparamsAction();
        }
    }
    public function searchAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tag'])){
                $tag = $this->filterString($_POST['tag']);
                $this->blogsDetails = $this->searchBlog($tag);
                $this->loadHeader();
                $this->title = $this->ger == 'GER' ? 'Blog' :'المدونه';
                $this->renderNav();
                $this->_view('blog_searchView');
                $this->loadFooter();
            }else{
                $this->redirect('../../../');
            }
        }else{
            $this->invalidparamsAction();
        }
    }
    public function tagsAction($params)
    {
        $parmValid = $this->setParams($params,0);
        if($parmValid === true){
            if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['tag'])){
                $tag = $this->filterString($_GET['tag']);
                $_SESSION['tag'] = $tag; 
                // echo $_SESSION['tag'];
                $this->blogsDetails = $this->searchBlog($tag);
                $this->loadHeader();
                $this->title = $this->ger == 'GER' ? 'Blog' :'المدونه';
                $this->renderNav();
                $this->_view('blog_searchView');
                $this->loadFooter();
            }else{
                $this->redirect('../../../');
            }
        }else{
            $this->invalidparamsAction();
        }
    }
}