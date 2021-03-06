<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\quanyi\public/../application/admin\view\index\index.html";i:1545724329;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
           惠权益
        </title>
        <!-- <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="./css/x-admin.css" media="all"> -->
        <link rel="stylesheet" type="text/css" href="/static/admin/css/x-admin.css" />
    </head>
    <body>
        <div class="layui-layout layui-layout-admin">
            <div class="layui-header header header-demo">
                <div class="layui-main">
                    <a class="logo" href="./index.html">
                        惠权益
                    </a>
                    <ul class="layui-nav" lay-filter="">
                      <li class="layui-nav-item"><img src="/static/admin/images/logo.png" class="layui-circle" style="border: 2px solid #A9B7B7;" width="35px" alt=""></li>
                      <li class="layui-nav-item">
                        <a href="javascript:;"><?php echo $name; ?></a>
                        <dl class="layui-nav-child"> <!-- 二级菜单 -->
                          <dd><a href="/admin/login/login">退出</a></dd>
                        </dl>
                      </li>
                      <li class="layui-nav-item">
                        <a href="" title="消息">
                            <i class="layui-icon" style="top: 1px;">&#xe63a;</i>
                        </a>
                        </li>
                      <li class="layui-nav-item"><a href="/">前台首页</a></li>
                    </ul>
                </div>
            </div>
            <div class="layui-side layui-bg-black">
                <div class="layui-side-scroll">
                    <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">

                        <?php if($role=='超级管理员'): ?>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe607;</i><cite>问题管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="./question-list.html">
                                            <cite>问题列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="./question-del.html">
                                            <cite>删除问题</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <?php endif; ?>

                        
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe62d;</i><cite>产品管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('goods/goods'); ?>">
                                            <cite>产品列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="./welcome.html">
                                            <cite>品牌管理（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="./welcome.html">
                                            <cite>类型管理（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="./welcome.html">
                                            <cite>类型属性（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="">
                                            <cite>产品分类</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>

                        <?php if($role=='超级管理员'): ?>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe634;</i><cite>轮播管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('banner/banner'); ?>">
                                            <cite>轮播列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <?php endif; ?>

                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe642;</i><cite>订单管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="./welcome.html">
                                            <cite>订单列表（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>

                        <?php if($role=='超级管理员'): ?>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>分类管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('Category/category'); ?>">
                                        <cite>分类列表</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <?php endif; ?>

                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe606;</i><cite>评论管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="./comment-list.html">
                                        <cite>评论列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./feedback-list.html">
                                        <cite>意见反馈</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe605;</i><cite>账号安全管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="./comment-list.html">
                                        <cite>密码修改</cite>
                                    </a>
                                </dd>
                                <?php if($role!='超级管理员'): ?>
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('adminlist/grlist'); ?>">
                                        <cite>个人资料</cite>
                                    </a>
                                </dd>
                                <?php endif; ?>
                            </dl>
                        </li>

                        <?php if($role=='超级管理员'): ?>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe612;</i><cite>会员管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="member-list.html">
                                        <cite>会员列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./member-del.html">
                                        <cite>删除会员</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./member-level.html">
                                        <cite>等级管理</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./member-kiss.html">
                                        <cite>积分管理</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./member-view.html">
                                        <cite>浏览记录</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./member-view.html">
                                        <cite>分享记录</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>

                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe613;</i><cite>管理员管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('adminlist/adminlist'); ?>">
                                        <cite>管理员列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('adminlist/adminrole'); ?>">
                                        <cite>角色管理</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('adminlist/admincate'); ?>">
                                        <cite>权限分类</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('adminlist/adminrule'); ?>">
                                        <cite>权限管理</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>

                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe629;</i><cite>系统统计</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts1.html">
                                        <cite>拆线图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts2.html">
                                        <cite>柱状图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts3.html">
                                        <cite>地图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts4.html">
                                        <cite>饼图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts5.html">
                                        <cite>雷达图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts6.html">
                                        <cite>k线图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts7.html">
                                        <cite>热力图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts8.html">
                                        <cite>仪表图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="http://echarts.baidu.com/examples.html" target="_blank" _href="./welcome.html">
                                        <cite>更多案例</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe614;</i><cite>系统设置</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-set.html">
                                        <cite>系统设置</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-data.html">
                                        <cite>数字字典</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-shield.html">
                                        <cite>屏蔽词</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-log.html">
                                        <cite>系统日志</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-link.html">
                                        <cite>友情链接</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-qq.html">
                                        <cite>第三方登录</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>

                        <?php endif; ?>
                        <li class="layui-nav-item" style="height: 30px; text-align: center">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="layui-tab layui-tab-card site-demo-title" lay-filter="x-tab" lay-allowclose="true">
                <ul class="layui-tab-title">
                    <li class="layui-this">
                        我的桌面
                        <i class="layui-icon layui-unselect layui-tab-close">ဆ</i>
                    </li>
                </ul>
                <div class="layui-tab-content site-demo site-demo-body">
                    <div class="layui-tab-item layui-show">
                        <iframe frameborder="0" src="/admin/welcome/welcome" class="x-iframe"></iframe>
                    </div>
                </div>
            </div>
            <div class="site-tree-mobile layui-hide">
                <i class="layui-icon">
                    &#xe602;
                </i>
            </div>
            <div class="site-mobile-shade">
            </div>
        </div>
        <!-- <script src="./lib/layui/layui.js" charset="utf-8"></script> -->
        <script type="text/javascript" src="/static/admin/lib/layui/layui.js"></script><script type="text/javascript" src="/static/admin/js/x-admin.js"></script>
        <!-- <script src="./js/x-admin.js"></script> -->
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