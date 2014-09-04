(function($)
{

	// Here is the entry point for your front javascript

})(jQuery);
var noBots = false;
contactForm = $('.feedback_form');
contactForm.validate({
	rules: {
		"contact_form[name]": {
			required: true,
			minlength: 3
		},
		"contact_form[email]": {
			required: false,
			email: true
		},
		"contact_form[phone]": {
			required: true,
			minlength: 3,
			number: true
		}
//		recaptcha_response_field: {
//			required: true
//		}
	},
	messages: {
		"contact_form[name]": {
			required: 'Пожалуйста заполните поле!',
			minlength: 'Минимальная длина поля - 3 символа'
		},
		"contact_form[email]": {
			email: "Формат: name@domain.com"
		},
		"contact_form[phone]": {
			required: 'Пожалуйста заполните поле!',
			minlength: 'Минимальная длина поля - 3 символа',
			number: 'Телефон должен состоять из цифр'
		}
//		recaptcha_response_field: {
//			required: 'Пожалуйста заполните поле!'
//		}
	}
});

//Recaptcha.create("6LfBEfMSAAAAAKnF39Io9RKQ_LIo90ulFTtCcM16",
//	"my_recapcha",
//	{
//		lang : 'ru',
//		theme: "red",
//		callback: Recaptcha.focus_response_field
//	}
//);

//$('.pCat').dialog({
//	position: { my: "center", at: "center center-20%", of: window },
//	draggable: false,
//	width: 700,
//	minHeight: 200,
//	resizable: false,
//	autoOpen: false,
//	modal: true,
//	closeOnEscape: true,
//	title: "Выберите подкатегорию"
//});

$('.contactForm').dialog({
	position: { my: "center", at: "center center-10%", of: window },
	dialogClass: "contactDialog",
	draggable: false,
	width: 700,
	minHeight: 200,
	resizable: false,
	autoOpen: false,
	modal: true,
	closeOnEscape: true,
	title: "Оставьте свои контакты и мы с Вами свяжемся",
	buttons: [
		{
			text: "Отправить",
			click: function() {
				_gaq.push(['_trackEvent', 'contact', 'form_submit', , , false]);
				contactForm.submit();
//				if(contactForm.valid()) {
//					$.post('/capcha/recapcha.verify.php',
//						{ recaptcha_challenge_field: Recaptcha.get_challenge(), recaptcha_response_field: Recaptcha.get_response() },
//						function (data) {
//							if (data == 'recapcha_success') {
//								$('#botScan').val('hjk5u2s6es72cg1s9gmh7p8rs4');
//							} else {
//								alert("Пожалуйста, введите правильный проверочный код!");
//								Recaptcha.reload();
//							}
//						}
//					);
//				}
			}
		}
	]
});

$('.pCatBtn').click(function() {
	$( "#pCat_" + $(this).attr('pcatbtnid') ).dialog( "open" );
});

$('#callback_form_button').click(function() {
	$(".contactForm").dialog( "open" );
	_gaq.push(['_trackEvent', 'contact', 'button_press', , , false]);
});

$('.header_categories_menu').on('click', function(){
		$(this).children('.mainCategoryTitle').toggle(50);
		$(this).children('.cats').toggle( "slide", 200 );
	}
);

$('.categoryParent').on('click', function () {
	$(this).next('.categoryChildren').slideToggle(300);
	if ($(this).children('img').attr('src') == '/theme/images/plus.png') {
		$(this).children('img').attr('src', '/theme/images/minus.png');
	} else {
		$(this).children('img').attr('src', '/theme/images/plus.png');
	}
});

$("a.toFancy").fancybox();

$(document).ready(function () {
	sliderInterval = setInterval(sliderNext, 6000);
	$('.dm_current').parents('.categoryChildren').prev('.categoryParent').click();
	$('.dm_parent').parents('.categoryChildren').prev('.categoryParent').click();
	if ($('#productCategoryBg').length > 0) {
		if ($('#productCategoryBg').attr('catBg').length > 0) {
			$('.page_category_show').css('backgroundImage', 'url("/uploads/'+ $('#productCategoryBg').attr('catBg') +'")');
		}
	}
});

$('.leftArrow').on('click', sliderPrev);
$('.rightArrow').on('click', sliderNext);

function sliderNext () {
	$('.mainSlider').children('div:visible').fadeOut(500, function() {
		$(this).addClass('hidden');
		nextSlide = $(this).next('div');
		if(nextSlide.length == 0) {
			nextSlide = $('.mainSlider').children('div:first');
		}
		nextSlide.fadeIn(500, function() {
			$(this).removeClass('hidden');
		});
	});
	clearInterval(sliderInterval)
	sliderInterval = setInterval(sliderNext, 6000);
};

function sliderPrev () {
	$('.mainSlider').children('div:visible').fadeOut(500, function() {
		$(this).addClass('hidden');
		prevSlide = $(this).prev('div');
		if(prevSlide.length == 0) {
			prevSlide = $('.mainSlider').children('div:last');
		}
		prevSlide.fadeIn(500, function() {
			$(this).removeClass('hidden');
		});
	});
	clearInterval(sliderInterval)
	sliderInterval = setInterval(sliderNext, 6000);
};