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

    <?= $this->Form->control('confirm',['label'=>false,'type'=>'hidden','value'=>'confirm'])?>
	<div class="formBox">
		<dl class="form">
			<dt class="form__name">お名前</dt>
			<dd class="form__input"><input type="text" name="name" class="f-text"></dd>
			<dt class="form__name">メールアドレス</dt>
			<dd class="form__input"><input type="email" name="email" class="f-text"></dd>
			<dt class="form__name">電話番号</dt>
			<dd class="form__input"><input type="tel" name="tel" class="f-text"></dd>
			<dt class="form__name">お問い合わせ内容</dt>
			<dd class="form__input"><textarea name="info" id="" class="f-textarea h-200"></textarea></dd>
		</dl>
		<div class="privacy">
			<div class="privacy__inner">
				<div class="privacy__title">個人情報の取扱いについて</div>
				<div class="privacy__cnt">
                株式会社 美和（以下、「当社」）の運営する当ホームページ（以下、「当サイト」）では、各種サービスのご提供にあたり、お客様の個人情報をお預かりしております。<br/>
                当サイトのご利用者からお預かりする個人情報については、個人情報保護法に則り、全て厳重な管理の下で適切に取り扱います。<br/>
                1.個人情報の取得について<br/>
                お客様の個人情報の適切な取扱い及び保護が、当社にとっての社会的責務であると考えております。 当社は、当社が取得する個人情報を、この個人情報の保護に関する基本方針に基づき、適切に取扱い、保護に努めます。<br/>
                2.個人情報の収集について<br/>
                お客様がお申込やお問い合わせをするにあたり、入力フォームなどの形態でお客様の個人情報の提供をお願いする場合があり、お客様のご同意を頂いた上で個人情報の収集を行います。<br/>
                3.個人情報の利用について<br/>
                お客様にご提供いただいた情報は、商品を発送する、もしくはお問い合わせなどに対して必要な連絡を行う場合にのみ利用させて頂きます。<br/>
                また、ご興味あると思われる情報について電子メール、その他の方法で当社からのお知らせが届くことがございますが、このようなお知らせについては、お客様からのお申し出があれば以後の情報の配信を停止いたします。<br/>
                4.個人情報の保護について<br/>
                お客様の個人情報の第三者への提供について当社がお客様から収集させて頂いた個人情報は、以下の何れかに該当する場合を除き、第三者に提供することはありません。 お客様の事前の同意・承諾を得た場合。<br/>
                商品の注文等で決済や商品の配送などが必要な場合。<br/>
                これらの委託先については、個人情報の保護管理運営において十分に信用が置ける企業に限定し適切に管理・運営を実施いたします。<br/>
                その他法令等により提供が必要な場合。<br/>
                5.個人情報の開示、訂正、追加、利用停止、消去<br/>
                当社に保有されているお客様の個人情報について、お客様ご自身が、開示、訂正、追加、利用停止、消去の各請求を要望される場合は、当社まで直接ご請求ください。<br/>
                当該ご請求がお客様ご自身によるものであることが確認できた場合に限り、法令の定めに基づき遅滞なくお客様の個人情報の開示、訂正、利用停止、消去を行います。<br/>
                尚、その場合には、当社が提供するサービスをご利用いただけませんので、ご了解ください。
				</div>
			</div>
		</div>
		<div class="al-c">
			<div class="f-checkbox"><input type="checkbox" name="privacy" required id="agree"><label for="agree">個人情報の取扱いに同意する</label></div>
		</div>
	</div>
	<div class="w-300"><button type="submit" class="f-btn">確認画面へ</button></div>
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