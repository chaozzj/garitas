<?php
/**
 * Created by PhpStorm.
 * User: chaozzj
 * Date: 07-28-18
 * Time: 03:00 PM
 */

 class indexModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    /**Xchange Rate CRUD**/

    public function get_garitas(){
        $content = file_get_contents("https://apps.cbp.gov/bwt/bwt.xml");
        $xml = simplexml_load_string($content);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        return $xml;
    }

}
