<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

//include _ROOT_PATH.'/app/security/check.php'; 

function getParams( &$form ) { 

    $form['credit_value'] = isset($_REQUEST['credit_value']) ? $_REQUEST['credit_value'] : null;
    $form['credit_years'] = isset($_REQUEST['credit_years']) ? $_REQUEST['credit_years'] : null;
    $form['credit_interest'] = isset($_REQUEST['credit_interest']) ? $_REQUEST['credit_interest'] : null; 
}

function validate( &$form, &$messages, &$infos ) {

    if (! (isset($form['$credit_value']) && isset($form['credit_years']) && isset($form['credit_interest']) )) {
        return false;
        }

    $infos [] = 'Przekazano parametry';    

    if ($form['credit_value'] == "") {
        $messages [] = 'Nie podano wartości kredytu!';
        }

    if ($form['credit_years'] == "") {
        $messages [] = 'Nie podano lat kredytu!';
        }

    if ($form['credit_interest'] == "") {
        $messages [] = 'Nie podano oprocentowania!';
        }

if (count($messages) == 0) { 

        if (! is_numeric($form['credit_value']) ) {
                $messages [] = 'Pierwsza wartość nie jest liczbą';
        }

        if (! is_numeric($form['credit_years']) ) {
                $messages [] = 'Druga wartość nie jest liczbą';
        } 

        if (! is_numeric($form['credit_interest']) ) {
                $messages [] = 'Trzecia wartość nie jest liczbą';
        }  
}

if (count ($messages) > 0) return false;
else return true;

}

function process (&$form, &$result, &$infos)
{
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

    $form['credit_value'] = floatval($form['credit_value']);
    $form['credit_years'] = floatval($form['credit_years']);
    $form['credit_interest'] = floatval($form['credit_interest']);
	

    $result = $form['credit_value'] / ($form['credit_years']*12) ;
    $result = ($result * $form['credit_interest']/100) + $result ;

}

$form = null;
$infos = array();
$result = null;
$messages = array();

getParams($form);
if ( validate($form, $messages, $infos )) {
        process($form, $infos, $messages, $result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','kalk');
$smarty->assign('page_header','Szablony Smarty');


$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);


$smarty->display(_ROOT_PATH.'/app/calc_credit_view.tpl');