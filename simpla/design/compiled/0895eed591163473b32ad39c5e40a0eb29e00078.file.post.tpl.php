<?php /* Smarty version Smarty-3.0.7, created on 2013-01-15 17:19:25
         compiled from "simpla/design/html\post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:937550f5656d189fc2-75248907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0895eed591163473b32ad39c5e40a0eb29e00078' => 
    array (
      0 => 'simpla/design/html\\post.tpl',
      1 => 1358259557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '937550f5656d189fc2-75248907',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'Y:\domains\oc\Smarty\libs\plugins\modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include 'Y:\domains\oc\Smarty\libs\plugins\modifier.date_format.php';
?><?php ob_start(); ?>
	<li class="active"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'BlogAdmin','id'=>null,'page'=>null),$_smarty_tpl);?>
">Блог</a></li>
<?php  Smarty::$_smarty_vars['capture']['tabs']=ob_get_clean();?>

<?php if ($_smarty_tpl->getVariable('post')->value->id){?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->getVariable('post')->value->name, null, 1);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новая запись в блоге', null, 1);?>
<?php }?>
<?php $_template = new Smarty_Internal_Template('tinymce_init.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<script src="design/js/jquery/datepicker/jquery.ui.datepicker-ru.js"></script>

<script>
$(function() {

	$('input[name="date"]').datepicker({
		regional:'ru'
	});

    // Удаление изображений
    $(".images a.delete").click( function() {
        $("input[name='delete_image']").val('1');
        $(this).closest("ul").fadeOut(200, function() { $(this).remove(); });
        return false;
    });
	
	// Автозаполнение мета-тегов
	meta_title_touched = true;
	meta_keywords_touched = true;
	meta_description_touched = true;
	url_touched = true;
	
	if($('input[name="meta_title"]').val() == generate_meta_title() || $('input[name="meta_title"]').val() == '')
		meta_title_touched = false;
	if($('input[name="meta_keywords"]').val() == generate_meta_keywords() || $('input[name="meta_keywords"]').val() == '')
		meta_keywords_touched = false;
	if($('textarea[name="meta_description"]').val() == generate_meta_description() || $('textarea[name="meta_description"]').val() == '')
		meta_description_touched = false;
	if($('input[name="url"]').val() == generate_url() || $('input[name="url"]').val() == '')
		url_touched = false;
		
	$('input[name="meta_title"]').change(function() { meta_title_touched = true; });
	$('input[name="meta_keywords"]').change(function() { meta_keywords_touched = true; });
	$('textarea[name="meta_description"]').change(function() { meta_description_touched = true; });
	$('input[name="url"]').change(function() { url_touched = true; });
	
	$('input[name="name"]').keyup(function() { set_meta(); });
	$('select[name="brand_id"]').change(function() { set_meta(); });
	$('select[name="categories[]"]').change(function() { set_meta(); });
	
});

function set_meta()
{
	if(!meta_title_touched)
		$('input[name="meta_title"]').val(generate_meta_title());
	if(!meta_keywords_touched)
		$('input[name="meta_keywords"]').val(generate_meta_keywords());
	if(!meta_description_touched)
	{
		descr = $('textarea[name="meta_description"]');
		descr.val(generate_meta_description());
		descr.scrollTop(descr.outerHeight());
	}
	if(!url_touched)
		$('input[name="url"]').val(generate_url());
}

function generate_meta_title()
{
	name = $('input[name="name"]').val();
	return name;
}

function generate_meta_keywords()
{
	name = $('input[name="name"]').val();
	return name;
}

function generate_meta_description()
{
	if(typeof(tinyMCE.get("annotation")) =='object')
	{
		description = tinyMCE.get("annotation").getContent().replace(/(<([^>]+)>)/ig," ").replace(/(\&nbsp;)/ig," ").replace(/^\s+|\s+$/g, '').substr(0, 512);
		return description;
	}
	else
		return $('textarea[name=annotation]').val().replace(/(<([^>]+)>)/ig," ").replace(/(\&nbsp;)/ig," ").replace(/^\s+|\s+$/g, '').substr(0, 512);
}

function generate_url()
{
	url = $('input[name="name"]').val();
	url = url.replace(/[\s]+/gi, '-');
	url = translit(url);
	url = url.replace(/[^0-9a-z_\-]+/gi, '').toLowerCase();	
	return url;
}

function translit(str)
{
	var ru=("А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я").split("-")   
	var en=("A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya").split("-")   
 	var res = '';
	for(var i=0, l=str.length; i<l; i++)
	{ 
		var s = str.charAt(i), n = ru.indexOf(s); 
		if(n >= 0) { res += en[n]; } 
		else { res += s; } 
    } 
    return res;  
}

</script>


<?php if ($_smarty_tpl->getVariable('message_success')->value){?>
<!-- Системное сообщение -->
<div class="message message_success">
	<span><?php if ($_smarty_tpl->getVariable('message_success')->value=='added'){?>Запись добавлена<?php }elseif($_smarty_tpl->getVariable('message_success')->value=='updated'){?>Запись обновлена<?php }?></span>
	<a class="link" target="_blank" href="../blog/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
">Открыть запись на сайте</a>
	<?php if ($_GET['return']){?>
	<a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
	<?php }?>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>

<?php if ($_smarty_tpl->getVariable('message_error')->value){?>
<!-- Системное сообщение -->
<div class="message message_error">
	<span><?php if ($_smarty_tpl->getVariable('message_error')->value=='url_exists'){?>Запись с таким адресом уже существует<?php }?></span>
	<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>


<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		<input class="name" name=name type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->name);?>
"/> 
		<input name=id type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->id);?>
"/> 
		<div class="checkbox">
			<input name=visible value='1' type="checkbox" id="active_checkbox" <?php if ($_smarty_tpl->getVariable('post')->value->visible){?>checked<?php }?>/> <label for="active_checkbox">Активна</label>
            <input name="news" value='1' type="checkbox" id="news_checkbox" <?php if ($_smarty_tpl->getVariable('post')->value->news){?>checked<?php }?>/> <label for="news_checkbox">Новость?</label>
		</div>

	</div> 

	<!-- Левая колонка свойств товара -->
	<div id="column_left">
			
		<!-- Параметры страницы -->
		<div class="block">
			<ul>
				<li><label class=property>Дата</label><input type=text name=date value='<?php echo smarty_modifier_date_format($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->getVariable('post')->value->date),"%d.%m.%Y");?>
'></li>
			</ul>
		</div>
		<div class="block layer">
		<!-- Параметры страницы (The End)-->
			<h2>Параметры страницы</h2>
		<!-- Параметры страницы -->
			<ul>
				<li><label class=property>Адрес</label><div class="page_url"> /blog/</div><input name="url" class="page_url" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->url);?>
" /></li>
				<li><label class=property>Заголовок</label><input name="meta_title" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->meta_title);?>
" /></li>
				<li><label class=property>Ключевые слова</label><input name="meta_keywords"  type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->meta_keywords);?>
" /></li>
				<li><label class=property>Описание</label><textarea name="meta_description" /><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->meta_description);?>
</textarea></li>
			</ul>
		</div>
		<!-- Параметры страницы (The End)-->


			
	</div>
	<!-- Левая колонка свойств товара (The End)--> 
	
	<!-- Правая колонка свойств товара -->	
	<div id="column_right">

        <!-- Изображение анонса новости -->
        <div class="block layer images">
            <h2>Изображение анонса новости</h2>
            <input class='upload_image' name=image type=file value="../<?php echo $_smarty_tpl->getVariable('config')->value->news_images_dir;?>
<?php echo $_smarty_tpl->getVariable('post')->value->image;?>
" />

            <?php if ($_smarty_tpl->getVariable('post')->value->image){?>
                <ul>
                    <li>
                        <a href='#' class="delete"><img src='design/images/cross-circle-frame.png'></a>
                        <img src="../<?php echo $_smarty_tpl->getVariable('config')->value->news_images_dir;?>
<?php echo $_smarty_tpl->getVariable('post')->value->image;?>
" alt="" />
                    </li>
                </ul>
            <?php }?>
        </div>
	</div>
	<!-- Правая колонка свойств товара (The End)--> 
	
	<!-- Описагние товара -->
	<div class="block layer">
		<h2>Краткое описание</h2>
		<textarea name="annotation" class='editor_small'><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->annotation);?>
</textarea>
	</div>
		
	<div class="block">
		<h2>Полное  описание</h2>
		<textarea name="body"  class='editor_large'><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->text);?>
</textarea>
	</div>
	<!-- Описание товара (The End)-->
	<input class="button_green button_save" type="submit" name="" value="Сохранить" />
	
</form>
<!-- Основная форма (The End) -->
