<?php
class homeController extends controller {

    public function index() {
    	$array = array();

      $_SESSION['area'] = "index";

     	$this->loadTemplate("home", $array);
    }

}
