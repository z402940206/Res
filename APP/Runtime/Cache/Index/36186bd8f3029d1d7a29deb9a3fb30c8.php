<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>About</title>
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
				<h1><a href="<?php echo U("Index/Index",'','');?>">nature</a></h1>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
 <div class="main">
    <div class="about-content text-center">
			<div class="who_we_are">
			<div class="container">
					<div class="about-top">
						<header>
							<h3>Who We Are</h3>
						</header>
						<h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur</h5>
						<p>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. </p>
					</div>
					<div class="abt_img1"><img src="__ROOT__/Public/images/w1.jpg" alt=""></div>
					<div class="abt_img2"><img src="__ROOT__/Public/images/w2.jpg" alt=""></div>
					<div class="clearfix"></div>
			</div>
		</div>
		<div class="why_choose_us">
			<div class="container">
				<div class="row">
						<header>
							<h3>Why choose Us</h3>
						</header>
					</div>
					<div class="col-md-4 whyus">
						<div>
							<span>01</span>
							<p>Maecenas molesetdbus idictum. Ut neque purus, sollic alitudin non ante ac, malesuada condimentum libero. Nunc hendrerit augue vel tempor posuere. Cras consectetur.</p>
						</div>
					</div>
					<div class="col-md-4 whyus">
						<div>
							<span>02</span>
							<p>Maecenas molesetdbus idictum. Ut neque purus, sollic alitudin non ante ac, malesuada condimentum libero. Nunc hendrerit augue vel tempor posuere. Cras consectetur.</p>
		
						</div>
					</div>
					<div class="col-md-4 whyus">
						<div>
							<span>03</span>
							<p>Maecenas molesetdbus idictum. Ut neque purus, sollic alitudin non ante ac, malesuada condimentum libero. Nunc hendrerit augue vel tempor posuere. Cras consectetur.</p>
			
						</div>
					</div>
			</div>
		</div>
		<div class="team">
		<header>
							<h3>Our Team</h3>
						</header>
		<section class="main">
			
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">
							<div class="ch-info">
								<h4>Use what you have</h4>
								<p>by Angela Duncan <a href="#">View on Dribbble</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info">
								<h4>Common Causes of Stains</h4>
								<p>by Antonio F. Mondragon <a href="#">View on Dribbble</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info">
								<h4>Pink Lightning</h4>
								<p>by Charlie Wagers <a href="#">View on Dribbble</a></p>
							</div>
						</div>
					</li>
				</ul>
				
			</section>
			</div>
    </div>
 </div>
	<!-- content-section-ends -->
	<div class="get-in-touch">
			<div class="container">
				<div class="col-md-3 gin">
					<h3>联系</h3>
					<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspeisse eget diam</p>
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