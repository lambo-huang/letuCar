<?php
/* Smarty version 3.1.30, created on 2017-05-06 17:32:49
  from "G:\wamp\www\LetuCar\admin\templates\ad_list_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590d9841463eb4_27699516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58f89f0a6e1c2cd75f963cbdb0a2664b94435271' => 
    array (
      0 => 'G:\\wamp\\www\\LetuCar\\admin\\templates\\ad_list_form.html',
      1 => 1494062331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590d9841463eb4_27699516 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form" id="noz">	
<h3>增加/编辑</h3>
<form id="myform" enctype="multipart/form-data">
 <table>
	<input type="hidden" name="hid" id="hid" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['id'];?>
" />
	<tr><td>广告：</td>
		<td class="txt_left">			
			<select name="pid" id="sel1">
				<option value="0">广告位</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t_list']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value['id'] == $_smarty_tpl->tpl_vars['ed_list']->value['pid']) {?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
					<?php } else { ?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
	</tr>
	<tr><td>名称：</td><td><input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['name'];?>
"></td></tr>
    <tr><td>介绍：</td><td><textarea class="form-control mar_bot" name="about"><?php echo $_smarty_tpl->tpl_vars['ed_list']->value['about'];?>
</textarea></td></tr>
    <tr><td>图片：</td>
    	<td class="txt_left">   		
			<input type="file" class="form-control bb" name="photo" id="photos">
			<?php if ($_smarty_tpl->tpl_vars['ed_list']->value['id'] != '') {?>
			<img src="/upload/ad_list/<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['photo'];?>
?<?php echo rand(0,9999);?>
" class="ed_img">
			<?php }?>
			<input type="hidden" class="form-control bb" name="old_photo" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['photo'];?>
">   
    	</td>
    </tr>
    </tr>
    <tr><td>排序：</td><td><input type="number" class="form-control" name="ord" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['ord'];?>
"></td></tr>
    <tr><td></td><td><input type="button" value="保存" class="btn btn-success btn-xs"/>&nbsp;<input type="button" value="返回" id="return" class="btn btn-inverse btn-xs"/></td></tr>
 </table>
</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
//保存
$('.btn-success').click(function(){
	 $("#myform").ajaxSubmit({
        url:"ad_list_post.php",
        type:"POST",
        success:function(data){
        	//document.write(data);
          if(data==1){
          	$.get('ad_list.php',function(data){
          		$('#list_box').html(data);	
          	});
          }else{
          	alert('失败！');
          }
        },
        error:function(msg){
          alert("error:"+msg);
        }
     });
});
//返回按钮
$('#return').click(function(){
	$.get('ad_list.php',function(data){
      $('#admin_show').html(data);	
    });
});
<?php echo '</script'; ?>
><?php }
}
