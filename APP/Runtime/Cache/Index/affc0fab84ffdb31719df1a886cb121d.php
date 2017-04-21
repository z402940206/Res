<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
<script type="text/javascript" src="__ROOT__/Public/js/index.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});

		var handleUrl='<?php echo U("Index/Index/handle",'','');?>';
</script>
<style type="text/css">
#send {
	display: block;
	width: 120px;
	height: 65px;
	cursor: pointer;
	float: right;
	background: url(/design/Public/Images/send-btn.png) no-repeat;
}
#send-form {
	width: 360px;
	height: 400px;
	background: #fff;
	display: none;
	position: absolute;
	z-index: 999;
}
#send-form form p {
	width: 340px;
	height: auto;
	overflow: hidden;
	padding: 10px;
}
#send-form form p label {
	display: block;
	width: 340px;
	height: 24px;
	line-height: 24px;
	color: #888888;
}
#font-num {
	font-family :'Constantia,Georgia';
	font-size: 18px;
	font-style: italic;
	font-weight: bold;
	color: #444444;
}
#send-form input{
	border: 1px solid #ccc;
	border-radius: 4px;
	width: 180px;
	height: 24px;
	padding: 5px;
}
#send-form textarea{
	background: #fff;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: none;
	padding: 5px;
	width: 300px;
	height: 80px;
}
textarea:focus,
input[type="text"]:focus{
    border-color: rgba(82, 168, 236, 0.8);
    outline: 0;
    outline: thin dotted \9;
    /* IE6-9 */
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
    -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
}
#send-form .title {
	width: 360px;
	height: 56px;
	background: url(/design/Public/Images/1.jpg) repeat-x;
}
#send-form .title span {
	display: block;
	width: 260px;
	height: 56px;
	line-height: 56px;
	color: #666666;
    font-size: 18px;
    font-weight: bold;
    text-indent: 6em;
    float: left;
}
#send-form .title a {
	display: block;
	width: 29px;
	height: 24px;
	background: url(/design/Public/Images/close.png) no-repeat;
	float: right;
	margin-top: 16px;
	margin-right: 10px;
}
#send-form .title a:hover {
	background-position: -43px 0;
}
#send-btn {
	display: block;
	width: 120px;
	height: 50px;
	background: url(/design/Public/Images/send-btn.png) no-repeat;
	cursor: pointer;
	float: right;
	margin: 10px;
}
#main {
	width: 100%;
	position: relative;
}
</style>
</head>
<body>
	<!-- header-section-starts -->
	<div class="header-banner">
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
						<li><a href="<?php echo U("Index/Gallery",'','');?>">图集</a></li>
						<li><a class="scroll" href="#news">新闻</a></li>
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
				<h1><a href="<?php echo U("Index/Index",'','');?>">nature</a></h1>
			</div>
			<div class="header-bottom-grids text-center">
				<div class="header-bottom-grid1">
					<span class="glyphicon glyphicon-leaf"></span>					
					<h4>植树计划</h4>
				</div>
				<div class="header-bottom-grid2">
					<span class="glyphicon glyphicon-certificate"></span>
					<h4>节能环保</h4>
				</div>
				<div class="header-bottom-grid3">
					<span class="glyphicon glyphicon-tree-deciduous"></span>
					<h4>亲近自然</h4>
				</div>
				<div class="header-bottom-grid4">
					<span class="glyphicon glyphicon-screenshot"></span>
					<h4>了解更多</h4>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="services">
		<div class="container">
			<div class="services-top-grids text-center">
				<div class="secvice-top-grid-1">
					<h3>关于植树</h3>
					<p>几内亚环保部发起植树造林募捐活动</p>
					<div class="icon1">
						<i class="icon1"></i>
					</div>
				</div>
				<div class="secvice-top-grid-2">
					<h3>关于环保</h3>
					<p>周海兵：始终把环境保护作为底线工作来抓</p>
					<div class="icon1">
						<i class="icon2"></i>
					</div>
				</div>
				<div class="secvice-top-grid-3">
					<h3>自然风光</h3>
					<p>游天马故乡昭苏 赏高原美景赛事啊是大师的</p>
					<div class="icon1">
						<i class="icon3"></i>
					</div>
				</div>
				<div class="secvice-top-grid-4">
					<h3>更多</h3>
					<p>更多新闻。。。。阿手动发手动阀</p>
					<div class="icon1">
						<i class="icon4"></i>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="services-bottom-grids">
				<div class="col-md-3 services-bottom-left">
					<img src="__ROOT__/Public/images/s1.jpg" alt="" />
				</div>
				<div class="col-md-6 services-bottom-middle text-center">
					<h3>只要人人都伸出双手，尽自己的一份力量  </h3>
					<p>再大的困难都能克服，再大的灾难也能感到温暖 </p>
				</div>
				<div class="col-md-3 services-bottom-right">
					<img src="__ROOT__/Public/images/s2.jpg" alt="" />
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="items">
		<div class="container">
			<div class="col-md-4 item-1">
				<img src="__ROOT__/Public/images/i1.jpg" alt="" />
				<h3>人工种植</h3>
			</div>
			<div class="col-md-4 item-2">
				<img src="__ROOT__/Public/images/i2.jpg" alt="" />
				<h3>人工种植</h3>
			</div>
			<div class="col-md-4 item-3 text-center">
				<h4>Claritas est etiam processus dynamicus</h4>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
			<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="testimonial-info">
				<h3>环保传承</h3>
				<h5>更好的环保，带给福利的是我们的下一代</span></h5>
			</div>
			<div class="testimonial-grids">
				<div class="testimonial-grid">
					<p><span>"</span> 爱要传承下去，环保也要一代一代传承下去<span> "</span></p>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >华软</a></div>
	<!-- news -->
	<div class="news" id="news">
		<div class="container">
			<div class="news-text">
				<h3>新闻</h3>
				<h5>大自然 <span>亲近大自然</span></h5>
				<span id='send'></span>
				<br><br>
			</div>
			<div class="news-grids" id="news-grids">
				<?php if(is_array($news)): foreach($news as $key=>$v): ?><div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<a href="Single?tid=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
					<span><?php echo ($v["time"]); ?></span>
					<a class="mask" href="Single?tid=<?php echo ($v["id"]); ?>"><img src=<?php echo ($v["pic_path"]); ?> class="img-responsive zoom-img" alt="" /></a>
					<div class="news-info">
						<p><?php echo ($v["content"]); ?></p>
						<a class="button" href="Single?tid=<?php echo ($v["id"]); ?>"><img src="__ROOT__/Public/images/read.png" alt=""></a>
					</div>
				</div><?php endforeach; endif; ?>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</div>
	<div id='send-form'>
		<p class='title'><span>发布新闻</span><a href="" id='close'></a></p>
		<form action="<?php echo U('Index/handle');?>" method="post" name='wish'>
			<p>
				<label for="title">标题：</label>
				<input type="text" name='title' id='title'/>
			</p>
			<p>
				<label for="content">新闻内容：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="content" id='content'></textarea>
			</p>
			<span id='send-btn'></span>
		</form>
	</div>
	<!-- //news -->
	<!-- content-section-ends -->
	<div class="get-in-touch">
			<div class="container">
				<div class="col-md-3 gin">
					<h3>联系客服电话</h3>
					<p>080-123456</p>
					<div class="social-icons footer-icons">
						<i class="facebook"></i>
						<i class="twitter"></i>
						<i class="googlepluse"></i>
					</div>
				</div>
				<div class="col-md-3 address">
					<h3>地址</h3>
					<address>
						<p>广东省广州市从化区</p>
						<p>广从大道13号广州大学华软软件学院</p>
						<p class="phone"><span>电话号码</span> :11111111111</p>
						<span class="phone">邮箱 :xxxx@mail.com</span>
					</address>
				</div>
				<div class="col-md-6 dal">
				<form>
					<h3>发送邮件给我们</h3>
					<input type="text" name="Fname" class="text" value="姓" onfocus="if(this.value == '姓')this.value = '';" onblur="if (this.value == '') {this.value = '姓';}">
					<input type="text" name="Lname" class="text" value="名" onfocus="if(this.value == '名')this.value = '';" onblur="if (this.value == '') {this.value = '名';}">
					<input type="text" name="email" class="text" value="邮箱" onfocus="if(this.value == '邮箱')this.value = '';" onblur="if (this.value == '') {this.value = '邮箱';}">
					<input type="text" name="telnum" class="text" value="电话号码" onfocus="if(this.value == '电话号码')this.value = '';" onblur="if (this.value == '') {this.value = '电话号码';}">
					<textarea name="content" onfocus="if(this.value == '内容') this.value='';" onblur="if(this.value == '') this.value='内容';" >内容</textarea>
					<input type="submit" value="发送">
				</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

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