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
	
	
	public function process(){

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
		
		$this->generateView();
	}
	
	
	
	public function generateView() {
		
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Calk');
		getSmarty()->assign('page_header','PHP');
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calc_credit_view.tpl');
	}
}
