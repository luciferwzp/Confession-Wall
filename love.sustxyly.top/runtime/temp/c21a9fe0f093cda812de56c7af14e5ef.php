<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"W:\lovewall\public/../application/admin\view\index\school_examine.html";i:1558165739;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>SchoolExamine Page. Lw2.0-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="/static/css/font.css">
        <link rel="stylesheet" href="/static/css/xadmin.css">
        <script src="/static/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/js/xadmin.js"></script>
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="">首页</a>
            <a href="">分区</a>
            <a>
              <cite>校区审核</cite></a>
          </span>
          <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
        </div>
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
          
                        <div class="layui-card-body ">
                            <table class="layui-table layui-form">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>标题</th>
                                    <th>邮箱</th>
                                    <th>时间</th>
                                    <th>理由</th>
                                    <th>状态</th>
                                    <th>操作</th></tr>
                                </thead>
                                <?php foreach($data['list'] as $vo): ?>
                                <tbody>
                                  <tr>
                                    <td><?php echo $vo['id']; ?></td>
                                    <td id="zid"><?php echo $vo['web_name']; ?></td>
                                    <td><?php echo $vo['email']; ?></td>
                                    <td><?php echo $vo['addtime']; ?></td>
                                    <td><?php echo $vo['reason']; ?></td>
                                    <td class="td-status">
                                      <span class="layui-btn layui-btn-mini <?php switch($vo['status']): case "1": ?>layui-btn-normal<?php break; case "2": ?>layui-btn-danger<?php break; default: ?>layui-btn-warm<?php endswitch; ?>"><?php switch($vo['status']): case "1": ?>已通过<?php break; case "2": ?>已驳回<?php break; default: ?>待审核<?php endswitch; ?></span></td>
                                    <td class="td-manage">
                                      <a onclick="xadmin.open('详单','<?php echo url('index/examineInfo'); ?>?id=<?php echo $vo['id']; ?>')" href="javascript:;"  title="查看">
                                        <i class="layui-icon" style="font-size:20px">&#xe615;</i>
                                      </a>
                                      <a title="删除" onclick="member_del(this,'<?php echo $vo['id']; ?>}')" href="javascript:;">
                                        <i class="layui-icon" style="font-size:20px">&#xe640;</i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                                <?php endforeach; ?>
                            </table> 
                        </div>
                        <div class="layui-card-body ">
                            <div class="page">
                                <div>
   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
    <script>
      layui.use(['laydate','form'], function(){
        var laydate = layui.laydate;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });
      });

       

      /*用户-删除*/
      function member_del(obj,id){
          layer.confirm('确认要删除吗？',function(index){
              //发异步删除数据
              $.ajax({
                url:"<?php echo url('index/examineResult'); ?>"
                ,data:{func:'del',id:id}
                ,type:'post'
                ,dataType:'json'
                ,success:function(res){
                  if (res.code==1) {
                    $(obj).parents("tr").remove();
                    layer.msg(res.info,{icon:1,time:1000});
                  } else {
                    layer.msg(res.info);
                  }
                }
                ,error:function(){
                  layer.msg('网络错误！');
                }
              })
          });
      }

    </script>
</html>