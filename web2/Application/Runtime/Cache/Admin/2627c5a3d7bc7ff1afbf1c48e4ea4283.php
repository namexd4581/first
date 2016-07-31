<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>后台管理系统</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/Web2/Public/Admin/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/Web2/Public/Admin/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/Web2/Public/Admin/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/Web2/Public/Admin/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <strong>南昌市中小学活动中心</strong> <small>后台管理系统</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-cog"></span> 修改密码</a></li>
          <li><a href="<?php echo U('Public/logout') ;?>"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
<!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list am-pagination" >
        <li><a href="<?php echo U('Index/index',array('type0'=>'首页','type1'=>'中心动态')) ;?>"><span class="am-icon-home"></span>中心动态</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 学生作品 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in am-pagination" id="collapse-nav">

						<li><a href="<?php echo U('Index/index',array('type0'=>'学生作品','type1'=>'作文写作')) ;?>"><span
								class="am-icon-tag"></span> 作文写作</a></li>
						<li><a href="<?php echo U('Index/index',array('type0'=>'学生作品','type1'=>'美术音乐')) ;?>"><span
								class="am-icon-tag"></span> 美术音乐</a></li>
						<li><a href="<?php echo U('Index/index',array('type0'=>'学生作品','type1'=>'动手实践')) ;?>"><span
								class="am-icon-tag"></span> 动手实践</a></li>
					</ul>
        </li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}"><span class="am-icon-university"></span> 教育培训 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in am-pagination" id="collapse-nav1">

						<li><a href="<?php echo U('Index/index',array('type0'=>'教育培训','type1'=>'分校教育')) ;?>"><span
								class="am-icon-puzzle-piece"></span> 分校教育</a></li>
						<li><a href="<?php echo U('Index/index',array('type0'=>'教育培训','type1'=>'家庭教育')) ;?>"><span
								class="am-icon-puzzle-piece"></span> 家庭教育</a></li>
						<li><a href="<?php echo U('Index/index',array('type0'=>'教育培训','type1'=>'其他')) ;?>"><span
								class="am-icon-puzzle-piece"></span>其他</a></li>
					</ul>
        </li>
        <li><a href="<?php echo U('Show/index',array('type0'=>'首页','type1'=>'活动展示')) ;?>"><span class="am-icon-table"></span> 活动展示</a></li>
        <li><a href="<?php echo U('Show/index',array('type0'=>'首页','type1'=>'荣誉展示')) ;?>"><span class="am-icon-pencil-square-o"></span> 荣誉展示</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 当前系统时间</p>
          <p><?php echo date('Y-m-d H:i:s',time());?></p>
          
        </div>
      </div>

    </div>
  </div>
  <!-- sidebar end -->
 <!-- content start -->
  <div class="admin-content">


<div class="am-tab-panel am-fade am-active am-in" id="">
	<form class="am-form" method="post" action="/Web2/index.php/Admin/Show/insert">
	<input type="hidden" name="type0" value="<?php echo ($type['type0']); ?>">
	<input type="hidden" name="type1" value="<?php echo ($type['type1']); ?>">
		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">文章标题</div>
			<div class="am-u-sm-8 am-u-md-4">
				<input type="text" class="am-input-sm" name="title">
			</div>
			<div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">文章作者</div>
			<div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
				<input type="text" class="am-input-sm" name="author">
			</div>
		</div>


		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">选择图片</div>
			<div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
				<input type="file" class="am-input-sm" name="image">
			</div>
		</div>

		<div class="am-g am-margin-top-sm">
			<div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
				内容描述</div>
			<div class="am-u-sm-12 am-u-md-10">
				<textarea name="content"  cols="45" rows="10"></textarea>
			</div>
		</div>
		<div class="am-margin">
			<input type="submit" class="am-btn am-btn-primary am-btn-xs" value="提交保存">
		</div>
	</form>
</div>

 <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
    </footer>
  </div>
  <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Web2/Public/Admin/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Web2/Public/Admin/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/Web2/Public/Admin/js/amazeui.min.js"></script>
<script src="/Web2/Public/Admin/js/app.js"></script>
</body>
</html>