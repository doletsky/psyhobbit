$(document).ready(function(){
    $('.slide:first').css('display','block');
    $('.point#'+$('.slide:first').attr('id')).addClass('active');

    $('.slide-point .point').click(function(){
        var speedSlide=200;
        var slideId=$(this).attr('id');

        $('.load-time').css('width','5px');
        $('.slide#'+slideId).css('left','1210px');
        var curSlideId=$('.slide:visible').attr('id');
        $('.point#'+curSlideId).removeClass('active');
        $('.slide:visible').animate({
            left: "-1200px"
        },
        speedSlide,
        function(){
            $('.slide:visible').css('display','none');
            $('.slide#'+slideId).css('display','block');
            $('.point#'+slideId).addClass('active');
            $('.slide#'+slideId).animate({
                    left: "0px"
                },
                speedSlide);

        });
    });

    /*autorun slide*/
    var speedAutorun=5000;
    var idPoint=[];
    $('.slide-point .point').each(function(){idPoint[idPoint.length]=$(this).attr('id');});
    var nextId=idPoint[0];
    function run() {
        var curId=$('.active:visible').attr('id');
        if(curId){
            for(var find=0; find<idPoint.length; find++){
                if(idPoint[find]==curId){
                    nextId=idPoint[find+1];
                    if(find==idPoint.length-1){nextId=idPoint[0];}
                }
            }
            $('.slide-point .point#'+nextId).click();
        }
        loadInFull();
        timer = setTimeout(run, speedAutorun);
    }
    function loadInFull(){
        $('.load-time').css('width','0px');
        $('.load-time').css('background-color','#ffffff');
        $('.load-time').animate({
                width: "50px"
            },
            speedAutorun-100);
    }
    loadInFull();
    var timer = setTimeout(run, speedAutorun);

    $('.slide').mouseover(function(){clearTimeout(timer);$('.load-time').css('background-color','inherit');});
    $('.slide').mouseout(function(){loadInFull();timer = setTimeout(run, speedAutorun);});



});