<?php

function toUpper($matches) {
	return strtoupper($matches[1]);
}

class Core {

	public function run() {
        $url = explode('mvc', $_SERVER['REQUEST_URI']);
        $url = end($url);

				$params = array();
				if(!empty($url) && $url != '/') {
					$url = explode('/', $url);
					array_shift($url);

					$upper = preg_replace_callback('/[-_](.)/', 'toUpper', $url[0]);

					$currentController = $upper.'Controller';

					if(isset($url[0]) && class_exists($currentController)) {
						$currentAction = 'index';
						array_shift($url);
					} else {
						$currentController = 'homeController';
						$currentAction = 'index';
					}

					if(count($url) > 0) {
						$params = $url;
					}

				} else {
					$currentController = 'homeController';
					$currentAction = 'index';
				}

				$c = new $currentController();
				call_user_func_array(array($c, $currentAction), $params);

	}

}
