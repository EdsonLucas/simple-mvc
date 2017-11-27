<?php
class empresaController extends controller {

    public function index() {
        $array = array();

        $_SESSION['area'] = "empresa";

        $this->loadTemplate("empresa");
    }

}
