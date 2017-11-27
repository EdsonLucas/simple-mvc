<?php
class servicosController extends controller {

    public function index() {
    	$array = array();

      $_SESSION['area'] = "servicos";

     	$this->loadTemplate("servicos", $array);
    }

}
