<?php

class controller {

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/template.php';
	}

	public function loadView($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

}