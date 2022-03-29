<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';


class CalcCtrl {

	private $msgs;   
	private $form;   
	private $result; 
	

	public function __construct(){
		
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		
	}
	
	public function getParams(){


		$this->form->credit_value = isset($_REQUEST['credit_value']) ? $_REQUEST['credit_value'] : null;
		$this->form->credit_years = isset($_REQUEST['credit_years']) ? $_REQUEST['credit_years'] : null;
		$this->form->credit_interest = isset($_REQUEST['credit_interest']) ? $_REQUEST['credit_interest'] : null; 
	}
	
	
	public function validate() {
		
		if (! (isset($this->form->credit_value) && isset($this->form->credit_years) && isset($this->form->credit_interest) )) {
			return false;
			}
		

		if ($this->form->credit_value == "") {
			$this->msgs->addError('Nie podano wartości kredytu!');
		}
		if ($this->form->credit_years == "") {
			$this->msgs->addError('Nie podano lat kredytu!');
		}
		if ($this->form->credit_interest == "") {
			$this->msgs->addError('Nie podano oprocentowania!');
		}
		
		
		if (! $this->msgs->isError()) {
			
			
			if (! is_numeric ( $this->form->credit_value )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą!');
			}
			
			if (! is_numeric ( $this->form->credit_years )) {
				$this->msgs->addError('Druga wartość nie jest liczbą!');
			}

			if (! is_numeric ( $this->form->credit_interest )) {
				$this->msgs->addError('Trzecia wartość nie jest liczbą!');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->credit_value = intval($this->form->credit_value);
			$this->form->credit_years = intval($this->form->credit_years);
			$this->form->credit_interest = intval($this->form->credit_interest);
			$this->msgs->addInfo('Parametry poprawne.');
				
			$this->result->result = ($this->form->credit_value / ($this->form->credit_years*12)) ;
			$this->result->result = ($this->result->result * $this->form->credit_interest/100) + $this->result->result ;
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','Calk');
		$smarty->assign('page_header','PHP');
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc_credit_view.tpl');
	}
}
