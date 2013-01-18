<?php /* Smarty version Smarty-3.0.7, created on 2013-01-17 11:13:43
         compiled from "Y:\domains\oc//design/Opti-Class/html\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1075950f7b2b7e1a5b7-42757960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8f774d15cb40ba5ddbdb6d30c6d3dd78d10436d' => 
    array (
      0 => 'Y:\\domains\\oc//design/Opti-Class/html\\page.tpl',
      1 => 1358176313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1075950f7b2b7e1a5b7-42757960',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'Y:\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?>

<!-- Заголовок страницы -->
<?php if ($_smarty_tpl->getVariable('page')->value->menu_id!=4){?>
    <h1 data-page="<?php echo $_smarty_tpl->getVariable('page')->value->id;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value->header);?>
</h1>
<?php }?>

<!-- Тело страницы -->
<?php echo $_smarty_tpl->getVariable('page')->value->body;?>

