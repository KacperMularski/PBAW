<?php


namespace app\controllers;

class DataBaseCtrl {

	
public $database;

public function action_database() {			

	try {

		$this->database = getDB()->select("wynik","*");	


		} catch (\PDOException $ex) {
			getMessages()->addError("Błąd bazy danych: ".$ex->getMessage());
		}

    	$this->generateView();	

		}
	
	

public function generateView() {

		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Kalkulator kredytowy - Historia');

	    getSmarty()->assign('database', $this->database);
		getSmarty()->display('RecordsView.tpl');	
			
	}

}