<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"W:\lovewall\public/../application/index\view\index\comment.html";i:1558745520;}*/ ?>
<!--
 * @Description: 
 * @version: 2.0
 * @Author: 小橙子
 * @Date: 2019-05-16 14:31:30
 * @Website: https://www.kres.cn
 * @Email: 1697779290@qq.com
 -->
<!DOCTYPE html>
<html>
<head>
<title>
  <?php switch($postdata['mous']): case "1": ?>一位不署名发帖<?php break; default: ?><?php echo $postdata['name']; ?> 的帖子
  <?php endswitch; ?>
  
  </title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link rel="shortcut icon" href="/static/favicon.ico"/>
  <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
      <link rel="stylesheet" href="/static/css/app.css" type="text/css" />
      <link rel="stylesheet" href="/static/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/static/css/app.css" type="text/css" />
    <link rel="stylesheet" href="/static/css/font.css" type="text/css" />
  <link href="/static/css/i.css" rel="stylesheet"/>
  <link rel="stylesheet" href="/static/css/barrager.css">
  <link rel="stylesheet" href="/static/css/share.min.css">
  <link rel="stylesheet" href="/static/layui/css/layui.css">
  <meta content="yes" name="apple-mobile-web-app-capable">
<style>
        .comment-filed{
        margin:0 auto;
    }
    
    .comment-num{
        text-align: right;  
        font-size:14px;
    }
    .div-txt-submit{
        text-align:right;
        margin-top:8px;
    
    }
    
    .comment-submit{
        background-color:#63B8FF;
        margin-top:15px;
        text-decoration:none;
        color:#fff;
        padding:5px;
        font-size:14px;
    }
    
    .txt-commit{
        border:1px solid blue;
        width:620px;
        height: 60px; 
        padding: 10px;
    }
    
    .txt-reply{
        width: 100%; 
        height: 60px;
    }
    .comment-filed-list{
        margin-top:20px;
    }
    
    .comment-list{
        margin-top:2px;
        width:herit;
        height:50px;
        border-top:1px solid gray;
    }
    
    .comment-ul{
        list-style:none;
        padding-left:0;
    }
    
    .head-pic{
        width:40px;
        height:40px;    
    }
    
    .cm{
        position:relative;
        top:0px;
        left:40px;
        top:-40px;
    }
    
    .cm-header{
        padding-left:5px;
    }
    
    .cm-content{
        padding-left:5px;
    }
    
    .cm-footer{
        padding-bottom:15px;
        text-align:right;
        border-bottom: 1px dotted #CCC;
        margin-right: 40px;
        margin-top: -35px;
    }
    
    .comment-reply{
        text-decoration:none;
        color:gray;
        font-size: 14px;
    }
    
    .children{
        list-style:none;
        background-color:#FAFAFA;
        padding-left:0;
        margin-left:40px;
        margin-top: -35px;
    }
    
    .children-cm{
        position:relative;  
        left:40px;
        top:-40px;
        width:90%;
    }
    #text{
        font-size: 18px;
        margin-top: 5px;
        padding-top: 10px;
        color: darksalmon;
    }
    #contenttime{
        margin-top: -15px;
        font-size: 15px;
    }
    .content{
        background:#E0F8F7;
        border-radius: 500px;
        height: 70px;
    }
    .comment-content{
        width: 100%;
    }
    .comment-pages{
        margin-top: 20px;
        background: #fff;
        box-shadow: 0 0 8px rgba(0, 0, 0, .1);
        padding: 20px;
        border-radius: 4px;
        margin-bottom: 50px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .nickname{
        float: left;
    }
    </style>
    </head>
    <body>
<div id="header">
	<div class="header">
		<div class="heart">
		</div>
      <div class="header-weather" style="float:right;position: initial;margin-top: -240PX;margin-right: 10px">
			<div id="temp1" style="float: right;font-size: 18px ;margin-right: -0px;color: white; margin-top: -102px" >loding...</div>
			<img id="weather-ico" style="width: 30px;float: right;" src="" alt="">
		</div>
		<div class="beat beat-1">
		</div>
		<div class="beat beat-2">
		</div>
	</div>
	<!-- 一言 -->
	<center>
	<p id="hitokoto" style="padding:10px">
		:D 获取中...
	</p>
	</center>
	<script src="https://api.kres.cn/hitokoto?encode=js" defer=""></script>
	<!-- 一言Ending -->
	<div class="menu">
		<div class="container">
			<nav>
				<a href="/" class="active">首页</a>
				<a href="<?php echo url('index/openschool'); ?>" class="">开通</a>
				<a href="<?php echo url('index/serachInfo'); ?>" class="">搜索</a>
				<a href="<?php echo url('index/about'); ?>" class="">关于</a>
				</nav>
		</div>
	</div>
</div>
<div id="content">
        <div class="container">
            <div class="pages">
    <div >
                </div>
                <div class="cont-body">
                    <div class="cont-body-cont" style="background-color: #FF99CC;">
                        <div class="index-list-imgdiv">
                            <img  src="
                            <?php switch($postdata['mous']): case "0": ?>//q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $postdata['qq']; ?>&amp;s=100<?php break; default: ?>/static/img/mous.jpg
                        <?php endswitch; ?>" class="index-list-img">
                        </div>
                        <div class="index-list-content">
                            <p class="index-list-content-p"><?php echo $postdata['text']; ?></p>
                        </div>
                        <div class="index-list-foot">
                            <span><?php echo date("Y-m-d H:i:s",$postdata['date']); ?></span>
                            <a href="#srtext"><span class="foot-right glyphicon glyphicon-comment"></span></a>
                            <a href="javascript:;" class="dza" rel="71" onclick="dianzan()"><span id="dzspan" class="foot-right glyphicon glyphicon-thumbs-up" style="color: #018EE8;"></span></a>
                        </div>
                    </div>
                    <div id="share" style="margin: 5px;"><img onclick="javascript:history.go(-1)" src="/static/img/back.png" style="float: left;width: 25px" alt="返回"></div>
                    <br/>
                    <div class="index-comm-send">
                        <label style="float:left;color: white;">发炎区</label>
                        <br />
                        <hr style="background-color: #F596AA;height:1px;border:none;">
                        <div class="comment-filed">
                            <div class="comment-num">
                                <span style="color:white;"><?php echo $num; ?>条评论</span>
                            </div>
                            <textarea class="txt-commit" style="border-radius:5px"></textarea>
                            <input type="hidden" id="postid" value="<?php echo $post_id; ?>">
                            <div class="div-txt-submit">
            
                                <a class="comment-submit" parent_id="0" style="border-radius: 500px;" onclick="submit()"><span>biu~</span></a>
                            </div>      
                        </div>
                    </div>
                </div>
                
                
                <div class="comment">
                    <table class="comment-table">
                        <?php if($num == '0'): ?>
                            <tr><td><p style="text-align: center;color: white">你的机会来了~</p></td></tr>
                        <?php else: ?>
                            <tbody><tr>
                                    <?php if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comm_data): $mod = ($i % 2 );++$i;?>
                                <td class="comment-img" rowspan="2">
                                    <img src="<?php echo $comm_data['head_pic']; ?>">
                                </td>
                                <td class="comment-time"><span style="color:#fff"><?php echo $comm_data['create_time']; ?></span><br><span style="color:white;"><?php echo $comm_data['nickname']; ?>&nbsp;：</span></td>
                            </tr>
                            <tr>
                                <td class="comment-cont">
                                    <p  style="	margin-top: -5px;"><?php echo $comm_data['content']; ?></p>
                                    <p><hr class="comment-hr" style="background-color: #e87794;height:1px;border:none;"></p>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                        <?php endif; ?>
                    </table>
                </div>
                </div>      
            </div> 
            <br>   
        <div class="copyright container">
            &copy; 2019 
            <a href="/"><?php echo $data['system']['name']; ?></a>&nbsp;&nbsp;
            <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $data['system']['icp']; ?></a>
        </div>
    </div>
    <script src="/static/js/jquery.min.js"></script> 
    <script src="/static/js/jquery.share.min.js"></script> 
    <script src="/static/js/jquery.barrager.js"></script>
    <script src="/static/layui/layui.js"></script>
    <script>
        console.log(`%c Info:`, `color: #03A9F4; font-weight: bold`, '欢迎来到这个页面！首先感谢您信任我们并使用我们的程序，遇到BUG可提交至下方邮箱，谢谢您的配合！');
        console.log(`%c Site:`, `color: #03A9F4; font-weight: bold`, 'https://support.kres.cn Or https://521wall.cn');
        console.log(`%c Email:`, `color: #4CAF50; font-weight: bold`, 'support@kres.cn Or wy-hai@qq.com');
        $('#share').share({sites: ['qzone', 'qq', 'weibo','wechat']});
        layui.use('layer', function(){
            var layer = layui.layer;
        }); 
        function sendBarrager(){
            var info=$('input[name=title]').val();
            var qq=$('input[name=qq]').val();
            var patrn=/^[1-9]\d{4,10}$/;
            var post_id=$('#postid').val();
            var color=$('#color-value').val();
            if (info==''||qq=='') {
                layer.msg('请填写完整');
                return false;
            }
            if(!patrn.exec(qq)){
                layer.msg('请输入正确的qq号');
                $('input[name=qq]').val('');
                $('input[name=qq]').focus();
                return false;
            }
            layer.msg('发送中', {
                icon: 16
                ,shade: 0.01
            });
    
        $.ajax({
            url:"<?php echo url('school/sendbar'); ?>"
            ,type:'POST'
            ,dataType:'JSON'
            ,data:{post_id:post_id,info:info,qq:qq,color:color}
            ,success:function(res){
                if (res.code==1) {
                    layer.msg(res.info,function(){
                        layer.closeAll();
                    });
                }else{
                    layer.msg('发送失败，请重试');
                }
            }
            ,error:function(){
                layer.msg('网络错误');
            }
        })
        }  
        layui.use('util', function(){
            var util = layui.util;
            var htmldoc="<div style='padding:10px;'>"
            +"<input type='text' name='title' required  placeholder='请输入内容' autocomplete='off' class='layui-input'><br/>"
            +"<input type='text' name='qq' required  placeholder='请输入QQ' autocomplete='off' class='layui-input'><br/>"
            +"<input type='text' value='' placeholder='请选择颜色' class='layui-input' id='color-value' disabled ><br/>"
            +"<div id='color-select'></div>"
            +"<button class='layui-btn' style='background:#F4A7B9;float:right;margin-bottom:10px;' onclick='sendBarrager();'>立即提交</button><br/><br/></div>";
            util.fixbar({
                bar1: true
                ,bgcolor:'#F4A7B9'
                ,click: function(type){
                console.log(type);
                if(type === 'bar1'){
                    layer.open({
                        type: 1,
                        closeBtn: 1, //不显示关闭按钮
                        title:'发送弹幕',
                        anim: 2,
                        shadeClose: true, //开启遮罩关闭
                        content: htmldoc
                        });
                    }
                    layui.use('colorpicker', function(){
                    var $ = layui.$
                    ,colorpicker = layui.colorpicker;
                    //常规使用
                    //表单赋值
                    colorpicker.render({
                        elem: '#color-select'
                        ,color: '#1c97f5'
                        ,done: function(color){
                        $('#color-value').val(color);
                        }
                    });
                });
                }
            });
        });
        
        var looper_time=3*1000;
        var run_once=true;
        var post_id=$('#postid').val();
        do_barrager();
        function do_barrager(){
          if(run_once){
              looper=setInterval(do_barrager,looper_time);                
              run_once=false;
          }
          $.getJSON("<?php echo url('school/getbarrager'); ?>"+"?id="+post_id,function(data){
              if(data.info){
                $('body').barrager(data);
              }
          });
        }               
      $.ajax({
        type: 'GET',
        url: 'https://www.tianqiapi.com/api/',
        data: 'version=v1&style=1001&city=',
        dataType: 'JSON',
        error: function () {
            layer.msg('网络错误');
        },
        success: function (res) {
            uptime = res.update_time.substring(11);
            uptime = uptime.substring(0,uptime.length-3);
            $("#temp1").html(res.data[0].tem);
            $('#weather-ico').attr('src','/static/img/'+res.data[0].wea_img+".png");
        }
    });
        function submit(){
            var post_id=$('#postid').val();
            var content=$('.txt-commit').val();
              if(content==""){
                layer.msg("来说点什么吧~",{icon:3});
                  return false;
            }
            layer.msg('发送中...', {
              icon: 16
              ,shade: 0.01
            });
            $.ajax({
                url:"<?php echo url('index/addComment'); ?>",
                type:'POST',
                dataType:'json',
                data:{content:content,post_id:post_id,comment:"1"},
                success:function(data){
                    if(data.code=="1"){
                        layer.msg(data.msg,{icon:1,time:1000},function(index){
                            location=location;
                        });
                    }else{
                        layer.msg(data.msg);
                    }
                },
            })
    
        }
    </script>
    </body>
    </html>