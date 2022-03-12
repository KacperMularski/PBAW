<?php require_once dirname(__FILE__) .'/../config.php'; ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
<head>
<meta charset="UTF-8">
<title> Kalkulator kredytowy </title>
</head>
<body>

<form action="<?php print(_APP_URL); ?>/app/calc_credit.php" method="get" >

    <label for="id_credit_value">Kwota kredytu: </label>
    <input id="id_credit_value" type="text" name="credit_value" value="<?php out($credit_value) ?>"><br />

    <label for="id_credit_years"> Lata kredytu: </label>
    <input id="id_credit_years" type="text" name="credit_years" value="<?php out($credit_years) ?>"><br />

    <label for="id_credit_interest"> Oprocentowanie: </label>
    <input id="id_credit_interest" type="text" name="credit_interest" value="<?php out($credit_interest) ?>"><br />

    <input type="submit" value="Wylicz"/>

</form>

<?php
if (isset($messages)) {
        if(count ($messages) > 0 ) {
            echo '<ol style="margin: 20px; padding: 15px 12px 12px 30px; border-radius: 10px; background-color: #f88; width:290px;">';
            foreach ( $messages as $key => $msg) {
                echo '<li>'.$msg.'</li>';
                }
                echo '</ol>';

        }

}
?>

<?php if (isset($result)) { ?>
    <div style="margin: 20px; padding: 15px; border-radius: 10px; background-color: #98C100; width:290px;">
    <?php print("Rata miesięczna to: ".$result) ; ?> 
    </div>  
<?php } ?>


</body>
</html>
