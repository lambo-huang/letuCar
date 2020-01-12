<?php
/* Smarty version 3.1.30, created on 2017-05-07 15:39:07
  from "G:\wamp\www\LetuCar\admin\templates\sort.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590ecf1b4cf497_09386026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c5ddd5c140d7d95b393b4a620fe84e65484a43c' => 
    array (
      0 => 'G:\\wamp\\www\\LetuCar\\admin\\templates\\sort.html',
      1 => 1494142744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590ecf1b4cf497_09386026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list animated fadeIn" id="list">
  	<h3>分类管理列表</h3>	
  	<div class="ed_sort">
		<form id="myform" enctype="multipart/form-data">
		<table class="edit_tab">
			<tr><td>汽车品牌：</td><td><input type="text" id="sname" name="name" /><input type="hidden" name="hid" id="hid" value="0"/></td></tr>
			<tr><td>汽车标志：</td>
				<td>
					<input type="file" id="car_photo" name="photo" />
					<input type="hidden" name="old_photo" class="old_photo">
				</td>
				<td><img  width="80" height="80" class="car_ico"></td></tr>
			<tr><td>排序：</td><td><input type="number" id="order" name="ord" /></td>
				<td><input type="button" id="btn" value="保存" />&nbsp;<input type="reset" id="reset" value="返回" /></td></tr>
		</table>
		</form>
  	</div>
    <table class="table table-hover sort_tab">
    <thead>
	  <tr><th>ID</th><th>汽车品牌</th><th>汽车标志</th><th>排序</th><th>操作</th></tr>
	  </thead>
	  <tbody>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort_list']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
		  <tr <?php if ($_smarty_tpl->tpl_vars['i']->value['ord'] < 0) {?>  class="sdel" <?php }?>>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
		  	<td class="sort"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
	  		<td><img src="/upload/car_sort/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
?<?php echo rand(1,999);?>
" height="64" width="64"></td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['ord'];?>
</td>
		  	<td>
		  		<a href="javascript:void(0)" edit-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
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
<?php echo '<script'; ?>
 type="text/javascript">
/*头像上传预览*/
$("#car_photo").change(function(){
    $(".car_ico").css("display", "block");
	var objUrl = getObjectURL(this.files[0]) ;
	//console.log("objUrl = "+objUrl) ;
	if (objUrl) {
		$(".car_ico").attr("src", objUrl) ;
	}
})
//建立一個可存取到該file的url
function getObjectURL(file) {
	var url = null ;
	if (window.createObjectURL!=undefined) { // basic
		url = window.createObjectURL(file) ;
	} else if (window.URL!=undefined) { // mozilla(firefox)
		url = window.URL.createObjectURL(file) ;
	} else if (window.webkitURL!=undefined) { // webkit or chrome
		url = window.webkitURL.createObjectURL(file) ;
	}
	return url ;
}

//保存
$('#btn').click(function(){
    var sname=$('#sname').val();
    var ord=$('#order').val();
    var hid=$('#hid').val();
    var old_photo = $('.old_photo').val();
	//console.log(sname, ord, hid, old_photo)
    if(sname==''){
        alert('请输入分类名称！');
        return false;
    }
    $("#myform").ajaxSubmit({
        url:"sort_post.php",
        type:"POST",
        success:function(data){
            //document.write(data);
            //alert(data)
            if(data==1){
                $.get('sort.php',function(data){
                    $('#admin_show').html(data);
                });
            }else{
                //alert('增加失败！');
                return false;
            }
        },
        error:function(msg){
            alert("error:"+msg);
        }
    });
	if(hid > 0){
        $.post('sort_post.php',{hid:hid,name:sname,ord:ord, old_photo: old_photo},function(data){
            //document.write(data);
            if(data==1){
                $.get('sort.php',function(data){
                    $('#admin_show').html(data);
                });
            }
        });
	}

});

	
//编辑
$('.edit').click(function(){
    $(".car_ico").css("display", "block");
	var ed_id=$(this).attr('edit-id');
	$.get('sort_post.php',{ed_id:ed_id},function(data){	
		var data=eval('('+data+')');
		$('#sname').val(data.name);
		$('#order').val(data.ord);
		$('#hid').val(data.id);
		$(".old_photo").val(data.photo);
		$(".car_ico").attr("src", "/upload/car_sort/" + data.photo + '?' +Math.random());
	})
});

//删除
$('.del').click(function () {	 
	var del_id=$(this).attr('del-id');
	$.get('sort_post.php',{del_id:del_id},function(data){	
		if(data==1){
			$.get('sort.php',function(data){
				$('#admin_show').html(data);
			});
		}
	});  
});

//返回
$("#reset").click(function () {
    $.get('sort.php',function(data){
        $('#admin_show').html(data);
    });
})

<?php echo '</script'; ?>
><?php }
}
