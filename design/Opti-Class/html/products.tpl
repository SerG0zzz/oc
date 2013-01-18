{* Список товаров *}

<!--Каталог товаров-->
{if $products}

<!-- Список товаров-->
<ul class="catalog-items clearfix">

	{foreach $products as $product}
	    <!-- Товар-->
        <li class="product">
            <!-- Фото товара -->
            <div class="good-image image">
                <span>
                    {if $product->image}
                        <a href="products/{$product->url}">
                            <img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/>
                        </a>
                    {else}
                        <a>
                            <img src="../files/products/nopic.200.jpg" alt="нет картинки"/>
                        </a>
                    {/if}
                </span>
            </div>
            <!-- Фото товара (The End) -->

            <!-- Цена и кнопка купить -->
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
                <div>
                    <a href="products/{$product->url}">{$product->name}</a>
                </div>
            </div>
            <!-- Цена и кнопка купить (The End) -->
        </li>
	    <!-- Товар (The End)-->
	{/foreach}
			
</ul>

{include file='pagination.tpl'}	
<!-- Список товаров (The End)-->

{else}
Товары не найдены
{/if}	
<!--Каталог товаров (The End)-->