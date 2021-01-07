<?php
namespace controllers;
use lib\frontController;
class abstractController
{
    protected $mainURL;
    protected $Href;
    protected $title;
    protected $servicesFooter;
    protected $ger;
    public function referer($params)
    {
        $parm = isset($params) ? $params : '';
        $get = explode('?',$_SERVER["HTTP_REFERER"]);
        $tagVal = isset($_SESSION['tag']) ? $_SESSION['tag'] : '';
        $lang = end($get) == 'lang=ger' ? '?lang=ger' : '';
        $this->mainURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
        $this->Href = [
            $this->mainURL.$lang,$this->mainURL.'/'.$lang,
            $this->mainURL.'main'.$lang,$this->mainURL.'main/'.$lang,$this->mainURL.'main/default'.$lang,$this->mainURL.'main/default/'.$lang,
            $this->mainURL.'about_us'.$lang,$this->mainURL.'about_us/'.$lang,$this->mainURL.'about_us/default'.$lang,$this->mainURL.'about_us/default/'.$lang,
            $this->mainURL.'our_services'.$lang,$this->mainURL.'our_services/'.$lang,$this->mainURL.'our_services/default'.$lang,$this->mainURL.'our_services/default/'.$lang,
            $this->mainURL.'our_services/details/'.$parm.$lang,
            $this->mainURL.'blogs'.$lang,$this->mainURL.'blogs/'.$lang,$this->mainURL.'blogs/default'.$lang,$this->mainURL.'blogs/default/'.$lang,
            $this->mainURL.'blogs/tags?lang=ger&tag='.$tagVal,$this->mainURL.'blogs/tags?tag='.$tagVal,
            $this->mainURL.'blogs/details/'.$parm.$lang,$this->mainURL.'blogs/search'.$lang,
            $this->mainURL.'contact_us'.$lang,$this->mainURL.'contact_us/'.$lang,$this->mainURL.'contact_us/default'.$lang,$this->mainURL.'contact_us/default/'.$lang,
            $this->mainURL.'search'.$lang,$this->mainURL.'search/'.$lang,$this->mainURL.'search/default'.$lang,$this->mainURL.'search/default/'.$lang,
        ];
    }
    protected function loadHeader()
    {
        if(isset($_GET['lang']) && $_GET['lang'] != 'ger'){
            $this->invalidparamsAction();
            exit();
        }else{
            $this->ger = isset($_GET['lang']) && $_GET['lang'] == 'ger' ? 'GER'.DS : null;
            $this->loadTemp($this->ger.'templateHeader');
        }
    }
    protected function renderNav()
    {
        $this->loadTemp($this->ger.'nav');
    }
    protected function loadFooter()
    {
        echo '<script>document.title = "'.$this->title.'"</script>';
        $this->loadTemp($this->ger.'appFooter');
        $this->loadTemp($this->ger.'templateFooter');
    }
    public function _view($view)
    {
        $lang = isset($_GET['lang']) && $_GET['lang'] == 'ger' ? DS.'GER' : null;
        require_once APP_PATH.'views'.$lang. DS . $view . '.php';
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
        $this->title="Page Not Found";
        $this->bodyBG = 'style="background-color:#001d38"';
        $this->loadTemp('templateHeader');
        $this->_view('notFoundView');
        echo '<script>document.title = "'.$this->title.'"</script>';
    }
    private function loadTemp($temp)
    {
        require_once TEMPENG . $temp.'.php';
    }
}