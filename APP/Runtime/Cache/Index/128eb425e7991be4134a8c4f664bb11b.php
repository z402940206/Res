<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Single</title>
<link href="__ROOT__/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="__ROOT__/Public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="__ROOT__/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gardening Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="__ROOT__/Public/js/move-top.js"></script>
<script type="text/javascript" src="__ROOT__/Public/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
	});
</script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="about-header-banner">
		<div class="container">
			<div class="home">
					<a href="index.html"><span class="glyphicon glyphicon-home"></span></a>
			</div>
			<div class="header-top">
				<div class="social-icons">
					<i class="facebook"></i>
					<i class="twitter"></i>
					<i class="googlepluse"></i>
				</div>
				<span class="menu"><img src="__ROOT__/Public/images/nav.png" alt=""/></span>
				<div class="top-menu">
					<ul>
					<nav class="cl-effect-13">
						<li><a href="<?php echo U("Index/About",'','');?>">关于</a></li>
						<li><a href="<?php echo U("Index/Gallery",'','');?>">图集</a></li>
						<li><a class="active" href="<?php echo U("Index/Index#news",'','');?>">新闻</a></li>
						<li><a href="<?php echo U("Index/Contact",'','');?>">联系我们</a></li>
					</nav>
					</ul>
				</div>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( ".top-menu ul" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="banner-info text-center">
				<h1><a href="<?php echo U("Index/Index",'','');?>" onclick="location.reload()">nature</a></h1>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
 <div class="main">
    <!--single-page-->
	<div class="single-page">
		<div class="container">
			<div class="col-md-8 single-page-left">

					<div class="single-page-info">
					<img src="<?php echo ($selectC["pic_path"]); ?>" alt=""/>
					<h5><?php echo ($selectC[title]); ?></h5>
					<p><?php echo ($selectC["moreContent"]); ?></p>  
					<div class="comment-icons">
						<ul>
							<li><span class="glyphicon glyphicon-calendar"></span><?php echo ($selectC["time"]); ?></li>
							<li><span class="glyphicon glyphicon-user"></span> <a href="#">Admin</a></li>
							<li><span class="glyphicon glyphicon-send"></span> <a href="#">5 comments</a></li>
							<li><span class="glyphicon glyphicon-thumbs-up"></span><a href="#">15</a></li>
						</ul>
					</div>
				</div>	

			
				<div class="admin-text">
					<h5>作者：匿名</h5>
					<div class="admin-text-left">
						<a href="#"><img src="__ROOT__/Public/images/icon1.png" alt=""/></a>
					</div>
					<div class="admin-text-right">
						<p>撒可见度付好款撒娇的发和了撒可就的发阿数控刀具付好款撒了就的发和阿数控刀具发挥
						啊看时间东方红啊数控刀具发挥啊速度反馈机会啊中散大夫客家话啊速度反馈机会.</p>
						<span>出自:<a href="#"> 匿名 </a></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--related-posts-->
				<div class="row related-posts">
					<h4>最新新闻</h4>
					<?php if(is_array($news)): foreach($news as $key=>$v): ?><div class="col-xs-6 col-md-3 related-grids">
						<a href="Single?tid=<?php echo ($v["id"]); ?>" class="thumbnail">
							<img src="<?php echo ($v["pic_path"]); ?>" alt=""/>
						</a>
						<h5><a href="Single?tid=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></h5>
					</div><?php endforeach; endif; ?>
				</div>
				<!--//related-posts-->
				<div class="response" id="liuyan">
					<h4>评论</h4>
					
					<?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="media response-info">
							<div class="media-left response-text-left">
									<img class="media-object" src="__ROOT__/Public/images/icon1.png" alt=""/>
								<h5>Admin</h5>
							</div>
							<div class="media-body response-text-right">
								<p><?php echo ($v["content"]); ?></p>
								<ul>
									<li><?php echo ($v["time"]); ?></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div><?php endforeach; endif; ?>
					<tr>
						<td colspan="6"><?php echo ($page); ?></td>
					</tr>
					
				</div>	
				<div class="coment-form">
					<h4>留言</h4>
					<form action="<?php echo U('Index/Single/handle');?>">
						<textarea type="text" name="LYcontent"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '你的留言...';}" required="">你的留言...</textarea>
						<input type="submit" id="sendMessage" value="提交留言" >
						<input type="hidden" name="tid" value="<?php echo ($selectC["id"]); ?>" />
					</form>
				</div>		
			</div>	
			<div class="col-md-4 single-page-right">
				<div class="category">
					<h4>目录</h4>
					<div class="list-group">
					<?php if(is_array($news)): $i = 0; $__LIST__ = array_slice($news,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="Single?tid=<?php echo ($vo["id"]); ?>" class="list-group-item"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>	

				<div class="comments">
					<h4>最新留言</h4>
					<?php if(is_array($message)): foreach($message as $key=>$v): ?><div class="comments-info">
						<div class="cmnt-icon-left">
							<img src="__ROOT__/Public/images/icon1.png" alt=""/>
						</div>
						<div class="cmnt-icon-right">
							<p><?php echo ($v["time"]); ?></p>
							<p>匿名</p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt"><?php echo ($v["content"]); ?></p>
					</div><?php endforeach; endif; ?>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
<!--//single-page-->

 </div>
	<!-- content-section-ends -->
	
	<!-- footer-section -->
	<div class="footer">
		<div class="container">
			<div class="copyright text-center">
				<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			</div>
		</div>
	</div>
	<!-- footer-section -->
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
</body>
</html>