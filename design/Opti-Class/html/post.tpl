{* Страница отдельной записи блога или новости *}


<div class="left-col grid-3">
    {* Если запись является новостью *}
    {if $post->news}
        <ul class="news-list clearfix">
            <li class="one-news">
                <div class="text-header clearfix">
                    <span class="date">{$post->date|date_format:"%d / %m"}</span>
                    <h1>{$post->name}</h1>
                </div>
                <div class="text-full">
                    {$post->text}
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
                </div>
            </li>
        </ul>
    {* Иначе запись является записью в блоге *}
    {else}
        <div>
            <div class="post">
                <div class="post-header clearfix">
                    <a href="#"><img src="./images/content/doctor-2.jpg" alt=""/></a>
                    <div>
                        {$post->date|date|date_format:"%d / %m / %Y /"}<br/>
                        <a>admin</a>
                    </div>
                </div>
                <div class="post-content">
                    <h1><a href="blog/{$post->url}">{$post->name}</a></h1>
                    {$post->text}
                </div>
                <div class="post-footer">
                    Теги: {$post->meta_keywords}
                    <span><a href="blog/{$post->url}">Комментарие</a></span>
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
                </div>
            </div>
            <div class="comments" id="comments">
                <h2>Комментарии:</h2>

                {if $comments}
                    {foreach $comments as $comment}
                        <div class="post-comment">
                            <strong>{$comment->name}:</strong>
                            <p>{$comment->text|escape|nl2br}</p>
                            <div class="date">{$comment->date|date_format:"%d / %m / %y, в %H:%M"}</div>
                        </div>
                    {/foreach}
                {else}
                    <p>Пока нет комментариев</p>
                {/if}
                <!-- Комментарии (The End) -->

                <!--Форма отправления комментария-->
                <!--Подключаем js-проверку формы -->
                <script src="/js/baloon/js/default.js" language="JavaScript" type="text/javascript"></script>
                <script src="/js/baloon/js/validate.js" language="JavaScript" type="text/javascript"></script>
                <script src="/js/baloon/js/baloon.js" language="JavaScript" type="text/javascript"></script>
                <link href="/js/baloon/css/baloon.css" rel="stylesheet" type="text/css" />

                <h2>Оставить комментарий:</h2>
                <form class="send-comment" method="post" action="">
                    {if $error}
                        <div class="message_error">
                            {if $error=='captcha'}
                                Неверно введена капча
                            {elseif $error=='empty_name'}
                                Введите имя
                            {elseif $error=='empty_comment'}
                                Введите комментарий
                            {/if}
                        </div>
                    {/if}
                    <p>
                        <input type="text" placeholder="Ваше имя"id="comment_name" name="name" value="{$comment_name}" data-format=".+" data-notice="Введите имя"/>
                        <textarea placeholder="Текст" class="comment_textarea" id="comment_text" name="text" data-format=".+" data-notice="Введите комментарий">{$comment_text}</textarea>
                    </p>
                    <input class="send" type="submit" name="comment" value="Отправить" />
                </form>
                <!--Форма отправления комментария (The End)-->
                <!-- Комментарии (The End) -->
            </div>
        </div>
    {/if}
</div>
<div class="right-col grid-1">
    <div class="center ask-me-wrap">
        <img src="./images/content/doctor-big-1.jpg" alt=""/>
        <p>Врач-офтальмолог<br/>Иванова Светлана</p>
        <a href="#" class="ask-me">Задать вопрос</a>
    </div>
</div>
<div class="clearfix"></div>