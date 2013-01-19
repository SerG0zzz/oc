<?php /* Smarty version Smarty-3.0.7, created on 2013-01-18 18:32:50
         compiled from "Y:\domains\oc//design/Opti-Class/html\post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1189650f96b229bcf36-62655903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2826e0b2eccfbf2b74ef272879b21259d78c7d84' => 
    array (
      0 => 'Y:\\domains\\oc//design/Opti-Class/html\\post.tpl',
      1 => 1358504416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189650f96b229bcf36-62655903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'Y:\domains\oc\Smarty\libs\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_escape')) include 'Y:\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?>


<div class="left-col grid-3">
    <?php if ($_smarty_tpl->getVariable('post')->value->news){?>
        <ul class="news-list clearfix">
            <li class="one-news">
                <div class="text-header clearfix">
                    <span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('post')->value->date,"%d / %m");?>
</span>
                    <h1><?php echo $_smarty_tpl->getVariable('post')->value->name;?>
</h1>
                </div>
                <div class="text-full">
                    <?php echo $_smarty_tpl->getVariable('post')->value->text;?>


                    <!-- социальные кнопки -->
                    <div class="social-buttons">
                        <div id="vk_like" style="display:inline-block;*display:inline;zoom:1;vertical-align:top;"></div>
                        
                            <script type="text/javascript">
                                VK.Widgets.Like("vk_like", {type: "mini", height: 20});
                            </script>
                        
                        <div id="fb-root" style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;"></div>
                        
                            <fb:like href="" send="false" layout="button_count" width="90" show_faces="false" font="lucida grande"></fb:like>
                        
                        <div class="tweeter" style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;padding-left:30px;">
                            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ru">Tweet</a>
                        </div>
                        <div style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;width:120px;">
                            <a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share" data-mrc-config="{'cm' : '2', 'ck' : '1', 'sz' : '20', 'st' : '1', 'tp' : 'ok'}">Нравится</a>
                            <script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>
                        </div>
                    </div>
                    <!-- социальные кнопки (The End) -->
                </div>
            </li>
        </ul>
    <?php }else{ ?>
        <div>
            <div class="post">
                <div class="post-header clearfix">
                    <a href="#"><img src="./images/content/doctor-2.jpg" alt=""/></a>
                    <div>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->getVariable('post')->value->date),"%d / %m / %Y /");?>
<br/>
                        <a>admin</a>
                    </div>
                </div>
                <div class="post-content">
                    <h1><a href="blog/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('post')->value->name;?>
</a></h1>
                    <?php echo $_smarty_tpl->getVariable('post')->value->text;?>

                </div>
                <div class="post-footer">
                    Теги: <?php echo $_smarty_tpl->getVariable('post')->value->meta_keywords;?>

                    <span><a href="blog/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
">Комментарие</a></span>
                    <div class="social-buttons">
                        <div id="vk_like" style="display:inline-block;*display:inline;zoom:1;vertical-align:top;"></div>
                        
                            <script type="text/javascript">
                                VK.Widgets.Like("vk_like", {type: "mini", height: 20});
                            </script>
                        
                        <div id="fb-root" style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;"></div>
                        
                            <fb:like href="" send="false" layout="button_count" width="90" show_faces="false" font="lucida grande"></fb:like>
                        
                        <div class="tweeter" style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;padding-left:30px;">
                            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ru">Tweet</a>
                        </div>
                        <div style="display:inline-block;*display:inline;zoom:1;height:20px;vertical-align:top;width:120px;">
                            <a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share" data-mrc-config="{'cm' : '2', 'ck' : '1', 'sz' : '20', 'st' : '1', 'tp' : 'ok'}">Нравится</a>
                            <script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comments" id="comments">
                <h2>Комментарии:</h2>

                <?php if ($_smarty_tpl->getVariable('comments')->value){?>
                    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('comments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
?>
                        <div class="post-comment">
                            <strong><?php echo $_smarty_tpl->getVariable('comment')->value->name;?>
:</strong>
                            <p><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->getVariable('comment')->value->text));?>
</p>
                            <div class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('comment')->value->date,"%d / %m / %y, в %H:%M");?>
</div>
                        </div>
                    <?php }} ?>
                <?php }else{ ?>
                    <p>Пока нет комментариев</p>
                <?php }?>
                <!-- Комментарии (The End) -->

                <!--Форма отправления комментария-->
                <!--Подключаем js-проверку формы -->
                <script src="/js/baloon/js/default.js" language="JavaScript" type="text/javascript"></script>
                <script src="/js/baloon/js/validate.js" language="JavaScript" type="text/javascript"></script>
                <script src="/js/baloon/js/baloon.js" language="JavaScript" type="text/javascript"></script>
                <link href="/js/baloon/css/baloon.css" rel="stylesheet" type="text/css" />

                <h2>Оставить комментарий:</h2>
                <form class="send-comment" method="post" action="">
                    <?php if ($_smarty_tpl->getVariable('error')->value){?>
                        <div class="message_error">
                            <?php if ($_smarty_tpl->getVariable('error')->value=='captcha'){?>
                                Неверно введена капча
                            <?php }elseif($_smarty_tpl->getVariable('error')->value=='empty_name'){?>
                                Введите имя
                            <?php }elseif($_smarty_tpl->getVariable('error')->value=='empty_comment'){?>
                                Введите комментарий
                            <?php }?>
                        </div>
                    <?php }?>
                    <p>
                        <input type="text" placeholder="Ваше имя"id="comment_name" name="name" value="<?php echo $_smarty_tpl->getVariable('comment_name')->value;?>
" data-format=".+" data-notice="Введите имя"/>
                        <textarea placeholder="Текст" class="comment_textarea" id="comment_text" name="text" data-format=".+" data-notice="Введите комментарий"><?php echo $_smarty_tpl->getVariable('comment_text')->value;?>
</textarea>
                    </p>
                    <input class="send" type="submit" name="comment" value="Отправить" />
                </form>
                <!--Форма отправления комментария (The End)-->
                <!-- Комментарии (The End) -->
            </div>
        </div>
    <?php }?>
</div>
<div class="right-col grid-1">
    <div class="center ask-me-wrap">
        <img src="./images/content/doctor-big-1.jpg" alt=""/>
        <p>Врач-офтальмолог<br/>Иванова Светлана</p>
        <a href="#" class="ask-me">Задать вопрос</a>
    </div>
</div>
<div class="clearfix"></div>