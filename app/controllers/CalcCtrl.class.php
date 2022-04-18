<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	  
	private $form;   
	private $result; 
	
	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		
	}
	
	public function getParams(){


		$this->form->credit_value = getFromRequest('credit_value');
		$this->form->credit_years = getFromRequest('credit_years');
		$this->form->credit_interest = getFromRequest('credit_interest');
	}
	
	
	public function validate() {
		
		if (! (isset($this->form->credit_value) && isset($this->form->credit_years) && isset($this->form->credit_interest) )) {
			return false;
			}
		

		if ($this->form->credit_value == "") {
			getMessages()->addError('Nie podano wartości kredytu!');
		}
		if ($this->form->credit_years == "") {
			getMessages()->addError('Nie podano lat kredytu!');
		}
		if ($this->form->credit_interest == "") {
			getMessages()->addError('Nie podano oprocentowania!');
		}
		
		
		if (! getMessages()->isError()) {
			
			
			if (! is_numeric ( $this->form->credit_value )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą!');
			}
			
			if (! is_numeric ( $this->form->credit_years )) {
				getMessages()->addError('Druga wartość nie jest liczbą!');
			}

			if (! is_numeric ( $this->form->credit_interest )) {
				getMessages()->addError('Trzecia wartość nie jest liczbą!');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	
	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->credit_value = intval($this->form->credit_value);
			$this->form->credit_years = intval($this->form->credit_years);
			$this->form->credit_interest = intval($this->form->credit_interest);
			getMessages()->addInfo('Parametry poprawne.');
				
			$this->result->result = ($this->form->credit_value / ($this->form->credit_years*12)) ;
			$this->result->result = ($this->result->result * $this->form->credit_interest/100) + $this->result->result ;
			getMessages()->addInfo('Wykonano obliczenia.');
		}

		try {

				getDB() -> insert ("wynik",[
					"Kwota" => $this->form->credit_value,
					"Lata" => $this->form->credit_years,
					"Oprocentowanie" => $this->form->credit_interest,
					"Rata" => $this->result->result,
					"Data" => date("Y-m-d H:i:s")

				] );

				getMessages()->addInfo('Poprawnie dodano rekord.');

		} catch (\PDOException $ex) {
			getMessages()->addError("Błąd bazy danych: ".$ex->getMessage());
		}
		
		
		$this->generateView();

	}

	

	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	
	
	
	public function generateView() {

		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Kalkulator kredytowy');

		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calcView.tpl');
	}
}
