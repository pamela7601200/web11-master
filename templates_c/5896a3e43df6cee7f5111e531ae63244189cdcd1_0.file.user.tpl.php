<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-19 09:46:19
  from 'D:\ugm\xampp\htdocs\web11\templates\tpl\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4cf5db7242b8_17272874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5896a3e43df6cee7f5111e531ae63244189cdcd1' => 
    array (
      0 => 'D:\\ugm\\xampp\\htdocs\\web11\\templates\\tpl\\user.tpl',
      1 => 1582101969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4cf5db7242b8_17272874 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == "op_list") {?>
    <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
        <tr>
            <th scope="col">帳號</th>
            <th scope="col">姓名</th>
            <th scope="col">電話</th>
            <th scope="col">EMAIL</th>
            <th scope="col">狀態</th>
            <th scope="col">功能</th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['uname'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['row']->value['kind']) {?><i class="fas fa-user-check"></i><?php }?></td>
                    <td>
                        <a href="user.php?op=op_form&uid=<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><i class="far fa-edit"></i></a>
                    </td>
                </tr>
            <?php
}
} else {
?>
                <tr>
                    <td colspan=6>目前沒有資料</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['op']->value == "op_form") {?>
    
    <div class="container">
        <h1 class="text-center">會員表單</h1>
        
        <form action="user.php" method="post" id="myForm" class="mb-2" enctype="multipart/form-data">
        
            <div class="row">         
                <!--帳號-->              
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>帳號<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="uname" id="uname" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uname'];?>
" readonly>
                    </div>
                </div>         
                <!--密碼-->              
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>密碼</label>
                    <input type="text" class="form-control" name="pass" id="pass" value="">
                    </div>
                </div>
                <!-- 會員狀態  -->
                <div class="col-sm-4">
                    <div class="form-group">
                    <label style="display:block;">會員狀態</label>
                    <input type="radio" name="kind" id="kind_1" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['kind'] == '1') {?>checked<?php }?>>
                    <label for="kind_1" style="display:inline;">管理員</label>&nbsp;&nbsp;
                    <input type="radio" name="kind" id="kind_0" value="0" <?php if ($_smarty_tpl->tpl_vars['row']->value['kind'] == '0') {?>checked<?php }?>>
                    <label for="kind_0" style="display:inline;">會員</label>
                    </div>
                </div>  

                <!--姓名-->              
                <div class="col-sm-6">
                    <div class="form-group">
                    <label>姓名<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
                    </div>
                </div>         
                <!--電話-->              
                <div class="col-sm-6">
                    <div class="form-group">
                    <label>電話<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="tel" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
">
                    </div>
                </div>             
                <!--信箱-->              
                <div class="col-sm-12">
                    <div class="form-group">
                    <label>信箱<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
">
                    </div>
                </div> 
            </div>

            <div class="text-center pb-20">
            <input type="hidden" name="op" value="op_update">
            <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
">
            <button type="submit" class="btn btn-primary">送出</button>
            </div>
        
        </form>
        <!-- 表單驗證 -->
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
        <!-- 調用方法 -->
        <style>
            .error{
            color:red;
            }
        </style>
        <?php echo '<script'; ?>
>
            $(function(){

            });
            $(function(){
            $("#myForm").validate({
                submitHandler: function(form) {
                    form.submit();
                },
                rules: {
                    'uname' : {
                        required: true
                    },
                    'name' : {
                        required: true
                    },
                    'tel' : {
                        required: true
                    },
                    'email' : {
                        required: true,
                        email:true
                    }
                },
                messages: {
                    'uname' : {
                        required: "必填"
                    },
                    'name' : {
                        required: "必填"
                    },
                    'tel' : {
                        required: "必填"
                    },
                    'email' : {
                        required: "必填",
                        email: "請填正確email"
                    }

                }
            });

            });
        <?php echo '</script'; ?>
>
        
    </div>

<?php }
}
}
