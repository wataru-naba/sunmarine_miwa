//------------------------------
//UA
//------------------------------

var ua = navigator.userAgent;
var ua_flag;
if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0) && (ua.indexOf('Mobile') > 0) || ua.indexOf('Windows Phone') > 0) {
	ua_flag = 'sp';
}else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
	ua_flag = 'tb';
}else{
	ua_flag = 'pc';
}

//------------------------------
//ページの先頭
//------------------------------

var pagetop = $('.pagetop');
$(window).scroll(function() {
	if($(this).scrollTop() > 300) {
		pagetop.fadeIn(500);
	} else {
		pagetop.fadeOut(500);
		setTimeout(function(){
			pagetop.removeClass('active');
		}, 400);
	}
});
pagetop.click(function() {
	window.scrollTo ({
		top: 0,
		behavior: 'smooth'
	})
});

//------------------------------
//電話番号
//------------------------------

if(ua_flag == 'sp') {
	$('.tel').each(function(){
		var telnum = $(this).text();
		$(this).html(
			telnum.replace(telnum,'<a href="tel:' + telnum + '">' + telnum + '</a>')
		);
	});
}

//------------------------------
//スマホメニュー
//------------------------------

$(document).on('click', '.navb-wrap',function() {
	$('.navb_wrap, .navb').stop().toggleClass('active');
	$('.header__nav').stop().fadeToggle(300);
});