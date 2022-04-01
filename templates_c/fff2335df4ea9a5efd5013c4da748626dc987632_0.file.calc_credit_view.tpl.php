<?php
/* Smarty version 4.1.0, created on 2022-04-01 16:31:19
  from 'C:\xampp\htdocs\app_calc\app\views\calc_credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62470cb7c658f7_83240632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fff2335df4ea9a5efd5013c4da748626dc987632' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app_calc\\app\\views\\calc_credit_view.tpl',
      1 => 1648822222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62470cb7c658f7_83240632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183677121862470cb7b71c96_62253181', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115141741862470cb7b72a97_55077202', 'content');
?>
				
						

					


	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_183677121862470cb7b71c96_62253181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_183677121862470cb7b71c96_62253181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'content'} */
class Block_115141741862470cb7b72a97_55077202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_115141741862470cb7b72a97_55077202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<h2 class="major">Oblicz</h2>

                    							
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
                
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
