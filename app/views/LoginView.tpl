{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=content}

			<h2 class="major">Logowanie</h2>

    
							
					<form action="{$conf->action_url}login" method="post">
                
						<div class="fields">
							<div class="field">
							<label for="id_login">Login: </label></br>
							<input id="id_login" type="text" name="login" /><br />	
							</div>
							<div class="field">
							<label for="id_pass">Hasło: </label></br>
							<input id="id_pass" type="password" name="pass" /><br />	
							</div>
                            
									
						</div>

						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" value="Zaloguj" class="button" /></li>
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
					
					

					
				
{/block}				
						

					


	