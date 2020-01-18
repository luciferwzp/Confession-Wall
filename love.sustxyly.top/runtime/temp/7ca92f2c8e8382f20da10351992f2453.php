<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"/www/wwwroot/love.sustxyly.top/public/../application/admin/view/index/welcome.html";i:1562480760;}*/ ?>
<!--
 * @Description: 
 * @version: 2.0
 * @Author: 小橙子
 * @Date: 2019-05-16 14:31:30
 * @Website: https://www.kres.cn
 * @Email: 1697779290@qq.com
 -->
<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>WelcomePage. By the Kres Lw2.0.19-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="/static/css/font.css">
        <link rel="stylesheet" href="/static/css/xadmin.css">
        <script src="/static/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body ">
                            <blockquote class="layui-elem-quote">欢迎管理员：
                                <span class="x-red"><?php echo $data['user_name']; ?></span>！当前时间:<?php echo $data['dateTime']; ?>
                            </blockquote>
                            <blockquote class="layui-elem-quote">
                                <span class="x-red">温馨提示：</span>首次使用请配置发信邮箱 \extend\PHPMailer\SendEmail.php
                            </blockquote>
                            <blockquote class="layui-elem-quote">
                                <span class="x-red">温馨提示：</span>当前版本LoveWall2.0.190707,持续更新,遇到bug或有什么建议可<a href="https://pro.kres.cn/form/index/bugSubmit"><span class="x-red">点此提交</span></a>
                            </blockquote>
                            <blockquote class="layui-elem-quote">
                                <span class="x-red">温馨提示：</span>最新版本本站为保障站点安全暂不做在线更新！新版本请关注 <a target="_blank" href="http://www.521wall.cn">LoveWall</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">数据统计</div>
                        <div class="layui-card-body ">
                            <ul class="layui-row layui-col-space10 layui-this x-admin-carousel x-admin-backlog">
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>文章</h3>
                                        <p>
                                            <cite><?php echo $data['postNum']; ?></cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>会员</h3>
                                        <p>
                                            <cite><?php echo $data['userNum']; ?></cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>回复</h3>
                                        <p>
                                            <cite><?php echo $data['commNum']; ?></cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>校区</h3>
                                        <p>
                                            <cite><?php echo $data['schoolNum']; ?></cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>公告</h3>
                                        <p>
                                            <cite><?php echo $data['noticeNum']; ?></cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6 ">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>弹幕</h3>
                                        <p>
                                            <cite><?php echo $data['barragerNum']; ?></cite></p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">系统信息</div>
                        <div class="layui-card-body ">
                            <table class="layui-table">
                                <tbody>
                                    <tr>
                                        <th>LoveWall Version</th>
                                        <td>2.0.190520</td></tr>
                                    <tr>
                                        <th>服务器地址</th>
                                        <td><?php echo \think\Request::instance()->server('SERVER_NAME'); ?></td></tr>
                                    <tr>
                                        <th>操作语言</th>
                                        <td><?php echo \think\Request::instance()->server('HTTP_ACCEPT_LANGUAGE'); ?></td></tr>
                                    <tr>
                                        <th>服务器端口</th>
                                        <td><?php echo \think\Request::instance()->server('SERVER_PORT'); ?></td></tr>
                                    <tr>
                                        <th>PHP版本</th>
                                        <td><?php echo PHP_VERSION; ?></td></tr>
                                    <tr>
                                        <th>ThinkPHP</th>
                                        <td><?php echo THINK_VERSION; ?></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">开发团队</div>
                        <div class="layui-card-body ">
                            <table class="layui-table">
                                <tbody>
                                    <tr>
                                        <th>版权所有</th>
                                        <td>xuebingsi(xuebingsi)
                                            <a href="http://x.xuebingsi.com/" target="_blank">访问官网</a>
                                        </td>
                                        <td>Ncnet
                                            <a href="https://www.kres.cn/" target="_blank">访问官网</a>
                                        </td>
                                        <td>Catni
                                            <a href="https://www.catni.cn/" target="_blank">访问官网</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>开发者</th>
                                        <td>楠橙网(admin@jishuzy.com)</td><td>猫腻(wy-hai@qq.com)</td><td>久念(44299640@qq.com)</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <style id="welcome_style"></style>
                <div class="layui-col-md12">
                    <blockquote class="layui-elem-quote layui-quote-nm">感谢layui,百度Echarts,jquery,本系统由x-admin提供技术支持并采用ThinkPHP开源框架支持！</blockquote></div>
            </div>
        </div>
        </div>
        <script>
            layui.use('layer',function(){
                layer=layui.layer;
                var newVersionStatus="<?php echo $data['newVersion']['status']; ?>";
                var newVersionStatusInfo="<?php echo $data['newVersion']['info']; ?>";
                if (newVersionStatus=="1") {
                    var notice_tpis=layer.confirm(newVersionStatusInfo, {
                        title:'版本更新提示'
						,btn: ['前往官网','取消'] //按钮
						}, function(){
                            window.location.href="https://www.521wall.cn";
							layer.close(notice_tpis);
						}, function(){
							//取消
							layer.close(notice_tpis);
					});
                }
            })
        </script>
    </body>
</html>