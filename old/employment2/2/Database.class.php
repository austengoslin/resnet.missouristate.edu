<?php

/**
 * @name Database class
 * @abstract handles all database querying used by the blogposting thingy 
 */



		


class Database
{
	private $pdo;

	public function Database()
	{
		

try {
    /*** connect to SQLite database ***/
    $dbh = new PDO("sqlite:c:\inetpub\wwwroot\employment\employment.s3db");
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }


	}
	protected function checkStmt($stmt, $errorText)
	{
		if(!$stmt){
			$err = $this->pdo->errorInfo();
			throw new RuntimeException($errorText . $err[2]);
		}
	}

	protected function checkStmtExecute($stmt, $errorText)
	{
		if(!$stmt->execute()){
			//throw exception.
			$err = $this->pdo->errorInfo();
			throw new RuntimeException($error.$err[2]);
		}
	}


	
	public function addResume($name, $email, $phone, $mobile, $address1, $address2)
	{
		try {
			$sql = "INSERT INTO employment(name, email, phone, mobile, address1, address2)
					VALUES(:name, :email, :phone, :mobile, :address1, :address2)";
			$stmt = $this->pdo->prepare($sql);
			$this->checkStmt($stmt, 'Adding Article to Database Failed  [Database.class.php - function addArticle()]:');
			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
			$stmt->bindValue(':email', $email, PDO::PARAM_STR);
			$stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
			$stmt->bindValue(':mobile', $mobile, PDO::PARAM_STR);
			$stmt->bindValue(':address1', $address1, PDO::PARAM_STR);
			$stmt->bindValue(':address2', $address2, PDO::PARAM_STR);
			$this->checkStmtExecute($stmt, 'Execution of addResme() failed');
	
		}catch (PDOException $e) {
			echo $e->getMessage();
		}

	}
	
	
		
	

	
	
	





}


	?>


