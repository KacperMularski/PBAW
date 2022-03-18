<!DOCTYPE HTML>
<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-gem"></span></div>
							<h2>Kalkulator kredytowy</h2>
							
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">


						
				<!-- Footer -->
					<section id="footer" class="wrapper spotlight style1">
						<div class="inner">
							<h2 class="major">Logowanie</h2>
                        
						
							<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
								<div class="fields">
									<div class="field">
									<label for="id_login">Login: </label></br>
									<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>"><br />	
									</div>
									<div class="field">
									<label for="id_credit_years"> Hasło: </label></br>
									<input id="id_credit_years" type="password" name="pass"><br />	
									</div>
									
								</div>
								<ul class="actions">
								<li>
								<input type="submit" value="Zaloguj" />
								</li>	
								</ul>
							</form>
							
				<?php
				if (isset($messages)) {
						if(count ($messages) > 0 ) {
							echo '<ol style="margin: 18px; padding: 15px 12px 12px 30px; border-radius: 10px; background-color: #f88; width:290px; font-size:26px">';
							foreach ( $messages as $key => $msg) {
								echo '<li>'.$msg.'</li>';
							}
							echo '</ol>';

						}

				}
				?>
                        
				
							<ul class="copyright">
								<li>&copy; Untitled Inc. All rights reserved.</li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="<?php print(_APP_URL); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php print(_APP_URL); ?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php print(_APP_URL); ?>/assets/js/browser.min.js"></script>
			<script src="<?php print(_APP_URL); ?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php print(_APP_URL); ?>/assets/js/util.js"></script>
			<script src="<?php print(_APP_URL); ?>/assets/js/main.js"></script>

	</body>
</html>