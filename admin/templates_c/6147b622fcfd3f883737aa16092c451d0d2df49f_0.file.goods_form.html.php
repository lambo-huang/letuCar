<?php
/* Smarty version 3.1.30, created on 2017-05-07 11:47:14
  from "G:\wamp\www\LetuCar\admin\templates\goods_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590e98c2979d42_51971280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6147b622fcfd3f883737aa16092c451d0d2df49f' => 
    array (
      0 => 'G:\\wamp\\www\\LetuCar\\admin\\templates\\goods_form.html',
      1 => 1494128828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590e98c2979d42_51971280 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form animated fadeInUp" id="noz">	
<h3>增加/编辑</h3>
<form  method="post" enctype="multipart/form-data" id="myform">
<div class="ed_sort">
	汽车品牌：<select name="sort_id" id="ssel" onchange="fun(this.value)">
  				<option value="0">汽车品牌</option>
	  			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort_list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
	  				<?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['ed_list']->value['sort_id']) {?>
	  					<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option> 					
	  				<?php } else { ?>
	 					<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	  				<?php }?>
	  			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  			</select>&nbsp;&nbsp;
  </div>

 <table>
	<input type="hidden" name="hid" id="hid" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['id'];?>
" />
	<tr><td>车型：</td><td><input type="text" class="form-control" id="car_type" name="car_type" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['car_type'];?>
"></td></tr>
	<tr><td>车龄：</td>
		<td class="txt_fl">
			<input type="number" min="0" class="form-control num" id="car_age" name="car_age" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['car_age'];?>
">
		</td>
	</tr>
    <tr><td>总行程：</td>
		<td class="txt_fl">
			<input type="number" min="0" class="form-control num" id="all_go" name="all_go" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['all_go'];?>
">
		</td>
	</tr>
	 <tr><td>档型：</td><td><input type="text" class="form-control" id="car_stall" name="car_stall" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['car_stall'];?>
"></td></tr>
    <tr><td>上牌时间：</td><td><input type="text" class="form-control" id="up_plate_time" name="up_plate_time" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['up_plate_time'];?>
"></td></tr>
	 <tr><td>价格：</td>
		 <td class="txt_fl">
			 <input type="number" min="0" class="form-control num" id="price" name="price" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['price'];?>
">
		 </td>
	 </tr>
	 <tr><td>简介：</td>
		 <td style="text-align: left">
			 <textarea class="ckeditor" id="about" name="about" rows="3" cols="50"><?php echo $_smarty_tpl->tpl_vars['ed_list']->value['about'];?>
</textarea>
		 </td>
	 </tr>
	 <tr><td>图片：</td>
		 <td class="txt_left">
			 <p><button class="btn btn-md" id="padd">增加</button></p>
			 <?php if ($_smarty_tpl->tpl_vars['ed_list']->value['id'] != '') {?>
			 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'i', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
			 <figure class="goods_photo">
				 <img src="/upload/cars/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
?<?php echo rand(1,9999);?>
" class="ed_img"/><br />
				 <input type="hidden" name="old_photos[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />
				 <figcaption><span class="btn btn-md del_photo" data-url="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" >删除</span></figcaption>
			 </figure>
			 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			 <?php }?>
			 <input type="file" class="form-control bb" name="photos[]" id="photos">
			 <div id="photos_box"></div>
		 </td>
	 </tr>
    <tr><td></td>
    	<td><input type="button" value="保存" class="btn btn-success btn-xs"/>&nbsp;
    		<input type="button" value="返回" id="return" class="btn btn-inverse btn-xs"/>
    	</td>
    </tr>
 </table>	
</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
//编辑/增肌一、二级分类
function fun(sid){
	$('#ssel2').html("");
	var url='goods_post.php?sid='+sid; 
	$.get(url,function(data){
		var data=eval('('+data+')');
		for(n in data){
			var ht=$('#ssel2').html();
			var name=data[n]['name'];
			var id=data[n]['id'];
			$('#ssel2').html(ht+"<option value="+id+">"+name+"</option>");
		};
	});
};
//返回按钮
$('#return').click(function(){
	$.get('goods.php',function(data){
		$('#admin_show').html(data);
	})
});

//图片动态增删
$('#padd').click(function(){
	$('#photos_box').before('<div class="mdd"><input type="file" class="form-control pp" id="photos" name="photos[]">&nbsp;<button class="btn btn-md pdel">删除</button></div>')
	return false;
})
setInterval(function(){
		$('.pdel').click(function(){
			$(this).parent().remove();
		});
},100);


//保存
$('.btn-success').click(function(){	
$("#myform").ajaxSubmit({
url:"goods_post.php",
type:"POST",
success:function(data){
	//document.write(data);
     if(data==1){
		$.get('goods.php',function(data){
			$('#admin_show').html(data);
			})
	}else{
		alert('增加失败！');
		return false;
	}
},
error:function(msg){
  alert("error:"+msg);
    }
 });

});

//图片删除

$('.del_photo').click(function(){
	var id =<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['id'];?>
;
	var index=$(this).attr('data-url');
	var fig=$(this).parent().parent();
	$.get('photo_delete.php',{id:id,index:index},function(data){
		if(data==1){
			fig.remove();
		}else{
			return false;
		}
				
	})
	return false;
})



<?php echo '</script'; ?>
><?php }
}
