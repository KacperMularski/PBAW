{extends file="../../templates/main.html"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=content}

			<h2 class="major">Oblicz</h2>

                    {* Przycisk wylogowania
					<ul class="actions">
                        <li><a href="{$conf->app_root}/app/security/logout.php" class="button">Wyloguj</a></li>
                    </ul>
					*}
							
					<form action="{$conf->action_root}calcCompute" method="post">
                
						<div class="fields">
							<div class="field">
							<label for="id_credit_value">Kwota kredytu: </label></br>
							<input id="credit_value" type="text" name="credit_value" value="{$form->credit_value}"><br />	
							</div>
							<div class="field">
							<label for="id_credit_years">Lata kreytu: </label></br>
							<input id="id_credit_years" type="text" name="credit_years" value="{$form->credit_years}"><br />	
							</div>
                            <div class="field">
							<label for="id_credit_interest"> Oprocentowanie: </label></br>
							<input id="id_credit_interest" type="text" name="credit_interest" value="{$form->credit_interest}"><br />	
							</div>
									
						</div>

						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" value="Wylicz" class="button" /></li>
							</ul>
						</div>
					</form>
       
					

					{*Błędy*}
					{if $msgs->isError()}
						
				            <h4 class="al">Błędy: </h4>
							
							<ol class ="errors">
							{foreach $msgs->getErrors() as $err}
							{strip}
								<li>{$err}</li>
							{/strip}
							{/foreach}
							</ol>
						
					{/if}
					
					{*Informacje*}
					{if $msgs->isInfo()}
						 
							<h4 class="al">Informacje: </h4>
							<ol class="infos">
							{foreach $msgs->getInfos() as $inf}
							{strip}
								<li>{$inf}</li>
							{/strip}
							{/foreach}
							</ol>
						
					{/if}
					
					{*Wynik*}
					{if isset($res->result)}
						<h4 class="al">Rata miesięczna: </h4>
						<p class="result">
						{round($res->result)}{" zł"}
						</p>
					{/if}

					
				
{/block}				
						

					


	