{* Главная страница магазина *}

{* Для того чтобы обернуть центральный блок в шаблон, отличный от index.tpl *}
{* Укажите нужный шаблон строкой ниже. Это работает и для других модулей *}
{$wrapper = 'index.tpl' scope=parent}

{* Заголовок страницы *}
{*<h1>{$page->header}</h1>*}

{* Тело страницы *}
{$page->body}


{*  *}
<ul class="banner-list">
    <li>
        <img width="1026" height="403" src="design/{$settings->theme}/images/eyes.jpg" alt=""/>
        <div class="text">
            <h2>Зрительный тренинг</h2>
            <p>Зрительный тренинг на офтальмологическом тренажере-<br />
                релаксаторе нового поколения &laquo;Визотроник М3&raquo;</p>
        </div>
    </li>
</ul>
<div class="left-col grid-2">
    <div class="main-consultant">
        <img width="227" height="241" src="design/{$settings->theme}/images/content/consultant.jpg" alt=""/>
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
            {get_posts_blog var=posts limit=1}
            {if $posts}
                {foreach $posts as $post}
                    <a href="blog/{$post->url}" class="header">{$post->name}</a>
                    {$post->annotation}
                    <a href="blog/{$post->url}" class="read-more">Читать далее</a>
                {/foreach}
            {else}
                <p>Блог пуст.</p>
            {/if}
        </div>
    </div>
</div>
<div class="right-col grid-2">
    <div class="main-news">
        <!-- Меню блога -->

        {* Выбираем в переменную $last_posts последние записи *}
        {get_posts_news var=posts limit=3}
        {if $posts}
            <h2>Новости</h2>
            <ul class="news-list clearfix">
                {foreach $posts as $post}
                    <li class="clearfix">
                        <a href="news/{$post->url}"><img src="../{$config->news_images_dir}{$post->image}" alt=""/></a>
                        <div class="text">
                            <div class="clearfix">
                                <span class="date">{$post->date|date_format:"%d / %m"}</span>
                                <a href="news/{$post->url}">{$post->name}</a>
                            </div>
                            {$post->annotation}
                        </div>
                    </li>
                {/foreach}
            </ul>
        {else}
            <h2>Нет новостей</h2>
        {/if}
        <a class="all-news" href="/news">Все новости</a>
    </div>
</div>


{* Акционные товары *}
{get_discounted_products var=discounted_products limit=9}
{if $discounted_products}
<h1>Акционные товары</h1>
<!-- Список товаров-->
<ul class="tiny_products">

	{foreach $discounted_products as $product}
	<!-- Товар-->
	<li class="product">
		
		<!-- Фото товара -->
		{if $product->image}
            <div class="image">
                <a href="products/{$product->url}"><img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/></a>
            </div>
		{/if}
		<!-- Фото товара (The End) -->

		<!-- Название товара -->
		<h3><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h3>
		<!-- Название товара (The End) -->
		
		{if $product->variants|count > 0}
		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">
			<table>
			{foreach $product->variants as $v}
			<tr class="variant">
				<td>
					<input id="discounted_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}/>
				</td>
				<td>
					{if $v->name}<label class="variant_name" for="discounted_{$v->id}">{$v->name}</label>{/if}
				</td>
				<td>
					{if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
					<span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
				</td>
			</tr>
			{/foreach}
			</table>
			<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
		</form>
		<!-- Выбор варианта товара (The End) -->
		{else}
			Нет в наличии
		{/if}

	</li>
	<!-- Товар (The End)-->
	{/foreach}
			
</ul>
{/if}	
