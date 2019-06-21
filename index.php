<?php
/**
 * Created by PhpStorm.
 * User: ChaozzJ
 * Date: 16/11/2017
 * Time: 23:59
 */
define ('DS', DIRECTORY_SEPARATOR);
define ('ROOT', realpath(dirname(__FILE__)). DS );
define ('APP_PATH',ROOT.'application'.DS);
debug_mode(true);
//

require_once  APP_PATH . 'Config.php';
require_once  APP_PATH . 'Request.php';
require_once  APP_PATH . 'Controller.php';
require_once  APP_PATH . 'Model.php';
require_once  APP_PATH . 'Registro.php';
require_once  APP_PATH . 'View.php';
require_once  APP_PATH . 'Bootstrap.php';
require_once  APP_PATH . 'Database.php';
require_once  APP_PATH . 'Sessions.php';
require_once  APP_PATH . 'Encryptor.php';
//require_once  APP_PATH . 'fpdf'.DS.'fpdf.php';
require_once  APP_PATH . 'fpdf'.DS.'fpdftable.php';

function debug_mode($enabled){
  if($enabled==true){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
  }else{
    error_reporting(0);
  }
}
//require_once  APP_PATH . 'Exception.php';
//require_once  APP_PATH . 'PHPMailer.php';
//require_once  APP_PATH . 'SMTP.php';
//require_once "Mail.php";
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
try{
    Sessions::init();
    Bootstrap::run( new Request);
}
catch (Exception $e){
    echo $e->getMessage();
}
