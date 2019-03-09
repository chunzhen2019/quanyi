<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpStudy\WWW\quanyi\public/../application/admin\view\category\category.html";i:1545723302;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            X-admin v1.0
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <!-- <link rel="stylesheet" href="../include/css/x-admin.css" media="all"> -->
        <link rel="stylesheet" type="text/css" href="/static/admin/css/x-admin.css" /><link rel="stylesheet" type="text/css" href="/static/admin/bootstrap/css/bootstrap.min.css" />
        <script type="text/javascript" src="/static/admin/lib/layui/layui.js"></script><script type="text/javascript" src="/static/admin/js/x-layui.js"></script><script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
    </head>
    <body>

        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>分类管理</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center" style="width:50%" action="/admin/typefind/typefind" method="post">

                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                  <div class="layui-input-inline" style="width:140px ;">
                        <input type="text" name="name"  placeholder="商品名" autocomplete="off" class="layui-input" id="find1">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn layui-btn-warm"  lay-submit="" lay-filter="sreach" onclick="find()"><i class="layui-icon">&#xe615;</i>搜索</button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock>
                <button class="layui-btn" onclick="cate_add('添加分类','/admin/cateadd/cateadd','451','350')"><i class="layui-icon">&#xe608;</i>添加主分类</button>
                <span class="x-right" style="line-height:40px">共有数据：<?php echo $num; ?> 条</span>
            </xblock>
            <table class="layui-table">
                <thead>

                    <tr>
                        <th>
                            <!-- <input type='checkbox' value='1' name=''> -->
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            分类名
                        </th>
                        <th>
                            排序
                        </th>
                        <th>
                            商品路径
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="x-link">
                <?php if($name): ?>
                {foreach $typeres as $vv}
                    <tr>
                        <td>
                            <input type='checkbox' value='1' name=''>
                        </td>
                        <td><?php echo $vv['id']; ?></td>
                        <td><?php echo $vv['name']; ?></td>
                        <td><?php echo $vv['pid']; ?></td>
                        <td><?php echo $vv['path']; ?></td>
                            <td class='td-manage'>
                                    <a title='添加' href='javascript:;' onclick="cate_edit('添加','/admin/scateadd/scateadd?id=<?php echo $vv['id']; ?>','4','451','350')" class='ml-5' style='text-decoration:none'>
                                        <i class='layui-icon'>&#xe608;</i>
                                    </a>
                                    <a title='编辑'' href='javascript:;' onclick=" cate_edit('编辑','/admin/cateedit/cateedit?id=<?php echo $vv['id']; ?>','4','451','350')"
                                    class='ml-5' style='text-decoration:none'>
                                        <i class='layui-icon'>&#xe642;</i>
                                    </a>
                                    <a title='删除' href='javascript:;' onclick="cate_del('<?php echo $vv['id']; ?>','<?php echo $vv['pid']; ?>')" 
                                    style='text-decoration:none'>
                                        <i class='layui-icon'>&#xe640;</i>
                                    </a>
                                </td>
                            </tr>

            <?php else: foreach($arr as $v): ?>
                    <tr>
                        <td>
                            <!-- <input type='checkbox' value='1' name=''> -->
                        </td>
                            <td><?php echo $v['id']; ?></td>
                        <?php if($v['pid']==0): ?>
                        <td><?php echo $v['name']; ?></td>
                        <?php else: ?>
                        <td><img src="/typepic/<?php echo $v['picname']; ?>" height="25px">&nbsp;&nbsp;<?php echo $v['name']; ?></td>
                        <?php endif; ?>
                        <td><?php echo $v['pid']; ?></td>
                        <td><?php echo $v['path']; ?></td>
                            <td class='td-manage'>
                                    <a title='添加' href='javascript:;' onclick="cate_edit('添加','/admin/scateadd/scateadd?id=<?php echo $v['id']; ?>','4','451','350')" class='ml-5' style='text-decoration:none'>
                                        <i class='layui-icon'>&#xe608;</i>
                                    </a>
                                    <a title='编辑'' href='javascript:;' onclick=" cate_edit('编辑','/admin/cateedit/cateedit?id=<?php echo $v['id']; ?>','4','451','350')"
                                    class='ml-5' style='text-decoration:none'>
                                        <i class='layui-icon'>&#xe642;</i>
                                    </a>
                                    <a title='删除' href='javascript:;' onclick="cate_del('<?php echo $v['id']; ?>','<?php echo $v['pid']; ?>')" 
                                    style='text-decoration:none'>
                                        <i class='layui-icon'>&#xe640;</i>
                                    </a>
                                </td>
                            </tr>
                    <?php endforeach; endif; ?>        
                </tbody>
            </table>
            <?php echo $arr->render(); ?>
            <div id="page">
            
            </div>
        </div>
        <!-- <script src="../include/lib/layui/layui.js" charset="utf-8"></script>
        <script src="../include/js/x-layui.js" charset="utf-8"></script> -->
        
        <script>
            layui.use(['element','layer','form'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              layer = layui.layer;//弹出层
              form = layui.form();

              // //监听提交
              // form.on('submit(add)', function(data){
              //   console.log(data);
              //   //发异步，把数据提交给php
              //   layer.alert("增加成功", {icon: 6});
              //   $('#x-link').prepend('<tr><td><input type="checkbox"value="1"name=""></td><td>1</td><td>1</td><td>'+data.field.name+'</td><td class="td-manage"><a title="编辑"href="javascript:;"onclick="cate_edit(\'编辑\',\'cate-edit.html\',\'4\',\'\',\'510\')"class="ml-5"style="text-decoration:none"><i class="layui-icon">&#xe642;</i></ a><a title="删除"href="javascript:;"onclick="cate_del(this,\'1\')"style="text-decoration:none"><i class="layui-icon">&#xe640;</i></ a></td></tr>');
              //   return false;
              // });

            })




            function cate_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }
              
            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }

             //-编辑
            function cate_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
           
            /*-删除*/
            function cate_del(id,pid){

                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    // window.location="action.php?a=del&id="+id;\
                    // alert(pid);
                    $.ajax({
                        type:'post',
                        url:'/admin/cateadd/del',
                        data:{'id':id,'pid':pid},
                        success:function(data){
                            if(data==1){
                                layer.msg('已删除!',{icon:1,time:1000});
                            }else if(data==0){
                                layer.msg('该类别下有子类无法删除!',{icon:2,time:1000});
                            }
                        }
                    })
                    
                });
            }
            </script>
            <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>
</html>