<?php /* Smarty version Smarty-3.0.7, created on 2013-01-18 11:13:54
         compiled from "Y:\domains\oc//design/Opti-Class/html\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3092450f90442397281-84136853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32ed40a1e3963b58cea240bd7b6f41ff19890a8' => 
    array (
      0 => 'Y:\\domains\\oc//design/Opti-Class/html\\product.tpl',
      1 => 1358496824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3092450f90442397281-84136853',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'Y:\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?>

<div class="left-col w600">
    <h1 data-product="<?php echo $_smarty_tpl->getVariable('product')->value->id;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
</h1>
    <div class="product">
        <!-- Большое фото -->
        <?php if ($_smarty_tpl->getVariable('product')->value->image){?>
        <div class="image">
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,960,720,'w');?>
" class="zoom" data-rel="group">
                <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,560,420);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->product->name);?>
" />
            </a>
        </div>
        <?php }?>
        <!-- Большое фото (The End)-->

    </div>
</div>
<div class="right-col w360">

    <!-- Описание товара -->
    <div class="description">
        <?php echo $_smarty_tpl->getVariable('product')->value->body;?>


        <?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>
            <!-- Выбор варианта товара -->
            <form class="variants" action="/cart">
                <table>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
                        <tr class="variant">
                            <td>
                                <input id="product_<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->getVariable('product')->value->variant->id==$_smarty_tpl->getVariable('v')->value->id){?>checked<?php }?> <?php if (count($_smarty_tpl->getVariable('product')->value->variants)<2){?>style="display:none;"<?php }?>/>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->getVariable('v')->value->name){?><label class="variant_name" for="product_<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('v')->value->name;?>
</label><?php }?>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->getVariable('v')->value->compare_price>0){?><span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->compare_price);?>
</span><?php }?>
                                <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->price);?>
 <span class="currency"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>
</span></span>
                            </td>
                        </tr>
                    <?php }} ?>
                </table>
                <input type="submit" class="button" value="Купить" data-result-text="добавлено"/>
            </form>
            <!-- Выбор варианта товара (The End) -->
        <?php }else{ ?>
            Нет в наличии
        <?php }?>
    </div>
    <!-- Описание товара (The End)-->

    <!-- Дополнительные фото продукта -->
    <?php if (count($_smarty_tpl->getVariable('product')->value->images)>1){?>
        <ul class="images">
            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['cut'][0][0]->cut_modifier($_smarty_tpl->getVariable('product')->value->images); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,960,720,'w');?>
" class="zoom" data-rel="group">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,95,95);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
" />
                    </a>
                </li>
            <?php }} ?>
        </ul>
    <?php }?>
    <!-- Дополнительные фото продукта (The End)-->
</div>
<!-- Описание товара (The End)-->
<div class="clearfix"></div>

<?php if ($_smarty_tpl->getVariable('product')->value->features){?>
    <!-- Характеристики товара -->
    <h2>Характеристики</h2>
    <ul class="features">
        <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
?>
            <li>
                <label><?php echo $_smarty_tpl->getVariable('f')->value->name;?>
</label>
                <span><?php echo $_smarty_tpl->getVariable('f')->value->value;?>
</span>
            </li>
        <?php }} ?>
    </ul>
    <!-- Характеристики товара (The End)-->
<?php }?>
<?php if ($_smarty_tpl->getVariable('products')->value){?>
    <h2>Похожие товары</h2>
    <ul class="tiny_products related_products clearfix">
        <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value){
?>
            <!-- Товар (The End) -->
            <li class="product">
                <div class="good-image image">
                    <span>
                    <?php if ($_smarty_tpl->getVariable('pro')->value->image){?>
                        <a href="products/<?php echo $_smarty_tpl->getVariable('pro')->value->url;?>
">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('pro')->value->image->filename,200,200);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('pro')->value->name);?>
"/>
                        </a>
                    <?php }else{ ?>
                        <a>
                            <img src="../files/products/nopic.200.jpg" alt="нет картинки"/>
                        </a>
                    <?php }?>
                    </span>
                </div>
                <div class="good">
                    <div class="clearfix">
                        <form class="variants" action="/cart">
                            <div class="label variant">
                                <input id="variants_<?php echo $_smarty_tpl->getVariable('pro')->value->variants[0]->id;?>
" name="variant" value="<?php echo $_smarty_tpl->getVariable('pro')->value->variants[0]->id;?>
" type="radio" class="variant_radiobutton" checked style="display:none;" />
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('pro')->value->variants[0]->price);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>

                            </div>
                            <?php if (!$_smarty_tpl->getVariable('pro')->value->notbuy==1){?><input type="submit" value="Купить" data-result-text="Купить" /><?php }?>
                        </form>
                    </div>
                    <div><a href="products/<?php echo $_smarty_tpl->getVariable('pro')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('pro')->value->name;?>
</a></div>
                </div>
            </li>
            <!-- Товар (The End)-->
        <?php }} ?>
    </ul>
<?php }?>
<?php if ($_smarty_tpl->getVariable('related_products')->value){?>
    <h2>С этим товаром обычно покупают</h2>
    <!-- Список каталога товаров-->
    <ul class="tiny_products related_products clearfix">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('related_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
            <!-- Товар-->
            <li class="product">
                <div class="good-image image">
                    <span>
                        <a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,200,200);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/>
                        </a>
                    </span>
                </div>
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
                    <div><a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('product')->value->name;?>
</a></div>
                </div>
            </li>
            <!-- Товар (The End)-->
        <?php }} ?>
    </ul>
<?php }?>


    <script>
        $(function() {
            // Раскраска строк характеристик
            $(".features li:even").addClass('even');

            // Зум картинок
            $("a.zoom").fancybox({ 'hideOnContentClick' : true });
        });
    </script>
