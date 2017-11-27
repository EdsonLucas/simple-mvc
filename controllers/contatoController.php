<?php
class contatoController extends controller {

    public function index() {
    	$array = array();

      $_SESSION['area'] = "contato";

     	$this->loadTemplate("contato", $array);

    }

}
