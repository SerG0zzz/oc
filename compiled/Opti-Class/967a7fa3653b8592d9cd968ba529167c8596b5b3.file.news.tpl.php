<?php /* Smarty version Smarty-3.0.7, created on 2013-01-17 11:42:59
         compiled from "Y:\domains\oc//design/Opti-Class/html\news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225350f7b99397f134-17715186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '967a7fa3653b8592d9cd968ba529167c8596b5b3' => 
    array (
      0 => 'Y:\\domains\\oc//design/Opti-Class/html\\news.tpl',
      1 => 1358161738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225350f7b99397f134-17715186',
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
    <ul class="news-list clearfix">
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?>
            <?php if ($_smarty_tpl->getVariable('post')->value->news){?>
                <li class="clearfix">
                    <a href="news/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
"><img src="../<?php echo $_smarty_tpl->getVariable('config')->value->news_images_dir;?>
<?php echo $_smarty_tpl->getVariable('post')->value->image;?>
" alt=""/></a>
                    <div class="text-header">
                        <span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('post')->value->date,"%d / %m");?>
</span>
                        <a href="news/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('post')->value->name;?>
</a>
                    </div>
                    <div class="text-min">
                        <?php echo $_smarty_tpl->getVariable('post')->value->annotation;?>

                        <a href="news/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
">Читать далее</a>
                    </div>
                </li>
            <?php }?>
        <?php }} ?>
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

<?php $_template = new Smarty_Internal_Template('pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
