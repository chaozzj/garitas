<?php

class indexController extends Controller
{
    private $_datamodel;

    public function __construct()
    {
        parent::__construct();
        $this->_datamodel=$this->loadModel('index');
    }

    public function index(){
        $this->_view->title="Garitas";
        $this->_view->tagline=APP_SLOGAN;
        $this->_view->company=APP_COMPANY;
        $this->_view->_garita_data=$this->_datamodel->get_garitas();
        $this->_view->renderizar('index');
    }
}