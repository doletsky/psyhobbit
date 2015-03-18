$(document).ready(function(){
    /*init text missiya display*/
    $('#miss').css('display','block');

    /*init scroll-style*/
    $(".text-content").niceScroll();

    $('.menu-bottom ul li').click(function(){

        $('.text .text-content').css('display','none');
        $('.slide-point').css('display','none');

        var title=$(this).text();
        var titleColor=$(this).css('background-color');
        var textBox=$(this).attr('class');
        $('.text').css('border-top-color', titleColor);
        $('.text .title').css('color', titleColor);
        $('.text .title').text(title);
        $('.text-content#'+textBox).css('display','block');
        $('.slide-point#'+textBox).css('display','block');

    });
});

