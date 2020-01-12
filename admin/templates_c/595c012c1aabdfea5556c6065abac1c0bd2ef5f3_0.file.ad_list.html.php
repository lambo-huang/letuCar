<?php
/* Smarty version 3.1.30, created on 2017-05-01 19:12:37
  from "G:\wamp\www\LetuCar\admin\templates\ad_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5907182533d0c2_32579925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '595c012c1aabdfea5556c6065abac1c0bd2ef5f3' => 
    array (
      0 => 'G:\\wamp\\www\\LetuCar\\admin\\templates\\ad_list.html',
      1 => 1493637153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5907182533d0c2_32579925 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="list_box">
<div class="list">
  	<h3>广告列表 <span id="add_user">增加</span></h3>	 	
    <table class="table table-hover" id="tab">    	
    <thead>
	  <tr><th>ID</th><th>广告位</th><th>广告位ID</th><th>广告位介绍</th><th>图片</th><th>排序</th><th>操作</th></tr>
	  </thead>
	  <tbody>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ad_list1']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
	  <tr>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
	  	<td class="sort1"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['pid'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['about'];?>
</td>
	  	<td>
	  		<!--<?php if ($_smarty_tpl->tpl_vars['i']->value['photo'] != '') {?>
	  			<img src="upload/ad_list/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
?<?php echo rand(0,999);?>
" class="img">
	  		<?php } else { ?>
	  			<span></span>
	  		<?php }?>-->
	  	</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['ord'];?>
</td>
	  	<td>
	  		<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-info btn-xs edit">编辑</a>&nbsp;
	  		<!--<a href="javascript:void(0)" del-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs del btn btn-primary" >删除</a>-->
	  	</td>
	  	</tr>
	  	<input type="hidden"  id="back_page"/>
	  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ad_list']->value, 'j');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['j']->value) {
?>
	  			<?php if ($_smarty_tpl->tpl_vars['j']->value['pid'] == $_smarty_tpl->tpl_vars['i']->value['id']) {?>
	  				<tr>
					  	<td><?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
</td>
					  	<td class="sort2"><?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['j']->value['pid'];?>
</td>
					  	<td><?php echo $_smarty_tpl->tpl_vars['j']->value['about'];?>
</td>
					  	<td><img src="/upload/ad_list/<?php echo $_smarty_tpl->tpl_vars['j']->value['photo'];?>
?<?php echo rand(0,999);?>
" id="111" class="img"></td>
					  	<td><?php echo $_smarty_tpl->tpl_vars['j']->value['ord'];?>
</td>
					  	<td>
					  		<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
" class="btn btn-info btn-xs edit">编辑</a>&nbsp;
					  		<a href="javascript:void(0)" del-id="<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
" class="btn btn-danger btn-xs del btn btn-primary" >删除</a>
					  	</td>
					  </tr>
	  			<?php }?>
	  		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
</div>
<?php echo '<script'; ?>
 type="text/javascript">
//编辑按钮
$('.edit').click(function(){	
	var ed_id=$(this).attr('data-id');
	$.get('ad_list_form.php',{ed_id:ed_id},function(data){
		//alert(data)
		$('#list_box').html(data);
	});
});

//增加
$('#add_user').click(function(){
	$("input:not(input[type='button'])").val('');
	$.get('ad_list_form.php',function(data){		
		$('#list_box').html(data);
	})
});

//分页
$('.page').click(function(){
	var page=$(this).attr('page-data');
	$.get('ad_list.php',{page:page},function(data){		
		$('#admin_show').html(data);
		$('#back_page').val('ad_list.php?page='+page);
	})
})

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
		$.get('ad_list_post.php',{del_id:del_id},function(data){	
			if(data==2){
				alert('不能删除该广告位！！');    			
			}else if(data==1){
				var back_page=$('#back_page').val();
				$.get(back_page,function(data){
      				$('#admin_show').html(data);
      				aa.remove();
      			});
			}else{
				alert('失败！');	
				aa.remove();
			}
		});
		
    }
});
});



<?php echo '</script'; ?>
><?php }
}
