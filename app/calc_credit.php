<?php
require_once dirname(__FILE__).'/../config.php';

$credit_value = $_REQUEST['credit_value'];
$credit_years = $_REQUEST['credit_years'];
$credit_interest = $_REQUEST['credit_interest'];

if (! isset($credit_value) && isset($credit_years) && isset($credit_interest) ) {
    $messages [] = 'Błąd. Brak jednego z wymaganych parametrów!';
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

if (empty($messages) ) {
    if (! is_numeric($credit_value) ) {
        $messages [] = 'Pierwsza wartość nie jest liczbą';
    }

    if (! is_numeric($credit_years) ) {
        $messages [] = 'Druga wartość nie jest liczbą';
    } 

    if (! is_numeric($credit_interest) ) {
        $messages [] = 'Trzecia wartość nie jest liczbą';
    }  
}

if (empty($messages) ) {

    $credit_value = intval($credit_value);
    $credit_years = intval($credit_years);
    $credit_interest = intval($credit_interest);

    $result = ($credit_value / ($credit_years*12)) ;
    $result = ($result * $credit_interest/100) + $result ;

    

    }

    include 'calc_credit_view.php';