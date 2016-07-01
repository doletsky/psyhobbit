$(document).ready(function(){
    $('.body-edu input[type="button"]').click(function(){
        var form=Array();
        $('.body-edu input').each(function(){
            form[form.length]=$(this).val();
        });
        $.post("../sendmail.php", {form: 'Заявка на первую ступень', name: form[0], contact: form[1]});
//        alert('Ok: '+form);
    });
    setInterval(function() {
//        alert('Привет');
        var sec=parseInt($('#sec span').text());
        sec--;
        if(sec<0){
            //min
            var min=parseInt($('#min span').text());
            min--;
            if(min<0){
                //hour
                var hr=parseInt($('#hr span').text());
                hr--;
                if(hr<0){
                    //ds
                    var ds=parseInt($('#ds span').text());
                    ds--;
                    if(ds<0){
                        //hour
                        $('#ds span').text('00');
                        ds=0;
                    }
                    else{
                        if(ds<10) $('#ds span').text('0'+ds);
                        else $('#ds span').text(ds);
                    }
                    if(ds>0) {
                        $('#hr span').text('23');
                        hr=23;
                    }
                    else {
                        $('#hr span').text('00');
                        hr=0;
                    }
                }
                else{
                    if(hr<10) $('#hr span').text('0'+hr);
                    else $('#hr span').text(hr);
                }
                if(hr>0) {
                    $('#min span').text('59');
                    min=59;
                }
                else {
                    $('#min span').text('00');
                    min=0;
                }
            }
            else{
                if(min<10) $('#min span').text('0'+min);
                else $('#min span').text(min);
            }
            if(min>0) {
                $('#sec span').text('59');
                sec=59;
            }
            else {
                $('#sec span').text('00');
                sec=0;
            }
        }
        else{
            if(sec<10) $('#sec span').text('0'+sec);
            else $('#sec span').text(sec);
        }
    }, 1000);
});