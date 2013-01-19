<?php /* Smarty version Smarty-3.0.7, created on 2013-01-19 14:47:13
         compiled from "C:\OpenServer\domains\oc//design/Opti-Class/html\cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2691450fa87c1f09d42-82266597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c3bc5c4355ddd27c098f099a26151e2af3f4da6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\oc//design/Opti-Class/html\\cart_informer.tpl',
      1 => 1356438793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2691450fa87c1f09d42-82266597',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\OpenServer\domains\oc\Smarty\libs\plugins\modifier.escape.php';
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
