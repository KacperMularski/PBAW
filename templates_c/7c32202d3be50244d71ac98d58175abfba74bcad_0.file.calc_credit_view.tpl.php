<?php
/* Smarty version 4.1.0, created on 2022-03-28 17:53:13
  from 'C:\xampp\htdocs\test\app\calc_credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241d9e9852667_13934591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c32202d3be50244d71ac98d58175abfba74bcad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\app\\calc_credit_view.tpl',
      1 => 1648482782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241d9e9852667_13934591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18183688366241d9e983f4d0_30036913', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17021914186241d9e9840798_73637311', 'content');
?>
				
						

					


	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'end'} */
class Block_18183688366241d9e983f4d0_30036913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_18183688366241d9e983f4d0_30036913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'content'} */
class Block_17021914186241d9e9840798_73637311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17021914186241d9e9840798_73637311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<h2 class="major">Oblicz</h2>

                    							
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc_credit.php" method="post">
                
						<div class="fields">
							<div class="field">
							<label for="id_credit_value">Kwota kredytu: </label></br>
							<input id="credit_value" type="text" name="credit_value" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->credit_value;?>
"><br />	
							</div>
							<div class="field">
							<label for="id_credit_years">Lata kreytu: </label></br>
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
						
							<h3>Błędy: </h3>
							<div class="err">
							<ol>
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
							</div></ol>
						
					<?php }?>
					
										<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
						 
							<h4>Informacje: </h4>
							<ol>
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
						<h4>Wynik: </h4>
						<p>
						<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

						</p>
					<?php }?>

					
				
<?php
}
}
/* {/block 'content'} */
}
