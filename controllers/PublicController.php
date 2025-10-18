<?php

require_once 'views/PublicView.php';

class PublicController {
    private $publicView;

    public function __construct(){
        $this->publicView = new PublicView();
    }

    public function showHome(){
        $this->publicView->showHome();
    }

    public function showFormLogin(){
        $this->publicView->mostrarFormulario();
    }
}