<?php
/* Smarty version 3.1.30, created on 2017-05-07 14:05:18
  from "G:\wamp\www\LetuCar\admin\templates\vip_order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590eb91ee2fa09_02589955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c02c05a45aaaabd7c95976f30ac2d418cf69b7' => 
    array (
      0 => 'G:\\wamp\\www\\LetuCar\\admin\\templates\\vip_order.html',
      1 => 1494137116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590eb91ee2fa09_02589955 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list_box">
<div class="list">
  	<h3>会员预约列表</h3>
    <table class="table table-hover">    	
    <thead>
	  <tr><th>ID</th><th>用户名</th><th>汽车品牌</th><th>预约单号</th><th>预约时间</th><th>操作</th></tr>
	  </thead>
	  <tbody>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vip_order']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
	  <tr>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['vip_name']->value[$_smarty_tpl->tpl_vars['i']->value['user_id']];?>
</td>
	    <td><?php echo $_smarty_tpl->tpl_vars['sort_name']->value[$_smarty_tpl->tpl_vars['i']->value['car_id']];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['apt_num'];?>
</td>
	  	<td><?php echo date('Y-m-d H:s',$_smarty_tpl->tpl_vars['i']->value['apt_time']);?>
</td>
	    <td>
		  <a href="javascript:void(0)" del-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs del btn btn-primary" >删除</a>
	    </td>
	  	</tr>
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
	  <input type="hidden" id="back_page"/>
</table>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
//分页
$('.page').click(function(){
	var page=$(this).attr('page-data');
	//alert(page);
	$.get('vip_order.php',{page:page},function(data){		
		$('#admin_show').html(data);
		$('#back_page').val('vip_order.php?page='+page);
		
	})
})

var back_page=$('#back_page').val();
$(".del").click(function () {
    var p = $(this).parent().parent();
    var id = $(this).attr("del-id");
    $.confirm({
        title:'提示',
        content:'确定重置密码吗？',
        animation: 'rotateXR',
        closeAnimation: 'rotateX',
        confirm: function(){
            $.get("/admin/vip_apt_list_del.php", {id: id}, function (data) {
                if(data == 1){
                    p.remove();
                    $.get(back_page, function (data) {
                        $("#form_box").html(data);
                    })
				}
            })
        }
    });


})




<?php echo '</script'; ?>
><?php }
}
