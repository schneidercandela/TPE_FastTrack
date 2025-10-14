<?php
require_once 'libs/Smarty.class.php';

class PublicView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);       
    }

    public function showHome(){
        $this->smarty->display('home.tpl');
    }
}