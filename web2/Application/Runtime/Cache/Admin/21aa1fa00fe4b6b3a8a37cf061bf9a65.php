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


<div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg"><?php echo ($data[0]['type0']); ?></strong> / <small><?php echo ($data[0]['type1']); ?></small></div>
      </div>
      <hr>
      <!--  location.href='<?php echo U('add_show',array('type1'=>$data[0]['type1']));?>';return false;-->
<div class="am-g">
	<div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default" 
              onclick="location.href='<?php echo U('add_show',array('type0'=>$data[0]['type0'],'type1'=>$data[0]['type1']));?>';return false;">
              <span class="am-icon-plus"></span> 新增</button>
             <!--   <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>-->
            </div>
          </div>
        </div>
</div>
<div class="am-g">
        <div class="am-u-sm-12">
		<form class="am-form" >
			<table class="am-table am-table-striped am-table-hover table-main">
				<thead>
					<tr>
						<th class="table-id">ID</th>
						<th class="table-title">标题</th>
						<th class="table-title">图片</th>
						<th class="table-type">内容</th>
						<th class="table-author am-hide-sm-only">作者</th>
						<th class="table-date am-hide-sm-only">修改日期</th>
						<th class="table-set">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vo["id"]); ?></td>
						<td><?php echo ($vo["title"]); ?></td>
						<td><img width="50px" height="50px" src="/Web2/Public/Home/<?php echo ($vo["image"]); ?>"></td>
						<td><?php echo ($vo["content"]); ?></td>
						<td class="am-hide-sm-only"><?php echo ($vo["author"]); ?></td>
						<td class="am-hide-sm-only"><?php echo ($vo["create_time"]); ?></td>
						<td>
							<div class="am-btn-toolbar">
								<div class="am-btn-group am-btn-group-xs">
									<button
										class="am-btn am-btn-default am-btn-xs am-text-secondary"
										onclick="location.href='<?php echo U('edit_show',array('id'=>$vo['id']));?>';return false;">
										<span class="am-icon-pencil-square-o"></span> 编辑
									</button>
									<button
										class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"
										onclick="location.href='<?php echo U('delete',array('id'=>$vo['id']));?>';return false;">
										<span class="am-icon-trash-o"></span> 删除
									</button>
								</div>
							</div>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			<div class="pagelist"><?php echo ($page); ?></div>
			<hr>
		</form>
	</div>
<style>

.pagelist{ text-align:right; background:#ffffff; padding:7px 0;}
.pagelist a{ margin:0 5px; border:#d4d4d4 solid 1px; display:inline-block; padding:4px 12px 10px; line-height:20px; background:#fff; color:#0e91d2;}
.pagelist span{ margin:0 5px; border:#d4d4d4 solid 1px; display:inline-block; padding:4px 12px 10px; line-height:20px; color:#0e91d2; color:#fff; background:#0e91d2;}
</style>
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