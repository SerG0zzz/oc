{* Список записей блога *}

<!-- Заголовок /-->
<!--<h1>{$page->name}</h1>-->

{include file='pagination.tpl'}

<!-- Статьи /-->
<div class="left-col grid-3">
    <ul class="news-list clearfix">
        {foreach $posts as $post}
            {if $post->news}
                <li class="clearfix">
                    <a href="news/{$post->url}"><img src="../{$config->news_images_dir}{$post->image}" alt=""/></a>
                    <div class="text-header">
                        <span class="date">{$post->date|date_format:"%d / %m"}</span>
                        <a href="news/{$post->url}">{$post->name}</a>
                    </div>
                    <div class="text-min">
                        {$post->annotation}
                        <a href="news/{$post->url}">Читать далее</a>
                    </div>
                </li>
            {/if}
        {/foreach}
    </ul>
</div>
<div class="right-col grid-1">
    <div class="center ask-me-wrap">
        <img src="./images/content/doctor-big-1.jpg" alt=""/>
        <p>Врач-офтальмолог<br/>Иванова Светлана</p>
        <a href="#" class="ask-me">Задать вопрос</a>
    </div>
</div>
<div class="clearfix"></div>
<p class="social-buttons right">SOCIAL BUTTONS</p>
<!-- Статьи #End /-->

{include file='pagination.tpl'}
