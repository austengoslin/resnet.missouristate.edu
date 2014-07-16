<?php

class Database
{
	private $pdo;
	public $PageTitle;
	public $fileName;
	public $extraCSS;
	public $androidVideo;
	public $quickTimeVideo;
	public $description;
	public $content;
	public $category;
	
	
	public function Database()
	{
		$this->pdo = new PDO('sqlite:'.__SITE_ROOT__.'includes/database.sqlite');
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$error = $this->pdo->errorInfo();
		if($error[0] !='') {
			print "<p>DATABASE CONNECTION ERROR</p>";
			print_r($error);
		}
	}
	
	
}