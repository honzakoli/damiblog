<?php
	class Page
	{
		// attributes
			public $pageDefault = "indexTwo";
		// methods
			public function __set($name, $value)
			{
				$this->$name = $value;
			}
			public function __get($name)
			{
				$this->$name;
			}

			public function renderPage($params)
			{
				global $database;
				$page = isset($params['page']) ? $params['page'] : $this->pageDefault;
				return include BASE_DIR . "/pages/" . $page . '.php';
			}

	}


?>