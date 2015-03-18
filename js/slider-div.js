$(document).ready(function(){
    $('.slide:first').css('display','block');
    $('.point#'+$('.slide:first').attr('id')).addClass('active');

    $('.slide-point .point').click(function(){

        var slideId=$(this).attr('id');
        $('.slide#'+slideId).css('left','1210px');
        var curSlideId=$('.slide:visible').attr('id');
        $('.point#'+curSlideId).removeClass('active');
        $('.slide:visible').animate({
            left: "-1200px"
        },
        "slow",
        function(){
            $('.slide:visible').css('display','none');
            $('.slide#'+slideId).css('display','block');
            $('.point#'+slideId).addClass('active');
            $('.slide#'+slideId).animate({
                    left: "0px"
                },
                "slow");

        });
    });

    $('.slide-point .point').each(function(e){
        setTimeout(function(){
            var slideIdT=$(e).attr('id');
            alert(slideIdT);
        }, 3000);
    });
});