<?php /* Smarty version Smarty-3.0.7, created on 2013-01-19 14:47:12
         compiled from "C:\OpenServer\domains\oc//design/Opti-Class/html\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26050fa87c0eaceb8-89210998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7296f599d33f574926ee3e7efdaa2718159692f7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\oc//design/Opti-Class/html\\main.tpl',
      1 => 1358490232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26050fa87c0eaceb8-89210998',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\OpenServer\domains\oc\Smarty\libs\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\OpenServer\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?>
<?php $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_variable('index.tpl', null, 1);?>
<?php echo $_smarty_tpl->getVariable('page')->value->body;?>

<ul class="banner-list">
    <li>
        <img width="1026" height="403" src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/eyes.jpg" alt=""/>
        <div class="text">
            <h2>Зрительный тренинг</h2>
            <p>Зрительный тренинг на офтальмологическом тренажере-<br />
                релаксаторе нового поколения &laquo;Визотроник М3&raquo;</p>
        </div>
    </li>
</ul>
<div class="left-col grid-2">
    <div class="main-consultant">
        <img width="227" height="241" src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/content/consultant.jpg" alt=""/>
        <div>
            <h3>Вы можете получить<br>он-лайн консультацию<br>у нашего специалиста</h3>
            <div class="person-consultant">
                Круглова Татьяна Владимировна<br>
                врач-офтальмолог
            </div>
            <a href="#" class="ask-me">Задать вопрос</a>
        </div>
        <div class="main-blog">
            <h2>Блог:</h2>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts_blog'][0][0]->get_posts_blog_plugin(array('var'=>'posts','limit'=>1),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->getVariable('posts')->value){?>
                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?>
                    <a href="blog/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
" class="header"><?php echo $_smarty_tpl->getVariable('post')->value->name;?>
</a>
                    <?php echo $_smarty_tpl->getVariable('post')->value->annotation;?>

                    <a href="blog/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
" class="read-more">Читать далее</a>
                <?php }} ?>
            <?php }else{ ?>
                <p>Блог пуст.</p>
            <?php }?>
        </div>
    </div>
</div>
<div class="right-col grid-2">
    <div class="main-news">
        <!-- Меню блога -->
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts_news'][0][0]->get_posts_news_plugin(array('var'=>'posts','limit'=>3),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->getVariable('posts')->value){?>
            <h2>Новости</h2>
            <ul class="news-list clearfix">
                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?>
                    <li class="clearfix">
                        <a href="news/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
"><img src="../<?php echo $_smarty_tpl->getVariable('config')->value->news_images_dir;?>
<?php echo $_smarty_tpl->getVariable('post')->value->image;?>
" alt=""/></a>
                        <div class="text">
                            <div class="clearfix">
                                <span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('post')->value->date,"%d / %m");?>
</span>
                                <a href="news/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('post')->value->name;?>
</a>
                            </div>
                            <?php echo $_smarty_tpl->getVariable('post')->value->annotation;?>

                        </div>
                    </li>
                <?php }} ?>
            </ul>
        <?php }else{ ?>
            <h2>Нет новостей</h2>
        <?php }?>
        <a class="all-news" href="/news">Все новости</a>
    </div>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0][0]->get_discounted_products_plugin(array('var'=>'discounted_products','limit'=>9),$_smarty_tpl);?>

<?php if ($_smarty_tpl->getVariable('discounted_products')->value){?>
<h1>Акционные товары</h1>
<!-- Список товаров-->
<ul class="tiny_products">

	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('discounted_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
	<!-- Товар-->
	<li class="product">
		
		<!-- Фото товара -->
		<?php if ($_smarty_tpl->getVariable('product')->value->image){?>
            <div class="image">
                <a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,200,200);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/></a>
            </div>
		<?php }?>
		<!-- Фото товара (The End) -->

		<!-- Название товара -->
		<h3><a data-product="<?php echo $_smarty_tpl->getVariable('product')->value->id;?>
" href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
</a></h3>
		<!-- Название товара (The End) -->
		
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
					<input id="discounted_<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['v']->first){?>checked<?php }?> <?php if (count($_smarty_tpl->getVariable('product')->value->variants)<2){?>style="display:none;"<?php }?>/>
				</td>
				<td>
					<?php if ($_smarty_tpl->getVariable('v')->value->name){?><label class="variant_name" for="discounted_<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
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
			<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
		</form>
		<!-- Выбор варианта товара (The End) -->
		<?php }else{ ?>
			Нет в наличии
		<?php }?>

	</li>
	<!-- Товар (The End)-->
	<?php }} ?>
			
</ul>
<?php }?>	
