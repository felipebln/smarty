<?php /* Smarty version Smarty-3.1.13, created on 2013-07-21 19:52:12
         compiled from "tpl/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104380139751ec5c2c245283-11408075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c58b65fa061f86385d073175bcfb245ae32ad39' => 
    array (
      0 => 'tpl/layout.tpl',
      1 => 1374446978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104380139751ec5c2c245283-11408075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ec5c2c2861d1_74262084',
  'variables' => 
  array (
    'titulo' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ec5c2c2861d1_74262084')) {function content_51ec5c2c2861d1_74262084($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       
        <div id="container">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['conteudo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        
    </body>
</html>
<?php }} ?>