<?php
session_start();
$errors = $_SESSION['errors'];
unset($_SESSION['errors']);

$name = $_SESSION['name'];
unset($_SESSION['name']);

$email = $_SESSION['email'];
unset($_SESSION['email']);

$content = $_SESSION['content'];
unset($_SESSION['content']);
?>

<!DOCTYPE html>
<html lang= "ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>old_Portfolio</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Cabin+Condensed:700' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/plugins.css">
<link rel="stylesheet" type="text/css" href="css/animation.css">
<link rel="stylesheet" type="text/css" href="css/drop.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="stylesheets/wave.css">
</head>

<body>
<div id="wrapper">
<!-- WRAPPER ALL -->
<div class="arlo_tm_wrapper_all">
	<div id="arlo_tm_popup_blog">
		<div class="container">
			<div class="inner_popup scrollable"></div>
		</div>
		<span class="close"><a href="#"></a></span>
	</div>
	<!-- PRELOADER -->
	<div class="opening">
			<div class="drop water"></div>
			<div class="spinner"></div>
	</div>
	<!-- /PRELOADER -->

	<!-- MOBILE MENU -->
	<div class="arlo_tm_mobile_header_wrap">
		<div class="main_wrap">
			<div class="logo">
				<a class="white clicked">
				<img src="img/logo/coffee.png">
				<i class="fas fa-music fa-3x"></i>
				<audio src="music/aruharetahinoumi.mp3" id="music" preload="auto" loop>
					<source src="music/aruharetahinoumi.mp3" type="audio.mp3">
					<source src="music/morionagarerukawa.mp3" type="audio.mp3">
					<source src="music/tenshinoyume.mp3" type="audio.mp3">
				</audio>
				</a>
			</div>
			<div class="arlo_tm_trigger">
				<div class="hamburger hamburger--collapse-r">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="arlo_tm_mobile_menu_wrap">
   			<div class="mob_menu">
				<ul class="anchor_nav">
					<li class="mob_link"><a href="#home">Home</a></li>
					<li class="mob_link"><a href="#about">About</a></li>
					<li class="mob_link"><a href="#skill">Skill</a></li>
					<li class="mob_link"><a href="#services">Services</a></li>
					<li class="mob_link"><a href="#portfolio">Portfolio</a></li>
					<li class="mob_link"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /MOBILE MENU -->

    <!-- CONTENT -->
	<div class="arlo_tm_content">

		<!-- LEFTPART -->
		<div class="arlo_tm_leftpart_wrap">
			<div class="leftpart_inner">
				<div class="logo_wrap">
					<a class="white clicked">
						<img  src="img/logo/coffee.png">
						<i class="fas fa-music fa-3x"></i>
						<audio src="music/aruharetahinoumi.mp3" id="music" preload="auto" loop>
							<source src="music/aruharetahinoumi.mp3" type="audio.mp3">
							<source src="music/morionagarerukawa.mp3" type="audio.mp3">
							<source src="music/tenshinoyume.mp3" type="audio.mp3">
						</audio>
					</a>
				</div>
				<div class="menu_list_wrap">
					<ul class="anchor_nav">
						<li ><a class="home-link" href="#home">Home</a></li>
						<li ><a class="about-link" href="#about">About</a></li>
						<li ><a class="skill-link" href="#skill">Skill</a></li>
						<li ><a class="services-link" href="#services">Services</a></li>
						<li ><a class="portfolio-link" href="#portfolio">Portfolio</a></li>
						<li ><a class="contact-link" href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /LEFTPART -->

		<!-- RIGHTPART -->
		<div class="arlo_tm_rightpart">
			<div class="rightpart_inner">
				<div class="arlo_tm_section" id="home">
					<div class="arlo_tm_hero_header_wrap">
						<div class="arlo_tm_ripple_wrap" id="ripple">
							<div class="overlay"></div>
							<div class="inner_content">
								<div class="name_holder wave">
									<span class="title-click">Welcome to My Website</span>
									<span class="title-name">Portfolio</span>
								</div>
								<div class="text_typing">
										<p class="cd-headline clip is-full-width">
											<span class="cd-words-wrapper">
												<b class="is-visible">Nice to Meet you.</b>
												<b>My name is Akihiro.</b>
												<b>My hobby is Camp.</b>
												<b>Please Visit My Website.</b>
											</span>
										</p>
								</div>
							</div>
							<div class="arlo_tm_arrow_wrap bounce anchor">
								<a href="#about"><i class="xcon-angle-double-down"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div id="video" class="video-wrapper">
					<video class="video1" src="video/mary1.mp4" ></video>
					</div>
				<!-- ABOUT -->
				<div class="arlo_tm_section relative" id="about">
					<div class="arlo_tm_about_wrapper_all animate" >
						<div class="container">
							<div class="arlo_tm_title_holder" data-delighter>
								<h3>About Me</h3>
							</div>
							<div class="arlo_tm_about_wrap">
								<div class="author_wrap">
									<div class="leftbox" data-delighter>
										<div class="about_image_wrap parallax" data-relative-input="true">
											<ul class="image layer photos" data-depth="0.1">
													<li><a href="javascript:void(0);"><img class="photo photo1" src="img/about/c1.jpg" alt="キャンプ画像1" /></a></li>
													<li><a href="javascript:void(0);"><img class="photo photo2" src="img/about/c2.jpg" alt="キャンプ画像1" /></a></li>
													<li><a href="javascript:void(0);"><img class="photo photo3" src="img/about/c3.jpg" alt="キャンプ画像1" /></a></li>
													<li><a href="javascript:void(0);"><img class="photo photo4" src="img/about/c4.jpg" alt="arduino画像" /></a></li>
													<li><a href="javascript:void(0);"><img class="photo photo5" src="img/about/c5.jpg" alt="囲碁" /></a></li>
													<li><a href="javascript:void(0);"><img class="photo photo6" src="img/about/c6.jpg" alt="ヨーヨー" /></a></li>
												</ul>
										</div>
									</div>
									<div class="rightbox">
										<div class="arlo_tm_mini_title_holder" data-delighter>
											<h4>福岡在住でプログラミングを独学中</h4>
										</div>
										<div class="definition" data-delighter>
											<p>
											アーネストキャリアでWebデザインとコーディングを学習しております。
											</p>
										</div>
										<div class="about_short_contact_wrap animate">
											<ul class="about-list" data-delighter>
												<li>
														<div id="address" class="d">住所</div>
													<span><label><a href="https://goo.gl/maps/xTjjwnGU9jkjoQ1M7" target="_blank"><img class="about-img address" src="https://img.icons8.com/ultraviolet/40/000000/marker.png"></a></label><div class="br_sp about_img"></div><a href="https://goo.gl/maps/xTjjwnGU9jkjoQ1M7" target="_blank"> <p>福岡県</p></a></span>
												</li>
												<li>
														<div id="academic" class="d">学歴</div>
													<span><label><img class="about-img academic" src="https://img.icons8.com/office/40/000000/student-male.png"></label> <div class="br_sp about_img"></div><p>IT系専門学校(３年コース)卒業</p></span>
												</li>
												<li>
														<div id="hobby" class="d">趣味</div>
													<span><label><img class="about-img hobby" src="https://img.icons8.com/office/40/000000/teddy-bear.png"></label><div class="br_sp about_img"></div> <p>キャンプ、グッズ収集, 囲碁</p></span>
												</li>
												<li><div id="mails" class="d">メール</div>
													<span><label><a href="mailto:cabomarin2@gmail.com" target="_blank"><img class="about-img mails" src="https://img.icons8.com/plasticine/53/000000/important-mail.png"></a></label> <a href="mailto:cabomarin2@gmail.com"><p class="last-label">cabomarin2&#64;gmail.com</p></a></span>
												</li>
											</ul>
										</div>
										<div class="buttons_wrap animate">
											<ul>
												<li class="anchor" data-delighter>
													<a href="#contact"><span>お問い合わせは<div class="br_sp br_button"></div>コチラ</span></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /ABOUT -->

				<!-- SKILLS -->
				<div class="arlo_tm_section">
					<div class="arlo_tm_skills_wrap" >
						<div class="container px-0">
							<h1 id="skill" class="skill-page text-center mb-4" data-delighter>Skill</h1>
							<h3 class="skill-h3 text-center text-white mb-5">プログラミング歴: 3ヶ月</h3>
							<div class="row">
							<div class="skill col-md-6 col-lg-4 mx-lg-2 pb-2" data-delighter>
								<div class="skill-img text-center">
										<img class="lang html" data-delighter src="https://img.icons8.com/color/100/000000/html-5.png">
								</div>
								<div class="title text-muted mx-auto pb-2">
								<h3 class="skill-title text-center py-3">HTML5/CSS3</h3>
									<p class="skill-d">
										デザインからのズレを排除したコーディングを行います。
										Flexboxを使用し、動的な操作デザインを崩すことなくレスポンシブ対応が出来ます。
									</p>
								</div>
							</div>
							<div class="skill  col-md-6 col-lg-4 mx-lg-2 pb-2" data-delighter>
									<div class="skill-img text-center">
										<img class="lang bs" data-delighter src="https://img.icons8.com/color/100/000000/bootstrap.png">
									</div>
									<div class="title text-muted mx-auto pb-2">
											<h3 class="skill-title text-center boot py-3">BootStrap</h3>
											<p class="skill-d">
												グリッド機能やナビバーやアラート機能を実装できます。
											また、画面幅の変更も可能ですので、お客様の指定したレスポンシブ幅に対応出来ます。</p>
									</div>
							</div>
							<div class="skill  col-md-6 col-lg-3 mx-lg-2 pb-2" data-delighter>
									<div class="skill-img text-center">
											<svg class="lang  jq" data-delighter xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
											width="100" height="100" viewBox= "0 0 192 192" style=" fill:#000000;">
											<g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#3498db"><g id="surface1"><path d="M114.69,11.55c-0.405,0.06 -0.81,0.18 -1.2,0.36c-3.3,1.635 -7.05,6.495 -7.77,7.455c-0.045,0.06 -0.09,0.12 -0.12,0.18c-3.705,5.55 -5.685,12.045 -5.76,18.81c-0.045,5.07 0.945,10.095 2.955,14.94c4.68,11.235 14.4,20.535 25.965,24.885c0.39,0.135 0.765,0.27 1.44,0.51c0.06,0.03 0.63,0.21 0.72,0.225l0.42,0.15c0.6,0.195 1.215,0.39 1.815,0.51c3.045,0.615 6.015,0.96 8.805,1.05c0.48,0 0.96,0.015 1.44,0.015c21.045,0 29.205,-14.85 31.92,-19.8c0.27,-0.48 0.465,-0.87 0.645,-1.11c0,-0.015 0,-0.015 0.015,-0.03c1.185,-1.755 0.735,-4.14 -1.02,-5.34c-1.74,-1.185 -4.125,-0.735 -5.325,1.02h-0.015c-5.61,8.265 -15.21,10.77 -28.515,7.47c-0.99,-0.24 -2.07,-0.615 -3.03,-0.975c-1.26,-0.45 -2.52,-0.975 -3.69,-1.545c-2.325,-1.155 -4.515,-2.535 -6.495,-4.065c-11.7,-9.075 -16.275,-27.96 -9.435,-38.865c0.915,-1.455 0.75,-3.345 -0.405,-4.62c-0.87,-0.96 -2.13,-1.395 -3.36,-1.23zM80.67,19.2c-0.87,-0.015 -1.755,0.27 -2.475,0.87c-5.805,4.725 -11.745,12.465 -12,12.78c-0.03,0.06 -0.06,0.105 -0.105,0.165c-10.5,15.285 -11.295,37.035 -2.01,55.41c1.455,2.91 3.105,5.685 4.86,8.235l0.525,0.75c1.485,2.175 3.15,4.635 5.28,6.555c0.735,0.84 1.53,1.65 2.31,2.43l0.375,0.39l0.315,0.315c0.795,0.765 1.605,1.545 2.445,2.295h0.015c0.06,0.09 0.15,0.15 0.225,0.225c0.945,0.84 1.905,1.635 3.18,2.64l0.345,0.255c0.99,0.795 1.995,1.545 3.03,2.28c0.105,0.075 0.21,0.15 0.315,0.225c0.36,0.24 0.72,0.465 1.08,0.72l0.36,0.24l0.42,0.27c0.765,0.51 1.515,0.975 2.58,1.59c0.69,0.42 1.425,0.84 1.905,1.08c0.21,0.12 0.435,0.24 0.96,0.525l1.17,0.615c0.06,0.03 0.33,0.15 0.39,0.18c0.765,0.39 1.56,0.765 2.355,1.125l1.215,0.54c0.795,0.345 1.605,0.675 2.595,1.05l0.45,0.165c0.03,0.03 0.405,0.165 0.435,0.18c0.72,0.255 1.455,0.51 2.19,0.75l1.68,0.555c0.84,0.285 1.815,0.615 2.88,0.795c5.235,0.87 10.32,1.32 15.135,1.32c0.57,0 1.14,-0.015 1.695,-0.015c42.39,-0.93 53.415,-36.945 53.52,-37.305c0.525,-1.815 -0.33,-3.75 -2.04,-4.56c-1.71,-0.81 -3.75,-0.24 -4.815,1.32c-10.74,15.69 -31.05,22.32 -51.735,16.86c-0.96,-0.24 -1.89,-0.51 -3.045,-0.885c-0.195,-0.06 -0.36,-0.12 -0.675,-0.24c-0.675,-0.21 -1.335,-0.435 -2.085,-0.72l-1.065,-0.405c-0.615,-0.24 -1.23,-0.48 -1.98,-0.81l-0.495,-0.225c-0.915,-0.39 -1.8,-0.825 -2.595,-1.215l-2.19,-1.14c-0.495,-0.24 -0.93,-0.51 -1.605,-0.915l-0.375,-0.21l-0.375,-0.225c-0.555,-0.33 -1.11,-0.675 -1.62,-1.035l-0.36,-0.225c-0.03,-0.015 -0.33,-0.225 -0.36,-0.255c-0.45,-0.285 -0.885,-0.57 -1.305,-0.84c-0.93,-0.66 -1.845,-1.35 -2.91,-2.19l-0.42,-0.345c-9.9,-7.905 -17.22,-18.465 -20.655,-29.79c-3.195,-10.395 -0.825,-24 6.345,-36.39c0.93,-1.605 0.585,-3.645 -0.84,-4.845c-0.705,-0.6 -1.575,-0.915 -2.445,-0.915zM38.415,30.72c-0.915,0 -1.845,0.33 -2.58,0.99c-7.335,6.585 -12.825,15.12 -13.425,16.095c-15.69,22.845 -12.66,58.35 -1.89,80.055c0.21,0.45 0.435,0.885 0.66,1.32l0.15,0.24c0.195,0.435 0.42,0.885 0.495,0.975c0.12,0.285 0.3,0.6 0.375,0.69c0.18,0.375 0.36,0.705 0.69,1.275l1.23,2.115c0.18,0.285 0.36,0.585 0.42,0.69c0.24,0.39 0.495,0.795 0.75,1.2l0.6,0.96c0.18,0.285 0.36,0.54 0.48,0.69c0.6,0.93 1.2,1.86 1.86,2.745c0.03,0.045 0.06,0.075 0.09,0.105l0.24,0.33c0.54,0.78 1.095,1.53 1.59,2.145l2.19,2.775c0.03,0.03 0.27,0.315 0.285,0.345l0.315,0.36c0.66,0.81 1.365,1.62 2.07,2.4c0.105,0.12 0.21,0.225 0.315,0.345c0.675,0.735 1.365,1.47 2.085,2.235l0.69,0.66c0.57,0.6 1.14,1.185 1.74,1.74c0,0.015 0.285,0.285 0.285,0.285l0.6,0.555c0.72,0.69 1.47,1.38 2.04,1.86c0.03,0.045 0.57,0.51 0.615,0.54c0.705,0.63 1.41,1.23 2.13,1.815l3.675,2.91c0.615,0.45 1.245,0.9 1.965,1.425c0.24,0.18 0.495,0.36 0.75,0.525c0.105,0.09 0.225,0.18 0.3,0.225l2.76,1.845c1.005,0.66 2.01,1.275 3.24,2.01l0.66,0.375c0.765,0.45 1.545,0.9 2.28,1.29c0.435,0.24 0.87,0.45 1.245,0.645c0.525,0.285 1.095,0.6 1.965,1.02c0.075,0.045 0.69,0.345 0.765,0.375c0.87,0.435 1.755,0.84 2.865,1.335c0,0.015 0.36,0.18 0.36,0.18c1.02,0.435 2.01,0.855 3.315,1.38c0.21,0.09 0.42,0.165 0.465,0.18c0.93,0.36 1.905,0.72 2.7,1.005c0.075,0.03 0.48,0.195 0.555,0.225c1.065,0.36 2.115,0.705 3.465,1.125c0.225,0.075 0.465,0.15 0.495,0.15l0.765,0.24c0.93,0.285 1.86,0.585 2.865,0.78c7.14,1.305 14.115,1.98 20.715,1.98h0.015c55.005,0 72.525,-44.265 72.705,-44.715c0.675,-1.785 -0.06,-3.795 -1.74,-4.725c-1.65,-0.915 -3.75,-0.48 -4.92,1.035c-14.115,18.585 -40.74,25.485 -71.22,18.48c-0.735,-0.18 -1.485,-0.39 -2.22,-0.615l-1.44,-0.435c-0.975,-0.3 -1.95,-0.63 -2.895,-0.96c-0.015,0 -0.45,-0.165 -0.45,-0.165c-0.84,-0.285 -1.68,-0.615 -2.415,-0.9l-0.84,-0.33c-0.93,-0.375 -1.86,-0.765 -2.76,-1.17l-0.525,-0.225c-0.81,-0.375 -1.59,-0.735 -2.37,-1.125c-0.06,-0.03 -0.675,-0.33 -0.735,-0.345c-0.54,-0.27 -1.08,-0.555 -1.77,-0.93l-3.135,-1.68c-0.315,-0.21 -0.645,-0.405 -0.96,-0.57c-0.945,-0.585 -1.92,-1.17 -2.88,-1.785c-0.225,-0.135 -0.42,-0.285 -0.795,-0.54c-0.66,-0.42 -1.305,-0.855 -2.25,-1.515l-0.375,-0.27c-0.645,-0.45 -1.275,-0.93 -1.8,-1.32c-0.33,-0.24 -0.66,-0.51 -1.2,-0.915c-0.48,-0.375 -0.96,-0.735 -1.41,-1.095l-0.84,-0.69c-0.705,-0.57 -1.365,-1.17 -2.055,-1.755c-0.09,-0.09 -0.165,-0.15 -0.27,-0.225c-0.765,-0.705 -1.545,-1.41 -2.475,-2.295l-2.715,-2.7c-0.66,-0.675 -1.32,-1.365 -2.07,-2.19c-0.69,-0.765 -1.35,-1.53 -2.235,-2.58l-1.62,-1.98c-0.195,-0.285 -0.405,-0.57 -0.66,-0.87c-0.555,-0.75 -1.11,-1.485 -1.665,-2.265c-14.94,-20.58 -18.84,-63.54 -7.2,-79.275c1.17,-1.575 0.96,-3.795 -0.51,-5.13c-0.72,-0.66 -1.65,-0.99 -2.565,-0.99z"></path></g></g></g></svg>
									</div>
									<div class="title text-muted mx-auto">
										<h3 class="skill-title query text-center py-3">jQuery</h3>
										<p class="skill-d">
											ライブラリを用いて簡単なアニメーションを作成できます。
												今回は水をテーマにアニメーションを実装しました。
										</p>
									</div>
							</div>
							<div class="skill  col-md-6 col-lg-4 mx-lg-2 pb-2" data-delighter>
									<div class="skill-img text-center">
										<img class="js lang" data-delighter src="https://img.icons8.com/ios/100/000000/javascript-logo.png">
									</div>
									<div class="title text-muted mx-auto py-3">
										<h3 class="skill-title jsc text-center py-3">JavaScript</h3>
										<p class="skill-d">
											主にjQueryがメインですが、JavaScriptで動的に操作することが出来ます。</p>
									</div>
							</div>
							<div class="skill  col-md-6 col-lg-4 mx-lg-2 pb-2" data-delighter>

									<div class="skill-img text-left px-2">
											<i class="fab fa-sass fa-6x lang sass px-4 py-1" data-delighter></i>
										</div>
									<div class="title text-muted mx-auto py-4">
											<h3 class="skill-title  sass-t text-center py-3">Sass</h3>
											<p class="skill-d">
											Sassを導入し、CSSのコーディングを効率化できます。
											Koalaを使用し、トップページテキスト内の波の表現を作成しました。
										</p>
									</div>
							</div>
							<div class="skill  col-md-6 col-lg-3 mx-lg-1 pb-2" data-delighter>
									<div class="skill-img text-center pb-3">
										<img class="php lang" data-delighter src="https://img.icons8.com/office/100/000000/php-logo.png">
									</div>
									<div class="title text-muted mx-auto">
											<h3 class="skill-title php-t text-center py-3">PHP</h3>
											<p class="skill-d ">
											Sassを導入し、CSSのコーディングを効率化できます。
												Koalaを使用し、トップページテキスト内の波の表現を作成しました。</p>
									</div>
							</div>
							</div>
						</div>
						</div>
					</div>
				</div>
				<!-- /SKILLS -->

				<!-- SERVICES -->
				<div class="arlo_tm_section" >
					<div class="arlo_tm_services_wrap">
						<div class="container">
							<div  class="arlo_tm_title_holder animated" data-animate="bounce" >
								<h3 id="services">Services</h3>
							</div>
							<div class="list_wrap">
								<ul>
									<li>
										<div class="inner text-center card">
											<div class="icon">
												<img class="svg animated" data-animate="flip" src="https://img.icons8.com/cotton/100/000000/web-design.png" alt="" />
											</div>
											<div class="title_service">
												<h3 class="text-danger">ランディングページ(LP)作成</h3>
											</div>
											<div class="text">
												<h4 class="h5 text-warning">料金目安：30000円～</h4>
												<p class="text-left">
													レスポンシブ対応のランディングページを制作致します。
													お客様からのご希望をお伺いし、イメージに合ったデザインをご提案させていただきます。</p>
											</div>
										</div>
									</li>
									<li>
										<div class="inner text-center card">
											<div class="icon">
												<img class="svg animated" data-animate="flip" src="https://img.icons8.com/dusk/100/000000/media-queries.png" alt="" />
											</div>
											<div class="title_service">
												<h3 class="text-danger">レスポンシブ対応</h3>
											</div>
											<div class="text">
												<h4 class="h5 text-warning">料金目安：10000円～</h4>
												<p class="text-left">お客様の既存のWebページに修正を加え、
													フレキシブル（動的）なレスポンシブデザインを製作致します。
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="inner text-center card">
											<div class="icon">
												<img class="svg animated" data-animate="flip" src="https://img.icons8.com/dusk/100/000000/maintenance.png" alt="" />
											</div>
											<div class="title_service">
												<h3  class="text-danger">メンテナンス・運用サポート</h3>
											</div>
											<div class="text">
												<h4 class="h5 text-warning">料金目安：応相談</h4>
												<p class="text-left">完成したWebページについて、コンテンツ・ページの差し替え・追加などを承り、
													 サイトの運用・更新のサポートをいたします。</p>
											</div>
										</div>
									</li>
									<li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /SERVICES -->
				<!-- PORTFOLIO -->
				<div class="arlo_tm_section relative" >
					<div class="arlo_tm_portfolio_wrapper_all">
						<div class="arlo_tm_second_portfolio">
						<div class="container">
							<div class="arlo_tm_portfolio_wrap">
								<div  class="arlo_tm_title_holder portfolio">
									<h3 id="portfolio">Portfolio</h3>
								</div>
								<div class="arlo_tm_portfolio_titles"></div>
								<ul class="arlo_tm_portfolio_filter">
									<li><a href="#" class="current" data-filter="*">Deliverable</a></li>
									<li><a href="#" data-filter=".lp">Lading Page</a></li>
									<li><a href="#" data-filter=".hp">Home Page</a></li>
									<li><a href="#" data-filter=".sd">study</a></li>
								</ul>
								<ul class="arlo_tm_portfolio_list gallery_zoom">
									<li class="lp">
										<div class="entry arlo_tm_portfolio_animation_wrap thumbnail" data-category="lp">
												<img src="img/portfolio/isara.png" alt="" />
												<div class="port port1" data-url="https://ak-portfolio.github.io/isara/">isara.life模写制作LP</div>
												<div class="port port2" data-url="https://isara.life/">元サイト様：iSARAバンコクのノマドエンジニア育成講座</div>
										</div>
									</li>
									<li class="hp">
										<div class="entry arlo_tm_portfolio_animation_wrap thumbnail" data-category="hp">
												<img src="img/portfolio/airbnb1.png" alt="" />
												<div class="port port1" data-url="https://ak-portfolio.github.io/airbnb1/">Airbnb.gift模写制作HP</div>
												<div class="port port2" data-url="https://www.airbnb.jp/gift">元サイト様：現地の人から借りる家、体験＆スポット – Airbnb</div>
										</div>
									</li>
									<li class="hp">
										<div class="entry arlo_tm_portfolio_animation_wrap thumbnail" data-category="hp">
												<img src="img/portfolio/airbnb2.png" alt="" />
												<div class="port port1" data-url="https://ak-portfolio.github.io/airbnb2/">Airbnb.homes模写制作HP</div>
												<div class="port port2" data-url="https://www.airbnb.jp/gift">元サイト様：Airbnbでお家、アパート、お部屋をシェアしよう</div>
										</div>
									</li>
									<li class="sd">
										<div class="entry arlo_tm_portfolio_animation_wrap thumbnail" data-category="sd">
												<img src="img/portfolio/dotinstall.png" alt="" />
												<div class="port port1" data-url="https://ak-portfolio.github.io/bootstrap_dotinstall/">ドットインストール講座</div>
												<div class="port port2" data-url="https://dotinstall.com/lessons/basic_twitter_bootstrap_v5">元サイト様：Bootstrap 4入門</div>
										</div>
									</li>
									<li class="sd">
										<div class="entry arlo_tm_portfolio_animation_wrap thumbnail" data-category="sd">
												<img src="img/portfolio/boot1.png" alt="" />
												<div class="port port1" data-url="https://ak-portfolio.github.io/bootstrap1/">BootStrap講座</div>
												<div class="port port2" data-url="https://www.youtube.com/watch?v=9cKsq14Kfsw&feature=youtu.be">元サイト様：Responsive Bootstrap Website Start To Finish with Bootstrap 4</div>
										</div>
									</li>
									<li class="sd">
										<div class="entry arlo_tm_portfolio_animation_wrap thumbnail"  data-category="sd">
												<img src="img/portfolio/boot2.png" alt="" />
												<div class="port port1" data-url="https://ak-portfolio.github.io/bootstrap2/">BootStrap2講座</div>
												<div class="port port2" data-url="https://www.youtube.com/watch?v=V_lAhqLXT9A&feature=youtu.be">元サイト様：Build A Complete HTML & CSS Website with Bootstrap 4</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
				<!-- /PORTFOLIO -->


				<!-- CONTACT & FOOTER -->
				<div class="arlo_tm_section" >
					<div  class="container">
						<div class="arlo_tm_title_holder contact">
							<h3 id="contact">Contact</h3>
						</div>
					</div>
					<div class="arlo_tm_footer_contact_wrapper_all">
						<div class="arlo_tm_contact_wrap_all">
							<div class="container">
								<div class="rightbox">
									<div class="arlo_tm_contact_wrap">
										<div class="main_input_wrap">
											<form action="php/confirm.php" method="post" class="contact_form" id="contact_form">
												<div class="wrap">
													<input class="contact__name-form" id="name" type="text" placeholder="お名前" name="name" value="<?= htmlspecialchars($name); ?>">
													<?php if (!empty($errors['name'])): ?>
													<?php foreach($errors['name'] as $error): ?>
														<p class="contact__error"><?= htmlspecialchars($error); ?></p>
													<?php endforeach ?>
												<?php endif; ?>
												</div>
												<div class="wrap">
													<input class="contact__email-form" id="email" type="text" placeholder="メールアドレス" name="email" value="<?= htmlspecialchars($email); ?>">
													<?php if (!empty($errors['email'])): ?>
			                        <?php foreach ($errors['email'] as $error): ?>
			                            <p class="contact__error"><?php echo htmlspecialchars($error); ?></p>
			                        <?php endforeach ?>
			                    <?php endif; ?>
												</div>
												<div class="contact__content">
												<textarea name="content" class="content" rows="5" cols="100" class="contact__content-form"
																	placeholder="お問い合わせ内容 ※1000文字以内"><?php echo htmlspecialchars($content); ?></textarea>
														<?php if (!empty($errors['content'])): ?>
																<?php foreach ($errors['content'] as $error): ?>
																		<p class="contact__error"><?php echo htmlspecialchars($error); ?></p>
																<?php endforeach ?>
														<?php endif; ?>
												</div>
												<div class="contact__action-btn">
				                    <button class="contact_btn" type="submit">お問い合わせ確認画面へ</button>
				                </div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="arlo_tm_footer_wrap">
							<div class="container">
								<p>&copy; Copyright 2019. By Mary All Rights are Reserved.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /CONTACT & FOOTER -->
			</div>
		</div>
		<!-- /RIGHTPART -->
		<a class="arlo_tm_totop" href="#"></a>
	</div>
	</div>
<!-- / WRAPPER ALL -->
<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ・・・></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ・・・></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/init.js"></script>
<script src="js/animation.js"></script>
<script src="js/delighters.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.animateCssPlus.js"></script>
<script src="js/main.js"></script>
<!-- /SCRIPTS -->

<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
</script>
</body>
</html>
