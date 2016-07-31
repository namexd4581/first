<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>南昌市中小学活动中心</title>
<link rel="stylesheet" type="text/css" href="/Web/Public/Home/images/style.css">
</head>


<body>
<div class="top"></div>
<div id="link">
        	<ul>
            	<li><a href="<?php echo U('Index/index');?>"> 首页 </a> </li>
                <li class="line"> | </li>
                <li><a href="<?php echo U('Zxjs/index');?>">中心介绍</a></li>
                <li class="line"> | </li>
                <li><a href="<?php echo U('Jypx/index');?>">教育培训</a></li>
                <li class="line"> | </li>
                <li><a href="<?php echo U('Hdkx/index');?>">活动快线</a></li>
                <li class="line"> | </li>
                <li><a href="<?php echo U('Xszp/index');?>">学生作品</a></li>
                <li class="line"> | </li>
                <li><a href="<?php echo U('Ryzs/index');?>">荣誉展示</a></li>
                <li class="line"> | </li>
                <li><a href="<?php echo U('Hdzs/index');?>">活动展示</a></li>
                <li class="line"> | </li>
                <li><a href="<?php echo U('Jzfk/index');?>">家长反馈</a></li>
                <li class="line"> | </li>
                <li><a href="<?php echo U('Esjz/index');?>">二十九中</a></li>
                <li class="line"> | </li>
            </ul>
           <div><span><a href="<?php echo U('Admin/Public/login');?>">管理员登陆</a></span></div> 
</div>


<div class="link_1">
   <div class="picBox">
      <div class="picBox_img"><img src="/Web/Public/Home/images/tp.png"></div>
      <div class="picBox_font">
          <div class="picBox_font_menu"><span>中心动态</span><a href="">更多</a></div>
           <ul>
           <?php if(is_array($center)): $i = 0; $__LIST__ = $center;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#"><?php echo ($vo["content"]); ?></a><span><?php echo ($vo["create_time"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
              <!--  <li><a href="#">罗阳小学开展“我们与梦想同行”主题教 </a><span>[2012-04-04]</span></li>
              <li><a href="#">赣榆县金山中学举行2013中考誓师大</a><span>[2012-04-04]</span></li>
              <li><a href="#">灌南县花园小学：举行“拒吸第一支烟 </a><span>[2012-04-04]</span></li>
              <li><a href="#">和平路小学：“和谐互助”英语课改实验</a><span>[2012-04-04]</span></li>
              <li><a href="#">海头二小端午假期开展“啄木鸟行动”规</a><span>[2012-04-04]</span></li>
              <li><a href="#">赣榆清华园双语学校：多方协助做好学生</a><span>[2012-04-04]</span></li>-->
           </ul> 
      </div>
   </div>
   <div class="gongg">
       <div class="gongg_top"><img src="/Web/Public/Home/images/icon.png">活动公告</div>
          <marquee onMouseOver="this.stop()"  onmouseout="this.start()" height="190px"scrollamount="2"  direction="up">
          <ul>
          <?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#"><?php echo ($vo["title"]); ?></a></li>
             <!--  <li><a href="#">省儿基会代表处募捐倡议书</a></li>
             <li><a href="#">关于在全市开展关爱儿童慈善公益募捐活动的通知凝聚每份爱，温暖颗颗心</a></li>
             <li><a href="#">省儿基会代表处募捐倡议书</a></li>--><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul></marquee>
   </div>
</div>

 <div class="classroom">
    <div class="classroom_menu"><div class="classroom_img"><img src="/Web/Public/Home/images/icon0.png">学生作品</div></div>
    <div class="classroom_left">
        <div class="classroom_left_font">
        <img src="/Web/Public/Home/images/xx.png">
        <div class="classroom_left_wx">
            <span>作文写作</span><a href="">更多>> </a>
            <div class="classroom_left_wx_a">
                 <ul>
                 <?php if(is_array($write)): $i = 0; $__LIST__ = $write;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="classroom_left">
        <div class="classroom_left_font">
        <img src="/Web/Public/Home/images/xxs.png">
        <div class="classroom_left_wx">
            <span>美术音乐</span><a href="">更多>> </a>
            <div class="classroom_left_wx_a">
                 <ul>
                    <?php if(is_array($artic)): $i = 0; $__LIST__ = $artic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href=""><?php echo (msubstr($vo["title"],0,17,'utf-8',false)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 </ul>
            </div>
        </div>
        </div>
    </div>    
    <div class="classroom_left_r">
        <div class="classroom_left_font">
        <img src="/Web/Public/Home/images/zxs.png">
        <div class="classroom_left_wx">
            <span>动手实践</span><a href="">更多>> </a>
            <div class="classroom_left_wx_a">
                 <ul>
                    <?php if(is_array($practice)): $i = 0; $__LIST__ = $practice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href=""><?php echo (msubstr($vo["title"],0,17,'utf-8',false)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 </ul>
            </div>
        </div>
        </div>
    </div>    
</div>

<!---->
<div class="jyal">
    <div class="jyal_menu"><div class="jyal_img"><img src="/Web/Public/Home/images/icon0.png">教育培训</div></div>
    <div class="jyal_font">
        <div class="jyal_font_menu"><span>分校教育</span><a href="">更多>> </a></div>
        <div class="jyal_font_menu_a">
            <ul>
                     <?php if(is_array($differ)): $i = 0; $__LIST__ = $differ;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    
   <div class="jyal_font">
        <div class="jyal_font_menu"><span>家庭教育</span><a href="">更多>> </a></div>
        <div class="jyal_font_menu_a">
            <ul>
                    <?php if(is_array($family)): $i = 0; $__LIST__ = $family;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href=""><?php echo (msubstr($vo["title"],0,17,'utf-8',false)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>    
    
    <div class="jyal_font">
        <div class="jyal_font_menu"><span>其它</span><a href="">更多>> </a></div>
        <div class="jyal_font_menu_a">
            <ul>
                    <?php if(is_array($other)): $i = 0; $__LIST__ = $other;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>    
    
    
</div>
<!---->
<div class="jyal">
    <div class="jyal_menu"><div class="jyal_img"><img src="/Web/Public/Home/images/icon0.png">活动展示</div></div>
   <table>
   <tr>
   <td>
   <a href=""><img src="/Web/Public/Home/images/huodong1.png"></a>
   </td>
    <td>
   <a href=""><img src="/Web/Public/Home/images/huodong2.png"></a>
  </td>
    <td>
   <a href=""><img src="/Web/Public/Home/images/huodong3.png"></a>
  </td>
    <td>
   <a href=""><img src="/Web/Public/Home/images/huodong4.png"></a>
   </td>
   </tr>
   </table>
</div>
<!---->
<div class="work">
   <div class="work_menu"><div class="work_img"><img src="/Web/Public/Home/images/icon0.png">荣誉展示</div></div>
   <div class="fxlj_a">
   <table>
   <tr>
   <td><a href=""><img src="/Web/Public/Home/images/ry.png"></a>
   </td>
    <td>
   <a href=""><img src="/Web/Public/Home/images/ry1.png"></a>
  </td>
    <td>
   <a href=""><img src="/Web/Public/Home/images/ry2.png"></a>
  </td>
   <td>
   <a href=""><img src="/Web/Public/Home/images/ry3.png"></a>
   </td>
   </tr>
   </table>
   
   
   </div>
</div>
<!---->
<div class="fxlj">
   <div class="fxlj_menu"><div class="fxlj_img"><img src="/Web/Public/Home/images/icon0.png">相关链接</div></div>
   <div class="fxlj_a">
       <ul>
          <li><a href="">太仓市教师发展中心</a></li>
          <li><a href="">太仓市青少年活动中心</a></li>
          <li><a href="">江苏省太仓市中等专业学校</a></li>
          <li><a href="">江苏省沙溪高级中学</a></li>
          <li><a href="">太仓市明德高级中学</a></li>
          <li><a href="">太仓市新区中学</a></li>
          <li><a href="">太仓市教师发展中心</a></li>
          <li><a href="">太仓市青少年活动中心</a></li>
          <li><a href="">江苏省太仓市中等专业学校</a></li>
          <li><a href="">江苏省沙溪高级中学</a></li>
          <li><a href="">太仓市明德高级中学</a></li>
          <li><a href="">太仓市新区中学</a></li>
          <li><a href="">太仓市教师发展中心</a></li>
          <li><a href="">太仓市青少年活动中心</a></li>
          <li><a href="">江苏省太仓市中等专业学校</a></li>
          <li><a href="">江苏省沙溪高级中学</a></li>
          <li><a href="">太仓市明德高级中学</a></li>
          <li><a href="">太仓市新区中学</a></li>
       </ul>
   </div>
</div>
<!---->
<!---->
<div class="bot">
   版权所有：太仓市教育局苏ICP备05026727号<br>
   技术支持：太仓市教师发展中心信息处  网站投稿信箱：tcsxxb@szedu.com<br>
   Copyright@http://www.tcedu.com.cn all rights reserved
</div>
</body>
</html>