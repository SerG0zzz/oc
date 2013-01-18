<?php /* Smarty version Smarty-3.0.7, created on 2013-01-18 18:26:47
         compiled from "Y:\domains\oc//design/Opti-Class/html\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1607250f969b77aa700-13232177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32ed40a1e3963b58cea240bd7b6f41ff19890a8' => 
    array (
      0 => 'Y:\\domains\\oc//design/Opti-Class/html\\product.tpl',
      1 => 1358522709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607250f969b77aa700-13232177',
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
        <div class="image">
            <?php if ($_smarty_tpl->getVariable('product')->value->image){?>
                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,960,720,'w');?>
" class="zoom" data-rel="group">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,560,420);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->product->name);?>
" />
                </a>
            <?php }else{ ?>
                <a>
                    <img src="../files/products/nopic.jpg" alt="нет картинки"/>
                </a>
            <?php }?>
        </div>
        <!-- Большое фото (The End)-->

    </div>
</div>
<div class="right-col w360">

    <!-- Цена продукта если есть варианты продукта тоже их выводим -->
    <div class="product-price">
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
                            <td style="display: none;">
                                <input id="product_<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->getVariable('product')->value->variant->id==$_smarty_tpl->getVariable('v')->value->id){?>checked<?php }?> <?php if (count($_smarty_tpl->getVariable('product')->value->variants)<2){?>style="display:none;"<?php }?>/>
                            </td>
                            <td style="display: none;">
                                <?php if ($_smarty_tpl->getVariable('v')->value->name){?><label class="variant_name" for="product_<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('v')->value->name;?>
</label><?php }?>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->getVariable('v')->value->compare_price>0){?><span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->compare_price);?>
</span><?php }?>
                                <span class="price">Цена: <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->price);?>
 <span class="currency"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>
</span></span></span>
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
    <!-- Цена продукта (The End) -->

    <!-- Описание товара -->
    <div class="description">
        <?php echo $_smarty_tpl->getVariable('product')->value->body;?>

    </div>
    <!-- Описание товара (The End)-->

    <!-- Дополнительные фото продукта -->
    <?php if (count($_smarty_tpl->getVariable('product')->value->images)>1){?>
        <ul class="images">
            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['cut'][0][0]->cut_modifier($_smarty_tpl->getVariable('product')->value->images); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']<3){?>
                    <li>
                        <span>
                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,960,720,'w');?>
" class="zoom" data-rel="group">
                                <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,95,95);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
" />
                            </a>
                        </span>
                    </li>
                <?php }else{ ?>
                    <li style="display:none;">
                        <span>
                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,960,720,'w');?>
" class="zoom" data-rel="group">
                                <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,95,95);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
" />
                            </a>
                        </span>
                    </li>
                <?php }?>
            <?php }} ?>
        </ul>
    <?php }?>
    <!-- Дополнительные фото продукта (The End)-->

    <!-- Кнопки "Где забрать?" и "Задать вопрос" -->
    <div class="product-buttons">
        <a href="contacts/" class="where-get">Где забрать?</a>
        <a href="faq/" class="ask-me">Задать вопрос</a>
    </div>
    <!-- Кнопки "Где забрать?" и "Задать вопрос" (The End) -->
</div>
<!-- Описание товара (The End)-->
<div class="clearfix"></div>

<!-- социальные кнопки -->
<div class="social-buttons">
    <div id="vk_like" style="display:inline-block;*display:inline;zoom:1;vertical-align:top;"></div>
    
        <script type="text/javascript">
            VK.Widgets.Like("vk_like", {type: "mini", height: 20});
        </script>
    
    <div id="fb-root" style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;"></div>
    
        <fb:like href="" send="false" layout="button_count" width="90" show_faces="false" font="lucida grande"></fb:like>
    
    <div class="tweeter" style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;padding-left:30px;">
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ru">Tweet</a>
    </div>
    <div style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;width:120px;">
        <a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share" data-mrc-config="{'cm' : '2', 'ck' : '1', 'sz' : '20', 'st' : '1', 'tp' : 'ok'}">Нравится</a>
        <script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>
    </div>
</div>
<!-- социальные кнопки (The End) -->

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
