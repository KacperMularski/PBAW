{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=content}

    <a href="index.php" class="button">Strona główna</a>

    </br></br>

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


    {foreach $database as $item}
        {strip}
            <table id="records">
                <tr>
                    <td> {"ID:  "} {$item["id_wyniku"]} </td>
                    <td> {"Kwota:  "} {$item["Kwota"]} </td>
                    <td> {"Lata:  "} {$item["Lata"]} </td>
                    <td> {"Oprocentowanie:  "} {$item["Oprocentowanie"]} </td>
                    <td> {"Rata:  "} {$item["Rata"]} </td>
                    <td> {"Data:  "} {$item["Data"]} </td>
                    </br>
                </tr>
        {/strip} 
    {/foreach}	

            </table>				
{/block}				
						

					


	