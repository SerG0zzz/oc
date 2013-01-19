<?php /* Smarty version Smarty-3.0.7, created on 2013-01-19 14:47:13
         compiled from "C:\OpenServer\domains\oc//design/Opti-Class/html\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2225350fa87c18b94f5-16168466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adcfbd9197f54eb70be87192d52bf6d51a21444f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\oc//design/Opti-Class/html\\index.tpl',
      1 => 1358520870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2225350fa87c18b94f5-16168466',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\OpenServer\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?><!DOCTYPE html>
<html>
<head>
	<base href="<?php echo $_smarty_tpl->getVariable('config')->value->root_url;?>
/"/>
	<title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_title')->value);?>
</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_description')->value);?>
" />
	<meta name="keywords"    content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_keywords')->value);?>
" />
	<meta name="viewport" content="width=1024"/>
	
	<link href="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/css/styles.css" rel="stylesheet" type="text/css" media="screen"/>
    <!--[if IE 7]><link href="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/css/ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if IE 8]><link href="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if IE 9]><link href="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/css/ie9.css" rel="stylesheet" type="text/css" /><![endif]-->
	<link href="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/favicon.ico" rel="icon"          type="image/x-icon"/>
	<link href="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	
	<script src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/js/jquery-1.8.2.min.js"  type="text/javascript"></script>
	<script src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/js/bootstrap.min.js"  type="text/javascript"></script>
	<script src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/js/modernizr.custom.36117.js"  type="text/javascript"></script>
    <script src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/js/functions.js"  type="text/javascript"></script>
    <link href='http://stg.odnoklassniki.ru/share/odkl_share.css' rel='stylesheet'/>
    <!--<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>-->
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?75"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
    <script src='http://stg.odnoklassniki.ru/share/odkl_share.js' type='text/javascript'/>
	<?php if ($_SESSION['admin']=='admin'){?>
	<script src ="js/admintooltip/admintooltip.js" type="text/javascript"></script>
	<link   href="js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" /> 
	<?php }?>
	
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	
	<script type="text/javascript" src="js/ctrlnavigate.js"></script>           
	
	<script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/jquery-ui.min.js"></script>
	<script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/ajax_cart.js"></script>
	
	<script src="/js/baloon/js/baloon.js" type="text/javascript"></script>
	<link   href="/js/baloon/css/baloon.css" rel="stylesheet" type="text/css" /> 
	
	

    <script type="text/javascript">
        VK.init({apiId: 3366633, onlyWidgets: true});
    </script>

	<script src="js/autocomplete/jquery.autocomplete-min.js" type="text/javascript"></script>
	<style>
	.autocomplete-w1 { position:absolute; top:0px; left:0px; margin:6px 0 0 6px; /* IE6 fix: */ _background:none; _margin:1px 0 0 0; }
	.autocomplete { border:1px solid #999; background:#FFF; cursor:default; text-align:left; overflow-x:auto;  overflow-y: auto; margin:-6px 6px 6px -6px; /* IE6 specific: */ _height:350px;  _margin:0; _overflow-x:hidden; }
	.autocomplete .selected { background:#F0F0F0; }
	.autocomplete div { padding:2px 5px; white-space:nowrap; }
	.autocomplete strong { font-weight:normal; color:#3399FF; }
	</style>	
	<script>
	$(function() {
		//  Автозаполнитель поиска
		$(".search input[type='text']").autocomplete({
			serviceUrl:'ajax/search_products.php',
			minChars:1,
			noCache: false, 
			onSelect:
				function(value, data){
					 $("header .search .text").closest('form').submit();
				},
			fnFormatResult:
				function(value, data, currentValue){
					var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
					var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
	  				return (data.image?"<img align=absmiddle src='"+data.image+"'> ":'') + value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
				}	
		});
	});
	</script>
	
		
			
</head>
<body>
	<header>
        <ul class="banners">
            <li class="one">
                <a href="#">
                    <img width="126" height="103" src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/content/banner-1.jpg" alt="" />
                    <div class="text">
                        <h2>-30%</h2>
                        Скидки на все очки<br/> в пластиковой оправе
                    </div>
                </a>
            </li><li class="two">
                <a href="#">
                    <img width="158" height="121" src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/content/banner-2.jpg" alt="" />
                    <div class="text">
                        <h2>990 P</h2>
                        Контактные линзы<br/>&laquo;Air Optix&raquo;
                    </div>
                </a>
            </li><li class="three">
                <a href="#">
                    <img width="205" height="101" src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/content/banner-3.png" alt="" />
                    <div class="text">
                        <h2>новинка</h2>
                        Поступление новой, осенней коллекции.
                    </div>
                </a>
            </li>
        </ul>
        <div class="logo-tel-etc clearfix">
            <a class="logo" href="/"><img width="249" height="32" src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/logo.png" alt=""/></a>

            <!-- Корзина -->
            <div class="cart">
			    <?php $_template = new Smarty_Internal_Template('cart_informer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </div>
            <!-- Корзина End -->

            <ul class="social">
                <li><a class="fb" href="http://www.facebook.com/"></a></li>
                <li><a class="vk" href="http://www.vk.com/"></a></li>
            </ul>
            <div class="tel">+7 (8652) 71-17-33</div>
            <form action="products">
                <div class="search clearfix">
                    <input type="text" placeholder="Поиск" name="keyword" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
" />
                    <button type="submit"></button>
                </div>
            </form>
        </div>
        <ul class="main-menu clearfix">
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
?>
                <?php if ($_smarty_tpl->getVariable('p')->value->menu_id==1&&$_smarty_tpl->getVariable('p')->value->name!='home'){?>
                    <li class="<?php if ($_smarty_tpl->getVariable('page')->value&&$_smarty_tpl->getVariable('page')->value->id==$_smarty_tpl->getVariable('p')->value->id){?>active<?php }elseif($_smarty_tpl->getVariable('category')->value->id!=null&&$_smarty_tpl->getVariable('p')->value->url=='catalog'){?>active<?php }?>">
                        <a data-page="<?php echo $_smarty_tpl->getVariable('p')->value->id;?>
" <?php if ($_smarty_tpl->getVariable('p')->value->url=="catalog"){?>data-toggle="collapse" href="#cat"<?php }else{ ?>href="<?php echo $_smarty_tpl->getVariable('p')->value->url;?>
"<?php }?> ><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('p')->value->name);?>
</a>
                    </li>
                <?php }?>
            <?php }} ?>
        </ul>
        <div class="catalog-submenu collapse <?php if ($_smarty_tpl->getVariable('category')->value->id!=0){?>in<?php }?>" id="cat">
            <div class="clearfix">
                <?php if ($_smarty_tpl->getVariable('categories')->value){?>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
                        <?php if ($_smarty_tpl->getVariable('c')->value->visible){?>
                            <li <?php if ($_smarty_tpl->getVariable('category')->value->id==$_smarty_tpl->getVariable('c')->value->id){?>class="active"<?php }?>>
                                <?php if ($_smarty_tpl->getVariable('c')->value->image){?>
                                    <div>
                                        <a href="catalog/<?php echo $_smarty_tpl->getVariable('c')->value->url;?>
">
                                            <img src="<?php echo $_smarty_tpl->getVariable('config')->value->categories_images_dir;?>
<?php echo $_smarty_tpl->getVariable('c')->value->image;?>
" alt="<?php echo $_smarty_tpl->getVariable('c')->value->name;?>
" />
                                        </a>
                                    </div>
                                <?php }?>
                                <a href="catalog/<?php echo $_smarty_tpl->getVariable('c')->value->url;?>
" data-category="<?php echo $_smarty_tpl->getVariable('c')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('c')->value->name;?>
</a>
                            </li>
                        <?php }?>
                    <?php }} ?>
                </ul>
                <?php }?>
            </div>
        </div>
	</header>


	<!-- Вся страница --> 

	
    <!-- Основная часть -->
    <div class="content <?php if ($_smarty_tpl->getVariable('page')->value->url=="news"){?>news<?php }?> <?php if ($_smarty_tpl->getVariable('page')->value->url==''&&$_smarty_tpl->getVariable('post')->value->url!=''&&$_smarty_tpl->getVariable('post')->value->news){?>news<?php }?>
    <?php if ($_smarty_tpl->getVariable('page')->value->url=="blog"){?>blog<?php }?> <?php if ($_smarty_tpl->getVariable('page')->value->url==''&&$_smarty_tpl->getVariable('post')->value->url!=''&&!$_smarty_tpl->getVariable('post')->value->news){?>blog<?php }?>
    <?php if ($_smarty_tpl->getVariable('page')->value->url=="partners"){?>partners<?php }?> <?php if ($_smarty_tpl->getVariable('page')->value->url=="about"){?>about<?php }?>
    <?php if ($_smarty_tpl->getVariable('page')->value->url=="services"){?>services<?php }?> <?php if ($_smarty_tpl->getVariable('page')->value->menu_id==4){?>services-one<?php }?>
    <?php if ($_smarty_tpl->getVariable('product')->value->url!=''){?>products<?php }?> <?php if ($_smarty_tpl->getVariable('page')->value->url=="contacts"){?>contacts<?php }?> clearfix">
        <?php echo $_smarty_tpl->getVariable('content')->value;?>

    </div>
    <!-- Основная часть (The End) -->

    <!-- слайдер рекомендуймых товаров -->
    <?php if ($_smarty_tpl->getVariable('categories')->value&&$_smarty_tpl->getVariable('page')->value->name=='home'){?>
    <div class="slider-wrapper" id="sliders">
        <div class="slider-menu clearfix">
            <h3>Новые поступления:</h3>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                    <?php if ($_smarty_tpl->getVariable('c')->value->visible&&$_smarty_tpl->getVariable('c')->value->id!=12){?>
                        <li>
                        <span <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']==0){?>class="active"<?php }?> data-toggle="collapse" data-parent="#sliders" data-target="#sl<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'];?>
">
                            <a><?php echo $_smarty_tpl->getVariable('c')->value->name;?>
</a>
                        </span>
                        </li>
                    <?php }?>
                <?php }} ?>
            </ul>
        </div>
        <div class="slider">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products'),$_smarty_tpl);?>

            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['t']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['t']['index']++;
?>
                <?php if ($_smarty_tpl->getVariable('c')->value->visible){?>
                    <div class="collapse <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['t']['index']==0){?>in<?php }?>" id="sl<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['t']['index'];?>
">
                        <ul class="clearfix">
                            <?php  $_smarty_tpl->tpl_vars['fp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('featured_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['fp']->key => $_smarty_tpl->tpl_vars['fp']->value){
?>
                                <?php if ($_smarty_tpl->getVariable('fp')->value->cat_id==$_smarty_tpl->getVariable('c')->value->id){?>
                                    <li class="product">
                                        <div class="good-image image">
                                            <span>
                                                <a href="products/<?php echo $_smarty_tpl->getVariable('fp')->value->url;?>
">
                                                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('fp')->value->image->filename,200,200);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('fp')->value->name);?>
"/>
                                                </a>
                                            </span>
                                        </div>
                                        <div class="good">
                                            <div class="clearfix">
                                                <form class="variants" action="/cart">
                                                    <div class="label variant">
                                                        <input id="variants_<?php echo $_smarty_tpl->getVariable('fp')->value->variants[0]->id;?>
" name="variant" value="<?php echo $_smarty_tpl->getVariable('fp')->value->variants[0]->id;?>
" type="radio" class="variant_radiobutton" checked style="display:none;" />
                                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('fp')->value->variants[0]->price);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>

                                                    </div>
                                                    <?php if (!$_smarty_tpl->getVariable('fp')->value->notbuy==1){?><input type="submit" value="Купить" data-result-text="Купить" /><?php }?>
                                                </form>
                                            </div>
                                            <div><a href="products/<?php echo $_smarty_tpl->getVariable('fp')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('fp')->value->name;?>
</a></div>
                                        </div>
                                    </li>
                                <?php }?>
                            <?php }} ?>
                        </ul>
                        <div class="left"><a></a></div>
                        <div class="right"><a></a></div>
                    </div>
                <?php }?>
            <?php }} ?>
        </div>
    </div>
    <?php }?>
    <!-- слайдер рекомендуймых товаров (END) -->


	<!-- Вся страница (The End)-->


	<!-- Футер -->
    <footer class="clearfix">
        <ul class="copyright">
            <li>
                &copy; 2012 Оптикласс
            </li><li>
            <a href="">mail@optiklass26.ru</a>
        </li><li>
            +7 (8652) 71-17-33
        </li>
        </ul>
        <ul class="faq">
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
?>
                <?php if ($_smarty_tpl->getVariable('p')->value->menu_id==3){?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->getVariable('p')->value->url;?>
" <?php if ($_smarty_tpl->getVariable('page')->value&&$_smarty_tpl->getVariable('page')->value->id==$_smarty_tpl->getVariable('p')->value->id){?>class="active"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('p')->value->name);?>
</a>
                    </li>
                <?php }?>
            <?php }} ?>
        </ul>
        <div class="design">Дизайн &mdash; <a href="http://py-group.ru/">Панфилов и Юшко</a></div>
    </footer>
	<!-- Футер (The End)-->
</body>
</html>