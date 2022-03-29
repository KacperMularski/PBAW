{extends file="../templates/main.html"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=content}

					<h2 class="major">Oblicz</h2>

                            {* Przycisk wylogowania
							<ul class="actions">
                                <li><a href="{$app_root}/app/security/logout.php" class="button">Wyloguj</a></li>
                            </ul>
							*}
							
							<form action="{$app_url}/app/calc_credit.php" method="post">
                
								<div class="fields">
									<div class="field">
									<label for="id_credit_value">Kwota kredytu: </label></br>
									<input id="credit_value" type="text" name="credit_value" value="{$form['credit_value']}"><br />	
									</div>
									<div class="field">
									<label for="id_credit_years">Lata kreytu: </label></br>
									<input id="id_credit_years" type="text" name="credit_years" value="{$form['credit_years']}"><br />	
									</div>
                                    <div class="field">
									<label for="id_credit_interest"> Oprocentowanie: </label></br>
									<input id="id_credit_interest" type="text" name="credit_interest" value="{$form['credit_interest']}"><br />	
									</div>
									
								</div>

								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Wylicz" class="button" /></li>
									</ul>
								</div>
							</form>
       
					<div class="col-6 col-12-medium"> 

					{*Błędy*}
					{if isset($messages)}
						{if count($messages) > 0} 
							<h3>Błędy: </h3>
							<ol>
							{foreach  $messages as $msg}
							{strip}
								<li>{$msg}</li>
							{/strip}
							{/foreach}
							</ol>
						{/if}
					{/if}
					
					{*Informacje*}
					{if isset($infos)}
						{if count($infos) > 0} 
							<h4>Informacje: </h4>
							<ol>
							{foreach  $infos as $msg}
							{strip}
								<li>{$msg}</li>
							{/strip}
							{/foreach}
							</ol>
						{/if}
					{/if}
					
					{*Wynik*}
					{if isset($result)}
						<h4>Wynik: </h4>
						<p>
						{$result}
						</p>
					{/if}

					</div>
				
{/block}				
						

					


	