<!DOCTYPE html>
{*
	Общий вид страницы
	Этот шаблон отвечает за общий вид страниц без центрального блока.
*}
<html>
<head>
	<base href="{$config->root_url}/"/>
	<title>{$meta_title|escape}</title>
	
	{* Метатеги *}
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="{$meta_description|escape}" />
	<meta name="keywords"    content="{$meta_keywords|escape}" />
	<meta name="viewport" content="width=1024"/>
	
	{* Стили *}
	<link href="design/{$settings->theme|escape}/css/styles.css" rel="stylesheet" type="text/css" media="screen"/>
    <!--[if IE 7]><link href="design/{$settings->theme|escape}/css/ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if IE 8]><link href="design/{$settings->theme|escape}/css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if IE 9]><link href="design/{$settings->theme|escape}/css/ie9.css" rel="stylesheet" type="text/css" /><![endif]-->
	<link href="design/{$settings->theme|escape}/images/favicon.ico" rel="icon"          type="image/x-icon"/>
	<link href="design/{$settings->theme|escape}/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	
	{* JQuery *}
	<script src="design/{$settings->theme|escape}/js/jquery-1.8.2.min.js"  type="text/javascript"></script>
	<script src="design/{$settings->theme|escape}/js/bootstrap.min.js"  type="text/javascript"></script>
	<script src="design/{$settings->theme|escape}/js/modernizr.custom.36117.js"  type="text/javascript"></script>
    <script src="design/{$settings->theme|escape}/js/functions.js"  type="text/javascript"></script>

    {* social buttons *}
    <link href='http://stg.odnoklassniki.ru/share/odkl_share.css' rel='stylesheet'/>
    <!--<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>-->
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?75"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
    <script src='http://stg.odnoklassniki.ru/share/odkl_share.js' type='text/javascript'/>

	{* Всплывающие подсказки для администратора *}
	{if $smarty.session.admin == 'admin'}
	<script src ="js/admintooltip/admintooltip.js" type="text/javascript"></script>
	<link   href="js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" /> 
	{/if}
	
	{* Увеличитель картинок *}
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	
	{* Ctrl-навигация на соседние товары *}
	<script type="text/javascript" src="js/ctrlnavigate.js"></script>           
	
	{* Аяксовая корзина *}
	<script src="design/{$settings->theme}/js/jquery-ui.min.js"></script>
	<script src="design/{$settings->theme}/js/ajax_cart.js"></script>
	
	{* js-проверка форм *}
	<script src="/js/baloon/js/baloon.js" type="text/javascript"></script>
	<link   href="/js/baloon/css/baloon.css" rel="stylesheet" type="text/css" /> 
	
	{* Автозаполнитель поиска *}
	{literal}

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
	{/literal}
		
			
</head>
<body>
	<header>
        <ul class="banners">
            <li class="one">
                <a href="#">
                    <img width="126" height="103" src="design/{$settings->theme|escape}/images/content/banner-1.jpg" alt="" />
                    <div class="text">
                        <h2>-30%</h2>
                        Скидки на все очки<br/> в пластиковой оправе
                    </div>
                </a>
            </li><li class="two">
                <a href="#">
                    <img width="158" height="121" src="design/{$settings->theme|escape}/images/content/banner-2.jpg" alt="" />
                    <div class="text">
                        <h2>990 P</h2>
                        Контактные линзы<br/>&laquo;Air Optix&raquo;
                    </div>
                </a>
            </li><li class="three">
                <a href="#">
                    <img width="205" height="101" src="design/{$settings->theme|escape}/images/content/banner-3.png" alt="" />
                    <div class="text">
                        <h2>новинка</h2>
                        Поступление новой, осенней коллекции.
                    </div>
                </a>
            </li>
        </ul>
        <div class="logo-tel-etc clearfix">
            <a class="logo" href="/"><img width="249" height="32" src="design/{$settings->theme|escape}/images/logo.png" alt=""/></a>

            <!-- Корзина -->
            <div class="cart">
                {* Обновляемая аяксом корзина должна быть в отдельном файле *}
			    {include file='cart_informer.tpl'}
            </div>
            <!-- Корзина End -->

            <ul class="social">
                <li><a class="fb" href="http://www.facebook.com/"></a></li>
                <li><a class="vk" href="http://www.vk.com/"></a></li>
            </ul>
            <div class="tel">+7 (8652) 71-17-33</div>
            <form action="products">
                <div class="search clearfix">
                    <input type="text" placeholder="Поиск" name="keyword" value="{$keyword|escape}" />
                    <button type="submit"></button>
                </div>
            </form>
        </div>
        <ul class="main-menu clearfix">
            {foreach $pages as $p}
                {* Выводим только страницы из первого меню *}
                {if $p->menu_id == 1 AND $p->name != 'home'}
                    <li class="{if $page && $page->id == $p->id}active{elseif $category->id != null AND $p->url == 'catalog'}active{/if}">
                        <a data-page="{$p->id}" {if $p->url == "catalog"}data-toggle="collapse" href="#cat"{else}href="{$p->url}"{/if} >{$p->name|escape}</a>
                    </li>
                {/if}
            {/foreach}
        </ul>
        <div class="catalog-submenu collapse {if $category->id != 0}in{/if}" id="cat">
            <div class="clearfix">
                {* Рекурсивная функция вывода категорий *}
                {if $categories}
                <ul>
                    {foreach $categories as $c}
                    {* Показываем только видимые категории *}
                        {if $c->visible}
                            <li {if $category->id == $c->id}class="active"{/if}>
                                {if $c->image}
                                    <div>
                                        <a href="catalog/{$c->url}">
                                            <img src="{$config->categories_images_dir}{$c->image}" alt="{$c->name}" />
                                        </a>
                                    </div>
                                {/if}
                                <a href="catalog/{$c->url}" data-category="{$c->id}">{$c->name}</a>
                            </li>
                        {/if}
                    {/foreach}
                </ul>
                {/if}
            </div>
        </div>
	</header>


	<!-- Вся страница --> 

	
    <!-- Основная часть -->
    <div class="content {if $page->url == "news"}news{/if} {if $page->url == "" AND $post->url != "" AND $post->news}news{/if}
    {if $page->url == "blog"}blog{/if} {if $page->url == "" AND $post->url != "" AND !$post->news}blog{/if}
    {if $page->url == "partners"}partners{/if} {if $page->url  == "about"}about{/if}
    {if $page->url == "services"}services{/if} {if $page->menu_id == 4}services-one{/if}
    {if $product->url != ""}products{/if} clearfix">
        {$content}
    </div>
    <!-- Основная часть (The End) -->

    <!-- слайдер рекомендуймых товаров -->
    {if $categories AND $page->name == 'home'}
    <div class="slider-wrapper" id="sliders">
        <div class="slider-menu clearfix">
            <h3>Новые поступления:</h3>
            <ul>
                {foreach $categories as $c name=foo}
                {* Показываем только видимые категории *}
                    {if $c->visible AND $c->id != 12}
                        <li>
                        <span {if $smarty.foreach.foo.index == 0}class="active"{/if} data-toggle="collapse" data-parent="#sliders" data-target="#sl{$smarty.foreach.foo.index}">
                            <a>{$c->name}</a>
                        </span>
                        </li>
                    {/if}
                {/foreach}
            </ul>
        </div>
        <div class="slider">
        {* выводит только рекомендуймые товары *}
            {get_featured_products var=featured_products}
            {foreach $categories as $c name=t}
                {if $c->visible}
                    <div class="collapse {if $smarty.foreach.t.index == 0}in{/if}" id="sl{$smarty.foreach.t.index}">
                        <ul class="clearfix">
                            {foreach $featured_products as $fp}
                                {if $fp->cat_id == $c->id}
                                    <li class="product">
                                    {* Фото товара *}
                                        <div class="good-image image">
                                            <span>
                                                <a href="products/{$fp->url}">
                                                    <img src="{$fp->image->filename|resize:200:200}" alt="{$fp->name|escape}"/>
                                                </a>
                                            </span>
                                        </div>
                                    {* фото товара (END) *}
                                        <div class="good">
                                            <div class="clearfix">
                                                <form class="variants" action="/cart">
                                                    <div class="label variant">
                                                        <input id="variants_{$fp->variants[0]->id}" name="variant" value="{$fp->variants[0]->id}" type="radio" class="variant_radiobutton" checked style="display:none;" />
                                                        {$fp->variants[0]->price|convert} {$currency->sign|escape}
                                                    </div>
                                                    {if !$fp->notbuy == 1}<input type="submit" value="Купить" data-result-text="Купить" />{/if}
                                                </form>
                                            </div>
                                            <div><a href="products/{$fp->url}">{$fp->name}</a></div>
                                        </div>
                                    </li>
                                {/if}
                            {/foreach}
                        </ul>
                        <div class="left"><a></a></div>
                        <div class="right"><a></a></div>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div>
    {/if}
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
            {foreach $pages as $p}
            {* выводим страницы только меню в футере *}
                {if $p->menu_id == 3}
                    <li>
                        <a href="{$p->url}" {if $page && $page->id == $p->id}class="active"{/if}>{$p->name|escape}</a>
                    </li>
                {/if}
            {/foreach}
        </ul>
        <div class="design">Дизайн &mdash; <a href="http://py-group.ru/">Панфилов и Юшко</a></div>
    </footer>
	<!-- Футер (The End)-->
</body>
</html>