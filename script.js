$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('nav').addClass('black');
    }
    else
    {
        $('nav').removeClass('black');

    }
});

$(function () {
	$('.menu_open').click(function () {
		$('.nav_bar').toggleClass('.show_menu')
	})
});

$(function () {
	$('.text_nav').click(function () {
		$('.nav_bar').removeClass('.show_menu')
	})
});

$(function () {
	$('.mp').click(function () {
		$('.more_block').toggleClass('more_block')
	})
});

$(function () {
	$('.mp').click(function () {
		$('.more_block').addClass('more_block')
	})
});

$(function () {
	$('.mp').click(function () {
		$('.mp').toggleClass('arrow')
	})
});

