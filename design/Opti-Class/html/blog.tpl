{* Список записей блога *}

<!-- Заголовок /-->
<!--<h1>{$page->name}</h1>-->

{include file='pagination.tpl'}

<!-- Статьи /-->
<div class="left-col grid-3">
    <div>
        {foreach $posts as $post}
            {if !$post->news}
                <div class="post">
                    <div class="post-header clearfix">
                        <a href="#"><img src="./images/content/doctor-2.jpg" alt=""/></a>
                        <div>
                            {$post->date|date|date_format:"%d / %m / %Y /"}<br/>
                            <a>admin</a>
                        </div>
                    </div>
                    <div class="post-content">
                        <a href="blog/{$post->url}">{$post->name}</a>
                        {$post->annotation}
                    </div>
                    <div class="post-footer">
                        Теги: {$post->meta_keywords}
                        <span>
                            {get_comments object_id={$post->id} var=comments}
                            <a href="blog/{$post->url}#comments">{$comments|plural:'комментарий':'комментариев':'комментария'}&nbsp;&nbsp;{$comments}</a>
                        </span>
                        <!--<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,lj"></div>-->
                    </div>
                </div>
            {/if}
        {/foreach}
    </div>
</div>
<div class="right-col grid-1">
    <div class="center ask-me-wrap">
        <img src="./images/content/doctor-big-1.jpg" alt=""/>
        <p>Врач-офтальмолог<br/>Иванова Светлана</p>
        <a href="#" class="ask-me">Задать вопрос</a>
    </div>
</div>
<!-- Статьи #End /-->    

{include file='pagination.tpl'}
          