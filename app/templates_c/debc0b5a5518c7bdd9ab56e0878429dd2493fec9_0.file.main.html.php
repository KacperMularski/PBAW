<?php
/* Smarty version 4.1.0, created on 2022-03-28 16:24:56
  from 'C:\xampp\htdocs\test\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241c538bbaf52_78061767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'debc0b5a5518c7bdd9ab56e0878429dd2493fec9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\main.html',
      1 => 1648477468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241c538bbaf52_78061767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl"></html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">

    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />

</head>

<body class="is-preload">
<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Banner -->
        <section id="banner">
            <div class="inner">
                <div class="logo"><span class="icon fa-gem"></span></div>
                <h2>Kalkulator kredytowy</h2>
                
            </div>
        </section>

    <!-- Wrapper -->
    <section id="wrapper">
            
    <!-- Footer -->
        <section id="footer" class="wrapper spotlight style1">
            <div class="inner">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6991656716241c538bb63d8_31003583', 'content');
?>
  

                <ul class="copyright">
                    <li>&copy; <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17105485266241c538bb71b8_05947614', 'end');
?>
</li>
                </ul>   

            </div>       
        </section>     
    </section>
        
</div>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_6991656716241c538bb63d8_31003583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6991656716241c538bb63d8_31003583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'end'} */
class Block_17105485266241c538bb71b8_05947614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_17105485266241c538bb71b8_05947614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna stopka <?php
}
}
/* {/block 'end'} */
}
