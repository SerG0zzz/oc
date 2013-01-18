{* Страница товара *}

{* <!-- Хлебные крошки /-->
<div id="path">
	<a href="./">Главная</a>
	{foreach from=$category->path item=cat}
	→ <a href="catalog/{$cat->url}">{$cat->name|escape}</a>
	{/foreach}
	{if $brand}
	→ <a href="catalog/{$cat->url}/{$brand->url}">{$brand->name|escape}</a>
	{/if}
	→  {$product->name|escape}                
</div>
<!-- Хлебные крошки #End /--> *}

<div class="left-col w600">
    <h1 data-product="{$product->id}">{$product->name|escape}</h1>
    <div class="product">
        <!-- Большое фото -->
        <div class="image">
            {if $product->image}
                <a href="{$product->image->filename|resize:960:720:w}" class="zoom" data-rel="group">
                    <img src="{$product->image->filename|resize:560:420}" alt="{$product->product->name|escape}" />
                </a>
            {else}
                <a>
                    <img src="../files/products/nopic.jpg" alt="нет картинки"/>
                </a>
            {/if}
        </div>
        <!-- Большое фото (The End)-->

        {*
        <!-- Соседние товары /-->
        <div id="back_forward">
            {if $prev_product}
                ←&nbsp;<a class="prev_page_link" href="products/{$prev_product->url}">{$prev_product->name|escape}</a>
            {/if}
            {if $next_product}
                <a class="next_page_link" href="products/{$next_product->url}">{$next_product->name|escape}</a>&nbsp;→
            {/if}
        </div>
        *}

    </div>
</div>
<div class="right-col w360">

    <!-- Цена продукта если есть варианты продукта тоже их выводим -->
    <div class="product-price">
        {if $product->variants|count > 0}
            <!-- Выбор варианта товара -->
            <form class="variants" action="/cart">
                <table>
                    {foreach $product->variants as $v}
                        <tr class="variant">
                            <td style="display: none;">
                                <input id="product_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $product->variant->id==$v->id}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}/>
                            </td>
                            <td style="display: none;">
                                {if $v->name}<label class="variant_name" for="product_{$v->id}">{$v->name}</label>{/if}
                            </td>
                            <td>
                                {if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
                                <span class="price">Цена: <span>{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span></span>
                            </td>
                        </tr>
                    {/foreach}
                </table>
                <input type="submit" class="button" value="Купить" data-result-text="добавлено"/>
            </form>
            <!-- Выбор варианта товара (The End) -->
            {else}
            Нет в наличии
        {/if}
    </div>
    <!-- Цена продукта (The End) -->

    <!-- Описание товара -->
    <div class="description">
        {$product->body}
    </div>
    <!-- Описание товара (The End)-->

    <!-- Дополнительные фото продукта -->
    {if $product->images|count>1}
        <ul class="images">
        {* cut удаляет первую фотографию, если нужно начать 2-й - пишем cut:2 и тд *}
            {foreach $product->images|cut as $i=>$image name=foo}
                {if $smarty.foreach.foo.index < 3}
                    <li>
                        <span>
                            <a href="{$image->filename|resize:960:720:w}" class="zoom" data-rel="group">
                                <img src="{$image->filename|resize:95:95}" alt="{$product->name|escape}" />
                            </a>
                        </span>
                    </li>
                {else}
                    <li style="display:none;">
                        <span>
                            <a href="{$image->filename|resize:960:720:w}" class="zoom" data-rel="group">
                                <img src="{$image->filename|resize:95:95}" alt="{$product->name|escape}" />
                            </a>
                        </span>
                    </li>
                {/if}
            {/foreach}
        </ul>
    {/if}
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
    {literal}
        <script type="text/javascript">
            VK.Widgets.Like("vk_like", {type: "mini", height: 20});
        </script>
    {/literal}
    <div id="fb-root" style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;"></div>
    {literal}
        <fb:like href="" send="false" layout="button_count" width="90" show_faces="false" font="lucida grande"></fb:like>
    {/literal}
    <div class="tweeter" style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;padding-left:30px;">
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ru">Tweet</a>
    </div>
    <div style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;width:120px;">
        <a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share" {literal}data-mrc-config="{'cm' : '2', 'ck' : '1', 'sz' : '20', 'st' : '1', 'tp' : 'ok'}"{/literal}>Нравится</a>
        <script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>
    </div>
</div>
<!-- социальные кнопки (The End) -->

{if $product->features}
    <!-- Характеристики товара -->
    <h2>Характеристики</h2>
    <ul class="features">
        {foreach $product->features as $f}
            <li>
                <label>{$f->name}</label>
                <span>{$f->value}</span>
            </li>
        {/foreach}
    </ul>
    <!-- Характеристики товара (The End)-->
{/if}


{* Похожие товары *}
{if $products}
    <h2>Похожие товары</h2>
    <ul class="tiny_products related_products clearfix">
        {foreach $products as $pro}
            <!-- Товар (The End) -->
            <li class="product">
                {* Фото товара *}
                <div class="good-image image">
                    <span>
                    {if $pro->image}
                        <a href="products/{$pro->url}">
                            <img src="{$pro->image->filename|resize:200:200}" alt="{$pro->name|escape}"/>
                        </a>
                    {else}
                        <a>
                            <img src="../files/products/nopic.200.jpg" alt="нет картинки"/>
                        </a>
                    {/if}
                    </span>
                </div>
                {* фото товара (END) *}
                <div class="good">
                    <div class="clearfix">
                        <form class="variants" action="/cart">
                            <div class="label variant">
                                <input id="variants_{$pro->variants[0]->id}" name="variant" value="{$pro->variants[0]->id}" type="radio" class="variant_radiobutton" checked style="display:none;" />
                                {$pro->variants[0]->price|convert} {$currency->sign|escape}
                            </div>
                            {if !$pro->notbuy == 1}<input type="submit" value="Купить" data-result-text="Купить" />{/if}
                        </form>
                    </div>
                    <div><a href="products/{$pro->url}">{$pro->name}</a></div>
                </div>
            </li>
            <!-- Товар (The End)-->
        {/foreach}
    </ul>
{/if}


{* Связанные товары *}
{if $related_products}
    <h2>С этим товаром обычно покупают</h2>
    <!-- Список каталога товаров-->
    <ul class="tiny_products related_products clearfix">
        {foreach $related_products as $product limit 4}
            <!-- Товар-->
            {* <li class="product">
                <!-- Фото товара -->
                {if $product->image}
                    <div class="image">
                        <a href="products/{$product->url}"><img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/></a>
                    </div>
                {/if}
                <!-- Фото товара (The End) -->

                <!-- Название товара -->
                <h3>
                    <a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a>
                </h3>
                <!-- Название товара (The End) -->

                {if $product->variants|count > 0}
                    <!-- Выбор варианта товара -->
                    <form class="variants" action="/cart">
                        <table>
                            {foreach $product->variants as $v}
                                <tr class="variant">
                                    <td>
                                        <input id="related_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton"  {if $v@first}checked{/if} {if $product->variants|count<2} style="display:none;"{/if}/>
                                    </td>
                                    <td>
                                        {if $v->name}<label class="variant_name" for="related_{$v->id}">{$v->name}</label>{/if}
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
            </li> *}
            <li class="product">
                {* Фото товара *}
                <div class="good-image image">
                    <span>
                        <a href="products/{$product->url}">
                            <img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/>
                        </a>
                    </span>
                </div>
                {* фото товара (END) *}
                <div class="good">
                    <div class="clearfix">
                        <form class="variants" action="/cart">
                            <div class="label variant">
                                <input id="variants_{$product->variants[0]->id}" name="variant" value="{$product->variants[0]->id}" type="radio" class="variant_radiobutton" checked style="display:none;" />
                                {$product->variants[0]->price|convert} {$currency->sign|escape}
                            </div>
                            {if !$product->notbuy == 1}<input type="submit" value="Купить" data-result-text="Купить" />{/if}
                        </form>
                    </div>
                    <div><a href="products/{$product->url}">{$product->name}</a></div>
                </div>
            </li>
            <!-- Товар (The End)-->
        {/foreach}
    </ul>
{/if}

{*
<!-- Комментарии -->
<div id="comments">

	<h2>Комментарии</h2>
	
	{if $comments}
        <!-- Список с комментариями -->
        <ul class="comment_list">
            {foreach $comments as $comment}
                <a name="comment_{$comment->id}"></a>
                <li>
                    <!-- Имя и дата комментария-->
                    <div class="comment_header">
                        {$comment->name|escape} <i>{$comment->date|date}, {$comment->date|time}</i>
                        {if !$comment->approved}ожидает модерации</b>{/if}
                    </div>
                    <!-- Имя и дата комментария (The End)-->

                    <!-- Комментарий -->
                    {$comment->text|escape|nl2br}
                    <!-- Комментарий (The End)-->
                </li>
            {/foreach}
        </ul>
        <!-- Список с комментариями (The End)-->
    {else}
        <p>Пока нет комментариев</p>
	{/if}
	
	<!--Форма отправления комментария-->	
	<form class="comment_form" method="post">
		<h2>Написать комментарий</h2>
		{if $error}
            <div class="message_error">
                {if $error=='captcha'}Неверно введена капча
                {elseif $error=='empty_name'}Введите имя
                {elseif $error=='empty_comment'}Введите комментарий{/if}
            </div>
		{/if}
		<textarea class="comment_textarea" id="comment_text" name="text" data-format=".+" data-notice="Введите комментарий">{$comment_text}</textarea><br />
		<div>
            <label for="comment_name">Имя</label>
            <input class="input_name" type="text" id="comment_name" name="name" value="{$comment_name}" data-format=".+" data-notice="Введите имя"/><br />

            <input class="button" type="submit" name="comment" value="Отправить" />

            <label for="comment_captcha">Число</label>
            <div class="captcha"><img src="captcha/image.php?{math equation='rand(10,10000)'}" alt='captcha'/></div>
            <input class="input_captcha" id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введите капчу"/>

		</div>
	</form>
	<!--Форма отправления комментария (The End)-->
	
</div>
<!-- Комментарии (The End) -->
*}

{literal}
    <script>
        $(function() {
            // Раскраска строк характеристик
            $(".features li:even").addClass('even');

            // Зум картинок
            $("a.zoom").fancybox({ 'hideOnContentClick' : true });
        });
    </script>
{/literal}