<?php
/* Smarty version 3.1.30, created on 2017-05-07 13:34:02
  from "G:\wamp\www\LetuCar\admin\templates\vip_data.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590eb1cab670a7_09723247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14f16eacda5ebfb9add7671eb4c16e5bf5ff0f83' => 
    array (
      0 => 'G:\\wamp\\www\\LetuCar\\admin\\templates\\vip_data.html',
      1 => 1494135228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590eb1cab670a7_09723247 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list">
  	<h3>会员列表</h3>	 	
    <table class="table table-hover" id="tab">
    <thead>
	  <tr><th>ID</th><th>用户名</th><th>头像</th><th>昵称</th><th>性别</th><th>电话</th><th>邮箱</th><th>地址</th><th>操作</th></tr>
	  </thead>
	  <tbody>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vip_list']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
	  <tr>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
</td>
	  	<td><img src="/upload/admin/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
?<?php echo rand(0,999);?>
" height="50" width="80"></td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['ni_name'];?>
</td>
	    <?php if ($_smarty_tpl->tpl_vars['i']->value['sex'] == 1) {?>
		  <td>男</td>
	    <?php } else { ?>
		  <td>女</td>
	    <?php }?>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['tel'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
</td>
	  	<td>
	  		<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-info btn-xs edit">重置密码</a>&nbsp;
	  	</td>
	  	</tr>
	  	<input type="hidden" id="back_page" />
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	  	<tr id="bb">
	   	   <td colspan="12">
	  		<ul class="pagination pagination-sm">
	  			<li><a href="javascript:void(0)" class="page" page-data="1">首页</a></li>
	  			<?php if ($_smarty_tpl->tpl_vars['prev_page']->value < 1) {?>
			   		<li><a href="javascript:void(0)">&laquo;</a></li>
			    <?php } else { ?>
			    	<li><a href="javascript:void(0)" class="page" page-data="<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
">&laquo;</a></li>
			    <?php }?>
			    <?php
$__section_sn_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sn']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn'] : false;
$__section_sn_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['all_page']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sn_0_total = $__section_sn_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sn'] = new Smarty_Variable(array());
if ($__section_sn_0_total != 0) {
for ($__section_sn_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] = 0; $__section_sn_0_iteration <= $__section_sn_0_total; $__section_sn_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']++){
?>
			    	<?php if ($_smarty_tpl->tpl_vars['page']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1) {?>
			    		<li><a href="javascript:void(0)" class="page" id="bg_color" page-data="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1;?>
</a></li>
			    		<?php } else { ?>
			    		<li><a href="javascript:void(0)" class="page" page-data="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1;?>
</a></li>
			   		<?php }?>
			    
			    <?php
}
}
if ($__section_sn_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sn'] = $__section_sn_0_saved;
}
?>
			    	<?php if ($_smarty_tpl->tpl_vars['next_page']->value > $_smarty_tpl->tpl_vars['all_page']->value) {?>
			   		<li><a href="javascript:void(0)">&raquo;</a></li>
			    <?php } else { ?>
			    	<li><a href="javascript:void(0)" class="page" page-data="<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
">&raquo;</a></li>
			    <?php }?>
			    <li><a href="javascript:void(0)" class="page" page-data="<?php echo $_smarty_tpl->tpl_vars['all_page']->value;?>
">末页</a></li>
			</ul>
	  	  </td>
	   </tr>
	  </tbody>
</table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
//编辑按钮
$('.edit').click(function(){	
	var id = $(this).attr('data-id');
	$.confirm({
        title:'提示',
        content:'确定重置密码吗？',
        animation: 'rotateXR',
        closeAnimation: 'rotateX',
        confirm: function(){ 
        	var back_page = $('#back_page').val();
 			$.get('/admin/reset_pwd.php',{id:id},function(data){
			if(data==1){
				alert('重置成功！');
			}else{
				alert('重置失败！');
			}
		});	 
        }
    });
	
});

//分页
$('.page').click(function(){
	var page=$(this).attr('page-data');
	$.get('vip_data.php',{page:page},function(data){
		$('#admin_show').html(data);
		$('#back_page').val('vip_data.php?page='+page);
	})
})
<?php echo '</script'; ?>
><?php }
}
