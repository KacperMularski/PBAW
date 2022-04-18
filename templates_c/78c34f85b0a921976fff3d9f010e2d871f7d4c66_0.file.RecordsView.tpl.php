<?php
/* Smarty version 4.1.0, created on 2022-04-18 16:51:57
  from 'C:\xampp\htdocs\app_calc\app\views\RecordsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625d7b0d1cae77_42785469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78c34f85b0a921976fff3d9f010e2d871f7d4c66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app_calc\\app\\views\\RecordsView.tpl',
      1 => 1650293508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625d7b0d1cae77_42785469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_983978180625d7b0d1ba3d1_66309730', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_732880130625d7b0d1bade0_38168078', 'content');
?>
				
						

					


	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_983978180625d7b0d1ba3d1_66309730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_983978180625d7b0d1ba3d1_66309730',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'content'} */
class Block_732880130625d7b0d1bade0_38168078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_732880130625d7b0d1bade0_38168078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <a href="index.php" class="button">Strona główna</a>

    </br></br>

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


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['database']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <table id="records"><tr><td> <?php echo "ID:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value["id_wyniku"];?>
 </td><td> <?php echo "Kwota:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value["Kwota"];?>
 </td><td> <?php echo "Lata:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value["Lata"];?>
 </td><td> <?php echo "Oprocentowanie:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value["Oprocentowanie"];?>
 </td><td> <?php echo "Rata:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value["Rata"];?>
 </td><td> <?php echo "Data:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value["Data"];?>
 </td></br></tr> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	

            </table>				
<?php
}
}
/* {/block 'content'} */
}
