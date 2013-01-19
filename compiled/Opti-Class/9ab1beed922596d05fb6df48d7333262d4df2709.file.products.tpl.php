<?php /* Smarty version Smarty-3.0.7, created on 2013-01-19 20:11:35
         compiled from "C:\OpenServer\domains\oc//design/Opti-Class/html\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2195350fad3c7eaae47-68674132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ab1beed922596d05fb6df48d7333262d4df2709' => 
    array (
      0 => 'C:\\OpenServer\\domains\\oc//design/Opti-Class/html\\products.tpl',
      1 => 1358490516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2195350fad3c7eaae47-68674132',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\OpenServer\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?>

<!--Каталог товаров-->
<?php if ($_smarty_tpl->getVariable('products')->value){?>

<!-- Список товаров-->
<ul class="catalog-items clearfix">

	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
	    <!-- Товар-->
        <li class="product">
            <!-- Фото товара -->
            <div class="good-image image">
                <span>
                    <?php if ($_smarty_tpl->getVariable('product')->value->image){?>
                        <a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,200,200);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/>
                        </a>
                    <?php }else{ ?>
                        <a>
                            <img src="../files/products/nopic.200.jpg" alt="нет картинки"/>
                        </a>
                    <?php }?>
                </span>
            </div>
            <!-- Фото товара (The End) -->

            <!-- Цена и кнопка купить -->
            <div class="good">
                <div class="clearfix">
                    <form class="variants" action="/cart">
                        <div class="label variant">
                            <input id="variants_<?php echo $_smarty_tpl->getVariable('product')->value->variants[0]->id;?>
" name="variant" value="<?php echo $_smarty_tpl->getVariable('product')->value->variants[0]->id;?>
" type="radio" class="variant_radiobutton" checked style="display:none;" />
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variants[0]->price);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>

                        </div>
                        <?php if (!$_smarty_tpl->getVariable('product')->value->notbuy==1){?><input type="submit" value="Купить" data-result-text="Купить" /><?php }?>
                    </form>
                </div>
                <div>
                    <a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('product')->value->name;?>
</a>
                </div>
            </div>
            <!-- Цена и кнопка купить (The End) -->
        </li>
	    <!-- Товар (The End)-->
	<?php }} ?>
			
</ul>

<?php $_template = new Smarty_Internal_Template('pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	
<!-- Список товаров (The End)-->

<?php }else{ ?>
Товары не найдены
<?php }?>	
<!--Каталог товаров (The End)-->