<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"W:\lovewall\public/../application/admin\view\index\content_add.html";i:1557988290;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>ContentAdd Page. By the LoveWall 2.0.190520</title>
  <link rel="stylesheet" href="/static/layui/css/layui.css">
</head>
<body style="padding:10px">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>添加信息</legend>
      </fieldset>   
      <form class="layui-form" action="">
        <div class="layui-form-item">
          <label class="layui-form-label">名字</label>
          <div class="layui-input-block">
            <input type="text" name="name" required  lay-verify="required" placeholder="请输入你的名字" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">QQ</label>
            <div class="layui-input-block">
              <input type="text" name="qq" required  lay-verify="number" placeholder="输入你的qq号" autocomplete="off" class="layui-input">
            </div>
          </div>
        <div class="layui-form-item">
          <label class="layui-form-label">选择校区</label>
          <div class="layui-input-block">
            <select name="zid" lay-verify="required">
              <?php foreach($data['school']['list'] as $vo): ?>
              <option value="<?php echo $vo['zid']; ?>"><?php echo $vo['web_name']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">匿名</label>
            <div class="layui-input-block">
              <input type="radio" name="mous" value="1" title="匿名">
              <input type="radio" name="mous" value="0" title="不匿" checked>
            </div>
          </div>
        <div class="layui-form-item">
          <label class="layui-form-label">性别</label>
          <div class="layui-input-block">
            <input type="radio" name="sex" value="1" title="汉纸">
            <input type="radio" name="sex" value="0" title="妹纸" checked>
            <input type="radio" name="sex" value="2" title="未知">
          </div>
        </div>
        <div class="layui-form-item layui-form-text">
          <label class="layui-form-label">内容</label>
          <div class="layui-input-block">
            <textarea name="text" placeholder="请输入内容" class="layui-textarea"></textarea>
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
          url:''
          ,type:'POST'
          ,dataType:'JSON'
          ,data:{data:JSON.stringify(data.field)}
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