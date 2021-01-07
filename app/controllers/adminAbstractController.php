<?php
namespace controllers;
use lib\frontController;
class adminAbstractController
{
    public $catgs;
    public $activeCatg;
    protected $Href;
    protected $mainURL;
    public function referer()
    {
        $this->mainURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
        $this->Href = [
            $this->mainURL.'admin_hash_login',$this->mainURL.'admin_hash_login/',
            $this->mainURL.'admin_hash_login/default',$this->mainURL.'admin_hash_login/default/',
        ];
    }
    protected function loadHeader()
    {
        $this->loadTemp('admin/templateHeader');
    }
    protected function renderNav()
    {
        $this->loadTemp('admin/nav');
    }
    protected function loadFooter()
    {
        echo '<script>document.title = "'.$this->title.'"</script>';
        $this->loadTemp('admin/appFooter');
        $this->loadTemp('admin/templateFooter');
    }
    public function _view($view)
    {
        require_once APP_PATH.'views'. DS . 'admin' . DS . $view . '.php';
    }
    public function loadTemp($temp)
    {
        require_once TEMPENG . DS . $temp.'.php';
    }
    public function setParams($params,$count)
    {
        if(count($params) != $count){
            return false;
        }else{
            return true;
        }
    }
    public function invalidparamsAction()
    {
        echo 'Invalid Params';
    }
}