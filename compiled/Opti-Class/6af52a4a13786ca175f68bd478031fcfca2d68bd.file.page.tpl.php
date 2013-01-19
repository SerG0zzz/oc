<?php /* Smarty version Smarty-3.0.7, created on 2013-01-19 20:04:35
         compiled from "C:\OpenServer\domains\oc//design/Opti-Class/html\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1401850fad223c42393-53378994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af52a4a13786ca175f68bd478031fcfca2d68bd' => 
    array (
      0 => 'C:\\OpenServer\\domains\\oc//design/Opti-Class/html\\page.tpl',
      1 => 1358176313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401850fad223c42393-53378994',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\OpenServer\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?>

<!-- Заголовок страницы -->
<?php if ($_smarty_tpl->getVariable('page')->value->menu_id!=4){?>
    <h1 data-page="<?php echo $_smarty_tpl->getVariable('page')->value->id;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value->header);?>
</h1>
<?php }?>

<!-- Тело страницы -->
<?php echo $_smarty_tpl->getVariable('page')->value->body;?>

