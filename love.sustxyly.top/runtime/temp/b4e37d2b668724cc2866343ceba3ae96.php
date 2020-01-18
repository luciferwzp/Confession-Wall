<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"/www/wwwroot/love.sustxyly.top/public/../application/index/view/index/about.html";i:1571726707;s:68:"/www/wwwroot/love.sustxyly.top/application/index/view/comm/head.html";i:1571727119;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $data['system']['title']; ?></title>
    <meta charset="utf-8"/>
    <meta name="description" content="<?php echo $data['system']['description']; ?>"/>
    <meta name="keywords" content="<?php echo $data['system']['keywords']; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href="/static/favicon.ico"/>	
    <link rel="stylesheet" href="/static/layui/css/layui.css"/>
    <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/css/app.css" type="text/css" />
    <link href="/static/css/i.css" rel="stylesheet"/>
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/static/layui/layui.js"></script>
    <script src="https://cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
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
		:D 获取中···
	</p>
	</center>
	<script src="https://api.kres.cn/hitokoto?encode=js" defer=""></script>
	<!-- 一言Ending -->
	<div class="menu">
		<div class="container">
			<nav>
			<a href="/" class="">首页</a>
      <a href="<?php echo url('index/openschool'); ?>" class="">开通</a>
      <a href="<?php echo url('index/serachInfo'); ?>" class="">搜索</a>
      <a href="<?php echo url('index/about'); ?>" class="active">关于</a>
			</nav>
		</div>
	</div>
</div>

<div id="content">
<div style="padding:10px"></div>
    <div style="padding: 20px; background-color: #F2F2F2;">
        <div class="layui-row layui-col-space15">
      <div class="layui-card">
          <div class="layui-card-header">写在前面</div>
          <div class="layui-card-body">
            <?php echo $data['about']; ?>
          </div>
        </div>
        <div class="layui-card">
            <div class="layui-card-header">作者留言</div>
            <div class="layui-card-body">
              <ul class="layui-timeline">
                  <li class="layui-timeline-item">
                      <i class="layui-icon layui-timeline-axis"></i>
                      <div class="layui-timeline-content layui-text">
                        <h3 class="layui-timeline-title">5月20日</h3>
                        <p>
                          LoveWall 2.0 版本
                        </p>
                      </div>
                    </li>
                </ul>  
                 
            </div>
          </div>
          </div>
          
  </div>
 <br>
<script>
        console.log(`%c Info:`, `color: #03A9F4; font-weight: bold`, '欢迎来到这个页面！首先感谢您信任我们并使用我们的程序，遇到BUG可提交至下方邮箱，谢谢您的配合！');
        console.log(`%c Email:`, `color: #4CAF50; font-weight: bold`, '1114183435@qq.com');
layui.use('element', function(){
  var element = layui.element;
  
  //…
});
</script>
  <br/>
	<div class="copyright container">
		&copy; <?php echo date("Y",\think\Request::instance()->time()); ?> 
		<a href="/"><?php echo $data['system']['name']; ?></a>&nbsp;&nbsp;
    <a href="http://beian.miit.gov.cn" target="_blank"><?php echo $data['system']['icp']; ?></a>
    &nbsp;<?php echo $data['system']['cnzz']; ?>
	</div>
</div>
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="//pv.sohu.com/cityjson?ie=utf-8"></script>
<script>
	$.ajax({
		type: 'GET',
		url: 'https://www.tianqiapi.com/api/',
		data: 'version=v1&style=1001&city=',
		dataType: 'JSON',
		error: function () {
			alert('网络错误');
		},
		success: function (res) {
			uptime = res.update_time.substring(11);
			uptime = uptime.substring(0,uptime.length-3);
			$("#temp1").html(res.data[0].tem);
			$('#weather-ico').attr('src','/static/img/'+res.data[0].wea_img+".png");
		}
	});
	var ismobile="<?php echo $data['ismobile']; ?>";
	if(ismobile==0){
    	(()=>{let 
        h=42;
        let d=(n)=>Math.floor(Math.random()*n);
        let k=(c)=>{let s=document.createElement('style');
        if(!!(window.attachEvent && !window.opera)){
            s.styleSheet.cssText=c;
        }else{
            s.appendChild(document.createTextNode(c));
        }
        document.getElementsByTagName('head')[0].appendChild(s);
    };
    k('@keyframes u{0%{transform:rotate(0deg);}25%{transform:rotate(10deg);}50%{transform:rotate(0deg);}75%{transform:rotate(-10deg);}100%{transform:rotate(0deg);}};');
    k('@keyframes m{0%{margin-top:2vh;opacity:0;}20%{opacity:1.0;margin-top:0vh;margin-left:0vw;transform:rotate('+d(90)+'deg);}100%{opacity:0.4;margin-top:100vh;margin-left:'+d(4)+'vw;transform:rotate(1080deg);}};');
    let w=document.createElement('div');
    w.id='daWorld';
    w.style='animation:u 60s ease-in infinite;position:fixed;top:0;right:0;bottom:0;left:0;pointer-events:none;';
    document.body.appendChild(w);
    while(h--){
        let o=document.createElement('div');
        o.style=`pointer-events:none;opacity:0;animation:m ${d(14)+6}s ease-in ${d(4000)}ms infinite;z-index:1000;position:fixed;top:${d(40)}vh;left:${d(100)}vw;font-size:${d(40)+20}px;color:${['#d00','#e66','#fcc'][d(3)]};`;
        o.innerHTML=['♡','♥'][d(2)];w.appendChild(o);
        }})()
    }
</script>
</body>
</html>