<?php /* Smarty version Smarty-3.0.7, created on 2013-01-19 20:23:24
         compiled from "C:\OpenServer\domains\oc//design/Opti-Class/html\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1610550fad68c0cb9e1-57771092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6428716801433dc9e6cbd2f332395e129aedc601' => 
    array (
      0 => 'C:\\OpenServer\\domains\\oc//design/Opti-Class/html\\login.tpl',
      1 => 1356332237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1610550fad68c0cb9e1-57771092',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\OpenServer\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Вход на сайт", null, 1);?>
   
<h1>Вход</h1>

<?php if ($_smarty_tpl->getVariable('error')->value){?>
<div class="message_error">
	<?php if ($_smarty_tpl->getVariable('error')->value=='login_incorrect'){?>Неверный логин или пароль
	<?php }elseif($_smarty_tpl->getVariable('error')->value=='user_disabled'){?>Ваш аккаунт еще не активирован.
	<?php }else{ ?><?php echo $_smarty_tpl->getVariable('error')->value;?>
<?php }?>
</div>
<?php }?>

<form class="form login_form" method="post">
	<label>Email</label>
	<input type="text" name="email" data-format="email" data-notice="Введите email" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('email')->value);?>
" maxlength="255" />

    <label>Пароль (<a href="user/password_remind">напомнить</a>)</label>
    <input type="password" name="password" data-format=".+" data-notice="Введите пароль" value="" />

	<input type="submit" class="button" name="login" value="Войти">
</form>