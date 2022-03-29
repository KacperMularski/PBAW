<?php
/* Smarty version 4.1.0, created on 2022-03-28 18:08:40
  from 'C:\xampp\htdocs\test\app\calc_credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241dd884a72a4_26008081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '973eb3602f21b0b5552bd62785c5935fcb564577' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\app\\calc_credit_view.tpl',
      1 => 1648483718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241dd884a72a4_26008081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3876147036241dd88495388_15728991', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20666379746241dd88495e35_83050829', 'content');
?>
				
						

					


	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'end'} */
class Block_3876147036241dd88495388_15728991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_3876147036241dd88495388_15728991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'content'} */
class Block_20666379746241dd88495e35_83050829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20666379746241dd88495e35_83050829',
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
						<h4 class="al">Wynik: </h4>
						<p class="result">
						<?php echo round($_smarty_tpl->tpl_vars['res']->value->result);?>

						</p>
					<?php }?>

					
				
<?php
}
}
/* {/block 'content'} */
}
