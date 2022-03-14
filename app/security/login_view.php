<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title> Logowanie </title>
    </head>

<body>

<div style="width:90%; margin: 4em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked" >
    <fieldset>
        <legend>Logowanie</legend></br>
        <label for="id_login"> Login: </label>
        <input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" /><br />

        <label for="id_pass"> Hasło: </label>
        <input id="id_pass" type="password" name="pass" /><br />

        <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
    </fieldset>
</form>

<?php
if (isset($messages)) {
        if(count ($messages) > 0 ) {
            echo '<ol style="margin: 18px; padding: 15px 12px 12px 30px; border-radius: 10px; background-color: #f88; width:290px;">';
            foreach ( $messages as $key => $msg) {
                echo '<li>'.$msg.'</li>';
            }
            echo '</ol>';

        }

}
?>


</div>

</body>
</html>
