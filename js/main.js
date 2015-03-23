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

    $('#askButton').click(function(){
        var name=$('#askName').val();
        var tel=$('#askTel').val();
        var email=$('#askEmail').val();
        var text=$('#askText').val();
        $.post("sendmail.php", {name: name, tel: tel, email: email, text:text});
    });

    $('.get_consult').click(function(){
        $('.win_get_consult').css('display','block');
    });
});

