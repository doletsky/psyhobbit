$(document).ready(function(){
    $('.body-edu input[type="button"]').click(function(){
        var form=Array();
        $('.body-edu input').each(function(){
            form[form.length]=$(this).val();
        });
        $.post("../sendmail.php", {form: 'Заявка на первую ступень', name: form[0], contact: form[1]});
//        alert('Ok: '+form);
    });
});