$(document).ready(function(){
    /*init text missiya display*/
    $('#miss').css('display','block');

    /*init scroll-style*/
    $(".text-content").niceScroll();
    $(".text-content .slide").niceScroll();

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
        $('.slide:first').css('display','block');
        $('.point#'+$('.slide:first').attr('id')).addClass('active');

    });

    $('#askButton').click(function(){
        var form=$('#askForm').val();
        var name=$('#askName').val();
        var tel=$('#askTel').val();
        var email=$('#askEmail').val();
        var text=$('#askText').val();
        $.post("sendmail.php", {form: form, name: name, tel: tel, email: email, text:text});
    });

    $('.get_consult_yet').click(function(){
        var form=$('#GCform').val();
        var name=$('#GCname').val();
        var contacts=$('#GCcontacts').val();
        var data=$('#GCdata').val();
        var time=$('#GCtime').val();
        var text=$('#GCtext').val();
        $.post("sendmail.php", {form: form, name: name, contacts: contacts, data: data, time: time, text:text});
    });

    $('.get_consult').click(function(){
        $('.win_get_consult').css('display','block');
    });
    $('.get_consult_yet').click(function(){
        $('.win_get_consult_body').css('display','none');
        $('.win_get_consult_footer').css('display','none');
        $('.win_get_consult').css('bottom','250px');
        $('.win_get_consult_after').css('display','block');
    });

    $('.close').click(function(){
        $('.win_get_consult').css('display','none');
    });

    $('.load-map').click(function(){
        $('.map').css('display','block');
        var data='<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=6HwhZb2_-iq_t0gIzHl4i8hSgHfaLX8-&width=580&height=319"></script>';
            $('.ymap').html(data);

    });
    //window.addEventListener("resize", function() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $('.person').addClass('mobil');
        $('body').addClass('m');// код для мобильных устройств
    }

    //}, false);
});

