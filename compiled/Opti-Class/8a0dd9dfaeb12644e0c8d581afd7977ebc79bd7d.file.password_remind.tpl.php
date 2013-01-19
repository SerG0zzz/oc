<?php /* Smarty version Smarty-3.0.7, created on 2013-01-19 20:23:58
         compiled from "C:\OpenServer\domains\oc//design/Opti-Class/html\password_remind.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3099850fad6ae510d68-28384665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a0dd9dfaeb12644e0c8d581afd7977ebc79bd7d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\oc//design/Opti-Class/html\\password_remind.tpl',
      1 => 1356332237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3099850fad6ae510d68-28384665',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\OpenServer\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Восстановление пароля", null, 1);?>

<?php if ($_smarty_tpl->getVariable('email_sent')->value){?>
<h1>Вам отправлено письмо</h1>

<p>На <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('email')->value);?>
 отправлено письмо для восстановления пароля.</p>
<?php }else{ ?>
<h1>Напоминание пароля</h1>

<?php if ($_smarty_tpl->getVariable('error')->value){?>
<div class="message_error">
	<?php if ($_smarty_tpl->getVariable('error')->value=='user_not_found'){?>Пользователь не найден
	<?php }else{ ?><?php echo $_smarty_tpl->getVariable('error')->value;?>
<?php }?>
</div>
<?php }?>

<form class="form" method="post">
	<label>Введите email, который вы указывали при регистрации</label>
	<input type="text" name="email" data-format="email" data-notice="Введите email" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('email')->value);?>
"  maxlength="255"/>
	<input type="submit" class="button_submit" value="Вспомнить" />
</form>
<?php }?>