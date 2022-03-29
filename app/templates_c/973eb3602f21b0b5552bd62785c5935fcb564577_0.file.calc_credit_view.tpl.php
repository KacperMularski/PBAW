<?php
/* Smarty version 4.1.0, created on 2022-03-28 16:27:21
  from 'C:\xampp\htdocs\test\app\calc_credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241c5c9dae818_33930286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '973eb3602f21b0b5552bd62785c5935fcb564577' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\app\\calc_credit_view.tpl',
      1 => 1648477548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241c5c9dae818_33930286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18474333916241c5c9d937f5_54228677', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19723548146241c5c9d94377_02665663', 'content');
?>
				
						

					


	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'end'} */
class Block_18474333916241c5c9d937f5_54228677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_18474333916241c5c9d937f5_54228677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'content'} */
class Block_19723548146241c5c9d94377_02665663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19723548146241c5c9d94377_02665663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


					<h2 class="major">Oblicz</h2>

                            							
							<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_credit.php" method="post">
                
								<div class="fields">
									<div class="field">
									<label for="id_credit_value">Kwota kredytu: </label></br>
									<input id="credit_value" type="text" name="credit_value" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['credit_value'];?>
"><br />	
									</div>
									<div class="field">
									<label for="id_credit_years">Lata kreytu: </label></br>
									<input id="id_credit_years" type="text" name="credit_years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['credit_years'];?>
"><br />	
									</div>
                                    <div class="field">
									<label for="id_credit_interest"> Oprocentowanie: </label></br>
									<input id="id_credit_interest" type="text" name="credit_interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['credit_interest'];?>
"><br />	
									</div>
									
								</div>

								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Wylicz" class="button" /></li>
									</ul>
								</div>
							</form>
       
					<div class="col-6 col-12-medium"> 

										<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
						<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
							<h3>Błędy: </h3>
							<ol>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
							<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ol>
						<?php }?>
					<?php }?>
					
										<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
						<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
							<h4>Informacje: </h4>
							<ol>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
							<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ol>
						<?php }?>
					<?php }?>
					
										<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
						<h4>Wynik: </h4>
						<p>
						<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

						</p>
					<?php }?>

					</div>
				
<?php
}
}
/* {/block 'content'} */
}
