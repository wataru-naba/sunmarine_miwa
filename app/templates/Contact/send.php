<!DOCTYPE html>
<html lang="ja">
<head>
<?php if( getenv('APP_ENV') === 'default'):?>
<base href="/sunmarine_miwa/">
<?php else:?>
<base href="/">
<?php endif;?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>お問い合わせ - 株式会社 美和 | 住宅型老人ホーム サンマリン日向 /　デイサービス 美しき海 | 宮崎県日向市平岩 </title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<header class="headerWrap">
	<div class="header">
		<a href="./" class="header__logo"><img src="./images/logo.svg" alt="サンマリン日向 ／ 美しき海" width="270"></a>
		<div class="header__nav">
			<nav class="nav">
				<a href="./" class="nav__box">TOP<i class="icon-right"></i></a>
				<a href="./shisetsu.html" class="nav__box">施設案内<i class="icon-right"></i></a>
				<a href="./dayservice.html" class="nav__box">デイサービス<i class="icon-right"></i></a>
				<a href="./company.html" class="nav__box">会社概要<i class="icon-right"></i></a>
				<a href="./app/contact" class="nav__box active">お問い合わせ<i class="icon-right"></i></a>
				<a href="./news.html" class="nav__box">お知らせ<i class="icon-right"></i></a>
				<a href="./information.html" class="nav__box">情報公開<i class="icon-right"></i></a>
			</nav>
		</div>
		<div class="navb-wrap">
			<div class="navb">
				<div class="navb-inner">
					<span class="navb-bar navb-bar1"></span>
					<span class="navb-bar navb-bar2"></span>
					<span class="navb-bar navb-bar3"></span>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="newsBlock">
	<article class="article">
		
		<div class="information" style="width:fit-content; margin:40px auto; line-height:1.5;">
			<h3>お問合せありがとうございます。</h3>
			<p>お問合せいただいた内容を確認させていただきます。</p>
			<p>お問合せいただいた内容により、回答までに時間がかかる場合があります。</p>
			<p>ご了承ください。</p>
		</div>
	</article>
	<a href="./news.html" class="btn1 btn1-l">TOPへ戻る<i class="icon-left"></i></a>
</section>

<footer class="footer">
	<div class="footer__inner">
		<img src="./images/logo.svg" alt="サンマリン日向 ／ 美しき海" width="300" class="footer__logo">
		<div class="footer__address">〒883-0022　日向市平岩448</div>
		<div class="footer__copyright"><i class="icon-copyright"></i> 株式会社 美和<span> / All right reserved.</span></div>
	</div>
</footer>

<div class="pagetop">
	<div class="pagetop_inner"><i class="icon-up2"></i></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
<script src="./js/script.js"></script>

</body>
</html>