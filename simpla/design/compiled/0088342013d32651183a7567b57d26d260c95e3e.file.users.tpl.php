<?php /* Smarty version Smarty-3.0.7, created on 2012-12-24 15:36:32
         compiled from "simpla/design/html\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677050d84c502818e5-04868611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0088342013d32651183a7567b57d26d260c95e3e' => 
    array (
      0 => 'simpla/design/html\\users.tpl',
      1 => 1345468604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1677050d84c502818e5-04868611',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'Y:\domains\oc\Smarty\libs\plugins\modifier.escape.php';
?>
<?php ob_start(); ?>
	<li class="active"><a href="index.php?module=UsersAdmin">Покупатели</a></li>
	<li><a href="index.php?module=GroupsAdmin">Группы</a></li>
	<li><a href="index.php?module=CouponsAdmin">Купоны</a></li>
<?php  Smarty::$_smarty_vars['capture']['tabs']=ob_get_clean();?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Покупатели', null, 1);?>
<?php if ($_smarty_tpl->getVariable('users')->value||$_smarty_tpl->getVariable('keyword')->value){?>
<form method="get">
<div id="search">
	<input type="hidden" name="module" value='UsersAdmin'>
	<input class="search" type="text" name="keyword" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
" />
	<input class="search_button" type="submit" value=""/>
</div>
</form>
<?php }?>
<div id="header">
	<?php if ($_smarty_tpl->getVariable('keyword')->value&&$_smarty_tpl->getVariable('users_count')->value>0){?>
	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('users_count')->value,'Нашелся','Нашлось','Нашлись');?>
 <?php echo $_smarty_tpl->getVariable('users_count')->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('users_count')->value,'покупатель','покупателей','покупателя');?>
</h1>
	<?php }elseif($_smarty_tpl->getVariable('users_count')->value>0){?>
	<h1><?php echo $_smarty_tpl->getVariable('users_count')->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('users_count')->value,'покупатель','покупателей','покупателя');?>
</h1> 	
	<?php }else{ ?>
	<h1>Нет покупателей</h1> 	
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('users_count')->value>0){?>
	<form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ExportUsersAdmin'),$_smarty_tpl);?>
" target="_blank">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<input type="image" src="./design/images/export_excel.png" name="export" title="Экспортировать этих покупателей">
	</form>
	<?php }?>
	
</div>

<?php if ($_smarty_tpl->getVariable('users')->value){?>
<!-- Основная часть -->
<div id="main_list">

	<!-- Листалка страниц -->
	<?php $_template = new Smarty_Internal_Template('pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	
	<!-- Листалка страниц (The End) -->

	<div id="sort_links" style='display:block;'>
	<!-- Ссылки для сортировки -->
	Упорядочить по 
	<?php if ($_smarty_tpl->getVariable('sort')->value!='name'){?><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'name'),$_smarty_tpl);?>
">имени</a><?php }else{ ?>имени<?php }?> или
	<?php if ($_smarty_tpl->getVariable('sort')->value!='date'){?><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'date'),$_smarty_tpl);?>
">дате</a><?php }else{ ?>дате<?php }?>
	<!-- Ссылки для сортировки (The End) -->
	</div>

	<form id="form_list" method="post">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	
		<div id="list">	
			<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('users')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
?>
			<div class="<?php if (!$_smarty_tpl->getVariable('user')->value->enabled){?>invisible<?php }?> row">
		 		<div class="checkbox cell">
					<input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getVariable('user')->value->id;?>
"/>				
				</div>
				<div class="user_name cell">
					<a href="index.php?module=UserAdmin&id=<?php echo $_smarty_tpl->getVariable('user')->value->id;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value->name);?>
</a>	
				</div>
				<div class="user_email cell">
					<a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value->name);?>
<<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value->email);?>
>"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value->email);?>
</a>	
				</div>
				<div class="user_group cell">
					<?php echo $_smarty_tpl->getVariable('groups')->value[$_smarty_tpl->getVariable('user')->value->group_id]->name;?>

				</div>
				<div class="icons cell">
					<a class="enable" title="Активен" href="#"></a>
					<a class="delete" title="Удалить" href="#"></a>
				</div>
				<div class="clear"></div>
			</div>
			<?php }} ?>
		</div>
	
		<div id="action">
		<label id="check_all" class="dash_link">Выбрать все</label>
	
		<span id=select>
		<select name="action">
			<option value="disable">Заблокировать</option>
			<option value="enable">Разблокировать</option>
			<option value="delete">Удалить</option>
		</select>
		</span>
	
		<input id="apply_action" class="button_green" type="submit" value="Применить">
		</div>

	</form>

	<!-- Листалка страниц -->
	<?php $_template = new Smarty_Internal_Template('pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	
	<!-- Листалка страниц (The End) -->

</div>
<?php }?>

 <!-- Меню -->
<div id="right_menu">
	<ul>
		<li <?php if (!$_smarty_tpl->getVariable('group')->value->id){?>class="selected"<?php }?>><a href='index.php?module=UsersAdmin'>Все группы</a></li>
	</ul>
	<!-- Группы -->
	<?php if ($_smarty_tpl->getVariable('groups')->value){?>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('groups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
?>
		<li <?php if ($_smarty_tpl->getVariable('group')->value->id==$_smarty_tpl->getVariable('g')->value->id){?>class="selected"<?php }?>><a href="index.php?module=UsersAdmin&group_id=<?php echo $_smarty_tpl->getVariable('g')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('g')->value->name;?>
</a></li>
		<?php }} ?>
	</ul>
	<?php }?>
	<!-- Группы (The End)-->
		
</div>
<!-- Меню  (The End) -->



<script>
$(function() {

	// Раскраска строк
	function colorize()
	{
		$("#list div.row:even").addClass('even');
		$("#list div.row:odd").removeClass('even');
	}
	// Раскрасить строки сразу
	colorize();
	
	// Выделить все
	$("#check_all").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', 1-$('#list input[type="checkbox"][name*="check"]').attr('checked'));
	});	

	// Удалить 
	$("a.delete").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
		$(this).closest(".row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
		$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
		$(this).closest("form").submit();
	});
	
	// Скрыт/Видим
	$("a.enable").click(function() {
		var icon        = $(this);
		var line        = icon.closest(".row");
		var id          = line.find('input[type="checkbox"][name*="check"]').val();
		var state       = line.hasClass('invisible')?1:0;
		icon.addClass('loading_icon');
		$.ajax({
			type: 'POST',
			url: 'ajax/update_object.php',
			data: {'object': 'user', 'id': id, 'values': {'enabled': state}, 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
				icon.removeClass('loading_icon');
				if(state)
					line.removeClass('invisible');
				else
					line.addClass('invisible');				
			},
			dataType: 'json'
		});	
		return false;	
	});
	
	// Подтверждение удаления
	$("form").submit(function() {
		if($('#list input[type="checkbox"][name*="check"]:checked').length>0)
			if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
				return false;	
	});
});

</script>

