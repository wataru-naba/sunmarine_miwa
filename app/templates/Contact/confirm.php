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

<div class="eyecatch">
	<img src="./images/contact_main.jpg" class="eyecatch__img contact">
</div>

<h1 class="t1">お問い合わせ</h1>

<section class="contents">

<div class="w-800">

<?= $this->Form->create($contact,['id'=>"mail_form"]);?>

    <?= $this->Form->control('confirm',['label'=>false,'type'=>'hidden','value'=>'send'])?>
	<div class="formBox">
		<dl class="form">
			<dt class="form__name">お名前</dt>
			<dd class="form__input">
				<?= $this->request->getData('name')?>
				<?= $this->Form->control('name',['label'=>false,'type'=>'hidden'])?> 
			</dd>
			<dt class="form__name">メールアドレス</dt>
			<dd class="form__input">
				<?= $this->request->getData('email')?>
				<?= $this->Form->control('email',['label'=>false,'type'=>'hidden'])?> 
			</dd>
			<dt class="form__name">電話番号</dt>
			<dd class="form__input">
				<?= $this->request->getData('tel')?>
				<?= $this->Form->control('tel',['label'=>false,'type'=>'hidden'])?> 
			</dd>
			<dt class="form__name">お問い合わせ内容</dt>
			<dd class="form__input">
				<?= nl2br($this->request->getData('info'))?>
				<?= $this->Form->control('info',['label'=>false,'type'=>'hidden'])?> 
			</dd>
			<dt class="form__name">個人情報の取扱い</dt>
			<dd class="form__input">
				同意する
			</dd>
		</dl>
		
	</div>
	<div class="w-300"><button type="submit" class="f-btn">送信する</button></div>
</form>

<div class="contact mt-20">
	<p class="contact__desc">ご入居・デイサービス・施設見学に関するご相談、お問い合わせはお電話でも受け付けております。</p>
	<div class="contact__tel"><img src="./images/icon_tel.svg" width="25"><span class="tel">0982-50-6517</span></div>
	<div class="contact__time">営業時間： 8:00 - 17:00</div>
	<div class="contact__address">〒883-0022 日向市平岩448</div>
</div>

</div>

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