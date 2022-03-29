<?php
/* Smarty version 4.1.0, created on 2022-03-27 23:54:56
  from 'C:\xampp\htdocs\test\app\calc_credit_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6240dd3097b4e7_22821601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fc8cc8a2296ce89c04abb54b9ee68bdeaafcb7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\app\\calc_credit_view.php',
      1 => 1648418076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240dd3097b4e7_22821601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7795164746240dd30970032_72494457', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4409656296240dd30971a71_95370550', 'content');
?>
				
						

					


	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'end'} */
class Block_7795164746240dd30970032_72494457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_7795164746240dd30970032_72494457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'content'} */
class Block_4409656296240dd30971a71_95370550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4409656296240dd30971a71_95370550',
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
				<p> <?php echo '<?php'; ?>
 print("Wynik to:".$result); <?php echo '?>'; ?>
 </p> 
				

				</div>
<?php
}
}
/* {/block 'content'} */
}
