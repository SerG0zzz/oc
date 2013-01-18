<?php /* Smarty version Smarty-3.0.7, created on 2013-01-17 11:13:43
         compiled from "Y:\domains\oc//design/Opti-Class/html\cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:886350f7b2b77e5f23-52492840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '707d5e99f58c9424bfbf674963f943238f97c866' => 
    array (
      0 => 'Y:\\domains\\oc//design/Opti-Class/html\\cart_informer.tpl',
      1 => 1356438793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '886350f7b2b77e5f23-52492840',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'Y:\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?>


<?php if ($_smarty_tpl->getVariable('cart')->value->total_products>0){?>
    <div>
        <a href="./cart/">Корзина (<?php echo $_smarty_tpl->getVariable('cart')->value->total_products;?>
)</a><br/>
        <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->total_price);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>
.</span>
    </div>
<?php }else{ ?>
    <div style="text-align:center;">Корзина<br />пуста</div>
<?php }?>
