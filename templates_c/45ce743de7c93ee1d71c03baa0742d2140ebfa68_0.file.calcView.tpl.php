<?php
/* Smarty version 4.1.0, created on 2022-04-18 15:56:47
  from 'C:\xampp\htdocs\app_calc\app\views\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625d6e1f941a96_79821674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ce743de7c93ee1d71c03baa0742d2140ebfa68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app_calc\\app\\views\\calcView.tpl',
      1 => 1650290084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625d6e1f941a96_79821674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_893983657625d6e1f9303a8_31722271', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_470948630625d6e1f930ce8_68120640', 'content');
?>
				
						

					


	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_893983657625d6e1f9303a8_31722271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_893983657625d6e1f9303a8_31722271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'content'} */
class Block_470948630625d6e1f930ce8_68120640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_470948630625d6e1f930ce8_68120640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<h2 class="major">Oblicz</h2>
			<div class="roles">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
 </br> 
			Rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</div>

                    
					<ul class="actions">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button">Wyloguj</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
database" class="button">Baza wyników</a></li>
						
                    </ul>
					
							
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
                
						<div class="fields">
							<div class="field">
							<label for="id_credit_value">Kwota kredytu: </label></br>
							<input id="credit_value" type="text" name="credit_value" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->credit_value;?>
"><br />	
							</div>
							<div class="field">
							<label for="id_credit_years">Lata kredytu: </label></br>
							<input id="id_credit_years" type="text" name="credit_years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->credit_years;?>
"><br />	
							</div>
                            <div class="field">
							<label for="id_credit_interest"> Oprocentowanie: </label></br>
							<input id="id_credit_interest" type="text" name="credit_interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->credit_interest;?>
"><br />	
							</div>
									
						</div>

						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" value="Wylicz" class="button" /></li>
							</ul>
						</div>
					</form>
       
					

										<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
						
				            <h4 class="al">Błędy: </h4>
							
							<ol class ="errors">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
							<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ol>
						
					<?php }?>
					
										<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
						 
							<h4 class="al">Informacje: </h4>
							<ol class="infos">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
							<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ol>
						
					<?php }?>
					
										<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
						<h4 class="al">Rata miesięczna: </h4>
						<p class="result">
						<?php echo round($_smarty_tpl->tpl_vars['res']->value->result);
echo " zł";?>

						</p>
					<?php }?>

					
				
<?php
}
}
/* {/block 'content'} */
}
