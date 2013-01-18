{* Шаблон текстовой страницы *}

<!-- Заголовок страницы -->
{if $page->menu_id != 4}
    <h1 data-page="{$page->id}">{$page->header|escape}</h1>
{/if}

<!-- Тело страницы -->
{$page->body}
