{* Постраничный вывод *}

{if $total_pages_num>1}
{* Скрипт для листания через ctrl → *}
{* Ссылки на соседние страницы должны иметь id PrevLink и NextLink *}
<script type="text/javascript" src="js/ctrlnavigate.js"></script>           

<!-- Листалка страниц -->
<ul class="navs">
    <li>
        Показано 1—{$items_per_page} товаров, всего {$items_count}
    </li><li>
        <span>Страницы:</span>
        {* Количество выводимых ссылок на страницы *}
        {$visible_pages = 5}

        {* По умолчанию начинаем вывод со страницы 1 *}
        {$page_from = 1}

        {* Если выбранная пользователем страница дальше середины "окна" - начинаем вывод уже не с первой *}
        {if $current_page_num > floor($visible_pages/2)}
            {$page_from = max(1, $current_page_num - floor($visible_pages/2) - 1)}
        {/if}

        {* Если выбранная пользователем страница близка к концу навигации - начинаем с "конца-окно" *}
        {if $current_page_num > $total_pages_num - ceil($visible_pages/2)}
            {$page_from = max(1, $total_pages_num - $visible_pages - 1)}
        {/if}

        {* До какой страницы выводить - выводим всё окно, но не более ощего количества страниц *}
        {$page_to = min($page_from + $visible_pages, $total_pages_num - 1)}
        <ul>
            {* Ссылка на 1 страницу отображается всегда *}
            <li>{if $current_page_num == 1}<span>1</span>{else}<a href="{url page=null}">1</a>{/if}</li>

            {* Выводим страницы нашего "окна" *}
            {section name=pages loop = $page_to start = $page_from}
                {* Номер текущей выводимой страницы *}
                {$p = $smarty.section.pages.index + 1}
                {* Для крайних страниц "окна" выводим троеточие, если окно не возле границы навигации *}
                {if ($p == $page_from + 1 && $p != 2) || ($p == $page_to && $p != $total_pages_num - 1)}
                    <li><span {if $p == $current_page_num}class="selected"{/if}>...</span></li>
                {else}
                    <li>{if $p == $current_page_num}<span>{$p}</span>{else}<a href="{url page = $p}">{$p}</a>{/if}</li>
                {/if}
            {/section}

            {* Ссылка на последнююю страницу отображается всегда *}
            <li>{if $current_page_num == $total_pages_num}<span>посл.</span>{else}<a href="{url page = $total_pages_num}">посл.</a>{/if}</li>

            {*{if $current_page_num == 2}<li><a class="prev_page_link" href="{url page = null}">←назад</a></li>{/if}*}
            {*{if $current_page_num > 2}<li><a class="prev_page_link" href="{url page = $current_page_num - 1}">←назад</a></li>{/if}*}
            {*{if $current_page_num < $total_pages_num}<li><a class="next_page_link" href="{url page = $current_page_num + 1}">вперед→</a></li>{/if}*}
        </ul>
	</li><li>
        <span>Товаров на странице:</span>
        <ul>
            <li><a href="{url items_per_page=20 page=null}">20</a></li>
            <li><a href="{url items_per_page=40 page=null}">40</a></li>
            <li><a href="{url page=all}">все сразу</a>
        </ul>
	</li>
</ul>
<!-- Листалка страниц (The End) -->
{/if}