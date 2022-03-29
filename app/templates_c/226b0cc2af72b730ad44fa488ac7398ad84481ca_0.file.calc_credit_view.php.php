<?php
/* Smarty version 4.1.0, created on 2022-03-28 14:43:50
  from 'C:\xampp\htdocs\test\app\calc_credit_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241ad86ce2630_38472010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '226b0cc2af72b730ad44fa488ac7398ad84481ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\app\\calc_credit_view.php',
      1 => 1648471429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241ad86ce2630_38472010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1993311896241ad86cd18e8_20316537', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4104382606241ad86cd2411_28272413', 'content');
?>
				
						

					


	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'end'} */
class Block_1993311896241ad86cd18e8_20316537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1993311896241ad86cd18e8_20316537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'content'} */
class Block_4104382606241ad86cd2411_28272413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4104382606241ad86cd2411_28272413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


							<h2 class="major">Oblicz</h2>
                            <ul class="actions">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_root']->value;?>
/app/security/logout.php" class="button">Wyloguj</a></li>
                            </ul>
                        
						
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
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</form>
                            
					<div class="col-6 col-12-medium">                     

</br><p align="left"> Coś tam </p>
										<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
						<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
							<h4>Wystąpiły błędy: </h4>
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
						<h4>Wynik</h4>
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
