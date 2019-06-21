<?php
/**
 * Created by PhpStorm.
 * User: lilsa
 * Date: 17/11/2017
 * Time: 00:16
 */
class View
{
    private $_controlador;
    private $_js;

    public function __construct(Request $peticion)
    {
        $this->_controlador = $peticion->getControlador();
        $this->_js=array();
    }

    public function renderizar($vista, $item = false)
    {

        $menu= array(
            array(
                'id'=> 'inicio',
                'titulo'=> 'Inicio',
                'enlace'=> BASE_URL),
            array(
                'id'=> 'inicio',
                'titulo'=> 'Orientación Financiera',
                'enlace'=> BASE_URL .'orientacion'),
            array(
                'id'=> 'inicio',
                'titulo'=> 'Abrir Cuenta',
                'enlace'=> BASE_URL. 'account')
            );

        $js=array();

        if(count($this->_js)){
            $js=$this->_js;
        }

        $_layoutParams = array(
            'path_css' => BASE_URL . 'views/layouts/'. DEFAULT_LAYOUT . '/css/',
            'path_js' => BASE_URL . 'views/layouts/'. DEFAULT_LAYOUT . '/js/',
            'path_img' => BASE_URL . 'views/layouts/'. DEFAULT_LAYOUT . '/img/',
            'path_plugin' => BASE_URL . 'views/layouts/'. DEFAULT_LAYOUT . '/plugin/',
            'path_addon' => BASE_URL . 'views/layouts/'. DEFAULT_LAYOUT . '/addon/',
            'menu'=>$menu,
            'JS'=> $js
        );

        $rutaView = ROOT.'views'.DS.$this->_controlador.DS.$vista.'.phtml';

        if(is_readable($rutaView)) {
           /*  if(!Sessions::get('autenticado')){
                include_once $rutaView;
            }else{
                include_once ROOT . 'views'.DS.'layouts'.DS.DEFAULT_LAYOUT.DS.'header4.php';
                include_once $rutaView;
                include_once ROOT . 'views'.DS.'layouts'.DS.DEFAULT_LAYOUT.DS.'footer4.php';
            } */
            include_once ROOT . 'views'.DS.'layouts'.DS.DEFAULT_LAYOUT.DS.'header4.php';
            include_once $rutaView;
            include_once ROOT . 'views'.DS.'layouts'.DS.DEFAULT_LAYOUT.DS.'footer4.php';
        }
        else{
            throw new Exception('Error de vista.');
        }
    }
    public function setJs(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0;$i<count($js);$i++){
                $this->_js[]= BASE_URL.'views/'.$this->_controlador.'/js/'.$js[$i].'.js';
            }
        }
        else{
            throw new Exception('Js Not Found');
        }
    }
}