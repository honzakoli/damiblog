<?php

class Application
{
	public $pageDefault = "indexTwo";
	private $db;

	public function __construct($database)
	{
		$this->db = $database;
	}

	public function renderPage($params)
	{
		extract([
			'database' => $this->db
		]);
		// $database = $this->db;
		$page = isset($params['page']) ? $params['page'] : $this->pageDefault;
		return include BASE_DIR . "/pages/" . $page . '.php';
	}
}
