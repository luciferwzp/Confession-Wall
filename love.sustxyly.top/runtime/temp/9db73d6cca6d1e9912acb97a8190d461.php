<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"W:\lovewall\public/../application/admin\view\index\noticeAdd.html";i:1557988290;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>layedit demo</title>
	<link href="/static/layui/css/layui.css" rel="stylesheet" />
    <script src="/static/layui/layui.js"></script>
    <script src="/static/js/jquery.min.js"></script>
</head>
<body style="padding:10px;">
        <form class="layui-form">
            <div class="layui-form-item">
                <textarea id="noticeAddBox"></textarea>
            </div>
            <div class="layui-form-item">
            <div class="layui-input-block" style="float:right;">
                <button class="layui-btn" lay-submit lay-filter="noticeAdd" style="background:skyblue;">立即提交</button>
            </div>
            </div>
            <div class="layui-form-item">
                <div id='returndt' class="rtdt"></div>
            </div>
        </form>
    
        <script>
            layui.use(['layedit','form'], function(){
                var layedit = layui.layedit
                ,form = layui.form
                ,jquery=layui.jquery;
                var edit=layedit.build('noticeAddBox'); //建立编辑器
                form.on('submit(noticeAdd)', function(data){
                    //layer.msg(layedit.getContent(edit));
                    $.ajax({
                        url:"<?php echo url('index/noticeAjaxAdd'); ?>"
                        ,type:'POST'
                        ,dataType:'JSON'
                        ,data:{func:'add',content:layedit.getContent(edit)}
                        ,success:function(res){
                            if(res.code==1){
                                layer.msg(res.info,{icon:1,time:1000});
                            }else{
                                layer.msg(res.info,{icon:1,time:1000});
                            }
                        }
                    })
                    return false;
                });
            });
        </script>
    </body>
</html>