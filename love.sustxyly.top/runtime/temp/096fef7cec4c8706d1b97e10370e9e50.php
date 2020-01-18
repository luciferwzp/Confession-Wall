<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"W:\lovewall\public/../application/admin\view\index\user_add.html";i:1558145003;}*/ ?>
<!--
 * @Description: 
 * @version: 2.0
 * @Author: 小橙子
 * @Date: 2019-05-18 09:52:42
 * @Website: https://www.kres.cn
 * @Email: 1697779290@qq.com
 -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>UserAdd Page. By the LoveWall 2.0.190520</title>
  <link rel="stylesheet" href="/static/layui/css/layui.css">
</head>
<body style="padding:10px">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>添加信息</legend>
      </fieldset>   
      <form class="layui-form" action="">
        <div class="layui-form-item">
          <label class="layui-form-label">账号</label>
          <div class="layui-input-block">
            <input type="text" name="username" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
              <input type="password" name="password" required  lay-verify="required" placeholder="输入你的密码" autocomplete="off" class="layui-input">
            </div>
          </div>
          <div class="layui-form-item">
                <label class="layui-form-label">Email</label>
                <div class="layui-input-block">
                  <input type="text" name="email" required  lay-verify="email" placeholder="请输入邮箱" autocomplete="off" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                    <label class="layui-form-label">QQ</label>
                    <div class="layui-input-block">
                      <input type="text" name="qq" required  lay-verify="number" placeholder="请输入qq" autocomplete="off" class="layui-input">
                    </div>
                  </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="subData">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
          </div>
        </div>
      </form>
 
<!-- 你的HTML代码 -->
 <script src="/static/js/jquery.min.js"></script>
<script src="/static/layui/layui.js"></script>
<script>
//一般直接写在一个js文件中
layui.use(['layer', 'form'], function(){
  var layer = layui.layer
  ,form = layui.form;
  var index = parent.layer.getFrameIndex(window.name);
  form.on('submit(subData)',function(data){
      $.ajax({
          url:"<?php echo url('index/userOption'); ?>"
          ,type:'POST'
          ,dataType:'JSON'
          ,data:{func:'add',data:JSON.stringify(data.field)}
          ,success:function(res){
              if (res.code==1) {
                  layer.msg(res.info,{icon:1},function(){
                    parent.layer.close(index);
                  });
                  
              } else {
                  layer.msg(res.info);
              }
          }
      })
    // $.post('','data:'+JSON.stringify(data.field),function(res){
    //     if (res.code==1) {
    //         layer.msg(res.info);
    //     }
    // })
      return false;
  })
  
  //layer.msg('Hello World');
});
</script> 
</body>
</html>