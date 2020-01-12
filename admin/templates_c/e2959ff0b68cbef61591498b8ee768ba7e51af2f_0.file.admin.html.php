<?php
/* Smarty version 3.1.30, created on 2017-04-26 21:30:18
  from "G:\wamp\www\LetuCar\admin\templates\admin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5900a0ea0c4c51_54623662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2959ff0b68cbef61591498b8ee768ba7e51af2f' => 
    array (
      0 => 'G:\\wamp\\www\\LetuCar\\admin\\templates\\admin.html',
      1 => 1492525627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5900a0ea0c4c51_54623662 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="form_box">
<div class="list">
  	<h3>管理员列表 <span id="add_user">增加管理员</span></h3>	 	
    <table class="table table-hover" id="tab">    	
    <thead>
	  <tr><th>ID</th><th>用户名</th><th>头像</th><th>最后登录时间</th><th>操作</th></tr>
	  </thead>
	  <tbody>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_list']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>	  
	  <tr class="tr_img">
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
</td>
	  	<td><img src="/upload/admin/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
?<?php echo rand(0,9999);?>
"/></td>
	  	<td><?php echo date('Y-m-d H:s',$_smarty_tpl->tpl_vars['i']->value['stime']);?>
</td>
	  	<td>
	  		<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-info btn-xs edit">编辑</a>&nbsp;
	  		<a href="javascript:void(0)" del-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs del btn btn-primary" >删除</a>
	  	</td>
	  	</tr>
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	  
	  </tbody>
</table>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
//增加管理员
$('#add_user').click(function(){
	$("input:not(input[type='button'])").val('');
	$.get('admin_form.php',function(data){
		$('#form_box').html(data);
	})
});
//编辑按钮
$('.edit').click(function(){	
	var id=$(this).attr('data-id');
	$.get('admin_form.php',{id:id},function(data){
		//dcument.write(data)
		$("#form_box").html(data)
	}); 
});

//删除
$('.del').on('click', function () {	 
	var aa=$(this).parent().parent();
	var del_id=$(this).attr('del-id');
    $.confirm({
        title:'提示',
        content:'确定删除吗？',
        animation: 'rotateXR',
        closeAnimation: 'rotateX',
        confirm: function(){          
 			$.get('admin_post.php',{del_id:del_id},function(data){						
			});
			aa.remove();
        }
    });
});

<?php echo '</script'; ?>
><?php }
}
