<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"/www/wwwroot/love.sustxyly.top/public/../application/admin/view/index/school_add.html";i:1558745208;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>欢迎页面-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="/static/css/font.css">
        <link rel="stylesheet" href="/static/css/xadmin.css">
        <script type="text/javascript" src="/static/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]--></head>
    
    <body>
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form">
                        <div class="layui-form-item">
                    <label for="L_title" class="layui-form-label">
                        <span class="x-red">*</span>名称</label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_title" name="web_name" lay-verify="title" required="" autocomplete="off" class="layui-input" ></div>
                    <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>网站页面名称</div></div>
                    <!--  -->
                    <div class="layui-form-item">
                        <label for="L_admin" class="layui-form-label">
                            <span class="x-red">*</span>管理员</label>
                        <div class="layui-input-inline">
                            <input type="text" id="L_adminAccount" name="web_qq" required="" autocomplete="off" class="layui-input" ></div>
                        <div class="layui-form-mid layui-word-aux">
                            <span class="x-red">*</span>二级站点管理员账户
                        </div>
                    </div>
                    <div class="layui-form-item">
                            <label for="L_title" class="layui-form-label">
                                <span class="x-red">*</span>网站简介</label>
                            <div class="layui-input-inline">
                                <input type="text" id="L_title" name="web_description" lay-verify="title" required="" autocomplete="off" class="layui-input" ></div>
                            <div class="layui-form-mid layui-word-aux">
                                <span class="x-red">*</span>网站卡片名称</div></div>
                    <div class="layui-form-item">
                        <!-- <div class="layui-input-inline">
                            <button type="button" class="layui-btn" id="test1">
                                <i class="layui-icon">&#xe67c;</i>上传图片
                            </button>
                        </div> -->
                    </div>
                    <div class="layui-form-item">
                        <label for="L_logo" class="layui-form-label">
                            <span class="x-red">*</span>logo</label>
                        <div class="layui-input-inline">
                            <input type="text" id="L_logo" name="web_logo" lay-verify="title" required="" autocomplete="off" class="layui-input" disabled>
                        </div>
                        <button type="button" class="layui-btn" id="test1">
                            <i class="layui-icon">&#xe67c;</i>LOGO
                        </button>  
                    </div>  
                    <div class="layui-form-item">
                        <label for="L_repass" class="layui-form-label"></label>
                        <button class="layui-btn" lay-filter="save" lay-submit="">更新</button></div>
                </form>
            </div>
        </div>
        <script>
                layui.use('upload', function(){
                  var upload = layui.upload;
                  //执行实例
                  var uploadInst = upload.render({
                    elem: '#test1' //绑定元素
                    ,field:'smfile'
                    ,url: "https://sm.ms/api/upload" //上传接口
                    ,before: function(obj){ //obj参数包含的信息，跟 choose回调完全一致，可参见上文。
                        layer.msg('上传中',{icon:16}); //上传loading
                    }
                    ,done: function(res){
                      //上传完毕回调
                      layer.closeAll();
                      $('input[name=web_logo]').val(res.data.url);
                    }
                    ,error: function(){
                      //请求异常回调
                    }
                  });
                });
        </script>
        <script>layui.use(['form', 'layer'],
            function() {
                $ = layui.jquery;
                var form = layui.form,
                layer = layui.layer;

                //自定义验证规则
                form.verify({
                    title: function(value) {
                        if (value.length < 3) {
                            return '至少得3个字符啊';
                        }
                    },
                    pass: [/(.+){6,12}$/, '密码必须6到12位'],
                    repass: function(value) {
                        if ($('#L_pass').val() != $('#L_repass').val()) {
                            return '两次密码不一致';
                        }
                    }
                });

                //监听提交
                form.on('submit(save)',
                function(data) {
                    //console.log(data);
                    //发异步，把数据提交给php

                    $.ajax({
                        url:"schoolOption"
                        ,type:'post'
                        ,data:{func:'add',data:JSON.stringify(data.field)}
                        ,dataType:'json'
                        ,success:function(res){
                            if(res.code==1){
                                layer.alert(res.info, {
                                    icon: 6
                                },
                                function() {
                                    // 获得frame索引
                                    var index = parent.layer.getFrameIndex(window.name);
                                    //关闭当前frame
                                    parent.layer.close(index);
                                });
                            }else{
                                layer.msg(res.info)
                            }
                        }
                        ,error:function(){
                            layer.msg('网络错误');
                        }
                    })
                    return false;
                });

            });</script>
    </body>

</html>