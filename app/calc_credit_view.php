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
							<h2 class="major">Oblicz</h2>
                            <ul class="actions">
                                <li><a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="button">Wyloguj</a></li>
                            </ul>
                        
						
							<form action="<?php print(_APP_ROOT); ?>/app/calc_credit.php" method="post">
                
								<div class="fields">
									<div class="field">
									<label for="id_credit_value">Kwota kredytu: </label></br>
									<input id="credit_value" type="text" name="credit_value" value="<?php out($credit_value) ?>"><br />	
									</div>
									<div class="field">
									<label for="id_credit_years">Lata kreytu: </label></br>
									<input id="id_credit_years" type="text" name="credit_years" value="<?php out($credit_years) ?>"><br />	
									</div>
                                    <div class="field">
									<label for="id_credit_interest"> Oprocentowanie: </label></br>
									<input id="id_credit_interest" type="text" name="credit_interest" value="<?php out($credit_interest) ?>"><br />	
									</div>
									
								</div>

								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Wylicz" class="button" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</form>
                            
				<div class="col-6 col-12-medium">                           
					<?php
						if (isset($messages)) {
        				if(count ($messages) > 0 ) {
           				 echo '<ol style="margin: 20px; padding: 32px 12px 30px 35px; border-radius: 10px; background-color: #f88; width:320px; font-size:22px">';
            			foreach ( $messages as $key => $msg) {
                			echo '<li>'.$msg.'</li>';
            			}
            			echo '</ol>';

       						}

						}
					?>
				</div>

				<div class="col-6 col-12-medium">
					<?php if (isset($result)) { ?>
						<div style="margin: 20px; padding: 30px; border-radius: 10px; background-color: #98C100; width:320px; font-size:30px">
						<?php print("Rata miesięczna to: ".round($result)." zł") ; ?> 
				</div>  
				<?php } ?>

				</div>
				
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