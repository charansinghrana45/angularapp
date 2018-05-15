<?php defined('BASEPATH') or die("no direct access allowed.");

class MY_Loader extends CI_Loader {
 
  public function __construct() {
    parent::__construct();
  }
 
  public function iface($strInterfaceName) {
    require_once APPPATH . '/interfaces/' . $strInterfaceName . '.php';
  }

  public function sayHello()
  {
  	echo "hello";
  }
 
}