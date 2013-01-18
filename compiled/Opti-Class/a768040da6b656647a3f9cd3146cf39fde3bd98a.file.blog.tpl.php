<?php /* Smarty version Smarty-3.0.7, created on 2013-01-17 15:22:21
         compiled from "Y:\domains\oc//design/Opti-Class/html\blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1753350f7ecfd11ca98-30828969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a768040da6b656647a3f9cd3146cf39fde3bd98a' => 
    array (
      0 => 'Y:\\domains\\oc//design/Opti-Class/html\\blog.tpl',
      1 => 1358425332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753350f7ecfd11ca98-30828969',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'Y:\domains\oc\Smarty\libs\plugins\modifier.date_format.php';
?>

<!-- Заголовок /-->
<!--<h1><?php echo $_smarty_tpl->getVariable('page')->value->name;?>
</h1>-->

<?php $_template = new Smarty_Internal_Template('pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<!-- Статьи /-->
<div class="left-col grid-3">
    <div>
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?>
            <?php if (!$_smarty_tpl->getVariable('post')->value->news){?>
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
                        <a href="blog/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('post')->value->name;?>
</a>
                        <?php echo $_smarty_tpl->getVariable('post')->value->annotation;?>

                    </div>
                    <div class="post-footer">
                        Теги: <?php echo $_smarty_tpl->getVariable('post')->value->meta_keywords;?>

                        <span>
                            <?php ob_start();?><?php echo $_smarty_tpl->getVariable('post')->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_comments'][0][0]->get_comments_plugin(array('object_id'=>$_tmp1,'var'=>'comments'),$_smarty_tpl);?>

                            <a href="blog/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
#comments"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('comments')->value,'комментарий','комментариев','комментария');?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('comments')->value;?>
</a>
                        </span>
                        <!--<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,lj"></div>-->
                    </div>
                </div>
            <?php }?>
        <?php }} ?>
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

<?php $_template = new Smarty_Internal_Template('pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
          