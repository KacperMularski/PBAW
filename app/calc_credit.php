<?php
require_once dirname(__FILE__).'/../config.php';

function getParams( &$credit_value, &$credit_years, &$credit_interest ) { 

    $credit_value = isset($_REQUEST['credit_value']) ? $_REQUEST['credit_value'] : null;
    $credit_years = isset($_REQUEST['credit_years']) ? $_REQUEST['credit_years'] : null;
    $credit_interest = isset($_REQUEST['credit_interest']) ? $_REQUEST['credit_interest'] : null; 
}

function validate( &$credit_value, &$credit_years, &$credit_interest, &$messages ) {

    if (! isset($credit_value) && isset($credit_years) && isset($credit_interest) ) {
        return false;
        }

    if ($credit_value=="") {
        $messages [] = 'Nie podano wartości kredytu!';
        }

    if ($credit_years=="") {
        $messages [] = 'Nie podano lat kredytu!';
        }

    if ($credit_interest=="") {
        $messages [] = 'Nie podano oprocentowania!';
        }

if (count ($messages) != 0) return false;  

if (! is_numeric($credit_value) ) {
        $messages [] = 'Pierwsza wartość nie jest liczbą';
}

if (! is_numeric($credit_years) ) {
        $messages [] = 'Druga wartość nie jest liczbą';
} 

if (! is_numeric($credit_interest) ) {
        $messages [] = 'Trzecia wartość nie jest liczbą';
}  

if (count ($messages) != 0) return false;
else return true;
}

function process (&$credit_value, &$credit_years, &$credit_interest, &$result)
{
    $credit_value = intval($credit_value);
    $credit_years = intval($credit_years);
    $credit_interest = intval($credit_interest);

    $result = ($credit_value / ($credit_years*12)) ;
    $result = ($result * $credit_interest/100) + $result ;

}

$credit_value = null;
$credit_years = null;
$credit_interest = null;
$result = null;
$messages = [];

getParams($credit_value, $credit_years, $credit_interest);
if ( validate($credit_value, $credit_years, $credit_interest, $messages )) {
        process($credit_value, $credit_years, $credit_interest, $result);
}

    

include 'calc_credit_view.php';